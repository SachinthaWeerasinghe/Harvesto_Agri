<html>
<head>
<title> Invalid Login </title>
</head>

<style>
        body { 
			background-color : black;
            background-size: cover;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;		
		}

        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 70px;
            border-radius: 5px;
            text-align: center;
			color : #000080;
			font-family : 'Times New Roman';
			font-size : 40px;
        }

        .login-container img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

		p{
			font-family : 'Times New Roman';
			font-size : 20px;
			color : black;
			font-weight : bold ;
		}

		.login-container input[type="submit"] {
            background-color: #000080;
            color: white;
			font-size : 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }



    </style>
</head>

<body>
	<div class="login-container">
	<img src = "./images/cross.webp" />
    <h2>Invalid Login</h2>
	
	<p> An error in the username or password that you just entered !!!!!</p>
    <br/>
	<a href = "CustomerLogin.html"><input type="submit" value="Back to Login "></a>
	<a href = "forgot_password.html"><input type="submit" value="forgot password?">
	</div>



<?php
// Database connection
$host = "localhost";
$username = "phpuser";
$password = "1234qwer";
$database = "Harvesto_database";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$enteredUsername = $_POST['username'];
$enteredPassword = $_POST['password'];

// Query the database
$sql = "SELECT * FROM customer WHERE username = '$enteredUsername' AND password = '$enteredPassword'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Valid login; redirect to the product page
    header("Location: ../Our Product/product.html");
} else {
    // Invalid login; display error message
   // echo "Invalid login credentials. Please try again.";
	
}
session_start();
$_SESSION['id'] = 5;


// Close the database connection
$conn->close();
?>



</html>
