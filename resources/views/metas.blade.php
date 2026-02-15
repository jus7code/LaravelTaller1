<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Metas Profesionales</title>

  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
  <main class="container">

    <section class="content-card">

      <h1 class="title">Metas Profesionales</h1>
      <p class="subtitle">Dirección estratégica de crecimiento y propósito profesional</p>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Meta principal</h2>
        <div class="placeholder-box" style="display:flex; align-items:center; justify-content:center; font-weight:600; color:var(--muted);">
          Construir soluciones tecnológicas de alto impacto basadas en inteligencia artificial
        </div>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Metas a corto plazo</h2>
        <ul class="clean-list">
          <li>Desarrollar software integrado con inteligencia artificial de alto valor</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Metas a mediano plazo</h2>
        <ul class="clean-list">
          <li>Administrar sistemas con inteligencia artificial</li>
          <li>Contar con una empresa dedicada a soluciones de software utilizando inteligencia artificial</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Metas a largo plazo</h2>
        <ul class="clean-list">
          <li>Ser proveedor de software con altos estándares de calidad, dedicado al desarrollo implementando técnicas de inteligencia artificial de alto impacto</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Notas</h2>
        <div class="placeholder-box"></div>
      </div>

    </section>

    {{-- MENÚ ACTUALIZADO --}}
    <nav class="nav-grid" aria-label="Navegación del perfil">

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

  </main>
</body>
</html>
