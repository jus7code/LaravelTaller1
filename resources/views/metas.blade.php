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
      <p class="subtitle">Objetivos de crecimiento y dirección de carrera</p>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Meta principal</h2>
        <p class="subtitle" style="margin-top:-6px;">Describe en una frase el objetivo más importante.</p>
        <div class="placeholder-box" style="min-height: 90px;"></div>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Metas a corto plazo (0–6 meses)</h2>
        <ul class="clean-list">
          <li>__________________________</li>
          <li>__________________________</li>
          <li>__________________________</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Metas a mediano plazo (6–18 meses)</h2>
        <ul class="clean-list">
          <li>__________________________</li>
          <li>__________________________</li>
          <li>__________________________</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Metas a largo plazo (18+ meses)</h2>
        <ul class="clean-list">
          <li>__________________________</li>
          <li>__________________________</li>
          <li>__________________________</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Plan de acción</h2>
        <p class="subtitle" style="margin-top:-6px;">Pasos concretos para avanzar (acciones, hábitos, proyectos).</p>
        <ul class="clean-list" style="margin-top: 10px;">
          <li><strong>Acción 1:</strong> __________________________</li>
          <li><strong>Acción 2:</strong> __________________________</li>
          <li><strong>Acción 3:</strong> __________________________</li>
          <li><strong>Acción 4:</strong> __________________________</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Indicadores de avance</h2>
        <p class="subtitle" style="margin-top:-6px;">Cómo sabrás que vas bien (métricas, hitos, evidencia).</p>
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
