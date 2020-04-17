<?php
include 'database_connection.php';
session_start();
if(!$_SESSION['chat_id']){
    header("location:signin");
}
function table($reciver_id){
$query="select * from user_data where chat_id='$reciver_id'";
$re=$conn->query($query);
$rw=$re->fetch_assoc();
$reciver_name=$rw['name'];
$table1=$_SESSION['name'].'_'.$reciver_name.'_'.$reciver_id;
$table2=$reciver_name.'_'.$_SESSION['name'].'_'.$_SESSION['chat_id'];
$q1="show tables like '".$table1."'";
$c1=$conn->query($q1);
$d1=$c1->num_rows;
$q2="show tables like '".$table2."'";
$c2=$conn->query($q2);
$d2=$c2->num_rows;
if($d1==0 && $d2==0){
    return $table1;
}
elseif($d1==0 && $d2==1){
return $table2;
}
elseif($d1==1 && $d2==0){
return $table1;
  }
}
?>
