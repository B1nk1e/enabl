@php
    $label  = $content['label'];   
    $title  = $content['title'];
    $text   = $content['text'];
    $slides = $content['slides'];
@endphp

@if ($slides)
    <section class="section section--workflow-slider">
        <div class="container">

            {{-- SLIDER MOBILE --}}
            <div class="d-lg-none">
                @if($label || $title || $text)
                    <div class="workflow-slide" data-animate="fade-to-top">
                        <div class="workflow-slide__intro">
                            @if ($label)
                                <div class="workflow__label">
                                    <i class="icon-star"></i> {{ $label }}
                                </div>
                            @endif

                            @if ($title)
                                <h2 class="workflow-slide__title">{{ $title }}</h2>
                            @endif
                        </div>
                    </div>
                @endif

                <div class="workflow-slider">
                    @foreach ($slides as $key => $slide)
                        <div class="workflow-slide" data-animate="fade-to-top" data-animate-delay="{{ ($key + 1) * .15 }}">
                            <div class="workflow-slide__inner">
                                @php
                                    $slideTitle = $slide['title'];
                                    $slideText = $slide['text'];
                                @endphp
                                
                                <div class="label">{{ __('Step', 'sage') }} {{ sprintf("%02d", $key + 1) }}</div>

                                @if ($slideTitle)
                                    <h3 class="h4">{{ $slideTitle }}</h3>
                                @endif

                                @if ($slideText)
                                    <div class="workflow__content">
                                        {!! $slideText !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- SLIDER DESKTOP --}}
            <div class="d-none d-lg-block">
                <div class="workflow-slider">
                    @if($label || $title || $text)
                        <div class="workflow-slide" data-animate="fade-to-top">
                            <div class="workflow-slide__intro">
                                @if ($label)
                                    <div class="workflow__label">
                                        <i class="icon-star"></i> {{ $label }}
                                    </div>
                                @endif
    
                                @if ($title)
                                    <h2 class="h3">{{ $title }}</h2>
                                @endif
    
                                @if ($text)
                                    <div class="workflow__content">
                                        {!! $text !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif

                    @foreach ($slides as $key => $slide)
                        <div class="workflow-slide" data-animate="fade-to-top" data-animate-delay="{{ ($key + 1) * .15 }}">
                            <div class="workflow-slide__inner">
                                @php
                                    $slideTitle = $slide['title'];
                                    $slideText = $slide['text'];
                                @endphp
                                
                                <div class="label">{{ __('Step', 'sage') }} {{ sprintf("%02d", $key + 1) }}</div>

                                @if ($slideTitle)
                                    <h3 class="h4">{{ $slideTitle }}</h3>
                                @endif

                                @if ($slideText)
                                    <div class="workflow__content">
                                        {!! $slideText !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif