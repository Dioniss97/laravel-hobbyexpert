<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/style-mobile.css">
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
                            <div class="header-logo-subtitle">
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
                        <li><a href="">servicios</a></li>
                        <li><a href="contact.html">contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="contact">
            <div class="desktop-two-columns">
                <div class="column">
                    <div class="contact-info">
                        <ul>
                            <li>
                                <img class="contact-info-logo" src="img/phone_sign.svg" alt="">
                                <span>+34678900384</span>
                            </li>
                            <li>
                                <img class="contact-info-logo" src="img/Mail_Icon_clip_art.svg" alt="">
                                <span>info@airsoft.com</span>
                            </li>
                            <li>
                                <img class="contact-info-logo" src="img/pin.svg" alt="">
                                <span>Club Maritimo Sant Antonio</span>
                            </li>
                            <li>
                                <img class="contact-info-logo" src="img/tango_office_calendar.svg" alt="">
                                <span>Abierto todos los dias</span>
                            </li>
                            <li>
                                <img class="contact-info-logo" src="img/stopwatch_silhouette.svg" alt="">
                                <span>8:00 - 14:00</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column">
                    <div class="contact-form">
                        <form action="">
                            <legend>¡Contacta con nosotros!</legend>
                            <div class="desktop-two-columns">
                                <div class="column">
                                    <label for="name">Nombre</label><br><input type="text">
                                    <label for="phone">Telefono</label><br><input type="text">
                                </div>
                                <div class="column">
                                    <label for="surnames">Apellidos</label><br><input type="text"><br>
                                    <label for="mail">Email</label><br><input type="text">
                                </div>
                            </div>
                            <div class="desktop-one-column">
                                <div class="column">
                                    <div class="contact-form-textarea">
                                        <label for="message">Mensaje</label><br><textarea name="message"></textarea>
                                    </div>
                                    <div class="enter">
                                        <button type="submit">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="desktop-two-columns">
            <div class="column">
                <ul>
                    <li>Info</li>
                    <li>Info</li>
                    <li>Info</li>
                    <li>Info</li>
                    <li>Info</li>
                    <li>Info</li>
                </ul>
            </div>
            <div class="column">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="500" height="400" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Black%20Shadow&t=k&z=9&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="module" src="dist/app.js"></script>
</body>

</html>