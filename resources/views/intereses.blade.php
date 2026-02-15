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

        <section class="content-card">

      <h1 class="title">Intereses</h1>
      <p class="subtitle">Ámbitos que despiertan curiosidad, motivación y desarrollo</p>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Áreas profesionales de interés</h2>
        <ul class="clean-list">
          <li>Inteligencia artificial</li>
          <li>Desarrollo de videojuegos</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Intereses personales</h2>
        <ul class="clean-list">
          <li>Desarrollo web</li>
          <li>Marketing digital</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Temas que me gustaría profundizar</h2>
        <ul class="clean-list">
          <li>Desarrollo avanzado de juegos usando IA</li>
        </ul>
      </div>

      <div style="margin-top: 28px;">
        <h2 class="section-title">Notas o reflexiones</h2>
        <div class="placeholder-box" style="display:flex; align-items:center; justify-content:center; font-weight:600; color:var(--muted);">
          Si lo puedes imaginar lo puedes programar
        </div>
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
