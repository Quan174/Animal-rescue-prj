<?php
 include_once 'header.php';
?>

<section class="signup-form">
	<br>
	<h2>Log in</h2>
<div class="signup-form">
	<form action="includes/login.inc.php" method="post">
		<input type="text" name="uid" placeholder="Username/Email">
		<input type="password" name="pwd" placeholder="Password">
		<button type="submit" name="submit">Log in</button>
	</form>
</div>


<?php 
  if (isset($_GET["error"])) {
  	if ($_GET["error"] == "emptyinput") {
  		echo "<p>Plesea fill in the blank </p>";
  	}
  	else if ($_GET["error"] == "wronglogin") {
  		echo "<p>Incorrect login info </p>";
  	}
  }

?>
</section>
<br>
<br>
<br>

<?php 
  include_once 'footer.php';
 ?>