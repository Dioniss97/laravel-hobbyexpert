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
                        <form class="front-form" action="">
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
                        </form>
                    @endforeach
                @endif
            </tr>
        </table>
    </div>
    <div class="cart-resume-table">
        <table>
            <caption>Resumen de la compra</caption>
                <tr>
                    <th>Producto</th>
                    <th>IVA</th>
                    <th>Precio Base total</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
                @if(isset($carts))
                    @foreach($carts as $cart)
                        <tr>
                            <td>{{$cart->price->product->title}}</td>
                            <td>{{$cart->price->tax->type}} %</td>
                            <td>{{$cart->price->base_price * $cart->amount}} €</td>
                            <td>{{$cart->amount}}</td>
                            <td>{{$cart->price->base_price * $cart->amount * $cart->price->tax->multiplicator}} €</td>
                        </tr>
                    @endforeach
                @endif
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