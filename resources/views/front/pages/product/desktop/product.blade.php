<div class="product-view">
    <div class="desktop-two-columns">
        <div class="column">
            <div class="product-view-slider">
                <div class="product-view-slider-image">
                    <img src="img/ak47.webp" alt="fusil de asalto">
                </div>
                <div class="product-view-slider-miniatures desktop-only">
                    <div class="miniature">
                        <img src="img/slider-miniatures/fusilero/68490dd1c0959bc447e23aeb478dc4d61055c51a.webp"
                            alt="">
                    </div>
                    <div class="miniature">
                        <img src="img/slider-miniatures/fusilero/9b19f9fbe67cdd80afdd41331bbd25ffcb73d41a.webp"
                            alt="">
                    </div>
                    <div class="miniature">
                        <img src="img/slider-miniatures/fusilero/9d290fd6fd518203394fe8d6c6394bd4b36d0bc4.webp"
                            alt="">
                    </div>
                    <div class="miniature">
                        <img src="img/slider-miniatures/fusilero/a6258b02f01fc57c954c9e623a8d0695f9b33030.webp"
                            alt="">
                    </div>
                    <div class="miniature">
                        <img src="img/slider-miniatures/fusilero/e43165724a147f8d8252565f3b1cb525638b5223.webp"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="product-view-info">
                <div class="product-view-title">
                    <h3>{{$product->title}}</h3>
                </div>
                <div class="product-view-info-category">
                    <h2>{{$product->category->title}}</h2>
                </div>
                <div class="product-view-info-price">
                    <span>{{isset($product->prices->first()->base_price) ? $product->prices->first()->base_price : ""}} €</span>
                </div>
                <div class="product-view-info-amount">
                    <div class="amount-title">
                        <span>Cantidad solicitada:</span>
                    </div>
                    @include('front.components.desktop.amount-button')
                </div>
                <div class="product-view-info-add-to-cart">
                    <div class="add-to-cart-button" data-url="{{route('front-cart-add')}}">
                        <button>Añadir al carrito</button>
                    </div>
                    <div class="notification">
                        <p class="notification-message"></p>
                    </div>
                </div>
            </div>
            <div class="product-view-info-tabs">
                @if($agent->isDesktop())
                    @include('front.components.desktop.tabs')
                @endif
                @if($agent->isMobile())
                    @include('front.components.mobile.selectTabs')
                @endif
            </div>
        </div>
    </div>
</div>