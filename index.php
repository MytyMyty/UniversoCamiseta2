


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Ventas</title>
    <link rel="stylesheet" href="Paginaweb/style.css">
</head>
<body>
    <header class="header">

        <div class="menu container">
            <a href="#" class="logo">UniversoCamiseta</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="Paginaweb/images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Paginaweb/camisetas.php">Camisetas</a></li>
                    <li><a href="Paginaweb/botines.php">Botines</a></li>
                    <li><a href="Paginaweb/guantes.php">Guantes</a></li>
                    <li><a href="Paginaweb/contactos.php">Contactos</a></li>
                    <li><a href="Paginaweb/nosotros.php">Nosotros</a></li>
                    
                </ul>
            </nav>
            <div>
                <ul>
                    
                    <li class="submenu">
                        <img src="Paginaweb/images/car.svg" id="img-carrito" alt="carrito">
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
                            <a  id="ir_pago" class="btn-4">Inicie Sesion para Pagar</a>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
                <li><a class="btn-3" href="Paginaweb/formulario.php">Inicio Sesion</a></li>
                <li><a class="btn-3-1" href="Paginaweb/registro.php"> Registrate </a></li>
        </div>    
        <div class="header-content container">
            <div class="header-img">
                <ul>
                    <li><img src="Paginaweb/images/right.png" alt=""></li>
                    <li><img src="Paginaweb/images/right1.png" alt=""></li>
                    <li><img src="Paginaweb/images/right2.png" alt=""></li>
                    <li><img src="Paginaweb/images/right3.png" alt=""></li>
                    <li><img src="Paginaweb/images/right4.png" alt=""></li>
                </ul>
            </div>
            <div class="header-txt">
                <h1>¡Tu pasion en cada Prenda!</h1>
                <p>Más que un deporte, un estilo de vida. Encuentra en Universo Camiseta las mejores camisetas, botines y guantes para tu juego ¡Lleva la pasión a la cancha y juega con estilo!</p>
                <a href="#" class="btn-1">Más informacion</a>
            </div>
        </div>

    </header>


    <section class="ofert container">
        <div class="ofer-1">
            <div class="ofert-img">
                <img src="Paginaweb/images/f1.png" alt="">
            </div>
            <div class="ofert-txt">
                <h3>Camisetas</h3>
                <a href="Paginaweb/camisetas.php" class="btn-2">Click Aqui</a>
            </div>
        </div>

        <div class="ofer-1">
            <div class="ofert-img">
                <img src="Paginaweb/images/f2.png" alt="">
            </div>
            <div class="ofert-txt">
                <h3>Botines</h3>
                <a href="Paginaweb/botines.php" class="btn-2">Click Aqui</a>
            </div>
        </div>

        <div class="ofer-1">
            <div class="ofert-img">
                <img src="Paginaweb/images/f3.png" alt="">
            </div>
            <div class="ofert-txt">
                <h3>Guantes</h3>
                <a href="Paginaweb/guantes.php" class="btn-2">Click Aqui</a>
            </div>
        </div>


    </section>

    <main class="products container" id="lista-1">
        <h2>Productos Recomendados</h2>

        <div class="product-content">
            <div class="product">
                <img src="Paginaweb/images/15.png" alt="">
                <div class="product-txt">
                    <h3>Camiseta Alemania Visita</h3>
                    <p>Producto Original Premium</p>
                    <p class="precio">$65.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="Paginaweb/images/13.png" alt="">
                <div class="product-txt">
                    <h3>Camiseta Nueva Zelanda Local</h3>
                    <p>Producto Original Premium</p>
                    <p class="precio">$65.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="Paginaweb/images/3.png" alt="">
                <div class="product-txt">
                    <h3>Camiseta España Local</h3>
                    <p>Producto Original Premium</p>
                    <p class="precio">$65.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="Paginaweb/images/4.png" alt="">
                <div class="product-txt">
                    <h3>Camiseta Man Utd Visita</h3>
                    <p>Producto Original Premium</p>
                    <p class="precio">$65.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="Paginaweb/images/17.png" alt="">
                <div class="product-txt">
                    <h3>Camiseta Real Madrid Local</h3>
                    <p>Producto Original Premium</p>
                    <p class="precio">$65.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="Paginaweb/images/6.png" alt="">
                <div class="product-txt">
                    <h3>Camiseta Benfica Local</h3>
                    <p>Producto Original Premium</p>
                    <p class="precio">$65.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="Paginaweb/images/7.png" alt="">
                <div class="product-txt">
                    <h3>Camiseta Argentina Local</h3>
                    <p>Producto Original Premium</p>
                    <p class="precio">$65.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="Paginaweb/images/18.png" alt="">
                <div class="product-txt">
                    <h3>Camiseta Man Utd Local</h3>
                    <p>Producto Original Premium</p>
                    <p class="precio">$65.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="Paginaweb/images/9.png" alt="">
                <div class="product-txt">
                    <h3>Camiseta Barça Local</h3>
                    <p>Producto Original Premium</p>
                    <p class="precio">$65.000</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>
        </div>

    </main>

    <section class="icons container">

        <div class="icon-1">
            <div class="icon-img">
                <img src="Paginaweb/images/i1.svg" alt="">
            </div>
            <div class="icon-txt">
                <h3>¡Más que un simple adorno!</h3>
                    <p>Tus poleras no solo se verán increíbles en la cancha o las gradas, ¡también serán protagonistas en tu armario! Diseños llamativos y vibrantes que llenarán de color tu espacio.</p>
            </div>
        </div>

        <div class="icon-1">
            <div class="icon-img">
                <img src="Paginaweb/images/i2.svg" alt="">
            </div>
            <div class="icon-txt">
                <h3>¡Planchado perfecto, calidad duradera!</h3>
                    <p>Olvídate de las arrugas y disfruta de una tela resistente al desgaste. Plancharlas será pan comido y su calidad te acompañará durante mucho tiempo.</p>
            </div>
        </div>

        <div class="icon-1">
            <div class="icon-img">
                <img src="Paginaweb/images/i3.svg" alt="">
            </div>
            <div class="icon-txt">
                <h3>¡Dobleces sin preocupaciones!</h3>
                    <p>No importa si las guardas por un corto o largo tiempo, tus poleras no se deformarán ni perderán su forma. ¡Olvídate de las marcas indeseadas y disfruta de tu colección impecable!</p>
            </div>
        </div>
    </section>

    <section class="blog container">

        <div class="blog-1">
            <img src="Paginaweb/images/i1.jpg" alt="">
            <h3>¡Viste tu pasión!</h3>
            <p>
                Las nuevas camisetas de fútbol ya están aquí. Luce tu pasión por tu equipo favorito con las camisetas oficiales de la temporada

            </p>
        </div>

        <div class="blog-1">
            <img src="Paginaweb/images/i2.jpg" alt="">
            <h3>¡Domina el campo con estilo!</h3>
            <p>
                ¿Estás listo para llevar tu juego al siguiente nivel? Descubre los botines de fútbol profesionales y siente la diferencia en cada pisada.
            </p>
        </div>

        <div class="blog-1">
            <img src="Paginaweb/images/i3.jpg" alt="">
            <h3>¡Conviértete en un muro infranqueable!</h3>
            <p>
                ¿Estás listo para convertirte en el héroe de tu equipo? Equipa tus manos con los guantes de arquero profesionales y detén cada disparo con seguridad.
            </p>
        </div>

    </section>

    <footer class="footer">

        <div class="footer-content container">

            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>
            </div>

        </div>

    </footer>




    <script src="Paginaweb/scrip.js"></script>
</body>
</html>