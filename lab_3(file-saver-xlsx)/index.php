<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>lab2_ajax</title>

</head>
<body>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-6">
                <form id="add_form">
                    <input type="text" class="form-control mb-2" id="nameField" placeholder="Name" required>
                    <input type="text" class="form-control mb-2" id="descriptionField" placeholder="Description" required>
                    <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
                </form>
            </div>
        </div>
        
        <div class="row mb-5">
			<div class="col-sm-12">
				<div class="row mb-2">
            		<div class="col-sm-5">
                		<button id="export-button" class="btn btn-primary">Export to excel(file-saver, xlsx)</button>
            		</div>
        		</div>
			<div class="row">
				<div class="col-sm-12">
					<table class="table table-bordered table-hover pl-2 pr-2 text-center" id="db_table"></table>
				</div>
			</div>
				
		</div>
            
        </div>
        <div class="row mb-5">
            <div class="col">
                <div id="edit_form"></div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="./node_modules/file-saver/dist/FileSaver.min.js"></script>
    <script type="text/javascript" src="./node_modules/xlsx/xlsx.mini.js" ></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="export.js"></script>
    
</body>
</html>