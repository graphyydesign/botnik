
<script>
    $(function() {                      
  $(".notification-btn").click(function() {
    $(this).toggleClass("active");      
  });
});
    
      $(function() {                      
  $(".favorites-btn").click(function() {
    $(this).toggleClass("active");      
  });
});
    
</script>    
    <script>
        $(document).ready(function() {
            $(".serach-bar").click(function() {
                $(".main-search-bar").toggleClass("active");
            });
        });
    </script>
    
    <script>
        $(document).ready(function() {
             $('[data-toggle="tooltip"]').tooltip()
            });
    </script>
    
     <script>
        $(document).ready(function() {
            $(".appearance").click(function() {
                $("body").toggleClass("body-light");
            });
        });
    </script>
    
    <script>
    $('#answer').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        responsiveClass: true,
        dots: true,
        nav: false,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            }
        }
    })
    
</script>


<script>
    $(function() {
  var loc = window.location.href; // returns the full URL
  if(/answer.php/.test(loc)) {
    $('body').addClass('answer-body');
  }
});
</script>

<!--<script>
    window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("stickyHead");
  } else {
    header.classList.remove("stickyHead");
  }
}
    
</script>-->

<!--

<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 130) {
        $("header").addClass("stickyHead");
    } else {
        $("header").removeClass("stickyHead");
    }
});
</script>

-->
    
</body>

</html>