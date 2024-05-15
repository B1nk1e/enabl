@php
    $title      = get_the_title($id);
    $label      = get_field('case_label', $id);
    $background = get_field('summary_background', $id);
    $image      = get_field('summary_image', $id);

    $terms      = get_the_terms($id, 'cases-category');
    $class      = '';

    if($terms) {
        foreach ($terms as $term) {
            $class = $class . ' ' . $term->slug;
        }
    }
@endphp

@if ($background)
    <div class="card card--case {{ $class }}" data-animate="fade-in-top">
        <a href="{{ get_the_permalink($id) }}" class="card-anchor"></a>
        <div class="card-figure">
            <figure class="card-bg">
                @include('components.picture', ['imageID' => $background])
            </figure>

            @if ($image)
                <figure class="card-image">
                    @include('components.picture', ['imageID' => $image])
                </figure>
            @endif

            <div class="card-content">
                @if ($label)
                    <div class="card-label">{{ $label }}</div>
                @endif
                @if ($title)
                    <div class="card-title h5">{{ $title }}</div>
                @endif
            </div>
        </div>
    </div>
@endif