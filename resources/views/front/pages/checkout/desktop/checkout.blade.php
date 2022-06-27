<div class="checkout">
    <form class="front-form" action="">
        <input type="hidden" name="total_tax_price" value="{{$tax_total}}">
        <input type="hidden" name="total_base_price" value="{{$base_total}}">
        <input type="hidden" name="total_price" value="{{$total}}">
        <div class="desktop-two-columns">
            <div class="column">
                <div class="checkout-form">
                    <div class="desktop-two-columns">
                        <div class="column">
                            <label for="name">Nombre</label><input name="name" type="text">
                            <label for="telephone">Teléfono</label><input name="telephone" type="tel">
                            <label for="city">Provincia</label>
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
                    <div class="desktop-one-column">
                        <div class="column">
                            <label for="">País</label>
                            <select name="country" size="1">
                                <option value='selecciona'>Selecciona</option>
                                <option value='España'>España</option>
                                <option value='Alemania'>Alemania</option>
                                <option value='Andorra'>Andorra</option>
                                <option value='Argentina'>Argentina</option>
                                <option value='Austria'>Austria</option>
                                <option value='Bélgica'>Bélgica</option>
                                <option value='Brasil'>Brasil</option>
                                <option value='Bulgaria'>Bulgaria</option>
                                <option value='Chile'>Chile</option>
                                <option value='China'>China</option>
                                <option value='Colombia'>Colombia</option>
                                <option value='Costa Rica'>Costa Rica</option>
                                <option value='Croacia'>Croacia</option>
                                <option value='Cuba'>Cuba</option>
                                <option value='Dinamarca'>Dinamarca</option>
                                <option value='Ecuador'>Ecuador</option>
                                <option value='Egipto'>Egipto</option>
                                <option value='El Salvador'>El Salvador</option>
                                <option value='España'>España</option>
                                <option value='Estados Unidos'>Estados Unidos</option>
                                <option value='Finlandia'>Finlandia</option>
                                <option value='Francia'>Francia</option>
                                <option value='Grecia'>Grecia</option>
                                <option value='Guatemala'>Guatemala</option>
                                <option value='Honduras'>Honduras</option>
                                <option value='Hungría'>Hungría</option>
                                <option value='India'>India</option>
                                <option value='Indonesia'>Indonesia</option>
                                <option value='Irlanda'>Irlanda</option>
                                <option value='Islandia'>Islandia</option>
                                <option value='Italia'>Italia</option>
                            </select>
                        </div>
                    </div>
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
                                <td>{{$type}} %</td>
                                <td>{{$base_total}} €</td>
                                <td>{{$tax_total}} €</td>
                                <td>{{$total}} €</td>
                            </tr>
                        </table>
                    </div>
                    <div class="checkout-payment">
                        <div class="checkout-payment-radio">
                            <input name="payment" type="radio" value="1"><label for="">Transferencia Bancaria</label>
                        </div>
                        <div class="checkout-payment-radio">
                            <input name="payment" type="radio" value="2"><label for="">Paypal</label>
                        </div>
                        <div class="checkout-payment-radio">
                            <input name="payment" type="radio" value="3"><label for="">Tarjeta de crédito</label>
                        </div>
                        <div class="purchase-button" data-url="{{route('front_checkout_ended')}}">
                            <button>Pagar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
