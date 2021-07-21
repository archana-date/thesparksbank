
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
	$q="select * from customer";
	$result=mysqli_query($conn,$q);
?>

<html>
<head>
	<title>Customer Details</title>
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

    <h2 style="color: rgb(4, 13, 107);text-align: center;font-family: Bree Serif', serif;" >Transfer Money </h2>
    <table class="flat-table flat-table-1" align=center style="font-family: serif;color:darkblue;font-weight: bold;">
	<thead>
		<th>CUSTOMER ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>BALANCE</th>
	</thead>
	<tbody>
		<tr align = center>
        
		<?php  
			while($row=mysqli_fetch_array($result)){
         ?>
		 
		<td><?php echo  $row["cid"]; ?></td>
		<?php echo "<td> <a href = 'transact.php?cname=$row[1]'>$row[1]</a></td>";?>
		<td><?php echo  $row["email"]; ?></td>
		<td><?php echo  $row["balance"]; ?></td>
		<tr align = center>
		
		<?php }
		?>
		
		</tr>

        
	</tbody>
	</table>
	<br><br>
	
    
</body>
</html>
