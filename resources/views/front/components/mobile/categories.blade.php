<div class="products-categories-elements">
    <div class="products-categories-title">
        <label for="">Roles de juego</label>
    </div>
    <form action="">
        <select name="" class="select-roles">
            <option value="all">Todas las categorías</option>
            @foreach($product_categories as $product_category)
                <option data-url="{{route('front_product_by_category', ['product' => $product->id, 'product_category' => $product_category->id])}}">{{$product_category->name}}</option>
            @endforeach
        </select>
    </form>
</div>