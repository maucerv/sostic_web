<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios Administrados - Sostic</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Exo:wght@600;700;800&family=Quicksand:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
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
      margin: 0;
      padding: 0;
    }

    /* Hero Section */
    .hero-services {
      background: var(--brand-gradient);
      padding: 100px 0 80px;
      position: relative;
      overflow: hidden;
      text-align: center;
    }

    .hero-services::before {
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

    .hero-services .container {
      position: relative;
      z-index: 2;
    }

    .hero-services h1 {
      font-family: 'Exo', sans-serif;
      font-size: clamp(2.5rem, 6vw, 4rem);
      font-weight: 800;
      color: white;
      margin-bottom: 1rem;
      text-shadow: 0 4px 16px rgba(0,0,0,0.1);
    }

    .hero-services p {
      font-size: clamp(1.1rem, 2vw, 1.3rem);
      color: rgba(255,255,255,0.95);
      max-width: 700px;
      margin: 0 auto;
    }

    /* Wave Separator */
    .wave-separator-services {
      position: relative;
      width: 100%;
      height: 100px;
      margin-top: -1px;
      overflow: hidden;
      background: var(--bg);
    }

    .wave-separator-services svg {
      display: block;
      width: 100%;
      height: 100%;
    }

    .wave-separator-services path {
      fill: var(--bg);
    }

    /* Main Container */
    .services-container {
      max-width: 1200px;
      margin: 80px auto;
      padding: 0 20px;
    }

    .section-intro {
      text-align: center;
      max-width: 800px;
      margin: 0 auto 60px;
    }

    .section-intro h2 {
      font-family: 'Exo', sans-serif;
      font-size: clamp(2rem, 4vw, 2.5rem);
      font-weight: 800;
      background: var(--brand-gradient);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 1rem;
    }

    .section-intro p {
      font-size: 1.1rem;
      color: var(--text-light);
    }

    /* Service Cards */
    .service-card {
      background: var(--card);
      border-radius: 24px;
      margin-bottom: 2rem;
      box-shadow: var(--shadow-sm);
      border: 1px solid var(--border-light);
      overflow: hidden;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
    }

    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: var(--brand-gradient);
      transform: scaleX(0);
      transition: transform 0.4s ease;
    }

    .service-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-lg);
    }

    .service-card:hover::before {
      transform: scaleX(1);
    }

    .service-header {
      padding: 2rem 2rem 1.5rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 1.5rem;
      user-select: none;
      position: relative;
    }

    .service-icon {
      width: 70px;
      height: 70px;
      min-width: 70px;
      border-radius: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--brand-gradient);
      box-shadow: 0 8px 24px rgba(22, 163, 74, 0.3);
      transition: all 0.3s ease;
    }

    .service-card:hover .service-icon {
      transform: rotate(5deg) scale(1.1);
    }

    .service-icon i {
      font-size: 2rem;
      color: white;
    }

    .service-title {
      flex: 1;
    }

    .service-title h3 {
      font-family: 'Exo', sans-serif;
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--text);
      margin: 0;
      transition: color 0.3s ease;
    }

    .service-card:hover .service-title h3 {
      color: var(--brand-1);
    }

    .service-toggle {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: linear-gradient(135deg, rgba(22, 163, 74, 0.1) 0%, rgba(74, 222, 128, 0.1) 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .service-toggle i {
      font-size: 1.3rem;
      color: var(--brand-1);
      transition: transform 0.3s ease;
    }

    .service-card[open] .service-toggle {
      background: var(--brand-gradient);
    }

    .service-card[open] .service-toggle i {
      color: white;
      transform: rotate(180deg);
    }

    .service-content {
      padding: 0 2rem 2rem 2rem;
    }

    .service-description {
      font-size: 1.05rem;
      color: var(--text-light);
      line-height: 1.8;
      margin-bottom: 2rem;
      padding: 1.5rem;
      background: linear-gradient(135deg, rgba(22, 163, 74, 0.03) 0%, rgba(74, 222, 128, 0.02) 100%);
      border-radius: 12px;
      border-left: 4px solid var(--brand-1);
    }

    .subsection {
      margin-bottom: 2rem;
    }

    .subsection h4 {
      font-family: 'Exo', sans-serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--brand-1);
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .subsection h4::before {
      content: '';
      width: 4px;
      height: 20px;
      background: var(--brand-gradient);
      border-radius: 2px;
    }

    .service-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .service-list li {
      padding: 0.8rem 1.2rem;
      margin-bottom: 0.75rem;
      background: var(--card);
      border-radius: 10px;
      border: 1px solid var(--border-light);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .service-list li::before {
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

    .service-list li:hover {
      transform: translateX(8px);
      box-shadow: var(--shadow-sm);
      border-color: var(--brand-1);
    }

    .service-list li:hover::before {
      width: 100%;
    }

    .service-list li i {
      color: var(--brand-1);
      font-size: 1.1rem;
      min-width: 20px;
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

    /* Responsive */
    @media (max-width: 768px) {
      .hero-services {
        padding: 60px 0 40px;
      }

      .services-container {
        margin: 40px auto;
        padding: 0 16px;
      }

      .service-header {
        padding: 1.5rem;
      }

      .service-icon {
        width: 60px;
        height: 60px;
        min-width: 60px;
      }

      .service-icon i {
        font-size: 1.7rem;
      }

      .service-title h3 {
        font-size: 1.25rem;
      }

      .service-content {
        padding: 0 1.5rem 1.5rem 1.5rem;
      }

      .wave-separator-services {
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

    /* Custom details/summary styling */
    details summary {
      list-style: none;
    }

    details summary::-webkit-details-marker {
      display: none;
    }
  </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero-services">
  <div class="container">
    <h1 class="fade-in-up">Servicios Administrados</h1>
    <p class="fade-in-up">Soluciones tecnológicas completas para optimizar tu infraestructura</p>
  </div>
</section>

<!-- Wave Separator -->
<div class="wave-separator-services">
  <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
    <path d="M0,50 C150,80 350,0 600,50 C850,100 1050,50 1200,70 L1200,120 L0,120 Z"></path>
  </svg>
</div>

<!-- Main Content -->
<div class="services-container">
  
  <!-- Service 1: Infraestructura -->
  <details class="service-card fade-in-up" open>
    <summary class="service-header">
      <div class="service-icon">
        <i class="bi bi-hdd-stack"></i>
      </div>
      <div class="service-title">
        <h3>Infraestructura</h3>
      </div>
      <div class="service-toggle">
        <i class="bi bi-chevron-down"></i>
      </div>
    </summary>
    
    <div class="service-content">
      <div class="service-description">
        En Sostic proveemos tecnologías y servicios de vanguardia con las mejores prácticas para garantizar sistemas disponibles, escalables y seguros.
      </div>
      
      <div class="subsection">
        <h4>Administración de servidores</h4>
        <ul class="service-list">
          <li><i class="bi bi-check-circle-fill"></i> Wintel</li>
          <li><i class="bi bi-check-circle-fill"></i> Unix</li>
          <li><i class="bi bi-check-circle-fill"></i> Linux</li>
        </ul>
      </div>

      <div class="subsection">
        <h4>Servidores virtuales</h4>
        <ul class="service-list">
          <li><i class="bi bi-check-circle-fill"></i> Aprovisionamiento y despliegue de servidores virtuales.</li>
          <li><i class="bi bi-check-circle-fill"></i> Ajuste dinámico de recursos (CPU, RAM, almacenamiento, red).</li>
          <li><i class="bi bi-check-circle-fill"></i> Instalación y soporte de sistemas operativos huéspedes.</li>
          <li><i class="bi bi-check-circle-fill"></i> Implementación de clústeres de alta disponibilidad.</li>
          <li><i class="bi bi-check-circle-fill"></i> Portabilidad y plantillas de servidores virtuales.</li>
          <li><i class="bi bi-check-circle-fill"></i> Gestión de almacenamiento para contenido estático y aplicaciones.</li>
        </ul>
      </div>
    </div>
  </details>

  <!-- Service 2: Digitalización -->
  <details class="service-card fade-in-up">
    <summary class="service-header">
      <div class="service-icon">
        <i class="bi bi-files"></i>
      </div>
      <div class="service-title">
        <h3>Digitalización</h3>
      </div>
      <div class="service-toggle">
        <i class="bi bi-chevron-down"></i>
      </div>
    </summary>
    
    <div class="service-content">
      <div class="service-description">
        Experiencia, tecnología y personal capacitado para ofrecer soluciones de digitalización modernas y seguras.
      </div>
      
      <div class="subsection">
        <h4>Documentos y planos</h4>
        <ul class="service-list">
          <li><i class="bi bi-check-circle-fill"></i> Digitalización masiva en múltiples formatos.</li>
          <li><i class="bi bi-check-circle-fill"></i> Planos arquitectónicos, industriales y eléctricos.</li>
        </ul>
      </div>

      <div class="subsection">
        <h4>Libros y acervos culturales</h4>
        <ul class="service-list">
          <li><i class="bi bi-check-circle-fill"></i> Digitalización de libros y documentos históricos.</li>
          <li><i class="bi bi-check-circle-fill"></i> Equipo especializado para evitar maltrato.</li>
          <li><i class="bi bi-check-circle-fill"></i> Fotografía en alta resolución.</li>
        </ul>
      </div>

      <div class="subsection">
        <h4>OCR</h4>
        <ul class="service-list">
          <li><i class="bi bi-check-circle-fill"></i> Reconocimiento Óptico de Caracteres (OCR).</li>
          <li><i class="bi bi-check-circle-fill"></i> Conversión a formatos editables.</li>
          <li><i class="bi bi-check-circle-fill"></i> Indexación y manipulación avanzada.</li>
        </ul>
      </div>
    </div>
  </details>

  <!-- Service 3: Unidad de gestión de seguridad -->
  <details class="service-card fade-in-up">
    <summary class="service-header">
      <div class="service-icon">
        <i class="bi bi-shield-lock"></i>
      </div>
      <div class="service-title">
        <h3>Unidad de gestión de seguridad</h3>
      </div>
      <div class="service-toggle">
        <i class="bi bi-chevron-down"></i>
      </div>
    </summary>
    
    <div class="service-content">
      <div class="service-description">
        Servicios de seguridad informática adaptados a cada organización para proteger la integridad y privacidad de la información.
      </div>
      
      <div class="subsection">
        <h4>Gestión de incidentes</h4>
        <p style="color: var(--text-light); margin-bottom: 1rem;">Detección y respuesta rápida con administración de:</p>
        <ul class="service-list">
          <li><i class="bi bi-shield-fill-check"></i> Firewalls</li>
          <li><i class="bi bi-shield-fill-check"></i> IPS</li>
          <li><i class="bi bi-shield-fill-check"></i> DDoS</li>
          <li><i class="bi bi-shield-fill-check"></i> DLP</li>
        </ul>
      </div>
    </div>
  </details>

  <!-- Service 4: Consultoría -->
  <details class="service-card fade-in-up">
    <summary class="service-header">
      <div class="service-icon">
        <i class="bi bi-person-workspace"></i>
      </div>
      <div class="service-title">
        <h3>Consultoría</h3>
      </div>
      <div class="service-toggle">
        <i class="bi bi-chevron-down"></i>
      </div>
    </summary>
    
    <div class="service-content">
      <div class="service-description">
        Asesoría en decisiones estratégicas sobre infraestructura tecnológica.
      </div>
    </div>
  </details>

  <!-- Service 5: Monitoreo -->
  <details class="service-card fade-in-up">
    <summary class="service-header">
      <div class="service-icon">
        <i class="bi bi-graph-up"></i>
      </div>
      <div class="service-title">
        <h3>Monitoreo</h3>
      </div>
      <div class="service-toggle">
        <i class="bi bi-chevron-down"></i>
      </div>
    </summary>
    
    <div class="service-content">
      <div class="service-description">
        Supervisión constante de los sistemas para prevenir y resolver incidentes de manera proactiva.
      </div>
    </div>
  </details>

  <!-- Service 6: Inteligencia Artificial -->
  <details class="service-card fade-in-up">
    <summary class="service-header">
      <div class="service-icon">
        <i class="bi bi-cpu"></i>
      </div>
      <div class="service-title">
        <h3>Inteligencia Artificial</h3>
      </div>
      <div class="service-toggle">
        <i class="bi bi-chevron-down"></i>
      </div>
    </summary>
    
    <div class="service-content">
      <div class="service-description">
        Impulsamos tu crecimiento con soluciones de IA adaptadas a las necesidades de tu empresa, utilizando tecnologías de vanguardia para optimizar procesos y generar valor.
      </div>
      
      <div class="subsection">
        <h4>Machine Learning y Predicción</h4>
        <ul class="service-list">
          <li><i class="bi bi-check-circle-fill"></i> Análisis predictivo y modelos de pronóstico.</li>
          <li><i class="bi bi-check-circle-fill"></i> Detección de patrones y anomalías.</li>
          <li><i class="bi bi-check-circle-fill"></i> Optimización de procesos empresariales.</li>
          <li><i class="bi bi-check-circle-fill"></i> Modelos de clasificación y regresión.</li>
        </ul>
      </div>

      <div class="subsection">
        <h4>Visión por Computadora</h4>
        <ul class="service-list">
          <li><i class="bi bi-check-circle-fill"></i> Reconocimiento de objetos e imágenes.</li>
          <li><i class="bi bi-check-circle-fill"></i> Análisis de video en tiempo real.</li>
          <li><i class="bi bi-check-circle-fill"></i> Control de calidad automatizado.</li>
          <li><i class="bi bi-check-circle-fill"></i> Detección facial y biométrica.</li>
        </ul>
      </div>

      <div class="subsection">
        <h4>Procesamiento de Lenguaje Natural (NLP)</h4>
        <ul class="service-list">
          <li><i class="bi bi-check-circle-fill"></i> Chatbots y asistentes virtuales inteligentes.</li>
          <li><i class="bi bi-check-circle-fill"></i> Análisis de sentimientos y opiniones.</li>
          <li><i class="bi bi-check-circle-fill"></i> Extracción y clasificación de información.</li>
          <li><i class="bi bi-check-circle-fill"></i> Traducción automática y resumen de textos.</li>
        </ul>
      </div>

      <div class="subsection">
        <h4>IA Generativa</h4>
        <ul class="service-list">
          <li><i class="bi bi-check-circle-fill"></i> Generación de contenido y creatividad asistida.</li>
          <li><i class="bi bi-check-circle-fill"></i> Síntesis de imágenes y videos.</li>
          <li><i class="bi bi-check-circle-fill"></i> Automatización de tareas creativas.</li>
          <li><i class="bi bi-check-circle-fill"></i> Personalización de experiencias.</li>
        </ul>
      </div>

      <div class="subsection">
        <h4>Ecosistema Completo y Seguro</h4>
        <ul class="service-list">
          <li><i class="bi bi-check-circle-fill"></i> Infraestructura escalable y robusta.</li>
          <li><i class="bi bi-check-circle-fill"></i> Integración con sistemas existentes.</li>
          <li><i class="bi bi-check-circle-fill"></i> Privacidad y protección de datos.</li>
          <li><i class="bi bi-check-circle-fill"></i> Monitoreo y mantenimiento continuo.</li>
          <li><i class="bi bi-check-circle-fill"></i> Capacitación y soporte especializado.</li>
        </ul>
      </div>
    </div>
  </details>

</div>

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
    document.querySelectorAll('.fade-in-up').forEach((el) => {
      observer.observe(el);
    });

    // Funcionalidad de acordeón: cerrar otros details al abrir uno
    const allDetails = document.querySelectorAll('.service-card');
    
    allDetails.forEach((detail) => {
      detail.addEventListener('toggle', function() {
        if (this.open) {
          // Cerrar todos los demás details
          allDetails.forEach((otherDetail) => {
            if (otherDetail !== this && otherDetail.open) {
              otherDetail.open = false;
            }
          });
        }
      });
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

</body>
</html>
<?php include 'whatsapp.php'; ?>
<?php include 'footer.php'; ?>