@if ($category_id == 1)
    @include('product.filters.filter(hairCare)')
@endif
@if ($category_id == 2)
    @include('product.filters.filter(collagen)')
@endif
@if ($category_id == 3)
    @include('product.filters.filter(collagen)')
@endif
@if( $category_id == 4)
    @include('product.filters.filter(all)')
@endif
