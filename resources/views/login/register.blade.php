<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="container-fluid px-3">
      <div class="row min-vh-100">
        <div class="col-md-5 col-lg-6 col-xl-4 px-lg-5 d-flex align-items-center">
          <div class="w-100 py-5">
            <div class="text-center"><img src="/adminx/img/brand/brand-1.svg" alt="..." style="max-width: 6rem;" class="img-fluid mb-4">
              <h1 class="display-4 mb-3">Sign in</h1>
            </div>
            <form action="proses-register" method="POST" class="form-validate">
              @csrf
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input name="name" type="text" autocomplete="off" required data-msg="Please enter your email" class="form-control">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input name="username" type="text" autocomplete="off" required data-msg="Please enter your email" class="form-control">
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input name="email" type="email" autocomplete="off" required data-msg="Please enter your email" class="form-control">
              </div>
              <div class="form-group">
                <label>No HP</label>
                <input name="no_hp" type="text" autocomplete="off" required data-msg="Please enter your email" class="form-control">
              </div>
              <div class="form-group mb-4">
                <div class="row">
                  <div class="col">
                    <label>Password</label>
                  </div>
                  <div class="col-auto"><a href="#" class="form-text small text-muted">Forgot password?</a></div>
                </div>
                <input name="password" type="password" required data-msg="Please enter your password" class="form-control">
              </div>
              <!-- Submit-->
              <button class="btn btn-lg btn-block btn-primary mb-3">Sign in</button>
              <!-- Link-->
              <p class="text-center"><small class="text-muted text-center">Don't have an account yet? <a href="register-2.html">Register</a>.</small></p>
            </form>
          </div>
        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
          <!-- Image-->
          <div style="background-image: url(/adminx/img/photos/victor-ene-1301123-unsplash.jpg);" class="bg-cover h-100 mr-n3"></div>
        </div>
      </div>
    </div>
    <button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm d-none d-md-inline-block"><i class="fa fa-cog fa-2x"></i></button>
    <div id="style-switch" class="collapse">
      <h5 class="mb-3">Select theme colour</h5>
      <form class="mb-3">
        <select name="colour" id="colour" class="form-control">
          <option value="">select colour variant</option>
          <option value="default.premium">violet</option>
          <option value="red.premium">red</option>
          <option value="green.premium">green</option>
          <option value="pink.premium">pink</option>
          <option value="sea.premium">sea</option>
          <option value="blue.premium">blue</option>
        </select>
      </form>
      <p><img src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/img/template-mac.png" alt="" class="img-fluid"></p>
      <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
    </div>
    <!-- JavaScript files-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/jquery/jquery.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/chart.js/Chart.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/js/front.js"></script>
  </body>
</html>