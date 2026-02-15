<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Habilidades</title>

  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
  <main class="container">

    <section class="content-card">

      <h1 class="title">Habilidades</h1>
      <p class="subtitle">Competencias técnicas y blandas que puedo aportar</p>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Habilidades técnicas</h2>
        <ul class="clean-list">
          <li>__________________________</li>
          <li>__________________________</li>
          <li>__________________________</li>
          <li>__________________________</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Habilidades blandas</h2>
        <ul class="clean-list">
          <li>__________________________</li>
          <li>__________________________</li>
          <li>__________________________</li>
          <li>__________________________</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Herramientas / Tecnologías</h2>
        <ul class="clean-list">
          <li>__________________________</li>
          <li>__________________________</li>
          <li>__________________________</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Evidencias / Logros</h2>
        <p class="subtitle" style="margin-top: -6px;">Escribe resultados concretos (proyectos, hitos, métricas).</p>
        <ul class="clean-list" style="margin-top: 10px;">
          <li>__________________________</li>
          <li>__________________________</li>
          <li>__________________________</li>
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
