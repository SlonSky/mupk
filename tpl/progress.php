<section>
    <div class="mainImage"><img class="main" src="images/progres.jpg"></div>
    <h1>Успішність учнів</h1>
    <h3>Введіть дані для пошуку групи:</h3>
    <form method="post" action="?selectProgress">
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
        <select name="class">
            <option value="10">10</option>
            <option value="11">11</option>
        </select>
        <input type="submit" value="Шукати">
        <input type="hidden" name="state" value="sent">
    </form>

