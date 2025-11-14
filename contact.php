
<?php
// ============================
// Procesar formulario ANTES de cualquier salida
// ============================
$mensajeEnviado = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $conn = new mysqli("localhost", "root", "", "mi_panel");
    if ($conn->connect_error) die("Conexión fallida: " . $conn->connect_error);
    $conn->set_charset("utf8");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepared statement para seguridad
    $stmt = $conn->prepare("INSERT INTO texto (nombre, email, mensaje, fecha) VALUES (?,?,?,NOW())");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
        exit();
    } else {
        $conn->close();
        $error = "Error al enviar mensaje: " . $conn->error;
    }
}

// Verificar si se debe mostrar el mensaje
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $mensajeEnviado = true;
}
?>

<?php include 'header.php'; ?>

<head>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    /* =========================
       BASE Y TIPOGRAFÍA
       ========================= */
    body {
        font-family: 'Quicksand', Arial, sans-serif;
        color: #333;
        background: #f4f7f6;
        line-height: 1.6;
    }

    h2, h4 {
        font-weight: 600;
        color: #2e7d32; /* verde fuerte */
    }

    .contact-section {
        background: #ffffff;
        padding: 50px 30px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
    }

    /* =========================
       FORMULARIO CON ANIMACIONES
       ========================= */
    .contact-section form {
        background: #e8f5e9; /* verde muy claro */
        padding: 25px;
        border-radius: 10px;
        box-shadow: inset 0 2px 5px rgba(0,0,0,0.05);
        transition: transform 0.4s ease;
    }

    .contact-section form:hover {
        transform: translateY(-3px);
    }

    .contact-section .form-label {
        font-weight: 500;
        color: #2e7d32;
    }

    .contact-section .form-control {
        border: 1px solid #c8e6c9;
        border-radius: 8px;
        padding: 12px 15px;
        transition: all 0.3s ease, box-shadow 0.3s ease;
        background-color: #f1f8f1;
    }

    .contact-section .form-control:focus {
        border-color: #2e7d32;
        box-shadow: 0 0 12px rgba(46, 125, 50, 0.3);
        background-color: #ffffff;
        transform: scale(1.02);
    }

    .btn-custom {
        background: linear-gradient(90deg, #2e7d32, #66bb6a);
        color: #fff;
        font-weight: 600;
        padding: 14px;
        border-radius: 10px;
        transition: all 0.4s ease;
        border: none;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .btn-custom:hover {
        background: linear-gradient(90deg, #66bb6a, #2e7d32);
        transform: translateY(-3px) scale(1.03);
        box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    }

    /* =========================
       INFORMACIÓN DE CONTACTO
       ========================= */
    .contact-info h4 {
        margin-bottom: 20px;
        color: #2e7d32;
    }

    .contact-info p {
        font-size: 16px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .contact-info p i {
        color: #66bb6a;
        margin-right: 10px;
        font-size: 1.2rem;
    }

    .contact-info p:hover {
        transform: translateX(5px);
        color: #2e7d32;
    }

    .contact-info .ratio iframe {
        border-radius: 12px;
        border: 0;
        margin-top: 20px;
        transition: all 0.3s ease;
    }

    .contact-info .ratio iframe:hover {
        transform: scale(1.02);
    }

    /* =========================
       ALERTA ÉXITO VERDE
       ========================= */
    .alert-success {
        background-color: #a5d6a7; /* verde claro */
        border-color: #81c784;     
        color: #2e7d32;            
        font-weight: 500;
        border-radius: 8px;
        transition: opacity 0.5s ease;
    }

    /* =========================
       RESPONSIVE
       ========================= */
    @media (max-width: 767px) {
        .contact-section {
            padding: 30px 15px;
        }
        .contact-section form, .contact-info {
            margin-bottom: 30px;
        }
    }
  </style>
</head>

<section class="container my-5">
  <div class="contact-section">
    <h2 class="text-center mb-5">Contáctanos</h2>

    <!-- Mensaje de éxito -->
    <?php if ($mensajeEnviado): ?>
      <div id="alert-success" class="alert alert-success text-center mb-4" role="alert">
        ✅ Tu mensaje se envió correctamente.
      </div>
      <script>
        // Ocultar mensaje después de 2 segundos
        setTimeout(() => {
          const alert = document.getElementById('alert-success');
          if (alert) {
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
          }
        }, 2000);
      </script>
    <?php endif; ?>

    <div class="row g-5 align-items-center">
      <!-- Formulario -->
      <div class="col-md-6">
        <form method="POST" action="">
          <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control shadow-sm" id="name" name="name"
              value="<?php echo $_POST['name'] ?? ''; ?>" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo</label>
            <input type="email" class="form-control shadow-sm" id="email" name="email"
              value="<?php echo $_POST['email'] ?? ''; ?>" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Mensaje</label>
            <textarea class="form-control shadow-sm" id="message" name="message" rows="4" required><?php echo $_POST['message'] ?? ''; ?></textarea>
          </div>
          <button type="submit" class="btn btn-custom w-100">
            <i class="bi bi-send-fill"></i> Enviar
          </button>
        </form>
      </div>

      <!-- Información -->
      <div class="col-md-6 contact-info">
        <h4><i class="bi bi-info-circle-fill"></i> Información de Contacto</h4>
        <p><i class="bi bi-telephone-fill"></i> +52 4491747475</p>
        <p><i class="bi bi-envelope-fill"></i> contacto@misitio.com</p>
        <p><i class="bi bi-geo-alt-fill"></i> Peñuelas 101, La Huerta, 20250 Aguascalientes, Ags.</p>
        <div class="ratio ratio-16x9">
          <iframe src="https://www.google.com/maps/place/Sostic+S.A+de+C.V./@21.8761265,-102.2832279,1017m/data=!3m1!1e3!4m14!1m7!3m6!1s0x8429ee7461ec5e31:0x67cba976daac1acf!2sSostic+S.A+de+C.V.!8m2!3d21.8761265!4d-102.280653!16s%2Fg%2F11d_9gh0rk!3m5!1s0x8429ee7461ec5e31:0x67cba976daac1acf!8m2!3d21.8761265!4d-102.280653!16s%2Fg%2F11d_9gh0rk?entry=ttu&g_ep=EgoyMDI1MDkwNy4wIKXMDSoASAFQAw%3D%3D"
                  allowfullscreen loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'whatsapp.php'; ?>
<?php include 'footer.php'; ?>

