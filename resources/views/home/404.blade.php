@extends('home.partials.master')
@section('content')
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="counter_heading">صفحه ای یافت نشد </div>
				<div class="counter_wrapper">
					<div id="counter"></div>
				</div>
				<div class="newsletter">
					<div class="title">هدایت به صفحه اصلی وبسایت خرید و فروش خودرو </div>
					<form method="get" action="#">
						<input type="text" onblur="if(this.value=='') this.value='Your E-mail...';" onfocus="if(this.value=='Your E-mail...') this.value='';" value="Your E-mail..." class="txb"/>
						<input type="submit" value="ارسال" class="btn_subscribe"/>
					</form>
				</div>
				<div class="needs_wrapper">
					<div class="post_block">
						<h3><strong></strong> لورم ایپسوم متن ساختگی</h3>
						<ul>
							<li>لورم ایپسوم متن ساختگی</li>
							<li>لورم ایپسوم متن ساختگی</li>
							<li>لورم ایپسوم متن ساختگی</li>
						</ul>
					</div>
					<div class="post_block center">
						<h3><strong></strong> لورم ایپسوم متن ساختگی</h3>
						<ul>
							<li>لورم ایپسوم متن ساختگی</li>
							<li>لورم ایپسوم متن ساختگی</li>
							<li>لورم ایپسوم متن ساختگی</li>
						</ul>
					</div>
					<div class="post_block last">
						<h3><strong></strong> لورم ایپسوم متن ساختگی</h3>
						<ul>
							<li>لورم ایپسوم متن ساختگی</li>
							<li>لورم ایپسوم متن ساختگی</li>
							<li>لورم ایپسوم متن ساختگی</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
@endsection
