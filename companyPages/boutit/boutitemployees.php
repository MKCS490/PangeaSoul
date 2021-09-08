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
                <h1>Boutit</h1>
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
                        <li><a href="boutitemployees.php">Employees</a></li>
                        <li><a href="boutitstats.php">Stats/Graphs</a></li>
                        <li><a href="boutitaffiliates.php">Affiliates</a></li>
                        <li><a href="boutitfunding.php">Funding</a></li>
                        <li><a href="boutitmessages.php">Messages</a></li>
                        <li><a href="boutitupload.php">Upload</a></li>
                    </ul>
                </div>
            <div id="mainContent">
                <h1><i class="fas fa-users"></i>Current Employees at Boutit</h1>
                <?php
                    $query = "SELECT * FROM boutit";
                    $result = mysqli_query($con, $query);
                    $num = mysqli_num_rows($result);
                ?>
                <h2>
                    Total Employees: <?php echo $num ?>
                </h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                    </tr>
                    <?php
                        $query = "SELECT * from boutit";
                        $result = mysqli_query($con, $query);
                        
                        if($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr><td>". $row['empName'] ."</td><td>". $row['email'] ."</td><td>". $row['position'] ."</td></tr>";
                            }
                            echo "</table>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>