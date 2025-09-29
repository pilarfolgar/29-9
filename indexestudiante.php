<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Evolution IT</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css ">
</head>
<body>

<header>
    <div class="HeaderIzq">
    <h1>
    InfraLex
    </h1>
    <h6>Instituto Tecnológico Superior de Paysandú</h6>
    </div>
    <div class="header-right">
    <a href="INDEX.HTML"><img src="imagenes/logopoyecto.png" alt="Logo" class="logo"></a>
    </div>
</header>

<nav>
    <a href="#horarios.html">Horarios</a>
    <a href="aulas.html">Aulas</a>
    <a href="usuarios.html">Mi Perfil</a>
    <!-- Botón para abrir el modal de reporte -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#reporteModal">
      Reportar objeto roto
    </button>
</nav>

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <img src="imagenes/frenteitsp.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <img src="imagenes/patio.jpeg" class="d-block w-100">
    </div>
    <div class="carousel-item">
    <img src="imagenes/salondeactos.jpeg" class="d-block w-100">
    </div>
    <div class="carousel-item">
    <img src="imagenes/biblioteca.jpeg" class="d-block w-100">
    </div>
    <div class="carousel-item">
    <img src="imagenes/piso1.jpeg" class="d-block w-100">
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

<main class="contenedor">
    <div class="tarjeta">
    <h3>Aulas</h3>
    <p>Consulta el aula que te toca.</p>
    <button class="boton">Ver aulas</button>
    </div>
    <div class="tarjeta">
    <h3>Objeto roto</h3>
    <p>Reporta un objeto roto.</p>
    <button class="boton">Realizar reporte</button>
    </div>
<div class="tarjeta">
    <h3>Horarios</h3>
    <p>Consulta tus horarios.</p>
    <button class="boton">Ver horarios</button>
    </div>

    <div class="tarjeta">
    <h3>Funcionarios</h3>
    <p>Nuestro equipo docente.</p>
    <button class="boton">Ver funcionarios</button>
    </div>
</main>

<!-- MODAL REPORTAR OBJETO ROTO -->
<div class="modal fade" id="reporteModal" tabindex="-1" aria-labelledby="reporteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="guardar_reporte.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="reporteModalLabel">Reportar objeto roto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="reportNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="reportNombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <label for="reportLugar" class="form-label">Lugar del objeto</label>
            <input type="text" class="form-control" id="reportLugar" name="lugar" required>
          </div>
          <div class="mb-3">
            <label for="reportDescripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="reportDescripcion" name="descripcion" rows="3" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Enviar reporte</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require("footer.php"); ?>
<script src="app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>