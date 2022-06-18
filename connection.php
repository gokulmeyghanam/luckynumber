<?php
$servername="localhost";
$username="root";
$password="";
$dbname="registration";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection faied ".$conn->connect_error);
}    
$name=$_POST['name'];
$pno=$_POST['pno'];
$pass=$_POST['pass'];
$sql="INSERT INTO user_details (name, pno, pass) VALUES ('$name', '$pno', '$pass')";
if($conn->query($sql)===TRUE){
    echo "new record created";
}
else{
    echo "error".$sql."<br>". $conn->error;
}
$conn->close();
?>
