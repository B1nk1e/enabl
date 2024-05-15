@php
    $title = $content['title'];
    $text = $content['text'];
@endphp

<section class="section section--hero section--hero-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-xxl-7">
                @if ($title)
                    <h1 class="h2" data-animate="fade-to-top" data-animate-delay=".15">{{ $title }}</h1>
                @endif
            </div>

            @if ($text)
                <div class="col-lg-8 col-xxl-6">
                    <div class="intro-text" data-animate="fade-to-top" data-animate-delay=".3">
                        {!! $text !!}
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>