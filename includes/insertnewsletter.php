<?php     
require 'connection.php';

$sql = "INSERT INTO newsletter (Email) VALUES (?)";
$sth = $dbh->prepare($sql)->execute([$_POST['Email']]);     
    
if($sth) //Sucesso
     header('Location:../index.php?Id=');
else //Erro
     header('Location:../index.php?error=the_error_message');         
 ?> 