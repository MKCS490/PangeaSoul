<?php
    include("includes/config.php");
    include('includes/user_query.php');
    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = $_SESSION['userLoggedIn'];
    }
    else {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="assests/dashboard.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
    <div class="mainContainer">
        <h1>Welcome <?php echo $fullName?>!</h1>
        <h2>Current Occupation: <?php echo $occupation;?></h2>
        <div class="menu">
            <p>Dashboard</p>
            <ul>
                <?php
                    if($role == "admin" || $company =="WGLPLus" ) { 
                        ?>
                        <li><a href="companyPages/wglplus/wglplus.php"><i class="fas fa-wrench"></i></i>WGLPlus</a></li>
                        
                    <?php }
                ?>
                <?php
                    if($role == "admin" || $company =="WGLMax" ) { 
                        ?>
                        <li><a href="companyPages/wglmax/wglmax.php"><i class="fas fa-wrench"></i>WGLMax</a></li>
                    <?php }
                ?>
                <?php
                    if($role == "admin" || $company =="Boutit" ) { 
                        ?>
                        <li><a href="companyPages/boutit/boutit.php"><i class="fas fa-wrench"></i>Boutit</a></li>
                    <?php }
                ?>
                <?php
                    if($role == "admin" || $company =="IconSean" ) { 
                        ?>
                        <li><a href="companyPages/iconsean/iconsean.php"><i class="fas fa-wrench"></i>IconSean</a></li>
                    <?php }
                ?>
                <li><a href="announcements.php"><i class="fas fa-bullhorn"></i>Announcements</a></li>
            </ul>
        </div>
        <div class="home">
            <a href="index.php"><i class="fas fa-home fa-2x"></i></a>
            <a class="logout" href="includes/handlers/logout.php"><i class="fas fa-sign-out-alt fa-2x"></i></a>
        </div>
    </div>
</body>
</html>