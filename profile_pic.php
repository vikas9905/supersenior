<?php

  $host = "sql303.epizy.com";
  $user = "epiz_24195875";
  $pass = "tlTVZPqz7tL";
  $database = "epiz_24195875_self";
  session_start();
  if(!$_SESSION['chat_id']){
      header("location:signin");
  }
  $selected_username = $_SESSION['chat_id'];
  $connection_String = mysqli_connect($host,$user,$pass,$database);

  $command_query = "SELECT * FROM user_data WHERE chat_id = '$selected_username'";

  $execute_command_query = mysqli_query($connection_String,$command_query);

  while($row = mysqli_fetch_assoc($execute_command_query)){

    if($row["profile_pic"]==''){
        echo "<img class='my_profile_pic' src='profile_pic/default.png' title='Click to change profile picture'/>";
    }else{
        $picture_holder = $row["profile_pic"];
        echo "<img class='my_profile_pic' src='profile_pic/$picture_holder' title='Click to change profile picture'/>";
    }
  }

  mysqli_close($connection_String);


?>
