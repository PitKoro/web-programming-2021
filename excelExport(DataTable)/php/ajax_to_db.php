<?
    include "connect.php";

    if(isset($_POST))
    {
        if( isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description']) && $_POST['type'] == "edit" )
        {
            mysql_query("UPDATE chat SET name = '{$_POST['name']}', description = '{$_POST['description']}' WHERE id='{$_POST['id']}'", $link);
        }

        if( (isset($_POST['name'])) && (isset($_POST['description']))  && $_POST['type'] == "add" )
        {
            mysql_query("INSERT INTO chat (`name`, `description`) VALUES ('{$_POST['name']}', '{$_POST['description']}')", $link);
        }

        if(isset($_POST['del_id']))
        {
            mysql_query("DELETE FROM test WHERE id = '{$_POST['del_id']}'", $link);
        }


    }

    include "db_table.php";
?>