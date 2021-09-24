@extends('layouts.common.main_master')

@section('title') Aliseon @endsection

@section('contents')
<!-- page script -->

<script src="{{ URL::asset('/js/o2o/o2o.js')}}"></script>
<script src="{{ URL::asset('/js/subscription/subscription.js')}}"></script>



<div id="o2o" class="sub">
  <div class="sub_visual o2o_visual">
    <img src="/images/o2o/o2o_visual.jpg" class="atrend_rev_big_slide_img">
    <div class="wrapper">
      <div class="top_img_banner_content">            
        <p class="top_img_banner_tit01">Online services exist to enrich your offline life.</p>
        <p class="top_img_banner_tit02">Adds convenience to your life. <br>ALISEON O2O
        </p>
      </div>
    </div>
  </div>  

  <!-- search { -->
  <div class="search_wr">
    <div class="wrapper">
      <div class="search">
        <div class="search_bar">
          <input type="text" class="search_bar_input" placeholder="What are you looking for?">
        </div>
        <button type="button" class="search_bar_btn">
          <img src="/images/common/common_sch_btn_icon_w.png" alt="">
          <span>Search</span>
        </button>
      </div>
    </div>
  </div>
  <!-- } search -->

  <!-- page_o2o { -->
  <div class="page_o2o_wr">
    <div class="wrapper">
      <div class="page_o2o">
        <div class="title_st01_box">
          <span class="title">{{ $data['general_setting']['general_setting_o2o_body']['o2o.body.o2ostore'] }}</span>
          <span class="descr">{{ $data['general_setting']['general_setting_o2o_body']['o2o.body.o2ostoredesc'] }}</span>
        </div>
        @include('layouts.o2o.store_slider')
      </div>
    </div>
  </div>
  <!-- } page_o2o -->

  <!-- O2O Product & Service { -->
  <div class="page_o2o_wr">
    <div class="wrapper">      
      <div class="title_st01_box">
        <span class="title">{{ $data['general_setting']['general_setting_o2o_body']['o2o.body.o2oproduct'] }}</span>
        <span class="descr">{{ $data['general_setting']['general_setting_o2o_body']['o2o.body.o2oproductdesc'] }}</span>
      </div>

      <!-- o2o category { -->
        <div class="category_items_box">
          <div class="category_items_wr wrapper">
            @include('layouts.o2o.category_slider')
          </div>
        </div>
      <!-- } o2o category -->

      
      <div class="show_more">
        <a href="">Show more <span class="arrow_right"></span></a> {{--o2o 중간상품페이지로 이동--}}
      </div>
    </div>

    <div class="wrapper2">
      <div class="page_o2o card_5">
        @include('layouts.o2o.product_list_slider')
      </div>
    </div>
  </div>
  <!-- } O2O Product & Service  -->

  <!-- Life on O2O { -->
  <div class="page_o2o_wr">
    <div class="wrapper">
      <div class="page_o2o">
        <div class="title_st01_box">
          <span class="title">{{ $data['general_setting']['general_setting_o2o_body']['o2o.body.lifeono2o'] }}</span>
          <span class="descr">{{ $data['general_setting']['general_setting_o2o_body']['o2o.body.lifeono2odesc'] }}</span>
        </div>
        @include('layouts.o2o.lifeon_slider')
      </div>
    </div>
  </div>
  <!-- } Life on O2O -->

</div>

@endsection

<script type="text/javascript" src="/libs/jquery/jquery.min.js"></script>
<script src="{{ URL::asset('/libs/jquery/jquery.mCustomScrollbar.js')}}"></script>
