<?php
include 'security/security.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="robots" content="noindex">
<title>Web Tux Search</title>
</head>
<body>
<center>
<?php
	if(isset($_POST['ok'])) {
		$fp=fopen('moteur/data.xml','w+');
		$news=stripslashes($_POST['content_data']);
		fwrite($fp,$news);
		fclose($fp);
		$fp=fopen('moteur/moteur.xml','w+');
		$news=stripslashes($_POST['content_moteur']);
		fwrite($fp,$news);
		fclose($fp);
	}
	echo '<p><br><br><br><strong><span style="color:green;">Modification(s) et/ou suppression(s) effectuée avec succès !</span></strong></p>';

	header ("Refresh: 3; URL=../html5/index.html");
?>
</center>
</body>
</html>


