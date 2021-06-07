@extends('home.partials.master')
@section('content')
    @include('home.partials.messages')
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="#">صفحه نخست</a>
					<img src="{{asset('home/images/marker_2.gif')}}" alt=""/>
					<span>اضافه کردن خودروی جدید</span>
				</div>
				<div class="main_wrapper">
					<div class="steps">
						<span>تازه ترین خودروها
                        </span>
{{--						<a href="#"><span>2. پیش نمایش</span></a>--}}
{{--						<a href="#"><span>3. ارسال</span></a>--}}
					</div>
					<h1><strong>   فروش  </strong>وسیله نقلیه   </h1>
					<div class="message">
						<h3>فروش خودرو خود را در<strong>وبسایت ما</strong> با اطمینان خاطر انجام دهید </h3>
                        <p></p>
					</div>


                    {{--begin form --}}
                    <form action="{{route('post.store')}}" method="post"  enctype="multipart/form-data">
                        {{csrf_field()}}

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif;




					<div class="sell_box sell_box_1">
						<h2><strong> وسیله نقلیه </strong> اطلاعات کلی </h2>
						<div class="select_wrapper">
							<label><span>* </span><strong>سازنده:</strong></label>
							<select name="company" class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="آئودی">آئودی</option>
								<option value="مرسدس بنز">مرسدس بنز</option>
								<option value="بی ام و">بی ام و</option>
								<option value="لکسوس">لکسوس</option>
								<option value="لینکلن">لینکلن</option>
								<option value="فورد">فورد</option>
								<option value="فیات">فیات</option>
								<option value="Dodge">Dodge</option>
							</select>
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>مدل: </strong></label>
							<select name="model" class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="R8">R8</option>
								<option value="S500">S500</option>
								<option value="540i">540i</option>
								<option value="RX300">RX300</option>
								<option value="هدایتگر">هدایتگر</option>
								<option value="برج ثور">برج ثور</option>
								<option value="Doblo">Doblo</option>
								<option value="Viper">Viper</option>
							</select>
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>ساخت:</strong></label>
							<select name="year" class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="2021">2021</option>
								<option value="2020">2020</option>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
								<option value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
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
							<select name="fuel" class="select_5">
								<option value="0">انتخاب کنید</option>
								<option value="92">92</option>
								<option value="95">95</option>
								<option value="دیزل">دیزل</option>
							</select>
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>انتقال</strong></label>
							<select class="select_5" name="transfer">
								<option value="0">انتخاب کنید</option>
								<option value="خودکار">خودکار</option>
								<option value="مکانیک">مکانیک</option>
							</select>
						</div>

						<div class="select_wrapper last">
							<label><span>* </span><strong>Cilindrics </strong> (in cm3):</label>
							<select class="select_5" name="cilandr">
								<option value="0">انتخاب کنید</option>
								<option value="1500">1500</option>
								<option value="2000">2000</option>
								<option value="2500">2500</option>
								<option value="3000">3000</option>
								<option value="4000">4000</option>
							</select>
						</div>


						<div class="input_wrapper large">
							<label><span>* </span><strong>VIN / شماره شاسی:</strong></label>
							<input name="VIN" type="text" class="txb large" value=""/>
						</div>
						<div class="select_wrapper last">
							<label><span>* </span><strong>Color:</strong></label>
							<select class="select_5" name="color">
								<option value="0">انتخاب کنید</option>
								<option value="قرمز">قرمز</option>
								<option value="سبز">سبز</option>
								<option value="آبی">آبی</option>
								<option value="خاکستری">خاکستری</option>
								<option value="سفید">سفید</option>
								<option value="سیاه">سیاه</option>
							</select>
						</div>
						<div class="clear"></div>
					</div>
					<div class="sell_box sell_box_2">
						<h2><strong>وسیله نقلیه</strong> تجهیزات</h2>
						<div class="chb_group">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="ABS" name="packages[]" checked="checked"/>
								</span>
								<label>ABS</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="سقف پانوراما" name="packages[]" checked="checked"/>
								</span>
								<label>سقف پانوراما</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="قفل دیفرانسیل" name="packages[]" checked="checked"/>
								</span>
								<label>قفل دیفرانسیل</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="مخمل داخلی" name="packages[]" checked="checked"/>
								</span>
								<label>مخمل داخلی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="رادیو / CD " name="packages[]" checked="checked"/>
								</span>
								<label>رادیو / CD</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="سیستم تعلیق قابل تنظیم" name="packages[]" checked="checked"/>
								</span>
								<label>سیستم تعلیق قابل تنظیم</label>
							</span>
						</div>
						<div class="chb_group">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="EDS" name="packages[]" checked="checked"/>
								</span>
								<label>EDS</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="چارچوب حفاظت" name="packages[]" checked="checked"/>
								</span>
								<label>چارچوب حفاظت</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="شیشه رنگی" name="packages[]" checked="checked"/>
								</span>
								<label>شیشه رنگی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="چرخ های آلیاژی" name="packages[]" checked="checked"/>
								</span>
								<label>چرخ های آلیاژی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="صندلی های گرم شده" name="packages[]" checked="checked"/>
								</span>
								<label>صندلی های گرم شده</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="اثاثه یا لوازم داخلی چرمی" name="packages[]" checked="checked"/>
								</span>
								<label>اثاثه یا لوازم داخلی چرمی</label>
							</span>
						</div>
						<div class="chb_group">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="ESP" name="packages[]" checked="checked"/>
								</span>
								<label>ESP</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="یدک کش" name="packages[]" checked="checked"/>
								</span>
								<label>یدک کش</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="پنجره های برقی" name="packages[]" checked="checked"/>
								</span>
								<label>پنجره های برقی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="آینه های برقی" name="packages[]" checked="checked"/>
								</span>
								<label>آینه های برقی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="سنسور پارکینگ" name="packages[]" checked="checked"/>
								</span>
								<label>سنسور پارکینگ</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="هاشور زدن" name="packages[]" checked="checked"/>
								</span>
								<label>هاشور زدن</label>
							</span>
						</div>
						<div class="chb_devider"></div>
						<div class="chb_group">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="تهویه مطبوع" name="packages[]" checked="checked"/>
								</span>
								<label>تهویه مطبوع</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="کنترل کشش" name="packages[]" checked="checked"/>
								</span>
								<label>کنترل کشش</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="اندازد" name="packages[]" checked="checked"/>
								</span>
								<label>اندازد</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="جلو اتومبیل گرم" name="packages[]" checked="checked"/>
								</span>
								<label>جلو اتومبیل گرم</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="سنسور باران" name="packages[]" checked="checked"/>
								</span>
								<label>سنسور باران</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="زنون" name="packages[]" checked="checked"/>
								</span>
								<label>زنون</label>
							</span>
						</div>
						<div class="chb_group">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="کیسه هوا" name="packages[]" checked="checked"/>
								</span>
								<label>کیسه هوا</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="کامپیوتر هیئت مدیره" name="packages[]" checked="checked"/>
								</span>
								<label>کامپیوتر هیئت مدیره</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="گرمایش کمکی" name="packages[]" checked="checked"/>
								</span>
								<label>گرمایش کمکی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="خلبان اتوماتیک" name="packages[]" checked="checked"/>
								</span>
								<label>خلبان اتوماتیک</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="فرمان خودکار" name="packages[]" checked="checked"/>
								</span>
								<label>فرمان خودکار</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="4WD" name="packages[]" checked="checked"/>
								</span>
								<label>4WD</label>
							</span>
						</div>
						<div class="chb_group last">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="زنگ خطر" name="packages[]" checked="checked"/>
								</span>
								<label>زنگ خطر</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="کنترل فرمان" name="packages[]" checked="checked"/>
								</span>
								<label>کنترل فرمان</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="قفل مرکزی" name="packages[]" checked="checked"/>
								</span>
								<label>قفل مرکزی</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="چراغهای مه شکن" name="packages[]" checked="checked"/>
								</span>
								<label>چراغهای مه شکن</label>
							</span>
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" value="سیستم ناوبری" name="packages[]" checked="checked"/>
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
							<input name="price" type="text" class="txb" value="0.00" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" />
						</div>

						<div class="clear"></div>
					</div>
					<div class="sell_box sell_box_4">
						<h2><strong>وسیله نقلیه</strong> عکس</h2>
						<div class="foto_wrapper">
                            <div class="form-group">
                                <input  name="file1" type="file" class="form-control">
                            </div>
						</div>
						<div class="foto_wrapper">
                            <div class="form-group">
                                <input  name="file2" type="file" class="form-control">
                            </div>
						</div>
						<div class="foto_wrapper last">
                            <div class="form-group">
                                <input  name="file3" type="file" class="form-control">
                            </div>
                        </div>

						</div>
						<div class="clear"></div>

					<div class="sell_submit_wrapper">
						<span class="custom_chb_wrapper fL">
							<span class="custom_chb">
								<input type="checkbox" name="agree"/>
							</span>
							<label>از اطلاعات وارد شده اطمینان کامل دارم </label>
						</span>




						<input type="submit" value="ثبت"  class="sell_submit"/>

						<div class="clear"></div>
					</div>
                </form>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
@endsection
