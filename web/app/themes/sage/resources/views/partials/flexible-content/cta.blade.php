@php
    $title = $content['title'];
    $text = $content['text'];
    $button_one = $content['button_one'];
    $button_two = $content['button_two'];
@endphp

@if ($title || $text)
    <section class="section section--cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-fhd-8">
                    @if($title)
                        <h2 class="cta__title" data-animate="fade-to-top">{!! $title !!}</h2>
                    @endif

                    <div class="row">
                        <div class="col-10 col-lg-9 col-fhd-8">
                            @if ($text)
                                <div class="intro-text" data-animate="fade-to-top" data-animate-delay=".15">
                                    {!! $text !!}
                                </div>
                            @endif

                            @if ($button_one && $button_two)
                                <div class="button-wrapper" data-animate="fade-to-top" data-animate-delay=".3">
                                    @if($button_one && $button_one['url'])
                                        <a href="{{ $button_one['url'] }}" class="btn" target="{{ $button_one['target'] ? $button_one['target'] : '_self' }}" title="{{ $button_one['title'] }}">{{ $button_one['title'] }}</a>
                                    @endif
                                    @if($button_two && $button_two['url'])
                                        <a href="{{ $button_two['url'] }}" class="btn btn--secondary" target="{{ $button_two['target'] ? $button_two['target'] : '_self' }}" title="{{ $button_two['title'] }}">{{ $button_two['title'] }}</a>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif