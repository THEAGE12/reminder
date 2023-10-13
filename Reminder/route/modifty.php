



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/disable.css">
</head>
<body>
    <div class="header">MODIFY REMAINDER</div>
<form action="" method="post">
    <div class="body">
     
        <input type="date" name="date">
        
        <button id="searchbt">Search</button>
        </form>
        <?php
include("../api/connect.php");
error_reporting(0);
$date= $_POST['date'];
$choice= $_POST['subject'];


$querry = mysqli_query($connect,"SELECT * FROM data WHERE  (date = '$date') AND (Dis = 1) ");
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
    <div class = "game">

    <form action="../api/Enable.php" method="post">
    <label for="../api/delete.php" class="default">Enter ID to modify</label>
    <input type="text" class="default1" name="ID">
    <label for="../api/delete.php" class="default">Enter Remainder</label>
    <input type="text" class="default1" name="Remainder">
    <label for="../api/delete.php" class="default">Enter Description</label>
    <input type="text" class="default1" name="Description">


<button> Modify</button></form>
</div>


<button onclick="window.location.href = '../';">LOGOUT</button>


</body>
</html>