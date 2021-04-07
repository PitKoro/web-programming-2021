<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>lab2_ajax</title>

</head>
<body>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col">
                <form id="add_form">
                    <input type="text" class="form-control mb-2" id="nameField" placeholder="Введите имя" required>
                    <input type="text" class="form-control mb-2" id="descriptionField" placeholder="Введите описание" required>
                    <button type="submit" class="btn btn-primary" id="submitButton">Отправить</button>
                </form>
            </div>
        </div>
        <div class="row mb-5">
            <!--<button id="show_table">Показать таблицу</button> -->
            <table class="table table-bordered table-hover text-center" id="db_table"></table>
        </div>
        <div class="row mb-5">
            <div class="col">
                <div id="edit_form"></div>
            </div>
        </div>
    </div>



    <script type="text/javascript">

        $(document).ready(function(){
            $.ajax({
                type: "POST",
                url: "php/for_db.php",
                data: {show_table: "show"},
                success: function(html){
                    $("#db_table").html(html);
                } 
            });
        });
        //#edit_cancel
        $('#edit_form').on('click', '#edit_button', function(){ // https://codernote.ru/jquery/obrabotka-dinamicheski-dobavlennyx-v-dom-elementov/
            var id = $('#input_with_id').val();
            var name = $("#edit_nameField").val();
            var description = $("#edit_descriptionField").val();
            $("#edit_nameField").val('');
            $("#edit_descriptionField").val('');
            $("#edit_form").empty();
            $.ajax({
                type: "POST",
                url: "php/for_db.php",
                data: {id: id, name: name, description: description, type: "edit"},
                success: function(html){
                    $("#db_table").html(html);
                } 
            });
            return false; 
        });

        $('#edit_form').on('click', '#edit_cancel', function(){ // https://codernote.ru/jquery/obrabotka-dinamicheski-dobavlennyx-v-dom-elementov/
            $("#edit_form").empty();
        });



        $('#db_table').on('click', '.editItem', function(){ // https://codernote.ru/jquery/obrabotka-dinamicheski-dobavlennyx-v-dom-elementov/
            var edit_id = $(this).attr('id');
            $("#edit_form").empty();
            $.ajax({
                type: "POST",
                url: "php/edit.php",
                data: {edit_id: edit_id},
                success: function(html){
                    $("#edit_form").html(html);
                } 
            }); 
        });

        /*$('#show_table').click(function(){
            $.ajax({
                type: "POST",
                url: "php/for_db.php",
                data: {show_table: "show"},
                success: function(html) {
                    $("#db_table").html(html);
                }
            });
        });*/

        //использовали .on() т.к. хотим повесить обработчик события на элементы, которые будут добавленны в DOM после загрузки страницы
        $('#db_table').on('click', '.delItem', function(){ // https://codernote.ru/jquery/obrabotka-dinamicheski-dobavlennyx-v-dom-elementov/
            var del_id = $(this).attr('id');
            $("#edit_form").empty();
            $.ajax({
                type: "POST",
                url: "php/for_db.php",
                data: {del_id: del_id},
                success: function(html){
                    $("#db_table").html(html);
                } 
            });
            
        });


        $("#add_form").submit(function(){
            var name = $("#nameField").val();
            var description = $("#descriptionField").val();
            $("#nameField").val('');
            $("#descriptionField").val('');
            $("#edit_form").empty();
            $.ajax({
                type: "POST",
                url: "php/for_db.php",
                data: {name: name, description: description, type: "add"},
                success: function(html){
                    $("#db_table").html(html);
                }
            });
            return false;
        })

        

    </script>
</body>
</html>