
    <h2>Создание задачи</h2>
    <form method="get" action="inserttask.php">

        <p><label>
                Имя задачи: <input type="text" name="name">
            </label>
        <p><label>
                Описание задачи: <input type="text" name="description">
            </label>
        <p><label>
                Выполнить до: <input type="datetime-local" name="deadline">
            </label>
        <p><label>
                Категория: <select name="id_category">
                    <?
                    $result = $conn->query("SELECT * FROM category");
                    while ($row = $result->fetch()) {
                        echo '<option value='.$row['id'].'>'.$row['name'].'</option>';

                    }
                    ?>
                </select>

            </label>
        <p><input type="submit" value="Создать">

    </form>
