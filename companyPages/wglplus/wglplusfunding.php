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
                <h1>WGLPLus</h1>
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
                        <li><a href="wglplusemployees.php">Employees</a></li>
                        <li><a href="wglplusstats.php">Stats/Graphs</a></li>
                        <li><a href="wglplusaffiliates.php">Affiliates</a></li>
                        <li><a href="wglplusfunding.php">Funding</a></li>
                        <li><a href="wglplusmessages.php">Messages</a></li>
                        <li><a href="wglplusupload.php">Upload</a></li>
                    </ul>
                </div>
            <div id="mainContent">
                <h1><i class="fas fa-money-check-alt"></i>Displaying Funding for WGLPlus</h1>
            </div>
        </div>
    </div>
</body>
</html>
