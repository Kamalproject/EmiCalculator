<?php

$servername="localhost";
$username="root";
$password="";
$dbname="totalamount";

$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Failed connect".$conn->connect_error);
}

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM intrest WHERE email=$email and password=$password";
$result=$conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    session_start();
    $_SESSION['user_id']=$row['number'];
    $_SESSION['username']=$row['email'];
    header("Location:dashboard.php");
}
else{
    echo "Invalid email or password";
    
}
$conn->close();

?>