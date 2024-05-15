@php
    $title = $content['title'];
    $text = $content['text'];
    $list = $content['list'];
@endphp

<section class="section section--text-specs">
    <div class="container">
        @if ($title)
            <h2 class="text-specs__title" data-animate="fade-to-top">{{ $title }}</h2>
        @endif

        <div class="row justify-content-space-between">
            <div class="col-lg-6">
                <div class="text-specs__intro" data-animate="fade-to-top" data-animate-delay=".3">
                    {!! $text !!}
                </div>
            </div>

            @if($list)
                <div class="offset-lg-1 col-lg-5">
                    <div class="text-specs__list">
                        @foreach ($list as $key => $item)
                            <div class="text-specs__item" data-animate="fade-to-left" data-animate-delay="{{ $key * .3 }}">
                                <span>{{ $item['label'] }}</span>
                                
                                @if ($item['type'] && $item['link'])
                                    <a href="{{ $item['link']['url'] }}" target="{{ $item['link']['target'] ? $item['link']['target'] : '_self' }}" title="{{ $item['link']['title'] }}">{{ $item['link']['title'] }}</a>
                                @else
                                    <span>{{ $item['text'] }}</span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>