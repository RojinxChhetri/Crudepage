<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script src="main.js">
</script>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>

  	<?php endif ?>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Hello <strong><?php echo $_SESSION['username']; ?></strong> Welcome Back ;)</p>
    <?php endif ?>

	<div class="input-group">
	  Find odd or Even:<input id="age" placeholder="Enter Number"><br />
	  </div>
	  <button onclick="odd_even()" class="btn" >Click me for Result</button>
	  
	  <div class="input-group">
	  Know You are Allowed to Vote or not:<input id="vote" placeholder="Enter your age"><br />
	  </div>
	  <button onclick="vote()" class="btn" >Check voting age</button>

	  <div class="input-group">
	  Check number is Palindrome or Not:<input id="no_input" placeholder="Enter number"><br />
	  </div>
	  <button onclick="palin()" class="btn" >Check Palindrome</button>

	  <div class="input-group">
	  Get numbers on Reverse : <input id="rever" placeholder="Enter numbers"><br />
	  </div>
	  <button onclick="rev()" class="btn" >Reverse Number</button>

	  <div class="input-group">
	  Which Multiplicatin Table you Want? <input id="tab" placeholder="Enter number"><br />
	  </div>
	  <button onclick="table()" class="btn" >Get Table</button>

	  <p> <a href="index.php?logout='1'" style="color: green;">logout</a> </p>
</div>
		
</body>
</html>