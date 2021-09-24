<div class="top_banner">
	<div class="top_banner_close"><img src="/images/common/hd_close_icon01.png" alt=""></div>
	<img src="/images/common/hd_top_banner.png" alt="" class="top_banner_img">
</div>

<div id="header">
	<div class="tnb">
		<div class="tnb_wr wrapper cf">
			<div class="tnb_menu tnb_left_menu">
				<ul class="cf">
					<li class="ship_menu_li li_bar"><a href="javascript:void(0)"><img src="/images/common/hd_tnb_icon_01.png" alt="">{{ $data['general_setting']['general_setting_main_header']['main.header.ship'] }}<span class="deco_dropDown"></span></a>
						<div class="ship_ul">
							@foreach ($data['main_header_region'] as $r => $re)
								<div class="ship_li">
									<div class="ship_input_box">
										<label for="ship_select01" class="ship_label"><a href="{{ $re->link }}">
											<img src="https://2020aliseon.s3.ap-northeast-2.amazonaws.com{{ $re->country_img}}" alt="" class="img_flag">
											<p class="p_flag">{{ $re->country_name }}</p>
										</a></label>
									</div>								
								</div>
							@endforeach					
						</div>						
					</li>
					<li><a href="{{ route('trackyourorder') }}"><img src="/images/common/hd_tnb_icon_02.png" alt="">{{ $data['general_setting']['general_setting_main_header']['main.header.trackyourorder'] }}</a></li>
				</ul>
			</div>
			<div class="tnb_menu tnb_right_menu">
				<ul class="cf">
					<li><a href="http://ko.aliseon.com/creator">{{ $data['general_setting']['general_setting_main_header']['main.header.forcreator'] }}</a></li>
					<li><a href="{{route('creator_index')}}">{{ $data['general_setting']['general_setting_main_header']['main.header.forseller'] }}</a></li>
					<li><a href="{{ route('help')}}">{{ $data['general_setting']['general_setting_main_header']['main.header.help'] }}</a></li>
					<li>
						<a href="{{ route('download')}}"><img src="/images/common/hd_tnb_icon_03.png" alt="">{{ $data['general_setting']['general_setting_main_header']['main.header.savebigonyourapp'] }}</a>						
					</li>
					<li class="lang_btn"><a href="javascript:void(0)"><img src="/images/common/hd_tnb_icon_04.png" alt="">English<span class="deco_dropDown"></span></a>
						<ul class="langList_ul">
							@foreach ($data['main_header_language'] as $l => $la)
							<li class="langList_li">
								<a href="#">{{ $la->language_name." - ".$la->language_code }}</a>
							</li>
							@endforeach					
						</ul>
					</li>
					<li class="currency_btn"><a href="javascript:void(0)">USD<span class="deco_dropDown"></span></a>
						<ul class="currency_ul">
							@foreach ($data['main_header_currency'] as $c => $cu)
							<li class="currency_li">
								<a href="#">{{ $cu->currency_symbol." - ".$cu->currency_code }}</a>
							</li>
							@endforeach						
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="header-center">
		<div class="wrapper">
			<div class="header-mid_box">
				<div class="header-logo">
					<a href="{{ route('main_index')}}" style="font-size: 30px; font-weight: 600;"><img src="/images/common/hd_logo.png" alt=""></a>
				</div>

				<div class="header-search">
					<form method="get" class="searchform ajax-search" action="/search" role="search">
						<ul class="list-product-search hidden-xs hidden-sm">
							<li>
								<a class="flex align-center" href="#">
									<div class="product-img">
										<img src="http://placehold.it/52x52" alt="">
									</div>
									<h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
								</a>
							</li>
							<li>
								<a class="flex align-center" href="#">
									<div class="product-img">
										<img src="http://placehold.it/52x52" alt="">
									</div>
									<h3 class="product-title">Smartphone 6S 64GB LTE</h3>
								</a>
							<li>
								<a class="flex align-center" href="#">
									<div class="product-img">
										<img src="http://placehold.it/52x52" alt="">
									</div>
									<h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
								</a>
							</li>
							<li>
								<a class="flex align-center" href="#">
									<div class="product-img">
										<img src="http://placehold.it/52x52" alt="">
									</div>
									<h3 class="product-title">Smartphone 6S 64GB LTE </h3>
								</a>
							</li>
							<li>
								<a class="flex align-center" href="#">
									<div class="product-img">
										<img src="http://placehold.it/52x52" alt="">
									</div>
									<h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
								</a>
							</li>
						</ul>
						
						<div class="search-panel">	
							<a  class="all_category2"> Category <span class="deco_dropDown"></span></a>
							<div class="allcate_bg2">
								<ul class="category">
									<li><a href="#">TV & Video</a></li>
									<li><a href="#">Home Audio & Theater</a></li>
									<li><a href="#">Camera, Photo & Video</a></li>
									<li><a href="#">Cell Phones & Accessories</a></li>
									<li><a href="#">Headphones</a></li>
									<li><a href="#">Car Electronics</a></li>
									<li><a href="#">Electronics Showcase</a></li></ul>
							</div>
						</div>


						

						<input type="hidden" name="type" value="product">
						<input type="text" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" name="q" class="form-control" placeholder="Search for the product you want to find." >
											
						<span class="input-group-btn">
							<button class="button_search" type="button"  onclick="location.href='{{route('search_result')}}'" style="cursor: pointer;"></button>
						</span>
					</form>

					{{-- <div class="tags">
						<span>ALISEON AI Recommend :</span>
						<a href="#">Golf</a>
						<a href="#">Smart TV</a>
						<a href="#">Sunglass</a>
						<a href="#">Flower</a>
						<a href="#">BTS Goods</a>
					</div> --}}
				</div>
			
				<div class="header-sub">
					<div class="right-panel hd_right_btnbox">
						<div class="header-sub-element">
							<a class="hidden-xs hidden-sm hd_mypage_btn" href="/my">
								<img src="/images/common/hd_member_icon.png" alt="">								
							</a>
							<div class="cart">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="label5">
									<img src="/images/common/hd_cart_icon.png" alt="">
									<span class="count cart-count">0</span>								
								</a>
								<div class="dropdown-menu dropdown-cart">
									<ul class="mini-products-list">
										<li class="item-cart">
											<div class="product-img-wrap">
												<a href=""><img src="/images/common/hd_cart1.jpg" alt="" class="img-reponsive"></a>
											</div>
											<div class="product-details">
												<div class="inner-left">
													<div class="product-name"><a href="#">Harman Kardon Onyx Studio </a></div>
													<div class="product-price">
														$ 60.00 <span>( x2)</span>
													</div>
												</div>
											</div>
											<a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>
										</li>
										<li class="item-cart">
											<div class="product-img-wrap">
												<a href="#"><img src="/images/common/hd_cart1.jpg" alt="" class="img-reponsive"></a>
											</div>
											<div class="product-details">
												<div class="inner-left">
													<div class="product-name"><a href="#">Harman Kardon Onyx Studio </a></div>
													<div class="product-price">
														$ 60.00 <span>( x2)</span>
													</div>
												</div>
											</div>
											<a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>
										</li>
									</ul>
									<div class="bottom-cart">
										<div class="cart-price">
											<span>Subtotal</span>
											<span class="price-total">$ 120.00</span>
										</div>
										<div class="button-cart">
											<a href="#" class="cart-btn btn-viewcart">View Cart</a>
											<a href="#" class="cart-btn e-checkout btn-gradient">Checkout</a>
										</div>
									</div>
								</div>
							</div>
							
							{{-- <a href="#" class="hd_notice_btn">
								<img src="/images/common/hd_noti_icon.png" alt="">
								<p>Notification</p>
							</a> --}}

							{{-- <a href="#" class="hidden-md hidden-lg icon-pushmenu js-push-menu">
							<i class="fa fa-bars f-15"></i> --}}
						</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gnb_box">
		<div class="gnb_box_wr wrapper cf">
			<div class="all_category">
				<a href="javascript:void(0);"></a>
				<div class="all_category_bar">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<nav class="category_list">
				<ul class="gnb_ul cf">
					<div class="box">
						<li><a href="{{route('atrend_index')}}">{{ $data['general_setting']['general_setting_main_header']['main.header.atrend'] }}</a></li>
						<li><a href="{{route('voyage_index')}}">{{ $data['general_setting']['general_setting_main_header']['main.header.voyage'] }}</a></li>
					</div>
					<li><a href="{{route('o2o_index')}}">{{ $data['general_setting']['general_setting_main_header']['main.header.o2o'] }}</a></li>
					<li><a href="{{route('freshfood_index')}}">{{ $data['general_setting']['general_setting_main_header']['main.header.freshfood'] }}</a></li>
					<li><a href="{{route('subscription_index')}}">{{ $data['general_setting']['general_setting_main_header']['main.header.subscribe'] }}</a></li>
					<li><a href="{{route('crossborder_index')}}">{{ $data['general_setting']['general_setting_main_header']['main.header.crossborder'] }}</a></li>
					<li class="tag_hot"><a href="{{route('flashdeal_index')}}">{{ $data['general_setting']['general_setting_main_header']['main.header.flashdeal'] }}</a></li>
					<li><a href="{{route('eventcoupon_index')}}">{{ $data['general_setting']['general_setting_main_header']['main.header.eventcoupon'] }}</a></li>					
					<li><a href="{{route('exhibition_index')}}">{{ $data['general_setting']['general_setting_main_header']['main.header.specialexhibition'] }}</a></li>
				</ul>
			</nav>
		</div> 
	</div>
</div><!--header-->


<!-- all category { -->
<div class="wrapper">
	<div class="allcate_bg">
		<div class="allcate">
			<div class="allcate_menu">		
				<div class="allca_menu">
					<div class="allca_menu_group">			
						<ul class="allca_menu_ul">
							<li>
								<a href="javascript:void(0)" data-ad="fashion">fashion</a>						
							</li>
							<li>
								<a href="javascript:void(0)" data-ad="beauty">beauty</a>
							</li>
							<li>
								<a href="javascript:void(0)" data-ad="life">life</a>							
							</li>
							<li>
								<a href="javascript:void(0)" data-ad="sports">Sports / Leisure / Car</a>
							</li>
							<li>
								<a href="javascript:void(0)" data-ad="delivery">Delivery / Parenting</a>
							</li>
							<li>
								<a href="javascript:void(0)" data-ad="furniture">Furniture / Interior</a>
							</li>
							<li>
								<a href="javascript:void(0)" data-ad="life">Life / Health</a>							
							</li>
							<li>
								<a href="javascript:void(0)" data-ad="home">Home Appliances / Digital</a>
							</li>
							<li>
								<a href="javascript:void(0)" data-ad="books">Books / Hobby</a>
							</li>
							<li>
								<a href="javascript:void(0)" data-ad="pet">Pet</a>
							</li>
							<li>
								<a href="javascript:void(0)" data-ad="trip">Trip / Ticket</a>					
							</li>
							<li>
								<a href="javascript:void(0)" data-ad="crossborder">Cross-Border</a>							
							</li>
						</ul>
					</div>		
				</div>
			</div>

			<div class="allcate_ad">			
				<div class="allcate_adbg" id="adbg_fashion">
					<div class="cate_menu_wr">
						<ul class="cate_menu_type1">
							<li>
								<p class="deco_line02">Men’s Fashion</p>

								<ul class="cate_3depth">
									<li>
										<a href="#">T-shirt</a>
									</li>
									<li>
										<a href="#">Sweatshirt/Hoodie</a>
									</li>
									<li>
										<a href="#">Shirt</a>
									</li>
									<li>
										<a href="#">Pants/Jeans</a>
									</li>
									<li>
										<a href="#">Sports wear</a>
									</li>
								</ul>							
							</li>

							<li>
								<p class="deco_line02">Woman’s Fashion</p>

								<ul class="cate_3depth">
									<li>
										<a href="#">T-shirt</a>
									</li>
									<li>
										<a href="#">Sweatshirt/Hoodie</a>
									</li>
									<li>
										<a href="#">Shirt</a>
									</li>
									<li>
										<a href="#">Pants/Jeans</a>
									</li>
									<li>
										<a href="#">Sports wear</a>
									</li>
								</ul>							
							</li>

							<li>
								<p class="deco_line02">Baby clothing(0-3)</p>

								<ul class="cate_3depth">
									<li>
										<a href="#">T-shirt</a>
									</li>
									<li>
										<a href="#">Sweatshirt/Hoodie</a>
									</li>
									<li>
										<a href="#">Shirt</a>
									</li>
									<li>
										<a href="#">Pants/Jeans</a>
									</li>
									<li>
										<a href="#">Sports wear</a>
									</li>
								</ul>							
							</li>
						</ul>
					</div>				
				</div>
				<div class="allcate_adbg" id="adbg_beauty">
					<div class="cate_menu_wr">
						<ul class="cate_menu_type2">
							<li>
								<p class="deco_line02">Luxury hall</p>

								<ul class="cate_3depth">
									<li>
										<a href="#">Skin care</a>
									</li>
									<li>
										<a href="#">Make up</a>
									</li>
									<li>
										<a href="#">Perfume</a>
									</li>
									<li>
										<a href="#">Hair care</a>
									</li>
									<li>
										<a href="#">Body care</a>
									</li>
								</ul>							
							</li>

							<li>
								<p class="deco_line02">Skin care</p>

								<ul class="cate_3depth">
									<li>
										<a href="#">Skin care</a>
									</li>
									<li>
										<a href="#">Make up</a>
									</li>
									<li>
										<a href="#">Perfume</a>
									</li>
									<li>
										<a href="#">Hair care</a>
									</li>
									<li>
										<a href="#">Body care</a>
									</li>
								</ul>							
							</li>

							<li>
								<p class="deco_line02">Make up</p>

								<ul class="cate_3depth">
									<li>
										<a href="#">Skin care</a>
									</li>
									<li>
										<a href="#">Make up</a>
									</li>
									<li>
										<a href="#">Perfume</a>
									</li>
									<li>
										<a href="#">Hair care</a>
									</li>
									<li>
										<a href="#">Body care</a>
									</li>
								</ul>							
							</li>
						</ul>
					</div>
				</div>
				<div class="allcate_adbg" id="adbg_life">
					<div class="cate_menu_wr cate_menu_wr03">
						<ul class="cate_menu_type3">
							<li>
								<p class="deco_line02">Bedding</p>

								<ul class="cate_3depth">
									<li>
										<a href="#">Blanket</a>
									</li>
									<li>
										<a href="#">Cool mat/Pad</a>
									</li>
									<li>
										<a href="#">Bedding covers</a>
									</li>
									<li>
										<a href="#">Bedding set</a>
									</li>
									<li>
										<a href="#">Quilt cover set</a>
									</li>
								</ul>							
							</li>

							<li>
								<p class="deco_line02">Single life</p>

								<ul class="cate_3depth">
									<li>
										<a href="#">Blanket</a>
									</li>
									<li>
										<a href="#">Cool mat/Pad</a>
									</li>
									<li>
										<a href="#">Bedding covers</a>
									</li>
									<li>
										<a href="#">Bedding set</a>
									</li>
									<li>
										<a href="#">Quilt cover set</a>
									</li>
								</ul>							
							</li>

							<li>
								<p class="deco_line02">Furniture</p>

								<ul class="cate_3depth">
									<li>
										<a href="#">Blanket</a>
									</li>
									<li>
										<a href="#">Cool mat/Pad</a>
									</li>
									<li>
										<a href="#">Bedding covers</a>
									</li>
									<li>
										<a href="#">Bedding set</a>
									</li>
									<li>
										<a href="#">Quilt cover set</a>
									</li>
								</ul>							
							</li>

							<li>
								<p class="deco_line02">Storage/Organization</p>

								<ul class="cate_3depth">
									<li>
										<a href="#">Blanket</a>
									</li>
									<li>
										<a href="#">Cool mat/Pad</a>
									</li>
									<li>
										<a href="#">Bedding covers</a>
									</li>
									<li>
										<a href="#">Bedding set</a>
									</li>
									<li>
										<a href="#">Quilt cover set</a>
									</li>
								</ul>							
							</li>
						</ul>
					</div>
				</div>
				<div class="allcate_adbg" id="adbg_sports"></div>
				<div class="allcate_adbg" id="adbg_delivery"></div>
				<div class="allcate_adbg" id="adbg_furniture"></div>
				<div class="allcate_adbg" id="adbg_life"></div>
				<div class="allcate_adbg" id="adbg_home"></div>
				<div class="allcate_adbg" id="adbg_books"></div>
				<div class="allcate_adbg" id="adbg_pet"></div>
				<div class="allcate_adbg" id="adbg_trip"></div>
				<div class="allcate_adbg" id="adbg_crossborder"></div>
			</div>
		</div>
	</div>
</div>

<!-- } all category -->


<!-- top btn { -->

<!-- } top btn -->





<script>
$(document).ready(function(){
	$(".all_category").click(function(){
		$(".allca_dim").fadeIn(200);
		$(".allca_menu_box, .allca_top_menu").css({"left":"0"});
	});

	$(".allca_menu_close, .allca_dim").click(function(){
		$(".allca_menu_box, .allca_top_menu").css({"left":"-100%"});
		$(".allca_dim").fadeOut(200);
	});
});
</script> 