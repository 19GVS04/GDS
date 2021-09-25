<?php 
require '../includes/connection.php'; 
$data = [
	'Id' => $_GET['Id'],
	'Img' => $_GET['Img']
];
//var_dump($data); die();
$sql = "UPDATE tabela_classificacao 
SET Img = :Img 
WHERE Id = :Id"; 
$sth = $dbh->prepare($sql); 
$sth->execute($data);

header('Location:../classificacao.php?id='); 
$sth = null; 
die(); 
?>