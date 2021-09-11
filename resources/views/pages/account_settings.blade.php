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
                     <img src="../assets/images/logo.png" alt="Site-logo" style="max-height:60px;">
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
             <div class="col-lg-6 px-0 ml-lg-25">
                <form class="w-100 px-3" action="" method="">
                    <div class="bg-white p-4 mt-5 w-100 radius-6">
                        <div class="header-form d-flex flex-wrap">
                            <h3 class=" text-capitalize" style="font-weight:700;color:#666687;font-size:24px;">Account Settings</h3> 
                        </div>
                        <div class="form-content">
                            <div class="d-flex flex-wrap user-edit-img  py-4 align-items-center border-bottom">
                                <div class="user-avatar ">
                                    <div class="position-relative">
                                        <img class="rounded-circle object-cover" src="{{ asset('public/images/profile.jpg') }}" width="120px" height="120px">
                                        <label class="file-upload-label">
                                            <input class="d-none" type="file">
                                            <i class="fa fa-camera text-white"></i>
                                        </label>
                                    </div>   
                                </div>
                                <div class="pl-3 user-info-account">
                                    <h5 style="color:#666687;">Tom Matthews</h5>
                                    <p class="text-uppercase color-grey_c">Admin</p>
                                </div>
                            </div>
                            <div class="data-fields mt-4">
                                <div class="field-set mb-4">
                                   <label class="w-100" for="full name"> Full name</label>
                                   <input type="text" class="w-100" readonly value="Tom Matthews">
                                   <span class="fa fa-edit field_editor color-grey_c" title="Click to edit"></span>
                               </div>
                               <div class="field-set mb-4">
                                    <label class="w-100" for="email">Email</label>
                                    <input type="email" class="w-100" readonly value="admin@mail.com">
                                    <span class="fa fa-edit field_editor color-grey_c" title="Click to edit"></span>
                                </div>
                                <div class="field-set mb-4">
                                    <label class="w-100" for="Password">Password</label>
                                    <input type="text" class="w-100" readonly value="admin1234">
                                    <span class="fa fa-edit field_editor color-grey_c" title="Click to edit"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-4 mt-5">
                            <button  class="text-uppercase upgrade_btn border-0 text-uppercase px-4" type="submit" style="min-height:45px;height:initial;">Save Changes</button>
                        </div>
                    </div>
                </form>
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