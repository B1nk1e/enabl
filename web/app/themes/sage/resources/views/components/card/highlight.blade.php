@php
    $title   = get_the_title($id);
    $authors = get_field('news_author', $id);
    $chatgpt = get_field('news_chatgpt', $id);
    $image   = get_post_thumbnail_id($id);

    if (empty($class)) {
        $class = '';
    }
@endphp

@if ($image)
    <div class="card card--highlight">
        <a href="{{ get_the_permalink($id) }}" class="card-anchor"></a>
        <div class="card-inner">
            <div class="card-content">
                @if ($title)
                    <div class="card-title h4">{{ $title }}</div>
                @endif

                @if($authors || $chatgpt)
                    @include('components.author')
                @endif
            </div>

            <div class="button-wrapper">
                <button class="btn">{{ __('Read more', 'sage') }}</button>
            </div>
        </div>

        <figure class="card-figure">
            @include('components.picture', ['imageID' => $image])
        </figure>
    </div>
@endif