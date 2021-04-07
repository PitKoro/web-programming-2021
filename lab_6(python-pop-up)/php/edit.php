<?

    header("Content-Type: text/html; charset=utf8");
    include "connect.php";
    // $host = 'localhost';  // Хост
    // $user = 'root';    // Имя пользователя
    // $pass = 'root'; // Установленный вами пароль пользователю
    // $link = mysql_connect($host, $user, $pass); // Соединяемся с СУБД
    // mysql_select_db("korolev", $link); // Выбор БД


    if(isset($_POST['edit_id']))
    {
        $query = mysql_query("SELECT id, name, description  FROM chat WHERE id='{$_POST['edit_id']}'", $link);
        $data = mysql_fetch_array($query);
        $htmlForm = "
        <form>
            <p>
                <label>Name</label>
                <input type='text' id='edit_nameField' value='{$data['name']}' required>
            </p>
            <p>
                <label>Description</label>
                <input type='text' id='edit_descriptionField' value='{$data['description']}' required>
                <input type='text' id='input_with_id' name='id' value='{$data['id']}' hidden required>
            </p>
            <button class='btn btn-primary' id='edit_button' >Изменить</button>
            <button class='btn btn-danger' id='edit_cancel' >Отмена</button>
        </form>
        ";
        mysql_free_result($query);
        echo $htmlForm;
    }
?>