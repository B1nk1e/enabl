@php
    if (empty($title)) {
        $title   = $content['title'];
    }
    $gallery = get_field('brand_logos', 'options');
@endphp

@if ($gallery)
    <section class="section section--logo-carrousel {{ $title ? '' : 'section--logo-carrousel--small'}}">
        @if ($title)
            <div class="logo-carrousel__intro" data-animate="fade-to-top">
                <div class="container">
                    <h2>{{ $title }}</h2>
                </div>
            </div>
        @endif

        <div class="container">
            <div class="slider" style="--data-count: {{ count($gallery) * 2 }}">
                <div class="slide-track">
                    @foreach($gallery as $key => $item)
                        <div class="slide" data-animate="fade-to-top" data-animate-delay="{{ $key * .15 }}">
                            @include('components.picture', ['imageID' => $item])
                        </div>
                    @endforeach

                    {{-- Duplicate logos --}}
                    @foreach($gallery as $key => $item)
                        <figure class="slide" data-animate="fade-to-top" data-animate-delay="{{ ($key + count($gallery)) * .15 }}">
                            @include('components.picture', ['imageID' => $item])
                        </figure>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif