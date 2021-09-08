<?php
    include("config.php");

    if(isset($_SESSION['userLoggedIn'])) {
            $userLoggedIn = $_SESSION['userLoggedIn'];

            //reading from db where the email matches
            $query = "SELECT * from users where email ='$userLoggedIn' limit 1";
            $result = mysqli_query($con, $query);
            
            if($result) {
                //if such email exists, assign the firstName, lastName, and company 
                if($result && mysqli_num_rows($result) > 0) {

                    $user_data = mysqli_fetch_assoc($result);

                    $firstName = $user_data['firstName'];
                    $lastName = $user_data['lastName'];
                    $role = $user_data['role'];
                    $company = $user_data['company'];
                    $jobTitle = $user_data['jobTitle'];
                }

            }
            $fullName = $firstName.' ' .$lastName;
            $occupation = $jobTitle . ' ' . ' at '. $company;
        }

?> 