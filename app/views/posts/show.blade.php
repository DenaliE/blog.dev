@extends ('layouts.master')
@section('head')
<title>{{$post->title}}</title>
@stop

@section('content')


<p>
{{$post->id}}
{{$post->title}}
{{$post->body}}
</p>

{{ Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'delete', 'id' => 'delete-form'])}}

 {{Form::submit('Delete!', ['class' => 'btn btn-danger'])}}

{{Form::close()}}


@stop

@section('bottomscript')
<script type="text/javascript">
$('#delete-form').submit(function($e)){
    if (!confirm('Are you sure you want to delte this post?'))
    {
        e.preventDefault();
    }
}
</script>
@stop
