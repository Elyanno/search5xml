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
		<script>
//La fonction qui devrai faire apparaitre un input
		function test2(){
		document.getElementById('bouton_cache2').type = "text";
		}
	// -->
</script>	
<script>
//La fonction qui devrai faire apparaitre un input
		function test3(){
		document.getElementById('bouton_cache3').type = "text";
		}
	// -->
</script>	
	</head>
	<body class="is-preload">
		<!-- Header -->
			<header id="header">
				<center>
				<h2>Ajouter du contenu :</h2><br>
				<form method="POST" action="ajouter2.php" name ="post">
<table>
<tr>
<td>
<input name="site" size="30" type="search" value="Site internet" />
</tr>
<tr>
<td>
<input name="cle1" size="30" type="search" value="Mot clé 1" />
</td>
</tr>
<tr>
<td>
<input name="cle2" size="30" type="search" value="Mot clé 2" />
</td>
</tr>
<tr>
<td>
<input name="cle3" size="30" type="search" value="Mot clé 3" />
</td>
</tr>
<tr>
<td>
<input name="cle4" size="30" type="hidden"  value="" id="bouton_cache2" />
</td>
</td>
<td>
<input type="button" onclick="test2()" value="+" />
</td>
</tr>
<tr>
<td>
<input name="cle5" type="hidden" size="30" value="" id="bouton_cache3" />
</td>
<td>
<input type="button" onclick="test3()" value="+" />
</td>
</tr>
<tr>
<td>
<input name="lien" size="30" type="search" value="site" />
</td>
</tr>
</table>
<textarea cols="30" rows="2" name="commentaire">Commentaire</textarea><br />
<input value="Envoyer" name="submit" type="submit">
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