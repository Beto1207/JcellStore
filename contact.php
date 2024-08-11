<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Basic Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Jcell Store</title>
  <link rel="icon" href="images/titulo.png" type="image/x-icon">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- Header Section -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/titulo.png" class="img-fluid" alt="Responsive image">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buy.php">Sobre nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php">Servicios</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php">Contáctanos</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- End Header Section -->
  </div>

  <img src="images/flayer3.jpg" class="img-fluid" alt="Flayer de Jcell Store">

  <!-- Map Section -->
  <section class="map_section">


  <div class="form_container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="col-md-8 col-sm-10">
    <form action="registrar.php" method="post" aria-labelledby="contactForm" class="p-4 border rounded shadow" onsubmit="setDateTime()">
      <div class="text-center mb-4">
        <h3 id="contactForm" class="font-weight-bold">Agenda una cita</h3>
      </div>
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
          <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono:</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-phone"></i></span>
          <input type="text" id="telefono" name="telefono" class="form-control" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label">Correo:</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          <input type="email" id="correo" name="correo" class="form-control" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="problema" class="form-label">Problema:</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-exclamation-circle"></i></span>
          <textarea id="problema" name="problema" class="form-control" rows="4" required></textarea>
        </div>
      </div>
      
      <!-- Campo oculto para la fecha y hora -->
      <input type="hidden" id="fecha_hora" name="fecha_hora">
      
      <!-- Seleccionar fecha y hora de la cita -->
      <div class="mb-3">
        <label for="fecha" class="form-label">Fecha:</label>
        <input type="date" id="fecha" name="fecha" class="form-control" required>
      </div>
      
      <div class="mb-3">
        <label for="hora" class="form-label">Hora:</label>
        <select id="hora" name="hora" class="form-control" required>
          <option value="">Seleccionar hora</option>
          <?php
            $start_time = strtotime("09:00");
            $end_time = strtotime("20:00");
            $interval = 900; // 15 minutos en segundos
            
            while ($start_time <= $end_time) {
              $time = date("H:i", $start_time);
              echo "<option value='$time'>$time</option>";
              $start_time += $interval;
            }
          ?>
        </select>
      </div>
      
      <div class="d-flex justify-content-center">
        <button type="submit" name="registro" value="Registrar" class="btn btn-primary">ENVIAR SOLICITUD</button>
      </div>
    </form>
</div>
</div>

<script>
  function setDateTime() {
    const now = new Date();
    const formattedDate = now.toISOString(); // Formato ISO 8601
    document.getElementById('fecha_hora').value = formattedDate;
  }
</script>
</div>


    <h2 class="custom_heading">NOS <span>ENCONTRAMOS EN:</span></h2>
    <br>
    <div class="map-responsive">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3583.2916492964464!2d-98.28158492363173!3d26.08939667714756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866508ccfcbecbdd%3A0x1dc294a60c0e2d0f!2sC.%20Hidalgo%20435%2C%20Zona%20de%20Tolerancia%2C%2088500%20Reynosa%2C%20Tamps.!5e0!3m2!1ses-419!2smx!4v1722737918257!5m2!1ses-419!2smx" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>
  <!-- End Map Section -->

  <!-- Info Section -->
  <section class="info_section layout_padding2">
      <div class="container">
        <div class="info_items">
          <a href="">
            <div class="item">
              <div class="img-box box-1">
                <img alt="">
              </div>
              <div class="detail-box">
                <p>Calle Hidalgo #435 Zona Centro Reynosa, México</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="item">
              <div class="img-box box-2">
                <img src="" alt="">
              </div>
              <div href="https://api.whatsapp.com/send?phone=528997778683" class="detail-box">
                <p>+52 899-777-8683</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="item">
              <div class="img-box box-3">
                <img src="" alt="">
              </div>
              <div class="detail-box">
                <p>jonnymaldonado10a@gmail.com</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>
  <!-- End Info Section -->

  <!-- Footer Section -->
  <footer class="container-fluid footer_section">
    <p>&copy; 2024 Todos los derechos reservados a JCELL STORE</p>
  </footer>
  <!-- End Footer Section -->

  <!-- JavaScript Files -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <!-- Accessibility Menu -->
  <div class="accessibility-menu">
    <button class="accessibility-toggle" aria-label="Menú de accesibilidad">
      <i class="fas fa-universal-access"></i>
    </button>
    <div class="accessibility-dropdown">
      <button id="increase-font" aria-label="Aumentar tamaño de fuente">
        <i class="fas fa-plus"></i> Aumentar
      </button>
      <button id="decrease-font" aria-label="Disminuir tamaño de fuente">
        <i class="fas fa-minus"></i> Disminuir
      </button>
      <button id="reset-font" aria-label="Restablecer tamaño de fuente">
        <i class="fas fa-undo"></i> Restablecer
      </button>
      <button id="high-contrast" aria-label="Activar alto contraste">
        <i class="fas fa-adjust"></i> Alto Contraste
      </button>
    </div>
  </div>
</body>

</html>