@php
    $image = $content['image'];
@endphp

@if ($image)
    <section class="section section--banner">
        <figure data-animate="fade-in">
            @include('components.picture', ['imageID' => $image])
        </figure>
    </section>
@endif