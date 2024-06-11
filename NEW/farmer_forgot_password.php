<html>
<head>
<title>Password updated </title>
<style>
        body {
            background-image: url('./images/HarvestoBgImg.jpeg'); 
            background-size: cover;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;	
		}
		h1{
			color : #000080;
			font-family : 'Times New Roman' ;
			font-size : 40px;
			margin : 50px;
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



mysqli_query($conn, "UPDATE farmer SET password = '$enteredPassword' WHERE username = '$enteredUsername'");

//$result = $conn->query($sql);
//echo '<script>alert("Your new password has been updated successfully")</script>';
echo '<h1>Your new password has been updated successfully!!!!</h1>';

// Close the database connection
$conn->close();
?>


<br/><br/><br/><br/>
<center>
<div class="login-container">
<a href = "FarmerLogin.html"><input type="submit" value="Back to Login "></a>
</div>

</center>
</body>

</html>