{{--<li><a href="#section-1"><span>all</span></a></li>--}}
<input type="radio" name="sub-cats-{{$id}}" id="sub-cat{{$id}}" checked value="{{$id}}" >
<label for="sub-cat{{$id}}"><span><span>all</span></span></label>

@foreach($subCategories as $sKey => $subCategory)
<input type="radio" name="sub-cats-{{$id}}" id="sub-cat{{$subCategory->id}}" value="{{$subCategory->id}}" >
<label for="sub-cat{{$subCategory->id}}"><span><span>{{$subCategory->name}}</span></span></label>

{{--    <li><a href="#section-{{$sKey+2}}"><span>{{$subCategory->name}}</span></a></li>--}}
@endforeach