<?php
include ('include/header.php');
include ('include/sidebar.php');

?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
<link href="assets/css/icons.css" rel="stylesheet">
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Add Hotel</h1>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Arabic Title</th>
                            <th scope="col">City</th>
                            <th scope="col">Arabic City</th>
                            <th scope="col">Location</th>
                            <th scope="col">Arabic Location</th>
                            <th scope="col">Starts</th>
                            <th scope="col">Offer</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === "GET") {
                            $id = $_REQUEST['id'] ?? "";
                            if ($id != "") {
                                $sql = "DELETE FROM hotels WHERE id = $id";
                                $result = $conectDB->query($sql);

                                if ($result) {
                                    echo '<script>
                                                alert("hotel deleted successfully");
                                                window.location.href= "all_hotels.php";
                                                </script>';
                                } else {
                                    echo "Error";
                                }
                            }
                        }



                        $sql = "SELECT * From hotels";
                        $result = $conectDB->query($sql);


                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>
                                        <th scope="row">' . $row['title'] . '</th>
                                        <th scope="row">' . $row['ar_title'] . '</th>
                                        <th scope="row">' . $row['city'] . '</th>
                                        <th scope="row">' . $row['ar_city'] . '</th>
                                        <th scope="row">' . $row['location'] . '</th>
                                        <th scope="row">' . $row['ar_location'] . '</th>
                                        <td>';
                                for ($i = 1; $i <= $row['stars']; $i++) {
                                    echo "<i class=\"ri-star-s-fill\"></i>";
                                }
                                echo '</td>
                                        <td>' . $row['offer'] . '</td>
                                        <td>';
                                if ($row['status'] == 1) {
                                    echo '<span class="badge bg-success">Available</span>';
                                } else {
                                    echo '<span class="badge bg-danger">Not Available</span>';
                                }
                                echo '</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                               
                                                <a href="update_hotel.php?id=' . $row['id'] . '"
                                                    class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                        class="ri-edit-line"></i></a>
                                                <a href="all_hotels.php?id=' . $row['id'] . '"
                                                    class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                        class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>';
                            }
                        } else {
                            echo "";
                        }



                        ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!--End::row-1 -->

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