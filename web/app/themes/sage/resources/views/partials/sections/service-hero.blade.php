@php
    $title = get_the_title();
    $text = get_field('service_text');
    $button = get_field('service_button');
    $image = get_field('service_image');
@endphp

<section class="section section--service-hero">
    <div class="service-hero__content {{ $image ? '' : 'no-image' }}">
        <div class="container">
            @if ($title)
                <h1 data-animate="fade-to-top" data-animate-delay=".15">{!! $title !!}</h1>
            @endif

            @if ($text)
                <div class="row">
                    <div class="offset-md-2 col-md-10 offset-lg-4 col-lg-8 offset-xxl-6 col-xxl-6">
                        <div class="intro-text" data-animate="fade-to-top" data-animate-delay=".3">
                            {!! $text !!}
                        </div>

                        <div class="button-wrapper" data-animate="fade-to-top" data-animate-delay=".45">
                            @if($button && $button['url'])
                                <a href="{{ $button['url'] }}" class="btn btn--cola" target="{{ $button['target'] ? $button['target'] : '_self' }}" title="{{ $button['title'] }}">{{ $button['title'] }}</a>
                            @endif
                            
                            <a href="#scroll" class="btn btn--ol js-scroll" title="{{ __('Read more', 'sage') }}" data-animate="fade-to-top" data-animate-delay=".45">{{ __('Read more', 'sage') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    @if ($image)
        <div class="container">
            <div class="service-hero__figure">
                <figure data-animate="fade-to-top">
                    @include('components.picture', ['imageID' => $image])
                </figure>
            </div>
        </div>
    @endif

    <div id="scroll"></div>
</section>