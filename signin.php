<?php
session_start();
$_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (1* 60);

 include('database_connection.php');
 $pass='';
 $user_id='';
 $ok=0;
 $sql="select * from user_data";
 $result=$conn->query($sql);
 
 if(isset($_POST['email'])){
     $user_id=$_POST['email'];
 }
 if(isset($_POST['psw'])){
     $pass=$_POST['psw'];
 }
 while($row=$result->fetch_assoc()){
     if($row['email']==$user_id && $row['pwd']==md5($pass)){
         $ok=1;
         $_SESSION['chat_id']=$row['chat_id'];
        $_SESSION["user_id"]=$user_id;
     $_SESSION["name"]=$row['name'];
     $_SESSION["branch"]=$row['branch'];
     $_SESSION["college"]=$row['college'];
     $_SESSION["year"]=$row['Year'];
     $_SESSION["status"]='online';
         $_SESSION['profile_pic']=$row['profile_pic'];
     header('location:private_chat.php');
     }
 }
 if($ok==0){
     echo'<script type="text/javascript">';
    echo'alert("Wrong email or password");';
    echo'window.location.href="signin";';
    echo '</script>';
 }
 $chat_id=$_SESSION['chat_id'];
 $sql2="update online_user set status='online' where chat_id='$chat_id' ";
 if($ok==1){
     $conn->query($sql2);
 }
?>