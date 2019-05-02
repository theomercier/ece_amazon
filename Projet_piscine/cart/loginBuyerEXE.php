<?php

	$exist=0;

	//$database = "ece_amazon";

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ece_amazon;charset=utf8', 'root', 'root');
	}
	catch (Exception $e)
	{
	    die('Erreur : ' . $e->getMessage());
	}

	
	$reponse = $bdd->query('SELECT email,password FROM users INNER JOIN buyers ON users.email=buyers.emailUser');	

	while ($donnees = $reponse->fetch())
	{

		if ($donnees['email']=$_POST['email'] && $donnees['password']==$_POST['password']) 
		{
			$exist=1;
			echo "reussi";
		} 
	}

	echo $exist;


?>