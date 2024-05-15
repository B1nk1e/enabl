@php
    $title = get_field('cases_overview_title');
    $text  = get_field('cases_overview_text');

    $query = new WP_Query( array(
        'post_type'      => 'cases',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ));
    $cases = $query->posts;

    $taxonomy = 'cases-category';
    $taxonomy_terms = get_terms( $taxonomy, array(
        'hide_empty' => true,
        'fields' => 'ids'
    ));
@endphp

<section class="section section--cases">
    <div class="container container--cases">
        <div class="row">
            <div class="col-md-6">
                <div class="cases-overview__intro">
                    <h1 class="cases-overview__title" data-animate="fade-to-top">{{ $title }}</h1>
                    
                    @if($text)
                        <div data-animate="fade-to-top" data-animate-delay=".3">
                            {!! $text !!}
                        </div>
                    @endif
                </div>
            </div>

            @if ($taxonomy_terms)
                <div class="col-md-6 offset-lg-1 col-lg-5">
                    <div class="cases-overview__filter d-none d-md-flex">
                        <button class="h5 filter-btn active" data-filter="all"  data-animate="fade-to-left">{{ __('All projects', 'sage') }}</button>

                        @foreach($taxonomy_terms as $key => $termID)
                            @php
                                $term = get_term($termID);
                            @endphp

                            <button class="h5 filter-btn" data-filter="{{ $term->slug }}" data-animate="fade-to-left" data-animate-delay="{{ ($key + 1) * .15 }}">{{ $term->name }}</button>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="container">
        <div class="cases__overview">
            @foreach ($cases as $case)
                @include('components.card.case', ['id' => $case->ID])
            @endforeach
        </div>
    </div>
</section>