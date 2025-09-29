<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Evolution IT</title>
  <link href="style.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <style>
    /* Custom styles for docentes grid */
    .docentes-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 1.5rem;
    }
    .docente-card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
      padding: 1rem;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: default;
    }
    .docente-card:hover {
      transform: translateY(-6px) scale(1.03);
      box-shadow:
        0 12px 24px rgb(0 0 0 / 0.15),
        0 4px 12px rgb(0 0 0 / 0.1);
    }
    .docente-photo {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 0.8rem;
      border: 3px solid #588BAE;
      background-color: #A2D5F2;
    }
    .docente-name {
      font-weight: 700;
      color: #1B3A4B;
      font-size: 1.1rem;
      margin-bottom: 0.2rem;
    }
    .docente-subject {
      font-weight: 600;
      color: #417899;
      font-size: 0.95rem;
    }
    .ver-todo-btn {
      display: block;
      max-width: 220px;
      margin: 2rem auto 0;
      font-weight: 700;
      background-color: #588BAE;
      color: white;
      border-radius: 9999px;
      padding: 0.5rem 1.5rem;
      text-align: center;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }
    .ver-todo-btn:hover {
      background-color: #417899;
      color: white;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <header>
    <div class="HeaderIzq">
      <h1>InfraLex</h1>
      <h6>Instituto Tecnológico Superior de Paysandú</h6>
    </div>
    <div class="header-right">
      <a href="INDEX.PHP">
        <img src="imagenes/logopoyecto.png" alt="Logo" class="logo" />
      </a>
    </div>
  </header>
  <nav>
    <a href="masinfo.php">Más información</a>
    <a href="funcionarios.php">Nuestro equipo</a>
    <a href="registro.php">Ingresar</a>
  </nav>

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="imagenes/frenteitsp.jpg" class="d-block w-100" alt="Fachada del Instituto Tecnológico Superior de Paysandú con cielo azul y árboles" />
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="imagenes/masinfo3.jpg" class="d-block w-100" alt="Imagen decorativa del Instituto Tecnológico, vista interior moderna" />
      </div>
      <div class="carousel-item">
        <img src="imagenes/biblioteca.jpeg" class="d-block w-100" alt="Interior de biblioteca moderna con estanterías llenas de libros y mesas de estudio" />
      </div>
      <div class="carousel-item">
        <img src="imagenes/masinfo5.webp" class="d-block w-100" alt="Pasillo amplio y luminoso del primer piso del Instituto Tecnológico" />
      </div>
      <div class="carousel-item">
        <img src="imagenes/salondeactos.jpeg" class="d-block w-100" alt="Salón de actos amplio con escenario y sillas ordenadas" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <main class="container my-5">
    <div class="row">
      <div class="col-md-5 mb-4">
        <h2 class="text-center mb-3">¿Dónde estamos?</h2>
        <p class="text-center">📍Instituto Tecnológico Superior, Paysandú, Uruguay</p>
        <div class="ratio ratio-4x3">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3371.724859342374!2d-58.086378025346406!3d-32.31924484047528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95afcbfdd7fbb8eb%3A0xa8125d5f102fc8e4!2sITS%20Paysandu%20UTU!5e0!3m2!1ses!2suy!4v1753101421536!5m2!1ses!2suy"
            width="100%"
            height="250"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Mapa de ubicación del Instituto Tecnológico Superior de Paysandú"
          ></iframe>
        </div>
      </div>

      <div class="col-md-7">
        <div class="p-3 mb-4 border rounded shadow-sm bg-light">
          <h4 class="text-center mb-3">¿Qué ofrecemos?</h4>
          <ul class="list-unstyled">
            <li class="mb-2">🎓 Carreras técnicas actualizadas y con alta salida laboral.</li>
            <li class="mb-2">🧑‍🏫 Docentes capacitados y cercanos al estudiante.</li>
            <li class="mb-2">🧪 Laboratorios modernos y equipados.</li>
            <li class="mb-2">💼 Apoyo a la inserción laboral y pasantías.</li>
            <li class="mb-2">🕐 Horarios flexibles: mañana, tarde y noche.</li>
          </ul>
        </div>

        <div class="p-3 border rounded shadow-sm bg-white">
          <h4 class="text-center mb-3">Carreras Técnicas</h4>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Carrera</th>
                <th>Duración</th>
                <th>Turno</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Bachillerato en Tecnologías de la Información Bilingüe</td>
                <td>3 años</td>
                <td>Matutino</td>
              </tr>
              <tr>
                <td>Bachillerato en Tecnologías de la Información</td>
                <td>3 años</td>
                <td>Matutino/Vespertino</td>
              </tr>
              <tr>
                <td>Curso técnico terciario de Diseño Gráfico</td>
                <td>3 años</td>
                <td>Vespertino</td>
              </tr>
              <tr>
                <td>Secretariado Bilungüe</td>
                <td>2 años</td>
                <td>Nocturno</td>
              </tr>
              <tr>
                <td>Finest</td>
                <td>2 años</td>
                <td>Nocturno</td>
              </tr>
              <tr>
                <td>Tecnicatura en Diseño</td>
                <td>2 años</td>
                <td>Nocturno</td>
              </tr>
              <tr>
                <td>Tecnicatura en Ciberseguridad</td>
                <td>2 años</td>
                <td>Nocturno</td>
              </tr>
              <tr>
                <td>Redes</td>
                <td>1 año</td>
                <td>Nocturno</td>
              </tr>
            </tbody>
          </table>
        </div>

        <section class="mt-5">
          <h4 class="text-center mb-4">Conoce a algunos de nuestros docentes</h4>
          <div class="docentes-grid">
            <div class="docente-card" tabindex="0" aria-label="Docente Ana María López, Matemáticas">
              <img
                src="imagenes/logopoyecto.png"
                alt="Retrato profesional de Ana María López, mujer de cabello castaño corto, sonriente, con fondo neutro"
                class="docente-photo"
                width="90"
                height="90"
              />
              <div class="docente-name">Ana María López</div>
              <div class="docente-subject">Matemáticas</div>
            </div>
            <div class="docente-card" tabindex="0" aria-label="Docente Carlos Fernández, Física">
              <img
                src="imagenes/logopoyecto.png"
                alt="Retrato profesional de Carlos Fernández, hombre de cabello corto y oscuro, con gafas, fondo neutro"
                class="docente-photo"
                width="90"
                height="90"
              />
              <div class="docente-name">Carlos Fernández</div>
              <div class="docente-subject">Física</div>
            </div>
            <div class="docente-card" tabindex="0" aria-label="Docente Laura Gómez, Informática">
              <img
                src="imagenes/logopoyecto.png"
                alt="Retrato profesional de Laura Gómez, mujer con cabello largo y oscuro, fondo neutro"
                class="docente-photo"
                width="90"
                height="90"
              />
              <div class="docente-name">Laura Gómez</div>
              <div class="docente-subject">Informática</div>
            </div>
          </div>
          <a href="funcionarios.php" class="ver-todo-btn" aria-label="Ver todo nuestro equipo de docentes">
            Ver todo nuestro equipo
          </a>
        </section>
      </div>
    </div>
  </main>

<?php require("footer.php"); ?>

  <script src="app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>