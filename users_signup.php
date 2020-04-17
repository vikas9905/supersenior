<?php

$deparment = array("--Select branch--","Information Technology","Computer Science","Electronic","Electronics","Mechanical","Civil","MBA","MCA");
$college =   array("--Select college--","LNCT(Main)","LNCTS","LNCTE","LNCT PHARMACY","LNCT(MCA)","TIT","IES","RKDF","ORIENTAL","NRI","PEOPLES");
$year=array("--Select Year--","1st","2nd","3rd","4th");
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="Login_css/style.css">
</head>

<style type="text/css">
    /*.body{
        background-image: url('Login_css/chat3.jpg');
    }*/
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
    <form class='wrap' method="post" action="users_signup_1.php">
  <div class="flex-row">
    <input id="fname" class='lf--input' placeholder='Enter First Name' type='text' name="name" required/>
  </div>
<div class="flex-row">
  <select class="selected_department" name="college" required/>
    <?php
  foreach($college as $val) { echo "<option>".$val."</option>";};
    ?>
  </select>
  </div>
  <div class="flex-row">
  <select class="selected_department" name="branch" required/>
    <?php
  foreach($deparment as $val) { echo "<option>".$val."</option>";};
    ?>
  </select>
  </div>
       <div class="flex-row">
  <select class="selected_department" name="year" required/>
    <?php
  foreach($year as $val) { echo "<option>".$val."</option>";};
    ?>
  </select>
  </div>
    <div class="flex-row">
        <input id="email" class='lf--input' placeholder='Enter Email' type='email' name="email" required>
  </div>
  <div class="flex-row">
    <input id="password" class='lf--input' placeholder='Password' type='password' name="psw" required>
  </div>

  <div class="flex-row">
    <input id="password" class='lf--input' placeholder='Enter verification code' type='password' name="key" required>
  </div>
  <input class='lf--submit lf--submit-adjusted' type='submit' value='Sign Up' name="submit" id="btnSubmit">

  <p style="font-size:.6em;color:#2dc6bf;text-align:center;cursor:hand"><u><a href="signin.html">Sign In</a></u></p>
   <p style="font-size:.6em;color:#2dc6bf;text-align:center;cursor:hand"><u><a href="verifyemail.php">Verify your email</a></u></p>

</form>
</body>

</html>
