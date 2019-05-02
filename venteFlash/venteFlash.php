<!DOCTYPE html>
<!--
	Auteurs : Clément LARIVIERE	TD10
			  Théo MERCIER		TD04
			  Antoine PAINCHAUX TD01
-->
<html lang="fr">

<!-- Header -->
<?php include("header.php");?>

<?php session_start(); ?>

<style type="text/css">
	#all_blocks
	{
		display : block;
		float : center;
		align-items:center;
	}

	#itemAff
	{
		background-color:#e9ecef;
		display : block;
		text-align:left;
		margin:10px;
		padding:5px;
		border: solid grey;
		width: 350px;
		height: auto;
		min-height : 360px;
		float:left;
		p 
		{
			font-size: 80%;
		}
		
	}
	#block_bouton
	{
		display:block;
		position : absolute;
		bottom : 0; 
		margin:10px;
	}
	#attributs
	{
		font-size: 90%;
	}
	
	footer
	{
		display : block;
	}
	h3
	{
		color:orange;
		text-align: center;
	}
	
</style>

<?php
function subMyString( $contenu, $limite, $separateur = '...' ) {
    if( strlen($contenu) >= $limite ) {
        $contenu = substr( $contenu, 0, $limite );
        $contenu = substr( $contenu, 0, strrpos($contenu, ' ') );
        $contenu .= $separateur;
    }
     
    return $contenu;
}
?>

<body>
	<main role="main">

		<div class="jumbotron">
			<div class="container">
			  <h1 class="display-3">Ventes Flash</h1>
			  <p>Ici, retrouvez le produit le plus vendu pour chaque catégories ! <br>Dans cette e-boutique, nous nous efforçons de vous proposer les meilleurs articles aux meilleurs prix ! </p>
			</div>
		</div>


		<div class="container">

			<div id="all_blocks">
				<?php

				$database = "ece_amazon";

				try
				{
				  $bdd = new PDO('mysql:host=localhost;dbname=ece_amazon;charset=utf8', 'root', 'root');
				}
				catch (Exception $e)
				{
					die('Erreur : ' . $e->getMessage());
				}

				$requete='SELECT COUNT(s.id_item) as nbVentes ,s.id_item as coucou FROM items i INNER JOIN books b ON i.id=b.id_item INNER JOIN salesHistory s ON b.id_item=s.id_item GROUP BY s.id_item ORDER BY nbVentes desc LIMIT 1';

				$reponse = $bdd->query($requete);	

				$idbestSb=0;
				while ($donnees = $reponse->fetch())
				{

					$idbestSb=$donnees['coucou'];

				}

				$requete = 'SELECT * FROM items INNER JOIN books ON items.id=books.id_item WHERE id=' . $idbestSb;

				$reponse = $bdd->query($requete);	

				while ($donnees = $reponse->fetch())
				{
					?>
					<div class="col-md-4" id="itemAff">
						<h3> Best-Sellers Livre</h3>
						<p>
							<div id="block_titre" class = "container">
								<h4><?php echo $donnees['name']; ?></h4>
							</div>
							<div id="block_principal" class = "container">
								<table>
									<tr>
									<td id="attributs">Prix :</td>
									<td><?php echo $donnees['price']; echo "€"?></td>
									</tr>

									<tr>
									<td id="attributs">Auteur :</td>
									<td id="attributs"><?php echo $donnees['author']; ?></td>
									</tr>

									<tr>
									<td id="attributs">Etat :</td>
									<td id="attributs"><?php echo $donnees['shape']; ?></td>
									</tr>
									
									<tr>
									<td id="attributs"><br></td>
									</tr>

								</table>
								<?php echo subMyString( $donnees['description'], 150, '...' ); ?>
							</div>
							<div id="block_bouton" class = "container">
								<a class="btn btn-warning" id="bouton_annonce" href="../Article/pageArticleBook.php?id=<?php echo $donnees['id'] ?>" role="button">Voir l'offre &raquo;</a>
							</div>
						</p>
					</div>




				<?php
					}

				$requete='SELECT COUNT(s.id_item) as nbVentes ,s.id_item as coucou FROM items i INNER JOIN music b ON i.id=b.id_item INNER JOIN salesHistory s ON b.id_item=s.id_item GROUP BY s.id_item ORDER BY nbVentes desc LIMIT 1';

				$reponse = $bdd->query($requete);	

				$idbestSm=0;
				while ($donnees = $reponse->fetch())
				{

					$idbestSm=$donnees['coucou'];

				}

				$requete = 'SELECT * FROM items INNER JOIN books ON items.id=books.id_item WHERE id=' . $idbestSm;

				$reponse = $bdd->query($requete);

				while ($donnees = $reponse->fetch())
				{
					?>
					<div class="col-md-4" id="itemAff">
						<h3> Best-Sellers Musique</h3>
						<p>
							<div id="block_titre" class = "container">
								<h4><?php echo $donnees['name']; ?></h4>
							</div>
							<div id="block_principal" class = "container">
								<table>
									<tr>
									<td id="attributs">Prix :</td>
									<td><?php echo $donnees['price']; echo "€"?></td>
									</tr>

									<tr>
									<td id="attributs">Artiste :</td>
									<td id="attributs"><?php echo $donnees['artist']; ?></td>
									</tr>

									<tr>
									<td id="attributs">Etat :</td>
									<td id="attributs"><?php echo $donnees['shape']; ?></td>
									</tr>
									
									<tr>
									<td id="attributs"><br></td>
									</tr>

								</table>
								<?php echo subMyString( $donnees['description'], 150, '...' ); ?>
							</div>
							<div id="block_bouton" class = "container">
								<a class="btn btn-warning" id="bouton_annonce" href="../Article/pageArticleBook.php?id=<?php echo $donnees['id'] ?>" role="button">Voir l'offre &raquo;</a>
							</div>
						</p>
					</div>




				<?php
					}


					$reponse->closeCursor(); // Termine le traitement de la requête
				?>
			</div>

			<hr>
		</div> <!-- /container -->
	</main>
</body>

<!-- Footer -->
<!--<=?php include("footer.php");?>-->

</html>
