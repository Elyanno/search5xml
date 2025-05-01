<?php
include 'security/security.php';
?>

<?php

// Conficurations des ressources
$fichier="moteur/data.xml";

$site = $_POST['site'];
$site = str_replace('é', 'e', $site);

$cle1 = $_POST['cle1'];
$cle1 = str_replace(' ', '_', $cle1);
$cle1 = str_replace('é', 'e', $cle1);

$cle2 = $_POST['cle2'];
$cle2 = str_replace(' ', '_', $cle2);
$cle2 = str_replace('é', 'e', $cle2);

$cle3 = $_POST['cle3'];
$cle3 = str_replace(' ', '_', $cle3);
$cle3 = str_replace('é', 'e', $cle3);

$cle4 = $_POST['cle4'];
$cle4 = str_replace(' ', '_', $cle4);
$cle4 = str_replace('é', 'e', $cle4);

$cle5 = $_POST['cle5'];
$cle5 = str_replace(' ', '_', $cle5);
$cle5 = str_replace('é', 'e', $cle5);


$lien = $_POST['lien'];
$commentaire = stripslashes(nl2br($_POST['commentaire']));
$commentaire = str_replace('é', 'e', $commentaire);

// On vérifie avant tout si le fichier existe si ce n'est pas le cas on le crée
if(!is_file($fichier))
{
        $verif=@fopen($fichier,"w+");
}
// Après ces configurations et vérifications on peut commencer

        // On ouvre en écirture-enregistrement du fichier xmlstock.txt
        $verif=@fopen($fichier,"r+");
               
        // On analyse les anciennes données et on les stocks
        $stock=@fread($verif,filesize($fichier));
       
        // On paramère le tout ($contenue).

if ($cle4 == "")
{
$contenue="
<".$cle1.">".$site."<![CDATA[<br />]]></".$cle1.">
<".$cle1."><![CDATA[<a href=".$lien.">".$lien."</a>]]><![CDATA[<br />]]></".$cle1.">
<".$cle1.">".$commentaire."<![CDATA[<br /><br />]]></".$cle1.">

<".$cle2.">".$site."<![CDATA[<br />]]></".$cle2.">
<".$cle2."><![CDATA[<a href=".$lien.">".$lien."</a>]]><![CDATA[<br />]]></".$cle2.">
<".$cle2.">".$commentaire."<![CDATA[<br /><br />]]></".$cle2.">

<".$cle3.">".$site."<![CDATA[<br />]]></".$cle3.">
<".$cle3."><![CDATA[<a href=".$lien.">".$lien."</a>]]><![CDATA[<br />]]></".$cle3.">
<".$cle3.">".$commentaire."<![CDATA[<br /><br />]]></".$cle3.">

";
}

elseif ($cle5 == "")
{
$contenue="
<".$cle1.">".$site."<![CDATA[<br />]]></".$cle1.">
<".$cle1."><![CDATA[<a href=".$lien.">".$lien."</a>]]><![CDATA[<br />]]></".$cle1.">
<".$cle1.">".$commentaire."<![CDATA[<br /><br />]]></".$cle1.">

<".$cle2.">".$site."<![CDATA[<br />]]></".$cle2.">
<".$cle2."><![CDATA[<a href=".$lien.">".$lien."</a>]]><![CDATA[<br />]]></".$cle2.">
<".$cle2.">".$commentaire."<![CDATA[<br /><br />]]></".$cle2.">

<".$cle3.">".$site."<![CDATA[<br />]]></".$cle3.">
<".$cle3."><![CDATA[<a href=".$lien.">".$lien."</a>]]><![CDATA[<br />]]></".$cle3.">
<".$cle3.">".$commentaire."<![CDATA[<br /><br />]]></".$cle3.">

<".$cle4.">".$site."<![CDATA[<br />]]></".$cle4.">
<".$cle4."><![CDATA[<a href=".$lien.">".$lien."</a>]]><![CDATA[<br />]]></".$cle4.">
<".$cle4.">".$commentaire."<![CDATA[<br /><br />]]></".$cle4.">

";
}

else
{
$contenue="
<".$cle1.">".$site."<![CDATA[<br />]]></".$cle1.">
<".$cle1."><![CDATA[<a href=".$lien.">".$lien."</a>]]><![CDATA[<br />]]></".$cle1.">
<".$cle1.">".$commentaire."<![CDATA[<br /><br />]]></".$cle1.">

<".$cle2.">".$site."<![CDATA[<br />]]></".$cle2.">
<".$cle2."><![CDATA[<a href=".$lien.">".$lien."</a>]]><![CDATA[<br />]]></".$cle2.">
<".$cle2.">".$commentaire."<![CDATA[<br /><br />]]></".$cle2.">

<".$cle3.">".$site."<![CDATA[<br />]]></".$cle3.">
<".$cle3."><![CDATA[<a href=".$lien.">".$lien."</a>]]><![CDATA[<br />]]></".$cle3.">
<".$cle3.">".$commentaire."<![CDATA[<br /><br />]]></".$cle3.">

<".$cle4.">".$site."<![CDATA[<br />]]></".$cle4.">
<".$cle4."><![CDATA[<a href=".$lien.">".$lien."</a>]]><![CDATA[<br />]]></".$cle4.">
<".$cle4.">".$commentaire."<![CDATA[<br /><br />]]></".$cle4.">

<".$cle5.">".$site."<![CDATA[<br />]]></".$cle5.">
<".$cle5."><![CDATA[<a href=".$lien.">".$lien."</a>]]><![CDATA[<br />]]></".$cle5.">
<".$cle5.">".$commentaire."<![CDATA[<br /><br />]]></".$cle5.">

";
}
       
        // On remet le curseur du fichier en début de ligne
        rewind($verif);
       
        // On insère les nouvelles données
        fputs($verif,$stock."".$contenue);
       
        // On peut enfin fermer le fichier
        fclose($verif);
       
        header("Location: compil.php");

?>