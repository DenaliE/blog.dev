<html>
<head>
    <title>Roll dice</title>
</head>
<body>
<p><?= $rand ?></p>

   <? if($guess == $rand): ?>
<p><?= "Your $guess is correct." ?></p>
<?endif; ?>

</body>
</html>
