<style>
    .projects-page .center {
        text-align: center;
    }

    .projects-page .center .form-row {
        width: 50%;
        margin: 0 auto;
    }

    .projects-page .center .form-row .form-content {
        width: 100%;

    }
</style>

<body>
    <div class="container mt-5 ">
        <div class="page projects-page" style="margin-top: 10%">
            <div class="center">
                <h2>ADMIN ĐĂNG NHẬP </h2>
                <div class="form-row ">
                    <form method="post" class="form-content needs-validation">
                        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                        <div class="invalid-feedback">
                            Vui Lòng Nhập Mật Khẩu!
                        </div>
                        <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                        <div class="invalid-feedback">
                            Vui Lòng Nhập Mật Khẩu!
                        </div>

                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Đăng Nhập</button></div><a class="forgot" href="#">Forgot your email or password?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
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
</body>