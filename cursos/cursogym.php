<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Gimnasio desde Cero — FitZona</title>

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
  <h1>Curso de Gimnasio desde Cero</h1>
  <p>Aprende a usar máquinas, pesas libres y crea tu primera rutina segura y efectiva.</p>
</div>

<!-- SECCIÓN 1: Máquinas del Gimnasio -->
<h2 class="section-title">Máquinas Básicas</h2>
<div class="exercise-grid">

  <div class="exercise">
    <!-- IMG: persona usando prensa de piernas – foto lateral, gimnasio real -->
    <img src="../img/gym_legpress.jpg" alt="Prensa de Piernas">
    <h3>Prensa de Piernas</h3>
    <p>Ideal para trabajar cuádriceps, glúteos y femorales de forma segura.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona en máquina de pecho (press) – desde un ángulo frontal -->
    <img src="../img/gym_chestpress.jpg" alt="Press en Máquina">
    <h3>Press de Pecho</h3>
    <p>Perfecta para principiantes antes de usar barra. Enfoque en pecho y tríceps.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona en jalón al pecho – agarre amplio visible -->
    <img src="../img/gym_latpulldown.jpg" alt="Lat Pulldown">
    <h3>Jalón al Pecho</h3>
    <p>Trabaja la espalda completa de forma controlada y sin riesgo.</p>
  </div>

</div>

<!-- SECCIÓN 2: Pesas Libres -->
<h2 class="section-title">Pesas Libres</h2>
<div class="exercise-grid">

  <div class="exercise">
    <!-- IMG: persona haciendo curl de bíceps con mancuernas – fondo gym -->
    <img src="../img/gym_biceps.jpg" alt="Curl de Bíceps">
    <h3>Curl de Bíceps</h3>
    <p>Un clásico para desarrollar los brazos. Aprende el movimiento correcto.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona haciendo press militar con mancuernas – postura vertical -->
    <img src="../img/gym_shouldermilitary.jpg" alt="Press Militar">
    <h3>Press Militar</h3>
    <p>Excelente para fortalecer hombros y ganar estabilidad.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona con barra haciendo peso muerto ligero – técnica limpia -->
    <img src="../img/gym_deadlift.jpg" alt="Peso Muerto">
    <h3>Peso Muerto</h3>
    <p>Uno de los ejercicios más completos. Aprende la técnica progresivamente.</p>
  </div>

</div>

<!-- SECCIÓN 3: Rutina Recomendada -->
<h2 class="section-title">Rutina Inicial Recomendada</h2>
<div class="exercise-grid">

  <div class="exercise">
    <!-- IMG: calendario de entrenamiento o icono fitness -->
    <img src="../img/gym_routine.jpg" alt="Rutina Día A">
    <h3>Día A — Tren Superior</h3>
    <p>Press de pecho, jalón al pecho, hombro, tríceps, bíceps.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona entrenando piernas – gym real -->
    <img src="../img/gym_legday.jpg" alt="Rutina Día B">
    <h3>Día B — Piernas</h3>
    <p>Prensa, sentadilla guiada, femorales y gemelos.</p>
  </div>

  <div class="exercise">
    <!-- IMG: persona haciendo cardio (caminadora) – ambiente gimnasio -->
    <img src="../img/gym_cardio.jpg" alt="Cardio">
    <h3>Cardio y Movilidad</h3>
    <p>15–20 minutos para mejorar resistencia y recuperación.</p>
  </div>

</div>

<a href="../page/cursos.php" class="back-btn">Volver a Cursos</a>

</body>
</html>
