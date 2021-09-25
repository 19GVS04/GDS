<?php     
require 'connection.php';

$sql = "INSERT INTO socios (Nome, Data, Localidade, Morada, Codigo, Nif, Bi, Telemovel, Email, Foto, Socio, Cobranca) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$sth = $dbh->prepare($sql)->execute([$_POST['Nome'], $_POST['Data'], $_POST['Localidade'], $_POST['Morada'], $_POST['Codigo'], $_POST['Nif'], $_POST['Bi'], $_POST['Telemovel'], $_POST['Email'], $_POST['Foto'], $_POST['Socio'], $_POST['Cobranca']]);     
  
if($sth) //Sucessos
     header('Location:../socio.php?Id=');
else //Erro
     header('Location:../socio.php?error=the_error_message');         
 ?> 