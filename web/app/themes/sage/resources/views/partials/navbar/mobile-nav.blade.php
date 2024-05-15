@php
    $address    = get_field('address', 'options');
    $postalcode = get_field('postalcode', 'options');
    $town       = get_field('town', 'options');
    
    $linkedin   = get_field('linkedin', 'options');
    $instagram  = get_field('instagram', 'options');
    $email      = get_field('email', 'options');

    $navbarBtn  = get_field('navbar_button', 'options');
@endphp

<div class="mobile-nav">
    <div class="mobile-nav__top">
        <div class="container">
            <div class="row">
                <ul>
                    @foreach(App\custom_menu_object('primary_navigation') as $item)
                        <li role="none" class="nav-item">
                            @include('partials.navbar.item')
                        </li>
                    @endforeach
                </ul>

                <div class="mobile-nav__address">
                    <div class="mobile-nav__title">{{ __('Contact', 'sage') }}</div>
                    <div>
                        @if ($address)
                            <span>{{ $address}}</span>
                        @endif
                        @if ($postalcode)
                            <span>{{ $postalcode}}</span>
                        @endif
                        @if ($town)
                            <span>{{ $town}}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-nav__bottom">
        <div class="mobile-nav__social">
            @if ($linkedin)
                <a href="{{ $linkedin }}" target="_blank" title="LinkedIn"><i class="icon-linkedin"></i></a>
            @endif
            @if ($instagram)
                <a href="{{ $instagram }}" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            @endif
            @if ($email)
                <a href="mailto:{{ $email }}" target="_blank" title="E-mail"><i class="icon-envelop"></i></a>
            @endif
        </div>
        @if ($navbarBtn)
            <div class="container">
                <a href="{{ $navbarBtn['url'] }}" class="btn btn--cola" target="{{ $navbarBtn['target'] ? $navbarBtn['target'] : '_self' }}" title="{{ $navbarBtn['title'] }}">{{ $navbarBtn['title'] }}</a>
            </div>
        @endif
    </div>
</div>