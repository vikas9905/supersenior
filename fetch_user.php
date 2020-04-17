<?php

include('database_connection.php');

session_start();
if(!$_SESSION['chat_id']){
    header("location:signin");
}
$query = "
SELECT * FROM online_user 
";
$output='';
$result=$conn->query($query);
      
while($row2=$result->fetch_assoc()){
    $c;
    $d;
    if($row2['chat_id']==$_SESSION['chat_id']){
        continue;
    }
    elseif($row2['status']=='online'){
        $chat=$row2['chat_id'];
        $id=test($chat,$conn);
        $c=count_message($id,$chat,$conn);
        $q2="select * from user_data where chat_id='$chat' ";
        $result2=$conn->query($q2);
        $row=$result2->fetch_assoc();
        $pic=$row['profile_pic'];
        if($pic==''){
            $pic='default.png';
        }
        if($c>=1){
        $output = '<div class="row w3-panel w3-green w3-round" style="cursor:pointer" id="start" onclick="get_profile"><img height="65" width="65" src="profile_pic/'.$pic.'" alt="" data-touserpic="'.$row['chat_id'].'" class="rounded-circle"><h4 style="margin-left:10px">'.$row['name'].'</h4><h4 style="margin-left:10px">'.$row['college'].'</h4><h4 style="margin-left:10px">'.$row['branch'].'</h4><h4 style="margin-left:10px" class="text-danger">'.$c.'</h4><button type="button" class="btn btn-primary btn-xs start_chat" style="margin-left:228px;margint-bottom:50px" data-touserid="'.$row['chat_id'].'" data-tousername="'.$row['name'].'">Chat</button></div>';}
        else{
        $output=$output = '<div class="row w3-panel w3-green w3-round" style="cursor:pointer" id="start" onclick="get_profile"><img height="65" width="65" src="profile_pic/'.$pic.'" alt="" data-touserpic="'.$row['chat_id'].'" class="rounded-circle"><h4 style="margin-left:10px">'.$row['name'].'</h4><h4 style="margin-left:10px">'.$row['college'].'</h4><h4 style="margin-left:10px">'.$row['branch'].'</h4><h4 style="margin-left:10px" class="text-success"></h4><button type="button" class="btn btn-primary btn-xs start_chat" style="margin-left:228px;margint-bottom:50px" data-touserid="'.$row['chat_id'].'" data-tousername="'.$row['name'].'">Chat</button></div>';}    
        
        }
    elseif($_SESSION['chat_id']!=$row2['chat_id']){
       
        $chat=$row2['chat_id'];
        $id=test($chat,$conn);
            $c=count_message($id,$chat,$conn);
        $q2="select * from user_data where chat_id='$chat'";
        $result2=$conn->query($q2);
        $row=$result2->fetch_assoc();
        $pic=$row['profile_pic'];
        if($pic==''){
            $pic='default.png';
        }
        if($c>=1){
          $output= '<div class="row w3-panel w3-red w3-round"  id="start" onclick="get_profile"><img style="cursor:pointer" height="65" width="65" src="profile_pic/'.$pic.'" alt="" data-touserpic="'.$row['chat_id'].'"  class="rounded-circle"><h4 style="margin-left:10px">'.$row['name'].'</h4><h4 style="margin-left:10px">'.$row['college'].'</h4><h4 style="margin-left:10px">'.$row['branch'].'</h4><h4 style="margin-left:10px" class="text-success">'.$c.'</h4><button type="button" class="btn btn-primary btn-xs start_chat" style="margin-left:228px;margint-bottom:50px" data-touserid="'.$row['chat_id'].'" data-tousername="'.$row['name'].'">Chat</button></div>';  
        }
        else{
        $output = '<div class="row w3-panel w3-red w3-round"  id="start" onclick="get_profile"><img style="cursor:pointer" height="65" width="65" src="profile_pic/'.$pic.'" alt="" data-touserpic="'.$row['chat_id'].'" class="rounded-circle"><h4 style="margin-left:10px">'.$row['name'].'</h4><h4 style="margin-left:10px">'.$row['college'].'</h4><h4 style="margin-left:10px">'.$row['branch'].'</h4><button type="button" class="btn btn-primary btn-xs start_chat" style="margin-left:228px;margint-bottom:50px" data-touserid="'.$row['chat_id'].'" data-tousername="'.$row['name'].'">Chat</button></div>';}
    }
     echo$output;
}
function count_message($id,$chat_id,$conn){
    $reciver_message=0;
    if($id){
        $sql_query="select * from $id";
        $result=$conn->query($sql_query);
        $sender_message=0;
    while($row=$result->fetch_assoc()){
        if($row['from_id']==$chat_id){
            if($row['status']=='1'){
            $reciver_message=$reciver_message+1;
            }
        }
    }
    }
    
    return $reciver_message;
}

?>
