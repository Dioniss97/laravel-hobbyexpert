<div class="contact page-section" id="contact">
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
                <form class="front-form" data-url="{{route('front_contact_store')}}">
                    <legend>¡Contacta con nosotros!</legend>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="form-element">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" placeholder="Nombre" required>
                            </div>
                            <div class="form-element">
                                <label for="phone">Telefono</label>
                                <input type="tel" name="phone" placeholder="Telefono" required>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-element">
                                <label for="surnames">Apellidos</label>
                                <input type="text" name="surnames" placeholder="Apellidos" required>
                            </div>
                            <div class="form-element">
                                <label for="email">Correo</label>
                                <input type="email" name="email" placeholder="Correo" required>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="message">Mensaje</label>
                                <textarea name="message" placeholder="Mensaje" required></textarea>
                            </div>
                            <div class="store-button-container">
                                <button class="store-button" data-url="{{route('front_contact_store')}}">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>