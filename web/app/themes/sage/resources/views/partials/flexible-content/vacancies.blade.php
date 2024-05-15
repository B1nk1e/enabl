@php
    $vacancies = $content['vacancies'];

    if (!$vacancies) {
        $query = new WP_Query( array(
            'post_type'      => 'vacancy',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ) );
        $vacancies = $query->posts;
    }
@endphp

@if($vacancies)
    <section class="section section--vacancies">
        <div class="container">
            <div class="vacancies__list">
                @foreach($vacancies as $item)
                    @php
                        $title    = get_the_title($item);   
                        $level    = get_field('level', $item);   
                        $time     = get_field('time', $item);   
                        $location = get_field('location', $item);   
                    @endphp

                    <div class="vacancy-item" data-animate="fade-to-top">
                        <a href="{{ get_permalink($item) }}" class="vacancy-item__anchor"></a>
                        <div class="vacancy-item__title h3">{{ $title }}</div>
                        <div class="vacancy-item__spec">
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
                        <div class="vacancy-item__link">{{ __('View vacancy', 'sage') }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif