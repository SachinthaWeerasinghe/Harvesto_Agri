<!DOCTYPE html>
<html lang="en">
<head>
	<title>Harvesto Customer Registration </title>
</head>
<body>
	<center>
		<h1> Harvesto Customer Registration </h1>
		<form action="dataInsertion.php" method="post">
			
		<table border="0" cellpadding="10px">
        <tr>
            <td>
                <label for="name">Full Name:</label>
            </td>
            <td>
                <input type="text" id="name" name="name" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="address">Address:</label>
            </td>
            <td>
                <input type="text" id="address" name="address" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="province">Province of Residence:</label>
            </td>
            <td>
                <select name="province" id="province">
                    <option value="Western">Western</option>
                    <option value="Central">Central</option>
                    <option value="Northern">Northern</option>
                    <!-- Add more options as needed -->
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="phoneNo">Phone No:</label>
            </td>
            <td>
                <input type="text" id="phoneNo" name="phoneNo" pattern="[0-9]{1,10}" required>
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <input type="text" id="email" name="email" required>
                <div id="div2"></div>
            </td>
        </tr>
        <tr>
            <td>Username:</td>
            <td>
                <input type="text" id="username" name="username" required>
                <div id="div1"></div>
            </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>
                <input type="password" id="password" name="password" required>
                <div id="div3"></div>
            </td>
        </tr>
		<!--
        <tr>
            <td>Confirm Password:</td>
            <td>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <div id="div4"></div>
            </td>
        </tr>
		-->
        <tr>
            <td colspan="2">
                <button type="submit">Submit</button>
            </td>
        </tr>
    </table>
</body>
</html>
