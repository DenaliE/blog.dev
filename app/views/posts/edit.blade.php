@extends ('layouts.master')
@section('head')
<title>Form</title>
@stop

@section('content')

    {{ Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' =>'PUT']) }}
    <div class="col-md-6">
        <div class='form-group'>
            <label for="title">Title</label>
            <input  class="form-control" type="text" name="title" value="{{{ $post->title }}}" autofocus>
        </div>

        <div class='form-group'>
            <label for="body">Blog Post</label>
            <textarea name="body" class="form-control" rows="3"> {{{ $post->body }}}
            </textarea>
        </div>

        <button class='btn btn-default'>Add</button>
    </div>
    {{ Form::close() }}
@stop
