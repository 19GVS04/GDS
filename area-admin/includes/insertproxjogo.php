<?php     
require_once 'connection.php';      
$data = [
     'Id' => $_POST['Id'],
     'Titulo' => $_POST['Titulo'],
     'Descricao' => $_POST['Descricao'],
     'Horas' => $_POST['Horas'],
     'Img' => $_POST['Img']
];


$sql = "INSERT INTO prox_jogo (Id, Titulo, Descricao, Horas, Img) VALUES (:Id,:Titulo,:Descricao,:Horas,:Img)";
     $sth = $dbh->prepare($sql);        
     $sth-> execute($data);      
     header('Location:../addproxjogo.php?Id='); 
 ?>