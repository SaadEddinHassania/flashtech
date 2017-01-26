{{--<li><a href="#section-1"><span>all</span></a></li>--}}
<input type="radio" name="sub-cats" id="sub-cat1" checked value="{{$id}}" >
<label for="sub-cat1"><span><span>all</span></span></label>

@foreach($subCategories as $sKey => $subCategory)
<input type="radio" name="sub-cats" id="sub-cat{{$sKey+2}}" value="{{$subCategory->id}}" >
<label for="sub-cat{{$sKey+2}}"><span><span>{{$subCategory->name}}</span></span></label>

{{--    <li><a href="#section-{{$sKey+2}}"><span>{{$subCategory->name}}</span></a></li>--}}
@endforeach