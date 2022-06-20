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
                @if(isset($carts))
                    @foreach($carts as $cart)
                        <td>
                            <img class="desktop-only" src="img/machine-gun.webp" alt="">
                        </td>
                        <td>MK46 SPORTS LINE LIGHT MACHINE GUN REPLICA [ST]</td>
                        <td>{{$cart->price_id}}</td>
                        <td>
                            <div class="amount-button">
                                <div class="minus">
                                    <button>-</button>
                                </div>
                                <div class="amount-style">
                                    <input class="amount" name="amount" type="number"  value="{{$cart->amount}}">
                                </div>
                                <div class="plus">
                                    <button>+</button>
                                </div>
                            </div>
                        </td>
                    @endforeach
                @endif
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