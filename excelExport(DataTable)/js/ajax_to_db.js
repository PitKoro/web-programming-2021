$("#add_form").submit(function(){
    var name = $("#nameField").val();
    var description = $("#descriptionField").val();
    $("#nameField").val('');
    $("#descriptionField").val('');
    $("#edit_form").empty();
    $.ajax({
        type: "POST",
        url: "php/ajax_to_db.php",
        data: {name: name, description: description, type: "add"},
        success: function(html){
            $("#db_table").html(html).draw();
        }
    });
    return false;
})