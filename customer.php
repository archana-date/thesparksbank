<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "sparksbank";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: 'Bree Serif', serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
		font-family: 'Bree Serif', serif;
		font-size:30px;
        padding:20px;
        text-align: center;
        color: rgb(4, 13, 107);
		}
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color:#C6E2FF ;
		}
	</style>
</head>
<body>
    <h2>Customer Details</h2>

    <table border="2">
    <tr>
        <td>Customer ID</td>
        <td>Full Name</td>
        <td>Email</td>
        <td>Balance</td>
    </tr>

        <?php

            $records = mysqli_query($conn,"select * from customer"); // fetch data from database

            while($data = mysqli_fetch_array($records))
            {
                ?>
                <tr>
                    <td><?php echo $data['cid']; ?></td>
                    <td><?php echo $data['cname']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['balance']; ?></td>
                </tr>	
                <?php
                }
                ?>
</table>
</body>
</html>