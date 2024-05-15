@php
    $post = get_queried_object();
    $highlighted = '';

    if (is_home()) {
        $title = get_field('news_overview_title', $post);
        $text = get_field('news_overview_text', $post);
        $highlighted = get_field('news_overview_highlight', $post);
    } else {
        $title  = $post->name;
        $text = $post->description;
    }
@endphp

@if($title || $text)
    <section class="section section--news-hero {{ $highlighted ? 'has-highlight' : '' }}">
        <div class="container">
            <div class="news-hero__intro">
                @if ($title)
                    <div class="row" data-animate="fade-to-top">
                        <div class="col-md-10 col-lg-8 offset-xxl-1 col-xxl-7">
                            <h1 class="news-hero__title">{{ $title }}</h1>
                        </div>
                    </div>
                @endif

                @if ($text)
                    <div class="row" data-animate="fade-to-top" data-animate-delay=".3">
                        <div class="offset-md-2 col-md-10 offset-lg-4 col-lg-8 offset-xxl-6 col-xxl-5">
                            {!! $text !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif