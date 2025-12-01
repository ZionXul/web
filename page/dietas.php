<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Dietas — FitZona</title>

  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --accent:#7c3aed;
      --accent-2:#06b6d4;
      --muted:#94a3b8;
      --glass:rgba(255,255,255,0.04);
    }
    body{
      font-family:Inter,system-ui;
      margin:0;
      background:linear-gradient(180deg,var(--bg),#071022);
      color:white;
    }
    .container{max-width:1100px;margin:40px auto;padding:20px}
    h1{margin-bottom:10px;font-size:32px}
    p.lead{color:var(--muted)}
    .grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
      gap:20px;margin-top:30px;
    }
    .card{
      background:var(--glass);
      padding:18px;
      border-radius:12px;
      backdrop-filter:blur(6px);
      transition:0.25s;
    }
    .card:hover{transform:translateY(-4px)}
    .card img{
      width:100%;height:170px;object-fit:cover;border-radius:10px;
    }
    footer{text-align:center;margin-top:320px;color:var(--muted)}
  </style>
</head>
<!-- ⭐⭐⭐ HEADER UNIVERSAL ⭐⭐⭐ -->
<?php include("../estructurapag/header.php"); ?>
<body>
<div class="container">
  <h1>Planes de Dieta</h1>
  <p class="lead">Dietas diseñadas por especialistas para bajar grasa, ganar masa o mantenerte saludable.</p>

 <div class="grid">
    
  <div class="card" onclick="location.href='../completmento/dieta_perdida_grasa.php'">
    <img src="../img/imagen1.jpg">
    <h3>Dieta para Pérdida de Grasa</h3>
    <p class="lead">Alta en proteína, baja en carbohidratos, ideal para definir.</p>
  </div>

  <div class="card" onclick="location.href='../completmento/dieta_ganar_masa.php'">
    <img src="../img/image2.jpg">
    <h3>Dieta para Ganar Masa Muscular</h3>
    <p class="lead">Superávit controlado con carbohidratos limpios y distribución por comidas.</p>
  </div>

  <div class="card" onclick="location.href='../completmento/dieta_vegetariana.php'">
    <img src="../img/image3.jpeg">
    <h3>Dieta Vegetariana</h3>
    <p class="lead">Basada en plantas, alta en fibra, proteína vegetal y micronutrientes.</p>
  </div>

  <div class="card" onclick="location.href='../completmento/dieta_keto.php'">
    <img src="../img/image4.jpeg">
    <h3>Dieta Keto</h3>
    <p class="lead">Extremadamente baja en carbohidratos, usa la grasa como energía.</p>
  </div>

</div>


  <footer>© 2025 FitZona — Dietas diseñadas para ti.</footer>
</div>

</body>
</html>
