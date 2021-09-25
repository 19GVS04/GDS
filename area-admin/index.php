<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Área Admin - GDS</title>
	 <link rel="icon" type="image/x-icon" href="images/ProjetoGDS/favicon.ico"/>    
	 <link rel="stylesheet" href="css/bootstrap.min.css">        
	 <link rel="stylesheet" href="css/fontawesome.min.css"> 
	 <style>
	 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');         
	html,         
	body {            
	 background-color: white;
	          }                  

	.h2-title {             
		font-size: 1.5rem;
		text-align: center;
		margin-top: -1%;
		color: #fff;       
	 }         
	 .btn-admin{             
	 	margin-right: 8rem;             
	 	width:40%;             
	 	margin-left:15%;             
	 	margin-right:15%;            
		padding: .5rem;             
		margin: 1rem;         
	}
	.btn-admin:hover{
		color:  red;
	} 
@media (max-width: 768px) {
  .btn-admin{
    width: 70%;
  }
}    
</style> 
</head>
<body>
	<div style="background-color: #1b1b1b;">
    		<h2 class=" h2-title" style="padding: 3rem; background-color: #1b1b1b;">Área Administrador - GDS</h2>
    	<div style="text-align: center; ">
      		<img  src="/GDS/images/ProjetoGDS/gdss.png" style="max-height: 100px; margin-top:-2%;  margin-bottom:1%;">
    
  		</div>
     </div>    
    <div class="col-12 text-center text-white p-4">         
    	<a href="grsenior.php" class="btn btn-admin btn-dark btn-lg">Guarda-Redes - Senior</a>         
    	<a href="asenior.php" class="btn btn-admin btn-dark btn-lg">Avancados - Senior</a>         
    	<a href="msenior.php" class="btn btn-admin btn-dark btn-lg">Medios - Senior</a>         
    	<a href="dsenior.php" class="btn btn-admin btn-dark btn-lg">Defesas - Senior</a>  
    	<a href="addgrsenior.php" class="btn btn-admin btn-dark btn-lg">Add Guarda-Redes - Senior</a>   
    	<a href="addasenior.php" class="btn btn-admin btn-dark btn-lg">Add Avancados - Senior</a>   
    	<a href="adddsenior.php" class="btn btn-admin btn-dark btn-lg">Add Defesas - Senior</a>    
    	<a href="addmsenior.php" class="btn btn-admin btn-dark btn-lg">Add Medios - Senior</a>        
    	<a href="noticias.php" class="btn btn-admin btn-dark btn-lg">Noticias</a>
    	<a href="addnoticias.php" class="btn btn-admin btn-dark btn-lg">Add Noticias</a>
    	<a href="proxjogo.php" class="btn btn-admin btn-dark btn-lg"> Próximo Jogo</a>
    	<a href="addproxjogo.php" class="btn btn-admin btn-dark btn-lg">Add Próximo Jogo</a>
    	<a href="classificacao.php" class="btn btn-admin btn-dark btn-lg">Tabela Classificação</a>
    	<a href="equipa_tecnica.php" class="btn btn-admin btn-dark btn-lg">Equipa Técninca</a>     
    </div> </div>     
    <script src="js/bootstrap.bundle.min.js"></script>     
    <script src=""></script>     
    <script>     </script> 
</body>
</html>