@extends('layouts.common.main_master')

@section('title') Aliseon @endsection

@section('contents')

<!-- page script -->
<script src="{{ URL::asset('/js/eventcoupon/eventcoupon.js')}}"></script>

<div id="event" class="sub">
  <div class="sub_visual event_visual"> 
    <img src="http://kr.aliseon.com/images/eventcoupon/event_visual.jpg" class="atrend_rev_big_slide_img">  
    <div class="wrapper">      
      <div class="top_img_banner_content">            
        <p class="top_img_banner_tit04">Event & Coupon</p>
        <p class="top_img_banner_tit05">Various, Special Events and Coupons are provide only to ALISEON family, <br>Sign in right now, and you can enjoy event and coupons</p>
      </div>      
    </div>
  </div> 

  <div class="page_event_wr">
    <div class="wrapper">
      <div class="event_top_box">
        <div class="event_top_list">
          <div class="event_card2">
            <a href="" class="cf">
              <div class="event_card_txt_wr">
                <p class="event_txt">ALISEON Event In this time</p>
                <p class="event_organizer"><img src="/images/common/common_aliseon_prodile_img.png" alt="">ALISEON Official</p>
                <p class="event_name">Event Name</p>
                <p class="event_date">03, Feb, 2020 15:00</p>
              </div>
              <div class="event_card_img_wr">
                <img src="/images/eventcoupon/event_img05.jpg" alt="">
              </div>
            </a>
          </div>
        </div>
        <div class="event_top_list">
          <div class="event_card2">
            <a href="" class="cf">
              <div class="event_card_txt_wr">
                <p class="event_txt">ALISEON Event In this time</p>
                <p class="event_organizer"><img src="/images/common/common_aliseon_prodile_img.png" alt="">ALISEON Official</p>
                <p class="event_name">Event Name</p>
                <p class="event_date">03, Feb, 2020 15:00</p>
              </div>
              <div class="event_card_img_wr">
                <img src="/images/eventcoupon/event_img06.jpg" alt="">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page_event_wr">
    <div class="wrapper">
      <div class="title_st04_box">
        <span class="title deco_line">{{ $data['general_setting']['general_setting_event_body']['event.body.event'] }}</span>
        <a href="http://kr.aliseon.com/event-coupon/lastevent/list/id" class="title_more_btn">Past Event<i class="arrow right"></i></a>
      </div>

      <div class="page_event card_4">
        @include('layouts.eventcoupon.event_list_slider')
      </div>
    </div>
  </div>

  <div class="page_event_wr">
    <div class="wrapper">
      <div class="title_st04_box">
        <span class="title">{{ $data['general_setting']['general_setting_event_body']['event.body.coupon'] }}</span>        
      </div>

      <div class="page_event card_4">
        @include('layouts.eventcoupon.event_list_slider_down')
      </div>
    </div>
  </div>
</div>

@endsection