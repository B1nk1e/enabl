@php
    $image = $deck['image'];
    $title = $deck['title'];
    $text  = $deck['text'];
    $file  = $deck['file'];
@endphp

@if ($image)
    <div class="card card--deck {{ $file ? '' : 'disabled' }}" data-animate="fade-in" data-animate-delay="{{ ($index + 1) * .15 }}">
        @if ($file)
            <a href="{{ $file['url'] }}" class="card-anchor" download></a>
        @endif

        <figure class="card-figure">
            @include('components.picture', ['imageID' => $image])
        </figure>

        <div class="card-inner">
            <div class="card-content">
                @if ($title)
                    <div class="card-title">{{ $title }}</div>
                @endif

                @if ($text)
                    <div class="card-text">{{ $text }}</div>
                @endif
            </div>

            <div class="button-wrapper">
                <div class="btn btn--text btn--il">
                    <i class="icon-download"></i>

                    @if ($file)
                        <span>{{ __('Download file', 'sage') }}<span>({{ $file['subtype'] }})</span></span>

                    @else
                        <span>{{ __('Coming soon', 'sage') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif