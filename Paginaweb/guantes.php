<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">

        <div class="menu container">
            <a href="#" class="logo">UniversoCamiseta</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="camisetas.php">Camisetas</a></li>
                    <li><a href="botines.php">Botines</a></li>
                    <li><a href="guantes.php">Guantes</a></li>
                    <li><a href="contactos.php">Contactos</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="images/car.svg" id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                            <a href="formulario.html" id="ir_pago" class="btn-2">Crear Cuenta e Ir a Pagar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div> 
    <main class="products container" id="lista-1">
        <h2>Guantes de Portero
        </h2>

        <div class="product-content">
            <div class="product">
                <img src="images/g1.png" alt="">
                <div class="product-txt">
                    <h3>ADIDAS</h3>
                    <p>Mercurial Superfly FG "Bright Mango"</p>
                    <p class="precio">$183.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/g2.png" alt="">
                <div class="product-txt">
                    <h3>ADIDAS</h3>
                    <p>Mercurial Vapor X FG</p>
                    <p class="precio">$109.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/g3.png" alt="">
                <div class="product-txt">
                    <h3>ADIDAS</h3>
                    <p>Tempo Legend VI</p>
                    <p class="precio">$85.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/g4.png" alt="">
                <div class="product-txt">
                    <h3>ADIDAS</h3>
                    <p>X 16.3 FG</p>
                    <p class="precio">$82.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/g5.png" alt="">
                <div class="product-txt">
                    <h3>ADIDAS</h3>
                    <p>Evospeed 1.4 SL</p>
                    <p class="precio">$121.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/G6.png" alt="">
                <div class="product-txt">
                    <h3>ADIDAS</h3>
                    <p>X17.1 NSG Techfit</p>
                    <p class="precio">$92.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/g7.png" alt="">
                <div class="product-txt">
                    <h3>ADIDAS</h3>
                    <p>Magista Onda FG</p>
                    <p class="precio">$165.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/g8.png" alt="">
                <div class="product-txt">
                    <h3>SELLS</h3>
                    <p>Predator 18.1 FG</p>
                    <p class="precio">$198.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/g9.png" alt="">
                <div class="product-txt">
                    <h3>ADIDAS</h3>
                    <p>PureChaos X 16.3 </p>
                    <p class="precio">$120.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/g10.png" alt="">
                <div class="product-txt">
                    <h3>ADIDAS</h3>
                    <p>NEMEZIZ MESSI 17.1</p>
                    <p class="precio">$76.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/g11.png" alt="">
                <div class="product-txt">
                    <h3>NIKE</h3>
                    <p>Hypervenom III  Pro</p>
                    <p class="precio">$135.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/g12.png" alt="">
                <div class="product-txt">
                    <h3>ADIDAS</h3>
                    <p>Ace Tango 17</p>
                    <p class="precio">$82.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>
    
            
   

    <script src="scrip.js"></script>
</body>
</html>