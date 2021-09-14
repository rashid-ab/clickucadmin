<?php
$user_info = Auth::user();
$url = url()->current();

//exit;
?>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Click UC</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dist/css')}}/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('dist/css')}}/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="{{asset('dist')}}/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('dist')}}/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('dist/css')}}/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.3/jquery-confirm.min.css">
    <!--right slidebar-->
    <link href="{{asset('dist/css')}}/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{asset('dist/css')}}/style.css" rel="stylesheet">
    <link href="{{asset('dist/css')}}/style-responsive.css" rel="stylesheet" />

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('dist/js')}}/html5shiv.js"></script>
    <script src="{{asset('dist/js')}}/respond.min.js"></script>
    <![endif]-->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

<style>
/* .modal-dialog{
        width: 490px;
} */
.fa:hover{
    cursor: pointer;

}
.far:hover{
    cursor: pointer;

}
@media (min-width: 768px){

.navbar-header {
    float: none !important;
}
}

@media (max-width: 450px){
a.logo {
    font-size: 15px !important;
    }
}
.navbar-toggle {
    position: relative;
    float: auto !important;
    }
li.active a {

    background: #eee;

}
</style>


</head>

<body>


<div class="container-fluid">


  <!--header start-->
      <header class="header white-bg">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="float: left !important;">
                  <span class="fa fa-bars"></span>
              </button>

              <!--logo start-->
              <a href="{{ Url('/manage_user') }}" class="logo"><span>Click UC</span></a>
              <!--logo end-->
              <div class="horizontal-menu navbar-collapse collapse ">
                  <ul class="nav navbar-nav">


                      <li class="dropdown <?php if (strpos($url, 'manage_redeem')) {?> active<?php }?>">
                          <a href="{{url('/manage_redeem')}}">Manage Redeems</a>
                      </li>
                      <li class="dropdown <?php if (strpos($url, 'manage_user')) {?> active<?php }?>">
                        <a href="{{url('/manage_user')}}">Manage Users</a>
                    </li>
                      <li class="dropdown <?php if (strpos($url, 'manage_notification')) {?> active<?php }?>">
                        <a href="{{url('/manage_notification')}}">Manage Notification</a>
                    </li>
                     </ul>

              </div>
              <div class="top-nav ">
                  <!--search & user info start-->
            <ul class="nav pull-right top-menu">
              <!--  <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                -->
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">



                            <span class="username">{{ Auth::user()->name }}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="{{url('logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                        <div class="log-arrow-up"></div>
                        <li><a href="{{url('change_password')}}"><i class="fa fa-key"></i>Change Password</a></li>

                    </ul>
                </li>

                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->

              </div>

          </div>

      </header>
      <!--header end-->


<div class="clearfix"></div>


<!-- body content-->

<div class="container-fluid" style="padding: 0;">

<div class="col-md-2 col-sm-10" style="padding: 0; display:none">




    <!--sidebar end-->

</div>    <!-- first-column 6 end -->


<div class="col-md-12 col-sm-12">
<div class="row">

  @yield('content')

</div> <!-- column 6 end -->


</div>  <!-- column 9 end -->


    <!--footer end-->
    <div class="clearfix"></div>
 <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            {{ date('Y') }} &copy; Click UC
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>

</div>   <!-- body content container-fluid end -->


<!-- body content end-->





<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('dist/js')}}/jquery.js"></script>
<script src="{{asset('dist/js')}}/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="{{asset('dist/js')}}/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{asset('dist/js')}}/jquery.scrollTo.min.js"></script>
<script src="{{asset('dist/js')}}/jquery.nicescroll.js" type="text/javascript"></script>
<script src="{{asset('dist/js')}}/jquery.sparkline.js" type="text/javascript"></script>
<script src="{{asset('dist')}}/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="{{asset('dist/js')}}/owl.carousel.js" ></script>
<script src="{{asset('dist/js')}}/jquery.customSelect.min.js" ></script>
<script src="{{asset('dist/js')}}/respond.min.js" ></script>

<link href="{{asset('dist')}}/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
<link href="{{asset('dist')}}/data-tables/datatables.min.css" rel="stylesheet" />
<!--<link href="{{asset('dist')}}/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />-->
<!--<link rel="stylesheet" href="{{asset('dist')}}/data-tables/DT_bootstrap.css" />-->

<!--right slidebar-->
<script src="{{asset('dist/js')}}/slidebars.min.js"></script>

<!--common script for all pages-->
<script src="{{asset('dist/js')}}/common-scripts.js"></script>
<!--<script type="text/javascript" language="javascript" src="{{asset('dist')}}/advanced-datatable/media/js/jquery.dataTables.js"></script>-->
<!--<script type="text/javascript" src="{{asset('dist')}}/data-tables/DT_bootstrap.js"></script>-->
<!--z<script src="{{asset('dist')}}/js/dynamic_table_init.js"></script>-->
<script src="{{asset('dist')}}/data-tables/datatables.min.js"></script>

<!--script for this page-->
<script src="{{asset('dist/js')}}/sparkline-chart.js"></script>
<script src="{{asset('dist/js')}}/easy-pie-chart.js"></script>
<script src="{{asset('dist/js')}}/count.js"></script>

<script>
    $('#dynamic-table').DataTable()
    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
           // format: 'mm/dd/yyyy',
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="start_date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd-mm-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="end_date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd-mm-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>


<script type="text/javascript">
  function showImage(src,target) {
  var fr=new FileReader();
  // when image is loaded, set the src of the image where you want to display it
  fr.onload = function(e) { target.src = this.result; };
  src.addEventListener("change",function() {
    // fill fr with image data
    fr.readAsDataURL(src.files[0]);
  });
}

var src = document.getElementById("src");
var target = document.getElementById("target");
showImage(src,target)

</script>


<script type="text/javascript">
  function showImage(src,target) {
  var fr=new FileReader();
  // when image is loaded, set the src of the image where you want to display it
  fr.onload = function(e) { target.src = this.result; };
  src.addEventListener("change",function() {
    // fill fr with image data
    fr.readAsDataURL(src.files[0]);
  });
}

var src = document.getElementById("psrc");
var target = document.getElementById("ptarget");
showImage(src,target)

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.3/jquery-confirm.min.js"></script>

</body>
</html>
