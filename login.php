<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "talkaitdb";

// Attempt to connect to the MySQL server
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the database exists, and if not, create it
if (!mysqli_select_db($conn, $dbname)) {
    $createDatabaseSQL = "CREATE DATABASE $dbname";
    if (mysqli_query($conn, $createDatabaseSQL)) {
        echo "Database created successfully. ";
    } else {
        die("Error creating database: " . mysqli_error($conn));
    }
}
// else{ echo "conn success";
// }

if (isset($_POST['signupbtn'])) {
    $email = $_POST['signup-email'];
    $username = $_POST['signup-username'];
    $password = $_POST['signup-password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashedPassword')";
    if (mysqli_query($conn,$sql) === TRUE) {
        header("Location: ../h.php");
        exit;
        // echo "saved success";
    } else {
        echo "error occured";
    }
}

if (isset($_POST['loginbtn'])) {
    $email = $_POST['login-email'];
    $password = $_POST['login-password'];

    $sql = "SELECT id, password FROM users WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);

    if ($result->num_rows === 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            $user_id = $row['id'];
            $session_token = bin2hex(random_bytes(16));
            $expiry_date = date('Y-m-d H:i:s', strtotime('+1 hour'));
            
            // Insert session data into the 'sessions' table
            $sql = "INSERT INTO sessions (user_id, session_token, expiry_date) VALUES ('$user_id', '$session_token', '$expiry_date')";
            if (mysqli_query($conn,$sql) === TRUE) {
    
                header("Location: ../h.php");
                exit;
                // echo "log in success";
            } else {
                echo "error in session creation";
            }
        } else {
            echo "Invalid password";
        }
    } else {
        echo " User not found";
    }
}

mysqli_close($conn);
?>
