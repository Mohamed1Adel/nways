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
                                <div class="card-title">طلب خدمات تشخيصية وعلاجية</div>
                            </div>
                            <div class="card-body">
                                <table id="data-export" class="table table-bordered text-nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>الأسم</th>
                                            <th>النوع</th>
                                            <th>العمر</th>
                                            <th>الإعاقة</th>
                                            <th>المؤهل</th>
                                            <th>رقم التواصل</th>
                                            <th>صلة القرابة</th>
                                            <th>ملخص الحالة</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                                $i = 1;
                                                $ddaa = mysqli_query($conectDB, "SELECT * FROM form004 ORDER BY `id` DESC");
                                                    while ($data = mysqli_fetch_array($ddaa)) {
                                                        echo '<tr row="'.$data['id'].'">
                                                                <td id="Name__'.$data['id'].'" class="smart-edit1">'.$data['Name'].'</td>
                                                                <td id="Gender__'.$data['id'].'">'.$data['Gender'].'</td>
                                                                <td id="Age__'.$data['id'].'" class="smart-edit1">'.$data['Age'].'</td>
                                                                <td id="Handicap_Type__'.$data['id'].'">'.$data['Handicap_Type'].'</td>
                                                                <td id="Phone1__'.$data['id'].'" class="smart-edit1">'.$data['Phone1'].'</td>
                                                                <td id="Education__'.$data['id'].'">'.$data['Education'].'</td>
                                                                <td id="Guardian__'.$data['id'].'" class="smart-edit1">'.$data['Guardian'].'</td>
                                                                <td id="Case_Description__'.$data['id'].'" class="smart-edit1">'.$data['Case_Description'].'</td>
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