<form class="front-form" action="{{route('front_cart_store')}}">
    {{-- Aquí recibo el valor de la clave foranea del producto llamada (price_id) --}}
    <input class="id-price" type="hidden" name="price_id" value="{{$product->prices->first()->id}}">
    <div class="amount-button">
        <div class="minus">
            <button>-</button>
        </div>
        <div class="amount-style">
            <input class="amount" name="amount" type="number" value="1">
        </div>
        <div class="plus">
            <button>+</button>
        </div>
    </div>
</form>