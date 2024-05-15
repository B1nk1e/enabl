@php
    $leftTitle  = $content['left_title'];
    $leftButton = $content['left_button'];
    $leftText   = $content['left_text'];

    $rightTitle  = $content['right_title'];
    $rightButton = $content['right_button'];
    $rightText   = $content['right_text'];
@endphp

<section class="section section--single-footer section--single-footer--cta">
    <div class="container">
        <div class="single-footer__grid">
            @if($leftTitle || $leftText)
                <div class="single-footer__item" data-animate="fade-to-top" data-animate-delay=".15">
                    @if ($leftTitle)
                        <div class="single-footer__title h3">{!! $leftTitle !!}</div>
                    @endif

                    @if ($leftText)
                        <div class="single-footer__content">{!! $leftText !!}</div>
                    @endif

                    @if($leftButton && $leftButton['url'])
                        <div class="button-wrapper">
                            <a href="{{ $leftButton['url'] }}" class="btn btn" target="{{ $leftButton['target'] ? $leftButton['target'] : '_self' }}" title="{{ $leftButton['title'] }}">{{ $leftButton['title'] }}</a>
                        </div>
                    @endif
                </div>
            @endif

            @if($rightTitle || $rightText)
                <div class="single-footer__item" data-animate="fade-to-top" data-animate-delay=".3">
                    @if ($rightTitle)
                        <div class="single-footer__title h3">{!! $rightTitle !!}</div>
                    @endif

                    @if ($rightText)
                        <div class="single-footer__content">{!! $rightText !!}</div>
                    @endif

                    @if($rightButton && $rightButton['url'])
                        <div class="button-wrapper">
                            <a href="{{ $rightButton['url'] }}" class="btn btn--cola" target="{{ $rightButton['target'] ? $rightButton['target'] : '_self' }}" title="{{ $rightButton['title'] }}">{{ $rightButton['title'] }}</a>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
</section>