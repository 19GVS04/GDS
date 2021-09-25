<!DOCTYPE html> 
<html> 
<head>     
<meta charset="utf-8">     
<meta name="viewport" content="width=device-width, initial-scale=1.0">     
<meta http-equiv="X-UA-Compatible" content="IE=edge">     
<title>Área Admin - GDS</title>     
<link rel="icon" type="image/x-icon" href="images/favicon.ico" />     
<link rel="stylesheet" href="css/bootstrap.min.css">      
<link rel="stylesheet" href="css/fontawesome.min.css">     
<style> 
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');        
.title-h2 {             
    font-size: 1rem;             
    text-align: center;             
    color: white;             
    padding: 2rem;         
}     
</style>
<body>
    <div style="background-color: #1b1b1b; margin-top:-1.5%;">
    <div class="container mt-4" style="background-color: #1b1b1b;">
    <a  href="index.php" class="btn btn-danger">< Voltar</a>
    </div>

    <div class="title-h2" style="padding: 2rem; background-color: #1b1b1b;">
        <h3>Add Próx-Jogo</h3>
    </div>
    <div style="text-align: center; ">
            <img  src="/GDS/images/ProjetoGDS/gdss.png" style="max-height: 100px; margin-top:-2%;  margin-bottom:1%;">
    
        </div>
</div>

    <div class="col-lg-6 offset-lg-3">
        <form action="includes/insertproxjogo.php" method="post" class="border border-1 border-dark p-4" style="width: 100%; margin-top: 2%;">
            <div class="mb-3">
                <label for="driver-number" class="form-label">Id</label>
                <input type="text" class="form-control" name="Id" required placeholder="Id">
            </div>
            <div class="mb-3">
                <label for="driver-number" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="Titulo" required placeholder="Titulo">
            </div>
            <div class="mb-3">
                <label for="driver-name" class="form-label">Descricao</label>
                <input type="text" class="form-control" name="Descricao" required placeholder="Descrição">
            </div>
            <div class="mb-3">
                <label for="driver-name" class="form-label">Horas</label>
                <input type="text" class="form-control" name="Horas" required placeholder="Ex: 13H45">
            </div>
            <div class="mb-3">
                <label for="team-name" class="form-label">Img</label>
                <input type="text" class="form-control" name="Img" required placeholder="Imagem">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Adicionar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </form>
    </div>
</body>
