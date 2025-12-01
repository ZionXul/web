<?php include("../estructurapag/header.php"); ?>

<style>
body{
  margin:0;
  background:linear-gradient(180deg,#0f1724 0%, #071022 100%);
  color:white;
  font-family:Arial, sans-serif;
}

.carrito-wrapper{
    max-width:900px;
    margin:120px auto 40px auto;
    padding:25px;
    background:rgba(255,255,255,0.05);
    border-radius:18px;
    backdrop-filter:blur(8px);
    border:1px solid rgba(255,255,255,0.1);
    box-shadow:0 6px 30px rgba(0,0,0,0.4);
}

.carrito-item{
    display:flex;
    align-items:center;
    padding:18px 0;
    gap:16px;
    border-bottom:1px solid rgba(255,255,255,0.08);
}

.carrito-item img{
    width:80px;
    height:80px;
    border-radius:12px;
    object-fit:cover;
    box-shadow:0 0 10px rgba(0,0,0,0.4);
}

.carrito-text{
    flex:1;
}

.carrito-text h3{
    margin:0;
    font-size:20px;
    font-weight:700;
}

.carrito-text p{
    margin:4px 0;
    opacity:0.8;
}

/* Controles + y - */
.cantidad-box{
    display:flex;
    align-items:center;
    gap:8px;
    background:rgba(255,255,255,0.08);
    padding:6px 12px;
    border-radius:12px;
}

.btn-cant{
    background:#7c3aed;
    width:28px;
    height:28px;
    border-radius:8px;
    border:none;
    cursor:pointer;
    color:white;
    font-weight:bold;
    font-size:16px;
    display:flex;
    align-items:center;
    justify-content:center;
}

.btn-cant:hover{
    transform:scale(1.08);
}

.cant-num{
    font-size:18px;
    font-weight:700;
}

.boton-eliminar{
    background:#e63946;
    border:none;
    border-radius:10px;
    padding:10px 14px;
    color:white;
    font-weight:bold;
    cursor:pointer;
    margin-left:12px;
}

.total-box{
    margin-top:30px;
    text-align:right;
    font-size:24px;
    font-weight:800;
}

.vaciar{
    background:#e63946;
    border:none;
    padding:12px 18px;
    border-radius:14px;
    color:white;
    font-weight:bold;
    cursor:pointer;
    margin-top:25px;
}

/* BOTÓN PAGAR */
.boton-pagar{
    background:#14b8a6;
    border:none;
    padding:14px 22px;
    border-radius:14px;
    color:white;
    font-weight:bold;
    cursor:pointer;
    margin-top:25px;
    font-size:18px;
    transition:0.2s;
    width:100%;
    text-align:center;
}

.boton-pagar:hover{
    transform:scale(1.05);
    background:#0d9488;
}
</style>

<div class="carrito-wrapper">
    <h1 style="margin-bottom:20px;">🛒 Tu Carrito</h1>

    <div id="carrito-lista"></div>

    <div class="total-box">
        Total a pagar: $<span id="total">0.00</span>
    </div>

    <button class="vaciar" onclick="vaciarCarrito()">Vaciar carrito</button>

    <a href="../page/pago.php">
        <button class="boton-pagar">💳 Pagar ahora</button>
    </a>
</div>

<script>
function cargarCarrito(){
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    const cont = document.getElementById("carrito-lista");
    cont.innerHTML = "";

    let total = 0;

    carrito.forEach((p, index)=>{
        total += p.precio * p.cantidad;

        cont.innerHTML += `
            <div class="carrito-item">
                <img src="${p.img}">
                
                <div class="carrito-text">
                    <h3>${p.nombre}</h3>
                    <p>Precio unitario: $${p.precio}</p>

                    <div class="cantidad-box">
                        <button class="btn-cant" onclick="cambiarCantidad(${index}, -1)">-</button>
                        <span class="cant-num">${p.cantidad}</span>
                        <button class="btn-cant" onclick="cambiarCantidad(${index}, 1)">+</button>
                    </div>
                </div>

                <button class="boton-eliminar" onclick="eliminar(${index})">Eliminar</button>
            </div>
        `;
    });

    document.getElementById("total").textContent = total.toFixed(2);
}

// AUMENTAR / DISMINUIR CANTIDAD
function cambiarCantidad(i, delta){
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

    carrito[i].cantidad += delta;

    // Si llega a cero → eliminar
    if(carrito[i].cantidad <= 0){
        carrito.splice(i, 1);
    }

    localStorage.setItem("carrito", JSON.stringify(carrito));
    cargarCarrito();
    actualizarBurbujaCarrito();
}

// ELIMINAR UN PRODUCTO
function eliminar(i){
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    carrito.splice(i,1);
    localStorage.setItem("carrito", JSON.stringify(carrito));
    cargarCarrito();
    actualizarBurbujaCarrito();
}

// VACIAR CARRITO
function vaciarCarrito(){
    localStorage.removeItem("carrito");
    cargarCarrito();
    actualizarBurbujaCarrito();
}

cargarCarrito();
</script>
