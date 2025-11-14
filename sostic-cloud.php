<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nube Privada - Sostic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Exo:wght@600;700;800&family=Quicksand:wght@300;400;600&display=swap');

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

  .hero {
    background: linear-gradient(135deg, #6cae4a 7%, #64C238 25%, #A3D08B 75%, #6cae4a 100%);
    position: relative;
    padding: 120px 0 100px;
    text-align: center;
    overflow: hidden;
  }

  .hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
      radial-gradient(circle at 20% 20%, rgba(255,255,255,0.1) 0%, transparent 50%),
      radial-gradient(circle at 80% 80%, rgba(255,255,255,0.1) 0%, transparent 50%);
    pointer-events: none;
  }

  .hero .container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
  }

  .hero h1 {
    font-size: clamp(2.5rem, 6vw, 4rem);
    color: white;
    margin-bottom: 1rem;
    text-shadow: 0 4px 16px rgba(0,0,0,0.1);
    font-weight: 800;
  }

  .hero p {
    font-size: clamp(1.1rem, 2.5vw, 1.5rem);
    color: rgba(255,255,255,0.95);
    margin-bottom: 2.5rem;
    font-weight: 300;
    letter-spacing: 0.025em;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
  }

  .cta-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 16px 32px;
    border-radius: 16px;
    background: var(--brand-gradient);
    color: white;
    font-weight: 600;
    font-size: 1.1rem;
    box-shadow: 0 8px 32px rgba(255, 255, 255, 0.81);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border: none;
    cursor: pointer;
    text-decoration: none;
  }

  .cta-button:hover {
    transform: translateY(-4px) scale(1.02);
    box-shadow: 0 16px 48px rgba(255, 255, 255, 0.82);
    color: white;
  }

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
  }

  .wave-layer:nth-child(1) { z-index: 3; }
  .wave-layer:nth-child(2) { z-index: 2; }
  .wave-layer:nth-child(3) { z-index: 1; }

  .wave-layer:nth-child(1) svg {
    animation: wave-slow 12s ease-in-out infinite;
  }

  .wave-layer:nth-child(2) svg {
    animation: wave-medium 8s ease-in-out infinite reverse;
    opacity: 0.7;
  }

  .wave-layer:nth-child(3) svg {
    animation: wave-fast 6s ease-in-out infinite;
    opacity: 0.5;
  }

  .wave-separator svg {
    width: 100%;
    height: 100%;
  }

  .wave-separator path {
    fill: var(--bg);
  }

  @keyframes wave-slow {
    0%, 100% { transform: translateX(0) translateY(0); }
    50% { transform: translateX(-25px) translateY(-8px); }
  }

  @keyframes wave-medium {
    0%, 100% { transform: translateX(0) translateY(0); }
    50% { transform: translateX(25px) translateY(-5px); }
  }

  @keyframes wave-fast {
    0%, 100% { transform: translateX(0) translateY(0); }
    50% { transform: translateX(-20px) translateY(-10px); }
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .intro-section {
    padding: 4rem 0;
  }

  .intro-card {
    background: var(--card);
    border-radius: 24px;
    padding: 3rem;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-light);
    margin-bottom: 3rem;
  }

  .intro-card h2 {
    margin-bottom: 1.5rem;
    text-align: center;
  }

  .intro-card p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: var(--text-light);
    text-align: justify;
    margin-bottom: 1.5rem;
  }

  .benefits-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, rgba(22, 163, 74, 0.02) 0%, rgba(74, 222, 128, 0.01) 100%);
  }

  .benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
  }

  .benefit-card {
    background: var(--card);
    border-radius: 20px;
    padding: 2.5rem;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-light);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
  }

  .benefit-card::before {
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

  .benefit-card:hover::before {
    transform: scaleX(1);
  }

  .benefit-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
  }

  .benefit-icon {
    width: 70px;
    height: 70px;
    border-radius: 16px;
    background: var(--brand-gradient);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    box-shadow: 0 8px 24px rgba(22, 163, 74, 0.2);
  }

  .benefit-card h3 {
    font-size: 1.4rem;
    color: var(--text);
    margin-bottom: 1rem;
  }

  .benefit-card p {
    color: var(--text-light);
    line-height: 1.7;
    margin: 0;
  }

  .features-section {
    padding: 4rem 0;
  }

  .feature-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-top: 3rem;
  }

  .feature-item {
    background: var(--card);
    border-radius: 16px;
    padding: 2rem;
    box-shadow: var(--shadow-sm);
    border-left: 4px solid var(--brand-1);
    transition: all 0.3s ease;
  }

  .feature-item:hover {
    transform: translateX(8px);
    box-shadow: var(--shadow-md);
  }

  .feature-item h4 {
    color: var(--brand-1);
    font-size: 1.2rem;
    margin-bottom: 0.75rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .feature-item p {
    color: var(--text-light);
    margin: 0;
    line-height: 1.6;
  }

  .cta-section {
    padding: 5rem 0;
    background: linear-gradient(135deg, #6cae4a 0%, #64C238 50%, #A3D08B 100%);
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .cta-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 50% 50%, rgba(255,255,255,0.1) 0%, transparent 70%);
    pointer-events: none;
  }

  .cta-section .container {
    position: relative;
    z-index: 2;
  }

  .cta-section h2 {
    color: white;
    font-size: clamp(2rem, 4vw, 3rem);
    margin-bottom: 1.5rem;
    background: none;
    -webkit-text-fill-color: white;
  }

  .cta-section p {
    color: rgba(255,255,255,0.95);
    font-size: 1.2rem;
    margin-bottom: 2rem;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
  }

  .cta-button-white {
    background: white;
    color: var(--brand-1);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
  }

  .cta-button-white:hover {
    background: var(--bg);
    color: var(--brand-1);
  }

  .fade-up {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.2, 0.9, 0.25, 1);
  }

  .fade-up.show {
    opacity: 1;
    transform: translateY(0);
  }

  .section-title {
    text-align: center;
    margin-bottom: 1rem;
  }

  .section-subtitle {
    text-align: center;
    color: var(--text-muted);
    font-size: 1.1rem;
    margin-bottom: 3rem;
  }

  @media (max-width: 768px) {
    .hero {
      padding: 80px 0 60px;
    }

    .intro-card, .benefit-card, .feature-item {
      padding: 2rem 1.5rem;
    }

    .wave-separator {
      height: 80px;
    }

    .benefits-grid, .feature-list {
      grid-template-columns: 1fr;
    }
  }
</style>

<!-- Hero -->
<section class="hero">
  <div class="container">
    <h1>Nube Privada Sostic</h1>
    <p>Infraestructura cloud segura, escalable y bajo tu control total</p>
    <a href="#contacto" class="cta-button">
      <i class="bi bi-cloud-check"></i>
      Solicitar Información
    </a>
  </div>
</section>

<div class="wave-separator">
    <div class="wave-layer">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,50 C150,80 350,0 600,50 C850,100 1050,50 1200,70 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
    <div class="wave-layer">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,70 C200,100 400,40 600,70 C800,100 1000,60 1200,80 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
    <div class="wave-layer">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,90 C250,60 450,90 600,80 C750,70 950,100 1200,85 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
</div>

<!-- Introducción -->
<section class="intro-section fade-up">
  <div class="container">
    <div class="intro-card">
      <h2>¿Qué es una Nube Privada?</h2>
      <p>
        Una nube privada es una infraestructura de computación en la nube dedicada exclusivamente a su organización. A diferencia de las nubes públicas, donde los recursos se comparten entre múltiples usuarios, una nube privada ofrece un entorno aislado y personalizado que garantiza el máximo control, seguridad y privacidad de sus datos críticos.
      </p>
      <p>
        En Sostic, diseñamos e implementamos soluciones de nube privada que combinan la flexibilidad y escalabilidad del cloud computing con el control y la seguridad de una infraestructura on-premise. Nuestra experiencia con tecnologías líderes como VMware, Nutanix y HPE nos permite crear ecosistemas cloud que se adaptan perfectamente a las necesidades específicas de su negocio.
      </p>
      <p>
        Ya sea que busque migrar aplicaciones críticas, consolidar su infraestructura existente o preparar su organización para la transformación digital, nuestra nube privada le proporciona la base tecnológica robusta y confiable que necesita para impulsar su crecimiento e innovación.
      </p>
    </div>
  </div>
</section>

<!-- Beneficios -->
<section class="benefits-section fade-up">
  <div class="container">
    <h2 class="section-title">Beneficios Clave</h2>
    <p class="section-subtitle">Descubre las ventajas de implementar tu propia nube privada</p>
    
    <div class="benefits-grid">
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="bi bi-shield-check" style="font-size:2rem;color:white"></i>
        </div>
        <h3>Seguridad Empresarial</h3>
        <p>Control total sobre tus datos con políticas de seguridad personalizadas. Cumplimiento garantizado con normativas como GDPR, HIPAA y estándares locales de protección de datos.</p>
      </div>

      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="bi bi-speedometer2" style="font-size:2rem;color:white"></i>
        </div>
        <h3>Alto Rendimiento</h3>
        <p>Recursos dedicados que garantizan velocidades óptimas y latencia mínima. Infraestructura optimizada para cargas de trabajo exigentes y aplicaciones de misión crítica.</p>
      </div>

      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="bi bi-graph-up-arrow" style="font-size:2rem;color:white"></i>
        </div>
        <h3>Escalabilidad Flexible</h3>
        <p>Crece según tus necesidades sin interrupciones. Añade recursos computacionales, almacenamiento o capacidad de red de forma dinámica cuando tu negocio lo requiera.</p>
      </div>

      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="bi bi-cash-coin" style="font-size:2rem;color:white"></i>
        </div>
        <h3>Costo Predecible</h3>
        <p>Inversión controlada sin sorpresas en la facturación. Optimización de recursos que reduce el TCO (Costo Total de Propiedad) comparado con infraestructura tradicional.</p>
      </div>

      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="bi bi-gear-wide-connected" style="font-size:2rem;color:white"></i>
        </div>
        <h3>Personalización Total</h3>
        <p>Adapta cada aspecto de tu infraestructura cloud. Desde configuraciones de red hasta políticas de respaldo, todo se ajusta a tus requerimientos específicos.</p>
      </div>

      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="bi bi-headset" style="font-size:2rem;color:white"></i>
        </div>
        <h3>Soporte Especializado</h3>
        <p>Equipo de expertos certificados disponible 24/7. Monitoreo proactivo, mantenimiento preventivo y respuesta inmediata ante cualquier incidencia.</p>
      </div>
    </div>
  </div>
</section>

<!-- Características -->
<section class="features-section fade-up">
  <div class="container">
    <h2 class="section-title">Características Técnicas</h2>
    <p class="section-subtitle">Tecnología de vanguardia al servicio de tu empresa</p>
    
    <div class="feature-list">
      <div class="feature-item">
        <h4><i class="bi bi-server"></i> Virtualización Avanzada</h4>
        <p>Hipervisores de última generación (VMware vSphere, Nutanix AHV) para máxima eficiencia en el uso de recursos.</p>
      </div>

      <div class="feature-item">
        <h4><i class="bi bi-database-lock"></i> Almacenamiento Redundante</h4>
        <p>Sistemas de almacenamiento con alta disponibilidad, respaldos automáticos y recuperación ante desastres.</p>
      </div>

      <div class="feature-item">
        <h4><i class="bi bi-diagram-3"></i> Redes Definidas por Software</h4>
        <p>SDN para conectividad flexible, segmentación de red y políticas de tráfico personalizables.</p>
      </div>

      <div class="feature-item">
        <h4><i class="bi bi-arrow-repeat"></i> Alta Disponibilidad</h4>
        <p>Arquitectura sin puntos únicos de fallo, balanceo de carga y failover automático para continuidad operativa.</p>
      </div>

      <div class="feature-item">
        <h4><i class="bi bi-activity"></i> Monitoreo en Tiempo Real</h4>
        <p>Dashboards intuitivos con métricas de rendimiento, alertas proactivas y análisis de tendencias.</p>
      </div>

      <div class="feature-item">
        <h4><i class="bi bi-lock"></i> Seguridad Multicapa</h4>
        <p>Firewalls, encriptación de datos, autenticación multifactor y controles de acceso basados en roles.</p>
      </div>

      <div class="feature-item">
        <h4><i class="bi bi-cloud-arrow-up"></i> Migración Sin Interrupciones</h4>
        <p>Herramientas avanzadas para migrar aplicaciones y datos desde infraestructura existente sin downtime.</p>
      </div>

      <div class="feature-item">
        <h4><i class="bi bi-code-slash"></i> API de Automatización</h4>
        <p>Interfaces REST API para integración con DevOps, orquestación y gestión automatizada de recursos.</p>
      </div>

      <div class="feature-item">
        <h4><i class="bi bi-clipboard-data"></i> Reportes y Compliance</h4>
        <p>Generación automática de informes de cumplimiento, auditorías de seguridad y análisis de uso de recursos.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Final -->
<section class="cta-section">
  <div class="container">
    <h2>¿Listo para transformar tu infraestructura?</h2>
    <p>Agenda una consulta gratuita con nuestros especialistas y descubre cómo una nube privada puede impulsar tu negocio.</p>
    <a href="#contacto" class="cta-button cta-button-white">
      <i class="bi bi-calendar-check"></i>
      Agendar Consulta
    </a>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
    document.querySelectorAll('.fade-up').forEach((el) => {
      observer.observe(el);
    });

    // Smooth scroll
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

</body>
</html>
<?php include 'whatsapp.php'; ?>
<?php include 'footer.php'; ?>
