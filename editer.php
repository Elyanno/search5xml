<?php
include 'security/security.php';
?>
<!DOCTYPE html>
<!--
	Fractal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<meta name="robots" content="noindex">
		<title>Web Tux Search</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/x-icon" href="images/favicon.ico">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<center>
<p>
<h2>Base de données :</h2><br>
<?php $content=file_get_contents('moteur/data.xml'); ?>
<form method="post" action="editer2.php">
<strong>Les sites déjà publiés : (data.xml)</strong><br>
<textarea name="content_data" rows="10" cols="90"><?php echo htmlentities($content); ?></textarea>
<?php $content=file_get_contents('moteur/moteur.xml'); ?>
<br><strong>Les sites déjà publiés : (moteur.xml)</strong><br>
<textarea name="content_moteur" rows="10" cols="90"><?php echo htmlentities($content); ?></textarea>
<br><input type="submit" name="ok" value="Modifier et/ou supprimer les bases de données" />
</form>
</p>
				</center>
			</header>
			<footer id="footer">
				<a href="http://www.w3.org/html/logo/">
					<img src="./../engine2/images/html5.png" width="209" height="51" alt="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Performance &amp; Integration, Semantics, and Offline &amp; Storage" title="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Performance &amp; Integration, Semantics, and Offline &amp; Storage"/>
					</a><br><br>
				<p class="copyright">
				&copy; Base de la template credits : <a href="http://html5up.net">HTML5 UP</a><br>
				<a href="index.html">Moteur</a> et site : Yann Albin<br>
			<a href="admin.php">Administration</a></p>
			</footer>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>