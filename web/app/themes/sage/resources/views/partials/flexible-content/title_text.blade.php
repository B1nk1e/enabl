@php
    $title   = $content['title'];
    $text    = $content['text'];
@endphp

@if($title || $text)
    <section class="section section--title-text">
        <div class="container">
            <div class="row">
                @if ($title)
                    <div class="col-lg-6" data-animate="fade-to-top">
                        <h2 class="h3">{!! $title !!}</h2>
                    </div>
                @endif

                @if ($text)
                    <div class="col-lg-6" data-animate="fade-to-top" data-animate-delay=".15">
                        <div class="title-text__content">
                            {!! $text !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif