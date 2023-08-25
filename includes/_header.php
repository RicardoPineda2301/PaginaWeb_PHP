<div id="header">
  <div class="logo"><h1><a href="index.php" title="Mi sitio"><span>Mi sitio</span></a></h1></div>

  <div class="slogan"><div class="slogan-inner"><span>Me encanta trabajar sitios</span></div></div>
</div>

<div id="main-menu" class="clearfix">
  <h2>Main Menu</h2>
  <br>  <br>
  <ul>
    <li <?php echo (($page == 'home') ? 'class="active"':''); ?>><a href="index.php" title="Regresar a Inicio">Inicio</a></li>
    <li <?php echo (($page == 'about') ? 'class="active"':''); ?>><a href="about.php" title="About Us">Quien soy</a></li>
    <li <?php echo (($page == 'productos') ? 'class="active"':''); ?>><a href="productos.php" title="Mis productos">Productos</a></li>
    <li <?php echo (($page == 'aliados') ? 'class="active"':''); ?>><a href="aliados.php" title="Aliados">Aliados</a></li>
    <li <?php echo (($page == 'blog') ? 'class="active"':''); ?>><a href="blog.php" title="Mi blog">Blog</a></li>
    <li <?php echo (($page == 'contacto') ? 'class="active"':''); ?>><a href="contacto.php" title="Contacto">Contacto</a></li>
   </ul>
</div>