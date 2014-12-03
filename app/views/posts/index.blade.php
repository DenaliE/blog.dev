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
</p>
@endforeach

@stop
