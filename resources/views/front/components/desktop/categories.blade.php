{{-- <div class="products-categories-elements">
    <div class="products-categories-title">
        <h3>Roles de juego</h3>
    </div>
    <ul>
        <li><a href="products.html">Fusilero</a></li>
        <li><a href="products.html">Artillero</a></li>
        <li><a href="products.html">Tirador selecto</a></li>
        <li><a href="products.html">Francotirador</a></li>
    </ul>
</div>

<div class="products-categories-elements">
    <div class="products-categories-title">
        <label for="">Roles de juego</label>
    </div>
    <form action="">
        <select name="" class="select-roles">
            <option value="all">Todas las categorías</option>
            @foreach($product_categories as $product_category)
                <option data-url="{{route('front_product_by_category', ['product_category' => $product_category->id])}}">{{$product_category->title}}</option>
            @endforeach
        </select>
    </form>
</div> --}}