@extends ('layouts.master')

@section('content')

{{ Form::open(['action' => 'HomeController@doLogin'])}}

{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email']) }}
{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password'])}}


{{ Form::submit('Log in') }}
{{ Form::close() }}

@stop
