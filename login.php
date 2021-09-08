<?php
    include("includes/config.php");
    include("includes/handlers/login_handler.php");
    
    if(isset($_SESSION['userLoggedIn'])) {
        header("location: dashboard.php");
    }
    function getInputValue($email) {
        if(isset($_POST[$email])) {
            echo $_POST[$email];
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link href="./assests/login.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assests/js/login.js"></script>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form id="loginForm" action="login.php" method="POST">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input id="loginEmail" name="loginEmail" type="text" placeholder="Email" 
                value="<?php 
                if (isset($password_error)){
                        getInputValue('loginEmail');
                    }
                ?>" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" id="loginPassword" name="loginPassword" type="text" placeholder="Password" required>
                <i id="eye" class="fas fa-eye"></i>
                </input>
                <input type="submit" name="login" value="Login">
                </input> 
                <p>
                    <?php 
                        echo $email_error;
                        echo $password_error;
                    ?>
                </p>
        </form>
    </div>
</body>
</html>