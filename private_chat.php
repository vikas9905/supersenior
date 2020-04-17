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
    <title>Private_chat</title>

</head>
<body>

	<!-- Top bar.....bread crumps -->

        <nav class="navbar navbar-expand-sm navbar-dark bg-success pl-5 fixed-top " id="top-navigation">
            



<!-- Welcome and Username at the right side of the Top Bar -->
<!--div id="top-navigation-username"-->
<span id="my_profile_picture"></span>

<!-- Working with the dp -->
<div id="dp_form_holder">
    
<form method="post" action="" enctype="multipart/form-data">
  <input type="file" name="file" id="file"/>
  <input type="submit" name="submit_file" id="submit_file"/>
</form>
</div>

<span style="color:white; margin-top:3px"><em>Welcome,&nbsp;</em><?php echo$_SESSION['name'];?></span>
<span style="margin-top:3px"><strong></strong></span>
<!--/div-->
        </nav>

<!-- End Of Top Bar -->

<div class="container-fluid">

	<!-- Side bar begins -->
        
    <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-right" style="width:200px;right:0;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
        <ul class="lists">
            <li><a  href="private_chat"><img src="images/dashboard.png" class="navimg img-responsive"/><span class="nav-writting">Dashboard</span></a><li>
                    <!--li><a href="General_Message/General_Message.php"><img src="images/chat-1.png" class="navimg img-responsive" /><span class="nav-writting">Public Chat</span></a><li-->
                        <!--li><a href="Private_Message/Private_Message.php"><img src="images/send-file.png" class="navimg img-responsive" /><span class="nav-writting">Private Chat</span></a><li-->
                            <!--li><a href="General_Share/General_Share.php"><img src="images/businessman.png" class="navimg img-responsive" /><span class="nav-writting">Share</span></a><li-->
                                <li><a href="#"><img src="images/remove-user.png" class="navimg img-responsive" /><span class="nav-writting">Share</span></a><li>
                                        <li><a href="general_announcement"><img src="images/log-file-format-1.png" class="navimg img-responsive" /><span class="nav-writting">General Announcements</span></a><li>
                                            <li onclick="Logout()"><a href="logout.php"><img src="images/logout.png" class="navimg img-responsive" /><span class="nav-writting">Logout</span></a><li>
        </ul>
    </div>
    <div class="w3-main" style="margin-right:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-right w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
      <h1>Dashboard</h1>
  </div>
</div>
        

    
   <div class="text-center">
       
       <h2 id="count" class="text-success"></h2>

</div>
    <div class="w3-container" >
              
        
</div>
  </div>
         <div class="table-responsive" id="profile">
    
    <div id="user_details"></div>
    <div  id="user_model_details"></div>
    
   </div>
</div>
 <script type="text/javascript">
  function Logout(){
    $.get("Logout/Logout.php");
}
 </script>
<?php
 if(isset($_POST["submit_file"])){
        $selected_username = $_SESSION['chat_id'];
        move_uploaded_file($_FILES["file"]["tmp_name"],"profile_pic/".$_FILES["file"]["name"]);
        $connection_String = mysqli_connect('sql303.epizy.com','epiz_24195875','tlTVZPqz7tL','epiz_24195875_self');
        $myfiles = $_FILES["file"]["name"];
        echo $myfiles;
        $update_profile_query = "UPDATE user_data SET profile_pic = '$myfiles' WHERE chat_id ='$selected_username' ";
        $execute_update_profile_query = mysqli_query($connection_String,$update_profile_query);
      };



  ?>
  
  <script>
     $(document).ready(function(){
         fetch_user();
         setInterval(function(){
             fetch_user();
             update_chat_history_data();
             count_online();
             //chat_log(user_id,data_base);
         },2000);
       function fetch_user(){
              $.ajax({
                  url:'fetch_user.php',
                  method:"POST",
                  success:function(data){
                      $("#user_details").html(data);
                  }
              });
       }
         
     });
   
    function make_chat_dialog_box(to_user_id, to_user_name)
 {
  var modal_content = '<div style="margin-top:0px" id="user_dialog_'+to_user_id+'" class="user_dialog" title='+to_user_name+'>';
  modal_content += '<div style="height:280px; border:1px solid #ccc; overflow-y: auto; padding:0px; background-image:url(images/what.jpg)" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
  modal_content += '</div>';
  modal_content += '<div class="form-group" style="margin-top:10px">';
  modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control"></textarea>';
  modal_content += '</div><div class="form-group" align="right">';
  modal_content+= '<button  type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
 
  $('#user_model_details').html(modal_content);
 }
 $(document).on('click', '.start_chat', function(){
   var to_user_id = $(this).data('touserid');
  var to_user_name = $(this).data('tousername');
  make_chat_dialog_box(to_user_id, to_user_name);
  update_message_status(to_user_id);
  $("#user_dialog_"+to_user_id).dialog({
   autoOpen:false,
   width:300
  });
  $('#user_dialog_'+to_user_id).dialog('open');
  
 });
  $(document).on('click','.send_chat',function(){
      
      var to_user_id=$(this).attr('id');
      var chat_message = $('#chat_message_'+to_user_id).val();
      if(chat_message==''){
          alert("enter some message");
        }
      chat_message=chat_message.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '')
      $.ajax({
          async: true, 
          url:'insert_chat.php',
          method:'POST',
          data:{user_id:to_user_id,chat_message:chat_message},
          success:function(data){
             chat_log(to_user_id,data);
          }
      });
      chat_message = $('#chat_message_'+to_user_id).val("");
      
  });
  
  function chat_log(to_user,databa){
      $.ajax({
          async: true, 
          url:'chat_log.php',
          method:"POST",
          data:{user_id:to_user,data:databa},
          success:function(data){
              
        $("#chat_history_"+to_user).html(data);
        $("html,.chat_history").animate({ scrollTop: 9999 }, 'slow');
          }
      });
  }
function fetch_user_chat_history(to_user_id)
 {
     var user_id=to_user_id;
  $.ajax({
   url:"get_data_base_name.php",
   method:"POST",
   data:{user_id:to_user_id},
   success:function(data){
    chat_log(user_id,data);
   }
  })
 }
 function update_message_status(user_id){
    $.ajax({
        url:'update_chat.php',
        method:'POST',
        data:{user_id:user_id},
        success:function(){
            
        }
    });
 }
 function count_online(){
     $.ajax({
         url:'count_online.php',
         success:function(data){
             $("#count").html(data);
         }
     });
 }
function update_chat_history_data()
 {
  $('.chat_history').each(function(){
   var to_user_id = $(this).data('touserid');
   fetch_user_chat_history(to_user_id);
   
   /*$.ajax({
       url:'get_data_base_name.php',
       method:'POST',
       data:{user_id:to_user_id},
       success:function(data){
           chat_log(to_user_id,data);
       }
   });*/
  });
 }
 $(document).on('click','submit_file',function(){
     $.ajax({
         url:'profile_pic.php',
         
     });
 })
 $("#my_profile_picture").load("profile_pic.php"); 
 $(" #my_profile_picture").click(function(){
  $('#file').trigger("click");
  });
  $("#file").change(function(){
    $("#submit_file").trigger("click");
  });
  $("#submit_file").click(function(){
      $(this).submit();
  });

  $("#submit_file").submit(function(){
  $("#my_profile_picture").load("profile_pic.php");
  });
 $(document).on('click',".rounded-circle",function(){
     var pic=$(this).data('touserpic');
    get_profile(pic); 
 });
  function get_profile(pic){
      var id=pic;
      
      $.ajax({
          url:'profile.php',
          method:"POST",
          data:{user_id:id},
          success:function(data){
             $("#profile").html(data);
          }
              
      });
    }
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script-->
        <!--script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script-->
        <!--script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script-->
</body>
</html>
