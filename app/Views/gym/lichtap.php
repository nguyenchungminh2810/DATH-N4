<div class="container mt-5 " >
    <div class="page projects-page" style="margin-top: 10%">
        <form class="needs-validation mr-15" style="margin-bottom: 30px;" novalidate>
    <h2>Lịch Tập </h2>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Lớp Học</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="GX"  required>
            <div class="invalid-feedback">
                Vui Lòng Nhập Thông Tin!
            </div>
        </div>

    </div>
    <div class="col-md-4 mb-3">
        <label for="validationCustomUsername">Image</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <button class="btn"><i class="fa fa-folder"></i></button>
            </div>
            <!-- Không biết fix sao -->
            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Lịch Học" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Vui Lòng Thêm Hình Ảnh!
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
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
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
                    <h3>LỊCH TẬP</h3>
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
                                <th>Tên Lớp</th>
                                <th style="text-align: center">Ngày Đăng</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GX</td>
                                <td style="text-align: center">01/06/2020</td>
                                <td style="text-align: center">
                                    <a href="EditLT"><button class="btn btn-primary">Sửa</button></a>
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