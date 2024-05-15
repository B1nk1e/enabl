@php
    $images = $content['images'];
@endphp

@if ($images)
    <section class="section section--images">
        <div class="container">
            <div class="images__grid">
                @foreach($images as $key => $image)
                    <div class="images__item" data-animate="fade-in" data-animate-delay="{{ $key * .3 }}">
                        @include('components.picture', ['imageID' => $image])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif