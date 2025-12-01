<?php include("../estructurapag/header.php"); ?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Tienda — FitZona</title>

  <!-- Usa la MISMA tipografía del header -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --accent:#7c3aed;
      --accent-2:#06b6d4;
      --muted:#94a3b8;
    }

    body{
      margin:0;
      font-family:"Poppins", sans-serif;
      background:linear-gradient(180deg,var(--bg) 0%, #071022 100%);
      color:#e6eef8;
    }

    .container{
      max-width:1100px;
      margin:130px auto 40px auto;
      padding:24px;
    }

    h1{
      font-weight:600;
      color:white;
    }

    .sub{
      margin-top:-10px;
      color:var(--muted);
      font-size:15px;
    }

    .grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
      gap:20px;
    }

    .item{
      background:var(--card);
      padding:16px;
      border-radius:14px;
      transition:0.25s;
      box-shadow:0 6px 30px rgba(2,6,23,0.6);
    }

    .item:hover{
      transform:scale(1.03);
    }

    .item-img img{
      width:100%;
      height:220px;
      object-fit:cover;
      border-radius:10px;
    }

    .price{
      font-weight:600;
      margin:6px 0 10px 0;
    }

    .btn{
      width:100%;
      padding:12px;
      border-radius:10px;
      border:none;
      color:white;
      cursor:pointer;
      font-weight:bold;
      background:linear-gradient(90deg,var(--accent),var(--accent-2));
      font-size:15px;
    }
  </style>
</head>

<body>

<div class="container">
    <h1>Tienda FitZona</h1>
    <p class="sub">Suplementos, ropa y equipo para tus entrenamientos.</p>

    <div class="grid" id="lista-productos"></div>
</div>

<script>
// ===============================
//  PRODUCTOS
// ===============================
const productos = [
  { id: 1, nombre:"Proteína Whey", precio:25.00, img:"../img/proteina.jpg" },
  { id: 2, nombre:"Creatina Monohidratada", precio:18.00, img:"../img/creatina.jpg" },
  { id: 3, nombre:"Camiseta DryFit", precio:15.00, img:"../img/camiseta.jpg" },
  { id: 4, nombre:"Guantes de Gimnasio", precio:12.00, img:"../img/guantes.jpg" },
  { id: 5, nombre:"Mancuernas 10LB (Par)", precio:30.00, img:"../img/mancuernas.jpg" },
  { id: 6, nombre:"BCAA Recovery", precio:22.00, img:"../img/bcaa.jpg" }
];

// ===============================
//  CARGAR PRODUCTOS
// ===============================
function cargarProductos(){
  const cont = document.getElementById("lista-productos");
  cont.innerHTML = "";

  productos.forEach(p=>{
    cont.innerHTML += `
      <div class="item">
        <div class="item-img">
          <img src="${p.img}">
        </div>
        <h3>${p.nombre}</h3>
        <p class="price">$${p.precio.toFixed(2)}</p>
        <button class="btn" onclick="agregarCarrito(${p.id})">Agregar al carrito</button>
      </div>
    `;
  });
}

// ===============================
//  AGREGAR AL CARRITO
// ===============================
function agregarCarrito(id){
  let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
  let existe = carrito.find(item => item.id === id);

  if(existe){
    existe.cantidad++;
  } else {
    let prod = productos.find(p => p.id === id);
    carrito.push({...prod, cantidad:1});
  }

  localStorage.setItem("carrito", JSON.stringify(carrito));
  actualizarBurbujaCarrito();
}

cargarProductos();
actualizarBurbujaCarrito();
</script>

</body>
</html>
