<?php include "header.php" ?>

    <section class="edit-library full-height">
        <div class="container">
            <div class="main">

                <div class="current-section">
                  <div class="row">
                        <div class="col-md-4">
                           <a class="nav-link dropdown-toggle d-flex tl-switch pl-sm-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><h2>Status <i class="fas fa-chevron-down"></i></h2>
                           </a>
                           <div class="dropdown-menu tl-menu" aria-labelledby="navbarDropdown">
                              
                                <a class="dropdown-item" href="edit-library-identity.php">
                                    <img src="assets/images/User_fill.svg"> Identity
                                </a>
                          
                              
                                <a class="dropdown-item" href="edit-library-insight.php">
                                    <img src="assets/images/Chat_fill.svg" class=""> Insight
                                </a>
                           </div>
                        </div>
                        <div class="col-md-8 text-right d-flex align-items-center justify-content-end">
                         <div class="btn-grp filter-dropdown dropdown-user dropdown mt-0">
                                
                            
                          <button class="ml-3" type="button" data-toggle="collapse" data-target="#add-question" aria-expanded="false" aria-controls="collapseExample">
                                   Add Question
                            </button>
                              
                        
                                
                                
                            </div>
                        
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-12">
                            <div class="team status">
                                <div class="row">
                                    <div class="col-xl-auto d-flex align-items-center">
                                        <div class="team-head">
                                            March 15 - March 21, 2021
                                        </div>
                                    </div>
                                   <div class="col-lg-auto">
                                        <div class="custom-checkbox ">
                                        <ul class="bot-checkbox">
                                            <li>
                                                <input type="checkbox" id="sun" value="sun">
                                                <label for="sun">Sun</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="mon" value="mon" checked>
                                                <label for="mon">Mon</label>
                                            </li>
                                             <li>
                                                <input type="checkbox" id="tue" value="tue" checked>
                                                <label for="tue">Tue</label>
                                            </li>
                                             <li>
                                                <input type="checkbox" id="wed" value="wed" checked>
                                                <label for="wed">Wed</label>
                                            </li>
                                             <li>
                                                <input type="checkbox" id="thu" value="thu" checked>
                                                <label for="thu">Thu</label>
                                            </li>
                                             <li>
                                                <input type="checkbox" id="fri" value="fri" checked>
                                                <label for="fri">Fri</label>
                                            </li>
                                             <li>
                                                <input type="checkbox" id="sat" value="sat">
                                                <label for="sat">Sat</label>
                                            </li>
                                        </ul>
                                       </div>
                                    </div>
                                      <div class="col-lg-auto">
                                        <div class="custom-checkbox ">
                                        <ul class="bot-checkbox">
                                            <li>
                                                <input type="checkbox" id="9am" value="9am">
                                                <label for="9am">9:00 Am</label>
                                            </li>
                                        </ul>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="collapse add-question-collapse mt-4 pt-2" id="add-question">
                        <div class="row">
                        <div class="col">
                        <div class="input-grp mb-0">
                            <div class="input-grp-inner">
                                <input type="text" class="input-class" placeholder="Add a question" value="">
                            </div>
                        </div>
                        </div>
                             <div class="col-lg-auto mt-lg-0 mt-4 d-flex align-items-center">
                                <div class="btn-load text-center">
                                <button>
                                    Save
                                </button>
                                    <button style="border-color:transparent;opacity:.5" type="button" data-toggle="collapse" data-target="#add-question" aria-expanded="false" aria-controls="collapseExample">
                                    Cancel
                                </button>
                            </div> 
                            </div>
                            </div>
                    </div>
                    
                    
                    <h6 class="small-head">
                        Next
                    </h6>
                    
                    <div class="coll-grp multiple-layer">
                        <img src="assets/images/light-mode-edit-bar-icon.svg" class="start-img light-svg">
                        <img src="assets/images/edit-bar-icon.svg" class="start-img dark-svg" >
                        <div  class="main-coll green">
                            <div class="row align-items-lg-center position-relative">
                                <div class="col-xl-auto col-lg-7 col-md-10 col-sm-10 col-10 d-flex align-items-lg-center">
                                    <div class="date-circle">
                                    <div class="date-circle-inner">
                                        Mon <span>16</span>
                                    </div>
                                    </div>
                                    <div class="text-content ml-3">
                                        <div class="type-text"><span>Insight&nbsp;</span></div>
                                    <h5 class="m-0">What did you accomplish on your last work day?</h5>
                                    </div>
                                </div>
                              
                                <div class="dropdown-custom">
                            
                             <div class="dropdown dropdown-user">
                        <div class="dropdown-toggle p-0 " href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="nav-bar-02">
                                <img src="assets/images/dots-bar.svg" class="dark-svg">
                                <img src="assets/images/dots-bar-light.svg" class="light-svg">
                            </div>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            
                            <a class="dropdown-item" href="#">
                               <img src="assets/images/edit.svg" class="dark-svg">
                                <img src="assets/images/dark-pen.svg" class="light-svg">
                                Edit Question</a>
                            
                               <a class="dropdown-item" href="#">
                               <img src="assets/images/delete_dark.svg" class="dark-svg">
                                <img src="assets/images/delete_light.svg" class="light-svg">
                                Delete Question</a>
                            
                                 </div>
                    </div>
                            

                                        </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    
                       </div>
                    <div class="past-section">
                    
                     <h6 class="small-head mb-2">
                        Queue
                    </h6>
                    
                        <div class="row slides position-relative">
                            <div class="col-12 slide">
                                <div class="coll-grp multiple-layer">
                        <img src="assets/images/light-mode-edit-bar-icon.svg" class="start-img light-svg">
                        <img src="assets/images/edit-bar-icon.svg" class="start-img dark-svg" >
                        <div  class="main-coll green">
                            <div class="row align-items-lg-center position-relative">
                                <div class="col-xl-auto col-lg-7 col-md-10 col-sm-10 col-10 d-flex align-items-lg-center">
                                    <div class="date-circle">
                                    <div class="date-circle-inner">
                                        Mon <span>16</span>
                                    </div>
                                    </div>
                                    <div class="text-content ml-3">
                                        <div class="type-text"><span>Insight&nbsp;</span></div>
                                    <h5 class="m-0">What did you accomplish on your last work day?</h5>
                                    </div>
                                </div>
                              
                                <div class="dropdown-custom">
                            
                             <div class="dropdown dropdown-user">
                        <div class="dropdown-toggle p-0 " href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="nav-bar-02">
                                <img src="assets/images/dots-bar.svg" class="dark-svg">
                                <img src="assets/images/dots-bar-light.svg" class="light-svg">
                            </div>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            
                            <a class="dropdown-item" href="#">
                               <img src="assets/images/edit.svg" class="dark-svg">
                                <img src="assets/images/dark-pen.svg" class="light-svg">
                                Edit Question</a>
                            
                               <a class="dropdown-item" href="#">
                          <img src="assets/images/delete_dark.svg" class="dark-svg">
                                <img src="assets/images/delete_light.svg" class="light-svg">
                                Delete Question</a>
                            
                                 </div>
                    </div>
                            

                                        </div>
                                
                                
                            </div>
                        </div>
                    </div>
                            </div>
                            <div class="col-12 slide">
                                <div class="coll-grp multiple-layer">
                        <img src="assets/images/light-mode-edit-bar-icon.svg" class="start-img light-svg">
                        <img src="assets/images/edit-bar-icon.svg" class="start-img dark-svg" >
                        <div  class="main-coll green">
                            <div class="row align-items-lg-center position-relative">
                                <div class="col-xl-auto col-lg-7 col-md-10 col-sm-10 col-10 d-flex align-items-lg-center">
                                    <div class="date-circle">
                                    <div class="date-circle-inner">
                                        Mon <span>15</span>
                                    </div>
                                    </div>
                                    <div class="text-content ml-3">
                                        <div class="type-text"><span>Insight&nbsp;</span></div>
                                    <h5 class="m-0">What did you accomplish on your last work day?</h5>
                                    </div>
                                </div>
                              
                                <div class="dropdown-custom">
                            
                             <div class="dropdown dropdown-user">
                        <div class="dropdown-toggle p-0 " href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="nav-bar-02">
                                <img src="assets/images/dots-bar.svg" class="dark-svg">
                                <img src="assets/images/dots-bar-light.svg" class="light-svg">
                            </div>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            
                            <a class="dropdown-item" href="#">
                               <img src="assets/images/edit.svg" class="dark-svg">
                                <img src="assets/images/dark-pen.svg" class="light-svg">
                                Edit Question</a>
                            
                               <a class="dropdown-item" href="#">
                             <img src="assets/images/delete_dark.svg" class="dark-svg">
                                <img src="assets/images/delete_light.svg" class="light-svg">
                                Delete Question</a>
                            
                                 </div>
                    </div>
                            

                                        </div>
                                
                                
                            </div>
                        </div>
                    </div>
                            </div>
                            <div class="col-12 slide">
                                <div class="coll-grp multiple-layer">
                        <img src="assets/images/light-mode-edit-bar-icon.svg" class="start-img light-svg">
                        <img src="assets/images/edit-bar-icon.svg" class="start-img dark-svg" >
                        <div  class="main-coll green">
                            <div class="row align-items-lg-center position-relative">
                                <div class="col-xl-auto col-lg-7 col-md-10 col-sm-10 col-10 d-flex align-items-lg-center">
                                    <div class="date-circle">
                                    <div class="date-circle-inner">
                                        Mon <span>14</span>
                                    </div>
                                    </div>
                                    <div class="text-content ml-3">
                                        <div class="type-text"><span>Insight&nbsp;</span></div>
                                    <h5 class="m-0">What did you accomplish on your last work day?</h5>
                                    </div>
                                </div>
                              
                                <div class="dropdown-custom">
                            
                             <div class="dropdown dropdown-user">
                        <div class="dropdown-toggle p-0 " href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="nav-bar-02">
                                <img src="assets/images/dots-bar.svg" class="dark-svg">
                                <img src="assets/images/dots-bar-light.svg" class="light-svg">
                            </div>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            
                            <a class="dropdown-item" href="#">
                               <img src="assets/images/edit.svg" class="dark-svg">
                                <img src="assets/images/dark-pen.svg" class="light-svg">
                                Edit Question</a>
                            
                               <a class="dropdown-item" href="#">
                             <img src="assets/images/delete_dark.svg" class="dark-svg">
                                <img src="assets/images/delete_light.svg" class="light-svg">
                                Delete Question</a>
                            
                                 </div>
                    </div>
                            

                                        </div>
                                
                                
                            </div>
                        </div>
                    </div>
                            </div>
                            </div>
                        
                </div>
                
               

            </div>
        </div>
    </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>
    $(".slides").sortable({
     placeholder: 'slide-placeholder',
    axis: "y",
    revert: 150,
    start: function(e, ui){
        
        placeholderHeight = ui.item.outerHeight();
        ui.placeholder.height(placeholderHeight + 15);
        $('<div class="slide-placeholder-animator" data-height="' + placeholderHeight + '"></div>').insertAfter(ui.placeholder);
    
    },
    change: function(event, ui) {
        
        ui.placeholder.stop().height(0).animate({
            height: ui.item.outerHeight() + 15
        }, 300);
        
        placeholderAnimatorHeight = parseInt($(".slide-placeholder-animator").attr("data-height"));
        
        $(".slide-placeholder-animator").stop().height(placeholderAnimatorHeight + 15).animate({
            height: 0
        }, 300, function() {
            $(this).remove();
            placeholderHeight = ui.item.outerHeight();
            $('<div class="slide-placeholder-animator" data-height="' + placeholderHeight + '"></div>').insertAfter(ui.placeholder);
        });
        
    },
    stop: function(e, ui) {
        
        $(".slide-placeholder-animator").remove();
        
    },
});

</script>
 

<?php include "footer.php" ?>
