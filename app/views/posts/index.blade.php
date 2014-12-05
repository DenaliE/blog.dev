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
@endforeach

{{ $posts->links() }}

@stop
