<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/style-mobile.css"> -->
    <title>Hobby Expert</title>
</head>

<body>
    <header>
        <div class="index menu mobile-only" id="menu">
            <ul>
                <li><a href="index.html">inicio</a></li>
                <li><a href="products.html">tienda</a></li>
                <li><a href="cart.html">carrito</a></li>
                <li><a href="contact.html">contacto</a></li>
            </ul>
        </div>
        <div class="desktop-two-columns">
            <div class="column">
                <div class="header-logo">
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="header-logo-img">
                                <img src="img/AK47.svg" alt="ak47">
                            </div>
                            <div class="header-hamburger mobile-only">
                                <div class="index hamburger " id="hamburger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="header-logo-title">
                                <h1>Hobby Expert</h1>
                            </div>
                            <div class="header-logo-subtitle desktop-only">
                                <h3>Distribuidor de equipación y réplicas de Airsoft</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="header-menu desktop-only">
                    <ul>
                        <li><a href="index.html">inicio</a></li>
                        <li><a href="products.html">tienda</a></li>
                        <li><a href="cart.html">carrito</a></li>
                        <li><a href="contact.html">contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="home">
            <div class="slider">
                <div class="slider-image desktop-only">
                    <img src="img/home-img.webp" alt="Grupo">
                </div>
                <div class="slider-image mobile-only">
                    <img src="img/home-mobile-img.webp" alt="Grupo">
                </div>
                <div class="header-logo-subtitle mobile-only">
                    <h3>Distribuidor de equipación y réplicas de Airsoft</h3>
                </div>
                <div class="slider-title">
                    <h4>¿Estás buscando un campo dónde jugar cerca?</h4>
                </div>
                <div class="slider-button">
                    <button>Pincha aquí</button>
                </div>
            </div>
            <div class="categories">
                <div class="desktop-four-columns mobile-one-column">
                    <div class="column">
                        <div class="category">
                            <button>
                                <img src="img/fusilero.webp" alt="">
                                <h4>Fusilero</h4>
                            </button>
                        </div>
                    </div>
                    <div class="column">
                        <div class="category">
                            <button>
                                <img src="img/artillero.webp" alt="">
                                <h4>Artillero</h4>
                            </button>
                        </div>
                    </div>
                    <div class="column">
                        <div class="category">
                            <button>
                                <img src="img/selecto.webp" alt="">
                                <h4>Tirador selecto</h4>
                            </button>
                        </div>
                    </div>
                    <div class="column">
                        <div class="category">
                            <button>
                                <img src="img/sniper.webp" alt="">
                                <h4>Francotirador</h4>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="desktop-two-columns mobile-one-column">
            <div class="column">
                <div class="footer-info">
                    <ul>
                        <li>Info</li>
                        <li>Info</li>
                        <li>Info</li>
                        <li>Info</li>
                        <li>Info</li>
                        <li>Info</li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <div class="footer-map">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas"
                                src="https://maps.google.com/maps?q=Black%20Shadow&t=k&z=9&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="module" src="dist/app.js"></script>
</body>

</html>