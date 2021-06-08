<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="zahrasalehi">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.html')}}">
    <script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
    <title>Inbox</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/assets/jquery-file-upload/css/jquery.fileupload-ui.css')}}" rel="stylesheet"
          type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        function showAddedCar() {
            $.ajax(
                {
                    url: "/showAddedCar",
                    type: 'POST',
                    data: {_token: '{{csrf_token()}}'},
                }).done(
                function (data) {
                    $('#msg').html(data.html);

                }
            );
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }

        function showUsers() {
            $.ajax(
                {
                    url: "/showUsers",
                    type: 'POST',
                    data: {_token: '{{csrf_token()}}'},
                }).done(
                function (data) {
                    $('#msg').html(data.html);

                }
            );
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }


        {{--$.ajax({--}}
        {{--    type: "POST",--}}
        {{--    url: '/recently',--}}
        {{--    data: {_token: '{{csrf_token()}}'},--}}
        {{--    success: function (data) {--}}
        {{--        var a = document.getElementById("returnHTML");--}}
        {{--        // console.log(a);--}}
        {{--        a.style.display = 'inline';--}}
        {{--        $("#msg").html(data.returnHTML);--}}

        {{--        // document.getElementById("msg").innerHTML="someContent";--}}

        {{--    },--}}
        {{--    error: function (data, textStatus, errorThrown) {--}}
        {{--        console.log(data);--}}

        {{--    },--}}
        {{--});--}}

    </script>

</head>
<body>
<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="بستن | باز کردن منو" data-placement="left" class="icon-reorder tooltips"></div>
        </div>
        <div>
            <p style="margin-top: 19px;font-size: 17px;">پنل مدیریت کاربران وبسایت خریدو فروش خودرو
        </div>
        <div class="pull-left">
            <a href="exit.php" class="btn btn-danger" style="margin-top: -54px;border-radius: 0;">خروج از پنل</a>
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <br/><br/>
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="dashbord.php">
                        <i class="icon-dashboard"></i>
                        <span>صفحه اصلی</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>مدیریت کاربران</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">

                        <li>
                            {{ Form::button('لیست کاربران', ['onClick' => 'showUsers()'])}}
                        </li>

                        <li><a class="" href="">"لاگ کاربران</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>مدیریت پیام ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">

                        <li><a class="" href="">لیست پیام ها</a></li>
                    </ul>
                </li>
                <!--added car-->

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>خودروهای اضافه شده</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li>
                            {{ Form::button('نمایش خودروهای افزوده شده', ['onClick' => 'showAddedCar()'])}}
                        </li>
                    </ul>
                </li>
                <!--end added car-->
                <li class="sub-menu">
                    <a href="" class="">
                        <i class="icon-book"></i>
                        <span>مدیریت درباره ما</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="">ویرایش درباره ما</a></li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div id="msg" style="display:block;">

            </div>
        </section>
    </section>
    <!--main content end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('admin/js/jquery.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!-- BEGIN:File Upload Plugin JS files-->
<script src="{{asset('admin/assets/jquery-file-upload/js/vendor/jquery.ui.widget.js')}}"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="{{asset('admin/assets/jquery-file-upload/js/vendor/tmpl.min.js')}}"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="{{asset('admin/assets/jquery-file-upload/js/vendor/load-image.min.js')}}"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="{{asset('admin/assets/jquery-file-upload/js/vendor/canvas-to-blob.min.js')}}"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="{{asset('admin/assets/jquery-file-upload/js/jquery.iframe-transport.js')}}"></script>
<!-- The basic File Upload plugin -->
<script src="{{asset('admin/assets/jquery-file-upload/js/jquery.fileupload.js')}}"></script>
<!-- The File Upload file processing plugin -->
<script src="{{asset('admin/assets/jquery-file-upload/js/jquery.fileupload-fp.js')}}"></script>
<!-- The File Upload user interface plugin -->
<script src="{{asset('admin/assets/jquery-file-upload/js/jquery.fileupload-ui.js')}}"></script>
<!--common script for all pages-->
<script src="{{asset('admin/js/common-scripts.js')}}"></script>


</body>
</html>

<<< JS


>>>
