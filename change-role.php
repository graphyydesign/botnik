<?php include "header.php" ?>

    <div class="back-button mt-0">
       <a href="profile.php">
          <button class="">
             <i class="fas fa-arrow-left mr-3"></i>
             <span>Back</span>
           </button>
       </a>
    </div>

    <section class="profile-page edit-profile-page">
        <div class="container">
            <div class="main">
                <div class="current-section">
                 <div class="row">
                        <div class="col-md-12">
                        <div class="user-section text-center">
                            <div class="user-img">
                            <div class="user-img-inner">
                                <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                
                            </div>
                            </div>
                            <div class="user-details">
                                <h3 class="user-name">Tim Chilcott</h3>
                                <p class="user-email">tim.chilcott@botnik.com</p>
                            </div>
                            </div>
                        </div>
                        <div class="profile-section-dropdown">
                            
                <div class="btn-grp mt-0 d-flex no-gutters justify-content-center">
                                <div class="col-auto text-left">
                                <button class="">Save
                                      
                                       
                                </button>
                                    </div>
                            </div>
                       

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-11 col-11 ">
                        <div class="edit-profile-box change-role">
                            <form>
                                <div class="input-grp">
                                    <label>Owner</label>
                                    <div class="input-grp-inner">
                                        <div class="radio-grp">
                                            <input type="radio" id="radio02-01" name="demo02" checked />
                                            <label for="radio02-01">Can access everything, change roles, add/remove people, and access the billing section</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-grp">
                                    <label>Admin

</label>
                                    <div class="input-grp-inner">
                                        <div class="radio-grp">
                                            <input type="radio" id="radio02-02" name="demo02" />
                                            <label for="radio02-02">Can change roles, add remove people (does not have access to the billing section)

</label>
                                        </div>
                                    </div>
                                </div>
                                 <div class="input-grp">
                                    <label>Team member



</label>
                                    <div class="input-grp-inner">
                                        <div class="radio-grp">
                                            <input type="radio" id="radio02-03" name="demo02" />
                                            <label for="radio02-03">Can change their own settings (does not have access to change roles, add/remove people or the billing section)</label>
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

 

<?php include "footer.php" ?>