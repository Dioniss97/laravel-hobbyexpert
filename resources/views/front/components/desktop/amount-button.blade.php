<form class="front-form" action="">
    <input class="id-price" type="hidden" name="id" value="{{isset($product->price->id) ? $product->price->id : ""}}">
    <div class="amount-button">
        <div class="minus">
            <button>-</button>
        </div>
        <div class="amount-style">
            <input class="amount" type="number" value="1">
        </div>
        <div class="plus">
            <button>+</button>
        </div>
    </div>
</form>