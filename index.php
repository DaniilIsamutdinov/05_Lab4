<!DOCTYPE html>
<html>
    <head>
        <title>Лабораторна робота№4 ІТех Ісамутдінов Даніїл</title>
    </head>
    <body>
        <div>
            <form action="" method="post">
            Ваша улюблена мова програмування:<br>
                <label> <input type="radio" name="language" value="С++"> С++<br>
                </label>
                <label> <input type="radio" name="language" value="PHP"> PHP<br>
                </label>
                <label> <input type="radio" name="language" value="Java"> Java<br>
                </label>
                <div>
                    <button type="submit" name="submit">Vote!</button>
                </div>
            </form>
            <?php
                if(isset($_POST["submit"])){
                    if(!empty($_POST["language"])) {
                        $f = fopen("data.txt", "a+");
                        fwrite($f, "\n".$_POST["language"]);
                        fclose($f);
                    }
                    else {
                        echo "Please select the value.";
                    }
                }
            ?>
            <a href="stat.php">Також ви можете переглянути статистику зібраних голосів</a>
        </div>
    </body>
</html>