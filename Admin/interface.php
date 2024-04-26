<?php
include ('include/header.php');
include ('include/sidebar.php');

$links = mysqli_fetch_array(mysqli_query($conectDB, "SELECT * FROM links WHERE id='1'"));
$links2 = mysqli_fetch_array(mysqli_query($conectDB, "SELECT * FROM links WHERE id='2'"));

$contact = mysqli_fetch_array(mysqli_query($conectDB, "SELECT * FROM contactus WHERE id='1'"));
$analytics = mysqli_fetch_array(mysqli_query($conectDB, "SELECT * FROM analytics WHERE id='1'"));

?>


<link rel="stylesheet" href="assets/libs/filepond/filepond.min.css">
<link rel="stylesheet" href="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
<link rel="stylesheet" href="assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">

<link rel="stylesheet" href="assets/libs/dropzone/dropzone.css">

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0"></h1>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="row mb-5">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header d-sm-flex d-block">
                                <ul class="nav nav-tabs nav-tabs-header mb-0 d-sm-flex d-block" role="tablist">
                                    <li class="nav-item m-1">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#tap1" aria-selected="true">البنر الإعلاني</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#tap2" aria-selected="true">الإحصائيات</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#tap3" aria-selected="true">شركاء النجاح</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#tap4" aria-selected="true">تواصل معنا</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#tap5" aria-selected="true">الروابط السريعة</a>
                                    </li>
                                </ul>
                            </div>                            
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="tap1" role="tabpanel" style="min-height:480px">
                                        <div class="p-sm-3 p-0 row">
                                            <?php
                                                $i = 1;
                                                $ddaa = mysqli_query($conectDB, "SELECT * FROM slideshow ");
                                                    while ($data = mysqli_fetch_array($ddaa)) {
                                                        if ( $data['status'] == 1){
                                                            $status = '<input class="form-check-input switch-slideshow" type="checkbox" role="switch" checked status="1" row="'.$data['id'].'" style="float:left;margin-top: 10px;">';
                                                        } else {
                                                            $status = '<input class="form-check-input switch-slideshow" type="checkbox" role="switch" status="0" row="'.$data['id'].'" style="float:left;margin-top: 10px;">';
                                                        }
                                                        
                                                        echo '<div class="col-xl-6">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="card custom-card">
                                                                        <div class="card-header">
                                                                            <div class="card-title">'.$data['title'].'</div>
                                                                            <div class="form-check form-switch" style="width: calc(100% - 40px);">'.$status.'
                                                                                <a class="btn btn-icon btn-secondary-transparent rounded-pill btn-wave waves-effect waves-light ViewUploadModel" row="'.$data['id'].'"  style="float:left;margin-left: -45px;"><i class="ri-edit-line"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="card custom-card">
                                                                       <img class="slideshow_img" src="../images/slideshow/'.$data['id'].'.jpg?t='.$tm.'" style="border-radius: 25px; width:100%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                    }
                                                $i++;
                                            ?>                                            
                                        </div>
                                    </div>


                                    <div class="tab-pane show" id="tap2" role="tabpanel" style="min-height:480px">
                                        <div class="p-sm-3 p-0">
                                            <div class="row gy-4">
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">عدد المنتسبين</p>
                                                    <input type="text" class="form-control" id="analytics1_val1" value="<?php echo $analytics['value1']; ?>">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-label" class="form-label">برنامج تدريبي</label>
                                                    <input type="text" class="form-control" id="analytics1_val2" value="<?php echo $analytics['value2']; ?>">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-placeholder" class="form-label">شريك النجاح</label>
                                                    <input type="text" class="form-control" id="analytics1_val3" value="<?php echo $analytics['value3']; ?>">
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row mb-3">
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">عنوان الرابط (أسفل الإحصائيات)</p>
                                                    <input type="text" value="<?php echo $links2['link1title']; ?>" class="form-control" id="2link1title">
                                                </div>
                                                <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">الرابط</p>
                                                    <input type="text" value="<?php echo $links2['link1url']; ?>" class="form-control" id="2link1url">
                                                </div>
                                            </div> 
                                            <div class="row gy-4"> 
                                                 <div class="float-end" style="text-align: center;">
                                                        <button id="updateanalytics" class="btn btn-primary m-1">
                                                            تحديث الإحصائيات
                                                        </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane show" id="tap3" role="tabpanel" style="min-height:480px">
                                        <div class="p-sm-3 p-0 row">
                                            <?php
                                                $i = 1;
                                                $ddaa = mysqli_query($conectDB, "SELECT * FROM partners ");
                                                    while ($data = mysqli_fetch_array($ddaa)) {
                                                        if ( $data['status'] == 1){
                                                            $status = '<input class="form-check-input switch-partners" type="checkbox" role="switch" checked status="1" row="'.$data['id'].'" style="float:left;margin-top: 10px;">';
                                                        } else {
                                                            $status = '<input class="form-check-input switch-partners" type="checkbox" role="switch" status="0" row="'.$data['id'].'" style="float:left;margin-top: 10px;">';
                                                        }
                                                        
                                                        echo '<div class="col-xl-3 border border-5">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="card custom-card">
                                                                        <div class="card-header">
                                                                            <div class="form-check form-switch" style="width: calc(100% - 40px);">'.$status.'
                                                                                <a class="btn btn-icon btn-secondary-transparent rounded-pill btn-wave waves-effect waves-light ViewUploadModel2" row="'.$data['id'].'"  style="float:left;margin-left: -45px;"><i class="ri-edit-line"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="card custom-card">
                                                                       <img class="partners_img" src="../images/partners/'.$data['id'].'.jpg?t='.$tm.'" style="border-radius: 10px; width:100%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                    }
                                                $i++;
                                            ?> 

                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane show" id="tap4" role="tabpanel" style="min-height:480px">
                                        <div class="p-sm-3 p-0">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="width:115px;">العنوان</span>
                                                <input type="text" class="form-control" id="address" value="<?php echo $contact['address']; ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="width:115px;">رقم الهاتف</span>
                                                <input type="text" class="form-control" id="phone" value="<?php echo $contact['phone']; ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="width:115px;">الخط الساخن</span>
                                                <input type="text" class="form-control" id="hotline" value="<?php echo $contact['hotline']; ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="width:115px;">البريد الإلكتروني</span>
                                                <input type="text" class="form-control" id="email" value="<?php echo $contact['email']; ?>">
                                            </div>
                                            <hr/>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="width:115px;">تويتر</span>
                                                <input type="text" class="form-control" id="twitter" value="<?php echo $contact['twitter']; ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="width:115px;">فيسبوك</span>
                                                <input type="text" class="form-control" id="facebook" value="<?php echo $contact['facebook']; ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="width:115px;">انستجرام</span>
                                                <input type="text" class="form-control" id="instagram" value="<?php echo $contact['instagram']; ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="width:115px;">يوتيوب</span>
                                                <input type="text" class="form-control" id="youtube" value="<?php echo $contact['youtube']; ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="width:115px;">لينكدإن</span>
                                                <input type="text" class="form-control" id="linkedin" value="<?php echo $contact['linkedin']; ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" style="width:115px;">خرائط جوجل</span>
                                                <input type="text" class="form-control" id="googlemap" value="<?php echo $contact['googlemap']; ?>">
                                            </div>
                                            <div class="row gy-4"> 
                                                 <div class="float-end" style="text-align: center;">
                                                        <button id="updatecontact" class="btn btn-primary m-1">
                                                            تحديث بيانات التواصل
                                                        </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane show" id="tap5" role="tabpanel" style="min-height:480px">
                                        <div class="p-sm-3 p-0">
                                            
                                            <div class="row mb-3">
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">عنوان الرابط 1:</p>
                                                    <input type="text" value="<?php echo $links['link1title']; ?>" class="form-control" id="link1title">
                                                </div>
                                                <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">الرابط 1:</p>
                                                    <input type="text" value="<?php echo $links['link1url']; ?>" class="form-control" id="link1url">
                                                </div>
                                             </div>   
                                            
                                            <div class="row mb-3">
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">عنوان الرابط 2:</p>
                                                    <input type="text" value="<?php echo $links['link2title']; ?>" class="form-control" id="link2title">
                                                </div>
                                                <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">الرابط 2:</p>
                                                    <input type="text" value="<?php echo $links['link2url']; ?>" class="form-control" id="link2url">
                                                </div>
                                             </div> 

                                            <div class="row mb-3">
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">عنوان الرابط 3:</p>
                                                    <input type="text" value="<?php echo $links['link3title']; ?>" class="form-control" id="link3title">
                                                </div>
                                                <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">الرابط 3:</p>
                                                    <input type="text" value="<?php echo $links['link3url']; ?>" class="form-control" id="link3url">
                                                </div>
                                             </div> 
                                             
                                             <div class="row mb-3">
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">عنوان الرابط 4:</p>
                                                    <input type="text" value="<?php echo $links['link4title']; ?>" class="form-control" id="link4title">
                                                </div>
                                                <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">الرابط 4:</p>
                                                    <input type="text" value="<?php echo $links['link4url']; ?>" class="form-control" id="link4url">
                                                </div>
                                             </div> 
                                             
                                             <div class="row mb-3">
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">عنوان الرابط 5:</p>
                                                    <input type="text" value="<?php echo $links['link5title']; ?>" class="form-control" id="link5title">
                                                </div>
                                                <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">الرابط 5:</p>
                                                    <input type="text" value="<?php echo $links['link5url']; ?>" class="form-control" id="link5url">
                                                </div>
                                             </div> 
                                            
                                            <div class="row gy-4"> 
                                                 <div class="float-end" style="text-align: center;">
                                                        <button id="updatelinks" class="btn btn-primary m-1">
                                                            تحديث قائمة الروابط
                                                        </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>



<div class="modal effect-scale"  id="UploadModal">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <h6 class="text-muted mb-0">يرجي إختيار صورة بصيغة JPG مقاس 1024 بيكسل * 700 بيكسيل</h6>
                <iframe id="uploaderIfame" style="width:100%; height:170px; border:none; margin-top:10px"></iframe>
            </div>

        </div>
    </div>
</div>

<div class="modal effect-scale"  id="UploadModal2">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <h6 class="text-muted mb-0">يرجي إختيار صورة بصيغة JPG مقاس 375 بيكسل * 375 بيكسيل</h6>
                <iframe id="uploaderIfame2" style="width:100%; height:170px; border:none; margin-top:10px"></iframe>
            </div>

        </div>
    </div>
</div>
    <!-- Prism JS -->
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/js/prism-custom.js"></script>

    <!-- Filepond JS -->
    <script src="assets/libs/filepond/filepond.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js"></script>
    <script src="assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
    <script src="assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js"></script>

    <!-- Dropzone JS -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>

    <!-- Fileupload JS -->
    <script src="assets/js/fileupload.js"></script>
    
    
<?php
include ('include/footer.php');
?>


     <script>
		$('.switch-slideshow').click(function(){
			var id = $(this).attr('row');
			if ($(this).is(':checked')) {
				$(this).attr('status','1')
			} else {
				$(this).attr('status','0')
			}
			var status = $(this).attr('status');
            var PostData = { 
                action: "updateslidestatus", 
                id: id, 
                status: status
            };
            $.ajax({
            	url: "controller/interface.php" , data: PostData, type: "POST",	success: function (e) { }
            });					
		})     

		$('.switch-partners').click(function(){
			var id = $(this).attr('row');
			if ($(this).is(':checked')) {
				$(this).attr('status','1')
			} else {
				$(this).attr('status','0')
			}
			var status = $(this).attr('status');
            var PostData = { 
                action: "updatepartnersstatus", 
                id: id, 
                status: status
            };
            $.ajax({
            	url: "controller/interface.php" , data: PostData, type: "POST",	success: function (e) { }
            });					
		})
		
		
        $('.ViewUploadModel').click(function(){
            var row = $(this).attr('row');
            $('#uploaderIfame').attr('src','controller/uploader.php?dir=../../images/slideshow&filename='+row)
            $('#UploadModal').modal('show');
        })
        $('#UploadModal').on('hidden.bs.modal', function (e) {
          $('#uploaderIfame').attr('src','')
          $('.slideshow_img').each(function() {
              var newsrc = $(this).attr('src')
              $(this).attr('src',newsrc + '&m=' + $.now());
            });
        })
        
        

        $('.ViewUploadModel2').click(function(){
            var row = $(this).attr('row');
            $('#uploaderIfame2').attr('src','controller/uploader.php?dir=../../images/partners&filename='+row)
            $('#UploadModal2').modal('show');
        })
        $('#UploadModal2').on('hidden.bs.modal', function (e) {
          $('#uploaderIfame2').attr('src','')
          $('.partners_img').each(function() {
              var newsrc = $(this).attr('src')
              $(this).attr('src',newsrc + '&m=' + $.now());
            });
        })
        
        
        
        $('#updatelinks').click(function(){
            var PostData = { 
                action: "updatelinks", 
                link1title: $('#link1title').val(), 
                link2title: $('#link2title').val(),
                link3title: $('#link3title').val(),  
                link4title: $('#link4title').val(), 
                link5title: $('#link5title').val(), 
                
                link1url: $('#link1url').val(), 
                link2url: $('#link2url').val(), 
                link3url: $('#link3url').val(), 
                link4url: $('#link4url').val(), 
                link5url: $('#link5url').val()
                
                
            };
            $.ajax({
            	url: "controller/interface.php" , data: PostData, type: "POST",
            		success: function (e) { 
            		        Swal.fire({
                                title: 'تم التحديث بنجاح',
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 1500
                            })
            		}
            });	
        })
        
        $('#updatecontact').click(function(){
            var PostData = { 
                action: "updatecontact", 
                address: $('#address').val(), 
                phone: $('#phone').val(),
                hotline: $('#hotline').val(),  
                email: $('#email').val(), 
                
                twitter: $('#twitter').val(), 
                facebook: $('#facebook').val(), 
                instagram: $('#instagram').val(), 
                youtube: $('#youtube').val(), 
                linkedin: $('#linkedin').val(), 
                googlemap: $('#googlemap').val()
                
                
            };
            $.ajax({
            	url: "controller/interface.php" , data: PostData, type: "POST",
            		success: function (e) { 
            		        Swal.fire({
                                title: 'تم التحديث بنجاح',
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 1500
                            })
            		}
            });	
        })        

        $('#updateanalytics').click(function(){
            var PostData = { 
                action: "updateanalytics", 
                val1: $('#analytics1_val1').val(), 
                val2: $('#analytics1_val2').val(),
                val3: $('#analytics1_val3').val(),  
                link1title: $('#2link1title').val(), 
                link1url: $('#2link1url').val()
                
                
            };
            $.ajax({
            	url: "controller/interface.php" , data: PostData, type: "POST",
            		success: function (e) { 
            		        Swal.fire({
                                title: 'تم التحديث بنجاح',
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 1500
                            })
            		}
            });	
        })      
        
    </script>  