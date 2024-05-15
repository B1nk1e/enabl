@php
    $prev_post = get_previous_post();

    // When last post get first post
    if(empty($prev_post)) {
        $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 1,
        'orderby'        => 'menu_order',
        'order'          => 'DESC' );

        $posts = get_posts($args);
        $prev_post = $posts[0];
    }

    $id = $prev_post->ID;
@endphp

@if($id)
    <section class="section section--blog-footer" data-animate="fade-to-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-xxl-7">
                    <div class="blog-footer">
                        @php
                            $image = get_post_thumbnail_id($id);
                            $title = get_the_title($id);
                        @endphp


                        <div class="blog-next">
                            <a href="{{ get_permalink($id) }}" class="blog-next__anchor"></a>
            
                            @if($image)
                                <figure class="blog-next__img d-none d-md-block">
                                    @include('components.picture', ['imageID' => $image])
                                </figure>
                            @endif
            
                            <div class="blog-next__content">
                                <div class="blog-next__label">{{ __('Next item', 'sage') }}</div>
                                @if($title)
                                    <div class="blog-next__title">{{ $title }}</div>
                                @endif
            
                                <i class="icon-arrow-right-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif