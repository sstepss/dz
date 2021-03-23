<?php
    $arr = [
        'один' => 1,
        'два' => 2,
        'три' => 3,
        'четыре' => 4,
        'пять' => 5,
        'шесть' => 6,
        'семь' => 7,
        'восемь' => 8,
        'девять' => 9,
        'десять' => 10,
    ];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DZ</title>
</head>
<body>

    <div>
        <?php foreach ($arr as $k => $n) { ?>
            <div> <?php echo "{$k} = {$n}"; ?> </div>
        <?php } ?>
    </div>

</body>
</html>
