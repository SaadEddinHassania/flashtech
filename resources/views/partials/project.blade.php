<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body modal-spa">
            @if(App::isLocale('ar'))
            <h4>{{$project->title_ar}}</h4>
            <p>{{$project->description_ar}}</p>
            @else
                <h4>{{$project->title}}</h4>
                <p>{{$project->description}}</p>
            @endif
            <div class="slider">
                @if(isset($project->images) && is_array(json_decode($project->images)))
                @foreach(json_decode($project->images) as $image)
                <img class="mySlide" src="{{ Voyager::image($image) }}">
                @endforeach
                @endif
                <a class="leftArrow" onclick="plusDivs(-1)">&#10094;</a>
                <a class="rightArrow" onclick="plusDivs(1)">&#10095;</a>
            </div>

            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlide");
                    if (n > x.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex-1].style.display = "block";
                }
            </script>

        </div>
    </div>
</div>