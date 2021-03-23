<?php include "header.php" ?>

    <div class="back-button mt-0">
       <a href="people.php">
          <button class="">
             <i class="fas fa-arrow-left mr-3"></i>
             <span>Back</span>
           </button>
       </a>
    </div>

    <section class="add-people">
        <div class="container">
            <div class="main">
                <div class="current-section">
                    
                      <div class="row justify-content-center">
                         <div class="col-sm-12 col-11">
                           <h2 class="mb-4">Add People</h2>
                        </div>
                        </div>
                        
                        
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-11">
                        <div class="edit-profile-box">
                            <form>
                                
                             
                                    
                                    <div id="dynamic_field">
                                    
                             
                                        
                                 </div>
                                
                                <div class="input-grp">
                                    <label>Name</label>
                                    <div class="input-grp-inner">
                                    <input type="text" class="input-class" placeholder="Enter name" value="">
                                </div>
                                </div>
                                <div class="input-grp">
                                    <label>Email address</label>
                                    <div class="input-grp-inner">
                                    <input type="email" class="input-class" placeholder="Enter an email address" value="">
                                </div>
                                </div>
                          
                                  
                                <div class="input-grp mb-0">
                                <div class="btn-grp">
                                    <div class="text-left">
                                    <button class="" type="button" name="add" id="add">Add another person</button>
                                    </div>
                                     </div>
                                     </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    
                </div>
                <div class="past-section">
            
                    <div class="row justify-content-center">
                          <div class="col-sm-12 col-11">
                        <div class="edit-profile-box">
                            <form>
                                <div class="input-grp">
                                    <label>Add a personal note</label>
                                    <div class="input-grp-inner">
                                    <input type="text" class="input-class" placeholder="Add a personal note to the email" value="">
                                </div>
                                </div>
                               
                                <div class="input-grp mb-0">
                                <div class="btn-load">
                                    <div class="text-left">
                                <button class="">Send</button>
                                    </div>
                                     </div>
                                     </div>
                                
                            </form>
                        </div>
                        </div>
                    </div>
                    
                </div>
                
               

            </div>
        </div>
    </section>

    <script type="text/javascript">
           $(document).ready(function() {
               var i = 1;

               $('#add').click(function() {
                   i++;
                   $('#dynamic_field').append('<div id="row-class'+i+'" class="input-grp"> <label class="mb-0">Inviting</label> <div class="input-grp-inner"> <div class="coll-grp multiple-layer"> <div class="main-coll"> <div class="row align-items-center position-relative"> <div class="col-auto"> <div class="user-detail"> <div class="media align-items-center"> <img class="" src="assets/images/tim.png" alt="Generic placeholder image"> <div class="media-body"> <h5 class="mt-0">Tim Chilcott</h5> <p>tim.chilcott@botnik.com</p> </div> </div> </div> </div> <div class="dropdown-custom"> <div class="dropdown dropdown-user"> <div class="dropdown-toggle p-0 " href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <div class="nav-bar-02"> <img src="assets/images/dots-bar.svg" class="dark-svg"> <img src="assets/images/dots-bar-light.svg" class="light-svg"> </div> </div> <div class="dropdown-menu" aria-labelledby="navbarDropdown3"> <a class="dropdown-item btn_remove" href="javascript:void(0)" id="' + i + '" name="remove"> <img src="assets/images/circle-outline.svg" class="dark-svg"> <img src="assets/images/dark-circle-outline.svg" class="light-svg"> Remove person </a> </div> </div> </div> </div> </div> </div> </div> </div>');
               });

               $(document).on('click', '.btn_remove', function() {
                   var button_id = $(this).attr("id");
                   $('#row-class' + button_id + '').remove();
               });

           });
       </script>


<?php include "footer.php" ?>