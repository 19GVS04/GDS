<?php 
require '../includes/connection.php'; 
$data = [
	'Id' => $_GET['Id'],
	'Titulo' => $_GET['Titulo'],
	'Descricao' => $_GET['Descricao'],
	'Horas' => $_GET['Horas'],
	'Img' => $_GET['Img']
];
//var_dump($data); die();
$sql = "UPDATE prox_jogo 
SET Titulo = :Titulo, Descricao = :Descricao, Horas = :Horas, Img = :Img 
WHERE Id = :Id"; 
$sth = $dbh->prepare($sql); 
$sth->execute($data);

header('Location:../proxjogo.php?id='); 
$sth = null; 
die(); 
?>