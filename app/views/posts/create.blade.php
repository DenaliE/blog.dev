@extends ('layouts.master')
@section('head')
<title>Form</title>
@stop

@section('content')

    {{ Form::open(array('action' => 'PostsController@store')) }}

    <div class='form-group'>
    <input type="text" name="title" value="{{{ Input::old('title') }}}" autofocus>
    <textarea name="body"> {{{ Input::old('body') }}}
    </textarea>
    <button>Add</button>
    </div>
    {{ Form::close() }}
@stop
