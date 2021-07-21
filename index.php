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
    <title>The Sparks Bank</title>
    <link rel="stylesheet" href="css/style.css"><?php  time(); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <style>
         #about .box1{
            max-width: 400px;
            background: rgba(255,255,255,.2);
            box-shadow: 0 5px 15px rgba(0,0,0,.9);
        
        } 
        /* rgba(255,255,255,.2); */
        #about .marg1{
            margin: 50px 500px; 
        }
        #about .marg2{
            margin: 50px 500px; 
        }
        #about .marg3{
            margin: 50px 500px; 
            padding-left: 23px;
        }
    </style>
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="img/bank.png" alt="Bank Logo" >
            <p id="name">THE SPARKS BANK</p>
        </div>

        <ul>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#services">Services</a></li>
            <li class="item"><a href="#about">About</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>
    <section id="home">
        <h1 class="heading">
            Welcome to The Sparks Bank
        </h1>
        <p><em>The Sparks Bank</em> provides better way to <b>BANK</b> your way</p>
        <p>Now <em>transfer money</em> just by some clicks</p>
    </section>
    <section class="services">
        <h1 class="heading">
            Services
        </h1>
        <div id="services">
            <div class="box">
                <img src="img/cust.png" alt="customer logo">
               
                <button class="btn" onClick="window.location = 'customer.php'">View Customer</button>
            </div>

            <div class="box">
                <img src="img/transfer.png" alt="Money transfer logo">
               
                
                <button class="btn" onClick="window.location = 'transfer.php'">Transfer Money</button>
            </div>

            <div class="box">
                <img src="img/list.png" alt="list logo">
                
                
                <button class="btn" onClick="window.location = 'transactionhistory.php'">Transaction History</button>
            </div>
        </div>
    </section>
    <section id="about">
        
        <h1 class="heading">
            About
        </h1>
        <div class="box1 marg1">
            <p>I'm Archana, a self motivated post-graduate, aspiring to build a career in the field of
            Frontend Web Development / Web UI Development by utilizing my skills.</p>
        </div>
        <div class="box1 marg2">
            <p>I learned about web development while completing this task. Made use of HTML,CSS,Javascript, PHP and Bootstrap</p>
        </div>
        <div class="box1 marg3">
            <p>I'm thankful to sparks foundation for lending me this opportunity.</p>
        </div>
        
    </section>
    <section id="contact">
        <h1 class="heading1 center">
            Contact Us
        </h1>
        <div class="contactbox">
            <form action="">
                <div class="formgroup">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your Name">
                </div>
                <div class="formgroup">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="name" placeholder="Enter your email">
                </div>
                <div class="formgroup">
                    <label for="telephone">Phone Number</label>
                    <input type="tel" name="Phoneno" id="name" placeholder="Enter your Phone number">
                </div>
                <div class="formgroup">
                    <label for="name">Message</label>
                    <textarea name="message" id="message" cols="30" rows="5"></textarea>
                </div>
                <div class="formgroup">
                    <button class="btn">SUBMIT</button>
                </div>
                
                
                
            </form>
        </div>
    </section>
    <footer id="foot">
        <div class="center">
            Copyright &copy; Archana Date intern of The Sparks Foundation. All rights Reserved.
        </div>
    </footer>
</body>
</html>
