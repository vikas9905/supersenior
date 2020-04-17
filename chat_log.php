<head>
<style type="text/css">

.sender,.receiver{
	/*background-color: #d8d4d4;*/
	width: 70%;
	margin-top: 2px;
	margin-bottom: 2px;

}

.receiver{
	float: left;
	text-align: left;
	margin-left: 15px;
}

.sender{
	float:right;
	text-align: right;
	margin-right: 15px;
}


div[class="shape_receiver"]{
	background-color: white;
	padding: 5px 10px 5px 10px;
	border-radius: 0px 20px 20px 20px;
}

div[class="shape_sender"]{
	background-color: rgba(69, 162, 255, 0.93);
	padding: 0px 10px 5px 10px;
	border-radius: 20px 3px 20px 20px;
}

span[class="original_sender"]{
	color: white;
	display: inline-block;
	text-align: center;
}

span[class="original_receiver"]{
	color: gray;
	display: inline-block;
	text-align: center;
}

</style>
</head>
    <?php
include 'database_connection.php';
session_start();
if(!$_SESSION['chat_id']){
    header("location:signin");
}
$user_chat_id='';
$data='';
if(isset($_POST['to_user_id'])){
    $user_chat_id=$_POST['to_user_id'];
}
if(isset($_POST['data'])){
    $data= htmlspecialchars($_POST['data']);
}
$sql1="select * from $data";
$result1=$conn->query($sql1);
while($row1=$result1->fetch_assoc()){
if($_SESSION['chat_id']==$row1['from_id']){
  echo "<div class='sender'><span class='original_sender'><div class='shape_sender' id='view'>".$row1["message"]."</div></span></div>";
}
else{
    echo "<div class='receiver'><span class='original_receiver'><div class='shape_receiver' id='view'>".$row1["message"]."</div></span></div>";
}
}
?>
