<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Animal rescue page</title>
	<link rel="stylesheet" type="text/css" href="Anistyle.css">
	<script src="https://kit.fontawesome.com/6854c68889.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
 include_once 'header.php';
?>
     <div class="landing_content center_row">
     	<div class="landing_info align_left">
     		<h1>
     			Helping animals <br>
     			Saving lives
     		</h1>
     		<p>Adopting from a shelter helps weaken the pet overpopulation cycle. Each year 8 to 12 million dogs, cats, puppies and kittens are euthanized because there are simply not enough homes for them</p>
     		<button><a href="#">Join us</a></button>
     	</div>
     	<div class="image_pet"></div>
     </div>
     </section>



     <!--help-->
     <section id="help" class="container_center">
     	<h1>Find out how to help the animals</h1>
     	<div class="help_cards--container center_row">
     		<div class="help_card container_center">
     			<span class="card_title">Adopting</span>
     			<h3>Give the animal a home</h3>
     			<p>Want to have a new companionship</p>
     			<div class="card_link container_center">
     				<a href="#" >Adopt now</a>
     			</div>
     		</div>
     		<div class="help_card container_center">
     			<span class="card_title">Volunteering</span>
     			<h3>Be part of the team</h3>
     			<p>Give back to the community,build new skills and meet new people </p>
     			<div class="card_link container_center">
     				<a href="signup.php" >Join now</a>
     			</div>
     		</div>
     		<div class="help_card container_center">
     			<span class="card_title">Donation</span>
     			<h3>Help the Foundation</h3>
     			<p>Every donation matters</p>
     			<div class="card_link container_center">
     				<a href="#" >Donate</a>
     			</div>
     		</div>
     	</div>
     </section>



     <!--Gallery-->
     <section id="gallery">
     	<img src="mandog.jpg" class="img_gallery" id="img_1">
     	<img src="hus.jpg" class="img_gallery" id="img_2">
     	<img src="pug.jpg" class="img_gallery" id="img_3">
     	<img src="kitten.jpg" class="img_gallery" id="img_4">
     	<img src="parrot.jpg" class="img_gallery" id="img_5">
     	<img src="pome.jpg" class="img_gallery" id="img_6">
     	<img src="tur.jpg" class="img_gallery" id="img_7">
     	<img src="cat.jpg" class="img_gallery" id="img_8">
     	<img src="hamster.jpg" class="img_gallery" id="img_9">
     </section>

     <!--Contact-->
     <form>
     	<div class="form_row">
     		<input type="text" id="name">
     		<label for="name">First name</label>
     	</div>
     	<div class="form_row">
     		<input type="text" id="last_name">
     		<label for="last_name">Last name</label>
     	</div>
     	<div class="form_row">
     		<input type="email" id="email">
     		<label for="email">Email</label>
     	</div>
     	<div class="form_row">
     		<input type="number" id="phone">
     		<label for="phone">Phone number</label>
     	</div>
     	<div class="form_row">
     		<textarea id="textarea" cols="30"
     		rows="10" placeholder="Write your message here"></textarea>
     		<button type="submit">Send message</button>
     	</div>
     </form>

     <footer>
     	<div class="footer_cont center_row">
     		<p>2021 &copy Animal Rescue</p>
     		<div>
     			<a href="#"><i class="fab fa-facebook"></i></a>
     			<a href="#"><i class="fab fa-instagram"></i></a>
     		</div>
     		
     	</div>
     </footer>

</body>
</html>