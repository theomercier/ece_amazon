<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=ece_amazon;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM items INNER JOIN books ON items.id=books.id_item WHERE price <= ?');
$req->execute(array($_POST['prix']));

echo '<ul>';
while ($donnees = $req->fetch())
{
  echo '<li>' . $donnees['name'] . ' (' . $donnees['price'] . ' EUR)</li>';
}
echo '</ul>';

$req->closeCursor();

?>