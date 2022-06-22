<div class="checkout">
    <div class="desktop-two-columns">
        <div class="column">
            <div class="checkout-form">
                <form action="">
                    <div class="desktop-two-columns">
                        <div class="column">
                            <label for="name">Nombre</label><input name="name" type="text">
                            <label for="telephone">Teléfono</label><input name="telephone" type="tel">
                            <label for="city">Ciudad</label>
                            <select name="province" size="1">
                                <option value='selecciona'>Selecciona</option>
                                <option value='A Coruña'>A Coruña</option>
                                <option value='álava'>álava</option>
                                <option value='Albacete'>Albacete</option>
                                <option value='Alicante'>Alicante</option>
                                <option value='Almería'>Almería</option>
                                <option value='Asturias'>Asturias</option>
                                <option value='ávila'>Ávila</option>
                                <option value='Badajoz'>Badajoz</option>
                                <option value='Barcelona'>Barcelona</option>
                                <option value='Burgos'>Burgos</option>
                                <option value='Cáceres'>Cáceres</option>
                                <option value='Cádiz'>Cádiz</option>
                                <option value='Cantabria'>Cantabria</option>
                                <option value='Castellón'>Castellón</option>
                                <option value='Ceuta'>Ceuta</option>
                                <option value='Ciudad Real'>Ciudad Real</option>
                                <option value='Córdoba'>Córdoba</option>
                                <option value='Cuenca'>Cuenca</option>
                                <option value='Gerona'>Gerona</option>
                                <option value='Girona'>Girona</option>
                                <option value='Las Palmas'>Las Palmas</option>
                                <option value='Granada'>Granada</option>
                                <option value='Guadalajara'>Guadalajara</option>
                                <option value='Guipúzcoa'>Guipúzcoa</option>
                                <option value='Huelva'>Huelva</option>
                                <option value='Huesca'>Huesca</option>
                                <option value='Jaén'>Jaén</option>
                                <option value='La Rioja'>La Rioja</option>
                                <option value='León'>León</option>
                                <option value='Lleida'>Lleida</option>
                                <option value='Lugo'>Lugo</option>
                                <option value='Madrid'>Madrid</option>
                                <option value='Malaga'>Málaga</option>
                                <option value='Mallorca'>Mallorca</option>
                                <option value='Melilla'>Melilla</option>
                                <option value='Murcia'>Murcia</option>
                                <option value='Navarra'>Navarra</option>
                                <option value='Orense'>Orense</option>
                                <option value='Palencia'>Palencia</option>
                                <option value='Pontevedra'>Pontevedra</option>
                                <option value='Salamanca'>Salamanca</option>
                                <option value='Segovia'>Segovia</option>
                                <option value='Sevilla'>Sevilla</option>
                                <option value='Soria'>Soria</option>
                                <option value='Tarragona'>Tarragona</option>
                                <option value='Tenerife'>Tenerife</option>
                                <option value='Teruel'>Teruel</option>
                                <option value='Toledo'>Toledo</option>
                                <option value='Valencia'>Valencia</option>
                                <option value='Valladolid'>Valladolid</option>
                                <option value='Vizcaya'>Vizcaya</option>
                                <option value='Zamora'>Zamora</option>
                                <option value='Zaragoza'>Zaragoza</option>
                            </select>
                        </div>
                        <div class="column">
                            <label for="surname">Apellidos</label><input name="surnames" type="text">
                            <label for="email">Email</label><input name="email" type="text">
                            <label for="pc">Código postal</label><input name="postal_code" type="text">
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <label for="">Direccíón</label><input name="address" type="text">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="column">
            <div class="checkout-table">
                <div class="cart-resume-table">
                    <table>
                        <caption>Resumen de la compra</caption>
                        <tr>
                            <th>IVA</th>
                            <th>Base imponible</th>
                            <th>IVA a pagar</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td>{{$tax}} %</td>
                            <td>{{$base_total}} €</td>
                            <td>{{$tax_total}} €</td>
                            <td>{{$total}} €</td>
                        </tr>
                    </table>
                </div>
                <div class="checkout-payment">
                    <form class="radios-form" action="">
                        <div class="checkout-payment-radio">
                            <input name="payment" type="radio"><label for="">Transferencia Bancaria</label>
                        </div>
                        <div class="checkout-payment-radio">
                            <input name="payment" type="radio"><label for="">Paypal</label>
                        </div>
                        <div class="checkout-payment-radio">
                            <input name="payment" type="radio"><label for="">Tarjeta de crédito</label>
                        </div>
                    </form>
                    <div class="purchase-button" data-url="{{route('front_checkout_ended')}}">
                        <button>Pagar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>