@section('content')

<div class="col-md-12">
        <h3 style="text-align:center;">{{$LessonActive[0]->title}}</h3>

</div>

<div class="col-md-12">
 
        @php
          print($LessonActive[0]->content)
        @endphp
 
</div>
@endsection