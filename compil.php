<?php
include 'security/security.php';
?>

<?php
// Mettons le (future) fichier dans une variable.
$fichier1="moteur/data.xml";
$fichier2="moteur/moteur.xml";
// Pensons au retour à la ligne et au stripslashes pour la variable $news.
// On met en place quelques conditions pour les cellules (titre et news).
// On vérifie avant tout si le fichier existe si ce n'est pas le cas on le crée.

// Après ces quelques vérification d'usage on passe  à l'exécution de ce formulaire.

       
        // Si ok on ouvre en écirture-enregistrement du fichier news.txt.
        $verif=@fopen($fichier2,"r+");
	$verif2=@fopen($fichier1,"r+");
               
        // On analyse les anciennes données et on les stocks.
        $stock=@fread($verif2,filesize($fichier1));
	
        $xml='<?xml version="1.0"?>
<rss version="2.0">
<channel>';
        // On paramère le tout ($contenue).
$contenue="$xml
".$stock."
</channel>
</rss>";
       
        // On remet le curseur du fichier en début de ligne.
        rewind($verif);
       
        // On insère le nouveau commentaire.
        fputs($verif,$contenue);
       
        // On clore le fichier.
        fclose($verif);
       
        include 'editer.php';
?>

 