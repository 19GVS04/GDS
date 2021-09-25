<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Notícias - GDS</title>
	<link rel="icon" type="image/x-icon" href="images/ProjetoGDS/favicon.ico"/>
	<link rel="stylesheet" href="css/fontawesome.min.css"/>
	<link rel="stylesheet" href="css/nnoticias.css"/>
  <link rel="stylesheet" href="css/newscard.css"/>
  <link rel="stylesheet" href="css/popup.css"/>
	<link rel="stylesheet" href="css/footer.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="js/bootstrap.bundle.min.js"/>
</head>
<body>
	<!-- NAVBAR -->
<nav class="navbar">
    <div class="content">
      <div class="logo" >
         <a href="index.php"><div  style="text-align: center;"><img src="/GDS/images/ProjetoGDS/gdss.png" style="max-height: 50px; margin-bottom: -25%; margin-top:-5%" alt=""></div></a>
      </div>
      <ul class="menu-list" >
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="sobrenos.php">Sobre Nós</a></li>
        <li><a href="futebol.php">Futebol</a></li>
        <li><a href="nnoticias.php">Notícias</a></li>
        <li><a href="Calendario.php">Calendário/Resultados</a></li>
        <li><a href="socio.php">Ser Sócio!</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="banner"></div>
  <div class="about">
    <div class="content">
      <div class="title">Notícias</div>
      <p>Leia já as notícias mais recentes que envolvem o Grupo Desportivo Santacombadense. Não deixamos que lhe escape nada.</p>
    </div>
  </div>
  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>



 



<!-- NOTICIAS -->

<?php          require 'includes/connection.php';          ?>         
<?php          $sql = 'SELECT * FROM Noticias ORDER BY Id DESC';            
$sth = $dbh->prepare($sql);         $sth->execute();         ?>


<div class="container-card" style="margin-top: 1%;">
    
    <div class="column-card" style="margin-top: 1%;"><?php 
             while($Noticias = $sth->fetchObject()){
                $Data = $Noticias->Data;
                $Titulo = $Noticias->Titulo;
                $Tema = $Noticias->Tema;
                $Img = $Noticias->Img;  
                $Completa = $Noticias->Completa;
            ?>
      <div class="card marg">
        <img src="images/ProjetoGDS/<?= $Img?>"/>
        <div class="panel">
          <span class="date"><?= $Data?></span>
          <p>
            <?= $Titulo?>
          </p>
          <span class="breaker"></span>
          <h3>
           <?= $Tema?>
          </h3>
        <div class="popup" id="popup-1">
  <div class="overlay"></div>
  <div  class="content">

    <div class="close-btn" onclick="togglePopup()">×</div>
   
    
    <img src="/GDS/images/ProjetoGDS/gdss.png" style="height: 80px; width:80px; margin-bottom: -2%; " alt="">
    <p ><?= $Completa?></p>

  </div>
</div>
 <!--
<button class="botao" onclick="togglePopup()">Ler mais...</button>
<script src="js/popup.js"></script> -->
        </div> 
      </div>
      <?php } ?>
     </div>
   </div>
 </div>
 </div>
</div>











<!-- MAPA INFO ESTADIO--> 
<div style="margin-bottom: -2%;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1519.302263609142!2d-8.140815954670904!3d40.39545676858962!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf754f19f1644c39!2sEstadio%20Estev%C3%A3o%20Faria!5e0!3m2!1spt-PT!2spt!4v1613570017418!5m2!1spt-PT!2spt" width="100%"  class="mapa" style="border:0;" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>


<!--FOOTER-->
<footer class="footer" >
  <div class="l-footer">
    <h1>
      <img src="/GDS/images/ProjetoGDS/gdss.png" style="max-height: 130px;" alt=""></h1>
        <p>
          <h3 >Grupo Desportivo Santacombadense</h3>
          <h3 style="font-size: 0.8rem; color: #999;">Fundado em 24 de Setembro de 1952</h3>
  </div>
  <ul class="r-footer">
    <li>
      <h3>Redes Sociais</h3>
      <ul class="box">
    <li>
      <a href="https://pt-pt.facebook.com/gdsantacombadense/"><img src="images/ProjetoGDS/fb.ico" style="max-height: 30px; margin-top: 5px;" alt=""></a> 
    <li>
      <a href="https://www.instagram.com/g.d.santacombadense/"><img src="images/ProjetoGDS/ig.ico" style="max-height: 30px; margin-top: 3px;" alt=""></a> </li>
  </ul>
  </li>
    <li class="features">
      <h3>Links</h3>
      <ul class="box h-box">
        <li>
          <a href="sobrenos.php">Sobre Nós</a>
        </li>
          <li>
            <a href="senior.php">Futebol Sénior</a>
          </li>
          <li>
            <a href="formacao.php">Formação</a>
          </li>
          <li>
            <a href="nnoticias.php">Notícias</a>
          </li>
          <li>
            <a href="Calendario.php">Calendário</a>
          </li>
          <li>
            <a href="socio.php">Ser Sócio!</a>
          </li>
        </ul>
      </li>
<li>
  <h3>Contactos</h3>
  <ul class="box">
    <li>
      <i class="fas fa-map-marker-alt"></i>
      <a href="https://goo.gl/maps/4Z2Wvz8LHvKwf7HP9"> Av.ª Dr. Estevão de Faria <br>3440-371 <br> Santa Comba Dão</a>
    </li>
    <li>
      <i class="fas fa-phone"></i>
      <a href="tel:+351232888XXX"> 232 888 XXX </a>
    </li>
    <li>
      <i class="fas fa-envelope"></i>
      <a style="font-size: 0.9rem; " href="mailto:gdsantacombadense@gmail.com">gdsantacombadense@gmail<br>.com</a>  
  </ul>
  </li>
</ul>
<div class="container" >
  <div class="pub" style="margin-top:-1%; ">
    <img src="images/ProjetoGDS/p3.png" onclick='window.location.href="https://www.cm-santacombadao.pt/"' style="max-height: 90px; cursor: pointer;" alt="">
    <img src="images/ProjetoGDS/p1.png" onclick='window.location.href="http://www.tesourourbano.pt/"' style="min-height: 20px; cursor: pointer;" alt="">
    <img src="images/ProjetoGDS/p2.png" onclick='window.location.href="http://www.cdt-equipamentos.com/"' style="min-height: 50px;  cursor: pointer;" alt="">
    <img src="images/ProjetoGDS/p4.png" onclick='window.location.href="https://www.betclic.pt/"' style="max-height: 70px;  cursor: pointer;" alt="">
  </div>
</div>

<div class="b-footer" style="margin-bottom: -1%;">
  <p>Direitos Reservados ©DesenvWeb 2021 </p>
</div>
</footer>
</body>
</html>