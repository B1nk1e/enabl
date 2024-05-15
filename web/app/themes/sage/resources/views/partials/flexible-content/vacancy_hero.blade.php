@php
    $label = $content['label'];
    $title = $content['title'];
    $text = $content['text'];
    $button = $content['button'];
    $images = $content['images'];
@endphp

<section class="section section--vacancy-hero">
    <div class="container">
        <div class="row">
            @if ($title)
                <div class="col-md-9 col-xxl-8 col-fhd-7">
                    <h1 class="h2" data-animate="fade-to-top" data-animate-delay=".15">{!! $title !!}</h1>
                </div>
            @endif

            <div class="col-md-7 col-xxl-6 col-fhd-5">
                @if ($text)
                    <div class="vacancy-hero__text" data-animate="fade-to-top" data-animate-delay=".3">{!! $text !!}</div>
                @endif

                @if ($button)
                    <div class="button-wrapper">
                        <a href="#scroll" class="btn js-scroll" target="_self" title="{{ $button }}" data-animate="fade-to-top" data-animate-delay=".45">{{ $button }}</a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @if ($images)
        <div class="vacancy-hero__images">
            @foreach ($images as $key => $image)
                <figure class="vacancy-hero__figure" data-animate="fade-to-top" data-animate-delay="{{ $key * .15 }}">
                    @include('components.picture', ['imageID' => $image])
                </figure>
            @endforeach
        </div>
    @endif

    <div id="scroll"></div>
</section>