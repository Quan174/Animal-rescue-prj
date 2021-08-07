<?php
 include_once 'header.php';
?>

<section class="signup-form">
	<br>
	<h2>Sign up</h2>
<div class="signup-form">
	<form action="includes/signup.inc.php" method="post">
		<input type="text" name="name" placeholder="Full name">
		<input type="text" name="email" placeholder="Email">
		<input type="text" name="uid" placeholder="Username">
		<input type="password" name="pwd" placeholder="Password">
		<input type="password" name="pwdrepeat" placeholder="Repeat password">
		<button type="submit" name="submit">Sign up</button>
	</form>
</div>
</section>

<?php 
  if (isset($_GET["error"])) {
  	if ($_GET["error"] == "emptyinput") {
  		echo "<p>Plesea fill in the blank </p>";
  	}
  	else if ($_GET["error"] == "invalidemail") {
  		echo "<p>Not an email </p>";
  	}
  	else if ($_GET["error"] == "passworddontmatch") {
  		echo "<p>Passwords does not match </p>";
  	}
  	else if ($_GET["error"] == "stmtfailed") {
  		echo "<p>Something went wrong ! Try again later </p>";
  	}
  	else if ($_GET["error"] == "usernametaken") {
  		echo "<p>Username already taken </p>";
  	}
  	else if ($_GET["error"] == "none") {
  		echo "<p>You have signed up ! </p>";
  	}
  }


?>

<br>
<br>
<br>

<?php 
  include_once 'footer.php';
 ?>