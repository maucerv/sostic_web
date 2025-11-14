<style>
    .footer {
      background: linear-gradient(135deg, #0a0a0a, #111827, #0a0a0a);
      color: #fff;
      padding: 70px 20px 30px;
      position: relative;
      overflow: hidden;
      text-align: center;
    }

    /* Logo / Marca */
    .footer h3 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 10px;
      color: #fff;
      letter-spacing: 1px;
    }

    .footer p {
      font-size: 16px;
      opacity: 0.85;
      margin-bottom: 25px;
    }

    /* Líneas decorativas */
    .footer::before {
      content: "";
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 90%;
      height: 2px;
      background: linear-gradient(90deg, transparent, #0d6efd, transparent);
    }

    /* Redes sociales */
    .social-icons {
      display: flex;
      justify-content: center;
      gap: 18px;
      margin-bottom: 30px;
    }

    .social-icons a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 55px;
      height: 55px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.08);
      color: #fff;
      font-size: 20px;
      transition: all 0.3s ease;
    }

    .social-icons a:hover {
      transform: translateY(-6px) scale(1.1);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .social-icons a[href*="instagram.com"]:hover {
      background: #E1306C;
    }

    .social-icons a[href*="linkedin.com"]:hover {
      background: #0A66C2;
    }

    .social-icons a[href*="facebook.com"]:hover {
      background: #1877F2;
    }

    /* Franja inferior */
    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.15);
      padding-top: 15px;
      font-size: 14px;
      opacity: 0.75;
    }
  </style>
  <footer class="footer">
    <div class="container">

      <!-- Marca y eslogan -->
      <h3>Sostic</h3>
      <p>Innovación y compromiso en cada solución tecnológica.</p>

      <!-- Redes sociales -->
      <div class="social-icons">
        <a href="https://www.instagram.com/sostic_oficial/" target="_blank" aria-label="Instagram">
          <svg width="24" viewBox="0 0 24 24" fill="currentColor">
            <path clip-rule="evenodd" fill-rule="evenodd"
              d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"/>
          </svg>
        </a>
        <a href="https://mx.linkedin.com/company/sostic" target="_blank" aria-label="LinkedIn">
          <svg width="24" viewBox="0 0 24 24" fill="currentColor">
            <circle cx="4.983" cy="5.009" r="2.188"></circle>
            <path
              d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"/>
          </svg>
        </a>
        <a href="https://www.facebook.com/sosticoficial/?locale=es_LA" target="_blank" aria-label="Facebook">
          <svg width="24" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.407.595 24 1.325 24h11.495V14.708h-3.13v-3.622h3.13V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.464.099 2.796.143v3.24l-1.92.001c-1.505 0-1.796.716-1.796 1.764v2.312h3.587l-.467 3.622h-3.12V24h6.116C23.405 24 24 23.407 24 22.674V1.326C24 .592 23.405 0 22.675 0z"/>
          </svg>
        </a>
      </div>

      <!-- Copyright -->
      <div class="footer-bottom">
        <p>© 2025 Sostic. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>
