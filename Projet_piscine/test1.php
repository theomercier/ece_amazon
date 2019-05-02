<?php
//recuperer les données venant de la page HTML
function test($query,$tab)
{
  $matrice=array();
  $i=0;

  //identifier votre BDD
  $database = "ece_amazon";
  //connectez-vous dans votre BDD
  //Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
  $db_handle = mysqli_connect('localhost', 'root', 'root');
  $db_found = mysqli_select_db($db_handle, $database);
  

  if ($db_found) 
  {
    $sql = $query;
    $result = mysqli_query($db_handle, $sql);


    while ($data = mysqli_fetch_assoc($result)) 
    {
      $matrice[$i] = array($data['name'],$data['name'],$data['name']);
      $i=$i+1;
    } 

    for ($i = 0; $i <= count($matrice); $i++) 
    {
      for ($j = 0; $j <= count($matrice[0]); $j++) 
      {
        echo $matrice[$i][$j];
        echo "<br>";
      }
      echo "<br>";
      echo "<br>";
    }

  } 
  else 
  {
    echo "Database not found";
  }

  //fermer la connexion
  mysqli_close($db_handle);

}
?>
