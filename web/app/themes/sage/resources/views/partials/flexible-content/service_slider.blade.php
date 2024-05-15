@php
    $services = $content['services'];

    if (!$services) {
        $query = new WP_Query( array(
            'post_type'      => 'services',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ) );
        $services = $query->posts;
    }
@endphp

@if($services)
    <section class="section section--service-slider" id="service-slider" data-animate="fade-to-top">
        <div class="container">
            <div class="service-slider">
                <div class="service-slider__nav">
                    <div class="line"></div>

                    <div class="service-slider__nav-inner">
                        @foreach($services as $key => $item)
                            @php
                                $title = get_the_title($item);   
                            @endphp

                            <button>{!! $title !!}</button>
                        @endforeach
                    </div>
                </div>

                <div class="service-slider__slider">
                @foreach($services as $key => $item)
                    @php
                        $title = htmlspecialchars_decode(get_the_title($item));
                        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
                        $text = get_field('service_summary', $item);
                        $image = get_field('service_slider_img', $item);
                    @endphp

                    <div class="service-slide" data-slug="{{ $slug }}">
                        <div class="row row--service-slide justify-content-center">
                            @if ($image)
                                <div class="col-8 col-sm-6 col-md-4 offset-lg-1 col-lg-5 offset-xxl-2 col-xxl-4">
                                    <figure class="service-slider__img">
                                        @include('components.picture', ['imageID' => $image])
                                    </figure>
                                </div>
                            @endif

                            <div class="col-lg-6 col-xxl-5">
                                <div class="service-slider__content">
                                    <h2>{!! $title !!}</h2>

                                    @if($text)
                                        <div class="intro-text">
                                            {!! $text !!}
                                        </div>
                                    @endif

                                    {{-- <a href="{{ get_permalink($item) }}" class="service-slider__link" title="{{ __('Everything about', 'sage') }} {!! strtolower($title) !!}">
                                        <span>{{ __('Everything about', 'sage') }} {!! strtolower($title) !!}</span>
                                        <i class="icon-arrow-right"></i>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif