<?php     
require_once 'connection.php';      
$data = [
     'Id' => $_POST['Id'],
     'Nome' => $_POST['Nome'],
     'Idade' => $_POST['Idade'],
     'Img' => $_POST['Img']
];


$sql = "INSERT INTO guarda_redes (Id, Nome, Idade,Img) VALUES (:Id,:Nome,:Idade,:Img)";
     $sth = $dbh->prepare($sql);        
     $sth-> execute($data);      
     header('Location:../addgrsenior.php?Id='); 
 ?>