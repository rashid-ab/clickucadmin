@extends('layouts.app')
@section('content')
    <!-- Dashboard Section start -->
     <section class="site-main-wrapper">
         <!-- Responsive Top bar Start -->
          <div class="bg-white d-lg-none px-3">
             <div class="d-flex flex-wrap align-items-center">
                 <button class="p-0 border-0 bg-transparent mr-3" type="button" data-toggle="modal" data-target="#navbar_popup">
                     <i class="fa fa-bars color-grey_c" style="font-size:20px;"></i>
                 </button>
                 <div class="top-bar-log">
                     <img src="{{ asset('public/images/logo.png') }}" alt="Site-logo" style="max-height:60px;">
                 </div>
                 <div class="top-bar-icons ml-auto">
                     <div class="icons-top-profile d-flex flex-wrap align-items-center">
                         <span class="position-relative alert_icon mr-4"><a href="notifications.html"><i class="fa fa-bell"></i></a></span>
                         <a href="inbox.html"><i class="fa fa-envelope mr-4"></i></a>
                         <div class="dropdown ml-auto">
                             <button class="p-0 border-0 bg-transparent" type="button" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="fas fa-ellipsis-v"></i>
                             </button>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notifications">
                                 <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#profile_popup">Profile</a>
                                 <a class="dropdown-item" href="account_settings.html">Account Settings</a>
                                 <a class="dropdown-item" href="#">Logout</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
          </div>
         <!-- Responsive Top bar End -->
         <div class="row m-0">
             <div class="col-lg-3 pl-lg-0 d-none d-lg-block position-lg-fixed">
                @include('partials.aside')
             </div>
             <div class="col-lg-6 px-0 ml-lg-25 pt-4">
                <div class="tab-links px-3">
                    <ul class="list-unstyled list-inline border-under">
                        <li class="list-inline-item"><a href="javascript:void(0);" class="tab-links-a active tabs-trigger text-decoration-none" data-id="account_settings">Account Settings</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0);" class="tab-links-a tabs-trigger text-decoration-none" data-id="subscriptions">Subscriptions</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0);" class="tab-links-a tabs-trigger text-decoration-none" data-id="referrals">Referrals</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0);" class="tab-links-a mr-0 tabs-trigger text-decoration-none" data-id="transactions">Transactions</a></li>
                    </ul>
                </div>
                <div class="tab-items-list" id="account_settings">
                    <form class="w-100 px-3" action="" method="">
                        <div class="bg-white p-4 mt-5 w-100 radius-6">
                            <div class="top-bar-table d-flex flex-wrap align-items-center">
                                <h5>Account information</h5>
                            </div>
                            <div class="form-content">
                                <div class="data-fields mt-4">
                                    <div class="field-set mb-4">
                                    <label class="w-100" for="username">Username</label>
                                    <input type="text" class="w-100" readonly value="Tom Matthews">
                                </div>
                                <div class="field-set mb-4">
                                        <label class="w-100" for="email address">Email Address</label>
                                        <input type="email" class="w-100" readonly value="admin@mail.com">
                                    </div>
                                    <div class="field-set mb-4">
                                        <label class="w-100" for="Password">Password</label>
                                        <input type="password" class="w-100" readonly value="admin1234">
                                    </div>
                                    <div class="field-set mb-4">
                                        <label class="w-100" for="Address">Address</label>
                                        <input type="text" class="w-100" readonly value="admin1234">
                                    </div>
                                </div>
                            </div>
                            <div class="notification-condition d-flex flex-wrap">
                                <div class="">
                                    <p class="text-capitalize" style="color:#666687;">notifications</p>
                                </div>
                                <div class="swich_btn ml-auto">
                                    <label class="switch ">
                                        <input type="checkbox" name="" class="checkbox-toggle">
                                        <span class="slider_toggle round"></span>
                                    </label>
                                    <span class="d-block check-status w-100 text-center text-uppercase" style="color:#666687;">Off</span>
                                </div>
                            </div>   
                        </div>
                    </form>
                    <div class="dashboard-chart my-3 row mx-0">
                        <div class="col-12">
                            <div class="all_user_table radius-6 bg-white pt-4 pb-sm-4">
                                <div class="top-bar-table d-flex flex-wrap px-3 align-items-center">
                                <h5>Groups</h5>
                                </div>
                                <div class="table-wrap">
                                <div class="users_table">
                                    <div class="row mx-0 mt-4 px-2 border-bottom pb-1">
                                        <div class="col-4 px-8"><span class="user_table_text text-left">Name</span></div>
                                        <div class="col-3 px-8"><span class="user_table_text">No of Members</span></div>
                                        <div class="col-3 px-8"><span class="user_table_text">Created Date</span></div>
                                        <div class="col-2 px-8"><span class="user_table_text"></span></div>
                                    </div>
                                    <div class="row m-0 px-2 mb-3 mt-3">
                                        <div class="col-4 px-8">
                                            <span class="table_tiny_text">
                                                45 days fasting challenge
                                            </span>
                                        </div>
                                        <div class="col-3 px-8 d-flex align-items-center">
                                            <span class="table_tiny_text d-block text-center w-100">
                                            34
                                            </span>
                                        </div>
                                        <div class="col-3 px-8 d-flex align-items-center justify-content-center">
                                            <span class="table_tiny_text">
                                                June 23, 2020
                                            </span>
                                        </div>
                                        <div class="col-2 px-8 d-flex align-items-center">
                                            <span class="table_tiny_text d-block text-center w-100">
                                                <a href="#" class="text-decoration-none color-grey_c font-md-s"><i class="fa fa-ellipsis-h"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row m-0 px-2 mb-3 mt-3">
                                        <div class="col-4 px-8">
                                            <span class="table_tiny_text">
                                                45 days fasting challenge
                                            </span>
                                        </div>
                                        <div class="col-3 px-8 d-flex align-items-center">
                                            <span class="table_tiny_text d-block text-center w-100">
                                            34
                                            </span>
                                        </div>
                                        <div class="col-3 px-8 d-flex align-items-center justify-content-center">
                                            <span class="table_tiny_text">
                                                June 23, 2020
                                            </span>
                                        </div>
                                        <div class="col-2 px-8 d-flex align-items-center">
                                            <span class="table_tiny_text d-block text-center w-100">
                                                <a href="#" class="text-decoration-none color-grey_c font-md-s"><i class="fa fa-ellipsis-h"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row m-0 px-2 mb-3 mt-3">
                                        <div class="col-4 px-8">
                                            <span class="table_tiny_text">
                                                45 days fasting challenge
                                            </span>
                                        </div>
                                        <div class="col-3 px-8 d-flex align-items-center">
                                            <span class="table_tiny_text d-block text-center w-100">
                                            34
                                            </span>
                                        </div>
                                        <div class="col-3 px-8 d-flex align-items-center justify-content-center">
                                            <span class="table_tiny_text">
                                                June 23, 2020
                                            </span>
                                        </div>
                                        <div class="col-2 px-8 d-flex align-items-center">
                                            <span class="table_tiny_text d-block text-center w-100">
                                                <a href="#" class="text-decoration-none color-grey_c font-md-s"><i class="fa fa-ellipsis-h"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row m-0 px-2 mb-3 mt-3">
                                        <div class="col-4 px-8">
                                            <span class="table_tiny_text">
                                                45 days fasting challenge
                                            </span>
                                        </div>
                                        <div class="col-3 px-8 d-flex align-items-center">
                                            <span class="table_tiny_text d-block text-center w-100">
                                            34
                                            </span>
                                        </div>
                                        <div class="col-3 px-8 d-flex align-items-center justify-content-center">
                                            <span class="table_tiny_text">
                                                June 23, 2020
                                            </span>
                                        </div>
                                        <div class="col-2 px-8 d-flex align-items-center">
                                            <span class="table_tiny_text d-block text-center w-100">
                                                <a href="#" class="text-decoration-none color-grey_c font-md-s"><i class="fa fa-ellipsis-h"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="dashboard-chart row mx-0 tab-items-list" id="referrals" style="display: none;">
                <h3 class="mt-5 w-100 mb-4 px-3 text-capitalize" style="font-weight:700;color:#666687;">Referrals</h3> 
                  <div class="chart-card col-md-6 mb-3">
                      <div class="card-wrap d-flex flex-wrap h-100  bg-white align-items-center box-o-color p-3">
                          <div class="card-detail flex-1">
                              <h3>$1,240</h3>
                              <p class="my-0">Total Paid to Affiliaters</p>
                          </div>
                          <div class="card-icon">
                              <i class="fa fa-user"></i>
                          </div>
                      </div>
                  </div>
                  <div class="chart-card col-md-6 mb-3">
                      <div class="card-wrap d-flex h-100 flex-wrap bg-white align-items-center box-purple-color p-3">
                          <div class="card-detail flex-1">
                              <h3>92</h3>
                              <p class="my-0">New Users Signed through Affiliate Partners</p>
                          </div>
                          <div class="card-icon">
                              <i class="fa fa-user"></i>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 mb-3">
                     <div class="all_user_table bg-white pt-3 pb-sm-3">
                         <div class="top-bar-table d-flex flex-wrap px-3 align-items-center">
                            <h5>Affiliate Users Under review <span class="color-grey_c">34</span></h5>
                         </div>
                         
                     <div class="table-wrap">
                     <div class="users_table">
                         <div class="row mx-0 mt-4 px-2 border-bottom pb-1">
                             <div class="col-3 px-8"><span class="user_table_text text-left">Account</span></div>
                             <div class="col-2 px-8"><span class="user_table_text">Reg.Date</span></div>
                             <div class="col-3 px-8"><span class="user_table_text">Affiliate Partner</span></div>
                             <div class="col-2 px-8"><span class="user_table_text">Groups Joined</span></div>
                             <div class="col-1 px-8"><span class="user_table_text">Plan</span></div>
                             <div class="col-1 px-8"></div>
                         </div>
                         <div class="row m-0 px-2 mb-3">
                               <div class="col-3 px-8">
                                 <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                     <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                     <div class="user-info mt-3 pl-2">
                                         <h6 class="mb-0">Grant Marshall</h6>
                                         <p>admin@mail.com</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-2 px-8 d-flex align-items-center">
                                 <span class="table_tiny_text d-block text-center w-100">
                                     June 23, 2020
                                 </span>
                             </div>
                             <div class="col-3 px-8">
                                 <div class="d-flex flex-wrap align-items-center justify-content-center">
                                     <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                     <div class="user-info mt-3 pl-2">
                                         <h6 class="mb-0">Grant Marshall</h6>
                                         <p>40 days fitness group</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-2 px-8 d-flex align-items-center">
                                 <span class="table_tiny_text d-block text-center w-100">
                                     3
                                 </span>
                             </div>
                             <div class="col-1 px-8 d-flex align-items-center">
                                 <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                                     Free
                                 </span>
                             </div>
                             <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                                 <a href="#" class="text-decoration-none  status_approve_btn">Approve</a>
                             </div>
                         </div>
                         <div class="row m-0 px-2 mb-3">
                             <div class="col-3 px-8">
                                 <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                     <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                     <div class="user-info mt-3 pl-2">
                                         <h6 class="mb-0">Grant Marshall</h6>
                                         <p>admin@mail.com</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-2 px-8 d-flex align-items-center">
                                 <span class="table_tiny_text d-block text-center w-100">
                                     June 23, 2020
                                 </span>
                             </div>
                             <div class="col-3 px-8">
                                 <div class="d-flex flex-wrap align-items-center justify-content-center">
                                     <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                     <div class="user-info mt-3 pl-2">
                                         <h6 class="mb-0">Grant Marshall</h6>
                                         <p>40 days fitness group</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-2 px-8 d-flex align-items-center">
                                 <span class="table_tiny_text d-block text-center w-100">
                                     3
                                 </span>
                             </div>
                             <div class="col-1 px-8 d-flex align-items-center">
                                 <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                                     Free
                                 </span>
                             </div>
                             <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                                 <a href="#" class="text-decoration-none  status_approve_btn">Approve</a>
                             </div>
                         </div>
                         <div class="row m-0 px-2 mb-3">
                             <div class="col-3 px-8">
                                 <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                     <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                     <div class="user-info mt-3 pl-2">
                                         <h6 class="mb-0">Grant Marshall</h6>
                                         <p>admin@mail.com</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-2 px-8 d-flex align-items-center">
                                 <span class="table_tiny_text d-block text-center w-100">
                                     June 23, 2020
                                 </span>
                             </div>
                             <div class="col-3 px-8">
                                 <div class="d-flex flex-wrap align-items-center justify-content-center">
                                     <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                     <div class="user-info mt-3 pl-2">
                                         <h6 class="mb-0">Grant Marshall</h6>
                                         <p>40 days fitness group</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-2 px-8 d-flex align-items-center">
                                 <span class="table_tiny_text d-block text-center w-100">
                                     3
                                 </span>
                             </div>
                             <div class="col-1 px-8 d-flex align-items-center">
                                 <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                                     Free
                                 </span>
                             </div>
                             <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                                 <a href="#" class="text-decoration-none  status_approve_btn">Approve</a>
                             </div>
                         </div>
                         <div class="row m-0 px-2 mb-3">
                             <div class="col-3 px-8">
                                 <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                     <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                     <div class="user-info mt-3 pl-2">
                                         <h6 class="mb-0">Grant Marshall</h6>
                                         <p>admin@mail.com</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-2 px-8 d-flex align-items-center">
                                 <span class="table_tiny_text d-block text-center w-100">
                                     June 23, 2020
                                 </span>
                             </div>
                             <div class="col-3 px-8">
                                 <div class="d-flex flex-wrap align-items-center justify-content-center">
                                     <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                     <div class="user-info mt-3 pl-2">
                                         <h6 class="mb-0">Grant Marshall</h6>
                                         <p>40 days fitness group</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-2 px-8 d-flex align-items-center">
                                 <span class="table_tiny_text d-block text-center w-100">
                                     3
                                 </span>
                             </div>
                             <div class="col-1 px-8 d-flex align-items-center">
                                 <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                                     Free
                                 </span>
                             </div>
                             <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                                 <a href="#" class="text-decoration-none  status_approve_btn">Approve</a>
                             </div>
                         </div>
                     </div>
                 </div>
            </div>
         </div>
                    <div class="col-12 mb-3">
                      <div class="all_user_table bg-white pt-3 pb-sm-3">
                          <div class="top-bar-table d-flex flex-wrap px-3 align-items-center">
                             <h5>All Affiliate Users</h5>
                             <div class="search_fields d-flex flex-wrap ml-sm-auto w-sm-100">
                                 <input type="text" class="mr-3 table-search-field" placeholder="Search Users">
                                  <div class="dropdown">
                                      <button class="btn bg-grey-c text-sm-center text-left dropdown-toggle" type="button" id="user_type_drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       User Type
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="user_type_drop">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      </div>
                                  </div>
                             </div>
                          </div>
                          
                      <div class="table-wrap">
                      <div class="users_table">
                          <div class="row mx-0 mt-4 px-2 border-bottom pb-1">
                              <div class="col-3 px-8"><span class="user_table_text text-left">Account</span></div>
                              <div class="col-2 px-8"><span class="user_table_text">Reg.Date</span></div>
                              <div class="col-3 px-8"><span class="user_table_text">Affiliate Partner</span></div>
                              <div class="col-2 px-8"><span class="user_table_text">Groups Joined</span></div>
                              <div class="col-1 px-8"><span class="user_table_text">Plan</span></div>
                              <div class="col-1 px-8"></div>
                          </div>
                          <div class="row m-0 px-2 mb-3">
                                <div class="col-3 px-8">
                                  <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                      <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                      <div class="user-info mt-3 pl-2">
                                          <h6 class="mb-0">Grant Marshall</h6>
                                          <p>admin@mail.com</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-2 px-8 d-flex align-items-center">
                                  <span class="table_tiny_text d-block text-center w-100">
                                      June 23, 2020
                                  </span>
                              </div>
                              <div class="col-3 px-8">
                                  <div class="d-flex flex-wrap align-items-center justify-content-center">
                                      <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                      <div class="user-info mt-3 pl-2">
                                          <h6 class="mb-0">Grant Marshall</h6>
                                          <p>40 days fitness group</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-2 px-8 d-flex align-items-center">
                                  <span class="table_tiny_text d-block text-center w-100">
                                      3
                                  </span>
                              </div>
                              <div class="col-1 px-8 d-flex align-items-center">
                                  <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                                      Free
                                  </span>
                              </div>
                              <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                                  <a href="#" class="text-decoration-none color-grey_c"><i class="fa fa-ellipsis-h "></i></a>
                              </div>
                          </div>
                          <div class="row m-0 px-2 mb-3">
                              <div class="col-3 px-8">
                                  <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                      <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                      <div class="user-info mt-3 pl-2">
                                          <h6 class="mb-0">Grant Marshall</h6>
                                          <p>admin@mail.com</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-2 px-8 d-flex align-items-center">
                                  <span class="table_tiny_text d-block text-center w-100">
                                      June 23, 2020
                                  </span>
                              </div>
                              <div class="col-3 px-8">
                                  <div class="d-flex flex-wrap align-items-center justify-content-center">
                                      <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                      <div class="user-info mt-3 pl-2">
                                          <h6 class="mb-0">Grant Marshall</h6>
                                          <p>40 days fitness group</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-2 px-8 d-flex align-items-center">
                                  <span class="table_tiny_text d-block text-center w-100">
                                      3
                                  </span>
                              </div>
                              <div class="col-1 px-8 d-flex align-items-center">
                                  <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                                      Free
                                  </span>
                              </div>
                              <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                                  <a href="#" class="text-decoration-none color-grey_c"><i class="fa fa-ellipsis-h "></i></a>
                              </div>
                          </div>
                          <div class="row m-0 px-2 mb-3">
                              <div class="col-3 px-8">
                                  <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                      <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                      <div class="user-info mt-3 pl-2">
                                          <h6 class="mb-0">Grant Marshall</h6>
                                          <p>admin@mail.com</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-2 px-8 d-flex align-items-center">
                                  <span class="table_tiny_text d-block text-center w-100">
                                      June 23, 2020
                                  </span>
                              </div>
                              <div class="col-3 px-8">
                                  <div class="d-flex flex-wrap align-items-center justify-content-center">
                                      <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                      <div class="user-info mt-3 pl-2">
                                          <h6 class="mb-0">Grant Marshall</h6>
                                          <p>40 days fitness group</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-2 px-8 d-flex align-items-center">
                                  <span class="table_tiny_text d-block text-center w-100">
                                      3
                                  </span>
                              </div>
                              <div class="col-1 px-8 d-flex align-items-center">
                                  <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                                      Free
                                  </span>
                              </div>
                              <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                                  <a href="#" class="text-decoration-none color-grey_c"><i class="fa fa-ellipsis-h "></i></a>
                              </div>
                          </div>
                          <div class="row m-0 px-2 mb-3">
                              <div class="col-3 px-8">
                                  <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                      <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                      <div class="user-info mt-3 pl-2">
                                          <h6 class="mb-0">Grant Marshall</h6>
                                          <p>admin@mail.com</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-2 px-8 d-flex align-items-center">
                                  <span class="table_tiny_text d-block text-center w-100">
                                      June 23, 2020
                                  </span>
                              </div>
                              <div class="col-3 px-8">
                                  <div class="d-flex flex-wrap align-items-center justify-content-center">
                                      <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                      <div class="user-info mt-3 pl-2">
                                          <h6 class="mb-0">Grant Marshall</h6>
                                          <p>40 days fitness group</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-2 px-8 d-flex align-items-center">
                                  <span class="table_tiny_text d-block text-center w-100">
                                      3
                                  </span>
                              </div>
                              <div class="col-1 px-8 d-flex align-items-center">
                                  <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                                      Free
                                  </span>
                              </div>
                              <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                                  <a href="#" class="text-decoration-none color-grey_c"><i class="fa fa-ellipsis-h "></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
             </div>
          </div>
         </div> 
           <div class="px-3 tab-items-list" id="subscriptions">
                <div class="bg-white p-4 mt-5 w-100 radius-6">
                    <div class="top-bar-table d-flex flex-wrap align-items-center">
                        <h5>Subscription information</h5>
                    </div>
                    <div class="form-content">
                        <div class="data-fields mt-4">
                            <div class="field-set mb-4">
                            <label class="w-100" for="type">Subscription Type</label>
                            <input type="text" class="w-100" readonly="" value="Free">
                            <button class="bg-transparent border-0  form-input-ele"><span class="fa fa-angle-down"></span></button>
                        </div>
                        <div class="field-set mb-4">
                            <label class="w-100" for="Billing">Billing Date</label>
                            <input type="text" class="w-100" readonly="" value="7/11/1973">
                            <button class="bg-transparent border-0  form-input-ele"><span class="fa fa-angle-down"></span></button>
                        </div>
                        <div class="field-set mb-4">
                            <label class="w-100" for="Address">Billing Address</label>
                            <input type="text" class="w-100" readonly="" value="admin1234">
                            <button class="bg-transparent border-0  form-input-ele"><span class="fa fa-angle-down"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="dashboard-chart mt-5 row mx-0 tab-items-list" id="transactions" style="display: none;">
            <div class="col-12 mb-3">
               <div class="all_user_table border radius-6 bg-white pt-4 pb-sm-4">
                  <div class="top-bar-table d-flex flex-wrap px-3 align-items-center">
                     <h5>All Transactions</h5>
                     <div class="search_fields d-flex flex-wrap ml-sm-auto w-sm-100">
                        <div class="dropdown mr-2">
                           <button class="btn bg-grey-c text-sm-center text-left dropdown-toggle" type="button" id="user_type_drop_2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Credit
                           </button>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="user_type_drop_2">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                           </div>
                        </div>
                        <div class="dropdown">
                           <button class="btn bg_trans_danger text-sm-center text-left dropdown-toggle" type="button" id="user_type_drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Export Report
                           </button>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="user_type_drop">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="table-wrap">
                     <div class="users_table">
                        <div class="row mx-0 mt-4 px-2 border-bottom pb-1">
                           <div class="col-3 px-8"><span class="user_table_text text-left">Account</span></div>
                           <div class="col-2 px-8"><span class="user_table_text">Date</span></div>
                           <div class="col-3 px-8"><span class="user_table_text">Amount</span></div>
                           <div class="col-2 px-8"><span class="user_table_text">Payment Type</span></div>
                           <div class="col-1 px-8"><span class="user_table_text">Bank </span></div>
                           <div class="col-1 px-8"><span class="user_table_text">Type </span></div>
                        </div>
                        <div class="row m-0 px-2 mb-3">
                           <div class="col-3 px-8">
                              <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                 <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                 <div class="user-info mt-3 pl-2">
                                    <h6 class="mb-0">Grant Marshall</h6>
                                    <p>User</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-2 px-8 d-flex align-items-center">
                              <span class="table_tiny_text d-block text-center w-100">
                              June 23, 2020
                              </span>
                           </div>
                           <div class="col-3 px-8 d-flex align-items-center justify-content-center">
                              <span class="table_tiny_text">
                              + $23.00
                              </span>
                           </div>
                           <div class="col-2 px-8 d-flex align-items-center">
                              <span class="table_tiny_text d-block text-center w-100">
                              Subscription
                              </span>
                           </div>
                           <div class="col-1 px-8 d-flex align-items-center">
                              <span class="table_tiny_text d-block text-center w-100 ">
                              Paypal, USA
                              </span>
                           </div>
                           <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                              <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                              Debit
                              </span>
                           </div>
                        </div>
                        <div class="row m-0 px-2 mb-3">
                           <div class="col-3 px-8">
                              <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                 <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                 <div class="user-info mt-3 pl-2">
                                    <h6 class="mb-0">Grant Marshall</h6>
                                    <p>User</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-2 px-8 d-flex align-items-center">
                              <span class="table_tiny_text d-block text-center w-100">
                              June 23, 2020
                              </span>
                           </div>
                           <div class="col-3 px-8 d-flex align-items-center justify-content-center">
                              <span class="table_tiny_text">
                              + $23.00
                              </span>
                           </div>
                           <div class="col-2 px-8 d-flex align-items-center">
                              <span class="table_tiny_text d-block text-center w-100">
                              Subscription
                              </span>
                           </div>
                           <div class="col-1 px-8 d-flex align-items-center">
                              <span class="table_tiny_text d-block text-center w-100 ">
                              Paypal, USA
                              </span>
                           </div>
                           <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                              <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                              Debit
                              </span>
                           </div>
                        </div>
                        <div class="row m-0 px-2 mb-3">
                           <div class="col-3 px-8">
                              <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                 <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                 <div class="user-info mt-3 pl-2">
                                    <h6 class="mb-0">Grant Marshall</h6>
                                    <p>User</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-2 px-8 d-flex align-items-center">
                              <span class="table_tiny_text d-block text-center w-100">
                              June 23, 2020
                              </span>
                           </div>
                           <div class="col-3 px-8 d-flex align-items-center justify-content-center">
                              <span class="table_tiny_text">
                              + $23.00
                              </span>
                           </div>
                           <div class="col-2 px-8 d-flex align-items-center">
                              <span class="table_tiny_text d-block text-center w-100">
                              Subscription
                              </span>
                           </div>
                           <div class="col-1 px-8 d-flex align-items-center">
                              <span class="table_tiny_text d-block text-center w-100 ">
                              Paypal, USA
                              </span>
                           </div>
                           <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                              <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                              Debit
                              </span>
                           </div>
                        </div>
                        <div class="row m-0 px-2 mb-3">
                           <div class="col-3 px-8">
                              <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                 <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                 <div class="user-info mt-3 pl-2">
                                    <h6 class="mb-0">Grant Marshall</h6>
                                    <p>User</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-2 px-8 d-flex align-items-center">
                              <span class="table_tiny_text d-block text-center w-100">
                              June 23, 2020
                              </span>
                           </div>
                           <div class="col-3 px-8 d-flex align-items-center justify-content-center">
                              <span class="table_tiny_text">
                              + $23.00
                              </span>
                           </div>
                           <div class="col-2 px-8 d-flex align-items-center">
                              <span class="table_tiny_text d-block text-center w-100">
                              Subscription
                              </span>
                           </div>
                           <div class="col-1 px-8 d-flex align-items-center">
                              <span class="table_tiny_text d-block text-center w-100 text-uppercase">
                              Paypal, USA
                              </span>
                           </div>
                           <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                              <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                              Debit
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>  
        </div>
         <div class="col-lg-3 pr-lg-0 d-lg-block d-none position-lg-fixed right-0">
            @include('partials.profile')
         </div>
       </div>
           <!-- Modals on resposive -->
         <!-- Modal -->
         <div class="modal fade d-lg-none" id="profile_popup" tabindex="-1" role="dialog" aria-labelledby="profile_popupTitle" aria-hidden="true">
             <div class="modal-dialog position-fixed w-100 h-100 m-0" role="document">
                 <div class="modal-content w-100 h-100 border-0" style="border-radius:0px !important;">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body overflow-y-auto">
                         <div class="">
                            @include('partials.profile')
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 
         <div class="modal fade" id="navbar_popup" tabindex="-1" role="dialog" aria-labelledby="navbar_popupTitle" aria-hidden="true">
             <div class="modal-dialog position-fixed w-100 h-100 m-0" role="document">
                 <div class="modal-content w-100 h-100 border-0" style="border-radius:0px !important;">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body overflow-y-auto">
                        @include('partials.aside')
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Dashboard Section End -->
@endsection