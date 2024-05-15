@php
    $label = $content['label'];
    $title = $content['title'];
    $text  = $content['text'];
    $decks = get_field('decks_repeater', 'options');
@endphp

@if($decks)
    <section class="section section--decks">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-lg-7 col-xxl-5">
                    <div class="decks__intro" data-animate="fade-to-top">
                        @if ($label)
                            <div class="label">{{ $label }}</div>
                        @endif

                        @if ($title)
                            <h2 class="decks__title">{{ $title }}</h2>
                        @endif

                        {!! $text !!}
                    </div>
                </div>
            </div>

            <div class="decks__overview">
                @foreach ($decks as $key => $deck)
                    @include('components.card.deck', ['item' => $deck, 'index' => $key])
                @endforeach
            </div>
        </div>
    </section>
@endif