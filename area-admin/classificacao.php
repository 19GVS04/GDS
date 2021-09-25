 <!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Área Admin - GDS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        html,
        body {
            background-color: white;
        }
        
        .user-edit:hover {
            color: darkred;
            background-color: grey;
            cursor: pointer;
        }
        
        .h2-title {
            font-size: 3rem;
            text-align: center;
            padding: 2rem;
            color: white;
        }
        .container{

        }
    </style>
</head>

<body>

    <?php 
require 'includes/connection.php'; 
?>
<div style="background-color: #1b1b1b; margin-top:-1.5%;">
    <div class="container mt-4" style="background-color: #1b1b1b;">
	<a  href="index.php" class="btn btn-danger">< Voltar</a>
    </div>

    <h2 class="h2-title" style="padding: 2rem;background-color: #1b1b1b;">Área Administrador - GDS</h2>
    <div style="text-align: center; ">
            <img  src="/GDS/images/ProjetoGDS/gdss.png" style="max-height: 100px; margin-top:-2%;  margin-bottom:1%;">
    
        </div>
</div>
    <?php 
    $sql = 'SELECT * FROM tabela_classificacao';   
    $sth = $dbh->prepare($sql);
    $sth->execute();
    ?>
    <div class="container mx-auto">
        <div class="row h4" style=" margin-top: 2%;">
            <div class="col">Id</div>
            <div class="col">Imagem</div>
        </div>
        <?php 
  while($tabela_classificacao = $sth->fetchObject()){
        $Id = $tabela_classificacao->Id;
        $Img = $tabela_classificacao->Img;
        ?>
        <div class="row mb-2 user-edit" onclick="editUser(<?= $Id ?>)">
        <div class="col align-self-center">
                <?= $Id ?>
            </div>
            <div class="col align-self-center">
                <?= $Img ?>
            </div>
        </div>
        <?php  } // foreach
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script>
        function editUser(Id, Img){
        console.log(Id);
        location.href = 'editclassificacao.php?Id='+Id;
        }
    </script>

</body>
</html>