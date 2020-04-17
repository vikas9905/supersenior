<?php

//logout.php
include 'database_connection.php';
session_start();
$chat_id=$_SESSION['chat_id'];
$sql="update online_user set status='offline' where chat_id='$chat_id'";
$conn->query($sql);
session_destroy();

header('location:signin.html');

?>

