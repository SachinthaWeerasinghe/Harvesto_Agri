<!DOCTYPE html>
<html lang="en">
<head>
    <title>Harvesto Customer Registration</title>
	<style>

			body {
				font-family: 'Times New Roman', sans-serif;
				background-color: #f2f2f2;
				margin: 0;
				padding: 0;
			}

			center {
				margin-top: 20px;
			}

			h1 {
				color: #333;
			}

			form {
				background-color: #fff;
				max-width: 500px;
				padding: 20px;
				border: 1px solid #ccc;
				border-radius: 5px;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			}

			table {
				width: 100%;
			}

			td {
				padding: 10px;
			}

			label {
				font-weight: bold;
			}

			input[type="text"],
			input[type="password"],
			select {
				width: 100%;
				padding: 10px;
				margin-bottom: 10px;
				border: 1px solid #ccc;
				border-radius: 3px;
			}

			button[type="submit"] {
				background-color: #333;
				color: #fff;
				border: none;
				padding: 10px 20px;
				border-radius: 3px;
				cursor: pointer;
			}

			button[type="submit"]:hover {
				background-color: #555;
			}

</style>
	
	
	
	
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var address = document.getElementById("address").value;
            var phoneNo = document.getElementById("phoneNo").value;
            var email = document.getElementById("email").value;
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            // Simple validation for empty fields
            if (name === "" || address === "" || phoneNo === "" || email === "" || username === "" || password === "" || confirmPassword === "") {
                alert("All fields must be filled out");
                return false;
            }

            // Validation for phone number (only digits allowed)
            if (!/^[0-9]{1,10}$/.test(phoneNo)) {
                alert("Phone number must contain only digits");
                return false;
            }

            // Validation for email format
            if (!/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(email)) {
                alert("Invalid email format");
                return false;
            }

            // Validation for password matching
            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }

            return true; // Form is valid and can be submitted
        }
    </script>
</head>
<body>
    <center>
        <h1>Harvesto Customer Registration</h1>
        <form action="dataInsertion.php" method="post" onsubmit="return validateForm()">
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
                    <option value ="Western">Western</option>
					<option value = "Central"> Central</option>
					<option value = "Nothern"> Nothern</option>
					<option value = "Eastern"> Eastern </option>
					<option value = "Southern"> Southern </option>
					<option value = "North Central">North Central</option>
					<option value = "Uva"> Uva</option>
					<option value = "North Western"> North Western</option>
					<option value = "Sabaragamuwa"> Sabaragamuwa </option>
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
		
        <tr>
            <td>Confirm Password:</td>
            <td>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <div id="div4"></div>
            </td>
        </tr>
		
        <tr>
            <td colspan="2">
                <button type="submit">Submit</button>
            </td>
        </tr>
    </table>
	
        </form>
    </center>
</body>
</html>
