<!DOCTYPE html>
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
		<form action="ajoutSpo_ActEXE.php" method="post">
			<table>
				<tr>
					<td><label for="name">Nom de l'objet :</td>
					<td><input type="text" name="name" /></td>
				</tr>

				<tr>
					<td><label for="price">Prix de l'objet :</td>
					<td><input type="text" name="price" /></td>
				</tr>

				<tr>
					<td><label for="shape">État de l'objet:</td>
					<td><input type="text" name="shape" /></td>
				</tr>

				<tr>
					<td><label for="description">Description de l'objet :</td>
					<td><input type="text" name="description" /></td>
				</tr>

				<tr>
					<td><label for="videoLink">Lien vidéo de l'objet :</td>
					<td><input type="text" name="videoLink" /></td>
				</tr>

				<tr>
					<td><label for="quantity">Quantité a mettre en vente :</td>
					<td><input type="text" name="quantity" /></td>
				</tr>

				<tr>
					<td><label for="type">Type :</td>
					<td><input type="text" name="type" /></td>
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