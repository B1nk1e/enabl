@php
    $text    = get_the_content();
    $authors = get_field('news_author');
    $chatgpt = get_field('news_chatgpt');
    $image   = get_post_thumbnail_id();

    if (get_post_type() == 'post') {
        $archiveLink = get_post_type_archive_link('post');
        $archiveText = __('Back to blogs', 'sage');
    } else {
        $archiveLink = get_field('vacancies_url', 'options');
        $archiveText = __('Back to vacancies', 'sage');
    }
@endphp

<section class="section section--blog-hero">
    @if ($archiveLink && $archiveText)
        <a href="{{ $archiveLink }}" class="back-btn" title="{{ $archiveText }}" data-animate="fade-to-top">
            <i class="icon-arrow-left"></i> {{ $archiveText }}
        </a>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-xxl-7">
                <h1 class="h3" data-animate="fade-to-top" data-animate-delay=".15">{{ the_title() }}</h1>

                @if($authors || $chatgpt)
                    <div data-animate="fade-to-top" data-animate-delay=".3">
                        @include('components.author')
                    </div>
                @endif

                @if (get_post_type() == 'vacancy')
                    @php
                        $level    = get_field('level');   
                        $time     = get_field('time');   
                        $location = get_field('location');   
                    @endphp

                    <div class="blog-hero__specs" data-animate="fade-to-top" data-animate-delay=".45">
                        @if ($level)
                            <span>{{ $level }}</span>
                        @endif
                        @if ($time)
                            <span>{{ $time }}</span>
                        @endif
                        @if ($location)
                            <span>{{ $location }}</span>
                        @endif
                    </div>
                @endif

                @if($text)
                    <div class="blog-hero__intro {{ get_post_type() == 'post' ? 'blog' : '' }}" data-animate="fade-to-top" data-animate-delay=".45">
                        {!! $text !!}
                    </div>
                @endif

                <div class="button-wrapper">
                    @if (get_post_type() == 'post')
                        <a href="#scroll" class="btn js-scroll" title="{{ __('Read more', 'sage') }}" data-animate="fade-to-top" data-animate-delay=".6">{{ __('Read more', 'sage') }}</a>
                    @else
                        <a href="#apply" class="btn js-scroll" title="{{ __('Apply now', 'sage') }}" data-animate="fade-to-top" data-animate-delay=".6">{{ __('Apply now', 'sage') }}</a>
                    @endif
                </div>
            </div>
        </div>

        @if ($image)
            <figure class="blog-hero__figure" data-animate="fade-to-top">
                @include('components.picture', ['imageID' => $image])
            </figure>
        @endif
    </div>
    <div id="scroll"></div>
</section>