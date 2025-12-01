<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Cursos — FitZona</title>

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

    

    .container{max-width:1100px;margin:40px auto;padding:20px}
    h1{font-size:32px;margin-bottom:10px}
    p.lead{color:var(--muted)}
    .course-grid{
      margin-top:30px;display:grid;
      grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
      gap:18px;
    }
    .course{
      background:var(--glass);
      border-radius:12px;
      padding:16px;
      backdrop-filter:blur(6px);
      transition:0.25s;
    }
    .course:hover{transform:translateY(-4px)}
    .course img{
      width:100%;
      border-radius:10px;
      height:200px;
      object-fit:cover;
      object-position:center;
      background:#0b1220;
    }
    .btn{
      padding:10px 18px;
      background:linear-gradient(90deg,var(--accent),var(--accent-2));
      border:none;border-radius:10px;color:white;
      cursor:pointer;font-weight:600;margin-top:10px;
    }
    footer{text-align:center;margin-top:350px;color:var(--muted)}
  </style>
</head>

<body>
<!-- ⭐⭐⭐ HEADER UNIVERSAL ⭐⭐⭐ -->
<?php include("../estructurapag/header.php"); ?>
<div class="container">

  

  <h1>Cursos Especializados</h1>
  <p class="lead">Aprende técnicas correctas, entrena seguro y mejora tu rendimiento.</p>

  <div class="course-grid">

    <div class="course">
      <img src="../img/curso1.jpg">
      <h3>Curso de Calistenia Completa</h3>
      <p class="lead">Progreso desde principiante hasta movimientos avanzados.</p>
      <button class="btn" onclick="location.href='../cursos/cursocalistenia.php'">Ver detalles</button>
    </div>

    <div class="course">
      <img src="../img/curso2.jpg">
      <h3>Curso de Gimnasio desde Cero</h3>
      <p class="lead">Aprende a usar máquinas, pesas y crear tu propia rutina.</p>
      <button class="btn" onclick="location.href='../cursos/cursogym.php'">Ver detalles</button>
    </div>

    <div class="course">
      <img src="../img/curso3.jpg">
      <h3>Entrenamiento Funcional</h3>
      <p class="lead">Movimientos compuestos para fuerza y estabilidad.</p>
      <button class="btn" onclick="location.href='../cursos/cursofuncional.php'">Ver detalles</button>
    </div>

    <div class="course">
      <img src="../img/curso4.jpg">
      <h3>Curso de Nutrición Deportiva</h3>
      <p class="lead">Aprende a comer según tu objetivo: bajar, ganar o mantener.</p>
      <button class="btn" onclick="location.href='../cursos/cursonutricion.php'">Ver detalles</button>
    </div>

  </div>

  <footer>© 2025 FitZona — Aprende, progresa, supera tus metas.</footer>

</div>

</body>
</html>
