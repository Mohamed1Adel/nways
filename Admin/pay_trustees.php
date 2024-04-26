<?php
include ('include/header.php');
include ('include/sidebar.php');

?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    
                </div>
                <!-- Page Header Close -->

<!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <table id="data-export" class="table table-bordered text-nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="10px">#</th>
                                            <th width="100px">الأسم</th>
                                            <th>الرقم المدني</th>
                                            <th>رقم الجوال</th>
                                            <th>رقم الطلب</th>
                                            <th>المبلغ بالدينار</th>
                                            <th>الوقت</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                                $i = 1;
                                                $ddaa = mysqli_query($conectDB, "SELECT * FROM payments ORDER BY `id` DESC");
                                                    while ($data = mysqli_fetch_array($ddaa)) {
                                                        echo '<tr row="'.$data['id'].'">
                                                                <td>'.$data['udf1'].'</td>
                                                                <td>'.$data['udf3'].'</td>
                                                                <td>'.$data['udf2'].'</td>
                                                                <td>'.$data['transiction_id'].'</td>
                                                                <td>'.$data['amount'].'</td>
                                                                <td>'.$data['date'].'</td>
                                                            </tr>';
                                                    }
                                                $i++;
                                            ?>	


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

            </div>
        </div>
        <!-- End::app-content -->


<?php
include ('include/footer.php');
?>

			
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

<script>
    $('#data-export').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        scrollX: true,
		pageLength: 25 ,
		language: {
             url: 'assets/libs/data-table/ar.json',
        },
    });
</script>