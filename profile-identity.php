<?php include "header.php" ?>

    <section class="profile-page filter-dropdown-main full-height">
        <div class="container">
            <div class="main">
                <div class="current-section">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="user-section pr-64 text-center">
                            <div class="user-img">
                                <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                            </div>
                            <div class="user-details">
                                <h3 class="user-name">Tim Chilcott</h3>
                                <p class="user-email">tim.chilcott@botnik.com</p>
                            </div>
                            <div class="btn-grp mt-0 d-flex no-gutters justify-content-center">
                                <div class="col-auto text-left">
                                <button class="">
                                    <div class="favorites-btn">
                                            
                                             <div class="add">
                                               <img src="assets/images/star.svg" class="dark-svg">
                                            <img src="assets/images/star-dark.svg" class="light-svg">
                                            <span class="ml-2">Add to favorites</span>
                                            </div>
                                            <div class="remove">
                                                <img src="assets/images/star-fill.svg" class="dark-svg">
                                                <img src="assets/images/star-fill-dark.svg" class="light-svg">
                                                <span class="ml-2">Remove favorites</span>
                                            </div>
                                           
                                        </div>
                                </button>
                                    </div>
                                 <div class="col-sm-auto col-12">
                                <button class="ml-sm-3 mt-sm-0 mt-2">
                                    <div class="notification-btn">
                                            <div class="mute">
                                                <img src="assets/images/notifications-off.svg" class="dark-svg">
                                                <img src="assets/images/notifications-dark.svg" class="light-svg">
                                                <span class="ml-2">Mute notification</span>
                                            </div>
                                            <div class="unmute">
                                                <img src="assets/images/notifications.svg" class="dark-svg">
                                                <img src="assets/images/notifications-fill-dark.svg" class="light-svg">
                                                <span class="ml-2">Unmute notification</span>
                                            </div>
                                        </div>
                                </button>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="profile-section-dropdown">
                             <div class="dropdown dropdown-user">
                        <a class="dropdown-toggle p-0 " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="nav-bar-02">
                                <img src="assets/images/circle-bar.svg" class="dark-svg">
                                <img src="assets/images/dark-circle-bar.svg" class="light-svg">
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            
                            <a class="dropdown-item" href="edit-profile.php">
                                <img src="assets/images/white-pen.svg" class="dark-svg">
                                <img src="assets/images/dark-pen.svg" class="light-svg">
                                Edit Profile</a>
                            <a  class="dropdown-item" href="change-role.php">
                                <img src="assets/images/exchange-alt.svg" class="dark-svg">
                                <img src="assets/images/dark-exchange-alt.svg" class="light-svg">
                                Change role</a>
                            <a class="dropdown-item" href="#">
                                <img src="assets/images/circle-outline.svg" class="dark-svg">
                                <img src="assets/images/dark-circle-outline.svg" class="light-svg">
                                Remove from team</a>
                        </div>
                    </div>
                            

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                           <a class="nav-link dropdown-toggle d-flex tl-switch pl-sm-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><h2>Identity <i class="fas fa-chevron-down"></i></h2>
                           </a>
                           <div class="dropdown-menu tl-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <img src="assets/images/Chart_alt.svg" class=""> Latest
                                </a>
                                <a class="dropdown-item" href="profile-status.php">
                                    <img src="assets/images/User_fill.svg" class=""> Status
                                </a>
                                <a class="dropdown-item" href="profile-insight.php">
                                    <img src="assets/images/Chat_fill.svg" class=""> Insight
                                </a>
                           </div>
                        </div>
                        <div class="col-md-8 text-right d-flex align-items-center justify-content-end">
                            <div class="btn-grp filter-dropdown dropdown-user dropdown mt-0">
                                
                                
                                <button class="mr-sm-0 mr-3 dropdown-toggle" d="filter" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="assets/images/filter.svg" class="mr-3 dark-svg">
                                    <img src="assets/images/filter-light.svg" class="mr-3 light-svg">Filter
                                </button>
                        <button class="ml-3">
                                    <i class="fas fa-arrow-down mr-3"></i>Download
                                </button>
                              
                        <div class="dropdown-menu filter-dropmenu" aria-labelledby="filter">
                            
                            <div class="row justify-content-center">
                        <div class="col-sm-12 col-11">
                        <div class="edit-profile-box">
                            <form>
                                <div class="input-grp">
                                    <label>Filter by user(s)</label>
                                    <div class="input-grp-inner">
                                    <input type="text" class="input-class" placeholder="Type a member name" value="">
                                </div>
                                </div> 
                                <div class="input-grp">
                                    <label>Filter by user(s)</label>
                                    <div class="input-grp-inner">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="date" class="input-class" placeholder="From" value="" >
                                        </div>  
                                        <div class="col-md-6">
                                            <input type="date" class="input-class" placeholder="From" value="">
                                        </div>  
                                    </div>
                                </div>
                                </div>
                            
                                  
                                <div class="input-grp mb-0">
                                <div class="btn-grp">
                                    <div class="text-left">
                                <button class="">Submit</button>
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
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="team">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="team-head">
                                            Tim's participation <b>70%</b>
                                        </div>
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="progress-bar-team">
                                        </div>
                                            <div class="colors">
                                            <div class="color1">
                                                <div class="btn-bar" data-toggle="tooltip" data-placement="top" title="25%">
                                                  
                                                </div>
                                            </div>
                                            <div class="color2">
                                            <div class="btn-bar" data-toggle="tooltip" data-placement="top" title="20%">
                                                  
                                                </div>
                                            </div>
                                            <div class="color3">
                                             <div class="btn-bar" data-toggle="tooltip" data-placement="top" title="25%">
                                                  
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="small-head">
                        Current
                    </h6>
                    <div class="coll-grp multiple-layer">
                        <img src="assets/images/Chart_alt.svg" class="start-img">
                        <a href="javascript:void(0)"  class="main-coll green ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                  <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>9:00 AM</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        <div class="btn-more collapsed" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <span class="more2">+2 More</span>
                            <span class="less">Less</span>
                            <i class="fas fa-chevron-up"></i>
                        </div>
                    </div>
                       <div class="collapse" id="collapseExample">
          <div class="card">
            <div class="coll-grp multiple-layer">
                        <img src="assets/images/Chart_alt.svg" class="start-img">
                        <a href="javascript:void(0)"  class="main-coll green ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                  <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>9:00 AM</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        
                    </div>
              <div class="coll-grp multiple-layer">
                        <img src="assets/images/Chart_alt.svg" class="start-img">
                        <a href="javascript:void(0)"  class="main-coll green ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                  <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>9:00 AM</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
          </div>
        </div> 
        
                </div>
                
                
                <div class="past-section">
                    <h6 class="small-head mb-2">
                        Past
                    </h6>
                   <div class="row">
                        
                        <div class="col-12">
                            <div class="coll-grp multiple-layer">

                                <img src="assets/images/Chart_alt.svg" class="start-img">
                                <a href="javascript:void(0)" class="main-coll green ">
                                    <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>JAN 18</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                </a>
                                                        <div class="btn-more collapsed" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                            <span class="more2">+2 More</span>
                            <span class="less">Less</span>
                            <i class="fas fa-chevron-up"></i>
                        </div>
                                
                            </div>
                       <div class="collapse" id="collapseExample2">
          <div class="card">
            <div class="coll-grp multiple-layer">
                        <img src="assets/images/Chart_alt.svg" class="start-img">
                        <a href="javascript:void(0)"  class="main-coll green ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                  <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>JAN 18</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        
                    </div>
              <div class="coll-grp multiple-layer">
                        <img src="assets/images/Chart_alt.svg" class="start-img">
                        <a href="javascript:void(0)"  class="main-coll green ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                  <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>JAN 18</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        
                    </div>
          </div>
        </div> 
                        </div>

                        <div class="col-12">
                            <div class="coll-grp red">
                                <img src="assets/images/User_fill.svg" class="start-img">
                                <a href="javascript:void(0)" class="main-coll red ">
                                   <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>JAN 18</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                </a>
                            </div>
                           
                        </div>
                        
                        
                        <div class="col-12">
                            <div class="coll-grp multiple-layer">

                                <img src="assets/images/Chart_alt.svg" class="start-img">
                                <a href="javascript:void(0)" class="main-coll green ">
                                    <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                              <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>JAN 17</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                </a>
                                                        <div class="btn-more collapsed" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                            <span class="more2">+2 More</span>
                            <span class="less">Less</span>
                            <i class="fas fa-chevron-up"></i>
                        </div>
                                
                            </div>
                       <div class="collapse" id="collapseExample3">
          <div class="card">
            <div class="coll-grp multiple-layer">
                        <img src="assets/images/Chart_alt.svg" class="start-img">
                       <a href="javascript:void(0)"  class="main-coll green ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                  <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>JAN 17</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        
                    </div>
              <div class="coll-grp multiple-layer">
                        <img src="assets/images/Chart_alt.svg" class="start-img">
                  <a href="javascript:void(0)"  class="main-coll green ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                  <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>JAN 17</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        
                    </div>
          </div>
        </div> 
                        </div>
                         <div class="col-12">
                            <div class="coll-grp multiple-layer">

                                <img src="assets/images/Chart_alt.svg" class="start-img">
                                <a href="javascript:void(0)" class="main-coll green ">
                                    <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                              <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>JAN 16</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                </a>
                                                        <div class="btn-more collapsed" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                            <span class="more2">+2 More</span>
                            <span class="less">Less</span>
                            <i class="fas fa-chevron-up"></i>
                        </div>
                                
                            </div>
                       <div class="collapse" id="collapseExample4">
          <div class="card">
            <div class="coll-grp multiple-layer">
                        <img src="assets/images/Chart_alt.svg" class="start-img">
                       <a href="javascript:void(0)"  class="main-coll green ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                  <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>JAN 16</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        
                    </div>
              <div class="coll-grp multiple-layer">
                        <img src="assets/images/Chart_alt.svg" class="start-img">
                  <a href="javascript:void(0)"  class="main-coll green ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                  <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>JAN 16</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        
                    </div>
          </div>
        </div> 
                        </div>
                       <div class="col-12">
                            <div class="coll-grp blue">

                                <img src="assets/images/Chat_fill.svg" class="start-img">
                                <a href="javascript:void(0)" class="main-coll blue ">
                                    <div class="row justify-content-between align-items-center">
                                <div class="col-xl-11 col-lg-10 col-md-10 d-flex">
                                    <div class="pro-bar">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                             <div class="profile-user-section ml-3">
                                    <h5 class="m-0 ">What did you accomplish on your last work day?</h5>
                                    <div class="clearfix"></div>
                                    <div class="media">
                                          <img class="" src="assets/images/tim.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <div class="p-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata. <div class="p-tag">
                                                  <span class="more-btn">More</span>
                                                  <span class="less-btn">Less</span>
                                                  </div></div>
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xl-1 col-lg-2 col-md-2">
                                    <ul class="ul-right ul-time p-0 m-0">
                                        <li class="ml-auto w-100">
                                            <span>JAN 16</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                </a>
                            </div>
                           
                        </div>
                       
    
                        
                    </div>
                </div>

            </div>
        </div>
    </section>

 

<?php include "footer.php" ?>