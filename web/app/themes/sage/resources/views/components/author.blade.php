<div class="author-wrapper">
    @if($authors)
        @foreach($authors as $author)
            @php
                $authorTitle = get_the_title($author);
                $authorImage = get_field('image_news', $author);
            @endphp

            <div class="author">
                @if ($authorImage)
                    <figure class="author__img">
                        @include('components.picture', ['imageID' => $authorImage])
                    </figure>
                @endif
                <span>{{ $authorTitle }}</span>
            </div>
        @endforeach
    @endif

    @if($chatgpt)
        <div class="author author--chatgpt">
            <span class="author__img">
                <i class="icon-chevron-right"></i>
            </span>
            <span>ChatGTP</span>
        </div>
    @endif
</div>