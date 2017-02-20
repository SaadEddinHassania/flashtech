@if(App::isLocale('ar'))
    @foreach($projects as $project)
        <div class="work-item" >
            <div class="work-item-name"> {{$project->title_ar}} </div>
            <div class="work-item-description"> {{$project->small_desc_ar}} </div>
            <div class="work-item-description col-md-8">
                <a class="show-project" data-id="{{$project->id}}" href="javascript:;" data-toggle="modal" data-target="#myModal"><span>المزيد</span></a>
            </div>
        </div>
    @endforeach
@else
    @foreach($projects as $project)
        <div class="work-item" >
            <div class="work-item-name"> {{$project->title}} </div>
            <div class="work-item-description"> {{$project->small_desc}} </div>
            <div class="work-item-description col-md-8">
                <a class="show-project" data-id="{{$project->id}}" href="javascript:;" data-toggle="modal" data-target="#myModal"><span>more</span></a>
            </div>
        </div>
    @endforeach
@endif
{{$projects->links('partials.paginator')}}
<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">

</div>

