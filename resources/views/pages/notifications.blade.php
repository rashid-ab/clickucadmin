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
            <div class="col-lg-6 px-lg-0 ml-lg-25 my-4">
                <div class="d-flex flex-wrap align-items-center">
                    <h3 class=" mt-3 mb-4 pr-3 text-capitalize" style="font-weight:700;color:#666687;">Notifications</h3> 
                    <div class="notifications_btn ml-auto-450">
                        <a href="{{ url('/create_notifications') }}" class="text-decoration-none text-uppercase upgrade_btn border-0 text-uppercase px-4 d-inline-flex align-items-center text-white" style="min-height:40px;height:initial;">create notifications</a>
                    </div>
                </div>
                <div class="tab-links">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="javascript:void(0);" class="tab-links-a active tabs-trigger text-decoration-none" data-id="most_recent_noti">Most Recent</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0);" class="tab-links-a tabs-trigger text-decoration-none" data-id="past_week_noti">Past Week</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0);" class="tab-links-a mr-0 tabs-trigger text-decoration-none" data-id="all_notification">All Notifications</a></li>
                    </ul>
                </div>
                <div class="tab-items-list active" id="most_recent_noti" style="display: block;">
                    <div class="bg-white custom-card border radius-6 p-3 mt-3">
                        <div class="card-action">
                            <div class="dropdown ml-auto text-right">
                                <button class="p-0 border-0 bg-transparent color-grey_c" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notifications">
                                    <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="card_image">
                                <img class="rounded-circle" src="{{ asset('public/images/man_pic.jpg') }}" alt="" width="45px" height="45px">
                            </div>
                            <div class="user_information ml-3">
                                <h6>Chris Heaven</h6>
                                <p class="color-grey_c"><i class="fa fa-map-marker-alt text-danger"></i> <span>Seattle USA</span> <span>|</span> <span>12:30 pm</span></p> 
                            </div>
                            <p class="w-100 mt-2 color-grey_c">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem esse beatae mollitia deserunt perferendis et.</p>
                        </div>
                    </div>
                    <div class="bg-white custom-card border radius-6 p-3 mt-3">
                        <div class="card-action">
                            <div class="dropdown ml-auto text-right">
                                <button class="p-0 border-0 bg-transparent color-grey_c" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notifications">
                                    <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="card_image">
                                <img class="rounded-circle" src="{{ asset('public/images/man_pic.jpg') }}" alt="" width="45px" height="45px">
                            </div>
                            <div class="user_information ml-3">
                                <h6>Chris Heaven</h6>
                                <p class="color-grey_c"><i class="fa fa-map-marker-alt text-danger"></i> <span>Seattle USA</span> <span>|</span> <span>12:30 pm</span></p> 
                            </div>
                            <p class="w-100 mt-2 color-grey_c">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem esse beatae mollitia deserunt perferendis et.</p>
                        </div>
                    </div>
                    <div class="bg-white custom-card border radius-6 p-3 mt-3">
                        <div class="card-action">
                            <div class="dropdown ml-auto text-right">
                                <button class="p-0 border-0 bg-transparent color-grey_c" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notifications">
                                    <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="card_image">
                                <img class="rounded-circle" src="{{ asset('public/images/man_pic.jpg') }}" alt="" width="45px" height="45px">
                            </div>
                            <div class="user_information ml-3">
                                <h6>Chris Heaven</h6>
                                <p class="color-grey_c"><i class="fa fa-map-marker-alt text-danger"></i> <span>Seattle USA</span> <span>|</span> <span>12:30 pm</span></p> 
                            </div>
                            <p class="w-100 mt-2 color-grey_c">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem esse beatae mollitia deserunt perferendis et.</p>
                        </div>
                    </div>
                </div> 
                <div class="tab-items-list" id="past_week_noti"  style="display: none;">
                    <div class="bg-white custom-card border radius-6 p-3 mt-3">
                        <div class="card-action">
                            <div class="dropdown ml-auto text-right">
                                <button class="p-0 border-0 bg-transparent color-grey_c" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notifications">
                                    <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="card_image">
                                <img class="rounded-circle" src="{{ asset('public/images/man_pic.jpg') }}" alt="" width="45px" height="45px">
                            </div>
                            <div class="user_information ml-3">
                                <h6>Chris Heaven</h6>
                                <p class="color-grey_c"><i class="fa fa-map-marker-alt text-danger"></i> <span>Seattle USA</span> <span>|</span> <span>12:30 pm</span></p> 
                            </div>
                            <p class="w-100 mt-2 color-grey_c">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem esse beatae mollitia deserunt perferendis et.</p>
                        </div>
                    </div>
                    <div class="bg-white custom-card border radius-6 p-3 mt-3">
                        <div class="card-action">
                            <div class="dropdown ml-auto text-right">
                                <button class="p-0 border-0 bg-transparent color-grey_c" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notifications">
                                    <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="card_image">
                                <img class="rounded-circle" src="{{ asset('public/images/man_pic.jpg') }}" alt="" width="45px" height="45px">
                            </div>
                            <div class="user_information ml-3">
                                <h6>Chris Heaven</h6>
                                <p class="color-grey_c"><i class="fa fa-map-marker-alt text-danger"></i> <span>Seattle USA</span> <span>|</span> <span>12:30 pm</span></p> 
                            </div>
                            <p class="w-100 mt-2 color-grey_c">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem esse beatae mollitia deserunt perferendis et.</p>
                        </div>
                    </div>
                </div>    
                <div class="tab-items-list" id="all_notification"  style="display: none;">
                    <div class="bg-white custom-card border radius-6 p-3 mt-3">
                        <div class="card-action">
                            <div class="dropdown ml-auto text-right">
                                <button class="p-0 border-0 bg-transparent color-grey_c" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notifications">
                                    <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="card_image">
                                <img class="rounded-circle" src="{{ asset('public/images/man_pic.jpg') }}" alt="" width="45px" height="45px">
                            </div>
                            <div class="user_information ml-3">
                                <h6>Chris Heaven</h6>
                                <p class="color-grey_c"><i class="fa fa-map-marker-alt text-danger"></i> <span>Seattle USA</span> <span>|</span> <span>12:30 pm</span></p> 
                            </div>
                            <p class="w-100 mt-2 color-grey_c">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem esse beatae mollitia deserunt perferendis et.</p>
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