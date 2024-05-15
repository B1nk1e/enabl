@php
    $title      = get_the_title($id);
    $image      = get_post_thumbnail_id($id);

    if (empty($class)) {
        $class = '';
    }
@endphp

@if ($image)
    <div class="card card--news {{ $class }}" data-animate="fade-to-top">
        <a href="{{ get_the_permalink($id) }}" class="card-anchor"></a>
        
        <figure class="card-figure">
            @include('components.picture', ['imageID' => $image])
        </figure>

        <div class="card-inner">
            <div class="card-content">
                @if ($title)
                    <div class="card-title h5">{{ $title }}</div>
                @endif
            </div>

            <div class="card-btn">
                <span>{{ __('Read more', 'sage') }}</span>
                <i class="icon-arrow-right"></i>
            </div>
        </div>
    </div>
@endif