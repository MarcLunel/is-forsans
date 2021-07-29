<?php
session_start();
if($_POST){
	$secretKey = "6LcYjqEbAAAAAGYD7pkcuwedWmI5tTDSi7FtZ5-X";
	$responseKey = $_POST['g-recaptcha-response'];
	$userIP = $_SERVER['REMOTE_ADDR'];
	$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

	$response = file_get_contents($url);
	$response = json_decode($response);
	if($response->success){
		extract($_POST);
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$destinataire = "marc.l64.partage@gmail.com";
			$message = "Bonjour !\n\nVous avez reçu un message provenant du formulaire de contact du site web, écrit par ".htmlspecialchars($name).".\n\nVoici le message : \n".htmlspecialchars($content)."\n\nPour répondre à cette personne, voici son adresse email : ".htmlspecialchars($email)."\n\nTrès bonne journée !";
			mail($destinataire, htmlspecialchars($title), $content);
			$_SESSION['MessageEnvoye'] = true;
			header("Location:../index.php");
		}
	} else {
		$_SESSION['MessageEnvoye'] = false;
		echo ("Nope");
		// header('Location:../index.php');
	}
}else{
	echo ("Nope 2");
	// header('Location:../index.php');
}
?>