@extends('layouts.master')

@section('title') Aliseon @endsection

@section('contents')

<!-- page script -->

<script src="{{ URL::asset('/js/product_detail.js')}}"></script>

<div id="productDetail" class="sub">
  <!--content-->
  <div class="wrapper">
    <div class="single-product-detail product-bundle product-aff">
      <ul class="breadcrumb">
        <li><a href="#">Influencer Pick</a></li>
        <li class="active">Product Name</li>
      </ul>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="product-img-slide flex">
            <div class="product-images">
              <div class="main-img preview_sld">
                <div>
                  <a href="#" class="effect"><img src="/images/productDetail/productDetail_img01.jpg" alt="photo" class="img-reponsive"></a>
                </div>
                <div>
                  <a href="#" class="effect"><img src="/images/productDetail/productDetail_img01.jpg" alt="photo" class="img-reponsive"></a>
                </div>
                <div>
                  <a href="#" class="effect"><img src="/images/productDetail/productDetail_img01.jpg" alt="photo" class="img-reponsive"></a>
                </div>  
              </div>
            </div>            
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-8">
          <div class="single-flex">
            <div class="single-product-info product-info product-grid-v2 s-50">
              <p class="product-cate">Beauty Water</p>
              <div class="product-rating">
                <span class="star star-5"></span>
                <span class="star star-4"></span>
                <span class="star star-3"></span>
                <span class="star star-2"></span>
                <span class="star star-1"></span>
                <div class="number-rating">( 896 reviews )</div>
              </div>
              <h3 class="product-title"><a href="#">Product Name</a></h3>
              <div class="product-price">
                <span>$79.00</span>
              </div>
              <div class="availability">
                 <label class="pro_label">Availability : </label><span>In stock</span>
              </div>    
              <div class="product-brand">
                 <label class="pro_label">Brand : </label><span>109x20</span>                
              </div>          
              <div class="product-sku">
                 <label class="pro_label">Country of delivery :</label>
                <span><b>모레 12/09(수)</b> 도착확률 81% CJ대한통운</span>
              </div>
              <div class="product-des">
                <b>DescriptionsDescriptionsDescriptionsDescriptions DescriptionsDescriptionsDescriptionsDescriptions</b>
                <span>1) For external use only
                2) Avoid contact with eyes
                3) Stop use and a doctor if rash or irritation develops and lasts
                4) Do not use on damaged or broken skin
                5) Keep out of reach of children
                6) Protect this product from direct sun
                </span>
              </div>              
              <div class="color-group">
                <select name="" id="">
                  <option value="">옵션 / 선택</option>
                  <option value="">옵션1</option>
                  <option value="">옵션2</option>
                  <option value="">옵션3</option>
                  <option value="">옵션4</option>
                  <option value="">옵션5</option>
                </select>
              </div>

              <div class="detail_action">
                <div class="action_cart">
                  <div class="e-quantity">
                    <input type="number" step="1" min="1" max="999" name="quantity" value="1" title="Qty" class="qty input-text js-number" size="4">
                    <div class="tc pa">
                      <a class="js-plus quantity-right-plus"><i class="fa fa-caret-up"></i></a>
                      <a class="js-minus quantity-left-minus"><i class="fa fa-caret-down"></i></a>
                    </div>
                  </div>

                  <a href="javascript:void(0)" class="btn_addCart">
                    Add to cart <img src="/images/productDetail/productDetail_cart-w.png" alt="">
                  </a>

                  <div class="action_cart_pop">
                    <p>The product has been added to the cart</p>
                    <a href="#">Go to shopping cart <img src="/images/productDetail/productDetail_cart-w.png" alt=""></a>
                  </div>
                </div>

                <div class="action_other">
                  <ul>
                    <li>                      
                      <div class="imgBox">
                        <img src="/images/productDetail/productDetail_icon-heart2.png" alt="">
                      </div>

                      <div class="action_pop action_pop_wish">
                        <p>You need to log in to save as a product
                          of interest. Would you like to log in?
                        </p>
                        <div class="action_pop_btn">
                          <a href="javascript:void(0)" class="btn_confirm">Confirm</a>
                          <a href="javascript:void(0)" class="btn_cancel">Cancel</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="imgBox">
                        <img src="/images/productDetail/productDetail_icon-compare.png" alt="">
                      </div>                      

                      <div class="action_pop action_pop_share">
                        <span>Share</span>
                        <div class="action_pop_sns">
                          <ul>
                            <li>
                              <a href="">
                                <img src="/images/atrend/atrend_blog_sns01.png" alt="">
                              </a>
                            </li>
                            <li>
                              <a href="">
                                <img src="/images/atrend/atrend_blog_sns02.png" alt="">
                              </a>
                            </li>
                            <li>
                              <a href="">
                                <img src="/images/atrend/atrend_blog_sns03.png" alt="">
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>             
            </div>

            <div class="single-product-feature s-50 hidden-xs hidden-sm">
              <div class="single-product-feature-inner">
                <div class="single-feature-box">
                  <div class="single-feature-img">
                    <img src="/images/productDetail/productDetail_credit-card2.png" alt="">
                  </div>
                  <div class="single-feature-info">
                    <h3>Safe Payment</h3>
                    <p>Pay with the world’s most payment methods.</p>
                  </div>
                </div>

                <div class="single-feature-box">
                  <div class="single-feature-img">
                    <img src="/images/productDetail/productDetail_safety2.png" alt="">
                  </div>
                  <div class="single-feature-info">
                    <h3>Confidence</h3>
                    <p>Protection covers your purchase</p>
                  </div>
                </div>

                <div class="single-feature-box">
                  <div class="single-feature-img">
                    <img src="/images/productDetail/productDetail_truck2.png" alt="">
                  </div>
                  <div class="single-feature-info">
                    <h3>Worldwide Delivery</h3>
                    <p>Ship to over 200 countries & regions.</p>
                  </div>
                </div>

                <div class="single-feature-box">
                  <div class="single-feature-img">
                    <img src="/images/productDetail/productDetail_call.png" alt="">
                  </div>
                  <div class="single-feature-info">
                    <h3>Contact us</h3>
                    <p>(+82) 070 - 8600 - 1254</p>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
      <div class="single-product-tab bd-7">
        <div class="cmt-title text-center abs">
          <ul class="nav nav-tabs v3 text-center">
            <li class="active"><a data-toggle="pill" href="#desc">Description</a></li>
            <li><a data-toggle="pill" href="#review">Reviews</a></li>
            <li><a data-toggle="pill" href="#qna">Q&A</a></li>            
          </ul>
        </div>
        <div class="tab-content">
          <div id="desc" class="prode_tab active">
            <div class="prode_tab_con">
              <div class="e-text">
                <div class="entry-inside v4 text-center">
                  <img src="/images/productDetail/productDetail_simple_icon.png" alt="">
                  <h1 class="entry-title spc">Multi-Purpose WooCommerce Theme for Electronics Store </h1>
                </div>
                <div class="entry-inside v3">

                  <div class="text-center image-bd">
                    <img src="/images/productDetail/productDetail_des_1.jpg" alt="">
                  </div>

                  <div class="row entry-middle">
                    <div class="entry-info col-xs-12 col-sm-6 col-md-6">
                      <h3>This is demo heading</h3>
                      <p>It is a long established fact that a reader will be distracted by the readable content page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                    </div>

                    <div class="entry-info col-xs-12 col-sm-6 col-md-6">
                      <h3>This is demo heading</h3>
                      <p>It is a long established fact that a reader will be distracted by the readable content page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                    </div>
                  </div>

                  <div class="text-center image-bd img-cal">
                    <img src="/images/productDetail/productDetail_des_2.jpg" alt="">
                  </div>
                </div>
              </div>

              <div class="entry-button text-center abs">
                <a href="javascript:void(0)" class="btn-show">Show more<i class="ion-chevron-down"></i></a>
              </div>
            </div>
          </div>

          <div id="qna" class="prode_tab">
            <div class="prode_tab_con">
              <div class="qna_wr">
                <div class="qna_box qna_box_q">
                  <div class="qna_q_id_wr">
                    <em id="qna_q_id">soooo</em>
                    @
                    <span id="qna_q_domain">gmail.com</span>
                  </div>

                  <div class="qna_q_date">
                    December 8, 2020 / 07:14:42
                  </div>

                  <div class="qna_q_con">
                    Is it okay for sensitive skin?
                  </div>
                </div>

                <div class="qna_box qna_box_a">
                  <div class="qna_a_id_wr">
                    <img src="/images/productDetail/productDetail_qna_arrow.png" alt="">
                    ALISEON
                  </div>
                  <div class="qna_a_con">
                    Yes, no worries.
                  </div>
                </div>

                <div class="qna_box qna_box_q">
                  <div class="qna_q_id_wr">
                    <em id="qna_q_id">soooo</em>
                    @
                    <span id="qna_q_domain">gmail.com</span>
                  </div>

                  <div class="qna_q_date">
                    December 8, 2020 / 07:14:42
                  </div>

                  <div class="qna_q_con">
                    Is it okay for sensitive skin?
                  </div>
                </div>

                <div class="qna_box qna_box_a">
                  <div class="qna_a_id_wr">
                    <img src="/images/productDetail/productDetail_qna_arrow.png" alt="">
                    ALISEON
                  </div>
                  <div class="qna_a_con">
                    Yes, no worries.
                  </div>
                </div>

                <div class="qna_box qna_box_q">
                  <div class="qna_q_id_wr">
                    <em id="qna_q_id">soooo</em>
                    @
                    <span id="qna_q_domain">gmail.com</span>
                  </div>

                  <div class="qna_q_date">
                    December 8, 2020 / 07:14:42
                  </div>

                  <div class="qna_q_con">
                    Is it okay for sensitive skin?
                  </div>
                </div>

                <div class="qna_box qna_box_a">
                  <div class="qna_a_id_wr">
                    <img src="/images/productDetail/productDetail_qna_arrow.png" alt="">
                    ALISEON
                  </div>
                  <div class="qna_a_con">
                    Yes, no worries.
                  </div>
                </div>

                <div class="qna_box qna_box_q">
                  <div class="qna_q_id_wr">
                    <em id="qna_q_id">soooo</em>
                    @
                    <span id="qna_q_domain">gmail.com</span>
                  </div>

                  <div class="qna_q_date">
                    December 8, 2020 / 07:14:42
                  </div>

                  <div class="qna_q_con">
                    Is it okay for sensitive skin?
                  </div>
                </div>

                <div class="qna_box qna_box_a">
                  <div class="qna_a_id_wr">
                    <img src="/images/productDetail/productDetail_qna_arrow.png" alt="">
                    ALISEON
                  </div>
                  <div class="qna_a_con">
                    Yes, no worries.
                  </div>
                </div>

                <div class="qna_box qna_box_q">
                  <div class="qna_q_id_wr">
                    <em id="qna_q_id">soooo</em>
                    @
                    <span id="qna_q_domain">gmail.com</span>
                  </div>

                  <div class="qna_q_date">
                    December 8, 2020 / 07:14:42
                  </div>

                  <div class="qna_q_con">
                    Is it okay for sensitive skin?
                  </div>
                </div>

                <div class="qna_box qna_box_a">
                  <div class="qna_a_id_wr">
                    <img src="/images/productDetail/productDetail_qna_arrow.png" alt="">
                    ALISEON
                  </div>
                  <div class="qna_a_con">
                    Yes, no worries.
                  </div>
                </div>
              </div>

              <div class="entry-button text-center abs">
                <a href="javascript:void(0)" class="btn-show">Show more<i class="ion-chevron-down"></i></a>
              </div>
            </div>            
          </div>

          <div id="review" class="prode_tab ">
            <div class="prode_tab_con">
              <div class="review_wr">
                <div class="review_box_wr">
                  <div class="review_box">
                    <div class="review_box_img">
                      <img src="/images/productDetail/productDetail_review_img.jpg" alt="">
                    </div>

                    <div class="review_box_con">
                      <h5>Name</h5>

                      <div class="product-rating">
                        <span class="star star-5"></span>
                        <span class="star star-4"></span>
                        <span class="star star-3"></span>
                        <span class="star star-2"></span>
                        <span class="star star-1"></span>
                        <div class="product-rating-date">December 8, 2020</div>
                      </div>

                      <p>Beauty Water, 2</p>

                      <div class="review_content">
                        I use it often as a skin! So good
                      </div>

                      <div class="review_count">
                        <span>100</span>
                        <button><img src="/images/productDetail/productDetail_icon-heart2.png" alt=""></button>
                      </div>
                    </div>
                  </div>

                  <div class="review_box">
                    <div class="review_box_img">
                      <img src="/images/productDetail/productDetail_review_img.jpg" alt="">
                    </div>

                    <div class="review_box_con">
                      <h5>NameNameNameNameNameNameNameNameNameNameName</h5>

                      <div class="product-rating">
                        <span class="star star-5"></span>
                        <span class="star star-4"></span>
                        <span class="star star-3"></span>
                        <span class="star star-2"></span>
                        <span class="star star-1"></span>
                        <div class="product-rating-date">December 8, 2020</div>
                      </div>

                      <p>Beauty Water, 2</p>

                      <div class="review_content">
                        I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin!
                      </div>

                      <div class="review_count">
                        <span>100</span>
                        <button><img src="/images/productDetail/productDetail_icon-heart2.png" alt=""></button>
                      </div>
                    </div>
                  </div>

                  <div class="review_box">
                    <div class="review_box_img">
                      <img src="/images/productDetail/productDetail_review_img.jpg" alt="">
                    </div>

                    <div class="review_box_con">
                      <h5>Name</h5>

                      <div class="product-rating">
                        <span class="star star-5"></span>
                        <span class="star star-4"></span>
                        <span class="star star-3"></span>
                        <span class="star star-2"></span>
                        <span class="star star-1"></span>
                        <div class="product-rating-date">December 8, 2020</div>
                      </div>

                      <p>Beauty Water, 2</p>

                      <div class="review_content">
                        I use it often as a skin! So good
                      </div>

                      <div class="review_count">
                        <span>100</span>
                        <button><img src="/images/productDetail/productDetail_icon-heart2.png" alt=""></button>
                      </div>
                    </div>
                  </div>

                  <div class="review_box">
                    <div class="review_box_img">
                      <img src="/images/productDetail/productDetail_review_img.jpg" alt="">
                    </div>

                    <div class="review_box_con">
                      <h5>NameNameNameNameNameNameNameNameNameNameName</h5>

                      <div class="product-rating">
                        <span class="star star-5"></span>
                        <span class="star star-4"></span>
                        <span class="star star-3"></span>
                        <span class="star star-2"></span>
                        <span class="star star-1"></span>
                        <div class="product-rating-date">December 8, 2020</div>
                      </div>

                      <p>Beauty Water, 2</p>

                      <div class="review_content">
                        I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin!
                      </div>

                      <div class="review_count">
                        <span>100</span>
                        <button><img src="/images/productDetail/productDetail_icon-heart2.png" alt=""></button>
                      </div>
                    </div>
                  </div>

                  <div class="review_box">
                    <div class="review_box_img">
                      <img src="/images/productDetail/productDetail_review_img.jpg" alt="">
                    </div>

                    <div class="review_box_con">
                      <h5>Name</h5>

                      <div class="product-rating">
                        <span class="star star-5"></span>
                        <span class="star star-4"></span>
                        <span class="star star-3"></span>
                        <span class="star star-2"></span>
                        <span class="star star-1"></span>
                        <div class="product-rating-date">December 8, 2020</div>
                      </div>

                      <p>Beauty Water, 2</p>

                      <div class="review_content">
                        I use it often as a skin! So good
                      </div>

                      <div class="review_count">
                        <span>100</span>
                        <button><img src="/images/productDetail/productDetail_icon-heart2.png" alt=""></button>
                      </div>
                    </div>
                  </div>

                  <div class="review_box">
                    <div class="review_box_img">
                      <img src="/images/productDetail/productDetail_review_img.jpg" alt="">
                    </div>

                    <div class="review_box_con">
                      <h5>NameNameNameNameNameNameNameNameNameNameName</h5>

                      <div class="product-rating">
                        <span class="star star-5"></span>
                        <span class="star star-4"></span>
                        <span class="star star-3"></span>
                        <span class="star star-2"></span>
                        <span class="star star-1"></span>
                        <div class="product-rating-date">December 8, 2020</div>
                      </div>

                      <p>Beauty Water, 2</p>

                      <div class="review_content">
                        I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin!
                      </div>

                      <div class="review_count">
                        <span>100</span>
                        <button><img src="/images/productDetail/productDetail_icon-heart2.png" alt=""></button>
                      </div>
                    </div>
                  </div>

                  <div class="review_box">
                    <div class="review_box_img">
                      <img src="/images/productDetail/productDetail_review_img.jpg" alt="">
                    </div>

                    <div class="review_box_con">
                      <h5>Name</h5>

                      <div class="product-rating">
                        <span class="star star-5"></span>
                        <span class="star star-4"></span>
                        <span class="star star-3"></span>
                        <span class="star star-2"></span>
                        <span class="star star-1"></span>
                        <div class="product-rating-date">December 8, 2020</div>
                      </div>

                      <p>Beauty Water, 2</p>

                      <div class="review_content">
                        I use it often as a skin! So good
                      </div>

                      <div class="review_count">
                        <span>100</span>
                        <button><img src="/images/productDetail/productDetail_icon-heart2.png" alt=""></button>
                      </div>
                    </div>
                  </div>

                  <div class="review_box">
                    <div class="review_box_img">
                      <img src="/images/productDetail/productDetail_review_img.jpg" alt="">
                    </div>

                    <div class="review_box_con">
                      <h5>NameNameNameNameNameNameNameNameNameNameName</h5>

                      <div class="product-rating">
                        <span class="star star-5"></span>
                        <span class="star star-4"></span>
                        <span class="star star-3"></span>
                        <span class="star star-2"></span>
                        <span class="star star-1"></span>
                        <div class="product-rating-date">December 8, 2020</div>
                      </div>

                      <p>Beauty Water, 2</p>

                      <div class="review_content">
                        I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin!
                      </div>

                      <div class="review_count">
                        <span>100</span>
                        <button><img src="/images/productDetail/productDetail_icon-heart2.png" alt=""></button>
                      </div>
                    </div>
                  </div>

                  <div class="review_box">
                    <div class="review_box_img">
                      <img src="/images/productDetail/productDetail_review_img.jpg" alt="">
                    </div>

                    <div class="review_box_con">
                      <h5>Name</h5>

                      <div class="product-rating">
                        <span class="star star-5"></span>
                        <span class="star star-4"></span>
                        <span class="star star-3"></span>
                        <span class="star star-2"></span>
                        <span class="star star-1"></span>
                        <div class="product-rating-date">December 8, 2020</div>
                      </div>

                      <p>Beauty Water, 2</p>

                      <div class="review_content">
                        I use it often as a skin! So good
                      </div>

                      <div class="review_count">
                        <span>100</span>
                        <button><img src="/images/productDetail/productDetail_icon-heart2.png" alt=""></button>
                      </div>
                    </div>
                  </div>

                  <div class="review_box">
                    <div class="review_box_img">
                      <img src="/images/productDetail/productDetail_review_img.jpg" alt="">
                    </div>

                    <div class="review_box_con">
                      <h5>NameNameNameNameNameNameNameNameNameNameName</h5>

                      <div class="product-rating">
                        <span class="star star-5"></span>
                        <span class="star star-4"></span>
                        <span class="star star-3"></span>
                        <span class="star star-2"></span>
                        <span class="star star-1"></span>
                        <div class="product-rating-date">December 8, 2020</div>
                      </div>

                      <p>Beauty Water, 2</p>

                      <div class="review_content">
                        I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin! So good I use it often as a skin!
                      </div>

                      <div class="review_count">
                        <span>100</span>
                        <button><img src="/images/productDetail/productDetail_icon-heart2.png" alt=""></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="entry-button text-center abs">
                <a href="javascript:void(0)" class="btn-show">Show more<i class="ion-chevron-down"></i></a>
              </div>
            </div>            
          </div>
        </div>        
      </div>
    </div>

    <div class="review_comment">
      <div class="review_comment_wr">
        <div class="review_w_box_img">
          <img src="/images/productDetail/productDetail_review_img.jpg" alt="">
        </div>

        <div class="review_w_box_con">
          <div class="review_comment_write">
            <textarea name="" id=""></textarea>
          </div>        

          <div class="review_comment_bottom">
            <div class="product-rating">
              <span class="star star-5"></span>
              <span class="star star-4"></span>
              <span class="star star-3"></span>
              <span class="star star-2"></span>
              <span class="star star-1"></span>
            </div>
            <p>Beauty Water, 2</p>
            <button type="button" id="btn_review_confirm">Confirm</button>
          </div>
        </div>
      </div>
    </div>

    <div class="qna_comment">
      <div class="review_comment_wr">
        <div class="review_w_box_con">
          <div class="review_comment_write">
            <textarea name="" id=""></textarea>
          </div>        

          <div class="review_comment_bottom">            
            <p>Beauty Water, 2</p>
            <button type="button" id="btn_qna_confirm">Confirm</button>
          </div>
        </div>
      </div>
    </div>

    <div class="bestseller">
      <div class="ecome-heading style5v3 spc5v3">
        <h1>Related products</h1>
        <a href="javascript:void(0)" class="btn-show">Show more<i class="ion-ios-arrow-forward"></i></a>
      </div>
      <div class="related_sld probox_4">
        <div class="related_box">
          <div class="product-item">
            <div class="product-inner">
              <div class="product-img">
                <a href="#"><img src="/images/productDetail/productDetail_related01.png" alt="" class="img-reponsive"></a>
              </div>
              <div class="product-info">             
                <div class="element-list element-list-left">
                </div>
                <div class="element-list element-list-middle">                
                  <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                  <p class="product-cont">DescriptionsDescriptionsDescriptions
                    DescriptionsDescriptionsDescriptionsDescriptionsDescriptions
                    DescriptionsDescriptions</p>
                  <div class="product-bottom">
                    <div class="product-price"><span>$1,215.00</span></div>
                    <a href="#" class="btn-icon btn-view">
                      <span class="icon_eye"><img src="/images/productDetail/productDetail_icon-eye.png" alt=""></span>
                    </a>
                  </div>
                </div>
                {{-- <div class="product-button-group">
                  <a href="#" class="btn-icon">
                    <span class="icon_cart">
                      <img src="/images/productDetail/productDetail_cart-w.png" alt="">
                    </span>
                  </a>
                  <a href="#" class="btn-icon">
                    <span class="icon_heart">
                      <img src="/images/productDetail/productDetail_icon-heart2.png" alt="">
                    </span>
                  </a>
                  <a href="#" class="btn-icon">
                    <span class="icon_share">
                      <img src="/images/productDetail/productDetail_icon-compare.png" alt="">
                    </span>
                  </a>
                </div> --}}
              </div>
            </div>
          </div> 
        </div>

        <div class="related_box">
          <div class="product-item">
            <div class="product-inner">
              <div class="product-img">
                <a href="#"><img src="/images/productDetail/productDetail_related01.png" alt="" class="img-reponsive"></a>
              </div>
              <div class="product-info">             
                <div class="element-list element-list-left">
                </div>
                <div class="element-list element-list-middle">                
                  <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                  <p class="product-cont">DescriptionsDescriptionsDescriptions
                    DescriptionsDescriptionsDescriptionsDescriptionsDescriptions
                    DescriptionsDescriptions</p>
                  <div class="product-bottom">
                    <div class="product-price"><span>$1,215.00</span></div>
                    <a href="#" class="btn-icon btn-view">
                      <span class="icon_eye"><img src="/images/productDetail/productDetail_icon-eye.png" alt=""></span>
                    </a>
                  </div>
                </div>
                {{-- <div class="product-button-group">
                  <a href="#" class="btn-icon">
                    <span class="icon_cart">
                      <img src="/images/productDetail/productDetail_cart-w.png" alt="">
                    </span>
                  </a>
                  <a href="#" class="btn-icon">
                    <span class="icon_heart">
                      <img src="/images/productDetail/productDetail_icon-heart2.png" alt="">
                    </span>
                  </a>
                  <a href="#" class="btn-icon">
                    <span class="icon_share">
                      <img src="/images/productDetail/productDetail_icon-compare.png" alt="">
                    </span>
                  </a>
                </div> --}}
              </div>
            </div>
          </div> 
        </div>

        <div class="related_box">
          <div class="product-item">
            <div class="product-inner">
              <div class="product-img">
                <a href="#"><img src="/images/productDetail/productDetail_related01.png" alt="" class="img-reponsive"></a>
              </div>
              <div class="product-info">             
                <div class="element-list element-list-left">
                </div>
                <div class="element-list element-list-middle">                
                  <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                  <p class="product-cont">DescriptionsDescriptionsDescriptions
                    DescriptionsDescriptionsDescriptionsDescriptionsDescriptions
                    DescriptionsDescriptions</p>
                  <div class="product-bottom">
                    <div class="product-price"><span>$1,215.00</span></div>
                    <a href="#" class="btn-icon btn-view">
                      <span class="icon_eye"><img src="/images/productDetail/productDetail_icon-eye.png" alt=""></span>
                    </a>
                  </div>
                </div>
                {{-- <div class="product-button-group">
                  <a href="#" class="btn-icon">
                    <span class="icon_cart">
                      <img src="/images/productDetail/productDetail_cart-w.png" alt="">
                    </span>
                  </a>
                  <a href="#" class="btn-icon">
                    <span class="icon_heart">
                      <img src="/images/productDetail/productDetail_icon-heart2.png" alt="">
                    </span>
                  </a>
                  <a href="#" class="btn-icon">
                    <span class="icon_share">
                      <img src="/images/productDetail/productDetail_icon-compare.png" alt="">
                    </span>
                  </a>
                </div> --}}
              </div>
            </div>
          </div> 
        </div>

        <div class="related_box">
          <div class="product-item">
            <div class="product-inner">
              <div class="product-img">
                <a href="#"><img src="/images/productDetail/productDetail_related01.png" alt="" class="img-reponsive"></a>
              </div>
              <div class="product-info">             
                <div class="element-list element-list-left">
                </div>
                <div class="element-list element-list-middle">                
                  <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                  <p class="product-cont">DescriptionsDescriptionsDescriptions
                    DescriptionsDescriptionsDescriptionsDescriptionsDescriptions
                    DescriptionsDescriptions</p>
                  <div class="product-bottom">
                    <div class="product-price"><span>$1,215.00</span></div>
                    <a href="#" class="btn-icon btn-view">
                      <span class="icon_eye"><img src="/images/productDetail/productDetail_icon-eye.png" alt=""></span>
                    </a>
                  </div>
                </div>
                {{-- <div class="product-button-group">
                  <a href="#" class="btn-icon">
                    <span class="icon_cart">
                      <img src="/images/productDetail/productDetail_cart-w.png" alt="">
                    </span>
                  </a>
                  <a href="#" class="btn-icon">
                    <span class="icon_heart">
                      <img src="/images/productDetail/productDetail_icon-heart2.png" alt="">
                    </span>
                  </a>
                  <a href="#" class="btn-icon">
                    <span class="icon_share">
                      <img src="/images/productDetail/productDetail_icon-compare.png" alt="">
                    </span>
                  </a>
                </div> --}}
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
    
    <div class="voyage single-space">
      <div class="ecome-heading style5v3 spc5v3">
        <h1>VOYAGE</h1>
        <a href="javascript:void(0)" class="btn-show">Show more<i class="ion-ios-arrow-forward"></i></a>
      </div>
      <div class="voyage_box_sld probox_4">     
        <div class="voyage_box">  
          <div class="product-item">                 
            <div class="product-inner">
              <div class="voyage_top">
                <h5 class="votage_id">User name</h5>

                <div class="voyage_info">
                  <ul>
                    <li>View 1,100</li>
                    <li>3일 전</li>
                    <li>Category</li>
                  </ul>
                </div>
              </div>

              <div class="product-img">
                <a href=""></a> 

                <ul class="voyage_sld">
                  <li><img src="/images/productDetail/productDetail_voyage01.jpg" alt="" class="img-reponsive"></li>
                  <li><img src="/images/productDetail/productDetail_voyage02.jpg" alt="" class="img-reponsive"></li>
                  <li><img src="/images/productDetail/productDetail_voyage03.jpg" alt="" class="img-reponsive"></li>
                  <li><img src="/images/productDetail/productDetail_voyage04.jpg" alt="" class="img-reponsive"></li>
                </ul>                               
              </div>

              <div class="product-info">
                <div class="voyage_des">
                  Descriptions
                </div>

                <div class="voyage_detail">
                  <div class="voyage_detail_img">
                    <img src="/images/productDetail/productDetail_voyage_detail01.jpg" alt="">
                  </div>

                  <div class="voyage_detail_info">
                    <p>Related Products</p>
                    <span>Price. 400AED</span>
                  </div>
                </div>    

                <div class="action-group">
                  <ul>
                    <li>
                      <button type="button">Good</button>
                      <img src="/images/productDetail/productDetail_icon_good.png" alt="">
                    </li>
                    <li>
                      <button type="button">Comment</button>
                      <img src="/images/productDetail/productDetail_icon_comment.png" alt="">
                    </li>
                    <li class="voyage_share">
                      Share
                      <img src="/images/productDetail/productDetail_icon_share.png" alt="">  
                    </li>
                  </ul>
                </div>
              </div>
            </div>          
          </div>   
        
          <div class="action_pop action_pop_share">
            <span>Share</span>
            <div class="action_pop_sns">
              <ul>
                <li>
                  <a href="">
                    <img src="/images/atrend/atrend_blog_sns01.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/images/atrend/atrend_blog_sns02.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/images/atrend/atrend_blog_sns03.png" alt="">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div> 

        <div class="voyage_box"> 
          <div class="product-item">                 
            <div class="product-inner">
              <div class="voyage_top">
                <h5 class="votage_id"><a href="#">User name</a></h5>

                <div class="voyage_info">
                  <ul>
                    <li>View 1,100</li>
                    <li>3일 전</li>
                    <li>Category</li>
                  </ul>
                </div>
              </div>

              <div class="product-img">  
                <a href=""></a>     

                <ul class="voyage_sld">
                  <li><img src="/images/productDetail/productDetail_voyage02.jpg" alt="" class="img-reponsive"></li>
                  <li><img src="/images/productDetail/productDetail_voyage03.jpg" alt="" class="img-reponsive"></li>
                  <li><img src="/images/productDetail/productDetail_voyage04.jpg" alt="" class="img-reponsive"></li>
                  <li><img src="/images/productDetail/productDetail_voyage01.jpg" alt="" class="img-reponsive"></li>
                </ul>             
              </div>

              <div class="product-info">
                <div class="voyage_des">
                  Descriptions
                </div>

                <div class="voyage_detail">
                  <div class="voyage_detail_img">
                    <img src="/images/productDetail/productDetail_voyage_detail01.jpg" alt="">
                  </div>

                  <div class="voyage_detail_info">
                    <p>Related Products</p>
                    <span>Price. 400AED</span>
                  </div>
                </div>  

                <div class="action-group">
                  <ul>
                    <li>
                      <button type="button">Good</button>
                      <img src="/images/productDetail/productDetail_icon_good.png" alt="">
                    </li>
                    <li>
                      <button type="button">Comment</button>
                      <img src="/images/productDetail/productDetail_icon_comment.png" alt="">
                    </li>
                    <li class="voyage_share">
                      Share
                      <img src="/images/productDetail/productDetail_icon_share.png" alt="">  
                    </li>
                  </ul>
                </div>
              </div>
            </div>          
          </div> 
          
          <div class="action_pop action_pop_share">
            <span>Share</span>
            <div class="action_pop_sns">
              <ul>
                <li>
                  <a href="">
                    <img src="/images/atrend/atrend_blog_sns01.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/images/atrend/atrend_blog_sns02.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/images/atrend/atrend_blog_sns03.png" alt="">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="voyage_box"> 
          <div class="product-item">                 
            <div class="product-inner">
              <div class="voyage_top">
                <h5 class="votage_id">User name</h5>

                <div class="voyage_info">
                  <ul>
                    <li>View 1,100</li>
                    <li>3일 전</li>
                    <li>Category</li>
                  </ul>
                </div>
              </div>

              <div class="product-img">
                <a href=""></a>
                
                <ul class="voyage_sld">
                  <li><img src="/images/productDetail/productDetail_voyage03.jpg" alt="" class="img-reponsive"></li>
                  <li><img src="/images/productDetail/productDetail_voyage04.jpg" alt="" class="img-reponsive"></li>
                  <li><img src="/images/productDetail/productDetail_voyage01.jpg" alt="" class="img-reponsive"></li>
                  <li><img src="/images/productDetail/productDetail_voyage02.jpg" alt="" class="img-reponsive"></li>
                </ul>             
              </div>

              <div class="product-info">
                <div class="voyage_des">
                  Descriptions
                </div>

                <div class="voyage_detail">
                  <div class="voyage_detail_img">
                    <img src="/images/productDetail/productDetail_voyage_detail01.jpg" alt="">
                  </div>

                  <div class="voyage_detail_info">
                    <p>Related Products</p>
                    <span>Price. 400AED</span>
                  </div>
                </div>  

                <div class="action-group">
                  <ul>
                    <li>
                      <button type="button">Good</button>
                      <img src="/images/productDetail/productDetail_icon_good.png" alt="">
                    </li>
                    <li>
                      <button type="button">Comment</button>
                      <img src="/images/productDetail/productDetail_icon_comment.png" alt="">
                    </li>
                    <li class="voyage_share">
                      Share
                      <img src="/images/productDetail/productDetail_icon_share.png" alt="">  
                    </li>
                  </ul>
                </div>                
              </div>
            </div>          
          </div>

          <div class="action_pop action_pop_share">
            <span>Share</span>
            <div class="action_pop_sns">
              <ul>
                <li>
                  <a href="">
                    <img src="/images/atrend/atrend_blog_sns01.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/images/atrend/atrend_blog_sns02.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/images/atrend/atrend_blog_sns03.png" alt="">
                  </a>
                </li>
              </ul>
            </div>
          </div> 
        </div>

        <div class="voyage_box"> 
          <div class="product-item">                 
            <div class="product-inner">
              <div class="voyage_top">
                <h5 class="votage_id">User name</h5>

                <div class="voyage_info">
                  <ul>
                    <li>View 1,100</li>
                    <li>3일 전</li>
                    <li>Category</li>
                  </ul>
                </div>
              </div>

              <div class="product-img">
                <a href=""></a>

                <ul class="voyage_sld">                  
                  <li><img src="/images/productDetail/productDetail_voyage04.jpg" alt="" class="img-reponsive"></li>
                  <li><img src="/images/productDetail/productDetail_voyage01.jpg" alt="" class="img-reponsive"></li>
                  <li><img src="/images/productDetail/productDetail_voyage02.jpg" alt="" class="img-reponsive"></li>
                  <li><img src="/images/productDetail/productDetail_voyage03.jpg" alt="" class="img-reponsive"></li>
                </ul>               
              </div>

              <div class="product-info">
                <div class="voyage_des">
                  Descriptions
                </div>

                <div class="voyage_detail">
                  <div class="voyage_detail_img">
                    <img src="/images/productDetail/productDetail_voyage_detail01.jpg" alt="">
                  </div>

                  <div class="voyage_detail_info">
                    <p>Related Products</p>
                    <span>Price. 400AED</span>
                  </div>
                </div>  

                <div class="action-group">
                  <ul>
                    <li>
                      <button type="button">Good</button>
                      <img src="/images/productDetail/productDetail_icon_good.png" alt="">
                    </li>
                    <li>
                      <button type="button">Comment</button>
                      <img src="/images/productDetail/productDetail_icon_comment.png" alt="">
                    </li>
                    <li class="voyage_share">
                      Share
                      <img src="/images/productDetail/productDetail_icon_share.png" alt="">  
                    </li>
                  </ul>
                </div>                
              </div>
            </div>          
          </div>

          <div class="action_pop action_pop_share">
            <span>Share</span>
            <div class="action_pop_sns">
              <ul>
                <li>
                  <a href="">
                    <img src="/images/atrend/atrend_blog_sns01.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/images/atrend/atrend_blog_sns02.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="/images/atrend/atrend_blog_sns03.png" alt="">
                  </a>
                </li>
              </ul>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
  <!-- / end content -->
</div>

@endsection