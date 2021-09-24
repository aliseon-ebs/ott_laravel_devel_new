@extends('layouts.common.main_master')

@section('title') Aliseon @endsection

@section('contents')

<!-- page script -->
<script src="{{ URL::asset('/js/exhibition/exhibition.js')}}"></script>

<div id="exhibition" class="sub">
  <div class="sub_visual exhibition_visual">  
    <img src="http://kr.aliseon.com/images/exhibition/exhibition_visual.jpg" class="atrend_rev_big_slide_img">
    <div class="wrapper">      
      <div class="top_img_banner_content">            
        <p class="top_img_banner_tit06">Collection</p>
      </div>      
    </div>
  </div>   

  <div class="page_event_wr">
    <div class="wrapper">
      <div class="event_top_box">
        <div class="event_top_list">
          <div class="event_card2 ex_box">
            <a href="" class="cf">
              <div class="event_card_txt_wr">
                <h3>X-mas <b>gift</b></h3>
                <h6>Brand fashion</h6>
                <h5>Product name</h5>
                <p>03, Fed, 2020 15:00</p>
              </div>
              <div class="event_card_img_wr">
                <img src="/images/exhibition/exhibition_img01.jpg" alt="">
              </div>
            </a>
          </div>
        </div>
        <div class="event_top_list">
          <div class="event_card2 ex_box">
            <a href="" class="cf">
              <div class="event_card_txt_wr">
                <span>2020 F/W</span>
                <h4>Men’s best fashion</h4>
                <h6>Brand fashion</h6>
                <h5>Product name</h5>
                <p>03, Fed, 2020 15:00</p>
              </div>
              <div class="event_card_img_wr">
                <img src="/images/exhibition/exhibition_img02.jpg" alt="">
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
        <span class="title">{{ $data['general_setting']['general_setting_exhibition_body']['exhibition.body.specialexhibition'] }}</span>        
      </div>
    </div>

    <div class="wrapper2">
      <div class="page_event card_4">
        @include('layouts.exhibition.exhibition_list_slider')
      </div>
    </div>
  </div>  
</div>

@endsection