<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/fontawesome.min.css"/>
  <link rel="stylesheet" href="css/footer.css"/>
  <link rel="stylesheet" href="css/equipa.css"/>    
  <link rel="stylesheet" href="css/futebol.css"/>
  <link rel="stylesheet" href="css/senior.css"/>
  <link rel="stylesheet" href="js/bootstrap.bundle.min.js"/>
  <link rel="icon" type="image/x-icon" href="images/ProjetoGDS/favicon.ico"/>
	<title>Futebol Sénior - GDS</title>
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar">
  <div class="content">
     <div class="logo" >
        <a href="index.php">
          <div  style="text-align: center;">
            <img src="/GDS/images/ProjetoGDS/gdss.png" style="max-height: 50px; margin-bottom: -25%; margin-top:-5%" alt="">
          </div>
        </a>
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
      <div class="title">Futebol Sénior</div>
      <p>Aqui pode ver os nossos jogadores e as suas posições, a nossa equipa tem desde jogadores com mais de 6 anos de casa até novas promessas com 16 anos de idade.</p>
      <p><a href="#defes"><button class="btnscroll"> - Defesas</button></a></p>
      <p><a href="#medio"><button class="btnscroll"> - Médios</button></a></p>
      <p><a href="#avan"><button class="btnscroll"> - Avançados</button></a></p>      
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




<!--Redes-->
<?php
  require 'includes/connection.php';
?>         
<?php
  $sql = 'SELECT * FROM Guarda_Redes ';            
  $sth = $dbh->prepare($sql);
  $sth->execute();
?>

<!--EQUIPA SENOIR-->
<!--GR-->
<div id="gr" class="about">
  <div class="content">
     <div class="title">Guarda-Redes</div>
  </div>
</div>
<section class="team-section">
  <div class="container-equipa">
    <div class="row">
      <div class="team-items">
        <?php 
             while($Guarda_Redes = $sth->fetchObject()){
                $Nome = $Guarda_Redes->Nome;
                $Idade = $Guarda_Redes->Idade;
                $Img = $Guarda_Redes->Img;
        ?>
          <div class="item">
            <img src="/GDS/images/ProjetoGDS/<?= $Img?>" alt="team" />
              <div class="inner">
                <div class="info">
                 <h5><?= $Nome?></h5>
                 <p>Idade: <?= $Idade?></p>
                </div>
               </div>
           </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section> 
<hr style="margin-top:-3%;">




<!--DEFESAS-->
<?php
  require 'includes/connection.php';
?>         
<?php
  $sql = 'SELECT * FROM Defesas ';            
  $sth = $dbh->prepare($sql);
  $sth->execute();
?>
<div id="defes" class="about">
  <div class="content">
    <div class="title">Defesas</div>
  </div>
</div>
<section class="team-section">
  <div class="container-equipa">      
    <div class="row">
      <div class="team-items">
          <?php 
            while($Defesas = $sth->fetchObject()){
                $Nome = $Defesas->Nome;
                $Idade = $Defesas->Idade;
                $Img = $Defesas->Img;
          ?>
            <div class="item">
              <img src="/GDS/images/ProjetoGDS/<?= $Img?>" alt="team" />
                <div class="inner">
                  <div class="info">
                    <h5><?= $Nome?></h5>
                    <p>Idade: <?= $Idade?></p>             
                  </div>
                </div>
            </div>
          <?php } ?>        
      </div>
    </div>
  </div>
</section>
<hr style="margin-top:-3%;">





<!--MEDIOS-->
<?php
  require 'includes/connection.php';
?>         
<?php
  $sql = 'SELECT * FROM Medios ';            
  $sth = $dbh->prepare($sql);
  $sth->execute();
?>
<div id="medio" class="about">
  <div class="content">
    <div class="title">Médios</div>
  </div>
</div>
<section class="team-section">
  <div class="container-equipa">      
    <div class="row">
      <div class="team-items">
          <?php 
             while($Medios = $sth->fetchObject()){
                $Nome = $Medios->Nome;
                $Idade = $Medios->Idade;
                $Img = $Medios->Img; 
          ?>
            <div class="item">
              <img src="/GDS/images/ProjetoGDS/<?= $Img?>" alt="team" />
                <div class="inner">
                  <div class="info">
                    <h5><?= $Nome?></h5>
                    <p>Idade: <?= $Idade?></p>                  
                  </div>
                </div>
            </div>
          <?php } ?>                  
      </div>
    </div>
  </div>
</section>

<hr style="margin-top:-3%;">





<!--Avançados-->
<?php
  require 'includes/connection.php';
?>         
<?php
  $sql = 'SELECT * FROM Avancados ';            
  $sth = $dbh->prepare($sql);
  $sth->execute();
?>
<div id="avan" class="about">
  <div class="content">
    <div class="title">Avançados</div>
  </div>
</div>
<section class="team-section">
  <div class="container-equipa">       
    <div class="row">
      <div class="team-items">
          <?php 
             while($Avancados = $sth->fetchObject()){
                $Nome = $Avancados->Nome;
                $Idade = $Avancados->Idade;
                $Img = $Avancados->Img;
          ?>
            <div class="item">
              <img src="/GDS/images/ProjetoGDS/<?= $Img?>" alt="team" />
                <div class="inner">
                  <div class="info">
                    <h5><?= $Nome?></h5>
                    <p>Idade: <?= $Idade?></p>                     
                  </div>
                </div>
            </div>
         <?php } ?>                     
      </div>
    </div>
  </div>
</section>

<hr style="margin-top:-3%;">







<!--Equipa Técnica-->
<?php
  require 'includes/connection.php';
?>         
<?php
  $sql = 'SELECT * FROM Equipa_Tecnica ';            
  $sth = $dbh->prepare($sql);
  $sth->execute();
?>
<div id="et" class="about">
  <div class="content">
    <div class="title">Equipa Técnica</div>
  </div>
</div>
<section class="team-section" style="margin-bottom:-2%;">
  <div class="container-equipa">      
    <div class="row">
      <div class="team-items">
          <?php 
             while($Equipa_Tecnica = $sth->fetchObject()){
                $Nome = $Equipa_Tecnica->Nome;
                $Idade = $Equipa_Tecnica->Idade;
                $Cargo = $Equipa_Tecnica->Cargo;
                $Img = $Equipa_Tecnica->Img; 
          ?>
            <div class="item">
              <img src="/GDS/images/ProjetoGDS/<?= $Img?>" alt="team" />
                <div class="inner">
                  <div class="info">
                    <h5><?= $Nome?></h5>
                    <p><?= $Cargo?></p>
                    <p>Idade: <?= $Idade?></p>                    
                  </div>
                </div>
            </div>      
          <?php } ?>
      </div>
    </div>
  </div>
</section>







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