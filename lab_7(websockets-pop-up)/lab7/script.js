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

function send_id(id){
    let socket = new WebSocket("ws://151.248.113.144:7000");
    socket.onopen = function(e){ 
        socket.send(id);
    };

    socket.onmessage = function(response) {
	console.log(response);
        $(".modal-body").empty().append(response.data);
      };
}

// $('#db_table').on('click', '.moreButton', function(){ // https://codernote.ru/jquery/obrabotka-dinamicheski-dobavlennyx-v-dom-elementov/
//     let socket = new WebSocket("ws://151.248.113.144:8765");
//     let item_id = $(this).attr('id');
//     socket.onopen = function(e){ 
//         socket.send(item_id);
//     };

//     socket.onmessage = function(response) {
//         $(".modal-body").empty().append(response);
//       };

    
// });

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