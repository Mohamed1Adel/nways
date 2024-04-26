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
            <h1 class="page-title fw-semibold fs-18 mb-0">Add Hotel</h1>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Add New Hotel
                        </div>

                    </div>
                    <div class="card-body">
                        
                        <form action="back/add_hotel.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="title" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="title" id="title" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="ar_title" class="col-sm-3 col-form-label">Arabic Title</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="ar_title" id="ar_title" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-3 col-form-label">Decsreption</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" id="description" required
                                        rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="ar_description" class="col-sm-3 col-form-label">Arabic Decsreption</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="ar_description" id="ar_description" required
                                        rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="images" class="col-sm-3 col-form-label">Upload Images</label>
                                <div class="col-sm-9">
                                    <input type="file" class="" name="images[]" id="images" multiple required>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="video_link" class="col-sm-3 col-form-label">Video Link</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="video_link" id="video_link" 
                                            rows="5"></textarea>
                                       
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="price" class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="price" id="price" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="city" class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="city" id="city" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="city" class="col-sm-3 col-form-label"> Arabic City</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="ar_city" id="ar_city" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="location" class="col-sm-3 col-form-label">Location</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="location" id="location" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword1" class="col-sm-3 col-form-label">Starts</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="stars" id="stars" min="1" max="5" required>

                                    </div>
                                </div>
                            </div>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Options</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="offer" id="offer"

                                            value="1" style="float:left">
                                        <label class="form-check-label" for="offer">
                                            In Offer
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <select name="status" id="status" required>
                                            <option value="1">Available</option>
                                            <option value="0">Not Available</option>
                                        </select>
                                       
                                    </div>

                            </fieldset>
                            <button type="submit" class="btn btn-primary">Add Hotel</button>
                        </form>
                    </div>
                    <div class="card-footer d-none border-top-0">

                    </div>
                </div>
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