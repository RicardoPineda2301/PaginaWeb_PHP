<?php 
$page = 'home';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>Mi primer sitio en PHP</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php include('includes/_meta.php'); ?>
  </head>
  <body>
    <?php include('includes/_header.php'); ?>


    <div id="content" class="clearfix">
      <div class="first-column">
        <p> Soy Ricardo Pineda, tengo 25 años de edad. Soy de ciudad de Guatemala, Guatemala <br> Actualmente trabajo de ingeniero senior de QA de software
    <br> Soy graduado de ingenieria en sistemas de la UFM, Guatemala</p>
      </div>

      <div class="content">
        <p>Llevo 4 años trabajando de desarrollador y de QA, y me encuentro realizando proyectos personales desde inicios de este año 
            <br> Mi meta final es poder irme del país para buscar nuevos retos y oportunidades en el extranjero.
        </p>
        <img src=images/travel.jpg width="125"> <br>
        <p>Mis destinos principales son Alemania, Canada, Chile y España</p>
      </div>

    </div>


    <?php include('includes/_footer.php'); ?>
  </body>
    
  </body>
</html>