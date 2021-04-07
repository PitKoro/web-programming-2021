<? 
    header("Content-Type: text/html; charset=utf8");
    $host = 'localhost';  // Хост
    $user = 'root';    // Имя пользователя
    $pass = 'root'; // Установленный вами пароль пользователю
    $link = mysql_connect($host, $user, $pass); // Соединяемся с СУБД
    mysql_select_db("korolev", $link); // Выбор БД

?>
<a href="script.php?add">add</a>/<a href="script.php?tab">tab</a>
<?
    if(isset($_GET))
    {
        if(isset($_GET['add']))
        {
            ?>
            <form action="script.php?add" method="post" enctype="multipart/form-data">
                <p>
                    <label>Name</label>
                    <input type="text" name="name" required>
                </p>
                <p>
                    <label>Description</label>
                    <input type="text" name="description" required>
                </p>
                <button type="submit">submit</button>
            </form>
            <?
        }
        else if(isset($_GET['tab']))
        {
            $sql = mysql_query("SELECT * FROM chat", $link);


            echo"<table>";
            while($result = mysql_fetch_array($sql))#функция вывода таблицы 
            {
            echo "<tr>
            <td> {$result['name']} </td>
            <td> {$result['description']}</td>
            <td> <a href='?del={$result['id']}'> Delete</a></td> 
            <td><a href='?edit={$result['id']}'>Edit</a> </td>";
            }
            echo"</table>";

            mysql_free_result($sql);
        }
        else if(isset($_GET['del']))
        {
            $sql = mysql_query("DELETE FROM chat WHERE id = '{$_GET['del']}'");
        }
        else if(isset($_GET['edit']))
        {
            $sql = mysql_query("SELECT id, name, description  FROM chat WHERE id='{$_GET['edit']}'", $link);
            $data = mysql_fetch_array($sql);
            ?>
            <form action="script.php" method="post" enctype="multipart/form-data">
                <p>
                    <label>Name</label>
                    <input type="text" name="name" value="<?= $data['name'] ?>" required>
                </p>
                <p>
                    <label>Description</label>
                    <input type="text" name="description" value="<?= $data['description'] ?>" required>
                    <input type="text" name="id" value="<?= $data['id'] ?>" hidden required>
                </p>
                <button type="submit">submit</button>
            </form>
            <? 
            mysql_free_result($sql);
        }

    }

    if(isset($_POST))
    {
        if( (isset($_POST['name'])) && (isset($_POST['description'])) )
        {
            if(isset($_POST['id']))
            {
                $sql = mysql_query("UPDATE chat SET name = '{$_POST['name']}', description = '{$_POST['description']}' WHERE id='{$_POST['id']}'", $link);
            } 
            else 
            {
                $sql = mysql_query("INSERT INTO chat (name, description) VALUES ('{$_POST['name']}', '{$_POST['description']}')");
            }
            
        }
    }
    ?>