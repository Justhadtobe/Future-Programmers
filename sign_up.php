<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Finance";

$conn = mysqli_connect($servername,$username,$password,$dbname);

 if (isset($_POST['submit'])) {

$name = $_POST['name'];
$sname = $_POST['surname'];
$cell = $_POST['cellphone'];
$password = $_POST['password'];
$repassword = $_POST['re_enter'];


//error handlers
if ($password != $repassword) {
    echo "The password does'nt match";
} elseif ($cell.length() !=10) {
    echo "Cellphone number should have 10 digits!";
} else {
    $stmt = $conn -> prepare("INSERT INTO info(name,lastname,email,password,re_enter) VALUES(?,?,?,?,?);");
    $stmt -> bind_param("sssss",$name,$lname,$email,$password,$repassword);
    $stmt -> execute();
    echo "Successfuly signed in";   
    $stmt -> close();
    $conn -> close();
    
}