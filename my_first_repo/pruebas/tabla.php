
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hello DefaultController!</title>
        
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>

        <!-- Datatables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.css">
        <script src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script>
    </head>
    <body class="container-fluid p-5">
<div class="table-responsive" id="mydatatable-container">
    <table class="records_list table table-striped table-bordered table-hover" id="mydatatable">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
                <th>Column 3</th>
                <th>Column 4</th>
                <th>Column 5</th>
                <th>Column 6</th>
                <th>Column 7</th>
                <th>Column 8</th>
                <th>Column 9</th>
                <th>Column 10</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
            </tr>
        </tfoot>
        <tbody>
           <tr>
                <td>item 0 0</td>
                <td>item 0 1</td>
                <td>item 0 2</td>
                <td>item 0 3</td>
                <td>item 0 4</td>
                <td>item 0 5</td>
                <td>item 0 6</td>
                <td>item 0 7</td>
                <td>item 0 8</td>
                <td>item 0 9</td>
            </tr>
            <tr>
                <td>item 1 0</td>
                <td>item 1 1</td>
                <td>item 1 2</td>
                <td>item 1 3</td>
                <td>item 1 4</td>
                <td>item 1 5</td>
                <td>item 1 6</td>
                <td>item 1 7</td>
                <td>item 1 8</td>
                <td>item 1 9</td>
            </tr>
            <tr>
                <td>item 2 0</td>
                <td>item 2 1</td>
                <td>item 2 2</td>
                <td>item 2 3</td>
                <td>item 2 4</td>
                <td>item 2 5</td>
                <td>item 2 6</td>
                <td>item 2 7</td>
                <td>item 2 8</td>
                <td>item 2 9</td>
            </tr>
/*          
Etcétera.. Aquí añade todas las filas de la tabla que quieras.
*/
        </tbody>
    </table>
</div>
<style>
#mydatatable tfoot input{
    width: 100% !important;
}
#mydatatable tfoot {
    display: table-header-group !important;
}
</style>

<script type="text/javascript">
$(document).ready(function() {
    $('#mydatatable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Filtrar.." />' );
    } );

    var table = $('#mydatatable').DataTable({
        "dom": 'B<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
        "responsive": false,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        "order": [[ 0, "desc" ]],
        "initComplete": function () {
            this.api().columns().every( function () {
                var that = this;

                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                        }
                });
            })
        }
    });
});
</script>
</body>
</html>