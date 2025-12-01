<?php
include("../connections/connectiondb.php");
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Contacto — FitZona</title>

  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --accent:#7c3aed;
      --accent-2:#06b6d4;
      --muted:#94a3b8;
      --glass: rgba(255,255,255,0.04);
    }

    body{
      margin:0;
      font-family:Inter,system-ui;
      background:linear-gradient(180deg,var(--bg),#071022);
      color:white;
    }

    header{
      padding:18px 28px;
      display:flex;
      justify-content:space-between;
      align-items:center;
      background:rgba(0,0,0,0.2);
      backdrop-filter:blur(6px);
      border-bottom:1px solid rgba(255,255,255,0.1)
    }

    /* LOGO ES LINK AL INDEX */
    .logo-link{
      display:flex;
      align-items:center;
      gap:10px;
      font-size:22px;
      font-weight:700;
      color:white;
      text-decoration:none;
      cursor:pointer;
    }

    .logo-link img{height:46px;width:auto}

    nav ul{
      display:flex;
      gap:20px;
      list-style:none;
      font-size:15px
    }

    nav a{
      color:#e6eef8;
      text-decoration:none;
      padding:6px 10px;
      border-radius:6px
    }

    nav a:hover{background:rgba(255,255,255,0.06)}

    .container{
      max-width:900px;
      margin:40px auto;
      padding:20px;
    }

    h1{
      font-size:30px;
      margin-bottom:10px;
      text-align:center;
    }

    p.lead{
      text-align:center;
      color:var(--muted);
      margin-bottom:40px;
    }

    .grid{
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:30px;
    }

    @media(max-width:800px){
      .grid{grid-template-columns:1fr;}
    }

    .contact-box{
      background:var(--glass);
      padding:22px;
      border-radius:12px;
      backdrop-filter:blur(6px);
    }

    .contact-box h3{
      margin-bottom:12px;
    }

    .social-row{
      display:flex;
      align-items:center;
      gap:10px;
      margin:8px 0;
    }

    .social-row a{
      color:var(--accent-2);
      text-decoration:none;
      font-weight:500;
    }
    .social-row a:hover{text-decoration:underline;}

    .icon{font-size:20px;}

    form{
      display:flex;
      flex-direction:column;
      gap:14px;
    }

    input, textarea{
      width:100%;
      padding:12px;
      border-radius:10px;
      border:none;
      background:#1a2335;
      color:white;
      outline:none;
    }

    textarea{height:120px;resize:none;}

    button{
      padding:12px;
      border:none;
      border-radius:10px;
      cursor:pointer;
      background:linear-gradient(90deg,var(--accent),var(--accent-2));
      color:white;
      font-size:16px;
      font-weight:600;
    }
    button:hover{opacity:.85;}

    footer{
      text-align:center;
      margin-top:120px;
      padding:18px;
      background:rgba(255,255,255,0.03);
      color:var(--muted);
    }
  </style>
</head>

<body>

<header>
  <!-- LOGO QUE REDIRIGE AL INDEX -->
  <a class="logo-link" href="index.php">
    <img src="../Img/logo.png" alt="Logo" />
    FitZona
  </a>

  <!-- SOLO CONTACTO -->
  <nav>
    <ul>
      <li><a href="contacdo.php">Contacto</a></li>
    </ul>
  </nav>
</header>

<div class="container">
  <h1>Contacto</h1>
  <p class="lead">¿Tienes preguntas, sugerencias o deseas un plan personalizado? Escríbenos.</p>

  <div class="grid">

    <div class="contact-box">
      <h3>Información de Contacto</h3>

      <div class="social-row">
        <span class="icon">📞</span>
        <a href="tel:+50370001234">+503 7000-1234</a>
      </div>

      <div class="social-row">
        <span class="icon">📧</span>
        <a href="mailto:fitarena@correo.com">fitarena@correo.com</a>
      </div>

      <div class="social-row">
        <span class="icon">📸</span>
        <a href="https://instagram.com/" target="_blank">Instagram</a>
      </div>

      <div class="social-row">
        <span class="icon">🐦</span>
        <a href="https://x.com/" target="_blank">X (Twitter)</a>
      </div>

      <div class="social-row">
        <span class="icon">📘</span>
        <a href="https://facebook.com/" target="_blank">Facebook</a>
      </div>
    </div>

    <div class="contact-box">
      <h3>Envíanos un Mensaje</h3>

      <form method="POST" action="#">
        <input type="text" name="nombre" placeholder="Tu nombre" required />
        <input type="email" name="correo" placeholder="Tu correo" required />
        <textarea name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>

        <button type="submit">Enviar Mensaje</button>
      </form>
    </div>

  </div>
</div>

<footer>
  © 2025 FitZona — Todos los derechos reservados
</footer>

</body>
</html>
