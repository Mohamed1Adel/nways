<?php
include ('include/header.php');
include ('include/sidebar.php');

?>
<link rel="stylesheet" href="assets/libs/quill/quill.snow.css">
<link rel="stylesheet" href=".assets/libs/quill/quill.bubble.css">
<link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
<link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">

<link rel="stylesheet" href="assets/libs/filepond/filepond.min.css">
<link rel="stylesheet" href="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
<link rel="stylesheet" href="assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">

<link rel="stylesheet" href="assets/libs/dropzone/dropzone.css">

        <div class="main-content app-content">
            <div class="container-fluid">
                <br/>


                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card card-body">
                            <div class="input-group">
                                <div class="input-group-text text-muted"> <i class="bx bx-edit-alt"></i> </div>
                                <input id="title" type="text" class="form-control" placeholder="عنوان الخبر">
                            </div>
                            
                            <div class="input-group">
                                <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                <input type="text" class="form-control" id="date" placeholder="تاريخ النشر">
                            </div>
                            
                            <div class="input-group">
                                <div class="form-check" style="width:100px; padding:10px; margin-right:20px">
                                    <input class="form-check-input" type="radio" name="status" value="1" id="status" checked>
                                    <label class="form-check-label" for="Radio-md">
                                        نشر 
                                    </label>
                                </div>
                                <div class="form-check" style="padding:10px; margin-right:20px">
                                    <input class="form-check-input" type="radio" name="status" value="0" id="status">
                                    <label class="form-check-label" for="Radio-md">
                                        مسودة
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                                <form id="imguploader" data-single="true" method="post" action="controller/upload_image.php?dir=../../images/news&filename=<?php echo time();?>" class="dropzone">
                                    <div class="dz-default dz-message"><button class="dz-button" type="button">يرجي إختيار صورة الخبر</button></div>
                                </form>
                        </div>
                    </div>                 
                </div>
                <!-- End:: row-1 -->
                
                
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div id="editor"> </div>
                            </div>
                            <div class="float-end" style="text-align: center; padding:10px;">
                                <button id="PostDataBTM" class="btn btn-primary">إضافة الخبر</button>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->


            </div>
        </div>

<script src="assets/libs/quill/quill.min.js"></script>
<script src="assets/js/quill-editor.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/js/date&time_pickers.js"></script>

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
        $('#PostDataBTM').click(function(){
            var error = 0;
            if( $('#title').val().length === 0 || $('#date').val().length === 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'يرجي إدخال كافة الحقول المطلوبة',
                    confirmButtonText: 'موافق',
                    confirmButtonColor: '#3085d6'
                })
                var error = 1;
            }
            if (error != 1) {
                var PostData = { 
                    action: "add", 
                    title: $('#title').val(), 
                    date: $('#date').val(),
                    image: $('#imguploader').attr('action').split('filename=').pop(),
                    content: $('#editor').html(), 
                    status: $('input[name=status]:checked').val()
                };
                $.ajax({
                	url: "controller/news.php" , data: PostData, type: "POST",
                		success: function (e) { 
                		        Swal.fire({
                                    title: 'تم إضافة الخبر بنجاح',
                                    text: 'جاري الإنتقال لصفخة عرض الأخبار',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 2500
                                })   
                                setTimeout(function(){ window.location.href = "view_news" }, 3000);
                		}
                });	                
            }
        })
    </script>