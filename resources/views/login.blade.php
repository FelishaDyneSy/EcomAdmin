<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="icon" href="home/documentation/img/logo2.png" type="image/x-icon">
    <style>
    html,
    body {
        height: 100%;
        background-image:url('/home/assets/images/beans.jpg');
        background-position: center;
        background-size: cover;
       
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="melon"></div>
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center ">
            <img class="logo-img" src="home/assets/images/far.11.jpg" alt="logo"></img><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-bodyLogin">
                <livewire:guest.login />
            </div>
            <div class="card-footer bg-white p-0  ">
                {{-- <div class="card-footer-item card-footer-item-bordered">
                    <a href="/sign-up" class="footer-link">Create An Account</a></div> --}}
                <div class="card-footer-item card-footer-item-bordered justify-content-end ">
                    <a href="/forgot-passwords" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>