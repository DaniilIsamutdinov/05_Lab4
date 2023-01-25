<!DOCTYPE html>
<html>
    <head>
        <title>Статистика голосування</title>
    </head>
    <body>
        <div>
            Кількість голосів на кожну мову програмування:<br>
            <?php
                $Nc = 0;
                $Nj = 0;
                $Np = 0;
                $arr = file("data.txt", FILE_IGNORE_NEW_LINES);
                foreach ($arr as $st) {
                    if ($st == "С++" )$Nc++;
                    if ($st == "Java")$Nj++;
                    if ($st == "PHP" )$Np++;
                }
                $per = $Nc / count($arr) * 100;
                echo "<br>C++ - $Nc, чи $per%<br>";
                $per = $Nj / count($arr) * 100;
                echo "Java - $Nj, чи $per%<br>";
                $per = $Np / count($arr) * 100;
                echo "PHP - $Np, чи $per%<br>";
            ?>
        </div>
    </body>
</html>