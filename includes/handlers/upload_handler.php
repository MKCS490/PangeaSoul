<?php
    include("../../includes/config.php");
    include("../../includes/user_query.php");
    
    global $prompt;

    if (isset($_POST["submit"])) {

        $fileName = $_POST["fileName"];

        $fileNameRand = rand(1000,10000)."-".$_FILES["file"]["name"];

        $tmpFileName = $_FILES["file"]["tmp_name"];

        $uploadDirectory = '../../uploads';

        move_uploaded_file($tmpFileName, $uploadDirectory.'/'.$fileNameRand);

        $query = "INSERT into uploadedfiles(full_name, company, file_title, uploaded_file ) VALUES('$fullName', '$company', '$fileName','$fileNameRand')";

        if(mysqli_query($con, $query)){
            $prompt= "File successfully uploaded!";
        }
        else {
            $prompt = "Oops! There was a problem. Please try again.";
        }
    }
?>