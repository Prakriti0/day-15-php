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
$sql = "INSERT INTO user (id,username,password)VALUES(null,'$uname','$hashedPass')";
$res= $conn->query($sql);
if($res === TRUE){
    echo "data inserted";
    header('location:login.php');
}

?>
