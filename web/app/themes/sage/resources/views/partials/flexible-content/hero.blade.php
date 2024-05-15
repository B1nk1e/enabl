@php
    $title = $content['title'];
    $text = $content['text'];
    $button_one = $content['button_one'];
    $button_two = $content['button_two'];
@endphp

<section class="section section--hero">
    <div class="container">
        @if ($title)
            <h1 data-animate="fade-to-top" data-animate-delay=".15">{{ $title }}</h1>
        @endif

        @if ($text)
            <div class="row">
                <div class="offset-md-2 col-md-10 offset-lg-4 col-lg-8 offset-xxl-6 col-xxl-6">
                    <div class="intro-text" data-animate="fade-to-top" data-animate-delay=".3">
                        {!! $text !!}
                    </div>

                    @if ($button_one && $button_two)
                        <div class="button-wrapper" data-animate="fade-to-top" data-animate-delay=".45">
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
        @endif
    </div>
</section>