<?php

$servername="localhost";
$username="root";
$password="";
$dbname="totalamount";

$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Failed to connect".$conn->connect_error);
}

$name=$_POST['name'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$phnumber=$_POST['phnumber'];
$password=$_POST['password'];

$sql="INSERT INTO intrest(name, email, dob, phnumber, password) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["dob"]."', '".$_POST["phnumber"]."', '".$_POST["password"]."')";

if($conn->query($sql)===true){
    echo "Successfully Register";
    header("Location:login.php");
}
else{
    echo "Error".$conn->error;
}

$conn->close();
?>