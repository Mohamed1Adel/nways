<?php
include ('include/header.php');
include ('include/sidebar.php');

?>

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">الملف الشخصي</h1>
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
                                        href="#personal-info" aria-selected="true">البيانات الأساسية</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#security" aria-selected="true">كلمة المرور</a>
                                    </li>
                                </ul>
                            </div>                            
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="personal-info" role="tabpanel" style="min-height:480px">
                                        <div class="p-sm-3 p-0">
                                            <h6 class="fw-semibold mb-3">
                                                الصورة الرمزية :
                                            </h6>
                                            

                                            <form id="imguploader" class="mb-4 d-sm-flex align-items-center" method="post" action="controller/upload_image.php?dir=../assets/images/users&filename=<?php echo $user['id'];?>">
                                                <div class="mb-0 me-5">
                                                    <span class="avatar avatar-xxl avatar-rounded">
                                                        <img src="assets/images/users/<? echo $user['id']; ?>.jpg?t=<?php echo time(); ?>" alt="" id="profile-img">
                                                        <a href="javascript:void(0);" class="badge rounded-pill bg-primary avatar-badge">
                                                            <input type="file" name="file" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                                            <i class="fe fe-camera"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="btn-group">
                                                    <button  class="btn btn-primary">تغيير</button>
                                                </div>
                                            </form>
                                            
                                            
                                            <div class="row gy-4 mb-4">
                                                <div class="col-xl-6">
                                                    <label for="fullname" class="form-label">الأسم بالكامل</label>
                                                    <input type="text" class="form-control" id="fullname" value="<? echo $user['fullname']; ?>">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="jobtitle" class="form-label">المسمي الوظيفي</label>
                                                    <input type="text" class="form-control" id="jobtitle" value="<? echo $user['jobtitle']; ?>">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                                    <input type="text" class="form-control" id="email" value="<? echo $user['email']; ?>">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="phone" class="form-label">رقم التواصل</label>
                                                    <input type="text" class="form-control" id="phone" value="<? echo $user['phone']; ?>">
                                                </div>
                                                <div class="float-end" style="text-align: center;">
                                                    <button id="updateprofile" class="btn btn-primary m-1">
                                                        تحديث البيانات الأساسية
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane show" id="security" role="tabpanel" style="min-height:480px">
                                        <div class="p-sm-3 p-0">

                                            <div class="row gy-4 mb-4">
                                                <div class="col-xl-6">
                                                    <label for="oldpassword" class="form-label">كلمة المرور القديمة</label>
                                                    <input type="text" class="form-control" id="oldpassword">
                                                </div>
                                            </div>
                                            <div class="row gy-4 mb-4">
                                                <div class="col-xl-6">
                                                    <label for="newpassword" class="form-label">كلمة المرور الجديدة</label>
                                                    <input type="password" class="form-control" id="newpassword">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="confirmpassord" class="form-label">تأكيد كلمة المرور</label>
                                                    <input type="password" class="form-control" id="confirmpassord">
                                                </div>
                                                <div class="float-end" style="text-align: center;">
                                                    <button id="updatepassword"  class="btn btn-primary m-1">
                                                       تغيير كلمة المرور
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

<?php
include ('include/footer.php');
?>


     <script>
        $('#updateprofile').click(function(){
            var PostData = { 
                action: "updateprofile", 
                fullname: $('#fullname').val(), 
                jobtitle: $('#jobtitle').val(),
                email: $('#email').val(),  
                phone: $('#phone').val(), 
                username: $('#DB_username').val(), 
                sid: $('#DB_sid').val()
            };
            $.ajax({
            	url: "controller/profile.php" , data: PostData, type: "POST",
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
        
        $('#updatepassword').click(function(){
            var error = 0;
            if( $('#oldpassword').val().length === 0 || $('#newpassword').val().length === 0 || $('#confirmpassord').val().length === 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'يرجي إدخال كافة الحقول المطلوبة',
                    confirmButtonText: 'موافق',
                    confirmButtonColor: '#3085d6'
                })
                var error = 1;
            }
            
            if( $('#newpassword').val() != $('#confirmpassord').val()) {
                Swal.fire({
                    icon: 'error',
                    title: 'كلمة المرور الجديدة غير متطابقة',
                    confirmButtonText: 'موافق',
                    confirmButtonColor: '#3085d6'
                })
                var error = 1;
            }            
            
            if (error != 1) {
                var PostData = { 
                    action: "updatepassword", 
                    oldpassword: $('#oldpassword').val(), 
                    newpassword: $('#newpassword').val(),
                    username: $('#DB_username').val(), 
                    sid: $('#DB_sid').val()
                };
                $.ajax({
                	url: "controller/profile.php" , data: PostData, type: "POST",
                		success: function (e) { 
                		    if(e == 0){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'كلمة المرور القديمة غير صحيحة',
                                    confirmButtonText: 'موافق',
                                    confirmButtonColor: '#3085d6'
                                })                		        
                		    } else {
                		        Swal.fire({
                                    title: 'تم التحديث بنجاح',
                                    text: 'جاري تسجيل الخروج من النظام',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 2500
                                })   
                                setTimeout(function(){ window.location.href = "logout" }, 3000);
                		    }

                		}
                });	
            
            }
        })        
        
    </script>  