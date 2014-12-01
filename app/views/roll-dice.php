<html>
<head>
    <title>Roll dice</title>
</head>
<body>
<p><?= "The random number is $rand." ?></p>
<p><?= "Your guess was $guess." ?></p>

   <? if($guess == $rand): ?>
    <p><?= "Your guess, $guess was correct." ?></p>
    <? else: ?>
    <p><?= "Your guess, $guess was incorrect." ?></p>
    <?endif; ?>

</body>
</html>
