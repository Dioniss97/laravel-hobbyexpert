@if($agent->isDesktop())
    <script type="module" src="{{mix('front/desktop/js/app.js')}}"></script>
@endif

@if($agent->isMobile())
    <script type="module" src="{{mix('front/mobile/js/app.js')}}"></script>
@endif