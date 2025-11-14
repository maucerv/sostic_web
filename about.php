<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Sostic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;600;700;800&family=Quicksand:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Exo:wght@600;700;800&family=Quicksand:wght@300;400;600;700&display=swap');

  :root {
    --bg: #f8fffe;
    --bg-alt: #ffffff;
    --text: #1a1a1a;
    --text-light: #4a5568;
    --text-muted: #718096;
    --brand-1: #16a34a;
    --brand-2: #4ade80;
    --brand-gradient: linear-gradient(135deg, #64C238 0%, #6cae4a 50%, #4ade80 100%);
    --accent: #059669;
    --card: #ffffff;
    --border-light: rgba(22, 163, 74, 0.1);
    --shadow-sm: 0 4px 16px rgba(0, 0, 0, 0.04);
    --shadow-md: 0 8px 32px rgba(0, 0, 0, 0.08);
    --shadow-lg: 0 16px 48px rgba(0, 0, 0, 0.12);
    --shadow-xl: 0 24px 64px rgba(0, 0, 0, 0.15);
  }

  * {
    box-sizing: border-box;
  }

  body {
    font-family: 'Quicksand', sans-serif;
    background: var(--bg);
    color: var(--text);
    line-height: 1.7;
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  /* Hero Section */
  .hero-about {
    background: var(--brand-gradient);
    padding: 100px 0 80px;
    position: relative;
    overflow: hidden;
  }

  .hero-about::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
      radial-gradient(circle at 15% 20%, rgba(255,255,255,0.15) 0%, transparent 50%),
      radial-gradient(circle at 85% 80%, rgba(255,255,255,0.1) 0%, transparent 50%);
    pointer-events: none;
  }

  .hero-about .container {
    position: relative;
    z-index: 2;
  }

  .hero-about h1 {
    font-family: 'Exo', sans-serif;
    font-size: clamp(2.5rem, 6vw, 4rem);
    font-weight: 800;
    color: white;
    margin-bottom: 1rem;
    text-shadow: 0 4px 16px rgba(0,0,0,0.1);
  }

  .hero-about p {
    font-size: clamp(1.1rem, 2vw, 1.3rem);
    color: rgba(255,255,255,0.95);
    max-width: 700px;
    margin: 0 auto;
  }

  /* Wave Separator */
  .wave-separator-about {
    position: relative;
    width: 100%;
    height: 100px;
    margin-top: -1px;
    overflow: hidden;
    background: var(--bg);
  }

  .wave-separator-about svg {
    display: block;
    width: 100%;
    height: 100%;
  }

  .wave-separator-about path {
    fill: var(--bg);
  }

  /* Main Content Section */
  .about-main {
    padding: 80px 0;
    position: relative;
  }

  .about-image-wrapper {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: var(--shadow-xl);
    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .about-image-wrapper:hover {
    transform: scale(1.02) rotate(1deg);
  }

  .about-image-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(22, 163, 74, 0.1) 0%, transparent 100%);
    z-index: 1;
    pointer-events: none;
  }

  .about-image-wrapper img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
  }

  .about-image-wrapper:hover img {
    transform: scale(1.05);
  }

  /* Content Card */
  .content-card {
    background: var(--card);
    border-radius: 24px;
    padding: 3rem;
    box-shadow: var(--shadow-md);
    border: 1px solid var(--border-light);
    height: 100%;
    position: relative;
    overflow: hidden;
  }

  .content-card::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 40%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(22, 163, 74, 0.03), transparent);
    transform: rotate(15deg);
  }

  .content-card h2 {
    font-family: 'Exo', sans-serif;
    font-size: clamp(2rem, 4vw, 2.5rem);
    font-weight: 800;
    background: var(--brand-gradient);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 1.5rem;
    position: relative;
  }

  .content-card h4 {
    font-family: 'Exo', sans-serif;
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--brand-1);
    margin-top: 2rem;
    margin-bottom: 1rem;
    position: relative;
    padding-left: 20px;
  }

  .content-card h4::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 4px;
    height: 24px;
    background: var(--brand-gradient);
    border-radius: 2px;
  }

  .lead {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--text-light);
    line-height: 1.8;
    margin-bottom: 2rem;
    position: relative;
  }

  .texto-justificado {
    text-align: justify;
    font-size: 1.05rem;
    line-height: 1.8;
    color: var(--text-light);
  }

  /* Values List */
  .values-list {
    list-style: none;
    padding: 0;
    margin-top: 1rem;
  }

  .values-list li {
    padding: 1rem 1.5rem;
    margin-bottom: 1rem;
    background: linear-gradient(135deg, rgba(22, 163, 74, 0.05) 0%, rgba(74, 222, 128, 0.02) 100%);
    border-radius: 12px;
    border-left: 4px solid var(--brand-1);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
  }

  .values-list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 0;
    background: var(--brand-gradient);
    opacity: 0.1;
    transition: width 0.3s ease;
  }

  .values-list li:hover {
    transform: translateX(8px);
    box-shadow: var(--shadow-md);
  }

  .values-list li:hover::before {
    width: 100%;
  }

  .values-list li i {
    color: var(--brand-1);
    font-size: 1.2rem;
    margin-right: 0.5rem;
  }

  .values-list li strong {
    color: var(--brand-1);
    font-weight: 700;
  }

  /* Buttons */
  .btn-custom {
    padding: 14px 32px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1.05rem;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: none;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }

  .btn-custom::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
  }

  .btn-custom:hover::before {
    width: 300px;
    height: 300px;
  }

  .btn-primary-custom {
    background: var(--brand-gradient);
    color: white;
    box-shadow: 0 8px 24px rgba(22, 163, 74, 0.3);
  }

  .btn-primary-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 32px rgba(22, 163, 74, 0.4);
  }

  .btn-outline-custom {
    background: transparent;
    color: var(--brand-1);
    border: 2px solid var(--brand-1);
    box-shadow: 0 4px 16px rgba(22, 163, 74, 0.1);
  }

  .btn-outline-custom:hover {
    background: var(--brand-1);
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 12px 32px rgba(22, 163, 74, 0.3);
  }

  /* Stats Section */
  .stats-section {
    padding: 80px 0;
    background: linear-gradient(135deg, rgba(22, 163, 74, 0.03) 0%, rgba(74, 222, 128, 0.02) 100%);
    position: relative;
  }

  .stats-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
      radial-gradient(circle at 20% 30%, rgba(22, 163, 74, 0.05) 0%, transparent 50%),
      radial-gradient(circle at 80% 70%, rgba(74, 222, 128, 0.05) 0%, transparent 50%);
    pointer-events: none;
  }

  .stat-card {
    background: var(--card);
    border-radius: 24px;
    padding: 3rem 2rem;
    text-align: center;
    box-shadow: var(--shadow-md);
    border: 1px solid var(--border-light);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    height: 100%;
  }

  .stat-card::before {
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

  .stat-card:hover::before {
    transform: scaleX(1);
  }

  .stat-card:hover {
    transform: translateY(-12px) scale(1.03);
    box-shadow: var(--shadow-xl);
  }

  .stat-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 1.5rem;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--brand-gradient);
    box-shadow: 0 8px 24px rgba(22, 163, 74, 0.3);
    transition: all 0.3s ease;
  }

  .stat-card:hover .stat-icon {
    transform: rotate(5deg) scale(1.1);
  }

  .stat-icon i {
    font-size: 2.5rem;
    color: white;
  }

  .stat-number {
    font-family: 'Exo', sans-serif;
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 800;
    background: var(--brand-gradient);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 0.5rem;
    line-height: 1;
  }

  .stat-label {
    font-size: 1.1rem;
    color: var(--text-muted);
    font-weight: 600;
  }

  /* Animations */
  .fade-in-up {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.2, 0.9, 0.25, 1);
  }

  .fade-in-up.show {
    opacity: 1;
    transform: translateY(0);
  }

  .fade-in-left {
    opacity: 0;
    transform: translateX(-30px);
    transition: all 0.8s cubic-bezier(0.2, 0.9, 0.25, 1);
  }

  .fade-in-left.show {
    opacity: 1;
    transform: translateX(0);
  }

  .fade-in-right {
    opacity: 0;
    transform: translateX(30px);
    transition: all 0.8s cubic-bezier(0.2, 0.9, 0.25, 1);
  }

  .fade-in-right.show {
    opacity: 1;
    transform: translateX(0);
  }

  /* Responsive */
  @media (max-width: 768px) {
    .hero-about {
      padding: 60px 0 40px;
    }

    .about-main {
      padding: 40px 0;
    }

    .content-card {
      padding: 2rem 1.5rem;
      margin-top: 2rem;
    }

    .stats-section {
      padding: 40px 0;
    }

    .stat-card {
      margin-bottom: 1.5rem;
    }

    .wave-separator-about {
      height: 60px;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    * {
      animation-duration: 0.01ms !important;
      animation-iteration-count: 1 !important;
      transition-duration: 0.01ms !important;
    }
  }
</style>

<!-- Hero Section -->
<section class="hero-about">
  <div class="container text-center">
    <h1 class="fade-in-up">Quiénes Somos</h1>
    <p class="fade-in-up">Transformando el futuro tecnológico de tu empresa</p>
  </div>
</section>

<!-- Wave Separator -->
<div class="wave-separator-about">
  <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
    <path d="M0,50 C150,80 350,0 600,50 C850,100 1050,50 1200,70 L1200,120 L0,120 Z"></path>
  </svg>
</div>

<!-- Main Content -->
<section class="about-main">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- Imagen -->
      <div class="col-lg-6 fade-in-left">
        <div class="about-image-wrapper">
          <img src="img/Portada 1.png" alt="Equipo Sostic - Soluciones Tecnológicas" loading="lazy">
        </div>
      </div>

      <!-- Contenido -->
      <div class="col-lg-6 fade-in-right">
        <div class="content-card">
          <h2>Nuestra Esencia</h2>
          <p class="lead">Con más de <strong>20 años de experiencia</strong>, brindamos soluciones innovadoras en seguridad de la información, infraestructura y continuidad de negocio.</p>
          
          <h4>Nuestra Historia</h4>
          <p class="texto-justificado">Fundada en el año 2014, <strong>Sostic</strong> se ha consolidado como referente en soluciones tecnológicas, ayudando a empresas de todos los tamaños a optimizar sus operaciones y proteger sus activos digitales.</p>
          
          <h4>Misión</h4>
          <p class="texto-justificado">Contribuir al logro de tus objetivos pensando en TI</p>
          
          <h4>Visión</h4>
          <p class="texto-justificado">Ser un referente para TI</p>
          
          <h4>Valores</h4>
          <ul class="values-list">
            <li>
              
              <strong>Trabajo en Equipo:</strong> Sínergia, 1+1=3
            </li>
            <li>
              <strong>Apasionados por TI:</strong> Amamos lo que hacemos
            </li>
            <li>
              <strong>Actitud de Servicio:</strong> Estamos para TI
            </li>
          </ul>

          <!-- Botones -->
          <div class="mt-4 d-flex flex-wrap gap-3">
            <a href="contact.php" class="btn-custom btn-primary-custom">
              <i class="bi bi-envelope-fill"></i>
              Contáctanos
            </a>
            <a href="services.php" class="btn-custom btn-outline-custom">
              <i class="bi bi-grid-fill"></i>
              Nuestros Servicios
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
  <div class="container">
    <div class="row g-4">
      
      <div class="col-lg-4 col-md-6 fade-in-up">
        <div class="stat-card">
          <div class="stat-icon">
            <i class="bi bi-calendar-check"></i>
          </div>
          <div class="stat-number">20+</div>
          <div class="stat-label">Años de Experiencia</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fade-in-up">
        <div class="stat-card">
          <div class="stat-icon">
            <i class="bi bi-emoji-smile"></i>
          </div>
          <div class="stat-number">500+</div>
          <div class="stat-label">Clientes Satisfechos</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fade-in-up">
        <div class="stat-card">
          <div class="stat-icon">
            <i class="bi bi-check2-circle"></i>
          </div>
          <div class="stat-number">1000+</div>
          <div class="stat-label">Proyectos Completados</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Scripts -->
<script>
  // Intersection Observer para animaciones
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.addEventListener('DOMContentLoaded', () => {
    // Observar elementos con animaciones
    document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right').forEach((el) => {
      observer.observe(el);
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
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'whatsapp.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>