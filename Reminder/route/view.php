<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/delete.css">
</head>
<body>
<div class="header">VIEW POINT</div>
    <div class="body">
    <form action="" method="post">
    <div class="body">
     
        <input type="date" name="date">
        
        <button class="searchbt">Search</button>
        </form>
        <?php
include("../api/connect.php");
error_reporting(0);
$date= $_POST['date'];
$choice= $_POST['subject'];


$querry = mysqli_query($connect,"SELECT * FROM data WHERE  (date = '$date') AND (Dis = 0) ");
 if(mysqli_num_rows($querry)>0){
?>
<table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Email</th>
                    <th>Phone no.</th>
                    <th>SMS no.</th>
                    <th>Remainder</th>
                </tr>
            </thead>
    <?php
while($row = mysqli_fetch_assoc($querry))
{ ?>

    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['description'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['sms'] ?></td>
        <td><?php echo $row['remainder'] ?></td>
    </tr>

    <?php }} ?>

    <button onclick="window.location.href = 'index.html';">LOGOUT</button>


</body>
</html>