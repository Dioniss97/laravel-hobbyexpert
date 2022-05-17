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
    @include('front.layout.partials.footer')
    @include('front.layout.partials.js')
</body>

</html>