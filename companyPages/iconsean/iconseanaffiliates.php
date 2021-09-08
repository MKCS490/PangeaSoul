<?php
    include("../../includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company</title>
    <link href="../../assests/company.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
    <div class="mainContainer">
        <div class="heading">
            <div class="left">
                <h1>IconSean</h1>
            </div>
            <div class="right">
                <a href="../../index.php"><i class="fas fa-home fa-2x"></i></a>
                <a href="../../dashboard.php"><i class="fas fa-tachometer-alt fa-2x"></i></a>
                <a href="../../includes/handlers/logout.php"><i class="fas fa-sign-out-alt fa-2x"></i></a>
            </div>
        </div>
        <div id="midContainer">
            <div id="menu">
                    <ul>
                        <li><a href="iconseanemployees.php">Employees</a></li>
                        <li><a href="iconseanstats.php">Stats/Graphs</a></li>
                        <li><a href="iconseanaffiliates.php">Affiliates</a></li>
                        <li><a href="iconseanfunding.php">Funding</a></li>
                        <li><a href="iconseanmessages.php">Messages</a></li>
                        <li><a href="iconseanupload.php">Upload</a></li>
                    </ul>
                </div>
            <div id="mainContent">
                <h1><i class="fas fa-handshake"></i>Displaying Affiliates for IconSean</h1>
            </div>
        </div>
    </div>
</body>
</html>