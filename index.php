<?php
    
    include("includes/handlers/login_handler_index.php");
    include("includes/handlers/dashboard_handler_index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PangeaSoul</title>
    <link href="assests/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
    <div class="index">
        <div class="logo">
            <img src="img/logo.jpg">
        </div>
        <div class="trademark">
            <b>PangeaSoul.com™<br></b>
            <a href="https://willlouden.com/copyright.htm" target="_blank">™ Trademark & (C) Copyright 2021 - 2021. Will G. Louden™</a>
            <a href="https://www.willglouden.com/_WGL-LBR-Trust/index.html" target="_blank"> - LBR Trust.</a>
            <p>All Rights Reserved.</p>
        </div>
        <div class="loginButton">
            <form method="post">
                <input type="submit" name="login" value="Login">
            </form>
        </div>
        <div class="dashboardButton">
            <form method="post">
                <input type="submit" name="dashboard" value="Dashboard">
            </form>
        </div>
        <div class="managing">
            <h1>Managing</h1>
            </div>
            <div class="slider">
                <div class="line"></div>
                <div class="line">WGLPlus.com</div>
                <div class="line">WGLMax.com</div>
                <div class="line">Boutit.com</div>
                <div class="line">IconSean.com</div>
            </div>
        </div>
    </div>
</body>
</html>