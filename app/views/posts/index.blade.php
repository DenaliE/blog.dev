@extends ('layouts.master')
@section('head')
<title>My Blog Posts</title>
@stop

@section('content')

@foreach ($posts as $post)
    <p>
    {{$post->id}}
    {{$post->title}}
    {{$post->body}}
    {{ ' Posted '.$post->created_at->diffForHumans()}}
    </p>

    <button class="btn btn-danger delete-btn" data-post-id="{{{$post->id}}}">Delete</button>
@endforeach


{{ Form::open(['method' => 'delete', 'id' =>'delete-form']) }}

{{ Form::close() }}

{{ $posts->appends('search', 'some value')->links() }}

@stop

@section('bottomscript')
<script type="text/javascript">
$(".delete-btn").click(function(){

    var postId = $(this).data('post-id');

        $("#delete-form").attr('action', '/posts/' + postId);

        if (confirm('Are you sure you want to delete this post?'))
    {
        $("#delete-form").submit();
    }
});
</script>

@stop
