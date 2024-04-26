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
            <h1 class="page-title fw-semibold fs-18 mb-0">Update Room</h1>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Add New Room
                        </div>

                    </div>
                    <div class="card-body">


                        <?php

                        // Fetch Hotel Details by ID
                        if (isset($_GET['room_id']) && isset($_GET['hid'])) {
                            $id = $_GET['room_id'];
                            $hid = $_GET['hid'];

                            $sql = "SELECT * FROM rooms WHERE id = $id";
                            $result = $conectDB->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                echo '
                                <form action="back/update_room_process.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="room_id" value="' . $id . '">
                                <input type="hidden" name="hid" value="' . $hid . '">
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="title" id="title" value="' . $row['title'] . '"  required>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="ar_title" class="col-sm-3 col-form-label">Arabic Title</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="ar_title" id="ar_title" value="' . $row['ar_title'] . '"  required>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-sm-3 col-form-label">Decsreption</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="description" id="description" required
                                            rows="5">' . $row['description'] . '</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="ar_description" class="col-sm-3 col-form-label">Arabic Decsreption</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="ar_description" id="ar_description" required
                                            rows="5">' . $row['ar_description'] . '</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="images" class="col-sm-3 col-form-label">Upload Images</label>
                                <div class="col-sm-9">
                                    <input type="file" class="" name="images[]" id="images" multiple>

                                </div>
                                Current Images:<br>';
        $room_images = explode(',', $row['images']);
        foreach ($room_images as $room_image) {
            if (!empty($room_image)) {
                echo "<img src='back/uploads/$room_image' style='max-width: 100px; margin-right: 5px;'>";
            }
        }
                            echo '</div>
                                <div class="row mb-3">
                                    <label for="price" class="col-sm-3 col-form-label">Price</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="price" id="price" value="' . $row['price'] . '" required>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="peds" class="col-sm-3 col-form-label">Beds</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="peds" value="' . $row['pads'] . '" id="peds"  required>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="space" class="col-sm-3 col-form-label">Space</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="space" id="space" value="' . $row['space'] . '" required>
    
                                        </div>
                                    </div>
                                </div>

                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Options</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" name="palcon" ' . ($row['palcon'] == 1 ? 'value="'.$row['palcon'].'"' : 'value="1"') . ' ' . ($row['palcon'] == 1 ? 'checked' : '') . ' id="palcon" style="float:left">
                                            <label class="form-check-label" for="palcon">
                                            Palcon
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="air" ' . ($row['air'] == 1 ? 'value="'.$row['air'].'"' : 'value="1"') . ' ' . ($row['air'] == 1 ? 'checked' : '') . ' id="air" style="float:left">
                                            <label class="form-check-label" for="air">
                                            Air
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="wifi" ' . ($row['wifi'] == 1 ? 'value="'.$row['wifi'].'"' : 'value="1"') . ' ' . ($row['wifi'] == 1 ? 'checked' : '') . ' id="wifi" style="float:left">
                                            <label class="form-check-label" for="wifi">
                                            WIFI
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="bath" ' . ($row['bath'] == 1 ? 'value="'.$row['bath'].'"' : 'value="1"') . ' ' . ($row['bath'] == 1 ? 'checked' : '') . ' id="bath" style="float:left">
                                            <label class="form-check-label" for="bath">
                                            Bath
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="heater" ' . ($row['heater'] == 1 ? 'value="'.$row['heater'].'"' : 'value="1"') . ' ' . ($row['heater'] == 1 ? 'checked' : '') . ' id="heater" style="float:left">
                                            <label class="form-check-label" for="heater">
                                            Heater
                                            </label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <select name="status" id="status" required>
                                                <option value="1" ' . ($row['status'] == '1' ? 'selected' : '') . '>Available</option>
                                                <option value="0" ' . ($row['status'] == '0' ? 'selected' : '') . '>Not Available</option>
                                            </select>
                                            
                                        </div>
    
                                </fieldset>
                                <button type="submit" class="btn btn-primary">Add New Room</button>
                            </div>
                           
                            </form>
                                ';


                            } else {
                                echo "Hotel not found.";
                            }
                        } else {
                            echo "Hotel ID not provided.";
                        }





                        ?>
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