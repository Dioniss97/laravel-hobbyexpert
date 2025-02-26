<div class="faqs-container">
    @if(isset($faqs))
        @foreach($faqs as $faq)
            <div class="accordion">
                <div class="accordion-header">
                    <div class="title">
                        <span>{!!$faq->title!!}</span>
                    </div>
                    <div class="arrow">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M17,14L12,9L7,14H17Z" />
                        </svg>
                    </div>
                </div>
                <div class="content">
                    <p>{!!$faq->description!!}</p>
                </div>
            </div>
        @endforeach
    @endif
</div>