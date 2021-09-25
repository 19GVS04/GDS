<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mercedes AMG - Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <style>
        html,
        body {
            background-color: white;
        }
        
        .user-edit:hover {
            color: blue;
            background-color: grey;
            cursor: pointer;
        }
        
        .h2-title {
            font-size: 3rem;
            text-align: center;
            padding: 2rem;
            color: #000;
        }
    </style>
</head>

<body>

    <?php 
require 'includes/connection.php'; 
?>
    <div class="container mt-4">
    <a href="index.php" class="btn btn-link"> < Back</a>
    </div>

    <h2 class="h2-title" style="padding: 2rem; background-color: #03bfb5;"> Mercedes Board Managers</h2>
    <?php 
    $sql = 'SELECT * FROM guarda_redes';   
    $sth = $dbh->prepare($sql);
    $sth->execute();
    ?>
    <div class="container mx-auto">
        <div class="row h4">
            <div class="col">Id</div>
            <div class="col">Nome</div>
            <div class="col">Idade</div>
            <div class="col">Imagem</div>

        </div>
        <?php 
  while($guarda_redes = $sth->fetchObject()){
        $Id = $guarda_redes->Id;
        $Name = $guarda_redes->Name;
        $Idade = $guarda_redes->Idade;
        $Img = $guarda_redes->Img;
        ?>
        <div class="row mb-2 user-edit" onclick="editUser(<?= $Id ?>)">
        <div class="col align-self-center">
                <?= $Id ?>
            </div>
            <div class="col align-self-center">
                <?= $Nome ?>
            </div>
            <div class="col align-self-center">
                <?= $Idade ?>
            </div>
            <div class="col align-self-center">
                <?= $Img ?>
            </div>
        </div>
        <?php  } // foreach?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script>
        function editUser(Id, Nome ,Idade, Img){
        console.log(Id);
        location.href = 'editgrsenior.php?Id='+Id;
        }
    </script>

</body>
</html>