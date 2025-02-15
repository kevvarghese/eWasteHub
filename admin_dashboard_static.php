<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./connect.php">
    <link rel="stylesheet" href="dashboard.css">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="logo2.ico" type="image/x-icon"/>
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
                <li><a href="./admin_dashboard.php">Users</a></li>
                <li><a href="">Product</a></li>
                <li><a href="">City</a></li>
                <li><a href="">Collection Center</a></li>
                <li><a href="">Rewards</a></li>
                <li><a href="">Report</a></li>
                <li><a href="">Staff</a></li>
            </ul>
        </div >
        <div style="padding-left:750px ;">
            <H1 style="font-weight:900;">Welcome To Admin Dashboard</H1>
        
        </div>
    </div>

</body>
</html>
