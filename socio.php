<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/fontawesome.min.css"/>
	<link rel="stylesheet" href="css/socio.css"/>
  <link rel="stylesheet" href="css/footer.css"/>
  <link rel="stylesheet" href="js/bootstrap.bundle.min.js"/>
  <link rel="icon" type="image/x-icon" href="images/ProjetoGDS/favicon.ico"/>
	<title>Ser Sócio - GDS</title>
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
      <div class="title">Ser Sócio!</div>
      <p></p>
      <h4>TORNA-TE SÓCIO JÁ!</h4>
        <p>Agora já é possível seres sócio do Grupo Desportivo Santacombadense Online. Preenche o formulário de inscrição que se segue e depois efectua o pagamento para seres sócio do GDS!
      </br>
      </p>
      <p></p>
      <h4>PREÇOS</h4> 
      <p> ● Quota mensal +65anos (3,00€)<br>
          ● Quota mensal Estudantes (3,00€)<br>
          ● Quota mensal normal (5,00€)<br>
          ● Peão (40,00€/ANO)<br>
          ● Bancada (65,00€/ANO)<br></<br>
          ● Cativo (90,00€/ANO)<br></<br>
      </p>
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






<!-- FORM NOVO SOCIO-->

<form action="includes/novosocio.php" method="POST" class="wrapper">
  <div class="title">
    Torne-se Sócio!
  </div>
  <div style="text-align: center;">
    <img  src="/GDS/images/ProjetoGDS/gdss.png" style="max-height: 100px; margin-top:-2%;  margin-bottom:2%;">
  </div>
  <div class="form">
    <div class="inputfield">
      <label >Nome Completo</label>
      <input type="text" class="input" name="Nome" required>
    </div> 
    <div class="inputfield">
      <label >Data de Nascimento</label>
      <input type="text" class="input" name="Data" required placeholder="dd/mm/aaaa">
    </div>
    <div class="inputfield">
      <label>Localidade</label>
      <input type="text" class="input" name="Localidade" required>
    </div> 
    <div class="inputfield">
      <label>Morada</label>
      <textarea class="textarea" required name="Morada" placeholder="Ex:Rua da laranjeira nº10, Almada"></textarea>
    </div> 
    <div class="inputfield">
      <label>Código Postal</label>
      <input type="text" class="input" name="Codigo" required>
    </div> 
    <div class="inputfield">
      <label>Número de Identificação Fiscal</label>
      <input type="text" class="input" maxlength="9" name="Nif" required>
    </div>  
    <div class="inputfield">
      <label>Número do C.C./B.I.</label>
      <input type="text" class="input" maxlength="8" name="Bi" required>
    </div>  
    <div class="inputfield">
      <label>Telemóvel/Telefone</label>
      <input type="text" class="input" name="Telemovel" maxlength="9" required>
    </div> 
    <div class="inputfield">
      <label>Email</label>
      <input type="email" class="input" name="Email" placeholder="exemplosociogds@gmail.com" required>
    </div> 
    <div class="inputfield">
      <label>Foto Tipo Passe</label>
      <input type="file" class="input" name="Foto"  required>
    </div> 
    <div class="inputfield" name="Socio">
      <label>Tipo de Sócio</label>
      <div class="custom_select" >
        <select  name="Socio" required>
          <option selected>--Tipo de Sócio--</option>
          <option value="+65">Quota mensal +65anos (3,00€)</option>
          <option value="estudante">Quota mensal Estudantes (3,00€)</option>
          <option value="normal">Quota mensal normal (5,00€)</option>
          <option value="peao">Peão (40,00€/ANO)</option>
          <option value="bancada">Bancada (65,00€/ANO)</option>
          <option value="cativo">Cativo (90,00€/ANO)</option>
        </select>
       </div>
      </div>
    <div class="inputfield" name="Cobranca">
      <label>Local de Cobrança</label>
      <div class="custom_select" >
        <select  name="Cobranca" required>
          <option selected>--Local de cobrança--</option>
          <option value="estadiomunicipal">Estádio Municipal Doutor Orlando Mendes</option>
          <option value="estadioestevaofaria">Estádio Dr. Estevão de Faria</option>
          <option value="sede">Sede</option>
          <option value="morada">Morada</option>
        </select>
      </div>
    </div>
    <div class="inputfield terms">
      <label class="check">
        <input type="checkbox" required>
        <span class="checkmark"></span>
      </label>
      <p>Aceitar recolha de dados para realizar adesão de sócio.</p>
    </div> 
    <div class="inputfield">
      <button type="submit" class="btn">Confirmar</button>
    </div>
  </div>
</form>  







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