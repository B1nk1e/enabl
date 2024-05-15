@php
    $subtitle = $content['subtitle'];   
    $title = $content['title'];   
    $text = $content['text'];   
    $button = $content['button'];   
    $news = $content['news_relation'];
    
    if (!$news) {
        $query = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' =>  2,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ) );
        $news = $query->posts;
    }
@endphp

@if ($news)
    <section class="section section--news">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="news__intro">
                        @if ($subtitle)
                            <div class="label" data-animate="fade-to-top">{{ $subtitle }}</div>
                        @endif

                        @if ($title)
                            <h2 class="news__intro-title" data-animate="fade-to-top" data-animate-delay=".15">{{ $title }}</h2>
                        @endif

                        @if ($text)
                            <div data-animate="fade-to-top" data-animate-delay=".3">
                                {!! $text !!}
                            </div>
                        @endif

                        @if ($button && $button['url'])
                            <a href="{{ $button['url'] }}" class="btn" target="{{ $button['target'] ? $button['target'] : '_self' }}" title="{{ $button['title'] }}" data-animate="fade-to-top" data-animate-delay=".45">{{ $button['title'] }}</a>
                        @endif
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-6">
                    <div class="news__latest">
                        @foreach ($news as $item)
                            @include('components.card.news', [
                                'id' => $item->ID,
                                'class' => 'card--news-latest'
                            ])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif