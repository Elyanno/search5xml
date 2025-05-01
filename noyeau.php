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
			<header id="header">
				<div class="content">
					<center>
					<?php


	$cle = $_POST['cle'];
	echo " <b>Résultats pour</b> '$cle' <br><br>";

    if (empty($cle)) {echo 'Veuillez entrez une recherche.';}


    //elseif (empty($texte)) {echo 'Aucun résultat.';}

    //else echo "Aucun réultat pour votre recherche.";

    $fichier = "moteur/moteur.xml";

    // Traitement des balises ouvrantes
    {function fonctionBaliseOuvrante($parseur, $nomBalise, $tableauAttributs)
    {
        // M?orisation du nom de la balise
        // afin d'en tenir compte dans la fonction "fonctionTexte"

        global $derniereBaliseRencontree;

        $derniereBaliseRencontree = $nomBalise;
    }
   
    // Fonction de traitement des balises fermantes
    function fonctionBaliseFermante($parseur, $nomBalise)
    {
        // On oublie la derniére balise rencontrée
        global $derniereBaliseRencontree;

        $derniereBaliseRencontree = "";
    }

    // Fonction de traitement du texte
    // qui est appelée par le "parseur"
    function fonctionTexte($parseur, $texte)
    {
        global $derniereBaliseRencontree;
        
        // Selon les cas on le texte
        // ou nous proposons un lien
        // Par d?aut les noms des balises sont
        // mises en majuscules
        
	$cle = $_POST['cle'];
	$cle = str_replace('a', 'A', $cle);
	$cle = str_replace('b', 'B', $cle);
	$cle = str_replace('c', 'C', $cle);
	$cle = str_replace('d', 'D', $cle);
	$cle = str_replace('e', 'E', $cle);
	$cle = str_replace('f', 'F', $cle);
	$cle = str_replace('g', 'G', $cle);
	$cle = str_replace('h', 'H', $cle);
	$cle = str_replace('i', 'I', $cle);
	$cle = str_replace('j', 'J', $cle);
	$cle = str_replace('k', 'K', $cle);
	$cle = str_replace('l', 'L', $cle);
	$cle = str_replace('m', 'M', $cle);
	$cle = str_replace('n', 'N', $cle);
	$cle = str_replace('o', 'O', $cle);
	$cle = str_replace('p', 'P', $cle);
	$cle = str_replace('q', 'Q', $cle);
	$cle = str_replace('r', 'R', $cle);
	$cle = str_replace('s', 'S', $cle);
	$cle = str_replace('t', 'T', $cle);
	$cle = str_replace('u', 'U', $cle);
	$cle = str_replace('v', 'V', $cle);
	$cle = str_replace('w', 'W', $cle);
	$cle = str_replace('x', 'X', $cle);
	$cle = str_replace('y', 'Y', $cle);
	$cle = str_replace('z', 'Z', $cle);
	$cle = str_replace('?', 'e', $cle);
	$cle = str_replace(' ', '_', $cle);

        switch ($derniereBaliseRencontree) {
            case $cle:  

                echo $texte;

                // if (empty($ligneXML)) {echo 'Pas de résultats.';} 

                break;
        }               

    }

    // Crétion du parseur XML
    $parseurXML = xml_parser_create();

    // Nom des fonctions à appeler
    // lorsque des balises ouvrantes ou fermantes sont rencontrés
    xml_set_element_handler($parseurXML, "fonctionBaliseOuvrante"
                                       , "fonctionBaliseFermante");

    // Nom de la fonction à appeler
    // lorsque du texte est rencontré
    xml_set_character_data_handler($parseurXML, "fonctionTexte");

    // Ouverture du fichier
    $fp = fopen($fichier, "r");
    // if (!$fp) die("Impossible d'ouvrir le fichier XML");

    // Lecture ligne par ligne
    while ( $ligneXML = fgets($fp, 1024)) {
        // Analyse de la ligne
        // REM: feof($fp) retourne TRUE s'il s'agit de la dernière
        //      ligne du fichier.
        xml_parse($parseurXML, $ligneXML, feof($fp)) or
            die("Erreur XML");
    }
    
    xml_parser_free($parseurXML);
    fclose($fp);}

?>
					</center>
				</div>
				<div class="image phone"><div class="inner"><img src="images/tux-phone(1).jpg" alt="" /></div></div>
			</header>
			</div>
			<center><br>
			<form action="noyeau.php" method="post">
			<input name="cle" type="search" value=""><br><br>
			<input type="submit" value="Rechercher"></form>
			</center>
			</section>
			<footer id="footer">
				<a href="http://www.w3.org/html/logo/">
					<img src="./../engine2/images/html5.png" width="209" height="51" alt="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Performance &amp; Integration, Semantics, and Offline &amp; Storage" title="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Performance &amp; Integration, Semantics, and Offline &amp; Storage"/>
					</a><br><br>
				<p class="copyright">
				&copy; Base de la template credits : <a href="http://html5up.net">HTML5 UP</a><br>
				<a href="index.html">Moteur</a> (v.0.5) et site : Yann Albin<br>
			<a href="admin.php">Administration</a></p>
			</footer>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>