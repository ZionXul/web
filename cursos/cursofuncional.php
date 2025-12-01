<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Entrenamiento Funcional — FitZona</title>

  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --accent:#7c3aed;
      --accent-2:#06b6d4;
      --muted:#94a3b8;
      --glass:rgba(255,255,255,0.05);
    }
    body{
      margin:0;font-family:Inter,system-ui;
      background:linear-gradient(180deg,var(--bg),#071022);
      color:white;
    }

    .hero{
      max-width:1100px;margin:0 auto;padding:60px 20px;text-align:center;
    }
    .hero h1{font-size:42px;margin-bottom:10px}
    .hero p{color:var(--muted);font-size:18px;margin-top:0}

    .section-title{
      font-size:28px;margin:40px auto 10px;max-width:1100px;padding:0 20px;position:relative;
    }
    .section-title::after{
      content:"";display:block;width:60px;height:3px;background:var(--accent);
      margin-top:6px;border-radius:10px;
    }

    .exercise-grid{
      max-width:1100px;margin:25px auto;padding:20px;
      display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;
    }
    .exercise{
      background:var(--glass);border-radius:14px;padding:16px;
      backdrop-filter:blur(6px);transition:.25s;box-shadow:0 0 20px rgba(0,0,0,.25);
    }
    .exercise:hover{transform:translateY(-5px)}
    .exercise img{width:100%;height:170px;object-fit:cover;border-radius:10px}
    .exercise h3{margin:8px 0 5px}
    .exercise p{color:var(--muted);font-size:15px}

    .back-btn{
      display:block;width:max-content;margin:50px auto;padding:12px 22px;
      background:linear-gradient(90deg,var(--accent),var(--accent-2));
      border:none;border-radius:10px;color:white;font-weight:600;
      text-decoration:none;text-align:center;
    }
  </style>
</head>
<body>

<div class="hero">
  <h1>Entrenamiento Funcional</h1>
  <p>Mejora tu fuerza, estabilidad, movilidad y rendimiento con ejercicios naturales y dinámicos.</p>
</div>

<!-- SECCIÓN 1: Movimientos Compuestos -->
<h2 class="section-title">Movimientos Compuestos</h2>
<div class="exercise-grid">

  <div class="exercise">
    <!-- IMG: persona haciendo sentadilla con kettlebell – pose clara -->
    <img src="../img/func_squat.jpg" alt="Sentadilla Funcional">
    <h3>Sentadilla Funcional</h3>
    <p>Fortalece piernas, core y mejora la mecánica del movimiento natural.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona haciendo peso muerto con kettlebell – espalda recta -->
    <img src="../img/func_deadlift.jpg" alt="Peso Muerto Funcional">
    <h3>Peso Muerto Funcional</h3>
    <p>Desarrolla una postura sólida, fuerza lumbar y estabilidad.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona haciendo push press con mancuerna o kettlebell -->
    <img src="../img/func_pushpress.jpg" alt="Push Press">
    <h3>Push Press</h3>
    <p>Ejercicio explosivo ideal para hombros y potencia general.</p>
  </div>

</div>

<!-- SECCIÓN 2: Core y Estabilidad -->
<h2 class="section-title">Core y Estabilidad</h2>
<div class="exercise-grid">

  <div class="exercise">
    <!-- IMG: persona haciendo plancha lateral – buena alineación -->
    <img src="../img/func_sideplank.jpg" alt="Plancha Lateral">
    <h3>Plancha Lateral</h3>
    <p>Trabaja oblicuos y estabilidad del tronco, clave para prevenir lesiones.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona usando fitball – ejercicio de equilibrio -->
    <img src="../img/func_fitball.jpg" alt="Estabilidad en Fitball">
    <h3>Estabilidad en Fitball</h3>
    <p>Aumenta el control corporal y la fuerza interna del core.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona haciendo bear crawl – vista lateral -->
    <img src="../img/func_bearcrawl.jpg" alt="Bear Crawl">
    <h3>Bear Crawl</h3>
    <p>Ejercicio completo que mejora coordinación, movilidad y resistencia.</p>
  </div>

</div>

<!-- SECCIÓN 3: Movilidad -->
<h2 class="section-title">Movilidad y Fluidez</h2>
<div class="exercise-grid">

  <div class="exercise">
    <!-- IMG: persona haciendo estiramiento dinámico de cadera -->
    <img src="../img/func_hipmob.jpg" alt="Movilidad de Cadera">
    <h3>Movilidad de Cadera</h3>
    <p>Aumenta el rango de movimiento para sentadillas y zancadas seguras.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona haciendo rotaciones torácicas – de rodillas -->
    <img src="../img/func_thoracic.jpg" alt="Movilidad Torácica">
    <h3>Movilidad Torácica</h3>
    <p>Mejora la postura, respiración y rendimiento en movimientos overhead.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona haciendo estiramiento dinámico de hombro con banda elástica -->
    <img src="../img/func_bandmob.jpg" alt="Movilidad con Banda">
    <h3>Movilidad con Banda</h3>
    <p>Libera tensión, mejora la técnica y evita molestias articulares.</p>
  </div>

</div>

<a href="../page/cursos.php" class="back-btn">Volver a Cursos</a>

</body>
</html>
