@extends ('layouts.master')
@section('head')
<title>Form</title>
@stop

@section('content')
<p>
{{$post->id}}
{{$post->title}}
{{$post->body}}
</p>
@stop
