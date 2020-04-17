<?php

        include 'database_connection.php';
        session_start();
        if(!$_SERVER['chat_id']){
            header("location:signin");
        }
        $message_title='';
        $message_body='';
        if(isset($_POST['title'])){
        $message_title = htmlspecialchars($_POST["title"]);}
        if(isset($_POST['message'])){
        $message_body = htmlspecialchars($_POST["message"]);}
    $message_sender = htmlspecialchars($_SESSION['name']);

    if($message_title!=""&& $message_body!=""){

      $result=$conn->prepare("INSERT INTO general_announcement (id,message_title,message_body,sender,date) VALUES (?,?,?,?,?)");
      $result->bind_param("sssss",$id,$title,$message,$sender,$date);
      $id=$_SESSION['chat_id'];
      $title=$message_title;
      $message=$message_body;
      $sender=$message_sender;
      date_default_timezone_set('Asia/Kolkata');
      $date=date("Y/m/d/h/i/sa");
      $result->execute();
    }

   ?>
