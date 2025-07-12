<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Colegio San Luis Gonzaga</title>

    <!-- Hoja de estilos principal -->
    <link rel="stylesheet" href="home.css" />

    <!-- Font Awesome 6 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
</head>
<body>

<!-- ============ HEADER ============ -->
<header class="header">
  <!-- Top-bar de contacto -->
  <div class="top-bar">
    <div class="container">
      <div class="contact-item">
        <a href="https://api.whatsapp.com/send?phone=51961272372&text=Hola%2C%20quiero%20m%C3%A1s%20informaci%C3%B3n%20por%20favor" target="_blank" style="color: #fff;">
          <i class="fab fa-whatsapp" style="color: #fff;"></i> WhatsApp
        </a>
      </div>
      <div class="contact-item">
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=miguelvmoron29@gmail.com" target="_blank" style="color: #fff;">
          <i class="fas fa-envelope" style="color: #fff;"></i> miguelvmoron29@gmail.com
        </a>
      </div>
      <div class="contact-item">
        <a href="proyecto/login.php" style="color: #fff;">
          <i class="fas fa-globe" style="color: #fff;"></i> SIEWEB
        </a>
      </div>
      <div class="contact-item ubicacion">
        <a href="https://www.google.com/maps/place/Instituci%C3%B3n+Educativa+San+Luis+Gonzaga/@-14.0653034,-75.7351939,602m/data=!3m1!1e3" target="_blank" style="color: #fff;">
          <i class="fas fa-map-marker-alt" style="color: #fff;"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="container">
      <div class="logo-centered">
        <img src="img.png" alt="Colegio Nacional 'San Luis Gonzaga'" />
        <span>- 279 años -</span>
      </div>

      <!-- Hamburguesa -->
      <div class="hamburger" id="hamburger-menu" aria-label="Abrir menú" tabindex="0">
        <span></span><span></span><span></span>
      </div>

      <!-- Enlaces -->
      <ul class="nav-links" id="nav-links">
        <li><a href="sobre-nosotros.php">Sobre Nosotros</a></li>
        <li class="dropdown">
          <a href="sobre-nosotros.php">Niveles <i class="fas fa-caret-down"></i></a>
          <div class="dropdown-content">
            <a href="nivel_secundaria.php">Nivel Secundaria</a>
          </div>
        </li>
        <li class="dropdown">
          <a href="sobre-nosotros">Admisión <i class="fas fa-caret-down"></i></a>
          <div class="dropdown-content">
            <a href="admision.php">Proceso de Admision</a>
          </div>
        </li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Galería</a></li>
        <li class="social-icons">
          <a href="https://www.facebook.com/iesanluisgonzagadeica" class="facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/@sanluisano1" class="youtube"><i class="fab fa-youtube"></i></a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Carrusel -->
  <div class="hero-image carousel">
    <img src="escoltaieslg.png" alt="Imagen 1" class="active" />
    <img src="bandaslg.png"   alt="Imagen 2" />
    <img src="atras.png"      alt="Imagen 3" />
  </div>
</header>

<!-- ============ WHY CHOOSE US ============ -->
<section class="why-choose-us">
  <div class="container">
    <h2>¿Por qué elegir al Colegio San Luis Gonzaga?</h2>
    <div class="reasons-grid">
      <div class="reason-item">
        <img src="medalla.png" alt="279 years" />
        <p>279 años al servicio de la educación</p>
      </div>
      <div class="reason-item">
        <img src="pergamino.png" alt="Humanist model icon" />
        <p>Modelo de enseñanza humanista</p>
      </div>
      <div class="reason-item">
        <img src="birrete.png" alt="Social responsibility icon" />
        <p>Cultura de equipo y responsabilidad social</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ COMPLEMENTARY SERVICES ============ -->
<section class="complementary-services">
  <div class="container">
    <div class="services-content">
      <h2>SERVICIOS COMPLEMENTARIOS</h2>

      <div class="service-item">
        <img src="basquet.png" alt="Football icon" />
        <div class="service-text">
          <h3>Talleres de Fútbol, Básquet y Vóley</h3>
          <p>Los estudiantes podrán dominar mejor el deporte, disfrutar del juego en equipo, participar en torneos y aumentar su capacidad física.</p>
        </div>
      </div>

      <div class="service-item">
        <img src="reforzamiento.png" alt="Reinforcement classes icon" />
        <div class="service-text">
          <h3>Clases de Reforzamiento</h3>
          <p>Son esenciales para potenciar la metodología de estudio, trabajar la memoria y comprender de manera efectiva la solución a distintos problemas.</p>
        </div>
      </div>

      <div class="service-item">
        <img src="debate.png" alt="Debate workshops icon" />
        <div class="service-text">
          <h3>Talleres de Debate</h3>
          <p>El estudiante aprenderá a rebatir y defender su postura frente a otros participantes, descubriendo que a través de argumentos válidos puede convencer o influir en los demás.</p>
        </div>
      </div>

      <button class="admission-process-button">CONOCE EL PROCESO DE ADMISIÓN</button>
    </div>

    <div class="services-image">
      <img src="brasilslg.png" alt="Playground" />
    </div>
  </div>
</section>

<!-- ============ MÉTRICAS ============ -->
<section class="stats-section">
  <!-- Capa morada -->
  <div class="stats-overlay"></div>

  <div class="stats-wrapper">
    <div class="stat-item">
    <div class="icon-circle">
        <i class="fas fa-award"></i>
    </div>
    <h3 class="stat-title">Años de<br>Experiencia</h3>
    <p class="stat-value"><span class="counter" data-target="278">0</span></p>
    </div>

    <div class="stat-item">
    <div class="icon-circle">
        <i class="fas fa-users"></i>
    </div>
    <h3 class="stat-title">Cantidad de<br>Estudiantes</h3>
    <p class="stat-value"><span class="counter" data-target="2700" data-suffix="+">0</span></p>
    </div>

    <div class="stat-item">
    <div class="icon-circle">
        <i class="fas fa-chalkboard-teacher"></i>
    </div>
    <h3 class="stat-title">Cantidad de<br>Docentes</h3>
    <p class="stat-value"><span class="counter" data-target="200" data-suffix="+">0</span></p>
    </div>

    <div class="stat-item">
    <div class="icon-circle">
        <i class="fas fa-ruler-combined"></i>
    </div>
    <h3 class="stat-title">Cantidad de&nbsp;Aulas</h3>
    <p class="stat-value"><span class="counter" data-target="50" data-suffix="+">0</span></p>
    </div>
  </div>
</section>

<!-- ============ PREFERENCIAS ============ -->
<section class="student-preferences">
  <div class="container">
    <h2>Preferencias de nuestros alumnos</h2>
    <div class="university-logos">
      <img src="logo-san-juan.png"   alt="SJB Logo" />
      <img src="logo-san-luis.png"   alt="SLG Logo" />
      <img src="UTP-Logo.png"        alt="UTP Logo" />
      <img src="CONTINENTAL.png"     alt="Universidad Continental" />
    </div>
  </div>
</section>

<!-- ============ FOOTER ============ -->
<footer class="footer">
  <div class="container">
    <div class="footer-left">
      <img src="img.png" alt="San Luis G Logo Footer" />
      <p>Ofrecemos un modelo de enseñanza humanista que prioriza la formación integral de la persona y el desarrollo de su capacidad crítica y de libre expresión, en un clima de calidez y confianza.</p>
    </div>

    <div class="footer-middle">
      <h3>Enlaces de Interés</h3>
      <ul>
        <li><a href="#">Sobre Nosotros</a></li>
        <li><a href="#">Niveles</a></li>
        <li><a href="#">Admisión</a></li>
        <li><a href="#">Área</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Galería</a></li>
      </ul>
    </div>

    <div class="footer-right">
      <h3>Contáctenos</h3>
      <a href="https://api.whatsapp.com/send?phone=51961272372&text=Hola%2C%20quiero%20más%20información%20por%20favor" target="_blank">
        <i class="fab fa-whatsapp"></i> Escríbeme por WhatsApp
      </a>
      <a href="mailto:secretariaieslg@gmail.com">
        <i class="fas fa-envelope"></i> secretariaieslg@gmail.com
      </a>
      <p>
        <i class="fas fa-map-marker-alt"></i>
        <a href="https://www.google.com/maps/place/Instituci%C3%B3n+Educativa+San+Luis+Gonzaga" target="_blank">
          AV. José Matías Manzanilla N° 187&nbsp;056&nbsp;Ica, Perú
        </a>
      </p>
      <div class="social-media-footer">
        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>

  <!-- Botón flotante de WhatsApp -->
  <a href="https://api.whatsapp.com/send?phone=51961272372&text=Hola%2C%20quiero%20más%20información%20por%20favor" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>
</footer>

<!-- ============ SCRIPTS ============ -->
<script>
  // Carrusel
  let current = 0;
  const images = document.querySelectorAll('.carousel img');
  setInterval(() => {
    images[current].classList.remove('active');
    current = (current + 1) % images.length;
    images[current].classList.add('active');
  }, 3000);

  // Menú hamburguesa
  const hamburger = document.getElementById('hamburger-menu');
  const navLinks = document.getElementById('nav-links');
  hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('open');
  });
  hamburger.addEventListener('blur', () => {
    setTimeout(() => navLinks.classList.remove('open'), 200);
  });
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const counters = document.querySelectorAll('.counter');
  const speed = 50;
  let triggered = false;

  const animate = (el) => {
    const target = +el.dataset.target;
    const suffix = el.dataset.suffix || '';
    const step = Math.ceil(target / 100);

    let curr = 0;
    const tick = () => {
      curr += step;
      if (curr >= target) {
        el.textContent = target.toLocaleString('es-PE') + suffix;
      } else {
        el.textContent = curr.toLocaleString('es-PE');
        requestAnimationFrame(tick);
      }
    };
    tick();
  };

  const statsSection = document.querySelector('.stats-section');

  const obs = new IntersectionObserver(entries => {
    if (!triggered && entries[0].isIntersecting) {
      counters.forEach(animate);
      triggered = true;
      obs.disconnect();
    }
  }, { threshold: 0.3 });

  if (statsSection) obs.observe(statsSection);
});
</script>
</body>
</html>