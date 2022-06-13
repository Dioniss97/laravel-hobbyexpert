<header>
    <div class="desktop-two-columns">
        <div class="column">
            <div class="header-logo">
                <div class="desktop-two-columns">
                    <div class="column">
                        <div class="header-logo-img">
                            <img src="img/AK47.svg" alt="ak47">
                        </div>
                        <div class="header-hamburger mobile-only">
                            <div class="index hamburger " id="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="header-logo-title">
                            <h1>Hobby Expert</h1>
                        </div>
                        <div class="header-logo-subtitle desktop-only">
                            <h3>Distribuidor de equipación y réplicas de Airsoft</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            @if($agent->isDesktop())
                @include('front.components.desktop.header-menu')
            @endif
            @if($agent->isMobile())
                @include('front.components.mobile.header-menu')
            @endif
        </div>
    </div>
</header>