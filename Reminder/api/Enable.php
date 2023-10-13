<?php
include ("connect.php"); 

$id = $_POST['ID']; 

$del = mysqli_query($connect,"UPDATE data SET Dis = '0' WHERE id = '$id'");
if(!$del)
{

    echo ' <script>alert("not successfull");
    window.location="../route/enable.php"</script>;';
}
else{
    {

        echo ' 
        <script>
        window.location="../route/enable.php"</script>;';
    }
}