<?php

include('database_connection.php');

session_start();
if(!$_SESSION['chat_id']){
    header("location:signin");
}
$query = "
SELECT * FROM online_user ";

$statement = $conn->query($query);
$count=0;
while($row=$statement->fetch_assoc())
{
    if($row['status']=='online'){
        $count=$count+1;
    }
    
}
echo"Online Users=",$count;

?>


