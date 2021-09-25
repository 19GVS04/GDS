<?php 
require '../includes/connection.php'; 
$data = [
	'Id' => $_GET['Id'],
	'Nome' => $_GET['Nome'],
	'Idade' => $_GET['Idade'],
	'Img' => $_GET['Img']
];
//var_dump($data); die();
$sql = "UPDATE medios 
SET Nome = :Nome, Idade = :Idade, Img = :Img 
WHERE Id = :Id"; 
$sth = $dbh->prepare($sql); 
$sth->execute($data);

header('Location:../msenior.php?id='); 
$sth = null; 
die(); 
?>