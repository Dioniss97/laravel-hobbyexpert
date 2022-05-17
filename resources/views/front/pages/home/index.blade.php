<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('front.layout.partials.styles')

    <title>Hobby Expert</title>
</head>

<body>
    @include('front.layout.partials.header')
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
    @include('front.layout.partials.footer')
    @include('front.layout.partials.js')
</body>

</html>