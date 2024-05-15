@php
    $title = $content['title'];
    $button = $content['button'];
    $cases = $content['cases_relation'];

    if (!$cases) {
        $query = new WP_Query( array(
            'post_type'      => 'cases',
            'posts_per_page' =>  2,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ) );
        $cases = $query->posts;
    }
@endphp

@if ($cases)
    <section class="section section--cases">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-6">
                    <div class="cases__intro">
                        @if ($title)
                            <h2 data-animate="fade-in-top">{{ $title }}</h2>
                        @endif

                        @if ($button && $button['url'])
                            <a href="{{ $button['url'] }}" class="btn" target="{{ $button['target'] ? $button['target'] : '_self' }}" title="{{ $button['title'] }}" data-animate="fade-in-top">{{ $button['title'] }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="cases__highlight">
            <div class="container">
                <div class="cases__overview">
                    @foreach ($cases as $case)
                        @include('components.card.case', ['id' => $case->ID])
                    @endforeach
                </div>
            </div>

            <div class="reel" data-animate="parallex">
                <div class="reel__track">
                    @foreach (range(1, 4) as $a)
                        <div class="reel__item">
                            @foreach (range(1, 10) as $b)
                                <span>{{ __('werk ', 'sage') }}</span>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif