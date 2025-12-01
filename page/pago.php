<?php include("../estructurapag/header.php"); ?>

<?php
// Cuando se envíe el formulario:
if($_SERVER["REQUEST_METHOD"] === "POST"){

    // --- DATOS DEL USUARIO ---
    $email = $_POST["email"];
    $nombre = $_POST["nombre"];

    // --- OBTENER CARRITO DESDE JSON ---
    $carrito = json_decode($_POST["carrito_json"], true);
    $total = $_POST["total"];

    // --- GENERAR ID DE COMPRA ---
    $id_compra = "FTZ-" . strtoupper(uniqid());

    // -----------------------------------------
    //        ENVÍO DE CORREO AL CLIENTE
    // -----------------------------------------
    $asunto = "Gracias por tu compra — FitZona";
    
    $mensaje = "
    Hola $nombre, ¡gracias por tu compra en FitZona! 💪\n
    Aquí está tu comprobante:\n
    -------------------------------------\n
    ID de compra: $id_compra\n
    Total pagado: $$total\n
    -------------------------------------\n
    Productos:\n
    ";

    foreach($carrito as $p){
        $mensaje .= "- ".$p["nombre"]." x".$p["cantidad"]."  ($".$p["precio"].")\n";
    }

    $mensaje .= "\n¡Gracias por confiar en FitZona!\n";

    // ENVÍO
    mail($email, $asunto, $mensaje);

    // Vaciar carrito en navegador
    echo "<script>
        localStorage.removeItem('carrito');
    </script>";

    // Mensaje final
    echo "
    <div style='padding:40px; text-align:center; color:white;'>
        <h1>Pago completado ✔</h1>
        <p>Gracias por tu compra, <b>$nombre</b>.</p>
        <p><b>ID de compra:</b> $id_compra</p>
        <p>Hemos enviado un comprobante a: <b>$email</b></p>
        <a href='../page/index.php' style='
            margin-top:20px;
            display:inline-block;
            background:#7c3aed;
            padding:14px 22px;
            border-radius:12px;
            color:white;
            text-decoration:none;
            font-weight:bold;'>
            Volver al inicio
        </a>
    </div>
    ";

    exit;
}
?>

<!doctype html>
<html>
<head>
    <style>
        body{
            margin:0;
            background:linear-gradient(180deg,#0f1724 0%, #071022 100%);
            color:white;
            font-family:Arial;
            padding-top:120px;
        }
        .pago-box{
            max-width:600px;
            margin:0 auto;
            background:rgba(255,255,255,0.05);
            padding:30px;
            border-radius:18px;
            backdrop-filter:blur(8px);
        }
        input, select{
            width:100%;
            padding:12px;
            margin-top:10px;
            border-radius:10px;
            border:none;
        }
        button{
            margin-top:18px;
            width:100%;
            background:#7c3aed;
            padding:14px;
            border-radius:12px;
            color:white;
            font-weight:bold;
            font-size:16px;
            border:none;
            cursor:pointer;
        }
    </style>
</head>
<body>

<div class="pago-box">
    <h2>Método de Pago</h2>

    <form method="POST">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Correo electrónico:</label>
        <input type="email" name="email" required>

        <label>Método de pago:</label>
        <select name="metodo" required>
            <option value="tarjeta">Tarjeta (Simulado)</option>
            <option value="paypal">PayPal</option>
            <option value="efectivo">Pago en tienda</option>
        </select>

        <!-- Pasamos carrito de JS → PHP -->
        <input type="hidden" id="carrito_json" name="carrito_json">
        <input type="hidden" id="total_input" name="total">

        <button type="submit">Confirmar compra</button>
    </form>
</div>

<script>
// Pasar carrito y total al formulario
let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
let total = carrito.reduce((acc, p)=> acc + (p.precio * p.cantidad), 0);

document.getElementById("carrito_json").value = JSON.stringify(carrito);
document.getElementById("total_input").value = total.toFixed(2);
</script>

</body>
</html>
