<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colegio San Luis Gonzaga | Admision</title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="admision.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <?php include('menu.php'); ?>

  <!-- HERO SOBRE NOSOTROS CORREGIDO -->
    <section class="hero-admision">
    <div class="hero-content">
        <div class="hero-bg">
        <h1>Proceso de Admision</h1>
        </div>
        <div class="hero-img">
        <img src="procesoadmision.png" alt="Estudiantes del nivel secundaria">
        </div>
    </div>
    </section>
    
<!-- ╔═════════════════════════════════════════╗
     ║              PASO 1 – FORM              ║
     ╚═════════════════════════════════════════╝ -->
<section class="paso paso-1">
  <div class="container">
    <h2>Paso 1: Leer el formulario de Matricula</h2>
    <p class="sub">
      Contactar a la oficina de Secretaria para solicitar su formulario para la Matricula Escolar:
    </p>
  </div>
</section>

<!-- ╔═════════════════════════════════════════╗
     ║      PASO 2 – DOCUMENTOS (ACORDEÓN)    ║
     ╚═════════════════════════════════════════╝ -->
<section class="paso paso-2">
  <div class="container">
    <h2>Paso 2: Presentar de Manera Física los Siguientes Documentos:</h2>

    <!-- Acordeón -->
    <div class="accordion">

      <!-- item 1 -->
      <article class="acc-item">
        <header class="acc-header">
          <h3>Alumnos Nuevos</h3>
          <button class="acc-toggle"><i class="fa-solid fa-plus"></i></button>
        </header>
        <div class="acc-body">
          <ul>
            <li>Partida de Nacimiento original y copia legalizada.</li>
            <li>Escanear el DNI del alumno y de los padres.</li>
            <li>Certificado de Estudios.</li>
            <li>Libreta de Notas.</li>
            <li>2 Fotos del estudiante tamaño carnet a color.</li>
            <li>Constancia de Matrícula del SIAGIE.</li>
            <li>Copia de las 3 últimas boletas de pago.</li>
            <li>Certificado de conducta del colegio de procedencia.</li>
            <li>Declaración jurada de tenencia del menor (padres separados).</li>
            <li>Si el apoderado no es el padre/madre biológica, autorización legalizada.</li>
          </ul>
        </div>
      </article>

      <!-- item 2 -->
      <article class="acc-item">
        <header class="acc-header">
          <h3>Traslados</h3>
          <button class="acc-toggle"><i class="fa-solid fa-plus"></i></button>
        </header>
        <div class="acc-body">
          <ul>
            <li>Ficha única de matrícula con código del educando.</li>
            <li>Código Modular del colegio de procedencia y Resolución Directoral.</li>
            <li>Desde 2.º grado, Certificados de Estudio y Conducta.</li>
            <li>Copia del DNI del alumno.</li>
            <li>Declaraciones juradas de socio y padre/madre.</li>
          </ul>
          <p class="nota rojo">
            * Recepción de documentos: Lunes a viernes de 08:00 a.m. a 03:30- p.m.
          </p>
        </div>
      </article>

    </div><!-- /accordion -->
  </div>
</section>

<!-- ╔═════════════════════════════════════════╗
     ║      PASO 3 & PASO 4 (textos simples)  ║
     ╚═════════════════════════════════════════╝ -->
<section class="paso paso-3-4">
  <div class="container">
    <h2>Paso 3: Entrevista con los Padres de Familia</h2>
    <p class="sub">
      Se realizará con ambos padres de familia vía Zoom previa coordinación con el área de admisiones.
    </p>

    <h2>Paso 4: Entrega de la documentación</h2>
    <p class="sub">
      Posterior a la entrega de documentación, se reserva la vacante.
    </p>
  </div>
</section>

<!-- ╔═════════════════════════════════════════╗
     ║        BLOQUE FINAL + FORMULARIO       ║
     ╚═════════════════════════════════════════╝ -->
<section class="cta-form">
  <div class="container cta-grid">

    <!-- 3 iconos -->
    <div class="cta-steps">
      <h2>Inicia el proceso de admisión</h2>

      <div class="step">
        <img src="img/icon-form.svg" alt="">
        <h4>Reunión con admisión</h4>
        <p>Completa el formulario para agendar una cita y contestar todas tus preguntas.</p>
      </div>

      <div class="step">
        <img src="img/icon-docs.svg" alt="">
        <h4>Entrega de documentos</h4>
        <p>Recibirás una lista de documentos que deberás presentar en el proceso.</p>
      </div>

      <div class="step">
        <img src="img/icon-vacante.svg" alt="">
        <h4>Reserva de vacante</h4>
        <p>Se confirma la vacante para el grado y año al que postula el alumno.</p>
      </div>
    </div>

    <!-- formulario (maqueta) -->
    <form action="#" method="post" class="form-box">
      <label>Nombres y Apellidos *</label>
      <input type="text" required>

      <label>Teléfono *</label>
      <input type="tel" required>

      <label>Dirección de correo electrónico *</label>
      <input type="email" required>

      <label class="check">
        <input type="checkbox" required> Acepto las políticas de privacidad *
      </label>

      <button type="submit">Enviar mensaje</button>
    </form>

  </div>
</section>

<!-- scripts -->
<script src="menu.js"></script>
<script src="js/accordion.js"></script>
<script>
  document.querySelectorAll('.acc-toggle').forEach(button => {
    button.addEventListener('click', () => {
      const accItem = button.closest('.acc-item');
      const accBody = accItem.querySelector('.acc-body');
      const icon = button.querySelector('i');

      // Alternar clase active para mostrar/ocultar el contenido
      accBody.classList.toggle('active');

      // Cambiar icono + a - y viceversa
      if (accBody.classList.contains('active')) {
        icon.classList.remove('fa-plus');
        icon.classList.add('fa-minus');
      } else {
        icon.classList.remove('fa-minus');
        icon.classList.add('fa-plus');
      }
    });
  });
</script>
</body>
</html>