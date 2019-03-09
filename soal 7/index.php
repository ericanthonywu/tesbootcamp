<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered nowrap" id="tbl">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Category Name</td>
                        <td>Products</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        let base_url = window.location.origin + "/tesbootcamp/";
        var table = $('#tbl').DataTable({
            dom: 'B<"clear">lfrtip',
            responsive: true,
            ajax: `${base_url}soal 7/data.php`,
            columns: [
                {
                    "data": "id",
                    "sClass": "text-center",
                },
                {
                    "data": "category_name",
                    "sClass": "text-center",
                },
                {
                    "data": "products",
                    "sClass": "text-center",
                }
            ],
            buttons: [
                'copy', 'excel', 'pdf'
            ],
            language: {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "Data Produk tidak tersedia",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "infoEmpty": "Data tidak ditemukan",
                "infoFiltered": "(Terfilter _TOTAL_ data dari _MAX_ total data)",
                "lengthMenu": "_MENU_ data",
                "search": "Cari:",
                "zeroRecords": "Tidak ada data yang cocok"
            },
            colReorder: {
                realtime: false
            },
            "order": [
                [0, 'asc']
            ],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 10
        });
        // table.buttons().container()
        //     .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
    })
</script>
</body>
</html>