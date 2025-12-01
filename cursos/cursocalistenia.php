<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Calistenia — FitZona</title>
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
      font-size:28px;margin:40px auto 10px;max-width:1100px;padding:0 20px;
      position:relative;
    }
    .section-title::after{
      content:"";display:block;width:60px;height:3px;
      background:var(--accent);margin-top:6px;border-radius:10px;
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
  <h1>Curso de Calistenia Completa</h1>
  <p>Domina tu cuerpo desde movimientos básicos hasta habilidades avanzadas.</p>
</div>

<h2 class="section-title">Ejercicios Fundamentales</h2>
<div class="exercise-grid">

  <div class="exercise">
    <!-- IMG: persona haciendo sentadilla sin peso – estilo fitness limpio -->
    <img src="../img/calistenia_squat.jpg" alt="Sentadillas">
    <h3>Sentadillas</h3>
    <p>Fortalece piernas, glúteos y core. Perfectas para empezar sin necesitar equipo.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona haciendo lagartijas – imagen lateral estética -->
    <img src="../img/calistenia_pushups.jpg" alt="Lagartijas">
    <h3>Lagartijas</h3>
    <p>Ejercicio clave para pecho, hombros y tríceps. Aprende la técnica correcta.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona colgada en barra – imagen dinámica -->
    <img src="../img/calistenia_dead_hang.jpg" alt="Dead Hang">
    <h3>Dead Hang</h3>
    <p>Fortalece agarre y hombros; base para dominadas y movimientos avanzados.</p>
  </div>

</div>

<h2 class="section-title">Movimientos Intermedios</h2>
<div class="exercise-grid">

  <div class="exercise">
    <!-- IMG: persona haciendo dominada – foto clara y frontal -->
    <img src="../img/calistenia_pullup.jpg" alt="Dominadas">
    <h3>Dominadas</h3>
    <p>Uno de los pilares de la calistenia. Trabaja espalda y bíceps.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona haciendo fondos en paralelas – vista frontal -->
    <img src="../img/calistenia_dips.jpg" alt="Dips">
    <h3>Dips</h3>
    <p>Excelente para pecho y tríceps. Ideal para ganar fuerza en empuje.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona haciendo L-sit – imagen con buena postura -->
    <img src="../img/calistenia_lsit.jpg" alt="L-sit">
    <h3>L-Sit</h3>
    <p>Uno de los mejores ejercicios para abdomen, core y estabilidad general.</p>
  </div>

</div>

<h2 class="section-title">Movimientos Avanzados</h2>
<div class="exercise-grid">
  <div class="exercise">
    <!-- IMG: persona haciendo handstand – pose limpia contra pared o libre -->
    <img src="../img/calistenia_handstand.jpg" alt="Handstand">
    <h3>Handstand</h3>
    <p>Desarrolla equilibrio, control corporal y fuerza en hombros.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona intentando front lever – foto estética horizontal -->
    <img src="../img/calistenia_frontlever.jpg" alt="Front Lever">
    <h3>Front Lever</h3>
    <p>Uno de los mayores retos de la calistenia. Requiere fuerza y técnica.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona haciendo muscle up – transición visible -->
    <img src="../img/calistenia_muscleup.jpg" alt="Muscle Up">
    <h3>Muscle Up</h3>
    <p>Mezcla dominada y fondos explosivos. Un movimiento icónico del street workout.</p>
  </div>
</div>

<a href="../page/cursos.php" class="back-btn">Volver a Cursos</a>

</body>
</html>
