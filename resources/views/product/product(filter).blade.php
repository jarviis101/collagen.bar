@if( $category_id == 4)
    @include('product.filters.filter(all)')
@endif
@if ($category_id == 3)
    @include('product.filters.filter(collagen)')
@endif
