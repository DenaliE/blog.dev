@extends ('layouts.master')
@section('head')
<title>Form</title>
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
