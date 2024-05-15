@php
    $width = $content['width'];
    $text = $content['text'];
@endphp

@if($text)
    <section class="section section--text">
        <div class="container">
            <div class="row justify-content-center">
                <div class="{{ $width ? 'col-12' : 'col-md-9 col-xxl-7'}}" data-animate="fade-to-top">
                    {!! $text !!}
                </div>
            </div>
        </div>
    </section>
@endif
