@if($agent->isDesktop())
    <link rel="stylesheet" href="sass\front\app.scss.css">
@endif

@if($agent->isMobile())
    <link rel="stylesheet" href="sass\front\app-mobile.scss.css">
@endif