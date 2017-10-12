<!DOCTYPE html>
<html>
  <head>
    <title>Toan Tu</title>
  </head>
  <body>
    <div style="border: solid 1px black;text-align: center;">
      <?php
        $a=3;
        $b=2;
        $c=$a+$b;
        $d=$a-$b;
        $e=$a*$b;
        $f=$a/$b;
        $g=$a%$b;
        $k=++$a;
        $l=--$a;
        echo('Tổng của '.$a.' + '.$b.' = '.$c.'<br>');
        echo("******************************** <br>");
        echo('Hiệu của '.$a.' - '.$b.' = '.$d.'<br>');
        echo("******************************** <br>");
        echo('Tích của '.$a.' * '.$b.' = '.$e.'<br>');
        echo("******************************** <br>");
        echo('Hiệu của '.$a.' / '.$b.' = '.$f.'<br>');
        echo("******************************** <br>");
        echo('Chia lấy dư của '.$a.' + '.$b.' = '.$g.'<br>');
        echo("******************************** <br>");
        echo('Toán tử tăng '.$a.' là '.$k.'<br>');
        echo("******************************** <br>");
        echo('Toán tử giảm '.$a.'<br>');
        echo("******************************** <br>");
      ?>
    </div>
  </body>
</html>
