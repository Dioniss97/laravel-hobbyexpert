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
        <div class="product-view">
            <div class="desktop-two-columns">
                <div class="column">
                    <div class="product-view-slider">
                        <div class="product-view-slider-image">
                            <img src="img/ak47.webp" alt="fusil de asalto">
                        </div>
                        <div class="product-view-slider-miniatures desktop-only">
                            <div class="miniature">
                                <img src="img/slider-miniatures/fusilero/68490dd1c0959bc447e23aeb478dc4d61055c51a.webp"
                                    alt="">
                            </div>
                            <div class="miniature">
                                <img src="img/slider-miniatures/fusilero/9b19f9fbe67cdd80afdd41331bbd25ffcb73d41a.webp"
                                    alt="">
                            </div>
                            <div class="miniature">
                                <img src="img/slider-miniatures/fusilero/9d290fd6fd518203394fe8d6c6394bd4b36d0bc4.webp"
                                    alt="">
                            </div>
                            <div class="miniature">
                                <img src="img/slider-miniatures/fusilero/a6258b02f01fc57c954c9e623a8d0695f9b33030.webp"
                                    alt="">
                            </div>
                            <div class="miniature">
                                <img src="img/slider-miniatures/fusilero/e43165724a147f8d8252565f3b1cb525638b5223.webp"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="product-view-info">
                        <div class="product-view-title">
                            <h3>JG1012 EBB FULL METAL [J.G.WORKS]</h3>
                        </div>
                        <div class="product-view-info-price">
                            <span>163.12€</span>
                        </div>
                        <div class="product-view-info-description">
                            <p>A replica of the Russian assault rifle that is the basic weapon of many armies of the
                                world. The body with receiver cover, safety lever, trigger guard, magazine catch, gas
                                tube, magazine are made of steel, other elements such as outer barrel, flash suppressor,
                                front and rear sight base, bolt carrier are made of metal alloy. The handguard, fixed
                                stock are made of wood, pistol grip is made of plastic. The mechanism is a Gearbox v3
                                with EBB (Electric Blow Back) mounted on 7mm steel bearings and 6.05mm inner barrel
                                490mm length.</p>
                        </div>
                        <div class="product-view-info-amount">
                            <div class="amount-title">
                                <span>Cantidad solicitada:</span>
                            </div>
                            <div class="amount-button">
                                <!-- [amount-button] -->
                                <div class="minus">
                                    <button>-</button>
                                </div>
                                <div class="amount-style">
                                    <input class="amount" type="number" id="amount" disabled value="1">
                                </div>
                                <div class="plus">
                                    <button>+</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-view-info-add-to-cart">
                            <div class="add-to-cart-button">
                                <button>Añadir al carrito</button>
                            </div>
                            <div class="notification">
                                <p class="notification-message"></p>
                            </div>
                        </div>
                    </div>
                    <div class="product-view-info-tabs">

                        <!-- --Versión selectTabs-- -->

                        <form class="form" action="">
                            <label for="">Información extra</label>
                            <select class="select-tabs" name="" id="">
                                <option value="">Descripción</option>
                                <option value="">Especificaciones técnicas</option>
                                <option value="">Opiniones</option>
                            </select>

                            <!-- --Versión tabs-- -->

                            <!-- <div class="tabs">
                            <div class="tab active" data-target="1">
                                <p>Descripción</p>
                            </div>
                            <div class="tab" data-target="2">
                                <p>Especificaciones técnicas</p>
                            </div>
                            <div class="tab" data-target="3">
                                <p>Opiniones</p>
                            </div>
                        </div> -->

                            <div class="contents">
                                <div class="content active" data-target="0">
                                    <p>Desc</p>
                                </div>
                                <div class="content" data-target="1">
                                    <p>Tec</p>
                                </div>
                                <div class="content" data-target="2">
                                    <p>Opinion</p>
                                </div>
                            </div>
                        </form>

                        <form class="form" action="">
                            <label for="">Información extra</label>
                            <select class="select-tabs" name="" id="">
                                <option value="">Descripción</option>
                                <option value="">Especificaciones técnicas</option>
                                <option value="">Opiniones</option>
                            </select>

                            <!-- --Versión tabs-- -->

                            <!-- <div class="tabs">
                            <div class="tab active" data-target="1">
                                <p>Descripción</p>
                            </div>
                            <div class="tab" data-target="2">
                                <p>Especificaciones técnicas</p>
                            </div>
                            <div class="tab" data-target="3">
                                <p>Opiniones</p>
                            </div>
                        </div> -->

                            <div class="contents">
                                <div class="content active" data-target="0">
                                    <p>Desc</p>
                                </div>
                                <div class="content" data-target="1">
                                    <p>Tec</p>
                                </div>
                                <div class="content" data-target="2">
                                    <p>Opinion</p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <footer>
        <div class="desktop-two-columns">
            <div class="column">
                <ul>
                    <li>footer</li>
                    <li>footer</li>
                    <li>footer</li>
                    <li>footer</li>
                    <li>footer</li>
                    <li>footer</li>
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