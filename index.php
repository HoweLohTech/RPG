<!DOCTYPE html>
<html>
<head>
	<link href="bootstrap-3.3.1-dist\dist\css\bootstrap.css" rel="stylesheet"/>
	<link href="dungeonstyle.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="favicon.ico"/>
	<title>Home Page</title>
</head>
<body>
	<?php include 'Header.php'?>
	<div class="jumbotron"> <!--Giant picture-->
		<div class="container">
			<div class="jumboTextbox">
				<h1>Eric & Preston's Campaign Tool</h1>
				<h2><?php
					$roll = rand (1,20);
					echo "You rolled a " . $roll;

					if ($roll == 20){
						echo ", Critical Hit!";
					}
					elseif ($roll == 1){
						echo ", Critical Fail...";
					}
					else {
						echo ".";
					}
				?></h2>
				<p>
					This tool is designed to be a complete online experience for Dungeon Masters and their players to be able to join together to battle the endless foes that can be found in the world of your creation. You can create maps and move icons so you can see the action going on in real time. There is even a <i>social networking</i> feature that allows you to chat with each other while you defeat the monstrous hoards.
				</p>
			</div>
		</div>
	</div>
	<div class="container"> <!-- Worried about cheating?-->
		<p>
			Worried about players cheating their rolls? As long as you use the integrated dice, the outcome will appear in the chat. Players will then have to add their bonuses to give their DM their correct outcome.
		</p>
	</div>
	<div class="versions"> <!--Information about different versions-->
		<div class="container">
		<h3>Curious about D&D Editions?</h3>
		<div class="row">
			<div class="col-md-2">
				<h4>D&D <i>original<i></h4>
				<p>The original version of D&D was released in 1974. It included 3 classes (fighter, magic-user, cleric), 3 alignments (lawful, neutral, chaotic), and 4 races (human, elf, dwarf, and hobbit). Rules were given for wilderness travel by both land and sea, hiring specialists, building fortifications and setting up baronies. For more information, click <a href="http://en.wikipedia.org/wiki/Dungeons_%26_Dragons_(1974)" target="_blank">here</a>.</p>
			</div>
			<div class="col-md-2">
				<h4>Advanced D&D</h4>
				<p>The second major addition to Dungeons & Dragons was called <i>Advanced Dungeons & Dragons</i>. The main addition to this game was more organized rules than its previous version. This was only made more evident through the creation of 3 core rule books. These books are the <i>Players Handbook</i>, <i>Dungeon Masters Guide</i>, and <i>Monster Manual</i>. Other books were added to expand on the rules that were brought in the new core rule books. For more information, click <a href="http://en.wikipedia.org/wiki/Editions_of_Dungeons_%26_Dragons#Advanced_Dungeons_.26_Dragons" target="_blank">here</a>.
			</div>
			<div class="col-md-2">
				<h4>D&D Version 3</h4>
				<p>In the year 2000, the third version of Dungeons & Dragons was released. This release allowed for a new system of feats and skills. This gave players the ability to further customize their characters. It was also centred on a d20 system of gaming (meaning nearly all situations asked for the players to roll a 20 sided die.) For more information, click <a href="http://en.wikipedia.org/wiki/Editions_of_Dungeons_%26_Dragons#Dungeons_.26_Dragons_3rd_edition" target="_blank">here</a>.</p>
			</div>
			<div class="col-md-2">
				<h4>D&D Version 3.5</h4>
				<p>The revision to version 3 (dubbed version 3.5) is the most popular version of the game. It brought many changes to the core rules of version 3, while also expanding both the <i>Dungeon Masters Guide</i> and the <i>Monster Manual</i>. When the next version came out, many players continued to play 3.5 despite the update. For more information, click <a href="http://en.wikipedia.org/wiki/Editions_of_Dungeons_%26_Dragons#Dungeons_.26_Dragons_v3.5" target="_blank">here</a>.</p>
			</div>
			<div class="col-md-2">
				<h4>D&D 4<sup>th</sup> Edition</h4>
				<p>Unlike it's previous versions, when 4<sup>th</sup> edition was released, all 3 core rule books were released at the same time; rather than in monthly instalments. However, 4<sup>th</sup> edition had more core rule books that prior versions. Each year brought a new <i>Player's Handbook</i>, <i>Dungeon Master's Guide</i>, and <i>Monster Manual</i>. For more information, click <a href="http://en.wikipedia.org/wiki/Editions_of_Dungeons_%26_Dragons#Dungeons_.26_Dragons_4th_edition" target="_blank">here</a>.</p>
			</div>
			<div class="col-md-2">
				<h4>D&D 5<sup>th</sup> Edition</h4>
				<p>5<sup>th</sup> Edition was released in the last half of 2014. The game was mostly created based upon play testing among fans of the games. It brought out abilities that game the characters Advantages/Disadvantages, and makes the skill list a more supportive set of abilities. For more information, click <a href="http://en.wikipedia.org/wiki/Editions_of_Dungeons_%26_Dragons#Dungeons_.26_Dragons_5th_edition" target="_blank">here</a>.</p>
			</div>
		</div>
		</div>
	</div>
	<div class="container"> <!--Tag-->
		<h3>
			Happy Dungeoneering!
		</h3>
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
</body>
</html>