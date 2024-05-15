@php
    $title      = get_field('form_title');
    $text       = get_field('form_text');
    $formID     = get_field('form_id');
    $image      = get_field('form_img');

    $address    = get_field('address', 'options');
    $postalcode = get_field('postalcode', 'options');
    $town       = get_field('town', 'options');
    $country    = get_field('country', 'options');

    $phone      = get_field('phone', 'options');
    $email      = get_field('email', 'options');
@endphp

@if($formID)
    <section class="section section--contact {{ $image ? '' : 'contact-no-image' }}">
        @if($image)
            <div class="contact__bg"></div>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xxl-5">
                    <div class="contact__block" data-animate="fade-to-top" data-animate-delay=".15">
                        <div class="contact__label">{{ __('Contact information', 'sage') }}</div>

                        <div class="contact__address">
                            @if ($address)
                                <span>{{ $address }}</span>
                            @endif
                            @if ($postalcode)
                                <span>{{ $postalcode }}</span>
                            @endif
                            @if ($town)
                                <span>{{ $town }}</span>
                            @endif
                            @if ($country)
                                <span>{{ $country }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="contact__block" data-animate="fade-to-top" data-animate-delay=".3">
                        <div class="contact__label">{{ __('Call or email', 'sage') }}!</div>

                        @if ($email)
                            <a href="mailto:{{ $email }}" title="{{ $email }}">
                                <span>{{ $email }}</span>
                            </a>
                        @endif
                        @if ($phone)
                            <a href="tel:{{ $phone }}" title="{{ $phone }}">
                                <span>{{ $phone }}</span>
                            </a>
                        @endif
                    </div>
                </div>

                @if ($formID)
                    <div class="offset-lg-1 col-lg-6" data-animate="fade-to-top" data-animate-delay=".45">
                        <div class="contact__form">
                            @if($title)
                                <h1 class="h2">{{ $title }}</h1>
                            @endif

                            @if($text)
                                <div class="contact__text">{!! $text !!}</div>
                            @endif

                            {!! do_shortcode('[gravityform id="' . $formID . '" title="false" ajax="true"]') !!}
                        </div>
                    </div>
                @endif
            </div>

            @if ($image)
                <figure class="contact__image" data-animate="fade-to-top">
                    @include('components.picture', ['imageID' => $image])
                </figure>
            @endif
        </div>
    </section>
@endif
