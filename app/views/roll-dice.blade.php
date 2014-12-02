@extends('layouts.master')

@section('content')

    <title>Roll dice</title>
    <style type="text/css">
    body {
        font-size: 2em;
    }
    </style>
</head>
<body>

@if (isset($guess))

<p>{{{ "The random number is $rand." }}}</p>

<p>{{{ "Your guess was $guess." }}}</p>

   @if($guess == $rand)
    <p>{{{ "Your guess, $guess, was correct." }}}</p>
    @else
    <p>{{{ "Your guess, $guess, was incorrect." }}}</p>
    @endif
@else
@endif

<p>{{{ "The random number is $rand." }}}</p>
@stop

</body>
</html>
