<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Zona de Entrenamiento — FitZona</title>
  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --accent:#7c3aed;
      --accent-2:#06b6d4;
      --muted:#94a3b8;
      --glass: rgba(255,255,255,0.04);
      --glass-2: rgba(255,255,255,0.03);
      font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
    }
    *{box-sizing:border-box}
    body{margin:0;background:linear-gradient(180deg,var(--bg) 0%, #071022 100%);color:#e6eef8;line-height:1.4}
    .container{max-width:1100px;margin:36px auto;padding:24px}

    header.hero{display:grid;grid-template-columns:1fr 420px;gap:24px;align-items:center;margin-bottom:28px}
    .hero .intro{padding:28px;border-radius:14px;background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));box-shadow:0 6px 30px rgba(2,6,23,0.6)}
    h1{font-size:28px;margin:0 0 8px;color:#fff}
    p.lead{color:var(--muted);margin:0 0 18px}
    .cta-row{display:flex;gap:12px;align-items:center}
    .btn{background:linear-gradient(90deg,var(--accent),var(--accent-2));border:none;padding:12px 18px;border-radius:10px;color:white;cursor:pointer;font-weight:600}
    .btn.ghost{background:transparent;border:1px solid rgba(255,255,255,0.06)}

    .card-img{position:relative;border-radius:14px;overflow:hidden;height:100%;min-height:260px;background:var(--glass)}
    .card-img img{width:100%;height:100%;object-fit:cover;display:block}
    .badge{position:absolute;left:14px;top:14px;padding:8px 12px;background:rgba(0,0,0,0.35);backdrop-filter:blur(6px);border-radius:999px;font-weight:700}

    .features{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin:18px 0}
    .feature{background:var(--card);padding:16px;border-radius:12px}
    .feature h3{margin:0 0 8px;font-size:16px}
    .feature p{margin:0;color:var(--muted);font-size:14px}

    .split{display:grid;grid-template-columns:1fr 340px;gap:18px;margin-top:18px}
    .schedule{background:linear-gradient(180deg,var(--glass),var(--glass-2));padding:16px;border-radius:12px}
    .schedule h3{margin:0 0 12px}
    .class-list{display:flex;flex-direction:column;gap:10px}
    .class{display:flex;justify-content:space-between;background:rgba(255,255,255,0.02);padding:10px;border-radius:10px}
    .class .time{color:var(--muted);font-weight:700}

    .trainers{background:linear-gradient(180deg,var(--card),rgba(0,0,0,0.25));padding:16px;border-radius:12px}
    .trainer{display:flex;gap:12px;padding:8px 0;border-bottom:1px dashed rgba(255,255,255,0.03)}
    .trainer:last-child{border-bottom:0}
    .timg{width:64px;height:64px;border-radius:10px;overflow:hidden;flex-shrink:0;background:#0a0f18}
    .timg img{width:100%;height:100%;object-fit:cover}
    .tmeta h4{margin:0 0 4px;font-size:15px}
    .tmeta p{margin:0;color:var(--muted);font-size:13px}

    .stats{display:flex;gap:12px;margin-top:18px}
    .stat{flex:1;background:var(--card);padding:16px;border-radius:12px;text-align:center}
    .stat h4{margin:0;font-size:22px}
    .stat p{margin:6px 0 0;color:var(--muted)}

    .testimonials{margin-top:20px;display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
    .test{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:14px;border-radius:12px}

    footer{margin-top:350px;padding:12px;text-align:center;color:var(--muted)}

    @media (max-width:980px){
      header.hero{grid-template-columns:1fr}
      .split{grid-template-columns:1fr}
      .features{grid-template-columns:repeat(2,1fr)}
      .testimonials{grid-template-columns:1fr}
    }
    @media (max-width:560px){
      .features{grid-template-columns:1fr}
    }

    .muted{color:var(--muted)}
  </style>
</head>
<body>

<!-- ⭐⭐⭐ HEADER UNIVERSAL ⭐⭐⭐ -->
<?php include("../estructurapag/header.php"); ?>

<div class="container">

    <header class="hero">
      <div class="intro">
        <h1>Zona de Entrenamiento — Entrena con propósito</h1>
        <p class="lead">Un espacio diseñado para fuerza, movilidad y rendimiento. Aquí encontrarás rutinas guiadas, entrenadores certificados y el ambiente ideal para superar tus metas.</p>
        <div class="cta-row">
          <button class="btn" id="btn-schedule">Ver horario</button>
          <button class="btn ghost" id="btn-join">Prueba gratis</button>
        </div>

        <div class="features" style="margin-top:18px">
          <div class="feature">
            <h3>Entrenamiento funcional</h3>
            <p>Movimientos compuestos que mejoran fuerza y coordinación para la vida diaria y deporte.</p>
          </div>
          <div class="feature">
            <h3>Zona de pesas libres</h3>
            <p>Rack, mancuernas,y barras para fuerza progresiva.</p>
          </div>
          <div class="feature">
            <h3>Cardio y acondicionamiento</h3>
            <p>Treadmills, rowers y HIIT para quemar grasa y mejorar resistencia.</p>
          </div>
        </div>

        <div class="stats">
          <div class="stat">
            <h4 id="stat-members">+1200</h4>
            <p>Miembros activos</p>
          </div>
          <div class="stat">
            <h4 id="stat-trainers">8</h4>
            <p>Entrenadores certificados</p>
          </div>
          <div class="stat">
            <h4 id="stat-classes">24/sem</h4>
            <p>Clases por semana</p>
          </div>
        </div>
      </div>

      <aside class="card-img">
        <div class="badge">Zona: Entrenamiento</div>
        <!-- Imagen — colócala tú -->
        <img src="../img/training-hero.jpg" alt="Entrenamiento" id="hero-image">
      </aside>
    </header>

    <div class="split">
      <section class="schedule" id="schedule">
        <h3>Horario de Clases</h3>
        <p class="muted">Clases para todos los niveles.</p>

        <div class="class-list" id="class-list">
          <div class="class"><div><strong>HIIT</strong><div class="muted">45 min</div></div><div class="time">Lun 6:00</div></div>
          <div class="class"><div><strong>Fuerza</strong><div class="muted">60 min</div></div><div class="time">Mar 19:00</div></div>
          <div class="class"><div><strong>Movilidad</strong><div class="muted">30 min</div></div><div class="time">Mie 18:00</div></div>
          <div class="class"><div><strong>Cross Training</strong><div class="muted">50 min</div></div><div class="time">Sab 9:00</div></div>
        </div>

        <div style="margin-top:12px;display:flex;gap:10px;align-items:center">
          <button class="btn" id="btn-book">Reservar clase</button>
          <button class="btn ghost" id="btn-more">Ver más</button>
        </div>
      </section>

      <aside class="trainers">
        <h3>Entrenadores</h3>

        <div class="trainer">
          <div class="timg"><img src="../img/trainer-1.jpg"></div>
          <div class="tmeta"><h4>María López</h4><p class="muted">Fuerza y rehabilitación</p></div>
        </div>

        <div class="trainer">
          <div class="timg"><img src="../img/trainer-2.jpg"></div>
          <div class="tmeta"><h4>Carlos Peña</h4><p class="muted">Funcional y HIIT</p></div>
        </div>

        <div class="trainer">
          <div class="timg"><img src="../img/trainer-3.jpg"></div>
          <div class="tmeta"><h4>Lucía Ramos</h4><p class="muted">Movilidad y recuperación</p></div>
        </div>
      </aside>
    </div>

    <section class="testimonials">
      <div class="test">
        <strong>"Mejoré mi fuerza en 12 semanas"</strong>
        <p class="muted">Juan P.</p>
      </div>
      <div class="test">
        <strong>"HIIT que funciona"</strong>
        <p class="muted">Ana R.</p>
      </div>
    </section>

    <footer>
      <small>¿Quieres un plan personalizado? <button class="btn" id="btn-contact" style="font-size:13px;padding:8px 12px">Contactar</button></small>
    </footer>

</div>

<script>
  document.getElementById('btn-schedule').addEventListener('click', ()=>{
    document.getElementById('schedule').scrollIntoView({behavior:'smooth'});
  });
</script>

</body>
</html>
