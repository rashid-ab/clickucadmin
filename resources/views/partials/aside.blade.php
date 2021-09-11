<aside class="side-nav min-h-100 border-right bg-white large-dev-s">
    <div class="sidebar-logo text-center side-nav-logo mx-auto border-bottom" >
        <img src="{{ asset('public/images/logo.png') }}" alt="Site-logo" class="img-fluid">
    </div>
    <ul class="list-unstyled pl-lg-4 side-nav-links">
        <li class="active"><a href="{{ url('/') }}" class="text-decoration-none"><i class="fa fa-user mr-3"></i>Manage User</a></li>
        <li><a href="{{ url('/coach') }}" class="text-decoration-none"><i class="fa fa-user mr-3"></i>Coach</a></li>
        <li><a href="{{ url('/referral') }}" class="text-decoration-none"><i class="fa fa-user-plus mr-3"></i>Referrals</a></li>
        <li><a href="{{ url('/report') }}" class="text-decoration-none"><i class="fa fa-file mr-3"></i>Finance Report</a></li>
        <li><a href="{{ url('/transactions') }}" class="text-decoration-none"><i class="fa fa-university mr-3"></i>Transactios</a></li>
        <li><a href="{{ url('/subscription') }}" class="text-decoration-none"><i class="fa fa-tag mr-3"></i>Subscription</a></li>
        <li><a href="{{ url('/feedback') }}" class="text-decoration-none"><i class="fa fa-comments mr-3"></i>Feedback</a></li>
        <li><a href="#" class="text-decoration-none"><i class="fa fa-address-book mr-3"></i>Contact</a></li>
        <li><a href="{{ url('/privacy_policy') }}" class="text-decoration-none"><i class="fa fa-lock mr-3"></i>Privacy Policy</a></li>
        <li><a href="{{ route('logout') }}" class="text-decoration-none"><i class="fa fa-power-off mr-3"></i>Logout</a></li>
    </ul>
</aside>