<!DOCTYPE html>
<html>

<?php include("header.php");?>
<style>
	#block_form
	{
		display : block;
		width : 10rem;
		padding-left: 80px;

		
	}
	#button_form
	{
		padding-left: 300px;
		
		float:left;
		display : block;
	}
	.container-fluid
	{
		padding-left : 0px;
		padding-right : 0px;
	}
	label
	{
		text-align : right;
		width : 200px;
		display : block;
	}
</style>

<div class="jumbotron">
		<div class="container-fluid">
		  <h1 class="display-3">Informations de l'item que vous souhaitez vendre :</h1>
		</div>
</div>

<body class="container-fluid">
	<div id="block_form" class="form-group">
	
		<form action="ajoutLivreExe.php" method="post">
			<table>
				<tr>
				<td><label for="name">Nom du livre :</label></td>
				<td><input type="text" name="name" autofocus required /></td>
				</tr>

				<tr>
				<td><label for="price">Prix du livre : </td>
				<td><input type="text" name="price" required /></td>
				</tr>

				<tr>
				<td><label for="shape">Etat du livre du livre : </td>
				<td><input type="text" name="shape" required /></td>
				</tr>

				<tr>
				<td><label for="description">Description du livre : </td>
				<td><input type="text" name="description" required /></td>
				</tr>

				<tr>
				<td><label for="videoLink">Lien vidéo du livre : </td>
				<td><input type="text" name="videoLink" /></td>
				</tr>

				<tr>
				<td><label for="quantity">Quantité à mettre en vente : </td>
				<td><input type="text" name="quantity" required /></td>
				</tr>

				<tr>
				<td><label for="author">Auteur du livre : </td>
				<td><input type="text" name="author" required /></td>
				</tr>

				<tr>
				<td><label for="editor">Éditeur du livre : </td>
				<td><input type="text" name="editor" required /></td>
				</tr>

				<tr>
				<td><label for="nbPage">Nombre de pages du livre : </td>
				<td><input type="text" name="nbPage"required  /></td>
				</tr>

				<tr>
				<td><label for="size">Taille du livre : </td>
				<td><input type="text" name="size" required /></td>
				</tr>

				<tr>
				<td><label for="langue">Langue du livre : </td>
				<td><input type="text" name="langue" required /></td>
				</tr>

				<tr>
				<td><label for="reDate">Date de sortie du livre : </td>
				<td><input type="text" name="reDate" required  /></td>
				</tr>

				<tr>
				<td><label for="category">Catégorie du livre : </td>
				<td><input type="text" name="category" required /></td>
				</tr>

			</table>
	</div>
		
	<div id="button_form">
		<p>
			<br>
			<input id="button" type="submit" name="submit" value="Valider" class="btn btn-primary btn-lg"><br>
		</p>
	</div>
	
	</form>
	


</body>

<!-- Footer -->
<?php include("footer.php");?>

</html>