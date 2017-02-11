{{--<li><a href="#section-1"><span>all</span></a></li>--}}
<li><a href="#" data-id="{{$id}}" class="active">@lang('home.all')</a></li>
@foreach($subCategories as $sKey => $subCategory)
    <li><a href="#" data-id="{{$subCategory->id}}" data-filter=".{{$subCategory->name}}">{{$subCategory->name}}</a></li>
@endforeach