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
    <main class="sign-bg ">
        <div class="container h-100">
        <div class="row justify-content-center h-100">
            
            <div class="col-lg-6 step-box">
                <div class="step-bg">
                    <h6><span>Step 4</span> of 4</h6>
                </div>
                <div class="sign-up-bg">
                    <div class="sign-inner">
                        <div class="question">
                            <h5>Set your password</h5>
                        </div>
                        <div class="sign-up-input m-0">
                            <div class="input-main">
                            <input type="password" placeholder="Enter password" minlength="8" id="enterpas">
                                <i class="far fa-eye eye1" onclick="myFunction()"></i>
                                <i class="fas fa-eye-slash eye2" onclick="myFunction()" style="display:none"></i>
                                </div>
                            <div class="input-main">
                            <div class="input-main">
                               <input type="password" class="" placeholder="Confirm password" minlength="8" id="enterpas1">
                                <i class="far fa-eye eye3" onclick="myFunction1()"></i>
                                <i class="fas fa-eye-slash eye4" onclick="myFunction1()" style="display:none"></i>
                                </div>
                            <div class="input-main">
                            <div class="min-char">
                                   <span> Minimum 8 characters</span>
                                </div>
                                </div>
                        </div>
                        <div class="text-center">
                        <a href="setup.php">
                        <button class="btn-main">Next</button>
                                </a>
                            </div>
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
          
                      function myFunction() {
          var x = document.getElementById("enterpas");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
              
                     function myFunction1() {
                  var x = document.getElementById("enterpas1");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
                
              $(".eye1").click(function(){
              $(".eye2").show();
              $(".eye1").hide();
            });
              
               $(".eye2").click(function(){
              $(".eye2").hide();
              $(".eye1").show();
            });
              
                            $(".eye3").click(function(){
              $(".eye4").show();
              $(".eye3").hide();
            });
              
               $(".eye4").click(function(){
              $(".eye4").hide();
              $(".eye3").show();
            });
              
    </script>
</body>

</html>