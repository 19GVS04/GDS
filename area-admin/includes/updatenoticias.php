<?php 
require '../includes/connection.php'; 
$data = [
	'Id' => $_GET['Id'],
	'Data' => $_GET['Data'],
	'Titulo' => $_GET['Titulo'],
	'Tema' => $_GET['Tema'],
	'Img' => $_GET['Img'],
	'Completa' => $_GET['Completa']
];
//var_dump($data); die();
$sql = "UPDATE noticias 
SET Data = :Data, Titulo = :Titulo, Tema = :Tema, Img = :Img, Completa = :Completa 
WHERE Id = :Id"; 
$sth = $dbh->prepare($sql); 
$sth->execute($data);

header('Location:../noticias.php?id='); 
$sth = null; 
die(); 
?>