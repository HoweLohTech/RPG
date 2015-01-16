<?php	
	echo '<div class="nav"> <!--Navigation Pane-->
		<div class="container">
			<ul class="nav nav-tabs" class="pull-left">
				<li class="active">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="DM_page.php">Dungeon Masters</a>
				</li>
				<li>
					<a href="Player_Page.php">Players</a>
				</li>
			</ul>
			<form class="pull-left" action="login.php" method="post">
				Username: <input class="logbox" type="text" name="username">
				Password: <input class="logbox" type="text" name="password">
				<input type="submit">
			</form>
			<a class="NewU" href="newUserPage.php">New to HoweLoh?</a>
			<ul class="nav nav-pills" class="pull-right">
				<li>
					<a href="about.php">About us</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>';
?>
