@extends('home.master')
@section('content')
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="#">صفحه نخست</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>اطلاعات تماس</span>
				</div>
				<div class="main_wrapper">
					<h1><strong>تماس</strong> با ما</h1>
					<div class="contacts_box">
						<div class="right">
							<h3><strong>تماس</strong> جزئیات</h3>
							<div class="addr detail">برلین, آلمان, nr. 250330,<br/>خیابان اصلی</div>
							<div class="phones detail">0040 742 016 756<br/>0040 742 016 756</div>
							<div class="email detail single_line"><a href="mailto:#" class="markered">info@barnamenevisan.org</a></div>
							<div class="web detail single_line"><a href="#">http://www.barnamenevisan.org</a></div>
						</div>
						<div class="map">
							<img src="images/pics/map.jpg" alt=""/>
							<!--<iframe width="668" height="288" src="https://maps.google.com.ua/maps?f=q&amp;source=s_q&amp;hl=ruamp;hl=en&amp;geocode=&amp;q=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;aq=0&amp;oq=%D0%BC%D0%B0%D0%BD&amp;sll=46.933064,32.007997&amp;sspn=0.243347,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D1%91%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;t=m&amp;ll=40.79042,-73.959961&amp;spn=0.14972,0.457993&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe>-->
						</div>
					</div>
					<div class="contact_form">
						<h2><strong>ارسال پیام</strong> </h2>
						<form method="get" action="#">
							<div class="fld_box">
								<label>نام: </label>
								<input type="text" value=""/>
							</div>
							<div class="fld_box center">
								<label>پست الکترونیک: </label>
								<input type="text" value=""/>
							</div>
							<div class="fld_box last">
								<label>سایت اینترنتی: </label>
								<input type="text" value=""/>
							</div>
							<div class="clear"></div>
							<label>پیام: </label>
							<textarea cols="20" rows="20"></textarea>
							<input type="submit" value="ارسال" class="submit"/>
						</form>
					</div>
					<div class="personal_box">
						<h2><strong>حراجی</strong> تکرار</h2>
						<ul class="personal_list">
							<li>
								<img src="images/placeholders/138x138.gif" alt="" class="thumb"/>
								<div class="inner">
									<h4>جسیکا تامپسون</h4>
									<div class="grey_area"><span>0040 742 016 756,</span><span>0040 742 016 756</span></div>
									<div class="fL">لورم ایپسوم متن ساختگی</div>
									<div class="fR"><a href="mailto:#" class="markered">لورم ایپسوم متن ساختگی </a></div>
								</div>
							</li>
							<li class="last">
								<img src="images/placeholders/138x138.gif" alt="" class="thumb"/>
								<div class="inner">
									<h4>جسیکا تامپسون</h4>
									<div class="grey_area"><span>0040 742 016 756,</span><span>0040 742 016 756</span></div>
									<div class="fL">لورم ایپسوم متن ساختگی</div>
									<div class="fR"><a href="mailto:#" class="markered">لورم ایپسوم متن ساختگی </a></div>
								</div>
							</li>
							<li>
								<img src="images/placeholders/138x138.gif" alt="" class="thumb"/>
								<div class="inner">
									<h4>جسیکا تامپسون</h4>
									<div class="grey_area"><span>0040 742 016 756,</span><span>0040 742 016 756</span></div>
									<div class="fL">لورم ایپسوم متن ساختگی</div>
									<div class="fR"><a href="mailto:#" class="markered">لورم ایپسوم متن ساختگی</a></div>
								</div>
							</li>
							<li class="last">
								<img src="images/placeholders/138x138.gif" alt="" class="thumb"/>
								<div class="inner">
									<h4>جسیکا تامپسون</h4>
									<div class="grey_area"><span>0040 742 016 756,</span><span>0040 742 016 756</span></div>
									<div class="fL">لورم ایپسوم متن ساختگی</div>
									<div class="fR"><a href="mailto:#" class="markered">لورم ایپسوم متن ساختگی</a></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
@endsection
