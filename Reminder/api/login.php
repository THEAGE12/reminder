<?php
include("connect.php");
session_start();
$name = $_POST['name'];
$name = strtolower($name);
$password = $_POST['password'];
$query = mysqli_query($connect,"SELECT * FROM user WHERE LCASE(name) = '$name' AND password = '$password'");
if (mysqli_num_rows($query) > 0)
{
    echo'
    <script> 
    window.location="../route/dashboard1.php";
    </script>';
    $_SESSION['name']= $name;

}
else{
    echo'
    <script> alert("wrong credentials");
    window.location="../";</script>'; 
}