<div class="modal-dialog" role="document">
    <div class="modal-content col-md-8">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body modal-spa">
            <div class="col-md-6"><img src="{{Voyager::image($product->image)}}" alt=" " class="img-responsive" style="padding-top: 25px;"/></div>
            <div class="col-md-6">
                <p><label>Name</label><label>{{$product->name}}</label></p>
                <p><label>Price</label><label>{{$product->price}}</label></p>

                @foreach ($product->valuesList() as $key=>$value)
                    <p><label>{{$key}}</label><label>{{$value}}</label></p>
                    @endforeach
            </div>
        </div>
    </div>
</div>