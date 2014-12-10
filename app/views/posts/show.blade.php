@extends ('layouts.master')
@section('head')
<title>{{$post->title}}</title>
@stop

@section('content')


<p>
Title: {{$post->title}}
</p>

<p>
{{$post->body}}
</p>

<div class= 'bottom'>
{{ Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'delete', 'id' => 'delete-form'])}}
<a class="btn btn-default" data-post-id="{{{$post->id}}}" href="{{{action('PostsController@edit', $post->id)}}}">Edit</a>

 {{Form::submit('Delete!', ['class' => 'btn btn-danger'])}}

{{Form::close()}}
</div>


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
