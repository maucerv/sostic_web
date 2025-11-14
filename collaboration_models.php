<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alianza VMware - Sostic</title>
  
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

    h1, h2, h3, h4 {
      font-family: 'Exo', sans-serif;
      font-weight: 800;
    }

    /* Hero Section */
    .hero-vmware {
      background: var(--brand-gradient);
      padding: 100px 0 80px;
      position: relative;
      overflow: hidden;
      text-align: center;
    }

    .hero-vmware::before {
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

    .hero-vmware .container {
      position: relative;
      z-index: 2;
    }

    .hero-vmware h1 {
      font-size: clamp(2rem, 5vw, 3.5rem);
      color: white;
      margin-bottom: 1.5rem;
      text-shadow: 0 4px 16px rgba(0,0,0,0.1);
      line-height: 1.2;
    }

    .hero-vmware p {
      font-size: clamp(1rem, 2vw, 1.2rem);
      color: rgba(255,255,255,0.95);
      max-width: 800px;
      margin: 1rem auto;
    }

    /* Wave Separator */
    .wave-separator-vmware {
      position: relative;
      width: 100%;
      height: 100px;
      margin-top: -1px;
      overflow: hidden;
      background: var(--bg);
    }

    .wave-separator-vmware svg {
      display: block;
      width: 100%;
      height: 100%;
    }

    .wave-separator-vmware path {
      fill: var(--bg);
    }

    /* Main Container */
    .vmware-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Section Styling */
    .section-vmware {
      padding: 80px 0;
      position: relative;
    }

    .section-vmware.bg-light {
      background: linear-gradient(135deg, rgba(22, 163, 74, 0.03) 0%, rgba(74, 222, 128, 0.02) 100%);
    }

    .section-title {
      font-size: clamp(2rem, 4vw, 2.75rem);
      text-align: center;
      margin-bottom: 3rem;
      background: var(--brand-gradient);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      position: relative;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: var(--brand-gradient);
      border-radius: 2px;
    }

    /* Objective Cards */
    .objective-card {
      background: var(--card);
      border-radius: 24px;
      padding: 2.5rem 2rem;
      box-shadow: var(--shadow-sm);
      border: 1px solid var(--border-light);
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .objective-card::before {
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

    .objective-card:hover::before {
      transform: scaleX(1);
    }

    .objective-card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: var(--shadow-lg);
    }

    .icon-box {
      width: 90px;
      height: 90px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.5rem;
      background: var(--brand-gradient);
      box-shadow: 0 8px 24px rgba(22, 163, 74, 0.3);
      transition: all 0.3s ease;
    }

    .objective-card:hover .icon-box {
      transform: rotate(5deg) scale(1.1);
    }

    .icon-box i {
      font-size: 2.5rem;
      color: white;
    }

    .objective-card h3 {
      font-size: 1.4rem;
      color: var(--text);
      margin-bottom: 1rem;
    }

    .objective-card p {
      font-size: 1.05rem;
      color: var(--text-light);
      line-height: 1.8;
      margin: 0;
    }

    /* Step List */
    .step-list {
      list-style: none;
      padding: 0;
      margin: 2rem 0;
    }

    .step-list li {
      padding: 1.2rem 1.5rem;
      margin-bottom: 1rem;
      background: var(--card);
      border-radius: 12px;
      border-left: 4px solid var(--brand-1);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      display: flex;
      align-items: center;
      gap: 15px;
      box-shadow: var(--shadow-sm);
      position: relative;
      overflow: hidden;
    }

    .step-list li::before {
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

    .step-list li:hover {
      transform: translateX(8px);
      box-shadow: var(--shadow-md);
      border-color: var(--brand-2);
    }

    .step-list li:hover::before {
      width: 100%;
    }

    .step-list li i {
      font-size: 1.5rem;
      color: var(--brand-1);
      min-width: 30px;
      flex-shrink: 0;
    }

    .step-list li span {
      font-size: 1.1rem;
      color: var(--text-light);
      position: relative;
      z-index: 1;
    }

    /* Benefit Cards Grid */
    .benefit-card {
      background: var(--card);
      border-radius: 18px;
      padding: 2rem;
      box-shadow: var(--shadow-sm);
      border: 1px solid var(--border-light);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      text-align: center;
      height: 100%;
    }

    .benefit-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-md);
    }

    .benefit-card h4 {
      font-size: 1.25rem;
      color: var(--brand-1);
      margin-bottom: 0.5rem;
    }

    .benefit-card p {
      color: var(--text-light);
      font-size: 1rem;
      margin: 0;
    }

    /* CTA Section */
    .cta-vmware {
      background: var(--brand-gradient);
      border-radius: 24px;
      padding: 4rem 2rem;
      text-align: center;
      box-shadow: var(--shadow-xl);
      position: relative;
      overflow: hidden;
      margin: 60px 0;
    }

    .cta-vmware::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: 
        radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 50%, rgba(255,255,255,0.05) 0%, transparent 50%);
      pointer-events: none;
    }

    .cta-vmware .container {
      position: relative;
      z-index: 2;
    }

    .cta-vmware h2 {
      color: white;
      background: none;
      -webkit-text-fill-color: white;
      margin-bottom: 1rem;
    }

    .cta-vmware p {
      color: rgba(255,255,255,0.95);
      font-size: 1.2rem;
      margin-bottom: 2rem;
    }

    .cta-vmware::after {
      display: none;
    }

    .btn-cta {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 16px 40px;
      border-radius: 50px;
      background: #facc15;
      color: #1a1a1a;
      font-weight: 700;
      font-size: 1.1rem;
      text-decoration: none;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      border: none;
      cursor: pointer;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    .btn-cta:hover {
      background: #eab308;
      transform: translateY(-3px);
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.3);
      color: #1a1a1a;
      text-decoration: none;
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
      .hero-vmware {
        padding: 60px 0 40px;
      }

      .section-vmware {
        padding: 40px 0;
      }

      .vmware-container {
        padding: 0 16px;
      }

      .icon-box {
        width: 75px;
        height: 75px;
      }

      .icon-box i {
        font-size: 2rem;
      }

      .objective-card {
        padding: 2rem;
      }

      .cta-vmware {
        padding: 2.5rem 1.5rem;
        margin: 40px 0;
      }

      .wave-separator-vmware {
        height: 60px;
      }
    }

    @media (max-width: 480px) {
      .hero-vmware h1 {
        font-size: 1.75rem;
      }

      .objective-card {
        padding: 1.5rem 1rem;
      }

      .benefit-card {
        padding: 1.5rem;
      }

      .btn-cta {
        padding: 12px 32px;
        font-size: 1rem;
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
</head>
<body>

<!-- Hero Section -->
<section class="hero-vmware">
  <div class="container">
    <h1 class="fade-in-up">Un modelo seguro y transparente para seguir ofreciendo VMware</h1>
    <p class="fade-in-up">¿Tu canal ya no está autorizado para transaccionar licencias VMware?</p>
    <p class="fade-in-up">En <strong>SOSTIC</strong> hemos creado un esquema que te permitirá continuar brindando estas soluciones a tus clientes sin perder la relación ni la confianza.</p>
  </div>
</section>

<!-- Wave Separator -->
<div class="wave-separator-vmware">
  <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
    <path d="M0,50 C150,80 350,0 600,50 C850,100 1050,50 1200,70 L1200,120 L0,120 Z"></path>
  </svg>
</div>

<!-- Objectives Section -->
<section class="section-vmware">
  <div class="vmware-container">
    <h2 class="section-title fade-in-up">Nuestros Objetivos</h2>
    <div class="row g-4 mt-4 justify-content-center">
      <div class="col-lg-4 col-md-6 fade-in-up">
        <div class="objective-card">
          <div class="icon-box">
            <i class="bi bi-lightbulb"></i>
          </div>
          <h3>Continuidad</h3>
          <p>Ayudar a los canales no autorizados a seguir ofreciendo licencias VMware.</p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 fade-in-up">
        <div class="objective-card">
          <div class="icon-box">
            <i class="bi bi-arrow-repeat"></i>
          </div>
          <h3>Relación Intacta</h3>
          <p>Mantener intacta tu relación con los clientes.</p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 fade-in-up">
        <div class="objective-card">
          <div class="icon-box">
            <i class="bi bi-graph-up"></i>
          </div>
          <h3>Crecimiento Mutuo</h3>
          <p>Crear un esquema de colaboración transparente donde ambos ganamos.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Collaboration Model Section -->
<section class="section-vmware bg-light">
  <div class="vmware-container">
    <h2 class="section-title fade-in-up">Nuestro modelo de colaboración</h2>
    <div class="row justify-content-center mt-5">
      <div class="col-lg-8">
        <ul class="step-list fade-in-up">
          <li>
            <i class="bi bi-shield-check"></i>
            <span><strong>Acuerdo de confidencialidad</strong> que garantiza seguridad y confianza.</span>
          </li>
          <li>
            <i class="bi bi-check-circle"></i>
            <span><strong>SOSTIC</strong> actúa como canal autorizado para transaccionar licencias VMware.</span>
          </li>
          <li>
            <i class="bi bi-cash-coin"></i>
            <span>Obtienes un <strong>margen de ganancia superior</strong>.</span>
          </li>
          <li>
            <i class="bi bi-people"></i>
            <span>Mantienes la <strong>relación con tu cliente</strong>.</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Process Section -->
<section class="section-vmware vmware-container">
  <h2 class="section-title fade-in-up">El proceso paso a paso</h2>
  <div class="row justify-content-center mt-5">
    <div class="col-lg-8">
      <ul class="step-list fade-in-up">
        <li>
          <i class="bi bi-search"></i>
          <span>Identificación de clientes que necesitan renovar licencias.</span>
        </li>
        <li>
          <i class="bi bi-arrow-repeat"></i>
          <span>SOSTIC procesa la transacción como canal autorizado.</span>
        </li>
        <li>
          <i class="bi bi-wallet2"></i>
          <span>Tú recibes tu margen de ganancia.</span>
        </li>
        <li>
          <i class="bi bi-file-check"></i>
          <span>Ambas partes mantienen registro y control de las transacciones.</span>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Benefits Section -->
<section class="section-vmware bg-light">
  <div class="vmware-container">
    <h2 class="section-title fade-in-up">Beneficios clave</h2>
    <div class="row g-4 mt-5 justify-content-center">
      <div class="col-lg-4 col-md-6 fade-in-up">
        <div class="benefit-card">
          <h4><i class="bi bi-arrow-up-right"></i> Escalabilidad</h4>
          <p>Crecimiento conjunto de nuestros negocios.</p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 fade-in-up">
        <div class="benefit-card">
          <h4><i class="bi bi-shield-lock"></i> Seguridad</h4>
          <p>Confianza y certeza garantizada.</p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 fade-in-up">
        <div class="benefit-card">
          <h4><i class="bi bi-coin"></i> Margen Superior</h4>
          <p>Ganancia optimizada en cada transacción.</p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 fade-in-up">
        <div class="benefit-card">
          <h4><i class="bi bi-person-check"></i> Clientes Felices</h4>
          <p>Relación intacta con tus clientes.</p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 fade-in-up">
        <div class="benefit-card">
          <h4><i class="bi bi-trending-up"></i> Continuidad</h4>
          <p>Negocio en crecimiento permanente.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="vmware-container fade-in-up">
  <div class="cta-vmware">
    <div class="container">
      <h2>¿Listo para comenzar?</h2>
      <p>Con este esquema, ambos ganamos y tu negocio sigue creciendo.</p>
      <a href="contact.php" class="btn-cta">
        <i class="bi bi-envelope"></i>
        Contáctanos
      </a>
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
    document.querySelectorAll('.fade-in-up').forEach((el) => {
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

</body>
</html>
<?php include 'whatsapp.php'; ?>
<?php include 'footer.php'; ?>