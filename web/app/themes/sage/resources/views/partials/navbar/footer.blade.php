<div class="footer__nav">
    @foreach(App\custom_menu_object('footer_navigation') as $item)
        @php
        $item    = (object)$item;
        $classes = 'nav-link';

        if (!empty($item->classes[0])) {
            $classes .= ' ' . implode(' ', $item->classes);
        }

        if ($item->object_id == get_queried_object_id()) {
            $classes .= ' current';
        }
        @endphp

        <div class="footer__list">
            <a href="{{ $item->url }}" target="{{ $item->target }}"
                aria-label="{{ $item->title }}"
                role="menuitem"
                class="footer__title {{ $classes }}">
                {{ $item->title }}
            </a>

            @foreach($item->children as $child)
                @php
                    $child = (object)$child;
                @endphp
                <a <?php if (!empty($child->url)) : ?>href="{{ $child->url }}"<?php endif; ?> target="{{ $child->target }}" aria-label="{{ $child->title }}" role="menuitem" class="{{ $classes }}">{{ $child->title }}</a>
            @endforeach
        </div>
    @endforeach
</div>
