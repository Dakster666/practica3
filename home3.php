        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="">
    </head>

        <body>
            
            
        <form action="" method="post">
                    <fieldset>
                        <legend>Анкета</legend>
                        <label>Фамилия <input class="field" type="text" name="surname"> </label><br>
                        <label>Имя <input class="field" type="text" name="name"> </label><br>
                        <label>Отчество <input class="field" type="text" name="lastname"> </label><br>
                        <label>Год рождения <input class="field" type="date" name="date"> </label><br>
                        <label><b>Пол</b></label><br>
                        <label><input type="radio" name="gender" id="g-1" value="Мужской">Мужской</label>
                        <label><input type="radio" name="gender" id="g-2" value="Женский">Женский</label><br>
                        <input class="button" type="submit" value="Отправить" name="search_example_1">
                    </fieldset>
                </form>
            


            <?php
            
            if (isset($_POST["search_example_1"])) {
                
                echo "<div class=out>";
                echo "<h2>Итог </h2>";

            
                $name = $_POST["name"];
                $surname = $_POST["surname"];
                $lastname = $_POST["lastname"];
                $date = $_POST["date"];
                $gender = $_POST["gender"];
                
                echo "<p>ФИО: $surname $name $lastname</p>";
                echo "<p>Дата рождения: $date</p>";
                echo "<p>Пол: $gender</p>";
                
                
            }
            ?>
        



        </body>

        </html>