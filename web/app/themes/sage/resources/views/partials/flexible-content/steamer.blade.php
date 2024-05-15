@php
    $text = $content['text'];
    $speed = $content['speed'];
@endphp

@if ($text)
    <section class="section section--streamer" data-animate="fade-to-top">
        <div class="reel" @if($speed)style="--animation-speed: {{ $speed }}s"@endif>
            <div class="reel__track">
                @foreach (range(1, 4) as $a)
                    <div class="reel__item">
                        @foreach (range(1, 10) as $b)
                            <span>{{ $text }}</span>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif