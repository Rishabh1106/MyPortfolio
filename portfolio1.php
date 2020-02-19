<!DOCTYPE html>
<html>
<head>
	<title> My Portfolio </title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	
</head>
<body>

<div class="background">
	
<div class="nav">
	<a class="a active" href="#">HOME</a>
	<a class="b" href="#">ABOUT Me</a>
	<a class="c" href="#">GALLERY</a>
	<a class="d" href="#">CONTACT ME</a>
</div>
</div>

<div class="content">
	<div class="home">
		<h1>I am Rishabh</h1>
		<h3>Enthusiastic Web and App developer </h3>
		</div>

	<div class="aboutus">
		<p><b> Hello Friends, </b><br>
			I am <b>Rishabh Nagar</b>, student of <b>IIIT Naya Raipur CSE, 3rd SEM </b> <br>
			I am enthusiastic <b>WEB and App developer</b>, right now I am working on some projects of <b>Android Studio and learning Flutter. </b> I used work as a Freelancer right now. I am lerning all these stuffs to increase my skill for my startUp because my ultimate goal is to be a <b>Successful Entreprenuer</b>. <br>
			I belongs to a middle class family and proper from <b>Kota , Rajasthan </b><br>

			For the myself I used to write <b> poems , hindi shayris, short romantic stories. </b> I have a facebook page with a hashtag 
			<b><a href="https://www.facebook.com/ItsRISHABITES-114024943363903/?eid=ARBJWoShBjHc--2FLt7oFH1lL596GpTe2fmACYccmZmjTaRYhxfTLJCJypEZJHx4AGfZGtaOI2gWtSof"> #RISHABITES</a> </b>. You can visit my page and look for my poems But don't forget to LIKE,SHARE and FOLLOW ME :) <br>
</p>

	<p>My favorite sport is Cricket . I used to play cricket whenever i grt time and never leave any match of Team India. I am gym freak also :) ,Whenever I feel depressed I go to gym workout for an hour and then focus on problem again.this is my way to deal the issues. If issue is big then first I used to take power nap or do meditation then deal with that issue. <br> I like to code but love the Android development and Web development.</p>

	<p>I love romantic and motivational songs, and big fond of motivational movies like <b>Persuit of happiness, Ae dil hai mushkil, Aashiqui 2</b> </p>
	<p>Well this is small intro of Me :-) . For more contact me, I am waiting for your connection.</p>

	</div>	
	<div class="gallery">
		<div class="image">
			<img src="1.jpg">
		</div>
		<div class="image">
			<img src="2.jpg">
		</div>
		<div class="image">
			<img src="3.jpg">
		</div>
		<div class="image">
			<img src="4.jpg">
		</div>
		<div class="image">
			<img src="5.jpg">
		</div>
		<div class="image">
			<img src="6.jpg">
		</div>
		<div class="image">
			<img src="7.jpg">
		</div>
		<div class="image">
			<img src="8.jpg">
		</div>
		<div class="image">
			<img src="9.jpg">
		</div>
</div>
		
		<div class="contactus">
			<div class="contactform">
				<form action="" method="post">
					<input type="text" name="" class="inputtext" placeholder="First Name" required>
					<input type="text" name="" class="inputtext" placeholder="Last Name" required>
					<input type="email" name="" class="inputtext" placeholder="Email" required>
					<textarea cols="4" class="inputmessage" rows="6" >Your Messages...!!! </textarea>
					<input type="button" name="" class="submitbutton" value="Submit!">
				</form>
			</div>
		</div>

</div>

<script type="text/javascript" src="jQuery file/jquery-v3.4.1.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('a').click(function(){
				//alert("I am click");
				var selected = $(this);
				$('a').removeClass('active');
				$(selected).addClass('active');
			});
		

		var $a = $('.a'),
		$b = $('.b'),
		$c = $('.c'),
		$d = $('.d'),
		$home = $('.home'),
		$aboutus = $('.aboutus');
		$gallery = $('.gallery');
		$contactus = $('.contactus');

		$a.click(function(){
			$home.fadeIn();
			$aboutus.fadeOut();
			$gallery.fadeOut();
			$contactus.fadeOut();
		});
		$b.click(function(){
			$aboutus.fadeIn();
			$home.fadeOut();
			$gallery.fadeOut();
			$contactus.fadeOut();
		});
		$c.click(function(){
			$aboutus.fadeOut();
			$home.fadeOut();
			$gallery.fadeIn();
			$contactus.fadeOut();
		});
		$d.click(function(){
			$aboutus.fadeOut();
			$home.fadeOut();
			$gallery.fadeOut();
			$contactus.fadeIn();
		});

	});

</script>

</body>
</html>