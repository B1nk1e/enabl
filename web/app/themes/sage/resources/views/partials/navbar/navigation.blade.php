<div class="navbar__menu d-none d-xl-block" data-animate="fade-in">
    <ul>
        @foreach(App\custom_menu_object('primary_navigation') as $item)
            <li role="none" class="nav-item">
                @include('partials.navbar.item')
            </li>
        @endforeach
    </ul>
</div>

@include('partials.navbar.mobile-nav')
