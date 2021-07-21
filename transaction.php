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

  

	if(isset($_POST['submit'])){
		$a = $_POST['user'];
		$b = $_POST['Amount'];
		$d = $_GET['cname'];
	}
	
	$result1 = mysqli_query($conn,"SELECT * FROM customer where cname='$a'");
	if (!$result1) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}
	while($row = mysqli_fetch_array($result1)){
		$f = $row[3];
		$c = "UPDATE customer SET ";
		$c .= "balance=balance+'$b' WHERE cname='$a'";
		mysqli_query($conn,$c);
	}
	
	$result2 = mysqli_query($conn,"SELECT * FROM customer where cname='$d'");
	if (!$result2) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}
	while($row = mysqli_fetch_array($result2)){
		$g = $row[3];
		$e = "UPDATE customer SET ";
		$e .= "balance=balance-'$b' WHERE cname='$d'";
		mysqli_query($conn,$e);
	}
	
	$result3 = mysqli_query($conn,"SELECT * FROM customer where cname='$d'");
	if (!$result3) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}
	while($row = mysqli_fetch_array($result3)){
		$h = "INSERT INTO transactions(Sender, Receiver, Amount) VALUES('".$d."', '".$a."', '".$b."')";
		mysqli_query($conn,$h);
	}
	
?>

<html>
<head>
<script>
alert("Your Transaction has been Successful");
window.location.href="index.php";
</script>
</head>
<html>