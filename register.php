<?php 
include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

   
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $connection->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password) 
                        VALUES ('$firstName', '$lastName', '$email', '$password')";
        if ($connection->query($insertQuery) === TRUE) {
            header("Location: /ewh/index.php");
            exit();
        } else {
            echo "Error: " . $connection->error;
        }
    }
}


if(isset($_POST['signIn'])){

    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role']; 

      
        if ($row['role'] == 'admin') {
            header("Location: ./admin_dashboard_static.php");
        } elseif ($row['role'] == 'employee') {
            header("Location: ./employee_dashboard.php");
        } else {
            header("Location: ./consumer_dashboard.php");
        }
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password";
    }
}
?>
