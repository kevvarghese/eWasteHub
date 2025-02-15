<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./connect.php">
    <link rel="stylesheet" href="dashboard.css">
    <title>Consumer Dashboard</title>
    <style>
        
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color:black;
            padding: 10px 20px;
            color: white;
        }

        .navbar .logo img {
            height: 50px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
        }

        .navbar a:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        body {
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        .main-container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            color: white;
            padding: 20px;
            position: fixed;
            left: 0;
            top: 60px; 
            bottom: 0;
        }

        .content {
            margin-left: 270px; 
            padding: 20px;
            width: calc(100% - 270px);
            margin-top: 60px; 
        }
    </style>
</head>
<body>

   
    <div class="navbar">
        <div class="logo">
            <a href="./index.html">
                <img src="./logo2.png" alt="Logo" style="height:40px;">
            </a>
        </div>
        <div class="shortcuts">
            <a href="./index.html" id="index">
                <i class="glyphicon glyphicon-home large-icon"></i>
            </a>
        </div>
          
        <a href="./logout.php" id="login">Logout</a>
    </div>

    <div class="main-container">
      
        <div class="sidebar">
            <h2>eWaste Hub</h2>
            <br>
            <ul>
                <li><a href="./users.php">Users</a></li>
                <li><a href="">Product</a></li>
                <li><a href="">City</a></li>
                <li><a href="">Collection Center</a></li>
                <li><a href="">Rewards</a></li>
                <li><a href="">Report</a></li>
                <li><a href="">Staff</a></li>
            </ul>
        </div>

   
        <div class="content">
            <h1>List of Registered User and Roles Assigned</h1>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Reward ID</th>
                        <th>Total Points</th>
                        <th>Redeemed Points</th>
                        <th>Balanced Points</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     session_start(); 
include 'connect.php';
                
                
                     if (!isset($_SESSION['userid'])) {
                    echo "<p style='color: red; text-align: center;'>User not logged in! <a href='index.php'>Login</a></p>";
                    exit();
                    }

                    

                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }

                    

                    $userid = $_SESSION['userid'];
                    
                    $sql = "SELECT rewardid, totalpoints, redeemedpoints, balancepoints FROM rewards WHERE userid = '$userid'";
                    $result = $connection->query($sql);

                    if (!$result){
                        die("Invalid query: ". $connection->error);
                    }

                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>".$row['rewardid']."</td>
                            <td>".$row['totalpoints']."</td>
                            <td>".$row['redeemedpoints']."</td>
                            <td>".$row['balancepoints']."</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href=''>Redeem Points</a>
                            </td> 

                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
