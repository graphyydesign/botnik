
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
        
        $('.p-tag').click(function(){ 
          $(this).parent().toggleClass('active');
        });
        
       /*  $('.l-less').click(function(){ 
          $(this).parent().removeClass('active');
        });*/
       
        
       /*  $('.p-tag').click(function(e){
          $(this).parent().removeClass('active');
        });*/
        
     /*    $(document).ready(function() {
            $(".p-tag").click(function() {
                $(this).find(".media-body").toggleClass( "active" );
            });
        })*/
        
      /*  $(".p-tag").click(function () {
          // If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
          if ($(this).hasClass("active")) {
            $(".media-body").removeClass("active");
          }
          // Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
          else {
            $(".media-body").removeClass("active");
            $(this).addClass("active");
          }
        });
        */
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

    
</body>

</html>