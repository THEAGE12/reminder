<?php

include ("connect.php"); 

$id = $_POST['ID']; 

$del = mysqli_query($connect,"DELETE FROM data WHERE id = '$id'");
if(!$del)
{

    echo ' <script>alert("not successfull");
    window.location="../route/Delete.php"</script>;';
}
else{
    {

        echo ' 
        <script>
        window.location="../route/Delete.php"</script>;';
    }
}
?>