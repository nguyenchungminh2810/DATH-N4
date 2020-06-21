<div class="container mt-5 " >
    <div class="page projects-page" style="margin-top: 10%">
        <form class="needs-validation mr-15" style="margin-bottom: 30px;" novalidate>
            <h2>GÓI TẬP</h2>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationCustom01">Tên Gói Tập</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="SomeThing"
                           required>
                    <div class="invalid-feedback">
                        Vui Lòng Nhập Thông Tin!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom02">Loại Gói Tập</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="SomeThing"
                           required>
                    <div class="invalid-feedback">
                        Vui Lòng Nhập Thông Tin!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom02">Nội Dung </label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="SomeThing"
                           required>
                    <div class="invalid-feedback">
                        Vui Lòng Nhập Thông Tin!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustomUsername">Giá Tiền</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <!-- Không biết fix sao -->
                        <input type="text" class="form-control" id="validationCustomUsername"
                               placeholder="Giá Tiền" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Vui Lòng Nhập Thông Tin!
                        </div>
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Thêm</button>
        </form>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>Thông Tin Dịch Vụ</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Tên Gói Tập</th>
                                    <th>Loại Gói Tập</th>
                                    <th>Nội Dung</th>
                                    <th>Giá Tiền</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Sliver</td>
                                    <!-- UserName -->
                                    <td>12 Month</td>
                                    <td>
                                        <!-- PassWord -->
                                        <div> nội dung </div>
                                    </td>
                                    <!-- Gmail -->
                                    <td>300.000 VND</td>
                                    <td style="text-align: center">
                                        <a href="EditGT"><button class="btn btn-primary">Sửa</button></a>
                                        <button class="btn btn-primary">Xóa</button>
                                    </td>
                                </tr>
                                <tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>Platinum</td>
                                    <!-- UserName -->
                                    <td>12 Month</td>
                                    <td>
                                        <!-- PassWord -->
                                        <div> nội dung </div>
                                    </td>
                                    <!-- Gmail -->
                                    <td>1.000.000 VND</td>
                                    <td style="text-align: center">
                                        <a href="EditGT"><button class="btn btn-primary">Sửa</button></a>
                                        <button class="btn btn-primary">Xóa</button>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>Sliver</td>
                                    <!-- UserName -->
                                    <td>12 Month</td>
                                    <td>
                                        <!-- PassWord -->
                                        <div> nội dung </div>
                                    </td>
                                    <!-- Gmail -->
                                    <td>300.000 VND</td>
                                    <td style="text-align: center">
                                        <a href="EditGT"><button class="btn btn-primary">Sửa</button></a>
                                        <button class="btn btn-primary">Xóa</button>
                                    </td>
                                </tr>
                                <tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>