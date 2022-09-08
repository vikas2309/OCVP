<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="rubic.css">
    <link rel="stylesheet" href="themify-icons.css">
</head>
<body>
<header class="header d-flex justify-content-center">
    <div class="container">
        <div class="row h-100 align-items-center">
            <div class="col-md-5 d-none d-md-block">
                <form method="post" action="register.php">
                    <div class="head">SI<span class="text-primary">GN</span>UP</div>
                    <div class="body">
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name" name = "fullname">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email"  name = "email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username"  name = "username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password_1">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_2">
                        </div>
                    </div>
                    <div class="footer">
                        <button class="btn btn-primary btn-block" name="reg_user">Sign up</button>
                    </div>
                    <p>
                        <br>
                        Already a member?<a href="OCVP.php" class = "hero-btn">Home</a>

                    </p>
                </form>
            </div>
            <div class="col-md-5 mt-4 mt-md-0">
                <img src="https://st2.depositphotos.com/3837271/6941/i/600/depositphotos_69417709-stock-photo-text-sign-up.jpg" height = "380" width = "800" alt="" >
            </div>

        </div>
    </div>
</header>
<footer class="footer py-4 bg-dark text-light">
    <div class="container text-center">
        <p class="mb-4 small">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="index.html">OCVP</a></p>
        <div class="social-links">
            <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
        </div>
    </div>
</footer>
</body>
</html>