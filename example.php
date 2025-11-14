<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sostic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<!-- Estilos personalizados mejorados -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Exo:wght@600;700&family=Quicksand:wght@300;400;600&display=swap');

  :root{
    --bg: #f8fffe;
    --bg-alt: #ffffff;
    --text: #1a1a1a;
    --text-light: #4a5568;
    --text-muted: #718096;
    --brand-1: #16a34a;
    --brand-2: #4ade80;
    --brand-gradient: linear-gradient(135deg, #64C238 20%, #6cae4a 50%, #64C238 100%);
    --accent: #059669;
    --card: #ffffff;
    --border-light: rgba(255, 255, 255, 0.8);
    --shadow-sm: 0 4px 16px rgba(0, 0, 0, 0.04);
    --shadow-md: 0 8px 32px rgba(0, 0, 0, 0.08);
    --shadow-lg: 0 16px 48px rgba(0, 0, 0, 0.12);
    --glass: rgba(255, 255, 255, 0.85);
  }

  * { box-sizing: border-box; }
  
  html, body { 
    height: 100%; 
    margin: 0; 
    scroll-behavior: smooth;
  }
  
  body {
    font-family: 'Quicksand', Arial, sans-serif;
    background: var(--bg);
    color: var(--text);
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 16px;
    overflow-x: hidden;
  }

  h1, h2, h3, h4, h5, h6 { 
    font-family: 'Exo', sans-serif; 
    margin: 0 0 1rem; 
    font-weight: 700;
    letter-spacing: -0.025em;
  }
  
  h2 { 
    font-size: clamp(2rem, 5vw, 2.75rem); 
    font-weight: 800; 
    background: var(--brand-gradient);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1.2;
  }

  a { 
    color: var(--brand-1); 
    text-decoration: none; 
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  }
  
  a:hover { 
    color: var(--accent);
    transform: translateY(-1px);
  }
  
  a:focus { 
    outline: 2px solid var(--brand-2); 
    outline-offset: 2px; 
  }

  .cta-button {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 18px 40px;
    border-radius: 50px;
    background: linear-gradient(135deg, #64C238 0%, #6cae4a 100%);
    color: white;
    font-weight: 600;
    font-size: 1.15rem;
    box-shadow: 0 10px 30px rgba(100, 194, 56, 0.4);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: 2px solid transparent;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    text-transform: none;
    letter-spacing: 0.025em;
  }

  .cta-button::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 0;
  }

  .cta-button span,
  .cta-button i {
    position: relative;
    z-index: 1;
    transition: color 0.3s ease;
  }

  .cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 45px rgba(100, 194, 56, 0.6);
    border-color: #64C238;
    color: #1a1a1a;
  }

  .cta-button:hover::before {
    opacity: 1;
  }

  .cta-button:active {
    transform: translateY(-1px);
    box-shadow: 0 8px 25px rgba(100, 194, 56, 0.5);
  }

  .cta-button i {
    font-size: 1.2rem;
    transition: transform 0.3s ease, color 0.3s ease;
  }

  .cta-button:hover i {
    transform: translateX(4px);
  }

  .cta-button-secondary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 18px 40px;
    border-radius: 50px;
    background: linear-gradient(135deg, #64C238 0%, #6cae4a 100%);
    color: white;
    font-weight: 600;
    font-size: 1.15rem;
    box-shadow: 0 10px 30px rgba(100, 194, 56, 0.4);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: 2px solid transparent;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    text-transform: none;
    letter-spacing: 0.025em;
  }

  .cta-button-secondary::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 0;
  }

  .cta-button-secondary span,
  .cta-button-secondary i {
    position: relative;
    z-index: 1;
    transition: color 0.3s ease;
  }

  .cta-button-secondary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 45px rgba(100, 194, 56, 0.6);
    border-color: #64C238;
    color: #1a1a1a;
  }

  .cta-button-secondary:hover::before {
    opacity: 1;
  }

  .cta-button-secondary:active {
    transform: translateY(-1px);
    box-shadow: 0 8px 25px rgba(100, 194, 56, 0.5);
  }

  .cta-button-secondary i {
    font-size: 1.2rem;
    transition: transform 0.3s ease, color 0.3s ease;
  }

  .cta-button-secondary:hover i {
    transform: translateX(4px);
  }

  /* Hero mejorado con imagen de fondo */
  .hero {
    background-image: url('img/index.jpeg');
    background-size: 130% auto;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    position: relative;
    padding: 100px 0 80px;
    text-align: center;
    overflow: hidden;
    min-height: 60vh;
  }

  /* Overlay mínimo solo para garantizar legibilidad del texto blanco */
  .hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    /* Overlay casi transparente solo para contraste del texto */
    background: rgba(0, 0, 0, 0.15);
    pointer-events: none;
    z-index: 1;
  }

  /* Efectos de luz adicionales */
  .hero::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
      radial-gradient(circle at 20% 20%, rgba(255,255,255,0.1) 0%, transparent 50%),
      radial-gradient(circle at 80% 80%, rgba(255,255,255,0.1) 0%, transparent 50%),
      radial-gradient(circle at 40% 70%, rgba(255,255,255,0.05) 0%, transparent 50%);
    pointer-events: none;
    z-index: 1;
  }

  .hero .container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
  }

  .hero h2 {
    font-size: clamp(2.5rem, 6vw, 4rem);
    color: white;
    margin-bottom: 1.5rem;
    text-shadow: 0 4px 16px rgba(0,0,0,0.3);
    background: none;
    -webkit-text-fill-color: white;
  }

  .hero p {
    font-size: clamp(1.8rem, 4.5vw, 2.6rem);
    color: rgba(255,255,255,0.95);
    margin-bottom: 0.3rem;
    font-weight: 600;
    letter-spacing: 0.025em;
    text-shadow: 0 2px 8px rgba(0,0,0,0.2);
    font-family: 'Exo', sans-serif;
    line-height: 1.2;
  }

  .hero p:last-of-type {
    margin-bottom: 2.5rem;
  }

  /* Wave separator mejorado y corregido */
  .wave-separator {
    position: relative;
    width: 100%;
    height: 120px;
    margin-top: -1px;
    overflow: hidden;
    background: var(--bg);
  }

  .wave-layer {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: visible;
  }

  /* Primera capa - más lenta */
  .wave-layer:nth-child(1) {
    z-index: 3;
  }

  .wave-layer:nth-child(1) svg {
    width: 100%;
    height: 100%;
    animation: wave-slow 12s ease-in-out infinite;
    opacity: 1;
  }

  /* Segunda capa - velocidad media */
  .wave-layer:nth-child(2) {
    z-index: 2;
  }

  .wave-layer:nth-child(2) svg {
    width: 100%;
    height: 100%;
    animation: wave-medium 8s ease-in-out infinite reverse;
    opacity: 0.7;
  }

  /* Tercera capa - más rápida */
  .wave-layer:nth-child(3) {
    z-index: 1;
  }

  .wave-layer:nth-child(3) svg {
    width: 100%;
    height: 100%;
    animation: wave-fast 6s ease-in-out infinite;
    opacity: 0.5;
  }

  .wave-separator svg {
    display: block;
    width: 100%;
    height: 100%;
  }

  .wave-separator path {
    fill: var(--bg);
    filter: drop-shadow(0 -2px 6px rgba(0,0,0,0.03));
  }

  /* Animaciones suaves y naturales */
  @keyframes wave-slow {
    0%, 100% { 
      transform: translateX(0) translateY(0); 
    }
    50% { 
      transform: translateX(-25px) translateY(-8px); 
    }
  }

  @keyframes wave-medium {
    0%, 100% { 
      transform: translateX(0) translateY(0); 
    }
    50% { 
      transform: translateX(25px) translateY(-5px); 
    }
  }

  @keyframes wave-fast {
    0%, 100% { 
      transform: translateX(0) translateY(0); 
    }
    50% { 
      transform: translateX(-20px) translateY(-10px); 
    }
  }

  /* Layout helpers mejorados */
  .container { 
    max-width: 1200px; 
    margin: 0 auto; 
    padding: 0 20px; 
  }

  .my-5 { 
    margin: 5rem 0; 
  }

  .text-center { 
    text-align: center; 
  }

  .py-5 { 
    padding: 5rem 0; 
  }

  /* Sección sobre nosotros mejorada */
  .about-section {
    background: var(--bg-alt);
    border-radius: 24px;
    padding: 3rem;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-light);
    position: relative;
    overflow: hidden;
  }

  .about-section::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 40%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(22, 163, 74, 0.02), transparent);
    transform: rotate(15deg);
  }

  .about-content {
    position: relative;
    z-index: 2;
  }

  .texto-justificado {
    text-align: justify;
    font-size: 1.1rem;
    line-height: 1.7;
    color: var(--text-light);
    margin-bottom: 2rem;
  }

  .img-fluid {
    max-width: 100%;
    height: auto;
    border-radius: 20px;
    box-shadow: var(--shadow-md);
    transition: transform 0.4s ease;
  }

  /* Imagen más grande en la sección about */
  .about-section .img-fluid,
  section[aria-labelledby="sobre-title"] .img-fluid {
    max-width: 110%;
    width: 110%;
    transform: scale(1.1);
    transform-origin: center;
  }

  @media (max-width: 768px) {
    .about-section .img-fluid,
    section[aria-labelledby="sobre-title"] .img-fluid {
      max-width: 100%;
      width: 100%;
      transform: scale(1);
    }
  }

  .img-fluid:hover {
    transform: scale(1.05) rotate(1deg);
  }

  .about-section .img-fluid:hover,
  section[aria-labelledby="sobre-title"] .img-fluid:hover {
    transform: scale(1.15) rotate(1deg);
  }

  /* Servicios mejorados */
  .services-section {
    background: linear-gradient(135deg, rgba(22, 163, 74, 0.02) 0%, rgba(74, 222, 128, 0.01) 100%);
    padding: 3rem 1rem;
    border-radius: 32px;
    margin: 2rem 0;
  }

  @media (max-width: 768px) {
    .services-section {
      padding: 2rem 0.5rem;
      margin: 1rem 0;
      border-radius: 24px;
    }
    
    .wave-separator {
      height: 80px;
    }
    
    .hero {
      padding: 70px 0 50px;
      background-attachment: scroll;
      background-size: 140% auto;
      min-height: 50vh;
    }
  }

  @media (max-width: 480px) {
    .wave-separator {
      height: 60px;
    }
  }

  .service-box {
    background: var(--card);
    border-radius: 24px;
    padding: 2.5rem 2rem;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-light);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    height: auto;
    min-height: 250px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  @media (max-width: 768px) {
    .service-box {
      min-height: 220px;
      padding: 2rem 1.5rem;
      border-radius: 20px;
    }
  }

  @media (max-width: 480px) {
    .service-box {
      min-height: 200px;
      padding: 1.5rem 1rem;
      border-radius: 16px;
    }
  }

  .service-box::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--brand-gradient);
    transform: scaleX(0);
    transition: transform 0.4s ease;
  }

  .service-box:hover::before {
    transform: scaleX(1);
  }

  .service-box:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: var(--shadow-lg);
    border-color: rgba(22, 163, 74, 0.2);
  }

  .icon-wrap {
    width: 80px;
    height: 80px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    background: var(--brand-gradient);
    box-shadow: 0 8px 24px rgba(22, 163, 74, 0.2);
    transition: all 0.3s ease;
  }

  @media (max-width: 480px) {
    .icon-wrap {
      width: 60px !important;
      height: 60px !important;
    }
  }

  .service-box:hover .icon-wrap {
    transform: rotate(5deg) scale(1.1);
  }

  .service-box h4 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--text);
    margin-bottom: 1rem;
  }

  @media (max-width: 480px) {
    .service-box h4 {
      font-size: 1.1rem !important;
    }
  }

  .service-box p {
    margin: 0;
    color: var(--text-light);
    font-size: 1.05rem;
    line-height: 1.6;
  }

  @media (max-width: 480px) {
    .service-box p {
      font-size: 0.95rem !important;
    }
  }

  .service-box.justified-text p {
    text-align: justify;
  }

  /* CSS corregido para el grid de servicios */
  .service-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 2rem;
    margin-top: 3rem;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
  }

  /* Primera fila: 3 servicios */
  .service-grid .service-box:nth-child(1) {
    grid-column: 1 / 3;
  }

  .service-grid .service-box:nth-child(2) {
    grid-column: 3 / 5;
  }

  .service-grid .service-box:nth-child(3) {
    grid-column: 5 / 7;
  }

  /* Segunda fila: 2 servicios perfectamente centrados */
  .service-grid .service-box:nth-child(4) {
    grid-column: 2 / 4;
  }

  .service-grid .service-box:nth-child(5) {
    grid-column: 4 / 6;
  }

  /* Responsive mejorado */
  @media (max-width: 1024px) {
    .service-grid {
      grid-template-columns: repeat(2, 1fr);
      max-width: 700px;
      gap: 1.5rem;
    }
    
    .service-grid .service-box:nth-child(1),
    .service-grid .service-box:nth-child(2),
    .service-grid .service-box:nth-child(3),
    .service-grid .service-box:nth-child(4),
    .service-grid .service-box:nth-child(5) {
      grid-column: span 1;
    }
    
    /* Centrar el último elemento si es impar */
    .service-grid .service-box:nth-child(5) {
      grid-column: 1 / -1;
      justify-self: center;
      max-width: 340px;
    }
  }

  @media (max-width: 768px) {
    .service-grid {
      grid-template-columns: 1fr;
      gap: 1.5rem;
      padding: 0 1rem;
    }
    
    .service-grid .service-box {
      grid-column: 1 !important;
      justify-self: stretch;
      max-width: 100%;
      width: 100%;
    }
  }

  @media (max-width: 480px) {
    .service-grid {
      gap: 1rem;
      padding: 0 0.5rem;
    }
    
    .service-box {
      min-height: 180px;
      padding: 1.5rem 1rem;
    }
    
    .icon-wrap {
      width: 55px !important;
      height: 55px !important;
      margin-bottom: 1rem !important;
    }
    
    .icon-wrap i {
      font-size: 1.5rem !important;
    }
  }

  .carousel-section {
    padding: 4rem 0;
    position: relative;
  }

  .carousel-section.bg-light {
    background: linear-gradient(135deg, #f8fffe 0%, #ffffff 100%);
  }

  .section-title {
    font-size: clamp(2rem, 4vw, 2.5rem);
    margin-bottom: 3rem;
    font-weight: 800;
    position: relative;
    display: inline-block;
  }

  .section-title::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 4px;
    background: var(--brand-gradient);
    border-radius: 2px;
  }

  .carousel-inner img {
    max-height: 100px;
    object-fit: contain;
    filter: grayscale(70%) brightness(0.9);
    opacity: 0.8;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    padding: 1rem;
    border-radius: 12px;
    background: rgba(255,255,255,0.6);
    backdrop-filter: blur(10px);
  }

  .carousel-inner img:hover {
    filter: grayscale(0%) brightness(1);
    opacity: 1;
    transform: scale(1.1) translateY(-4px);
    box-shadow: var(--shadow-md);
  }

  /* Cards mejorados */
  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
  }

  details {
    background: var(--card);
    border-radius: 16px;
    border: 1px solid var(--border-light);
    padding: 1.5rem;
    cursor: pointer;
    box-shadow: var(--shadow-sm);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  }

  details:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-md);
    border-color: rgba(22, 163, 74, 0.2);
  }

  details[open] {
    box-shadow: var(--shadow-md);
    border-color: var(--brand-1);
  }

  summary {
    font-size: 1.15rem;
    font-weight: 600;
    color: var(--text);
    position: relative;
    padding-left: 1.5rem;
  }

  summary::marker {
    content: '';
  }

  summary::before {
    content: '+';
    position: absolute;
    left: 0;
    top: 0;
    width: 24px;
    height: 24px;
    background: var(--brand-gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    transition: transform 0.3s ease;
  }

  details[open] summary::before {
    content: '−';
    transform: rotate(180deg);
  }

  details p {
    margin-top: 1rem;
    color: var(--text-light);
    line-height: 1.6;
    padding-left: 1.5rem;
  }

  /* Animaciones mejoradas */
  .fade-up {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.2, 0.9, 0.25, 1);
  }

  .fade-up.show {
    opacity: 1;
    transform: translateY(0);
  }

  /* Responsive mejorado */
  @media (max-width: 768px) {
    .container {
      padding: 0 16px;
    }

    .about-section {
      padding: 2rem 1.5rem;
    }

    .carousel-inner img {
      max-height: 70px;
    }

    .my-5 {
      margin: 3rem 0;
    }

    .py-5 {
      padding: 3rem 0;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    * {
      animation-duration: 0.01ms !important;
      animation-iteration-count: 1 !important;
      transition-duration: 0.01ms !important;
    }
  }

  .flex-container {
    display: flex;
    flex-wrap: wrap;
    gap: 3rem;
    align-items: center;
    justify-content: center;
    margin-top: 2rem;
    text-align: center;
  }

  .flex-item {
    flex: 1 1 400px;
    min-width: 300px;
  }

  .carousel-item .row {
    align-items: center;
  }

  /* Efectos de cristal */
  .glass-effect {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
  }
</style>

<!-- Hero -->
<section class="hero" aria-labelledby="hero-title">
  <div class="container">
    <h2 id="hero-title">Soluciones y Servicios</h2> <p>en Tecnologías de Información</p><p> y Comunicaciones</p>
    <a href="services.php" class="cta-button" role="button">
      <i class="bi bi-arrow-right-circle"></i>
      <span>Explorar Servicios</span>
    </a>
  </div>
</section>

<div class="wave-separator">
    <!-- Primera capa de ola (frontal) -->
    <div class="wave-layer">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,50 C150,80 350,0 600,50 C850,100 1050,50 1200,70 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
    
    <!-- Segunda capa de ola (media) -->
    <div class="wave-layer">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,70 C200,100 400,40 600,70 C800,100 1000,60 1200,80 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
    
    <!-- Tercera capa de ola (fondo) -->
    <div class="wave-layer">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,90 C250,60 450,90 600,80 C750,70 950,100 1200,85 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
</div>

<section aria-labelledby="sobre-title" style="display: flex; justify-content: center; align-items: center; width: 100%; margin: 50px 0;">
  <div class="about-section" style="max-width: 1200px; width: 100%; background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
    <div class="flex-container" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 30px;">
      
      <!-- Texto -->
      <div class="flex-item about-content" style="flex: 1 1 500px; text-align: center;">
        <h2 id="sobre-title" style="text-align: center; color: #28a745; font-weight: 700;">
          Servicios de Ingeniería, Infraestructura y Tecnologías de la Información
        </h2>
        <p style="text-align: justify; margin-top: 15px;">
          Como integrador de soluciones, ofrecemos proyectos llave en mano que cubren todos los aspectos tecnológicos que requiere su empresa. Garantizamos interoperabilidad, mejor costo-beneficio y personal altamente especializado certificado por los fabricantes.
        </p>
        <div style="text-align: center; margin-top: 20px;">
          <a href="about.php" class="cta-button cta-button-secondary">
            <i class="bi bi-info-circle"></i>
            <span>Conoce más</span>
          </a>
        </div>
      </div>
      
      <!-- Imagen -->
      <div class="flex-item" style="flex: 1 1 400px; text-align: center; overflow: hidden;">
        <img loading="lazy" src="img/mtp.jpg" class="img-fluid" alt="Sobre nosotros" style="border-radius: 15px;">
      </div>
    </div>
  </div>
</section>


<!-- Nuestros Servicios -->
<section class="fade-up" aria-labelledby="serv-title">
  <div class="container">
    <div class="services-section text-center">
      <h2 id="serv-title">Nuestros Servicios</h2>
      <div class="service-grid">

        <div class="service-box">
          <div class="icon-wrap" aria-hidden="true">
            <i class="bi bi-shield-lock" style="font-size:2rem;color:white"></i>
          </div>
          <h4>Ciberseguridad</h4>
          <p>Protección completa de los datos más valiosos de tu empresa con tecnologías de vanguardia.</p>
        </div>

        <div class="service-box">
          <div class="icon-wrap" aria-hidden="true">
            <i class="bi bi-hdd-stack" style="font-size:2rem;color:white"></i>
          </div>
          <h4>Infraestructura TI</h4>
          <p>Implementación y soporte de plataformas robustas y escalables para el crecimiento de tu negocio.</p>
        </div>

        <div class="service-box">
          <div class="icon-wrap" aria-hidden="true">
            <i class="bi bi-arrow-repeat" style="font-size:2rem;color:white"></i>
          </div>
          <h4>Continuidad Operativa</h4>
          <p>Planes de recuperación ante desastres y continuidad operativa para mantener tu empresa funcionando.</p>
        </div>
        <div class="service-box justified-text">
          <div class="icon-wrap" aria-hidden="true">
            <i class="bi bi-cpu" style="font-size:2rem;color:white"></i>
          </div>
          <h4>Inteligencia Artificial</h4>
          <p>Impulsamos tu crecimiento con IA: predicción, visión por computadora, lenguaje natural y modelos generativos en un ecosistema completo y seguro.</p>
        </div>

        <div class="service-box justified-text">
          <div class="icon-wrap" aria-hidden="true">
            <i class="bi bi-broadcast" style="font-size:2rem;color:white"></i>
          </div>
          <h4>Comunicaciones</h4>
          <p>Sistemas de comunicación unificada y redes de telecomunicaciones para conectar tu organización.</p>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- CLIENTES -->
<section class="carousel-section bg-light text-center">
  <div class="container">
    <h2 class="section-title">Nuestros Clientes</h2>
    <div id="clientesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
      <div class="carousel-inner text-center">

        <!-- Grupo 1 -->
        <div class="carousel-item active">
          <div class="row g-4 justify-content-center align-items-center">
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/C4.png" alt="Cliente C4"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/CIMAT.png" alt="Cliente CIMAT"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/Gobierno-Ags-1.png" alt="Gobierno de Aguascalientes"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/Gobierno-del-Estado-de-Gto-4.png" alt="Gobierno del Estado de Guanajuato"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/IEA.png" alt="Cliente IEA"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/INEGI-2.png" alt="Cliente INEGI"></div>
          </div>
        </div>

        <!-- Grupo 2 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center align-items-center">
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/ISSEA-1.png" alt="Cliente ISSEA"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/ISSPEA.png" alt="Cliente ISSPEA"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/Macometx.png" alt="Cliente Macometx"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/Maquhensa.png" alt="Cliente Maquhensa"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/Medica-Campestre.png" alt="Médica Campestre"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/Municipio-de-Ags.png" alt="Municipio de Aguascalientes"></div>
          </div>
        </div>

        <!-- Grupo 3 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center align-items-center">
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/Municipio-de-Leon.png" alt="Municipio de León"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/SSP-3.png" alt="Cliente SSP"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/Trucka.png" alt="Cliente Trucka"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/Tsubakimoto-1.png" alt="Cliente Tsubakimoto"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/UAM-1.png" alt="Cliente UAM"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/Clientes/Ugasa.png" alt="Cliente Ugasa"></div>
          </div>
        </div>

        <!-- Grupo 4 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center align-items-center">
            <div class="col-6 col-md-4"><img loading="lazy" src="img/Clientes/ZKW.png" alt="Cliente ZKW"></div>
            <div class="col-6 col-md-4"><img loading="lazy" src="img/Clientes/Flecha-Amarilla-1.png" alt="Flecha Amarilla"></div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ALIANZAS -->
<section class="carousel-section bg-white text-center">
  <div class="container">
    <h2 class="section-title">Alianzas </h2>
    <div id="alianzasCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
      <div class="carousel-inner text-center">

        <!-- Grupo 1 -->
        <div class="carousel-item active">
          <div class="row g-4 justify-content-center align-items-center">
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/Acronis-2.png" alt="Alianza Acronis"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/Aruba-1.png" alt="Alianza Aruba"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/Check-Point.png" alt="Alianza Check Point"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/Citrix-Ngro1.png" alt="Alianza Citrix"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/Commvault-1.png" alt="Alianza Commvault"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/Extreme-Networks-1.png" alt="Alianza Extreme Networks"></div>
          </div>
        </div>

        <!-- Grupo 2 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center align-items-center">
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/HP-1.png" alt="Alianza HP"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/HPE.png" alt="Alianza HPE"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/Kaspersky.png" alt="Alianza Kaspersky"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/Lenovo.png" alt="Alianza Lenovo"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/Microsoft-1.png" alt="Alianza Microsoft"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/mtp-ngro-2.png" alt="MTP"></div>
          </div>
        </div>

        <!-- Grupo 3 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center align-items-center">
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/Nutanix.png" alt="Alianza Nutanix"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/Qualys-1.png" alt="Alianza Qualys"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/Tripp Lite by Eaton Logo Color.png" alt="Alianza Tripp Lite by Eaton"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/veeam.png" alt="Alianza Veeam"></div>
            <div class="col-6 col-md-2"><img loading="lazy" src="img/marcas/vmware.png" alt="Alianza VMware"></div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Scripts -->
<script>
  // Intersection Observer mejorado para animaciones
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        // Unobserve después de la animación para mejor performance
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Observar elementos con fade-up
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.fade-up').forEach((el) => {
      observer.observe(el);
    });

    // Preload de imágenes críticas
    const criticalImages = [
      'img/mtp.jpg'
    ];
    
    criticalImages.forEach(src => {
      const img = new Image();
      img.src = src;
    });

    // Mejorar accesibilidad del carrusel
    const carousels = document.querySelectorAll('.carousel');
    carousels.forEach(carousel => {
      carousel.addEventListener('mouseenter', () => {
        const bsCarousel = bootstrap.Carousel.getInstance(carousel);
        if (bsCarousel) bsCarousel.pause();
      });
      
      carousel.addEventListener('mouseleave', () => {
        const bsCarousel = bootstrap.Carousel.getInstance(carousel);
        if (bsCarousel) bsCarousel.cycle();
      });
    })

    // Lazy loading para imágenes del carrusel
    const carouselImages = document.querySelectorAll('.carousel img[loading="lazy"]');
    const imageObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.src; // Trigger loading
          imageObserver.unobserve(img);
        }
      });
    });

    carouselImages.forEach(img => imageObserver.observe(img));
  });

  // Smooth scroll para enlaces internos
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // Performance: Reducir animaciones en dispositivos con poca potencia
  if (navigator.hardwareConcurrency && navigator.hardwareConcurrency <= 2) {
    document.documentElement.style.setProperty('--animation-duration', '0.2s');
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include 'footer.php'; ?>
<?php include 'whatsapp.php'; ?>
