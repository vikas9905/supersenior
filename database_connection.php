<?php
$host='sql303.epizy.com';
  $user='epiz_24195875';
  $pas='tlTVZPqz7tL';
  $db='epiz_24195875_self';
  $conn=new mysqli($host,$user,$pas,$db);
  if($conn->connect_error){
      echo$conn->connect_error;
  }
  function test($reciver_id,$conn){
      $query="select * from user_data where chat_id='$reciver_id'";
$re=$conn->query($query);
$rw=$re->fetch_assoc();
$reciver_name=$rw['name'];
$reciever_name=str_replace(" ","_",$reciever_name);
$sess_name=$_SESSION['name'];
$sess_name=str_replace(" ","_",$sess_name);
$table1=$sess_name.'_'.$reciver_name.'_'.$reciver_id;
$table2=$reciver_name.'_'.$sess_name.'_'.$_SESSION['chat_id'];
$q1="show tables like '".$table1."'";
$c1=$conn->query($q1);
$d1=$c1->num_rows;
$q2="show tables like '".$table2."'";
$c2=$conn->query($q2);
$d2=$c2->num_rows;
$original_table=0;
if($d1==0 && $d2==0){
    
return $original_table;
}
elseif($d1==0 && $d2==1){
return$table2;
}
elseif($d1==1 && $d2==0){
return$table1;
  }
  }
?>
