<!DOCTYPE html>
<!--
	Auteurs : Clément LARIVIERE	TD10
			  Théo MERCIER		TD04
			  Antoine PAINCHAUX TD01
-->
<html lang="fr">
<head>
	<title>ECE Amazon : Le site d'e-commerce de l'École Centrale d'Électronique</title>
	<meta charset="utf-8">
	<meta name="description" content="Site officiel d'e-commerce de l'École Centrale d'Électronique">
	<meta name="keywords" content="ECE, e-commerce, Amazon, ECE, Paris, Campus, Eiffel, Campus Eiffel">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../styles/index.css">
	<link rel="shortcut icon" href="../images/logo.gif">
	
	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">

    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
	
</head>


<main role="main">

	<?php include 'test1.php';?>


	<form action="test1.php" method="post">
		<table>

		<tr>
			<td>Nom :</td>
			<td><h1>Nom  </h1></td>
 		</tr>
		<tr>
			<td>Etat :</td>
			<td>Etat</td>
		</tr>
 		<tr>
			<td>Prix :</td>
			<td> <?php test('SELECT price FROM items WHERE name='Michael Jordan : the life''); ?> </td>
		</tr>
		<tr>
			<td>Description :</td>
			<td>  </td>
		</tr>

	</table>

	</form>
  
</main>



<footer>
  <p>&copy; Amazon ECE 2019</p>
</footer>

</html>