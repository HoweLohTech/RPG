<!DOCTYPE html>
<html>
<head>
	<link href="bootstrap-3.3.1-dist\dist\css\bootstrap.css" rel="stylesheet"/>
	<link href="dungeonstyle.css" rel="stylesheet"/>
	<title>Player Page</title>
</head>
<body>
	<?php include 'Header.php'?>
	<div class="PlayerHead">
		<div class="col-md-12">
			<div class="container">
				<h1>Player Page</h1>
			</div>
		</div>
	</div>	
	<div class="top"> <!--Top Half of page-->
		<div class="MapView">
			<div class="col-md-12">
				<div class="container">
					<h3>Map Viewer</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom"><!--Bottom half of page-->
		<div class="chat">
			<div class="col-md-10">
			<h3>Chat</h3>
				<!--<div class="chatRoom">
					<div id="menu">
						<p class="welcome">
							Welcome! <b></b>
						</p>
						<p class="logout">
							<a id="exit" href="#">Exit</a>
						</p>
						<div style="clear:both">
						</div>
					</div>
					<div id="chatbox">
					</div>
					<form name="message" action="">
						<input name="usermsg" type="text" id="usermsg" size="63" />
						<input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
					</form>
				</div>-->
			</div>
		</div>	
		<div class="RollDice">
			<div class="col-md-2">
				<div class="container">
					<h3>Die Roller</h3>
				</div>
			</div>
		</div>
	</div>
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
<script src="jquery-1.11.2.min.js"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"/>
<script src="dungeonapp.js"/>
</body>
</html>