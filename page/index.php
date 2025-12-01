<?php
// Incluir la conexión a la base de datos
include("../connections/connectiondb.php");
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>FitZona — Inicio</title>

  <!-- LINK AL HEADER GLOBAL -->
  <?php include("../estructurapag/header.php"); ?>

  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --accent:#7c3aed;
      --accent-2:#06b6d4;
      --muted:#94a3b8;
      --glass: rgba(255,255,255,0.04);
      --glass-2: rgba(255,255,255,0.03);
      font-family: Inter, system-ui;
    }
    *{box-sizing:border-box;margin:0;padding:0}
    body{background:linear-gradient(180deg,var(--bg),#071022);color:#e6eef8;line-height:1.4}

    .hero{
      padding:70px 24px;
      text-align:center;
      max-width:780px;
      margin:auto
    }
    .hero h1{
      font-size:36px;
      color:white;
      margin-bottom:12px
    }
    .hero p{
      color:var(--muted);
      font-size:17px;
      margin-bottom:20px
    }
    .btn{
      background:linear-gradient(90deg,var(--accent),var(--accent-2));
      padding:12px 20px;
      border:none;
      border-radius:10px;
      color:white;
      cursor:pointer;
      font-weight:600;
      font-size:16px
    }
    .btn:hover{opacity:.85}

    .sections{
      max-width:1100px;
      margin:40px auto;
      padding:0 20px;
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:16px
    }
    .card{
      background:var(--card);
      padding:20px;
      border-radius:14px;
      cursor:pointer;
      transition:.2s
    }
    .card:hover{
      transform:translateY(-4px);
      background:rgba(255,255,255,0.04)
    }
    .card h3{
      margin-bottom:8px;
      font-size:18px;
      color:white
    }
    .card p{
      color:var(--muted);
      font-size:14px
    }

    .footer{
      margin-top:400px;
      padding:18px;
      text-align:center;
      color:var(--muted);
      font-size:14px
    }

    @media(max-width:900px){
      .sections{grid-template-columns:1fr 1fr}
    } 
    @media(max-width:600px){
      .sections{grid-template-columns:1fr}
    }
  </style>
</head>
<body>

<!-- HEADER YA VIENE INCLUIDO ARRIBA -->

<section class="hero">
  <h1>Bienvenido a FitZona</h1>
  <p>Tu plataforma para entrenamiento, nutrición y bienestar — todo en un solo lugar.</p>
  <button class="btn" onclick="location.href='entrenamiento.php'">Explorar Zona de Entrenamiento</button>
</section>

<section class="sections">
  <div class="card" onclick="location.href='entrenamiento.php'">
    <h3>🏋️ Entrenamiento</h3>
    <p>Rutinas, progresiones, fuerza, HIIT y más.</p>
  </div>

  <div class="card" onclick="location.href='dietas.php'">
    <h3>🥗 Dietas</h3>
    <p>Planes alimenticios personalizados y saludables.</p>
  </div>

  <div class="card" onclick="location.href='cursos.php'">
    <h3>📚 Cursos</h3>
    <p>Aprende sobre nutrición, técnica y rendimiento.</p>
  </div>
</section>

<footer class="footer">
  © 2025 FitZona — Todos los derechos reservados
</footer>

</body>
</html>
