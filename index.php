<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión Vacacionales </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="header-overlay">
      <div class="header-content">
        <h1>¡¡¡ FELICITACIONES !!!</h1>
        <p>Hemos visto tu desempeño en la empresa, y queremos darte este regalo como compensación.</p>
        <p>Y lo emocionante es que las vacaciones serán pagadas, ¡así que no te preocupes!</p>
        <p> Que te incluye:</p>
        <p> Bebida y comida</p>
        <p> Transporte gratuito</p>
        <p> Alojamiento en un Hotel ★★★★★</p>
        <p> Vista al mar espectacular,y muchas cosas.</p>
        <p>¡Gracias por acompañarnos todo este tiempo! Podés compartirlo con familia o amigos (máx. 3 personas).</p>
      </div>
    </div>
  </header>
  <main>
    <section class="formulario">
      <h2>Solicitud de Vacaciones</h2>
      <form id="vacacionesForm" method="POST" action="guardar.php">
        <label for="nombre">Nombre del empleado:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ej: Benjamin Gudman" required>
        <label for="dias"> Cantidad de días:</label>
        <select id="dias" name="dias" required>
          <option value="">Seleccionar...</option>
          <option value="3">4 días</option>
          <option value="5">6 días</option>
          <option value="10">15 días</option>
          <option value="10">17 días</option>
          <option value="10">20 días</option>
        </select>
        <label for="fechaInicio">Fecha de inicio:</label>
        <input type="date" id="fechaInicio" name="fechaInicio" required>
        <button type="submit">Enviar solicitud</button>
      </form>
    </section>
    <section class="resultado">
      <h2>Confirmación</h2>
      <div id="resumen">
        <p>No hay solicitudes aún.</p>
      </div>
    </section>
  </main>
  <footer>
    <p>  © 2025 Sistema de Vacaciones | Desarrollado por el equipo de la empresa</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
