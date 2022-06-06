<div class="products">
    <div class="desktop-two-columns-aside">
        <div class="column-aside">
            <div class="products-categories">
                @if($agent->isDesktop())
                    @include('front.components.desktop.categories')
                @endif

                @if($agent->isMobile())
                    @include('front.components.mobile.categories')
                @endif
            </div>
        </div>
        <div class="column-main">
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
                            <div class="product-view-button">
                                <button>Ver producto</button>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>