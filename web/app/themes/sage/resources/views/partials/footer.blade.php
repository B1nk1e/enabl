@php
    date_default_timezone_set('Europe/Amsterdam');

    $title      = get_field('footer_title', 'options');
    $button      = get_field('footer_button', 'options');

    $address    = get_field('address', 'options');
    $postalcode = get_field('postalcode', 'options');
    $town       = get_field('town', 'options');

    $linkedin   = get_field('linkedin', 'options');
    $instagram  = get_field('instagram', 'options');
    $email      = get_field('email', 'options');
@endphp

<footer class="footer" data-animate="fade-to-top">
    <div class="footer__tab d-lg-none"></div>
    <div class="footer__inner">
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        @if ($title)
                            <h3>{{ $title }}</h3>
                        @endif
                        @if ($button)
                            <a href="{{ $button['url'] }}" class="btn btn--cola" target="{{ $button['target'] ? $button['target'] : '_self' }}" title="{{ $button['title'] }}">{{ $button['title'] }}</a>
                        @endif
                    </div>

                    <div class="col-12 col-lg-4 offset-fhd-1">
                        @includeWhen(has_nav_menu('footer_navigation'), 'partials.navbar.footer')
                    </div>

                    <div class="col-12 col-lg-3 col-fhd-2">
                        <div class="footer__title">{{ __('Contact', 'sage')}}</div>
                        <div class="footer__address">
                            @if ($address)
                                <span>{{ $address }}</span>
                            @endif
                            @if ($postalcode)
                                <span>{{ $postalcode }}</span>
                            @endif
                            @if ($town)
                                <span>{{ $town }}</span>
                            @endif
                        </div>
                        <div class="footer__social">
                            @if ($linkedin)
                                <a href="{{ $linkedin }}" class="btn btn--barbie btn--io btn--social" target="_blank" title="LinkedIn"><i class="icon-linkedin"></i></a>
                            @endif
                            @if ($instagram)
                                <a href="{{ $instagram }}" class="btn btn--barbie btn--io btn--social" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                            @endif
                            @if ($email)
                                <a href="mailto:{{ $email }}" class="btn btn--barbie btn--io btn--social" target="_blank" title="E-mail"><i class="icon-envelop"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__copyright">
            <div class="footer__copyright-left">
                <span class="d-none d-lg-block">&copy; Enabl {{ date('Y') }} All Rights Reserved</span>

                @if (App\custom_menu_object('copyright_navigation'))
                    <ul>
                        @foreach(App\custom_menu_object('copyright_navigation') as $item)
                            @php
                                $item = (object)$item;
                            @endphp

                            <li>
                                <a href="{{ $item->url }}" target="{{ $item->target }}" aria-label="{{ $item->title }}" role="menuitem">{{ $item->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="footer__copyright-right">
                <span class="d-lg-none">Enabl<sup>&copy;</sup> {{ date('Y') }}.</span>
                <div class="footer__copyright-time">
                    <div>
                        <span class="current-time">{{ date('H:i') }}</span> {{ $town }} (CET) 🇳🇱
                    </div>
                    @include('components.language-switch', ['class' => 'language-select--top'])
                </div>
            </div>
        </div>
    </div>
</footer>
