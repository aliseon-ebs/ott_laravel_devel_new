@extends('layouts.common.main_master')

@section('title') Aliseon @endsection

@section('contents')

<!-- page script -->
<script src="{{ URL::asset('/js/subscription/subscription.js')}}"></script>

<div id="subscribe" class="sub">
  <div class="sub_visual subscribe_visual">  
    <img src="http://kr.aliseon.com/images/subscription/subscribe_visual.jpg"class="atrend_rev_big_slide_img">  
    <div class="wrapper">      
      <div class="sub_visual_content">            
        <p class="visual_txt01">With ALISEON,</p>
        <p class="visual_txt02">subscribe everything in the world without laziness!</p>
      </div>      
    </div>
    <img src="/images/subscription/subscribe_bg.png" alt="">
  </div> 

  <div class="page_subscribe_wr">
    <div class="wrapper">
      <div class="feature-product">
        <div class="product_group product_group_01">
          <div class="tabct_ca_box row">
            <div class="tabct_ca col-md-3 col-sm-4 col-xs-12">{{ $data['hot_trend_title'][0] }}</div>
            <div class="tabct_keyword col-md-9 col-sm-8 col-xs-12 cf">
              <p class="tabct_keyword_txt">Hot Keywords</p>
              <ul class="tabct_keyword_ul cf">

                @foreach ($data['hot_trend_keyword'][0] as $h => $ho)
                  {{--
                    tabct_keyword -> 핫키워드
                    --}}
                  @component('components.subscription.tabct_keyword')
                  @slot('tabct_keyword') {{ $ho }} @endslot
                  @endcomponent
                @endforeach
              </ul>
            </div>
          </div>
          
          
          <div class="tab_contents_all row">
            <!--Tab Button-->
            <div class="tab_link_box col-md-3 col-sm-4 col-xs-12">
              <ul class="tab-link">
                @foreach ($data['hot_trend_value'][0] as $h => $ho)
                  @if ($h == 0)
                    <li class="active">
                      {{--
                          tabct_tab_img -> 탭 썸네일 이미지
                          tabct_tab_txt -> 탭 타이틀
                          tabct_tab_link -> 탭과 컨텐츠 영역 연결 아이디 값
                          --}}
                      @component('components.subscription.tabct_tab')
                      @slot('tabct_tab_img') common_tabct_tab_img.jpg @endslot
                      @slot('tabct_tab_txt') {{ $ho->name }} @endslot
                      @slot('tabct_tab_link') #life_fashion @endslot
                      @endcomponent
                    </li>
                  @else
                    <li>
                      @component('components.subscription.tabct_tab')
                      @slot('tabct_tab_img') common_tabct_tab_img.jpg @endslot
                      @slot('tabct_tab_txt') {{ $ho->name }} @endslot
                      @slot('tabct_tab_link') #life_cosmetic @endslot
                      @endcomponent
                    </li>
                  @endif
                @endforeach
              </ul>
            </div>
          
            <!--Tab Contents-->
            <div class="tab-content_box col-md-9 col-sm-8 col-xs-12">
              <div class="tab-content">
                {{--
                  tabct_ct_link -> 탭과 컨텐츠 영역 연결 아이디 값
                  tabct_ct_active -> 탭,컨텐츠 활성화 클래스 값
                  --}}
                <div class="tab-sld-wr">
                  @component('components.subscription.tabct_ct')
                  @slot('tabct_ct_link') life_fashion @endslot
                  @slot('tabct_ct_active') in active @endslot
                  @endcomponent
          
                  @component('components.subscription.tabct_ct')
                  @slot('tabct_ct_link') life_cosmetic @endslot
                  @endcomponent
          
                  @component('components.subscription.tabct_ct')
                  @slot('tabct_ct_link') life_denims @endslot
                  @endcomponent
          
                  @component('components.subscription.tabct_ct')
                  @slot('tabct_ct_link') life_coolingcloth @endslot
                  @endcomponent
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page_subscribe_wr">
    <div class="wrapper">
      <div class="page_fresh card_5">
        <div class="title_st01_box">
          <span class="title">{{ $data['general_setting']['general_setting_subscribe_body']['subscribe.body.trendsub'] }}</span>
          <span class="descr">{{ $data['general_setting']['general_setting_subscribe_body']['subscribe.body.trendsubdesc'] }}</span>
        </div>
        @include('layouts.subscription.fresh_list_slider') 
      </div>
    </div>
  </div>

  <div class="page_subscribe_wr">
    <div class="wrapper">
      <div class="page_fresh">
        <div class="title_st01_box">
          <span class="title">{{ $data['general_setting']['general_setting_subscribe_body']['subscribe.body.lifeonsub'] }}</span>
          <span class="descr">{{ $data['general_setting']['general_setting_subscribe_body']['subscribe.body.lifeonsubdesc'] }}</span>
        </div>
        @include('layouts.subscription.lifeon_slider')
      </div>
    </div>
  </div>
  
</div>

@endsection