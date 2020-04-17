<?php
include('database_connection.php');

session_start();
if(!$_SESSION['chat_id']){
    header("location:signin");
}
echo fetch_user_chat_history($_POST['to_user_id'], $connect);

?>

