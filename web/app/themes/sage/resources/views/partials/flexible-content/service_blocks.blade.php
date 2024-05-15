@php
    $title = $content['title'];
    $button = $content['link'];
    $services = $content['services'];

    if (!$services) {
        $query = new WP_Query( array(
            'post_type'      => 'services',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ) );
        $services = $query->posts;
    }
@endphp

@if($services)
    <section class="section section--service-blocks">
        <div class="container">
            <div class="service-blocks__header">
                @if ($title)
                    <h2 class="h5" data-animate="fade-to-top">{{ $title }}</h2>
                @endif

                @if($button && $button['url'])
                    <div class="d-none d-md-block">
                        <a href="{{ $button['url'] }}" class="btn" target="{{ $button['target'] ? $button['target'] : '_self' }}" title="{{ $button['title'] }}" data-animate="fade-to-top" data-animate-delay=".15">{{ $button['title'] }}</a>
                    </div>
                @endif
            </div>
                    
            <div class="service-blocks__services">
                @foreach($services as $key => $item)
                    @php
                        $serviceTitle = get_the_title($item);   
                    @endphp

                    <a href="{{ get_permalink($item) }}" class="service-block" title="{!! $serviceTitle !!}" data-animate="fade-to-top" data-animate-delay="{{ ($key + 2) * .15 }}">
                        <i class="icon-plus"></i>
                        <span class="h5">{!! $serviceTitle !!}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif