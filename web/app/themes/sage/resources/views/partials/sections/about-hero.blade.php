<section class="section section--about-hero">
    <div class="container">
        @if ($heroLabel)
            <div class="hero__label" data-animate="fade-to-top">
                <i class="icon-star"></i> {{ $heroLabel }}
            </div>
        @endif

        @if ($heroTitle)
            <div class="hero__title" data-animate="fade-to-top" data-animate-delay=".15">
                <h1 class="big">{{ $heroTitle }}</h1>

                @foreach($heroPointers as $key => $pointer)
                    <div class="pointer" style="--pointer-color: {{ $pointer['color'] }}; top: {{ $pointer['top'] }}%; left: {{ $pointer['left'] }}%;">
                        <div class="pointer__inner" data-animate="fade-in" data-animate-delay="{{ .8 + ($key * .15) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"><path fill="{{ $pointer['color'] }}" stroke="#fff" stroke-linejoin="round" stroke-width="1.5" d="m1 1 7 19 2.051-6.154a6 6 0 0 1 3.795-3.795L20 8 1 1Z"/></svg>
                            {{ $pointer['name'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        @if ($heroText)
            <div class="hero__text h5" data-animate="fade-to-top" data-animate-delay=".3">
                {!! $heroText !!}
            </div>
        @endif
    </div>
</section>