<?php
    global $email_error;
    global $password_error;
    global $firstName;
    global $lastName;
    global $company;

    if(isset($_POST['loginEmail'])) {
        
        $email = $_POST['loginEmail'];
        $password = $_POST['loginPassword'];

        //reading from db where the email matches
        $query = "SELECT * from users where email ='$email' limit 1";
        $result = mysqli_query($con, $query); 

        if($result) {
            //if such email exists, match the passwords and display errors
            if($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] === $password) {
                    $_SESSION['userLoggedIn'] = $email;
                    
                    //assign user values to display on dashboard
                    $_SESSION['firstName'] = $user_data['firstName'];
                    $lastName = $user_data['lastName'];
                    $company = $user_data['company'];

                    header("location: dashboard.php");
                }
                else{
                    $password_error = "Incorrect password";
                }
            }
            else{
                $_SESSION['invalid_email'] = true;
                $email_error = "Incorrect email";
            }
        }
    }
?>