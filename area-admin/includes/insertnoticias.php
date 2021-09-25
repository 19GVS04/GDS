<?php     
require_once 'connection.php';      
$data = [
     'Id' => $_POST['Id'],
     'Data' => $_POST['Data'],
     'Titulo' => $_POST['Titulo'],
     'Tema' => $_POST['Tema'],
     'Img' => $_POST['Img'],
     'Completa' => $_POST['Completa']
];


$sql = "INSERT INTO noticias (Id, Data, Titulo, Tema, Img, Completa) VALUES (:Id,:Data,:Titulo,:Tema,:Img,:Completa)";
     $sth = $dbh->prepare($sql);        
     $sth-> execute($data);      
     header('Location:../addnoticias.php?Id='); 
 ?>