<? 
    header("Content-Type: text/html; charset=utf8");
?>
<a href="lab1.php?add">add</a>/<a href="lab1.php?tab">tab</a>
<?
    if(isset($_GET))
    {
        if(isset($_GET['add']))
        {
            ?>
            <form action="lab1.php?add" method="post" enctype="multipart/form-data">
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
            $file = file('db.txt');
            echo"<table>";
            for($i=0; $i<sizeof($file); $i++)
            {
                $raw = explode("::", $file[$i]);
                echo "<tr>";
                echo "<td>".$raw[0]."</td>";
                echo "<td>".$raw[1]."</td>";
                echo "<td>".$raw[2]."</td>";
                echo "</tr>";
            }
            echo"</table>";
        }
    }

    if(isset($_POST))
    {
        if( (isset($_POST['name'])) && (isset($_POST['description'])) )
        {
            $file_arr = file('db.txt');
            $count = count($file_arr) + 1;
            $file = fopen('db.txt', 'a+');
            $data = $count."::".$_POST['name']."::".$_POST['description'];
            fwrite($file, $data . PHP_EOL);
            fclose($file);
        }
    }
    ?>