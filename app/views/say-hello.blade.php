<html>
<head>
    <title></title>
</head>
<body>
<h1>Hi, {{{$viewName}}}</h1>

@for ($i = 1; $i <= 6; $i++)
    <a href="{{{ action('HomeController@rollDice', $i) }}}">Guess {{{ $i }}}</a>
    {{link_to_action}}('HomeController@rollDice', "Guess $i", [$i], ['class' => 'btn btn-default']) }}}
@endfor
</body>
</html>
