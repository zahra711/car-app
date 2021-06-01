@extends('home.master')
 @section('content')
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="wrapper_1">
					<div class="slider_wrapper">
						<div class="home_slider" dir=ltr>
							<div class="slider slider_1">
								<div class="slide">
									<img src="{{asset('home/images/placeholders/620x425.gif')}}" alt=""/>
									<div class="description">
										<h2 class="title">لورم ایپسوم متن ساختگی</h2>
										<p class="desc"><span><strong>مایل: </strong>25,000</span><span><strong>موتور: </strong>2.6</span></p>
										<div class="price">$ 32 200</div>
									</div>
								</div>
								<div class="slide">
									<img src="{{asset('home/images/placeholders/620x425.gif')}}" alt=""/>
									<div class="description">
										<h2 class="title">لورم ایپسوم متن ساختگی</h2>
										<p class="desc"><span><strong>مایل: </strong>25,000</span><span><strong>موتور: </strong>2.6</span></p>
										<div class="price">$ 32 200</div>
									</div>
								</div>
								<div class="slide">
									<img src="{{asset('home/images/placeholders/620x425.gif')}}" alt=""/>
									<div class="description">
										<h2 class="title">لورم ایپسوم متن ساختگی</h2>
										<p class="desc"><span><strong>مایل: </strong>25,000</span><span><strong>موتور: </strong>2.6</span></p>
										<div class="price">$ 32 200</div>
									</div>
								</div>
								<div class="slide">
									<img src="{{asset('home/images/placeholders/620x425.gif')}}" alt=""/>
									<div class="description">
										<h2 class="title">لورم ایپسوم متن ساختگی</h2>
										<p class="desc"><span><strong>مایل: </strong>25,000</span><span><strong>موتور: </strong>2.6</span></p>
										<div class="price">$ 32 200</div>
									</div>
								</div>
								<div class="slide">
									<img src="{{asset('home/')}}images/placeholders/620x425.gif" alt=""/>
									<div class="description">
										<h2 class="title">لورم ایپسوم متن ساختگی</h2>
										<p class="desc"><span><strong>مایل: </strong>25,000</span><span><strong>موتور: </strong>2.6</span></p>
										<div class="price">$ 32 200</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="search_auto_wrapper">
						<div class="search_auto">
							<h3><strong>جستجو کردن</strong> خودکار</h3>
							<div class="categories">
								<input type="radio" id="search_radio_1" checked="checked" name="category"/>
								<label for="search_radio_1" class="search_radio_1"></label>
								<input type="radio" id="search_radio_2" name="category"/>
								<label for="search_radio_2" class="search_radio_2"></label>
								<input type="radio" id="search_radio_3" name="category"/>
								<label for="search_radio_3" class="search_radio_3"></label>
								<input type="radio" id="search_radio_4" name="category"/>
								<label for="search_radio_4" class="search_radio_4"></label>
							</div>
							<div class="clear"></div>
							<label><strong>سازنده:</strong></label>
							<div class="select_box_1">
								<select class="select_1">
									<option value="0">هر</option>
									<option value="1">آئودی</option>
									<option value="2">مرسدس بنز</option>
									<option value="3">بی ام و</option>
									<option value="4">لکسوس</option>
									<option value="5">لینکلن</option>
									<option value="6">گدار</option>
									<option value="7">حکم</option>
									<option value="8">Dodge</option>
								</select>
							</div>
							<label><strong>مدل:</strong></label>
							<div class="select_box_1">
								<select class="select_1">
									<option value="0">Any</option>
									<option value="1">R8</option>
									<option value="2">S500</option>
									<option value="3">540i</option>
									<option value="4">RX300</option>
									<option value="5">Navigator</option>
									<option value="6">Taurus</option>
									<option value="7">Doblo</option>
									<option value="8">Viper</option>
								</select>
							</div>
							<label><strong>سال:</strong></label>
							<div class="select_box_2">
								<select class="select_2">
									<option value="0">از</option>
									<option value="1">2013</option>
									<option value="2">2012</option>
									<option value="3">2011</option>
									<option value="4">2010</option>
									<option value="5">2009</option>
									<option value="6">2008</option>
									<option value="7">2007</option>
									<option value="8">2006</option>
								</select>
								<select class="select_2">
									<option value="0">به</option>
									<option value="1">2013</option>
									<option value="2">2012</option>
									<option value="3">2011</option>
									<option value="4">2010</option>
									<option value="5">2009</option>
									<option value="6">2008</option>
									<option value="7">2007</option>
									<option value="8">2006</option>
								</select>
								<div class="clear"></div>
							</div>
							<label><strong>قیمت:</strong></label>
							<div class="select_box_2">
								<select class="select_2">
									<option value="0">از</option>
									<option value="1">1000</option>
									<option value="2">2000</option>
									<option value="3">3000</option>
									<option value="4">4000</option>
									<option value="5">5000</option>
									<option value="6">6000</option>
									<option value="7">7000</option>
									<option value="8">8000</option>
								</select>
								<select class="select_2">
									<option value="0">به</option>
									<option value="1">1000</option>
									<option value="2">2000</option>
									<option value="3">3000</option>
									<option value="4">4000</option>
									<option value="5">5000</option>
									<option value="6">6000</option>
									<option value="7">7000</option>
									<option value="8">8000</option>
								</select>
								<div class="clear"></div>
							</div>
							<label><strong>مسافت پیموده:</strong></label>
							<div class="select_box_2">
								<select class="select_2">
									<option value="0">از</option>
									<option value="1">1000</option>
									<option value="2">2000</option>
									<option value="3">3000</option>
									<option value="4">4000</option>
									<option value="5">5000</option>
									<option value="6">6000</option>
									<option value="7">7000</option>
									<option value="8">8000</option>
								</select>
								<select class="select_2">
									<option value="0">به</option>
									<option value="1">1000</option>
									<option value="2">2000</option>
									<option value="3">3000</option>
									<option value="4">4000</option>
									<option value="5">5000</option>
									<option value="6">6000</option>
									<option value="7">7000</option>
									<option value="8">8000</option>
								</select>
								<div class="clear"></div>
							</div>
							<div class="chb_wrapper">
								<input type="checkbox"/>
								<label class="check_label"> اتومبیل های جدید</label>
							</div>
							<input type="submit" value="Search" class="btn_search"/>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				 <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
				<div class="recent" dir=ltr>
					<h2><strong>اخیر</strong> لیست</h2>
					<div class="recent_carousel">
						<div class="slide">
							<a href="#">
								<img src="{{asset('home/images/placeholders/220x164.gif')}}" alt=""/>
								<div class="description">ثبت نام 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 مایل</div>
								<div class="title">مرسدس بنز <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="{{asset('home/images/placeholders/220x164.gif')}}" alt=""/>
								<div class="description">ثبت نام 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 مایل</div>
								<div class="title">مرسدس بنز <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="{{asset('home/images/placeholders/220x164.gif')}}" alt=""/>
								<div class="description">ثبت نام 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 مایل</div>
								<div class="title">مرسدس بنز <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="{{asset('home/images/placeholders/220x164.gif')}}" alt=""/>
								<div class="description">ثبت نام 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 مایل</div>
								<div class="title">مرسدس بنز <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="{{asset('home/images/placeholders/220x164.gif')}}" alt=""/>
								<div class="description">ثبت نام 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 مایل</div>
								<div class="title">مرسدس بنز <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="{{asset('home/')}}images/placeholders/220x164.gif" alt=""/>
								<div class="description">ثبت نام 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 مایل</div>
								<div class="title">مرسدس بنز <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="{{asset('home/images/placeholders/220x164.gif')}}" alt=""/>
								<div class="description">ثبت نام 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 مایل</div>
								<div class="title">مرسدس بنز<span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="{{asset('home/images/placeholders/220x164.gif')}}" alt=""/>
								<div class="description">ثبت نام 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 مایل</div>
								<div class="title">مرسدس بنز<span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="{{asset('home/images/placeholders/220x164.gif')}}" alt=""/>
								<div class="description">ثبت نام 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 مایل</div>
								<div class="title">مرسدس بنز <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">ثبت نام 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 مایل</div>
								<div class="title">مرسدس بنز <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">ثبت نام 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 مایل</div>
								<div class="title">مرسدس بنز <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">ثبت نام 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 مایل</div>
								<div class="title">مرسدس بنز <span class="price">$ 115 265</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="banners">
					<div class="banner_1 main_banner">
						<div class="text_wrapper">
							<p class="title"><strong>در حال جستجو</strong> برای یک ماشین؟</p>
							<p class="desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
						</div>
						<a href="#">جستجو کردن</a>
					</div>
					<div class="banner_2 main_banner">
						<div class="text_wrapper">
							<p class="title"><strong>آیا می خواهید</strong> برای فروش یک ماشین؟</p>
							<p class="desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
						</div>
						<a href="#">فروختن</a>
					</div>
				</div>
				<div class="wrapper_2">
					<div class="right">
						<div class="recent_blog">
							<h2><strong>اخیر</strong> از وبلاگ</h2>
							<div class="post_block">
								<a href="#" class="thumb"><img src="images/placeholders/180x135.gif" alt=""/></a>
								<h5><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a></h5>
								<div class="date">لورم ایپسوم متن ساختگی</div>
								<div class="post"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p></div>
							</div>
							<div class="post_block">
								<a href="#" class="thumb"><img src="images/placeholders/180x135.gif" alt=""/></a>
								<h5><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a></h5>
								<div class="date">لورم ایپسوم متن ساختگی </div>
								<div class="post"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p></div>
							</div>
							<div class="post_block last">
								<a href="#" class="thumb"><img src="images/placeholders/180x135.gif" alt=""/></a>
								<h5><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</a></h5>
								<div class="date">لورم ایپسوم متن ساختگی </div>
								<div class="post"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="tabs_wrapper home_tabs section">
						  	<ul class="tabs">
						    	<li class="current">نمایندگی مجاز و فروش</li>
						    	<li>ایستگاه های خدمات</li>
						    	<li>بیمه</li>
						 	</ul>
						 	<div class="box visible" dir=ltr>
						 		<a href="#" class="all">نمایش همه ...</a>
						   		<div class="results">لورم ایپسوم متن ساختگی</div>
						   		<div class="clear"></div>
						   		<div class="tabs_carousel">
						   			<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">سنت لوئیس نمایندگی خودرو</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم </a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title"> با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان </a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title"> با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان </a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
								</div>
						  	</div>
							 <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
						  	<div class="box">
						    	<a href="#" class="all">نمایش همه...</a>
						   		<div class="results">لورم ایپسوم متن ساختگی</div>
						   		<div class="clear"></div>
						   		<div class="tabs_carousel">
						   			<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
								</div>
						  	</div>
						  	<div class="box">
						    	<a href="#" class="all">نمایش همه...</a>
						   		<div class="results">لورم ایپسوم متن ساختگی</div>
						   		<div class="clear"></div>
						   		<div class="tabs_carousel">
						   			<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">لورم ایپسوم متن ساختگی</a>
									</div>
								</div>
						  	</div>
						</div>
						 <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
						<div class="video_box">
							<h2><strong>تصویری</strong> بررسی</h2>
							<div class="post_block">
								<div class="preview">
									<a href="http://player.vimeo.com/video/54510052">
										<img src="images/placeholders/180x115.gif" alt=""/>
										<span class="hover"></span>
										<img src="images/video_play.png" alt="" class="video_play"/>
									</a>
								</div>
								<h5><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </a></h5>
								<div class="post"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p></div>
							</div>
							<div class="post_block">
								<div class="preview">
									<a href="http://player.vimeo.com/video/13412780">
										<img src="images/placeholders/180x115.gif" alt=""/>
										<span class="hover"></span>
										<img src="images/video_play.png" alt="" class="video_play"/>
									</a>
								</div>
								<h5><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </a></h5>
								<div class="post"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p></div>
							</div>
							<div class="post_block last">
								<div class="preview">
									<a href="http://player.vimeo.com/video/22884674">
										<img src="images/placeholders/180x115.gif" alt=""/>
										<span class="hover"></span>
										<img src="images/video_play.png" alt="" class="video_play"/>
									</a>
								</div>
								<h5><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </a></h5>
								<div class="post"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="left">
						<div class="news_wrapper">
							<div class="news">
								<h2><strong>Auto</strong> news</h2>
								<div class="news_box">
									<a href="#" class="thumb">
										<img src="images/placeholders/180x135.gif" alt=""/>
									</a>
									<h5><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </a></h5>
									<div class="date">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </div>
									<div class="post">
										<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.  </p>
									</div>
								</div>
								<div class="news_box bottom">
									<a href="#" class="thumb">
										<img src="images/placeholders/180x135.gif" alt=""/>
									</a>
									<h5><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </a></h5>
									<div class="date">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </div>
									<div class="post">
										<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.  </p>
									</div>
								</div>
								<div class="all_wrapper"><a href="#" class="all_news">اخبار</a></div>
							</div>
						</div>
						<div class="banners_wrapper">
							<div class="get_news_box">
								<h3><strong>گرفتن</strong> اخبار روزانه</h3>
								<form method="get" action="#">
									<input type="text" onblur="if(this.value=='') this.value='Enter your email';" onfocus="if(this.value=='Enter your email') this.value='';" value="ایمیل" class="txb"/>
									<input type="submit" value="subscribe" class="btn_subscribe"/>
								</form>
							</div>
							<div class="side_banners">
								<a href="#"><img src="images/banners/banner.jpg" alt=""/></a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
 @endsection
