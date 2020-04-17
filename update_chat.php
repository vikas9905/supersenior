<?php
include 'database_connection.php';
session_start();
if(!$_SESSION['chat_id']){
    header("location:signin.html");
}
$userid='';
if(isset($_POST['user_id'])){
    $userid=$_POST['user_id'];
}
$data=test($userid,$conn);
if($data){
    $sql_q="update $data set status='0' where from_id='$userid'";
    $result=$conn->query($sql_q);
    }
?>
