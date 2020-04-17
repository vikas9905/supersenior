<?php
  session_start();
  if(!$_SESSION['chat_id']){
      header("location:signin");
  }
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Importing bootstrap 3.0 and css -->
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
              crossorigin="anonymous">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/styled.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Custom CSS -->
        
    <style>
        h2{
            color:greenyellow;
        }
    </style>
        <title>profile</title>
    </head>
    <body>
        <?php
          include 'database_connection.php';
          $chat_id='';
          if(isset($_POST['user_id'])){
              $chat_id=$_POST['user_id'];
          }
          $sql="select * from user_data where chat_id='$chat_id'";
          $result=$conn->query($sql);
          $row=$result->fetch_assoc();
          $pic=$row['profile_pic'];
          $name=$row['name'];
          $name=$name."'s";
          $college=$row['college'];
          $year=$row['year'];
          $branch=$row['branch'];
          //echo'<div class="container"><div class="row"><img style="height:30em;width:30em" src="profile_pic/'.$pic.'"><div class="row"><p>HERE IS my profile</p></div></div></div>';
          if($pic==''){
              $pic="default.png";
          }
         $output='<div class="card mb-3">
  <img style="height:30em;width:30em" src="profile_pic/'.$pic.'" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title text-success">'.$name.' Profile</h3>
    <h5 class="card-text text-success"><strong>College:</strong>'. $college.'</h5>
         <h5 class="card-text text-success"><strong>Branch:</strong>'. $branch.'</h5>
             <h5 class="card-text text-success"><strong>Year:</strong>'. $year.'<a style="margin-left:40px" href="private_chat.php">go to dashboard</a></h5>
  </div>
</div>';
         echo$output;
          ?>
    </body>
</html>

