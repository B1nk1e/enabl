@php
    $navbarBtn = get_field('navbar_button', 'options');
    $btnClass = '';

    if (is_home() || is_singular('cases') || is_singular('services') || is_term(get_queried_object_id()) || get_page_template_slug() == 'contact.blade.php') {
        $btnClass = 'btn--cola';
    }
@endphp

<nav class="navbar">
    <div class="navbar-holder">
        <a class="navbar-brand" href="{{ home_url('/') }}" data-animate="fade-in">
            @include('assets.logo')
        </a>
        <div class="navbar-right" data-animate="fade-in">
            @include('components.language-switch')

            @if ($navbarBtn)
                <a href="{{ $navbarBtn['url'] }}" class="btn btn--small {{ $btnClass }} d-none d-xl-inline-flex" target="{{ $navbarBtn['target'] ? $navbarBtn['target'] : '_self' }}" title="{{ $navbarBtn['title'] }}">{{ $navbarBtn['title'] }}</a>
            @endif

            <div class="btn btn--small btn--barbie navbar-toggler d-xl-none">
                <span class="navbar-toggler__open">{{ __('Menu', 'sage') }}</span>
                <span class="navbar-toggler__close">{{ __('Close', 'sage') }}</span>
            </div>
        </div>
    </div>

    @includeWhen(has_nav_menu('primary_navigation'), 'partials.navbar.navigation')
</nav>
