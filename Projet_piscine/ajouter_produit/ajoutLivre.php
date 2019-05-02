<!DOCTYPE html>
<html>
<head>
	<title>ajoutLivre</title>
</head>
<body>

	<form action="ajoutLivreExe.php" method="post">
		<table>
			<tr>
			<td>Nom du livre :</td>
			<td><input type="text" name="name" /></td>
			</tr>

			<tr>
			<td>Prix du livre :</td>
			<td><input type="text" name="price" /></td>
			</tr>

			<tr>
			<td>Etat du livre du livre :</td>
			<td><input type="text" name="shape" /></td>
			</tr>

			<tr>
			<td>Description du livre :</td>
			<td><input type="text" name="description" /></td>
			</tr>

			<tr>
			<td>Lien vidéo du livre :</td>
			<td><input type="text" name="videoLink" /></td>
			</tr>

			<tr>
			<td>Quantité a mettre en vente :</td>
			<td><input type="text" name="quantity" /></td>
			</tr>

			<tr>
			<td>Auteur du livre :</td>
			<td><input type="text" name="author" /></td>
			</tr>

			<tr>
			<td>Editeur du livre :</td>
			<td><input type="text" name="editor" /></td>
			</tr>

			<tr>
			<td>Nombre de pages du livre :</td>
			<td><input type="text" name="nbPage" /></td>
			</tr>

			<tr>
			<td>Taille du livre :</td>
			<td><input type="text" name="size" /></td>
			</tr>

			<tr>
			<td>Langue du livre :</td>
			<td><input type="text" name="langue" /></td>
			</tr>

			<tr>
			<td>Date de sortie du livre :</td>
			<td><input type="text" name="reDate" /></td>
			</tr>

			<tr>
			<td>Catgorie du livre :</td>
			<td><input type="text" name="category" /></td>
			</tr>

			

		</table>

		<input type="submit" value="Valider" />
	</form>

</body>
</html>