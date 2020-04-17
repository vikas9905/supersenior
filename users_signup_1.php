<?php
include 'database_connection.php';
$name='';
$email='';
$branch='';
$college='';
$year='';
$psw='';
$code='';
$result=$conn->prepare("insert into user_data(email,chat_id,name,branch,pwd,college,year) values(?,?,?,?,?,?,?)");
$result->bind_param("sssssss",$email,$chat_id,$name,$branch,$pwd,$college,$year);
//$chat_id=$id;
if(isset($_POST['key'])){
    $code= htmlspecialchars($_POST['key']);
}
if(isset($_POST['email'])){
    $email=htmlspecialchars($_POST['email']);
}
if(isset($_POST['name'])){
    $name=htmlspecialchars($_POST['name']);
    $name=str_replace(' ','_',$name);
}
if(isset($_POST['branch'])){
    $branch=htmlspecialchars($_POST['branch']);
}
if(isset($_POST['college'])){
    $college=htmlspecialchars($_POST['college']);
}
if(isset($_POST['year'])){
    $year=htmlspecialchars($_POST['year']);
}
if(isset($_POST['psw'])){
    $pwd=md5($_POST['psw']);
}
$chat_id=str_replace('@','_',$email);
$chat_id=str_replace('.','_',$chat_id);
$sql1="select code from security where email='$email'";
$result1=$conn->query($sql1);
$rows=$result1->fetch_assoc();
   if($rows['code']==$code){
       $sql2="insert into online_user(chat_id,status) values(?,?)";
       $result2=$conn->prepare($sql2);
       $result2->bind_param("ss",$user_id,$status);
       $user_id=$chat_id;
       $status='offline';
       $result2->execute();
       $result->execute();
       echo'<script type="text/javascript">';
    echo'alert("you are signed Up.now sign in");';
    echo'window.location.href="signin.html";';
    echo '</script>';
       //header("location:signin.html");
   }
   else{
       echo'<script type="text/javascript">';
    echo'alert("Wrong verification code or email-id");';
    echo'window.location.href="users_signup.php";';
    echo '</script>';
   }
?>