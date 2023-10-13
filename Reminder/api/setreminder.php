<?php
include("connect.php");
$date= $_POST['date'];
$description = $_POST['description'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sms = $_POST['sms'];
$remainder = $_POST['details'];
$choice = $_POST['subject'];

$phone = $_POST['phone'];

$query = mysqli_query($connect,"INSERT INTO data (date,description,email,phone,sms,remainder,choice,Dis) VALUES ('$date','$description','$email','$phone','$sms','$remainder','$choice',0)");
if($query)
{
    echo ' <script>alert("data successfully entered");
    window.location="../route/setremainder.html"</script>;';

}
else{
    echo '<script> alert("data entry failed");
    window.location="../route/registrarion.php"</script>;';
}

?>