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
                    <th>IVA</th>
                    <th>Precio Base total</th>
                    <th>IVA a pagar</th>
                    <th>Total</th>
                </tr>
                @if(isset($carts))
                    @foreach($carts as $cart)
                        <tr>
                            <td>{{$cart->price->tax->type}} %</td>
                            <td>{{$cart->price->base_price * $cart->amount}} €</td>
                            <td>{{$totalPrices * ($cart->price->tax->multiplicator - 1)}} €</td>
                            <td>{{$totalPrices * $cart->price->tax->multiplicator}} €</td>
                        </tr>
                    @endforeach
                @endif
        </table>
        <div class="cart-buttons">
            <div class="cancel-button">
                <button>Atrás</button>
            </div>
            {{-- Intenté pasar las variables "$totalPrices" y "$carts" por URL pero carts daba problemas, 
            luego intenté pasar el fingerprint para luego en el controlador usarlo para
            construir esas dos variables que me interesan para el checkout. --}}
            <div class="purchase-button" data-url="{{route('front_checkout')}}">
                <button>Comprar</button>
            </div>
        </div>
    </div>
</div>