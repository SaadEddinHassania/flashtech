<div class="products">
@foreach($products as $product)
    <?php
    $image = Voyager::image($product->image);
    $extension_pos = strrpos($image, '.'); // find position of the last dot, so where the extension starts
    $thumb = substr($image, 0, $extension_pos) . '-small' . substr($image, $extension_pos);
    ?>
    <div class="selector col-sm-6 col-md-4 col-lg-4 {{$product->category->name}}">
        <div class="product">
            <div class="hover-bg"><a href="{{$image}}" title="{{$product->name}}"
                                     data-lightbox-gallery="gallery1">
                    <div class="hover-text">
                        <h4>{{$product->name}}</h4>
                    </div>

                    <img src="{{$thumb}}" class="img-responsive" alt="{{$product->name}}"> </a></div>
        </div>
    </div>
@endforeach
</div>
{{$products->links('partials.paginator')}}