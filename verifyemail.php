
        <?php
        //require'PHPMailerAutoload.php';
$servername = "sql303.epizy.com";
$username = "epiz_24195875";
$password = "tlTVZPqz7tL";
$dbname = "epiz_24195875_self";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$mail=new PHPMailer;
/*$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username="vikas6.7mishra@gmail.com";
$mail->Password="whatismytarget";
$mail->setFrom('vikas6.7mishra@gmail.com','collegechat');*/
$email='';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
// prepare and bind
$stmt = $conn->prepare("INSERT INTO security (email,code,time) VALUES (?,?,?)");
$stmt->bind_param("sss",$email,$code,$sts);

if(isset($_POST['emailtxt'])){
$email= $_POST["emailtxt"];}
$sql1="select * from security";
$result=$conn->query($sql1);
//$mail->addAddress($email);
//$mail->isHTML(false);
//$mail->Subject='Your Verification Code';
//$query=$_POST["text"];
$code= mt_rand(100000, 999999);
//$mail->Body='it is verification code '.$code.'';
date_default_timezone_set('Asia/Kolkata');
$sts=date("Y/m/d/h/i/sa");
$stmt->execute();
//mail($email,'Security code',"your security code is '$code'");
while($row=$result->fetch_assoc()){
    if($row['email']==$email){
        $sql2="update security set code='$code' where email='$email'";
        $conn->query($sql2);
    }
}
/*if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} */
        $name='vikash';
        $body="it is your code $code";
        $sub="Verification code";
        $headers=array("Authorization: api key",
                  'Content-Type: application/json'
            );
        $data=array(
            "personalizations"=>array(
                array(
                    "to"=>array(
                        array(
                            "email"=>$email,
                            "name"=>$name
                        )
                    )
                )
            ),
            "from"=>array(
               "email"=>"admin@supersenior.online" 
            ),
            "subject"=>$sub,
            "content"=>array(
                array(
                    "type"=>"text/html",
                    "value"=>$body
                )
            )
        );
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,"https://api.sendgrid.com/v3/mail/send");
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        Curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $res= curl_exec($ch);
        curl_close($ch);

if($res){
    echo'<script type="text/javascript">';
    echo'alert("something error");';
    echo'window.location.href="index";';
    echo '</script>';
}
else {
    echo'<script type="text/javascript">';
    echo'alert("code has been sent now sign up");';
    echo'window.location.href="users_signup.php";';
    echo '</script>';
}
$stmt->close();
$conn->close();}
?>
   <!--<!DOCTYPE html>-->
<html >
<head>
  <meta charset="UTF-8">
  <title>Verify email</title>
  <link rel="stylesheet" href="Login_css/style.css">
</head>

<style type="text/css">
.selected_position,.selected_department{
  width: 100%;
  height: 50px;
}
.flex-row-adjusted{
  height: 30px;
}
a{
  color:#2dc6bf;
}
.lf--submit-adjusted{
  padding-bottom: .5em;
}
</style>

<body>
  <form class='wrap'  method="post">
  <div class="flex-row">
      <input type="email" class='lf--input' placeholder='Enter E-mail' type='text' name="emailtxt">
  </div>
  <input class='lf--submit lf--submit-adjusted' type='submit' value='Verify email' name="submit" id="btnSubmit">

  <p style="font-size:.6em;color:#2dc6bf;text-align:center;cursor:hand"><u><a href="index">Chat</a></u></p>
  <p style="font-size:.6em;color:#2dc6bf;text-align:center;cursor:hand"><u><a href="users_signup">Sign up</a></u></p>

</form>
</body>

</html>


