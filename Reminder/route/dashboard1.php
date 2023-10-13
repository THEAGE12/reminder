<?php
include("../api/connect.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    
</body>
</html>
<div class="header"><h1>Welcome to the Reminder Application <?php echo $_SESSION['name']?></h1>
</div>
<div class="body">
    <div class="button">
        <button onclick="window.location.href = 'setremainder.html';">SET REMINDER</button>
        <button onclick="window.location.href = 'modifty.php';">MODIFY REMINDER</button>
        <button onclick="window.location.href = 'disable.php';">DISABLE REMINDER</button>
        <button onclick="window.location.href = 'Delete.php';">DELETE REMINDER</button>
        <button onclick="window.location.href = 'enable.php';">ENABLE REMINDER</button>
        <button onclick="window.location.href = 'view.php';">VIEW REMINDER</button>
        
    </div>
    <button onclick="window.location.href = '../';">LOGOUT</button>
</div>