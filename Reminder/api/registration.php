<?php
include("connect.php");
$name = $_POST['name'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$cpassword=$_POST['cpassword'];
if($password == $cpassword)
{
$query = mysqli_query($connect,"INSERT INTO user(name,phone,password) VALUES ('$name','$phone','$password')");
if($query)
{
    echo ' <script>alert("data successfully entered");
    window.location="../"</script>;';

}
else{
    echo '<script> alert("data entry failed");
    window.location="../route/registrarion.php"</script>;';
}
}
else{
    echo ' <script>alert("dpassword and confirm password mismatched");
    window.location="../route/registrarion.php";</script>';
    
}?>