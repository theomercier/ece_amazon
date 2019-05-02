<!DOCTYPE html>
<html>
<head>
	<title>connection / inscription</title>
</head>
<body>


	<form action="loginBuyerEXE.php?id=<?php echo $_GET['id'] ?>" method="post">
		<table>
			<tr>
			<td>email :</td>
			<td><input type="text" name="email" /></td>
			</tr>

			<tr>
			<td>mdp :</td>
			<td><input type="text" name="password" /></td>
			</tr>

		</table>

		<input type="submit" value="Valider" />
	</form>

</body>
</html>