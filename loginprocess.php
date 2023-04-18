<?php 
$servername="localhost";
$username="root";
$password="";
$database="register";
$conn= new mysqli($servername,$username,$password,$database);
if ($conn->connect_error){
    die("connection failed");
}
echo "connection successful";
$uname=$_POST['username'];
$pword=$_POST['password'];
$hashedPass= md5($pword);

echo $hashedPass;
$sql = "SELECT * FROM user WHERE username='$uname' && `password` ='$hashedPass' LIMIT 1;";
echo $sql;
$res= $conn->query($sql);
if($res->num_rows>0){
   session_start();
   $_SESSION["logedin"]= true;
   header('location:hidden.php');
}
else {
    echo "user doesnot exists";
}
?>