<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <title>Miguel Gonzalez</title>
</head>
<body>
  <div class="block">

    <div class="container">
      <div class="info">
        <img src="SrSalami.png" id="logo" > 

        <div>
          <div><h1>Nombre generico</h1></div>
          
          <h2><span class="typed"></span></h2>
          <p class="presentation">
            Mi nombre es Miguel Angel, tengo 22 años y soy estudiante de Ing. en Ciencias de la Computación, por lo que no solo busco ser desarrollador web, sino trabajar en desarrollo de software.
            Soy un gran aficionado a los videojuegos, al cine y a la musica
          </p>
        </div>
        <a class="btn" id="curriculum" href="CV.pdf">CV</a>
      </div>
      <div class="contact">
        <a href="https://github.com/MiguelA2025">
          <i class="fa-brands fa-square-github" id="Github"></i>
        </a>
        <a href="https://www.linkedin.com/in/miguel-ángel-gonzález-hernández-48a407198/">
          <i class="fa-brands fa-linkedin" id="Linkedln"></i>
        </a>
        <a>
          <i class="fa-brands fa-discord" id="discord"></i>
        </a>

        </div>
        <!--<p id="copyright">© 2023 SrSalami. Todos los derechos reservados</p> -->
    </div>

    <div class="container2">
      <nav id="navegation">
        <a  href="#" id="MenuUno" onclick="show('Projects')">Projets</a>
        <a  href="#" id="MenuDos" onclick="show('Skills')">Skills</a>
        <a  href="#" id="MenuTres" onclick="show('Contact')">Contact</a>
      </nav>


      <div class="Menu" id="Projects">
        <a>ola</a>
      </div>


      <div class="Menu" id="Skills" >
        <i class="fa-brands fa-html5" class="Tecnologias"></i>
        <i class="fa-brands fa-css3-alt" class="Tecnologias"></i>
      </div>
      

      <div class="Menu" id="Contact">
        <form method="post">
          <legend>Escribeme!!</legend>
          <p>
              <label>Nombre personal o de tu empresa:
              <input type="text" name="nombre" />
              </label>
          </p>
          <p>
              <label>Correo de contacto:
              <input type="text" name="email"/>
              </label>
          </p>
          <p>
          <label>Escribe tu mensaje
              <textarea name="mensaje" cols="30" rows="5"></textarea>
              </label>
          </p>
          <p>
              <input type="submit" value="Enviar" name="Enviar"/>
          </p>
          </form>
      </div>

    </div>
    
  </div>

</body>

<?php

        include("DatosClientes.php");

        ?>

<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="script.js"></script>
</html>