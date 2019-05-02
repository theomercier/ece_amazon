<!DOCTYPE html>
<html>
<head>
	<title>ajoutLivre</title>
</head>
<body>

	<form action="ajoutSpo_ActEXE.php" method="post">
		<table>
			<tr>
			<td>Nom de l'objet :</td>
			<td><input type="text" name="name" /></td>
			</tr>

			<tr>
			<td>Prix de l'objet :</td>
			<td><input type="text" name="price" /></td>
			</tr>

			<tr>
			<td>Etat de l'objet:</td>
			<td><input type="text" name="shape" /></td>
			</tr>

			<tr>
			<td>Description de l'objet :</td>
			<td><input type="text" name="description" /></td>
			</tr>

			<tr>
			<td>Lien vidéo de l'objet :</td>
			<td><input type="text" name="videoLink" /></td>
			</tr>

			<tr>
			<td>Quantité a mettre en vente :</td>
			<td><input type="text" name="quantity" /></td>
			</tr>

			<tr>
			<td>Type :</td>
			<td><input type="text" name="type" /></td>
			</tr>


		</table>

		<input type="submit" value="Valider" />
	</form>

</body>
</html>