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
    <main class="sign-bg">
        <div class="container h-100">
        <div class="row justify-content-center h-100">
            
            <div class="col-lg-6 step-box">
                <div class="step-bg">
                    <h6><span>Step 3</span> of 4</h6>
                </div>
                <div class="sign-up-bg">
                    <div class="sign-inner step-inner">
                        <div class="question">
                            <h5>What's your company name?</h5>
                        </div>
                        <div class="sign-up-input">
                            <input type="text" class="" placeholder="Type company name">
                        </div>
                        <div class="text-center">
                        <a href="step-4.php">
                        <button class="btn-main">Next</button>
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