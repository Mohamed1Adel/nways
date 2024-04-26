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
            <h1 class="page-title fw-semibold fs-18 mb-0">Update Hotel</h1>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Update Hotel
                        </div>

                    </div>
                    <div class="card-body">




                        <?php


                        // Fetch Hotel Details by ID
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            $sql = "SELECT * FROM hotels WHERE id = $id";
                            $result = $conectDB->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                // Display Update Form
                        

                                echo '
                                <form action="back/update_hotel_process.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="hotel_id" value="' . $id . '">
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="title" id="title" value="' . $row['title'] . '" required>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="ar_title" class="col-sm-3 col-form-label">Arabic Title</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="ar_title" id="ar_title" value="' . $row['ar_title'] . '" required>
    
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
                                </div>
                                <div class="row mb-3">
                                   ';

                                $hotel_images = explode(',', $row['imgs']);
                                foreach ($hotel_images as $hotel_image) {
                                    if (!empty($hotel_image)) {

                                        echo '
                                            <div class="col-4">
                                            <img src="back/uploads/' . $hotel_image . '" style="max-width: 100px; margin-right: 5px;">
                                   </div>
                                            ';

                                    }
                                }

                                echo '</div>
                                <div class="row mb-3">
                                    <label for="video_link" class="col-sm-3 col-form-label">Video Link</label>
                                    <div class="col-sm-9">
                                    <textarea class="form-control" name="video_link" id="video_link" 
                                            rows="5">' . $row['video_link'] . '</textarea>
                                       
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="price" class="col-sm-3 col-form-label">Price</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="price" id="price" value="' . $row['price'] . '" >
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="city" class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="city" id="city" value="' . $row['city'] . '" required>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="city" class="col-sm-3 col-form-label">Arabic City</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="ar_city" id="ar_city" value="' . $row['ar_city'] . '" required>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="location" class="col-sm-3 col-form-label">Location</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="location" id="location" value="' . $row['location'] . '" required>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="location" class="col-sm-3 col-form-label">Arabic Location</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="ar_location" id="ar_location" value="' . $row['ar_location'] . '" required>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword1" class="col-sm-3 col-form-label">Starts</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="stars" id="stars" min="1"
                                                max="5" value="' . $row['stars'] . '" required>
    
                                        </div>
                                    </div>
                                </div>
    
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Options</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="offer"  id="offer"
                                            ' . ($row['offer'] == 1 ? 'value="' . $row['offer'] . '"' : 'value="1"') . ' ' . ($row['offer'] == 1 ? 'checked' : '') . ' style="float:left">
                                            <label class="form-check-label" for="offer">
                                                In Offer
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <select name="status" id="status" >
                                                <option value="1" ' . ($row['status'] == '1' ? 'selected' : '') . '>Available</option>
                                                <option value="0" ' . ($row['status'] == '0' ? 'selected' : '') . '>Not Available</option>
                                            </select>
                                            
                                        </div>
    
                                </fieldset>
                                <button type="submit" class="btn btn-primary">Update Hotel</button>
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
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            $sql = "SELECT * FROM hotels WHERE id = $id";
                            $result = $conectDB->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                echo '
                                <form action="back/add_room.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="hotel_id" value="' . $id . '">
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="title" id="title"  required>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="ar_title" class="col-sm-3 col-form-label">Arabic Title</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="ar_title" id="ar_title"  required>
    
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
                                    <label for="price" class="col-sm-3 col-form-label">Price</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="price" id="price"  required>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="peds" class="col-sm-3 col-form-label">Beds</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="peds" id="peds"  required>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="space" class="col-sm-3 col-form-label">Space</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="space" id="space"  required>
    
                                        </div>
                                    </div>
                                </div>

                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Options</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" name="palcon" value="1" id="palcon" style="float:left">
                                            <label class="form-check-label" for="palcon">
                                            Palcon
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="air" value="1" id="air" style="float:left">
                                            <label class="form-check-label" for="air">
                                            Air
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="wifi" value="1" id="wifi" style="float:left">
                                            <label class="form-check-label" for="wifi">
                                            WIFI
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="bath" value="1" id="bath" style="float:left">
                                            <label class="form-check-label" for="bath">
                                            Bath
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="heater" value="1" id="heater" style="float:left">
                                            <label class="form-check-label" for="heater">
                                            Heater
                                            </label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <select name="status" id="status" required>
                                                <option value="1">Available</option>
                                                <option value="0">Not Available</option>
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

            <div class="row mb-4">
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Arabic Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Beds</th>
                                <th scope="col">Space</th>
                                <th scope="col">Palcon</th>
                                <th scope="col">Air</th>
                                <th scope="col">WIFI</th>
                                <th scope="col">Bath</th>
                                <th scope="col">Heater</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>

                            </tr>
                        </thead>
                        <tbody>


                            <?php

                            $sql = "SELECT * From rooms WHERE hotel_id= $id";
                            $result = $conectDB->query($sql);


                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr>
                                        <th scope="row">' . $row['title'] . '</th>
                                        <th scope="row">' . $row['ar_title'] . '</th>
                                        <th scope="row">' . $row['price'] . '</th>
                                        <th scope="row">' . $row['pads'] . '</th>
                                        <th scope="row">' . $row['space'] . '</th>

                                        <td>';
                                    if ($row['palcon'] == 1) {
                                        echo '<span class="badge bg-success">Available</span>';
                                    } else {
                                        echo '<span class="badge bg-danger">Not Available</span>';
                                    }
                                    echo '</td>
                                    <td>';
                                    if ($row['air'] == 1) {
                                        echo '<span class="badge bg-success">Available</span>';
                                    } else {
                                        echo '<span class="badge bg-danger">Not Available</span>';
                                    }
                                    echo '</td>
                                    <td>';
                                    if ($row['wifi'] == 1) {
                                        echo '<span class="badge bg-success">Available</span>';
                                    } else {
                                        echo '<span class="badge bg-danger">Not Available</span>';
                                    }
                                    echo '</td>
                                    <td>';
                                    if ($row['bath'] == 1) {
                                        echo '<span class="badge bg-success">Available</span>';
                                    } else {
                                        echo '<span class="badge bg-danger">Not Available</span>';
                                    }
                                    echo '</td>
                                    <td>';
                                    if ($row['heater'] == 1) {
                                        echo '<span class="badge bg-success">Available</span>';
                                    } else {
                                        echo '<span class="badge bg-danger">Not Available</span>';
                                    }
                                    echo '</td>
                                    <td>';
                                    if ($row['status'] == 1) {
                                        echo '<span class="badge bg-success">Available</span>';
                                    } else {
                                        echo '<span class="badge bg-danger">Not Available</span>';
                                    }
                                    echo '</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                               
                                                <a href="update_room.php?room_id=' . $row['id'] . '&hid='.$id.'"
                                                    class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                        class="ri-edit-line"></i></a>
                                                <a href="back/delete_room.php?id=' . $row['id'] . '&hid='.$id.'"
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