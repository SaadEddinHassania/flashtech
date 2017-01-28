
<section id="section-1" class="content-current">
    <div class="typography">
        <div  id="gallery" class="gallery">
            <div class="gallery-grids-row">
                @foreach($products as $product)
                    <div class="col-md-4 gallery-grid">
                        <div class="wpf-demo-4">
                            <a href="{{Voyager::image($product->image)}}" class="jzBoxLink item-hover" title="{{$product->name}}">
                                <img src="{{Voyager::image($product->image)}}" alt=" " class="img-responsive" />
                                <div class="view-caption">
                                    <p><a data-toggle="modal" data-id="{{$product->id}}" data-target="#fill">fill screen</a></p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
                {{ $products->links('partials.paginator') }}
                <div class="clearfix"> </div>
            </div>
            <script src="js/jzBox.js"></script>
        </div>
    </div>
</section>