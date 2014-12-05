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
@stop
