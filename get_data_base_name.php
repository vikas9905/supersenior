

<?php
include 'database_connection.php';
session_start();
if(!$_SESSION['chat_id']){
    header("location:signin");
}
$reciver_id='';
if(isset($_POST['user_id'])){
    $reciver_id= htmlspecialchars($_POST['user_id']);
}
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
$original_table='';
if($d1==0 && $d2==0){
    $crt="create table $table1(from_id varchar(100),to_id varchar(100),message varchar(1000),status varchar(10))";
    $result=$conn->query($crt);
echo$table1;
$original_table= $table1;
}
elseif($d1==0 && $d2==1){
echo $table2;
$original_table= $table2;
}
elseif($d1==1 && $d2==0){
echo$table1;
$original_table=$table1;
  }
?>