<?php
    include("includes/config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="assests/announcements.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
    <div class="mainContainer">
        <div class="heading">
            <div class="left">
                <h1>Announcements</h1>
            </div>
            <div class="right">
                <a href="index.php"><i class="fas fa-home fa-2x"></i></a>
                <a href="dashboard.php"><i class="fas fa-tachometer-alt fa-2x"></i></a>
                <a href="includes/handlers/logout.php"><i class="fas fa-sign-out-alt fa-2x"></i></a>
            </div>
        </div>
        <div class="mainContent">
            <h1>No Announcements at this Time</h1>
        </div>
    </div>
</body>
</html>