<div class="products">
    <div class="desktop-two-columns-aside">
        <div class="column-aside">
            <div class="products-categories">

                <div class="products-categories-elements">
                    <div class="products-categories-title">
                        <h3>Roles de juego</h3>
                    </div>
                    <ul>
                        @if(isset($product_categories))
                            @foreach($product_categories as $product_category)
                                <li class="category-target" data-url="{{route('front_products_by_category', ['product_category' => $product_category->id])}}"><h2>{{$product_category->title}}</h2></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                {{-- @if($agent->isDesktop())
                    @include('front.components.desktop.categories')
                @endif

                @if($agent->isMobile())
                    @include('front.components.mobile.categories')
                @endif --}}
            </div>
        </div>
        <div class="column-main">
            <div class="desktop-one-column">
                <div class="products-filter">
                    <div class="products-filter-elements">
                        <div class="products-filter-title">
                            <label for="">Ordenar precios:</label>
                        </div>
                        <div class="products-filter-select">
                            <select class="order-by-select" name="order-by" id="">
                                <option class="order-by-option" value="{{route('front_products')}}">Por...</option>
                                <option class="order-by-option" value="{{route('front_product_index_by_price', ['order' => 'asc'])}}">Precios ascendentes</option>
                                <option class="order-by-option" value="{{route('front_product_index_by_price', ['order' => 'desc'])}}">Precios descendentes</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products-gallery">
                @if(isset($products))
                    @foreach($products as $product)
                        <div class="product">
                            <div class="product-window">
                                <div class="product-window-price">
                                    <span>{!!$product->price!!}</span>
                                </div>
                                <div class="product-window-image">
                                    <img src="img/ak47.webp" alt="ak47">
                                </div>
                            </div>
                            <div class="product-title">
                                <h4>{!!$product->title!!}</h4>
                            </div>
                            <div class="product-view-button"  data-url="{{route('front_product', ['product' => $product->id])}}">
                                <button>Ver producto</button>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>