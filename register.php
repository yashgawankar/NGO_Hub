<?php

$host = "localhost";
$user = "root";
$password = "pwdpwd";
$db = "login_signup";

if(isset($_POST['login']))
{
    $conn = mysqli_connect($host,$user,$password,$db);
    if(!$conn)
        echo "error";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password1'];
    $query = "INSERT INTO users(firstname,lastname,email,password) VALUES ('$firstname','$lastname','$username','$password')";
    mysqli_query($conn, $query);    
}
?>