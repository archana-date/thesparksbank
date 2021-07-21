<?php
 
	session_start();
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


	$q="select * from transactions";
	$result=mysqli_query($conn,$q);
	$row_count=mysqli_num_rows($result);
	
?>
<html>
<head>
	<title>Transaction History</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
    background-color:skyblue;
		}

		h1{
		font-family: serif;
		font-size:40px;
    color: rgb(4, 13, 107);
		}
		
		td, th {
		border: 2px solid white;
		text-align: center;
		padding: 8px;
		}
		
	</style>
</head>
<body style="background-image:url(1.jpg);background-repeat: no-repeat;background-size: cover;background-blend-mode:hard-light; ">
<link rel = "stylesheet" type = "text/css" href = "style.css">


    <h1 style="color: rgb(4, 13, 107);;text-align: center;font-family: cursive;" >Transaction History</h1>
    <table style="font-family: serif;color: black;font-weight: bold;">
	<thead>
    <th>Transaction ID</th>
		<th>SENDER NAME</th>
		<th>RECEIVER NAME</th>
		<th>AMOUNT</th>	
	</thead>
	<tbody>
		<tr align = center>
        <?php  
		      while($row=mysqli_fetch_array($result)){
        ?>
          <td><?php echo  $row["tid"]; ?></td>
          <td><?php echo  $row["Sender"]; ?></td>
          <td><?php echo  $row["Receiver"]; ?></td>
          <td><?php echo  $row["Amount"]; ?></td>
          <tr align = center>
          <?php }
          ?>
    </tr>
	</tbody>
	</table>
	
		
</body>
</html>