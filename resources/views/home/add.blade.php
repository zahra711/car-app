@extends('home.master')
@section('content')
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="#">صفحه نخست</a>
					<img src="{{asset('home/images/marker_2.gif')}}" alt=""/>
					<span>اضافه کردن یک پیشنهاد</span>
				</div>
				<div class="main_wrapper">
					<div class="steps">
						<span>1. پیشنهاد جدید</span>
						<a href="#"><span>2. پیش نمایش</span></a>
						<a href="#"><span>3. ارسال</span></a>
					</div>
					<h1><strong>فروختن</strong>وسیله نقلیه خود را</h1>
					<div class="message">
						<h3>فروش خودرو خود را در<strong>AutoDealer</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </h3>
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. <br/>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. <br/>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. <br/>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
					</div>
					<div class="sell_box sell_box_1">
						<h2><strong>وسیله نقلیه</strong> داده ها</h2>
						<div class="select_wrapper">
							<label><span>* </span><strong>سازنده:</strong></label>
							<select class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="1">آئودی</option>
								<option value="2">مرسدس بنز</option>
								<option value="3">بی ام و</option>
								<option value="4">لکسوس</option>
								<option value="5">لینکلن</option>
								<option value="6">فورد</option>
								<option value="7">فیات</option>
								<option value="8">Dodge</option>
							</select>
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>مدل: </strong></label>
							<select class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="1">R8</option>
								<option value="2">S500</option>
								<option value="3">540i</option>
								<option value="4">RX300</option>
								<option value="5">هدایتگر</option>
								<option value="6">برج ثور</option>
								<option value="7">Doblo</option>
								<option value="8">Viper</option>
							</select>
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>ساخت:</strong></label>
							<select class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="1">2013</option>
								<option value="2">2012</option>
								<option value="3">2011</option>
								<option value="4">2010</option>
								<option value="5">2009</option>
								<option value="6">2008</option>
								<option value="7">2007</option>
								<option value="8">2006</option>
							</select>
						</div>
{{--						<div class="select_wrapper last">--}}
{{--							<label><span>* </span><strong>نوع بدن: :</strong></label>--}}
{{--							<select class="select_5">--}}
{{--								<option value="0">انتخاب کنید</option>--}}
{{--								<option value="1">سدان</option>--}}
{{--								<option value="2">مدل کوپه</option>--}}
{{--								<option value="3">ماشین شاسی بلند</option>--}}
{{--								<option value="4">هاچ بک</option>--}}
{{--								<option value="5">Tagra</option>--}}
{{--							</select>--}}
{{--						</div>--}}
						<div class="select_wrapper">
							<label><span>* </span><strong>نوع سوخت:</strong></label>
							<select class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="1">92</option>
								<option value="2">95</option>
								<option value="3">دیزل</option>
							</select>
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>انتقال</strong></label>
							<select class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="1">خودکار</option>
								<option value="2">مکانیک</option>
							</select>
						</div>

						<div class="select_wrapper last">
							<label><span>* </span><strong>Cilindrics </strong> (in cm3):</label>
							<select class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="1">1500</option>
								<option value="2">2000</option>
								<option value="3">2500</option>
								<option value="4">3000</option>
								<option value="5">4000</option>
							</select>
						</div>


						<div class="input_wrapper large">
							<label><span>* </span><strong>VIN / شماره شاسی:</strong></label>
							<input type="text" class="txb large" value=""/>
						</div>
						<div class="select_wrapper last">
							<label><span>* </span><strong>Color:</strong></label>
							<select class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="1">قرمز</option>
								<option value="2">سبز</option>
								<option value="3">آبی</option>
								<option value="4">خاکستری</option>
								<option value="5">سفید</option>
								<option value="6">سیاه</option>
							</select>
						</div>
						<div class="clear"></div>
					</div>
					<div class="sell_box sell_box_2">
						<h2><strong>وسیله نقلیه</strong> تجهیزات</h2>
						<div class="chb_group">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>ABS</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>سقف پانوراما</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>قفل دیفرانسیل</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>مخمل داخلی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>رادیو / CD</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>سیستم تعلیق قابل تنظیم</label>
							</span>
						</div>
						<div class="chb_group">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>EDS</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>چارچوب حفاظت</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>شیشه رنگی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>چرخ های آلیاژی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>صندلی های گرم شده</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>اثاثه یا لوازم داخلی چرمی</label>
							</span>
						</div>
						<div class="chb_group">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>ESP</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>یدک کش</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>پنجره های برقی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>آینه های برقی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>سنسور پارکینگ</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>هاشور زدن</label>
							</span>
						</div>
						<div class="chb_devider"></div>
						<div class="chb_group">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>تهویه مطبوع</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>کنترل کشش</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>اندازد</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>جلو اتومبیل گرم</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>سنسور باران</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>زنون</label>
							</span>
						</div>
						<div class="chb_group">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>کیسه هوا</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>کامپیوتر هیئت مدیره</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>گرمایش کمکی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>خلبان اتوماتیک</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>فرمان خودکار</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>4WD</label>
							</span>
						</div>
						<div class="chb_group last">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>زنگ خطر</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>کنترل فرمان</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>قفل مرکزی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>چراغهای مه شکن</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name="" checked="checked"/>
								</span>
								<label>سیستم ناوبری</label>
							</span>
						</div>
						<div class="clear"></div>
					</div>


					<div class="sell_box sell_box_3">
						<h2><strong>وسیله نقلیه</strong> قیمت</h2>
						<div class="select_wrapper">
							<label><span>* </span><strong>قیمت: </strong></label>
							<input type="text" class="txb" value="0.00" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" />
						</div>
						<div class="input_wrapper">
							<label><span>* </span><strong>واحد پول: </strong></label>
							<select class="select_5">
								<option value="0">Rials</option>
								<option value="1">USD</option>
                                <option value="2">Euro</option>
							</select>
						</div>
						<div class="single_chb_wrapper">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name=""/>
								</span>
								<label>قیمت قابل مذاکره</label>
							</span>
						</div>
						<div class="clear"></div>
					</div>
					<div class="sell_box sell_box_4">
						<h2><strong>وسیله نقلیه</strong> عکس</h2>
						<div class="foto_wrapper">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
								آپلود عکس
							</a>
						</div>
						<div class="foto_wrapper">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
								آپلود عکس
							</a>
						</div>
						<div class="foto_wrapper">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
								آپلود عکس
							</a>
						</div>
						<div class="foto_wrapper">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
								آپلود عکس
							</a>
						</div>
						<div class="foto_wrapper">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
							آپلود عکس
							</a>
						</div>
						<div class="foto_wrapper last">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
								آپلود عکس
							</a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="sell_box sell_box_5">
						<h2><strong>فروشنده</strong> جزئیات</h2>
						<div class="input_wrapper">
							<label><span>* </span><strong>نام: </strong></label>
							<input type="text" class="txb" value=""/>
						</div>
						<div class="input_wrapper">
							<label><span>* </span><strong>تلفن: </strong></label>
							<input type="text" class="txb" value=""/>
						</div>
						<div class="input_wrapper">
							<label><span>* </span><strong>تلفن 2: </strong></label>
							<input type="text" class="txb" value=""/>
						</div>
						<div class="input_wrapper last">
							<label><span>* </span><strong>شهر:</strong></label>
							<input type="text" class="txb" value=""/>
						</div>
						<div class="select_wrapper">
							<label><strong>کشور: </strong></label>
							<select class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="1">آلمان</option>
								<option value="2">بریتانیا</option>
								<option value="3">ایالات متحده آمریکا</option>
								<option value="4">چین</option>
								<option value="5">ژاپن</option>
								<option value="6">روسیه</option>
								<option value="7">اوکراین</option>
							</select>
						</div>
						<div class="select_wrapper">
							<label><strong>وضعیت: </strong></label>
							<select class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="1">آلمان</option>
								<option value="2">بریتانیا</option>
								<option value="3">ایالات متحده آمریکا</option>
								<option value="4">چین</option>
								<option value="5">ژاپن</option>
								<option value="6">روسیه</option>
								<option value="7">اوکراین</option>
							</select>
						</div>
						<div class="input_wrapper">
							<label><span>* </span><strong>پست الکترونیک: </strong></label>
							<input type="text" class="txb" value=""/>
						</div>
						<div class="input_wrapper last">
							<label><span>* </span><strong>کلمه عبور:</strong></label>
							<input type="password" class="txb" value=""/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="sell_submit_wrapper">
						<span class="custom_chb_wrapper fL">
							<span class="custom_chb">
								<input type="checkbox" name=""/>
							</span>
							<label>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</label>
						</span>
						<input type="submit" value="Submit" class="sell_submit"/>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
@endsection
