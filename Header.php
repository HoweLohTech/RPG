<?php	
	echo '<div class="nav"> <!--Navigation Pane-->
		<div class="container">
			<ul class="pull-left">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="DM_page.php">Dungeon Masters</a>
				</li>
				<li>
					<a href="Player_Page.php">Players</a>
				</li>
				<li>
					<a href="about.php">About us</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		    <form class="pull-right" action="login.php" method="post">
				Username: <input class="logbox" type="text" name="username">
				Password: <input class="logbox" type="text" name="password">
				<input type="submit">
				<a class="NewU" href="newUserPage.php">New to HoweLoh?</a>
			</form>
		</div>
	</div>';
?>
