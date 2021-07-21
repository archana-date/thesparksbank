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

	if(isset($_GET['cname'])){
		$name=$_GET['cname'];
	}

	$q="SELECT * from customer WHERE cname='$name'";
	$result=mysqli_query($conn,$q);
	$row_count=mysqli_num_rows($result);
	$_SESSION['senderName']=$name;
?>

<html>
<head>
	<title>transact</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h1{
		font-family: sans-serif;
		font-size:40px;
		}
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(odd) {
		background-color: white;	
		}
	</style>
</head>

<body>

		<h1 style="font-family:serif;text-align:center;color: rgb(4, 13, 107);">Account Details</h1>
		<table style="background-color:white;">
           <th>CUSTOMER ID</th>
           <th>NAME </th>
           <th>EMAIL</th>
		   <th>CURRENT BALANCE</th>
           <tr>
		   
			<?php  
				$row=mysqli_fetch_array($result)
			?>
			
             
			<td><?php echo  $row["cid"]; ?></td>
			<td><?php echo  $row["cname"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["balance"]; ?></td>
           </tr>

        </table>
	</div>
        
	<?php echo "<form method='post' action='transaction.php?cname=$name'>"?>
<br><br>
	<h3 style="font-family: serif;color: rgb(4, 13, 107);">Select the Customer</h3>
	<table border="0px">
		<tr>
		<td>Transfer To:</td>
		<td><select name="user">
			<option>--Select--</option>
   
			<?php  
				$q1="select * from customer";
				$result1=mysqli_query($conn,$q1);
				while($row=mysqli_fetch_array($result1)){
			?>

			<option value="<?php echo $row['cname']; ?>"> <?php echo $row["cname"]; ?></option>

			<?php }
			?>
			
            </select></td></tr> 
			<tr><td>Amount:</td><td><input type="text" name="Amount"></td></tr>
			<tr><td></td><td><input type="submit" name="submit" value="Submit" align=center style="margin-top: 10px; width:6em; height:2em; font-size:15px; background-color: skyblue; font-weight: bold;"></td></tr>
	</table>

</form>



</body>
</html>