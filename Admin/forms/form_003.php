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
                                <div class="card-title">بيانات المسجلين في العلامة عزم</div>
                            </div>
                            <div class="card-body">
                                <table id="data-export" class="table table-bordered text-nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>الأسم</th>
                                            <th>النوع</th>
                                            <th>تاريخ الميلاد</th>
                                            <th>الرقم المدني</th>
                                            <th>المحافظة</th>
                                            <th>المؤهل</th>
                                            <th>الإعاقة</th>
                                            <th>البريد الإلكتروني</th>
                                            <th>رقم التواصل</th>
                                            <th>رقم آخر</th>
                                            <th>المنتج</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                                $i = 1;
                                                $ddaa = mysqli_query($conectDB, "SELECT * FROM form003 ORDER BY `id` DESC");
                                                    while ($data = mysqli_fetch_array($ddaa)) {
                                                        echo '<tr row="'.$data['id'].'">
                                                                <td id="Name__'.$data['id'].'" class="smart-edit1">'.$data['Name'].'</td>
                                                                <td id="Type__'.$data['id'].'">'.$data['Type'].'</td>
                                                                <td id="BirthDay__'.$data['id'].'" class="smart-edit1">'.$data['BirthDay'].'</td>
                                                                <td id="CivilID__'.$data['id'].'" class="smart-edit1">'.$data['CivilID'].'</td>
                                                                <td id="Governorate__'.$data['id'].'">'.$data['Governorate'].'</td>
                                                                <td id="Education__'.$data['id'].'">'.$data['Education'].'</td>
                                                                <td id="Handicap_Type__'.$data['id'].'">'.$data['Handicap_Type'].'</td>
                                                                <td id="Email__'.$data['id'].'" class="smart-edit1">'.$data['Email'].'</td>
                                                                <td id="Phone1__'.$data['id'].'" class="smart-edit1">'.$data['Phone1'].'</td>
                                                                <td id="Phone2__'.$data['id'].'" class="smart-edit1">'.$data['Phone2'].'</td>
                                                                <td id="Product_Type__'.$data['id'].'">'.$data['Product_Type'].'</td>
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