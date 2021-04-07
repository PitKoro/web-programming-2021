$('#db_table').DataTable({

    dom: 'Bfrtip',
    buttons: {
        dom: {
            button: {
                tag: 'button',
                className: ''
            }
        },
        buttons: [{
            extend: 'excelHtml5',
            filename: 'newTable',
            className: 'btn btn-primary',
            exportOptions: {
                columns: [0, 1, 2]
            }    
        }]
    }
});

