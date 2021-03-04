<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font-Faimly -->
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <title>Botnik</title>
</head>

<body class="sign-body">
    <header>
        <div class="container">
            <div class="sign-logo text-center">
                 <img src="assets/images/logo.svg" class="dark-svg" width="140">
                        <img src="assets/images/logo-light.svg"  class="light-svg" width="140">
            </div>
        </div>
    </header>
    <main class="sign-bg fix-box">
        <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-lg-6 col-md-9 col-sm-11 col-12">
                <div class="sign-up-bg">
                    <div class="sign-inner">
                        <h2>Welcome to Botnik!</h2>
                        <p>Try Botnik free, no credit card required.</p>
                        <div class="text-center mt-5 pt-5   ">
                        <a href="step-1.php">
                            <button class="btn-main">Let's get started</button>
                            </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
      <script>
        $(document).ready(function() {
            $(".sign-logo").click(function() {
                $("body").toggleClass("body-light");
            });
        });
    </script>
</body>
</html>