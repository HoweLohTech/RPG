<!DOCTYPE html>
<html>
<head>
	<link href="bootstrap-3.3.1-dist\dist\css\bootstrap.css" rel="stylesheet"/>
	<link href="dungeonstyle.css" rel="stylesheet"/>
	<title>Home Page</title>
</head>
<body>
	<?php include 'Header.php'?>
	<h1>Contact Us</h1>
	<hr>
	<header class="body">
	</header>
	<div class="body">
	    <?php
			error_reporting(-1);
			$int1 = 3;
			$int2 = 3;
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['comment'];
            $headers = 'From: e.ed.loh@howeloh.com' . "\r\n" .
						'Reply-To: e.ed.loh@howeloh.com' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
            $to = "e.ed.loh@howeloh.com, pshowell@howeloh.com";
            $subject = "Comment from Game Site";
            $human = $_POST['human'];
			
			if ($_POST['submit'] && $human == $int1 + $int2) {				 
                if (mail ($to, $subject, $message, $headers)) { 
	                echo '<p>Message Sent!</p>';
	            } else if ($_POST['submit'] && $human != $int1 + $int2) {
	                echo '<p>You answered the anti-spam question incorrectly!</p>';
	            } else { 
	                echo '<p>Something went wrong, go back and try again!</p>'; 
	            }
            };
        ?>
	    <form method="post" action="contact.php"> <!--Contact form-->
	        <label>Name</label>
	        <input name="name" placeholder="John Smith"> <!--Name input-->
	        <label>Email</label>
	        <input name="email" type="email" placeholder="example@domain.com"> <!--email input-->
	        <label>Comment</label>
	        <textarea name="comment" placeholder="What is your comment?"></textarea><!--Message pane-->
	        <label>*What is <?php echo $int1 . " + " . $int2?>? (Anti-spam)</label><!--blocking spam-->
            <input name="human" placeholder="Answer">
	        <input id="submit" name="submit" type="submit" value="Submit"> <!--Submit button-->
	    </form>
	    <!--everything seems to work except for when it is time to submit the form. please look over the php. I think that is where the problem is. let me know. This is the tutorial I used to try to create this form (http://tangledindesign.com/how-to-create-a-contact-form-using-html5-css3-and-php/)-->
	</div>
	<footer class="body">
	</footer>
	<hr>
	<div class="foot"> <!--Footer for each page-->
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<p>This site was created to help with a chosen D&D campaign. You still need your own resources in order to have a successful game. Thanks for using this tool, and have fun!</p>
		</div>
		<div class="col-md-1">
		</div>
	</div>
</body>
</html>