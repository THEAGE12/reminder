<?php
include ("connect.php"); 

$id = $_POST['ID']; 

$del = mysqli_query($connect,"UPDATE data SET Dis = 1 WHERE id = '$id'");

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