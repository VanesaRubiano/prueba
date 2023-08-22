<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = hash('sha512', $_POST['password']);

$sql = "INSERT INTO users VALUES ('$id', '$name','$lastname','$username','$password','$email')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-admin.php");
}else{
    echo "Error al insertar usuario";
}


?>