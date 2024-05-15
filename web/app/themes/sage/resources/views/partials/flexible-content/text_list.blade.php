@php
    $label = $content['label'];
    $title = $content['title'];
    $text = $content['text'];
    $list = $content['list'];
@endphp

<section class="section section--text-list">
    <div class="container">
        <div class="row justify-content-space-between">
            <div class="col-lg-6">
                <div class="text-list__intro">
                    @if ($label)
                        <div class="label" data-animate="fade-in-top">{{ $label }}</div>
                    @endif

                    @if ($title)
                        <h2 class="text-list__title" data-animate="fade-in-top">{{ $title }}</h2>
                    @endif

                    @if($text)
                        <div data-animate="fade-in-top">{!! $text !!}</div>
                    @endif
                </div>
            </div>

            @if($list)
                <div class="col-lg-6 offset-xxl-1 col-xxl-5">
                    <div class="text-list__list">
                        @foreach ($list as $key => $item)
                            @php( $item = $item['link'])

                            @if ($item['url'])
                                <a href="{{ $item['url'] }}" class="text-list__item" target="{{ $item['target'] ? $item['target'] : '_self' }}" title="{{ $item['title'] }}" data-animate="fade-in-left" data-animate-delay="{{ $key * .15 }}">
                                    <span class="h5">{!! $item['title'] !!}</span>
                                    <i class="icon-arrow-right-circle"></i>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>