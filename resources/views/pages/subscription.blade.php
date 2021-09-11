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
                         <span class="position-relative alert_icon mr-4"><a href="#"><i class="fa fa-bell"></i></a></span>
                         <a href="#"><i class="fa fa-envelope mr-4"></i></a>
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
            <div class="col-lg-6 px-0  ml-lg-25">
                <h3 class="mt-5 w-100  px-3 text-capitalize mb-4" style="font-weight:700;color:#666687;">All Users <span class="color-grey_c font-normal">2345</span></h3> 
                <div class="dashboard-chart row mx-0">
                    <div class="chart-card col-md-6 mb-3">
                        <div class="card-wrap d-flex flex-wrap h-100  bg-white align-items-center box-o-color p-3">
                            <div class="card-detail flex-1">
                                <h3>450</h3>
                                <p class="my-0">Free Plan Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="chart-card col-md-6  mb-3">
                        <div class="card-wrap d-flex h-100 flex-wrap bg-white align-items-center box-purple-color p-3">
                            <div class="card-detail flex-1">
                                <h3>92</h3>
                                <p class="my-0">Smart Plan Subscribed</p>
                            </div>     
                        </div>
                    </div>
                    <div class="chart-card col-12  mb-3">
                        <div class="card-wrap d-flex h-100 flex-wrap bg-white align-items-center box-purple-color p-3">
                            <div class="card-detail flex-1">
                                <h3>92</h3>
                                <p class="my-0">Advance Subscribed</p>
                            </div>     
                        </div>
                    </div>
                </div>
                <h3 class="mt-5 w-100  px-3 text-capitalize mb-4" style="font-weight:700;color:#666687;">Plans</h3> 
                <div class="owl-carousel px-3 my-4">
                    <div class="price-card py-4 px-3 bg-white"> 
                        <div class="packege_detail border-bottom">
                            <h5 class="text-center text-uppercase text-o-color">Free</h5>
                            <p class="text-center color-grey_c mt-3"><span class="text-o-color font-700">$0</span> per monthly</p>
                        </div>
                        <div class="benifits-packege w-fit-content mx-auto mt-5">
                            <p>7 Challenges to join</p>
                            <p>Invite  friends</p>
                            <p>Progress reports</p>
                        </div>
                        <div class="text-center mt-5">
                            <button class="upgrade_btn border-0 text-uppercase px-5" type="button">upgrade now!</button>
                        </div>
                    </div>
                    <div class="price-card py-4 px-3 bg-white"> 
                        <div class="packege_detail border-bottom">
                            <h5 class="text-center text-uppercase color_skyblue">Smart</h5>
                            <p class="text-center color-grey_c mt-3"><span class="color_skyblue font-700">$15</span> per monthly</p>
                        </div>
                        <div class="benifits-packege w-fit-content mx-auto mt-5">
                            <p>25 Challenges to join</p>
                            <p>Invite  friends</p>
                            <p>Progress reports</p>
                        </div>
                        <div class="text-center mt-5">
                            <button class="upgrade_btn border-0 text-uppercase px-5" type="button">upgrade now!</button>
                        </div>
                    </div>
                    <div class="price-card py-4 px-3 bg-white"> 
                        <div class="packege_detail border-bottom">
                            <h5 class="text-center text-uppercase text-o-purple">Advance</h5>
                            <p class="text-center color-grey_c mt-3"><span class="text-o-purple font-700">$29</span> per monthly</p>
                        </div>
                        <div class="benifits-packege w-fit-content mx-auto mt-5">
                            <p>Unlimited Challenges to join</p>
                            <p>Invite  friends</p>
                            <p>Progress reports</p>
                        </div>
                        <div class="text-center mt-5">
                            <button class="upgrade_btn border-0 text-uppercase px-5" type="button">upgrade now!</button>
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
    <script>    
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 2,
            margin:15,
            nav: true,
            dots: false,
            navText: ['<span class="fas fa-chevron-left left-pos-angle color-grey_c"></span>','<span class="fas color-grey_c fa-chevron-right left-pos-angle"></span>'],
            responsive: {
                0: {
                    items: 1,

                },
                768: {
                    items: 1,

                },
                992: {
                    items:2 ,

                }
            }

        });
    </script>
 