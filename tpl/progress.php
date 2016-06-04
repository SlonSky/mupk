<section>
    <div class="mainImage"><img class="main" src="images/progres.jpg"></div>
    <h1>Успішність учнів</h1>
    <h3>Введіть дані для пошуку групи:</h3>
    <form method="get" action="progress.php">
        <select name="school" >
            <option value="БЗШ № 3">БЗШ № 3</option>
            <option value="КринОШ">КринОШ</option>
            <option value="ОксОШ">ОксОШ</option>
        </select>
        <select name="specialty">
            <option value="Operator">Оператор</option>
            <option value="Secretary">Секретар</option>
            <option value="Driver B">Водій B</option>
        </select>
        <select name="day">
            <option value="Monday">Понеділок</option>
            <option value="Tuesday">Вівтрок</option>
            <option value="Wednesday">Середа</option>
            <option value="Thursday">Четвер</option>
            <option value="Friday">П'ятниця</option>
        </select>
        <input type="submit" value="Шукати">
        <input type="hidden" name="state" value="sent">
    </form>
    <div class="mes">
    <?php
        $query = "_GET";
        $data = $$query;
        $school = $data["school"];
        $specialty = $data["specialty"];
        $day = $data["day"];
        $db = mysqli_connect("localhost", "Slonsky", "slonsky");
        mysqli_select_db($db, "UPK");

        $input = "SELECT Name, School FROM progressX WHERE School='$school' AND specialty='$specialty' AND Day='$day'";

        $result = mysqli_query($db, $input) or die('Запрос не удался: ' . mysqli_error_list($db));
        $number = mysqli_num_rows($result);
        if($number == 0 && $data["state"] == "sent"){
            echo "<div>Не знайдено записів.</div>";
        } else if($data["state"] == "sent") {
                echo "<h4>Результати пошуку:</h4>";
                echo "<table>\n";
                echo "<tr><td><b>Учень</b></td><td><b>Школа</b></td></tr>";
                while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    echo "\t<tr>\n";
                    foreach ($line as $col_value) {
                        echo "\t\t<td>$col_value</td>\n";
                    }
                    echo "\t</tr>\n";
                }
                echo "</table>\n";
        }
        mysqli_free_result($result);
        mysqli_close($db);
    ?>
    </div>
</section>

<div class="separator"></div>
