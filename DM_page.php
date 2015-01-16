<!DOCTYPE html>
<html>
<head>
	<link href="bootstrap-3.3.1-dist\dist\css\bootstrap.css" rel="stylesheet"/>
	<link href="dungeonstyle.css" rel="stylesheet"/>
	<title>DM Page</title>
</head>
<body>
	<?php include 'Header.php'?>
	<div class="DMHead">
		<div class="col-md-12">
			<div class="container">
				<h1>Dungeon Master Page</h1>
			</div>
		</div>
	</div>
	<div class="top"> <!--Top half of page-->
		<div class="MapScreen">
			<div class="col-md-9">
				<h3>Map Viewer</h3>
			</div>
		</div>
		<div class="MapSelect">
			<div class="col-md-3">
				<h3>Map Selection</h3>
			</div>
	</div>
	<div class="bottom"> <!--Bottom half of page-->
		<div class="chat">
			<div class="col-md-10">
				<h3>Chat Screen</h3>
			</div>
		</div>
		<div class="DiceRoll">
			<div class="col-md-2">
				<h3>Dice Roller</h3>
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
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="script.js"></script>
</body>
</html>