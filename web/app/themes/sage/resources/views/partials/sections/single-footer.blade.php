@php
    $title  = get_field('cta_title', 'options');
    $text   = get_field('cta_text', 'options');
    $button = get_field('cta_button', 'options');

    $prev_post = get_previous_post();
    $postType  = get_post_type();
    $postTypeSingle = substr($postType, 0, -1);

    // When last post get first post
    if(empty($prev_post)) {
        $args = array(
        'post_type'      => $postType,
        'posts_per_page' => 1,
        'orderby'        => 'menu_order',
        'order'          => 'DESC' );

        $posts = get_posts($args);
        $prev_post = $posts[0];
    }

    $id = $prev_post->ID;
@endphp

<section class="section section--single-footer">
    <div class="container">
        <div class="single-footer__grid">
            @if($id)
                <div class="single-footer__item" data-animate="fade-to-top" data-animate-delay=".15">
                    <div class="single-footer__label">{{ __('Next', 'sage') }} {{ $postTypeSingle }}:</div>
                    <div class="single-footer__title h3">{!! get_the_title($id) !!}</div>
                    <div class="button-wrapper">
                        <a href="{{ get_permalink($id) }}" class="btn" title="{{ __('View next single', 'sage') }}">{{ __('View next', 'sage') }} {{ $postTypeSingle }}</a>
                    </div>
                </div>
            @endif

            @if ($title || $text)
                <div class="single-footer__item" data-animate="fade-to-top" data-animate-delay=".3">
                    @if ($title)
                        <div class="single-footer__title h3">{{ $title }}</div>
                    @endif

                    @if ($text)
                        <div class="single-footer__content">{!! $text !!}</div>
                    @endif

                    @if($button && $button['url'])
                        <div class="button-wrapper">
                            <a href="{{ $button['url'] }}" class="btn btn--cola" target="{{ $button['target'] ? $button['target'] : '_self' }}" title="{{ $button['title'] }}">{{ $button['title'] }}</a>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
</section>