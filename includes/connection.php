<?php
$user = 'root';
$pass = 'gvss';
try {
    $dbh = new PDO('mysql:host=localhost;port=3306;dbname=gds;charset=utf8', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$folderUserImages = 'http://localhost:8080/GDS/upload/users/photos/';
?>