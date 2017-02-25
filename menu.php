<?php

	$current = basename($_SERVER['PHP_SELF']);

?>

<nav class="navbar navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><img src="resources/logo.gif"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar">
		<ul class="nav navbar-nav">
			<li <?php if ($current == 'index.php') echo 'class="active"' ?>><a href="./">Hjem</a></li>
			<li <?php if ($current == 'about.php') echo 'class="active"' ?>><a href="./about.php">Om Oss</a></li>
			<li <?php if ($current == 'program.php') echo 'class="active"' ?>><a href="./program.php">Program</a></li>
			<li <?php if ($current == 'contact.php') echo 'class="active"' ?>><a href="./contact.php">Kontakt</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li<?php if ($current == 'login.php') echo 'class="active"' ?>><a href="#">Login</a></li>
		</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>