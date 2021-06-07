
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Facebook APP ID -->
    <meta property="fb:app_id" content="12345"/>

    <meta name="keywords" content="Car-Dealer, auto-salon, automobile, business, car, car-gallery, car-selling-template, cars, dealer, marketplace, mobile, real estate, responsive, sell, vehicle" />
    <meta name="description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

    <!-- Open Graph -->
    <meta property="og:site_name" content="Auto Dealer HTML"/>
    <meta property="og:title" content="Home" />
    <meta property="og:url" content="http://localhost/01_index.html" />
    <meta property="og:image" content="http://cdn.winterjuice.com/example/autodealer/image.jpg" />
    <meta property="og:description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <!-- Page Title -->
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/style980.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/style800.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style700.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style600.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style500.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style400.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/upload.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/js/upload.js')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/jquery.fancybox-1.3.4.css')}}" media="screen" />
    <!--[if IE]>
    <link href="css/style_ie.css" rel="stylesheet" type="text/css">
    <![endif]-->
    <script type="text/javascript" src="{{asset('home/js/jquery-1.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/jquery.bxslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/jquery.mousewheel.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/jquery.selectik.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/jquery.fancybox-1.3.4.pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/jquery.countdown.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/jquery.checkbox.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/js.js')}}"></script>
</head>
<body class="page">
<!--BEGIN HEADER-->
<div id="header">
    <div class="top_info">
        <div class="logo">
            <a href="#">خریدفروش <span>خودرو</span></a>
        </div>
        <div class="header_contacts">
            <div class="phone">+98123456789</div>
            <div>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
        </div>
        <div class="socials">
            <a href="#"><img src="{{asset('home/images/fb_icon.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('home/images/twitter_icon.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('home/in_icon.png')}}images/in_icon.png" alt=""></a>
        </div>
    </div>
    <div class="bg_navigation">
        <div class="navigation_wrapper">
            <div id="navigation">
                <span>صفحه نخست</span>
                <ul>
                    <li class="current"><a href="#">صفحه نخست</a></li>
                    <li><a href="">درباره ما</a></li>
                    <li><a href="">اخبار</a></li>
                    <li><a href="">خرید</a></li>
                    <li><a href="#">اطلاعات تماس</a></li>
                </ul>
            </div>
            <div id="search_form">
                <form method="get" action="#">
                    <input type="text" onblur="if(this.value=='') this.value='Search on site';" onfocus="if(this.value=='Search on site') this.value='';" value="جستجو کنید" class="txb_search"/>
                    <input type="submit" value="جستجو" class="btn_search"/>
                </form>
            </div>
        </div>
    </div>
</div>
<!--EOF HEADER-->

@yield('content')

<!--BEGIN FOOTER-->
<div id="footer">
    <div class="bg_top_footer">
        <div class="top_footer">
            <div class="f_widget first">
                <h3><strong>About</strong> us</h3>
                <a href="#" class="footer_logo">لورم ایپسوم </a>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی </p>
            </div>
            <div class="f_widget divide second">
                <h3><strong></strong> ساعت ها</h3>
                <ul class="schedule">
                    <li>
                        <strong>دوشنبه</strong>
                        <span>9:30 am - 6:00 pm</span>
                    </li>
                    <li>
                        <strong>سه شنبه</strong>
                        <span>9:30 am - 6:00 pm</span>
                    </li>
                    <li>
                        <strong>چهار شنبه</strong>
                        <span>9:30 am - 6:00 pm</span>
                    </li>
                    <li>
                        <strong>پنج شنبه</strong>
                        <span>9:30 am - 6:00 pm</span>
                    </li>
                    <li>
                        <strong>جمعه</strong>
                        <span>9:30 am - 6:00 pm</span>
                    </li>
                    <li>
                        <strong>شنبه</strong>
                        <span>9:30 am - 4:00 pm</span>
                    </li>
                    <li>
                        <strong>یکشنبه</strong>
                        <span>بسته</span>
                    </li>
                </ul>
            </div>
            <div class="fwidget_separator"></div>
            <div class="f_widget third">
                <h3><strong>Our</strong> contacts</h3>
                <div class="f_contact f_contact_1"><strong>Address Info:<br/></strong>Lorem ipsum Dolor sit amet, 658 Consectetur, Adipisicing 56 D</div>
                <div class="f_contact f_contact_2"><strong>Phone:</strong> +1 (234) 567-8901 <br/><strong>FAX:</strong> +1 (234) 567-8902</div>
                <div class="f_contact f_contact_3"><strong>Email:</strong> <a href="mailto:#">testmail@sitename.com</a></div>
            </div>
            <div class="f_widget divide last frame_wrapper">
                <iframe width="204" height="219" src="https://maps.google.com.ua/maps?f=q&amp;source=s_q&amp;hl=ruamp;hl=en&amp;geocode=&amp;q=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;aq=0&amp;oq=%D0%BC%D0%B0%D0%BD%D1%85&amp;sll=48.382803,31.17461&amp;sspn=7.573826,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D1%91%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;t=m&amp;ll=40.79042,-73.959961&amp;spn=0.113849,0.139389&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe>
            </div>
        </div>
    </div>
    <div class="bottom_footer">
        <div class="f_widget ">
            <h3><strong>درباره ما</strong> us</h3>
            <ul>
                <li><a href="#">تماس ما</a></li>
                <li><a href="#">همکاران ما</a></li>
                <li><a href="#">تبلیغات آنلاین</a></li>
                <li><a href="#">نقشه سایت</a></li>
            </ul>
        </div>
        <div class="f_widget divide">
            <h3><strong>نیاز</strong> کمک?</h3>
            <ul>
                <li><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی ?</a></li>
                <li><a href="#"لورم ایپسوم متن ساختگی با تولید سادگی </a></li>
                <li><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی </a></li>
                <li><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی </a></li>
            </ul>
        </div>
        <div class="fwidget_separator"></div>
        <div class="f_widget">
            <h3><strong>کاربر</strong> منطقه</h3>
            <ul>
                <li><a href="#">اضافه کردن یک پیشنهاد</a></li>
                <li><a href="#">ثبت نام فروشنده</a></li>
                <li><a href="#">ورود فروشنده</a></li>
                <li><a href="#">اخبار</a></li>
            </ul>
        </div>
        <div class="f_widget divide last">
            <h3><strong>پیدا کردن</strong>ما در اینجا</h3>
            <ul class="horizontal">
                <li><a href="#"><img src="{{asset('home/images/fb_icon.png')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('images/twitter_icon.png')}}" alt=""></a></li>
                <li><a href="#"><img src="{{asset('images/in_icon.png')}}" alt=""></a></li>
            </ul>
        </div>
    </div>
    <div class="copyleft_wrapper">
        <div class="copyleft">&copy; کلیه حقوق مادی و معنوی برای مجموعه برنامه نویسان محفوظ می باشد . هر گونه کپی برداری از محتوای آموزشی با ذکر منبع مجاز می باشد.</div>
    </div>
</div>
<!--EOF FOOTER-->

</body>
</html>


