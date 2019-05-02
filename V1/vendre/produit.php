<?php
 $nom = isset($_POST["nom"])?$_POST["nom"] : ""; //if then else
 $age = isset($_POST["age"])?$_POST["age"] : "";
 $telephone = isset($_POST["telephone"])?$_POST["telephone"] : "";
 $date = isset($_POST["naissance"])?$_POST["naissance"] : "";
 $erreur = "";
 if($nom == "") {$erreur .= "Le champ Nom est vide. <br>";}
 if($age == "") {$erreur .= " Le champ Age est vide. <br>";}
 if($telephone == "") {$erreur .= "Le champ Téléphone est vide. <br>";}
 if($date == "") {$erreur .= "Le champ Date de naissance est vide. <br>";}
 if ($erreur == "") {
 echo "$nom <br>";
 echo "$age";
 }
 else {
 echo "Erreur : $erreur";
 }
?>
