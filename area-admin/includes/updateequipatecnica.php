<?php 
require '../includes/connection.php'; 
$data = [
	'Id' => $_GET['Id'],
	'Nome' => $_GET['Nome'],
	'Cargo' => $_GET['Cargo'],
	'Idade' => $_GET['Idade'],
	'Img' => $_GET['Img']
];
//var_dump($data); die();
$sql = "UPDATE equipa_tecnica 
SET Nome = :Nome, Cargo = :Cargo, Idade = :Idade, Img = :Img 
WHERE Id = :Id"; 
$sth = $dbh->prepare($sql); 
$sth->execute($data);

header('Location:../equipa_tecnica.php?id='); 
$sth = null; 
die(); 
?>