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
                            <div class="card-header">
                                <div class="card-title">دوارات التطوير الوظيفي</div>
                            </div>
                            <div class="card-body">
                                <table id="data-export" class="table table-bordered text-nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>الأسم</th>
                                            <th>النوع</th>
                                            <th>العمر</th>
                                            <th>المحافظة</th>
                                            <th>المؤهل</th>
                                            <th>الإعاقة</th>
                                            <th>البريد الإلكتروني</th>
                                            <th>رقم التواصل</th>
                                            <th>البرنامج</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                                $i = 1;
                                                $ddaa = mysqli_query($conectDB, "SELECT * FROM form001 ORDER BY `id` DESC");
                                                    while ($data = mysqli_fetch_array($ddaa)) {
                                                        echo '<tr row="'.$data['id'].'">
                                                                <td id="Name__'.$data['id'].'" class="smart-edit1">'.$data['Name'].'</td>
                                                                <td id="Gender__'.$data['id'].'">'.$data['Gender'].'</td>
                                                                <td id="Age__'.$data['id'].'" class="smart-edit1">'.$data['Age'].'</td>
                                                                <td id="Governorate__'.$data['id'].'">'.$data['Governorate'].'</td>
                                                                <td id="Education__'.$data['id'].'">'.$data['Education'].'</td>
                                                                <td id="Disability__'.$data['id'].'">'.$data['Disability'].'</td>
                                                                <td id="Email__'.$data['id'].'" class="smart-edit1">'.$data['Email'].'</td>
                                                                <td id="Mobile__'.$data['id'].'" class="smart-edit1">'.$data['Mobile'].'</td>
                                                                <td id="Program__'.$data['id'].'">'.$data['Program'].'</td>
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