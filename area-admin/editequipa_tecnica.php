<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Área Admin - GDS</title>     
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />     
    <link rel="stylesheet" href="css/bootstrap.min.css">     
            
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');         
.title-h2 {             
font-size: 1rem;             
text-align: center;             
color: white;             
padding: 2rem;         
}     
</style> 
</head>
<body>
     <?php 
require 'includes/connection.php';
$Id = $_GET['Id'];

$sql = 'SELECT * FROM equipa_tecnica WHERE Id = :Id';
$sth = $dbh->prepare($sql);
$sth->bindParam(':Id', $Id, PDO::PARAM_INT);
$sth->execute();
$equipa_tecnica = $sth->fetchObject();
?>
<div style="background-color: #1b1b1b; margin-top:-1.5%;">
    <div class="container mt-4" style="background-color: #1b1b1b;">
    <a  href="equipa_tecnica.php" class="btn btn-danger">< Voltar</a>
    </div>

    <div class="title-h2" style="padding: 2rem; background-color: #1b1b1b;">
        <h3>Edit Equipa Técnica</h3>
    </div>
    <div style="text-align: center; ">
            <img  src="/GDS/images/ProjetoGDS/gdss.png" style="max-height: 100px; margin-top:-2%;  margin-bottom:1%;">
    
        </div>
</div>

    <div class="col-lg-6 offset-lg-3">
        <form action="includes/updateequipatecnica.php" method="GET" class="border border-1 border-dark p-4" style="width: 100%; margin-top: 2%;">
             <div class="mb-3">
                <input type="hidden" name="Id" value="<?= $equipa_tecnica->Id ?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Nome</label>
                <input type="text" class="form-control" name="Nome" 
                value="<?= $equipa_tecnica->Nome ?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Cargo</label>
                <input type="text" class="form-control" name="Cargo"
                  value="<?= $equipa_tecnica->Cargo ?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Idade</label>
                <input type="text" class="form-control" name="Idade"
                  value="<?= $equipa_tecnica->Idade ?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Imagem</label>
                <input type="text" class="form-control" name="Img" 
                 value="<?= $equipa_tecnica->Img ?>">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </form>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>

    </script>
</body>
</html>