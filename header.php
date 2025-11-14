<?php
// header.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sostic</title>
  <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;600&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Quicksand', Arial, sans-serif;
    }

    nav {
      background-color: #000000ff;
      color: white;
      padding: 1rem 2rem;
      position: sticky;
      top: 0;
      z-index: 1000;
      border-bottom: 2px solid #6aad47;
      transition: box-shadow .25s ease;
    }
    .nav-scrolled { box-shadow: 0 8px 24px rgba(0,0,0,.18); }

    .nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Logo */
    .logo img {
      height: 55px;
      width: auto;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .logo img:hover {
      transform: scale(1.08);
    }

    /* Links */
    .nav-links {
      display: flex;
      gap: 2rem;
      list-style: none;
      transition: all 0.4s ease-in-out;
    }

    .nav-links li a {
      color: white;
      text-decoration: none;
      font-size: 1rem;
      font-weight: bold;
      letter-spacing: 0.6px;
      padding: 0.5rem 0;
      position: relative;
      transition: color 0.3s ease;
    }

    .nav-links li a:hover {
      color: #6aad47;
    }

    /* Subrayado elegante */
    .nav-links li a::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      width: 0%;
      height: 2px;
      background: #6aad47;
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }

    .nav-links li a:hover::after {
      width: 60%;
    }

    /* Botón hamburguesa */
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
      gap: 5px;
    }

    .hamburger span {
      width: 28px;
      height: 3px;
      background: white;
      border-radius: 2px;
      transition: all 0.3s ease;
    }

    .hamburger.active span:nth-child(1) {
      transform: rotate(45deg) translateY(8px);
    }
    .hamburger.active span:nth-child(2) {
      opacity: 0;
    }
    .hamburger.active span:nth-child(3) {
      transform: rotate(-45deg) translateY(-8px);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .hamburger {
        display: flex;
      }

      .nav-links {
        position: absolute;
        top: 70px;
        right: 0;
        background-color: #000000ff;
        flex-direction: column;
        align-items: center;
        width: 100%;
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        border-top: 2px solid #6aad47;
      }

      .nav-links.active {
        max-height: 500px;
        opacity: 1;
        padding: 1rem 0;
        transition: max-height 0.4s ease, opacity 0.4s ease;
      }

      .nav-links li {
        padding: 1rem 0;
      }
    }
  </style>
</head>
<body>

  <nav>
    <div class="nav-container">
      <div class="logo">
        <a href="index.php">
          <img src="img/sostic-b.png" alt="Logo Empresa">
        </a>
      </div>

      <!-- Links -->
      <ul class="nav-links" role="menubar" aria-label="Principal">
        <li role="none"><a role="menuitem" href="about.php">Nosotros</a></li>
        <li role="none"><a role="menuitem" href="services.php">Servicios</a></li>
        <li role="none"><a role="menuitem" href="collaboration_models.php">Modelos de colaboración</a></li>
        <li role="none"><a role="menuitem" href="sostic-cloud.php">Nube Sostic
        <li role="none"><a role="menuitem" href="Mapa de Soluciones.php">Mapa de Soluciones</a></li>
        <li role="none"><a role="menuitem" href="contact.php">Contacto</a></li>
        </a></li>
      </ul>

      <!-- Menú hamburguesa -->
      <div class="hamburger" onclick="toggleMenu(this)" aria-label="Abrir menú" aria-expanded="false" aria-controls="menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>

  <script>
    function toggleMenu(el) {
      el.classList.toggle('active');
      const list = document.querySelector('.nav-links');
      list.classList.toggle('active');
      const expanded = el.getAttribute('aria-expanded') === 'true';
      el.setAttribute('aria-expanded', (!expanded).toString());
    }
    // Scroll shadow
    const navEl = document.querySelector('nav');
    const onScroll = () => {
      if (window.scrollY > 8) { navEl.classList.add('nav-scrolled'); } else { navEl.classList.remove('nav-scrolled'); }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
  </script>
