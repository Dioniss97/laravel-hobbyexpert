<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-mobile.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
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
        <div class="cart">
            <div class="cart-main-table">
                <table>
                    <caption>Carrito de la compra</caption>
                    <tr>
                        <th></th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </tr>
                    <tr>
                        <td>
                            <img class="desktop-only" src="img/sr25.webp" alt="">
                        </td>
                        <td>CA25 [CLASSIC ARMY]</td>
                        <td>271.49€</td>
                        <td>
                            <div class="amount-button">
                                <div class="minus">
                                    <button class="minus">-</button>
                                </div>
                                <div class="amount-style">
                                    <input class="amount" type="number" value="1">
                                </div>
                                <div class="plus">
                                    <button class="">+</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="desktop-only" src="img/machine-gun.webp" alt="">
                        </td>
                        <td>MK46 SPORTS LINE LIGHT MACHINE GUN REPLICA [ST]</td>
                        <td>234.89€</td>
                        <td>
                            <div class="amount-button">
                                <div class="minus">
                                    <button>-</button>
                                </div>
                                <div class="amount-style">
                                    <input class="amount" type="number"  value="1">
                                </div>
                                <div class="plus">
                                    <button>+</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="cart-resume-table">
                <table>
                    <caption>Resumen de la compra</caption>
                    <tr>
                        <th>IVA</th>
                        <td>106.34€</td>
                    </tr>
                    <tr>
                        <th>Transporte</th>
                        <td>0€</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td>612.72 €</td>
                    </tr>
                </table>
                <div class="cart-buttons">
                    <div class="purchase-button">
                        <button>Atrás</button>
                    </div>
                    <div class="cancel-button">
                        <button>Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="desktop-two-columns">
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
                            <iframe width="500" height="400" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=Black%20Shadow&t=k&z=9&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="module" src="dist/app.js"></script>
</body>
</html>