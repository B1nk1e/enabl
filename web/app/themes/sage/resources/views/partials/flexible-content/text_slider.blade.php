@php
    $title      = $content['title'];
    $text       = $content['text'];
    $button_one = $content['button_one'];
    $button_two = $content['button_two'];
    $images     = $content['images'];
@endphp

<section class="section section--text-slider {{ $images ? 'has-slider' : '' }}">
    <div class="text-slider__intro">
        <div class="container">
            @if ($title)
                <div class="row">
                    <div class="col-lg-11 col-xxl-10">
                        <h2 data-animate="fade-in-top">{{ $title }}</h2>
                    </div>
                </div>
            @endif

            @if ($text)
                <div class="row">
                    <div class="offset-lg-2 col-lg-9 offset-xxl-3 col-xxl-7">
                        <div class="intro-text" data-animate="fade-in-top">
                            {!! $text !!}
                        </div>

                        @if (($button_one && $button_one['url']) || ($button_two && $button_two['url']))
                            <div class="button-wrapper" data-animate="fade-to-top">
                                @if ($button_one && $button_one['url'])
                                    <a href="{{ $button_one['url'] }}" class="btn btn--cola" target="{{ $button_one['target'] ? $button_one['target'] : '_self' }}" title="{{ $button_one['title'] }}">{{ $button_one['title'] }}</a>
                                @endif
                                
                                @if ($button_two && $button_two['url'])
                                    <a href="{{ $button_two['url'] }}" class="btn btn--ol" target="{{ $button_two['target'] ? $button_two['target'] : '_self' }}" title="{{ $button_two['title'] }}">{{ $button_two['title'] }}</a>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>

    @if ($images)
        <div class="text-slider__container">
            <div class="container">
                <div class="text-slider__wrapper">
                    <div class="text-slider__slider">
                        @foreach($images as $key => $image)
                            <div class="text-slider__item" data-animate="fade-in-top" data-animate-delay="{{ $key * .15 }}">
                                <figure>
                                    @include('components.picture', ['imageID' => $image])
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>