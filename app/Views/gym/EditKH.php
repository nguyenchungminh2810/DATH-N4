<div class="container mt-5 " >
    <div class="page projects-page" style="margin-top: 10%">
        <form class="needs-validation mr-15" style="margin-bottom: 30px;" novalidate>
            <h2>SỬA THÔNG TIN KHÁCH HÀNG </h2>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                           required>
                    <div class="invalid-feedback">
                        Vui Lòng Nhập Thông Tin!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                           required>
                    <div class="invalid-feedback">
                        Vui Lòng Nhập Thông Tin!
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationCustom03">Gmail</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationCustom03"
                               placeholder="Gmail@.com" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Vui Lòng Nhập Gmail!
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Số Điện Thoại</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationCustom04"
                               placeholder="+84....." aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationCustom05">Giới Tính</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationCustom05"
                               placeholder="Giới Tính" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-10">
                    <label for="validationCustomUsername">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationCustomUsername"
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
                    <label for="validationCustomUsername">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="validationCustomUsername"
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
            <button class=",btn btn-primary" type="submit">Thêm</button>
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
    </div>
</div>