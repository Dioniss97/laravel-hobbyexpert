<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('front.layout.partials.styles')
    <title>Hobby Expert</title>
</head>

<body>
    @include('front.layout.partials.header')
    <main>
        <div class="faqs">
            <div class="faqs-header">
                <h3>Frequently Asked Questions</h3>
            </div>
            <div class="tab">
                <div class="question-header">
                    <div class="question">
                        <span>¿Lorem?</span>
                    </div>
                    <div class="arrow">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M17,14L12,9L7,14H17Z" />
                        </svg>
                    </div>
                </div>
                <div class="answer">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, distinctio quos? Excepturi,
                        voluptatibus quibusdam numquam provident illum aspernatur fugit iure repudiandae molestiae,
                        autem, eaque expedita inventore temporibus illo optio ab!
                    </p>
                </div>
            </div>

            <div class="tab">
                <div class="question-header">
                    <div class="question">
                        <span>¿Adipisicing?</span>
                    </div>
                    <div class="arrow">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M17,14L12,9L7,14H17Z" />
                        </svg>
                    </div>
                </div>
                <div class="answer">
                    <p>Adipisicing elit, Aperiam, dolorem! Aut facere quae, neque odio nobis possimus fugiat dignissimos
                        placeat, iure veniam quia impedit perspiciatis esse nemo officiis magnam velit?</p>
                </div>
            </div>

            <div class="tab">
                <div class="question-header">
                    <div class="question">
                        <span>¿Cumque?</span>
                    </div>
                    <div class="arrow">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M17,14L12,9L7,14H17Z" />
                        </svg>
                    </div>
                </div>
                <div class="answer">
                    <p>Cumque saepe obcaecati aut ullam aliquid hic voluptatum aperiam dolor vero velit. Molestiae rem
                        velit
                        asperiores dolor?</p>
                </div>
            </div>

            <div class="tab">
                <div class="question-header">
                    <div class="question">
                        <span>¿Quisquam?</span>
                    </div>
                    <div class="arrow">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M17,14L12,9L7,14H17Z" />
                        </svg>
                    </div>
                </div>
                <div class="answer">
                    <p>Quisquam reiciendis placeat fuga ratione sit? Autem recusandae, a fugiat vitae explicabo, sequi
                        est,
                        sint quos unde aliquid error enim laborum. Dicta.</p>
                </div>
            </div>
        </div>
    </main>
    @include('front.layout.partials.footer')
    @include('front.layout.partials.js')
</body>

</html>