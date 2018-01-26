<?php include('head.php'); ?>

<body class="<?= 's_'.SECCION ?>">

<header class="cabecera" id="home">
    <div class="container">


      <button class="hamburger hamburger--efecto">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
      <a href="" class="cabecera__logo">
       <img src="images/autopartgo-logo-venta-autopartes-y-repuestos-latinoamerica.svg" alt="Venta de Autopartes a Latinoamérica | AutopartGo!">
      </a>

      <nav class="nav-principal">
        <ul>
          <li><a href="<?=url('home')?>" class="<?= SECCION == 'home' ? 'activo' : '' ?>"><?= __('nav 0'); ?></a></li>
          <li><a href="<?=url('cotizar')?>" class="<?= SECCION == 'cotizar' ? 'activo' : '' ?>"><?= __('nav 1'); ?></a></li>
          <li><a href="<?=url('nosotros')?>" class="<?= SECCION == 'nosotros' ? 'activo' : '' ?>"><?= __('nav 2'); ?></a></li>
          <li><a href="<?=url('contacto')?>" class="<?= SECCION == 'contacto' ? 'activo' : '' ?>"><?= __('nav 3'); ?></a></li>
          <li><a href="<?= Url::actual((IDIOMA == 'es') ? 'en' : 'es')?>" ><?=(IDIOMA == 'es') ? 'EN' : 'ES'?></a></li>
        </ul>
      </nav>


    </div>
</header>

<main>
