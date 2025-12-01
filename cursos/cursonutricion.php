<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Nutrición Deportiva — FitZona</title>

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
    .section{
      margin-top:40px;
      background:var(--glass);
      padding:20px;
      border-radius:16px;
      backdrop-filter:blur(6px);
    }
    .section h2{margin-top:0;font-size:26px;color:var(--accent)}
    .grid{
      margin-top:20px;
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
      gap:20px;
    }
    .card{
      background:var(--card);
      padding:16px;
      border-radius:12px;
      text-align:center;
      border:1px solid rgba(255,255,255,0.05);
      transition:.25s;
    }
    .card:hover{transform:translateY(-4px)}
    .card img{width:100%;height:250px;border-radius:10px;object-fit:cover}
    .btn{
      display:inline-block;
      background:linear-gradient(90deg,var(--accent),var(--accent-2));
      padding:10px 18px;border:none;border-radius:10px;color:white;
      font-weight:600;margin-top:12px;cursor:pointer;text-decoration:none;
    }
  </style>
</head>

<body>
<div class="container">

  <h1>Curso de Nutrición Deportiva</h1>
  <p class="lead">Aprende a comer para tu objetivo: perder grasa, ganar masa o mantenerte en tu mejor rendimiento.</p>

  <!-- SECCIÓN 1: BASES DE NUTRICIÓN -->
  <div class="section">
    <h2>Bases Fundamentales</h2>
    <p class="lead">Conceptos esenciales explicados de forma clara para que cualquier persona pueda entenderlos.</p>

    <div class="grid">

      <div class="card">
        <!-- Imagen recomendada: plato dividido en macros (carbohidratos, proteínas, grasas) -->
        <img src="../img/nutri1.jpg" alt="Imagen de macronutrientes">
        <h3>Macronutrientes</h3>
        <p>Aprende el rol de proteínas, carbohidratos y grasas en el rendimiento del cuerpo.</p>
      </div>

      <div class="card">
        <!-- Imagen recomendada: infografía de calorías o tabla simple -->
        <img src="../img/nutri2.jpg" alt="Imagen de calorías">
        <h3>Calorías & Balance</h3>
        <p>Cómo funciona el déficit, superávit y mantenimiento para alcanzar tus objetivos.</p>
      </div>

    </div>
  </div>

  <!-- SECCIÓN 2: PLANES SEGÚN OBJETIVO -->
  <div class="section">
    <h2>Planes Personalizados</h2>
    <p class="lead">Guías claras para tres objetivos distintos.</p>

    <div class="grid">

      <div class="card">
        <!-- Imagen recomendada: comida saludable baja en calorías -->
        <img src="../img/nutri3.jpg" alt="Pérdida de grasa">
        <h3>Pérdida de Grasa</h3>
        <p>Combinación de déficit calórico, fibra alta y proteínas suficientes.</p>
      </div>

      <div class="card">
        <!-- Imagen recomendada: comidas ricas en proteína -->
        <img src="../img/nutri4.jpg" alt="Ganar masa">
        <h3>Ganar Masa Muscular</h3>
        <p>Aumenta calorías con alimentos densos y distribuye proteína inteligentemente.</p>
      </div>

      <div class="card">
        <!-- Imagen recomendada: porciones equilibradas -->
        <img src="../img/nutri5.jpg" alt="Mantener peso">
        <h3>Mantenimiento Inteligente</h3>
        <p>Mantén tu energía estable mientras desarrollas hábitos sostenibles.</p>
      </div>

    </div>
  </div>

  <!-- SECCIÓN 3: SUPLEMENTACIÓN -->
  <div class="section">
    <h2>Suplementación</h2>
    <p class="lead">Qué suplementos sí sirven y cuáles no necesitas.</p>

    <div class="grid">

      <div class="card">
        <!-- Imagen recomendada: proteína en polvo -->
        <img src="../img/nutri6.jpg" alt="Proteína en polvo">
        <h3>Proteína</h3>
        <p>Útil cuando no llegas a tu requerimiento diario con comida real.</p>
      </div>

      <div class="card">
        <!-- Imagen recomendada: creatina monohidratada -->
        <img src="../img/nutri7.jpg" alt="Creatina">
        <h3>Creatina</h3>
        <p>El suplemento más estudiado; aumenta fuerza y rendimiento.</p>
      </div>

      <div class="card">
        <!-- Imagen recomendada: vitaminas o frutas variadas -->
        <img src="../img/nutri8.jpg" alt="Vitaminas">
        <h3>Vitaminas</h3>
        <p>Útiles si tu dieta es limitada o baja en fuentes naturales.</p>
      </div>

    </div>
  </div>

  <a href="../page/cursos.php" class="btn">Volver a Cursos</a>

</div>
</body>
</html>
