<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfil</title>

  {{-- Si tu CSS está en /public/css/styles.css --}}
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
  <main class="container">

    {{-- Header / Información general (siempre visible) --}}
    <header class="profile-card">
      <div class="profile-top">
        <div class="avatar avatar-photo">
        <img src="/images/profile.png" alt="Foto de perfil">
    </div>


        <div class="profile-info">
          <h1 class="title">Perfil Profesional</h1>
          <p class="subtitle">Rol / Cargo: Estudiante UNAB</p>

          <div class="meta">
            <div class="meta-item">
              <span class="meta-label">Nombre</span>
              <span class="meta-value">Rodrigo Andres Meza Florez</span>
            </div>
            <div class="meta-item">
              <span class="meta-label">Ubicación</span>
              <span class="meta-value">Bucaramanga</span>
            </div>
            <div class="meta-item">
              <span class="meta-label">Email</span>
              <span class="meta-value">rodrigo@gmail.com</span>
            </div>
            <div class="meta-item">
              <span class="meta-label">Teléfono</span>
              <span class="meta-value">+573000000</span>
            </div>
          </div>
        </div>
      </div>

      <div class="about">
        <h2 class="section-title">Descripción breve</h2>
        <div class="placeholder-box" aria-label="Descripción breve"> --> Esta es una corta descripcion de mi persona</div>
      </div>
    </header>

    {{-- Navegación a vistas diferentes --}}
    <nav class="nav-grid" aria-label="Navegación del perfil">
      {{-- Cambia los href por tus routes() o urls --}}
      <a class="nav-btn" href="/perfil">
        <span class="nav-icon">★</span>
        <span class="nav-text">perfil</span>
        <span class="nav-sub">Lo que disfruto</span>
      </a>

      <a class="nav-btn" href="/perfil/intereses">
        <span class="nav-icon">⟡</span>
        <span class="nav-text">intereses</span>
        <span class="nav-sub">Lo que busco lograr</span>
      </a>

      <a class="nav-btn" href="/perfil/habilidades">
        <span class="nav-icon">⚑</span>
        <span class="nav-text">Habilidades</span>
        <span class="nav-sub">Habilidades clave</span>
      </a>

      <a class="nav-btn" href="/perfil/metas">
        <span class="nav-icon">◎</span>
        <span class="nav-text">Metas Profesionales</span>
        <span class="nav-sub">Dirección de carrera</span>
      </a>
    </nav>

    {{-- Área opcional para contenido (si esta vista también debe mostrar algo adicional) --}}
    <section class="content-card">
      <h2 class="section-title">Resumen</h2>
      <ul class="clean-list">
        <li><strong>Experiencia:</strong> 6 meses como auxiliar en sistemas </li>
        <li><strong>Áreas de interés:</strong> Desarrollo web, Inteligencia artificial </li>
        <li><strong>Fortalezas:</strong> aprendizaje autonomo, trabajo en equipo </li>
      </ul>
    </section>

    <footer class="footer">
      <span>© <span id="year"></span> Perfil</span>
      <span class="dot-sep">•</span>
      <span class="muted">Actualiza los campos con tu información</span>
    </footer>

  </main>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
