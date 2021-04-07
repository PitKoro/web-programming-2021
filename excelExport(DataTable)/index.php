<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    

    <link rel="stylesheet" href="vendor/dataTable/jquery.dataTables.min.css">
    <link rel="stylesheet" href="vendor/dataTable/buttons.dataTables.min.css">
    <link rel="stylesheet" href="vendor/dataTable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendor/dataTable/buttons.bootstrap4.min.css">

    <title>DataTable</title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-6 col-xl-3">
                <form id="add_form">
                    <input type="text" class="form-control mb-2" id="nameField" placeholder="Имя" required>
                    <input type="text" class="form-control mb-2" id="descriptionField" placeholder="Описание" required>
                    <button type="submit" class="btn btn-primary" id="submitButton">Добавить</button>
                </form>
            </div>
        </div>
        

        <div class="row mt-3">
            <div class="col-sm-12 col-xl-10">
                <table id="db_table" class="table table-hover" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Имя</th>
                            <th>Описание</th>
                            <th>Удалить</th>
                            <th>Изменить</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? include "php/db_table.php"; ?>
                    </tbody>
                </table>
            </div>
        </div>
            



            
        
    </div>

    <script src="vendor/jquery/jquery-3.5.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/dataTable/jquery.dataTables.min.js"></script>
    <script src="vendor/dataTable/dataTables.bootstrap4.min.js"></script>
    <script src="vendor/dataTable/dataTables.buttons.min.js"></script>
    <script src="vendor/dataTable/buttons.bootstrap4.min.js"></script>
    <script src="vendor/dataTable/jszip.min.js"></script>
    <script src="vendor/dataTable/buttons.html5.min.js"></script>
    <script src="js/db_in_dataTable.js"></script>
    <script src="js/ajax_to_db.js"></script>
</body>
</html>