<?

    include "connect.php";

    $allUsers_query = mysql_query("SELECT * FROM chat", $link);
    $table_body = "";
    while($result = mysql_fetch_array($allUsers_query))#функция вывода таблицы 
    {
        $table_body = $table_body."<tr>
        <td> {$result['id']} </td>
        <td> {$result['name']} </td>
        <td> {$result['description']}</td>
        <td> <button class='delItem btn btn-danger' id='{$result['id']}'> Delete</button></td>
        <td><button class='editItem btn btn-primary' id='{$result['id']}'> Edit</button></td>
        </tr>";
    }
	mysql_free_result($allUsers_query);
    echo $table_body;
?>