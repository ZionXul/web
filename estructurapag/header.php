<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
  body, a, li, nav, span {
    font-family: "Poppins", sans-serif !important;
  }
</style>

<header style="
  padding:18px 28px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  background:rgba(0,0,0,0.2);
  backdrop-filter:blur(6px);
  border-bottom:1px solid rgba(255,255,255,0.1);
">
  <!-- LOGO QUE REDIRIGE AL INDEX -->
  <a href="../page/index.php" style="
      display:flex;
      align-items:center;
      gap:10px;
      font-size:22px;
      font-weight:700;
      color:white;
      text-decoration:none;
  ">
      <img src="../Img/logo.png" alt="Logo" style="height:46px;width:auto;">
      FitZona
  </a>

  <!-- NAV + CARRITO -->
  <div style="
      display:flex;
      align-items:center;
      gap:26px;
  ">

      <nav>
        <ul style="
            display:flex;
            gap:20px;
            list-style:none;
            font-size:15px;
        ">
          <li>
            <a href="../page/contacdo.php" style="
                color:#e6eef8;
                text-decoration:none;
                padding:6px 10px;
                border-radius:6px;
            ">Contacto</a>
          </li>

          <li>
            <a href="../page/tienda.php" style="
                color:#e6eef8;
                text-decoration:none;
                padding:6px 10px;
                border-radius:6px;
            ">Tienda</a>
          </li>
        </ul>
      </nav>

      <!-- CARRITO -->
      <div id="cart-btn" style="
          position:relative;
          font-size:26px;
          cursor:pointer;
          user-select:none;
      ">
        🛒
        <span id="contador-carrito" style="
            position:absolute;
            top:-6px;
            right:-10px;
            background:#7c3aed;
            padding:2px 7px;
            border-radius:999px;
            font-size:13px;
            font-weight:700;
            color:white;
        ">0</span>
      </div>

  </div>
</header>

<script>
/* ------------------------------
     SISTEMA DE CARRITO GLOBAL
------------------------------ */

// Cargar carrito
function obtenerCarrito() {
    return JSON.parse(localStorage.getItem("carrito")) || [];
}

// Actualizar contador
function actualizarBurbujaCarrito() {
    let carrito = obtenerCarrito();
    let total = carrito.reduce((acc, p) => acc + p.cantidad, 0);

    let burbuja = document.getElementById("contador-carrito");
    if (burbuja) burbuja.textContent = total;
}

// Ir al carrito desde el header
document.getElementById("cart-btn").addEventListener("click", () => {
    window.location.href = "../page/carrito.php";
});

// Al cargar el header → actualizar burbuja
actualizarBurbujaCarrito();
</script>
