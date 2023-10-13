<?php
include ("connect.php"); 
$remainder = $_POST['Remainder'];
$description = $_POST['Description'];
$id = $_POST['ID']; 

$del = mysqli_query($connect,"UPDATE data SET description = '$descriptoin' and remainder = '$remainder' WHERE id = '$id'");

if(!$del)
{

    echo ' <script>alert("not successfull");
    window.location="../route/disable.php"</script>;';
}
else{
    {

        echo ' 
        <script>
        window.location="../route/disable.php"</script>;';
    }
}
?>