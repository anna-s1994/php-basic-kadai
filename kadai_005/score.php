<!DOCTYPE html>
<html>
  <head>
  <title>kadai_005</title>
  <meta charset="UTF-8">
  <meta name="description" content="kadai_005です">
  </head>

  <body>
  <?php
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    $sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
    $average = $sum / 10;

    echo '合計点は' . $sum . '点です。';
    echo '<br>';
    echo '平均点は' . $average . '点です。';

    ?>

  </body>
</html>
