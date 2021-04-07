<?
    header("Content-Type: text/html; charset=utf8");


    $host = 'localhost';  // Хост
    $user = 'root';    // Имя пользователя
    $pass = 'root'; // Установленный вами пароль пользователю
    $link = mysql_connect($host, $user, $pass); // Соединяемся с СУБД
    mysql_select_db("korolev", $link); // Выбор БД


    if(isset($_POST))
    {
        if( isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description']) && $_POST['type'] == "edit" )
        {
            mysql_query("UPDATE chat SET name = '{$_POST['name']}', description = '{$_POST['description']}' WHERE id='{$_POST['id']}'", $link);
        }

        if( (isset($_POST['name'])) && (isset($_POST['description']))  && $_POST['type'] == "add" )
        {
            mysql_query("INSERT INTO chat (name, description) VALUES ('{$_POST['name']}', '{$_POST['description']}')");
        }

        if(isset($_POST['del_id']))
        {
            mysql_query("DELETE FROM chat WHERE id = '{$_POST['del_id']}'");
        }


    }


/* Вывод таблицы из БД */
    $sql = mysql_query("SELECT * FROM chat", $link);

    $table_data = "
    <thead>
        <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Имя</th>
        <th scope=\"col\">Описание</th>
        <th scope=\"col\">Удалить</th>
        <th scope=\"col\">Изменить</th>
        </tr>
    </thead>
    <tbody id='db_table'>";

    while($result = mysql_fetch_array($sql))#функция вывода таблицы 
    {
        $table_data = $table_data."<tr>
        <td> {$result['id']} </td>
        <td> {$result['name']} </td>
        <td> {$result['description']}</td>
        <td> <button class='delItem btn btn-danger' id='{$result['id']}'> Delete</button></td>
        <td><button class='editItem btn btn-primary' id='{$result['id']}'> Edit</button></td>
        </tr>";
    }

    $table_data = $table_data."</tbody>";
    // require_once('../index.php');
    mysql_free_result($sql);
    echo $table_data
    
?>