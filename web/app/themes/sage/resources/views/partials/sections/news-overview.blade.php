@php
    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
    $highlightID = '';

    if (is_home()) {
        $highlightID = get_field('news_overview_highlight', get_queried_object_id())[0];

        $query = new WP_Query( array(
            'post_type'      => 'post',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
            'paged'          => $paged,
            'post__not_in'   => array( $highlightID, ),
        ));
    } else {
        $query = new WP_Query( array(
            'post_type'      => 'post',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
            'paged'          => $paged,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'id',
                    'terms' => is_term(get_queried_object_id())
                )
            )
        ));
    }

    $posts = $query->posts;

    $taxonomy = 'category';
    $taxonomy_terms = get_terms( $taxonomy, array(
        'hide_empty' => true,
        'fields' => 'ids'
    ));
@endphp

<section class="section section--news-overview">
    <div class="container">

        @if ($highlightID)
            <div class="news-highlight" data-animate="fade-to-top" data-animate-delay=".6">
                @include('components.card.highlight', ['id' => $highlightID])
            </div>
        @endif


        @if ($taxonomy_terms)
            <div class="news-overview__filtering">
                <div class="news-overview__filters d-none d-lg-flex">
                    <a href="{{ get_post_type_archive_link('post') }}" class="btn {{ is_home() ? 'active' : ''}}" data-filter="all" title="{{ __('All', 'sage') }}" data-animate="fade-to-top">{{ __('All', 'sage') }}</a>

                    @foreach($taxonomy_terms as $key => $termID)
                        @php
                            $term = get_term($termID);
                        @endphp

                        <a href="{{ get_term_link($term) }}" class="btn {{ is_term(get_queried_object_id()) == $termID ? 'active' : '' }}" title="{{ $term->name }}" data-animate="fade-to-top" data-animate-delay="{{ ($key + 1) * .15 }}">{{ $term->name }}</a>
                    @endforeach
                </div>

                <div class="custom-select-wrapper d-lg-none">
                    <div class="custom-select select-link">
                        <select>
                            @if(is_home())
                                <option value="{{ get_post_type_archive_link('post') }}" class="btn">{{ __('All', 'sage') }}</option>
                            @else
                                @foreach($taxonomy_terms as $termID)
                                    @if (is_term(get_queried_object_id()) == $termID)
                                        @php
                                            $term = get_term($termID);
                                        @endphp

                                        <option value="{{ get_term_link($term) }}">{{ $term->name }}</option>
                                    @endif
                                @endforeach
                                <option value="{{ get_post_type_archive_link('post') }}" class="btn">{{ __('All', 'sage') }}</option>
                            @endif

                            @foreach($taxonomy_terms as $termID)
                                @php
                                    $term = get_term($termID);
                                @endphp

                                @if(is_term(get_queried_object_id()) != $termID)
                                    <option value="{{ get_term_link($term) }}">{{ $term->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        @endif

        <div class="news-overview__container">
            @foreach ($posts as $item)
                @include('components.card.news', ['id' => $item->ID])
            @endforeach
        </div>
    </div>

    @include('components.pagination')
</section>
