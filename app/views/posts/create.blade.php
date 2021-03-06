@extends ('layouts.master')
@section('head')
<title>Form</title>

@stop

@section('content')

    {{ Form::open(array('action' => 'PostsController@store')) }}
    <div class="col-md-6">
        <div class='form-group'>


            <label for="title">Title</label>
            <input  class="form-control" type="text" name="title" value="{{{ Input::old('title') }}}" autofocus>

            {{ $errors->first('title', '<span class="help-block">:message</span>') }}
        </div>

        <div class='form-group'>


            <label for="body">Blog Post</label>
            <textarea name="body" class="form-control" rows="3"> {{{ Input::old('body') }}}
            </textarea>

            {{ $errors->first('body', '<span class="help-block">:message</span>') }}
        </div>

        <button class='btn btn-default'>Add</button>
    </div>
    {{ Form::close() }}
@stop
