<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Intereses</title>

  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
  <main class="container">

    {{-- Header perfil --}}
    <header class="profile-card">
      <div class="profile-top">
        <div class="avatar">FP</div>

        <div class="profile-info">
          <h1 class="title">Perfil Profesional</h1>
          <p class="subtitle">Rol / Cargo: __________________________</p>

          <div class="meta">
            <div class="meta-item">
              <span class="meta-label">Nombre</span>
              <span class="meta-value">__________________________</span>
            </div>
            <div class="meta-item">
              <span class="meta-label">Ubicación</span>
              <span class="meta-value">__________________________</span>
            </div>
            <div class="meta-item">
              <span class="meta-label">Email</span>
              <span class="meta-value">__________________________</span>
            </div>
            <div class="meta-item">
              <span class="meta-label">Teléfono</span>
              <span class="meta-value">__________________________</span>
            </div>
          </div>
        </div>
      </div>

      <div class="about">
        <h2 class="section-title">Descripción breve</h2>
        <div class="placeholder-box"></div>
      </div>
    </header>

    {{-- Navegación --}}
    <nav class="nav-grid">
      <a class="nav-btn" href="/perfil">
        <span class="nav-icon">◎</span>
        <span class="nav-text">Perfil</span>
        <span class="nav-sub">Información general</span>
      </a>

      <a class="nav-btn" href="/perfil/intereses">
        <span class="nav-icon">★</span>
        <span class="nav-text">Intereses</span>
        <span class="nav-sub">Lo que me motiva</span>
      </a>

      <a class="nav-btn" href="/perfil/skills">
        <span class="nav-icon">⚑</span>
        <span class="nav-text">Skills</span>
        <span class="nav-sub">Competencias</span>
      </a>

      <a class="nav-btn" href="/perfil/objetivos">
        <span class="nav-icon">⟡</span>
        <span class="nav-text">Objetivos</span>
        <span class="nav-sub">Dirección profesional</span>
      </a>
    </nav>

    {{-- Contenido --}}
    <section class="content-card">
      <h2 class="section-title">Áreas de interés</h2>

      <ul class="clean-list">
        <li>__________________________</li>
        <li>__________________________</li>
        <li>__________________________</li>
        <li>__________________________</li>
        <li>__________________________</li>
        <li>__________________________</li>
      </ul>

      <div style="margin-top: 20px;">
        <h2 class="section-title">Descripción de intereses</h2>
        <div class="placeholder-box"></div>
      </div>
    </section>

    <footer class="footer">
      <span>© <span id="year"></span> Perfil</span>
      <span class="dot-sep">•</span>
      <span class="muted">Actualiza tus intereses</span>
    </footer>

  </main>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
