@extends('layouts.master')

@section('title') Aliseon @endsection

@section('contents')

<!-- page script -->
<script src="{{ URL::asset('/js/fresh.js')}}"></script>

<div id="fresh" class="sub">
  <div class="page_fresh_top_wr">
    <div class="sub_visual fresh_visual">
      <img src="http://ko.aliseon.com/images/freshfood/fresh_visual.png"class="atrend_rev_big_slide_img">
      <div class="wrapper">
        <div class="top_img_banner_content">            
          <p class="top_img_banner_tit01">Smart Aliseon ai pick for you</p>
          <p class="top_img_banner_tit02">Our interest is always you</p>
        </div>
      </div>
    </div>  
  </div>

  <!-- page_fresh { -->
  <div class="page_fresh_wr">    
    <div class="page_fresh">
      <div class="wrapper">
        <div class="title_st01_box">
          <span class="title">{{ $data['general_setting']['general_setting_fresh_body']['fresh.body.freshstore'] }}</span>
          <span class="descr">{{ $data['general_setting']['general_setting_fresh_body']['fresh.body.freshstoredesc'] }}</span>
        </div>
      </div>
      <div class="wrapper3">
        @include('layouts.store_slider')
      </div>
    </div>
  </div>
  <!-- } page_fresh -->

  <!-- O2O Product & Service { -->
  <div class="page_fresh_wr">
    <div class="wrapper">
      <div class="page_fresh card_5">
        <div class="title_st01_box">
          <span class="title">{{ $data['general_setting']['general_setting_fresh_body']['fresh.body.freshfood'] }}</span>
          <span class="descr">{{ $data['general_setting']['general_setting_fresh_body']['fresh.body.freshfooddesc'] }}</span>
        </div>
        @include('layouts.fresh_list_slider') 
      </div>
    </div>
  </div>
  <!-- } O2O Product & Service  -->

  <!-- Life on O2O { -->
  <div class="page_fresh_wr">
    <div class="wrapper">
      <div class="page_fresh">
        <div class="title_st01_box">
          <span class="title">{{ $data['general_setting']['general_setting_fresh_body']['fresh.body.lifeonfresh'] }}</span>
          <span class="descr">{{ $data['general_setting']['general_setting_fresh_body']['fresh.body.lifeonfreshdesc'] }}</span>
        </div>
        @include('layouts.lifeon_slider')
      </div>
    </div>
  </div>
  <!-- } Life on O2O -->

</div>

@endsection