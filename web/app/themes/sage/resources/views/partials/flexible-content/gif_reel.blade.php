@php
    $video = $content['video'];
@endphp

@if ($video)
    <section class="section section--gif-reel">
        <video src="{{ wp_get_attachment_url($video) }}" autoplay muted loop playsinline></video>
    </section>
@endif
