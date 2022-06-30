<div class="cart page-section" id="cart">
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
                <form class="front-form" action="">
                    @if(isset($carts))
                        @foreach($carts as $cart)
                            <input type="hidden" name="fingerprint" value="{{$cart->fingerprint}}">
                            <input type="hidden" name="price_id" value="{{$cart->price_id}}">
                            <td>
                                <img class="desktop-only" src="img/machine-gun.webp" alt="">
                            </td>
                            <td>{{$cart->price->product->title}}</td>
                            <td>{{$cart->price->base_price}} €</td>
                            <td>
                                <div class="amount-button">
                                    <div class="cart-minus" data-url="{{route('front_cart_remove', ['price_id' => $cart->price_id, 'fingerprint' => $fingerprint])}}">
                                        <button>-</button>
                                    </div>
                                    <div class="amount-style">
                                        <input class="amount" name="amount" type="number"  value="{{$cart->amount}}">
                                    </div>
                                    <div class="cart-plus" data-url="{{route('front_cart_add', ['price_id' => $cart->price_id, 'fingerprint' => $fingerprint])}}">
                                        <button>+</button>
                                    </div>
                                </div>
                            </td>
                        @endforeach
                    @endif
                </form>
            </tr>
        </table>
    </div>
    <div class="cart-resume-table">
        <table>
        <caption>Resumen de la compra</caption>
            <tr>
                <th>IVA</th>
                <th>Precio Base total</th>
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
        <div class="cart-buttons">
            <div class="cancel-button">
                <button>Atrás</button>
            </div>
            <div class="buy-button" data-url="{{route('front_checkout', ['fingerprint' => $fingerprint])}}">
                <button>Comprar</button>
            </div>
        </div>
    </div>
</div>