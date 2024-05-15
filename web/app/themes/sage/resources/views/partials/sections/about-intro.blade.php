<section class="section section--about-intro">
    <div class="container">
        <div class="row">
            @if ($introTitle || $introText)
                <div class="col--content" data-animate="fade-to-top">
                    <div class="intro__content">
                        @if ($introTitle)
                            <h2 class="about-intro__title">{{ $introTitle }}</h2>
                        @endif

                        @if ($introText)
                            <div class="intro__text">
                                {!! $introText !!}
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            @if ($introImageLeft)
                <div class="col-12 col-md-5 col--image-left" data-animate="fade-to-top" data-animate-delay=".15">
                    <figure class="intro__image-left">
                        @include('components.picture', ['imageID' => $introImageLeft])
                    </figure>
                </div>
            @endif

            @if ($introImageRight)
                <div class="d-none d-md-block offset-md-0 col-md-7 offset-lg-7 col-lg-5 col--image-right">
                    <figure class="intro__image-right" data-animate="fade-to-top">
                        @include('components.picture', ['imageID' => $introImageRight])
                    </figure>
                </div>
            @endif
        </div>
    </div>
</section>