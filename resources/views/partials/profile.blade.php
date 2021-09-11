<aside class="side-nav large-dev-s min-h-100 border-left bg-white">
    <div class="icons-top-profile d-flex flex-wrap align-items-center  col-12 py-4">
        <span class="position-relative alert_icon mr-4"><a href="{{ url('/inbox') }}"><i class="fa fa-bell"></i></a></span>
        <a href="{{ url('/notifications') }}"><i class="fa fa-envelope mr-4"></i></a>
        <div class="dropdown ml-auto">
            <button class="p-0 border-0 bg-transparent" type="button" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-bars"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notifications">
                <a class="dropdown-item" href="{{ url('/account_settings') }}">Account Settings</a>
                <a class="dropdown-item" href="{{ url('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
            </div>
        </div>
    </div>
    <div class="sidebar-profile text-center col-12">
        <div class="border-bottom">
            <img class="rounded-circle object-cover" src="{{ asset('public/images/profile.jpg') }}" width="200px" height="200px">
            <h5 class="mt-3">Tom Matthews</h5>
            <p class="text-uppercase color-grey_c">Admin</p>
        </div>
    </div>
    <div class="col-12">
        <h6 class="mb-0 my-4 color-grey_c">New Affiliate Requests</h6>
        <div class="d-flex mb-4 flex-wrap align-items-center">
            <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="40px" width="40px">
            <div class="user-info mt-3 pl-2">
                <h6 class="mb-0">Grant Marshall</h6>
                <p>admin@mail.com</p>
            </div>
            <span class="table_tiny_text text-center ml-auto mr-3">
                June 23, 2020
            </span>
        </div>
        <div class="d-flex mb-4 flex-wrap align-items-center">
            <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="40px" width="40px">
            <div class="user-info mt-3 pl-2">
                <h6 class="mb-0">Grant Marshall</h6>
                <p>admin@mail.com</p>
            </div>
            <span class="table_tiny_text text-center ml-auto mr-3">
                June 23, 2020
            </span>
        </div>
        <div class="d-flex mb-4 flex-wrap align-items-center">
            <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="40px" width="40px">
            <div class="user-info mt-3 pl-2">
                <h6 class="mb-0">Grant Marshall</h6>
                <p>admin@mail.com</p>
            </div>
            <span class="table_tiny_text text-center ml-auto mr-3">
                June 23, 2020
            </span>
        </div>
        <div class="d-flex mb-4 flex-wrap align-items-center">
            <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="40px" width="40px">
            <div class="user-info mt-3 pl-2">
                <h6 class="mb-0">Grant Marshall</h6>
                <p>admin@mail.com</p>
            </div>
            <span class="table_tiny_text text-center ml-auto mr-3">
                June 23, 2020
            </span>
        </div>
    </div>
</aside>