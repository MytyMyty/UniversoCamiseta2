<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor Inicia sesión para acceder");
                window.location ="formulario.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Ventas1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
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
                    <li><a href="index1.php">Inicio</a></li>
                    <li><a href="Paginas_IN/camisetasI.php">Camisetas</a></li>
                    <li><a href="Paginas_IN/botinesI.php">Botines</a></li>
                    <li><a href="Paginas_IN/guantesI.php">Guantes</a></li>
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
                            <a href="registro.php" id="ir_pago" class="btn-2">Ir a Pagar</a>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
            <li><a class="btn-3" href="php/cerrar_sesion.php">Cerrar Sesion</a></li>
        </div>    
        <div class="header-content container">
            <div class="header-img">
                <ul>
                    <li><img src="images/right.png" alt=""></li>
                    <li><img src="images/right1.png" alt=""></li>
                    <li><img src="images/right2.png" alt=""></li>
                    <li><img src="images/right3.png" alt=""></li>
                    <li><img src="images/right4.png" alt=""></li>
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
                <img src="images/f1.png" alt="">
            </div>
            <div class="ofert-txt">
                <h3>Camisetas</h3>
                <a href="Paginas_IN/camisetasI.php" class="btn-2">Click Aqui</a>
            </div>
        </div>

        <div class="ofer-1">
            <div class="ofert-img">
                <img src="images/f2.png" alt="">
            </div>
            <div class="ofert-txt">
                <h3>Botines</h3>
                <a href="Paginas_IN/botinesI.php" class="btn-2">Click Aqui</a>
            </div>
        </div>

        <div class="ofer-1">
            <div class="ofert-img">
                <img src="images/f3.png" alt="">
            </div>
            <div class="ofert-txt">
                <h3>Guantes</h3>
                <a href="Paginas_IN/guantesI.php" class="btn-2">Click Aqui</a>
            </div> 
        </div>


    </section>

    <main class="products container" id="lista-1">
        <h2>Productos Recomendados</h2>


        <div class="container">
            <div class="row text-center py-5">
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/2.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">NIKE</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="card-text">
                                Camiseta Brasil Visita Azul
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$68.990</s></small>
                                    <span class="precio">$55.990</span>
                                </h5>
                                <ba type="submit" class="agregar-carrito btn btn-warning my-3" name="add">Añadir al Carrito <i class="fas fa-shopping-cart"></i></ba>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/8.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">NIKE</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </h6>
                                <p class="card-text">
                                Camiseta Portugal Local
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$68.990</s></small>
                                    <span class="precio">$51.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/19.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">NIKE</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="card-text">
                                Camiseta Francia Visita 
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$68.990</s></small>
                                    <span class="precio">$54.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/9.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">NIKE</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta Barca Local 17/18
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$68.990</s></small>
                                    <span class="precio">$56.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/6.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">ADIDAS</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta Benfica Local
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$70.990</s></small>
                                    <span class="precio">$57.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/7.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">ADIDAS</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta Argentina Local
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$70.990</s></small>
                                    <span class="precio">$57.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/5.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">ADIDAS</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta AC Milan Visita
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$70.990</s></small>
                                    <span class="precio">$55.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/17.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">ADIDAS</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta Real Madrid Local
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$70.990</s></small>
                                    <span class="precio">$58.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/13.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">NIKE</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta Nueva Zelanda Local
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$68.990</s></small>
                                    <span class="precio">$50.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/10.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">NIKE</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta Francia Visita Cuello
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$68.990</s></small>
                                    <span class="precio">$53.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/11.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">NIKE</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta AC Roma Local Rojo Vino
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$68.990</s></small>
                                    <span class="precio">$55.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/18.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">NIKE</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta Manchester UTD Local Rojo
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$68.990</s></small>
                                    <span class="precio">$57.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/3.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">ADIDAS</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta España Local Roja 22/23
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$70.990</s></small>
                                    <span class="precio">$57.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/21.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">NIKE</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta Portugal Visita Blanca 17/18
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$68.990</s></small>
                                    <span class="precio">$54.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/9.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">NIKE</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta Barca Local Blaugrana 13/14
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$68.990</s></small>
                                    <span class="precio">$56.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-6 my-3 my-md-0" name="op">
                    <form action="index1.php" method="POST">
                        <div class="card shadow">
                            <div>
                                <img src="images/20.png" alt="Image1" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">ADIDAS</h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </h6>
                                <p class="card-text">
                                    Camiseta Bayern Munich Local
                                </p>
                                <h5>
                                    <small><s class="text-secondary">$70.990</s></small>
                                    <span class="precio">$58.990</span>
                                </h5>
                                <a type="submit" class="agregar-carrito btn btn-warning my-3" name="add" data-id="1">Añadir al Carrito <i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
       

    </main>

    <section class="icons container">

        <div class="icon-1">
            <div class="icon-img">
                <img src="images/i1.svg" alt="">
            </div>
            <div class="icon-txt">
                <h3>¡Más que un simple adorno!</h3>
                    <p>Tus poleras no solo se verán increíbles en la cancha o las gradas, ¡también serán protagonistas en tu armario! Diseños llamativos y vibrantes que llenarán de color tu espacio.</p>
            </div>
        </div>

        <div class="icon-1">
            <div class="icon-img">
                <img src="images/i2.svg" alt="">
            </div>
            <div class="icon-txt">
                <h3>¡Planchado perfecto, calidad duradera!</h3>
                    <p>Olvídate de las arrugas y disfruta de una tela resistente al desgaste. Plancharlas será pan comido y su calidad te acompañará durante mucho tiempo.</p>
            </div>
        </div>

        <div class="icon-1">
            <div class="icon-img">
                <img src="images/i3.svg" alt="">
            </div>
            <div class="icon-txt">
                <h3>¡Dobleces sin preocupaciones!</h3>
                    <p>No importa si las guardas por un corto o largo tiempo, tus poleras no se deformarán ni perderán su forma. ¡Olvídate de las marcas indeseadas y disfruta de tu colección impecable!</p>
            </div>
        </div>
    </section>

    <section class="blog container">

        <div class="blog-1">
            <img src="images/i1.jpg" alt="">
            <h3>¡Viste tu pasión!</h3>
            <p>
                Las nuevas camisetas de fútbol ya están aquí. Luce tu pasión por tu equipo favorito con las camisetas oficiales de la temporada

            </p>
        </div>

        <div class="blog-1">
            <img src="images/i2.jpg" alt="">
            <h3>¡Domina el campo con estilo!</h3>
            <p>
                ¿Estás listo para llevar tu juego al siguiente nivel? Descubre los botines de fútbol profesionales y siente la diferencia en cada pisada.
            </p>
        </div>

        <div class="blog-1">
            <img src="images/i3.jpg" alt="">
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="scrip.js"></script>
</body>
</html>