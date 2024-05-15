@if ($steps)
    <section class="section section--text-slider section--about-steps {{ $images ? 'has-slider' : '' }}">
        <div class="text-slider__intro">
            <div class="container">
                @if ($stepsLabel || $stepsTitle)
                    <div class="about-steps__intro">
                        <div class="row">
                            <div class="col-lg-10">
                                @if ($stepsLabel)
                                    <div class="about-steps__label" data-animate="fade-to-top">
                                        <i class="icon-star"></i> {{ $heroLabel }}
                                    </div>
                                @endif
                    
                                @if ($stepsTitle)
                                    <h2 data-animate="fade-to-top" data-animate-delay=".15">{{ $stepsTitle }}</h2>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

                <div class="about-steps">
                    @foreach ($steps as $key => $step)
                        <div class="row step__item">
                            <div class="col-12 col-lg-{{ 12 / count($steps) }}" data-animate="fade-to-top">
                                <div class="step__key">{{ sprintf("%02d", $key + 1) }}</div>
                                @if ($title = $step['title'])
                                    <h3>{{ $title }}</h3>
                                @endif

                                @if ($text = $step['text'])
                                    <div class="step__content">{!! $text !!}</div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
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
@endif