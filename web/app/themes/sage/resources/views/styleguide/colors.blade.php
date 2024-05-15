@php
    $colors = [
    'primary' => [
        [
            'name' => 'purple',
            'hex'  => '#331732',
        ],
        [
            'name' => 'barbie',
            'hex'  => '#F4B5E5',
        ],
        [
            'name' => 'eminence',
            'hex'  => '#712791',
        ],
    ],
    'grayscale' => [
        [
            'name' => 'milk',
            'hex'  => '#fff',
        ],
        [
            'name' => 'cola',
            'hex'  => '#000',
        ],
        [
            'name' => 'concrete',
            'hex'  => '#878787',
        ],
        [
            'name' => 'baltic',
            'hex'  => '#272727',
        ],
        [
            'name' => 'dark',
            'hex'  => '#1D1D1D',
        ],
        [
            'name' => 'cow',
            'hex'  => '#4A4A4A',
        ],
        [
            'name' => 'ash',
            'hex'  => '#181818',
        ],
    ],
]
@endphp

<section class="section section--colors">
    <div class="container">
        <div class="section__body">
            <div class="section__header">
                <h2 class="section__title">Colors</h2>
            </div>
            <div class="section__content">
                <div class="row">
                    @foreach($colors as $key => $color_categoy)
                        <div class="col-md-auto holder">
                            <h3 class="subtitle">{{ $key }}</h3>
                            <div class="row">
                                @foreach($color_categoy as $color)
                                    <div class="col-6 col-sm-auto">
                                        <div class="color">
                                            <div class="color__item bg-{{ $color['name'] }}"></div>
                                            <div class="color__footer">
                                                <span class="color__title">{{ $color['name'] }}</span>
                                                <span class="color__hex">{{ $color['hex'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
