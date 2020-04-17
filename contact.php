
          
        <?php
include 'database_connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name='';
$phone='';
$email='';
$query='';
// prepare and bind
$stmt = $conn->prepare("INSERT INTO contact (NAME,PHONE,EMAIL,query) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $phone, $email, $query);

// set parameters and execute
if(isset($_POST['name'])){
$name = $_POST["name"];}
if(isset($_POST['phone'])){
$phone = $_POST["phone"];}
if(isset($_POST['email'])){
$email = $_POST["email"];}
if(isset($_POST['text'])){
$query=$_POST["text"];}
$stmt->execute();

echo'<script type="text/javascript">';
    echo'alert("Thank you for your feedback");';
    echo'window.location.href="index";';
    echo '</script>';
$stmt->close();
$conn->close();
?>
      