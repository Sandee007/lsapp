@extends ('layouts.app')

@section('content')

    <br>
    <div class="form-group">
        <a href="/posts" class="btn btn-secondary"> Go Back </a>
    </div>
     
    <h1>{{$post->title}}</h1>

    <div class="row">
        @if ($post->cover_image != 'noimage.jpg')
            <div class="col-md-6">
                <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
            </div>
        @endif

        <br><br>
        <div class="col-md-6">
            {!!$post->body!!}
        </div>
    </div>
    <hr>
    <small> Written on : {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary"> Edit </a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id],'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger' ])}}
            {!!Form::close()!!}
        @endif
    @endif
    <hr>
@endsection