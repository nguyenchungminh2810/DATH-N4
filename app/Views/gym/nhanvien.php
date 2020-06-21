<div class="container mt-5 " >
    <div class="page projects-page" style="margin-top: 10%">
        <form class="needs-validation mr-15" style="margin-bottom: 30px;" novalidate
            name="themNV" method="post" action="<?=base_url().'/saveNV'?>"
        >
            <h2>Thêm Nhân Viên </h2>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationName">Full Name</label>
                    <input type="text" class="form-control" id="tenNV" name="tenNV" placeholder="Full Name"
                           required>
                    <div class="invalid-feedback">
                        Vui Lòng Nhập Thông Tin!
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <label for="validationGmail">Gmail</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="gmailnv" name="gmailnv"
                               placeholder="Gmail@.com" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Vui Lòng Nhập Gmail!
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationSdt">Số Điện Thoại</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="sdt" name="sdt"
                               placeholder="+84....." aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationNgaysinh">Ngày Sinh</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="ngaysinh" name="ngaysinh"
                               placeholder="Giới Tính" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-10">
                    <label for="validationUsername">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="username" name="username"
                               placeholder="Username" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Vui Lòng Nhập UserName!
                        </div>
                    </div>
                </div>
            </div>
            <!-- password -->
            <div class="form-row">
                <div class="col-md-4 mb-10">
                    <label for="validationPassword">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="password" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Vui Lòng Nhập Mật Khẩu!
                        </div>
                    </div>
                </div>
            </div>

            <!--  -->
    <div class="col-md-4 mb-3">
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
    <button class="btn btn-primary" type="submit">Thay Đổi</button>
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
                <h3>NHÂN VIÊN</h3>
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
                            <th>Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Gmail</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Minh</td>
                            <!-- UserName -->
                            <td>NguyenchungMinh</td>
                            <td>
                                <!-- PassWord -->
                                <div>password</div>
                            </td>
                            <!-- Gmail -->
                            <td>Gmail</td>
                            <td style="text-align: center">
                               <a href="EditNV"><button class="btn btn-primary">Sửa</button></a>
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