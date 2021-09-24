@extends('layouts.master')

@section('title') Aliseon @endsection

@section('contents')
<!-- page js -->  
{{ Auth::user() }}
<div id="main">
  <!-- main_visual { -->
  <a href="http://ko.aliseon.com/exhibition/keyword/list/id" class="main_visual">
    
    <div class="main_visual_slider">
      @foreach ($data['middle_banner'] as $m1 => $m11)
        <div class="main_visual_slide" id="main_visual_slide{{ $m1 }}">
            <img src="https://2020aliseon.s3.ap-northeast-2.amazonaws.com{{$data['middle_banner'][$m1]->photo}}" class="atrend_rev_big_slide_img">
            <div class="main_visual_txtbox wrapper">

              <div class="main_visual_txtbox_inner">
              
                <p class="main_visual_txt01">{{$data['middle_banner'][$m1]->title}}</p>
                <p class="main_visual_txt02">{{$data['middle_banner'][$m1]->sub_title}}</p>
              </div>
            </div>
        </div>   
      @endforeach
    </div>
  </a>
  <!-- } main visual -->

  {{-- <div class ="wrapper"> --}}
  <!-- A-trend { --> 
  <div class="atrend_box main_atrend_box">
    <div class="atrend_box_wr wrapper">
      <div class="title_st01_box">
        <span class="title">{{ $data['general_setting']['general_setting_main_body']['main.body.todayatrend'] }}</span>
      </div>

      <div class="big_slide_wr">
        @for ($i = 0; $i < $data['atrend_max_page'] - 1; $i++)
        
            @include('layouts.atrend_slider_new')
        @endfor
      </div>
    </div>
  </div>
  <!-- } A-trend -->

  <!-- Influencer { -->
  <div class="influencer_box main_influencer_box">
    <div class="influencer_box_wr wrapper">
      @include('layouts.influencer_slider')
    </div>
  </div>
  <!-- } Influencer -->

  <!-- Flash Deal { -->
  <div class="flash_deal main_flash_deal_box">
    @include('layouts.flashdeal_slider')
  </div>
  <!-- } Flash Deal -->

  <!-- Category items { -->
  <div class="category_items_box main_category_items_box">
    <div class="category_items_wr wrapper">
      @include('layouts.category_slider')
    </div>
  </div>
  <!-- } Category items -->

  <!-- product(Tab&Contents) { -->
  <div class="tabct_box main_tabct_box_01">
    <div class="feature-product">
      <div class="wrapper">
        <div class="title_st02_box_wr">
          <span class="deco_line_left"></span>
          <div class="title_st02_box">
            <span class="title">{{ $data['general_setting']['general_setting_main_body']['main.body.hottrend'] }}</span>
            <span class="descr">{{ $data['general_setting']['general_setting_main_body']['main.body.hottrenddesc'] }}</span>
          </div>
          <span class="deco_line_right"></span>
        </div>
      </div>

      <div class="product_group product_group_01 wrapper">
        <div class="tabct_ca_box row">
          <div class="tabct_ca col-md-3 col-sm-4 col-xs-12">{{ $data['hot_trend_title'][0] }}</div>
          <div class="tabct_keyword col-md-9 col-sm-8 col-xs-12 cf">
            <p class="tabct_keyword_txt">Hot Keywords</p>
            <ul class="tabct_keyword_ul cf">
              
              @foreach ($data['hot_trend_keyword'][0] as $h => $ho)
                                  {{--
                tabct_keyword -> 핫키워드
                --}}
                @component('components.tabct_keyword')
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
                  @component('components.tabct_tab')
                  @slot('tabct_tab_img') common_tabct_tab_img.jpg @endslot
                  @slot('tabct_tab_txt') {{ $ho->name }} @endslot
                  @slot('tabct_tab_link') #woman_fashion @endslot
                  @endcomponent
                </li>
              @else
                <li>
                  @component('components.tabct_tab')
                  @slot('tabct_tab_img') common_tabct_tab_img.jpg @endslot
                  @slot('tabct_tab_txt') {{ $ho->name }} @endslot
                  @slot('tabct_tab_link') #woman_cosmetic @endslot
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
                @component('components.tabct_ct_woman')
                @slot('tabct_ct_link') woman_fashion @endslot
                @slot('tabct_ct_active') in active @endslot
                @endcomponent

                @component('components.tabct_ct_woman')
                @slot('tabct_ct_link') woman_cosmetic @endslot
                @endcomponent

                @component('components.tabct_ct_woman')
                @slot('tabct_ct_link') woman_denims @endslot
                @endcomponent

                @component('components.tabct_ct_woman')
                @slot('tabct_ct_link') woman_coolingcloth @endslot
                @endcomponent
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="product_group product_group_02 wrapper">
        <div class="tabct_ca_box row">
          <div class="tabct_ca col-md-3 col-sm-4 col-xs-12">{{ $data['hot_trend_title'][1] }}</div>
          <div class="tabct_keyword col-md-9 col-sm-8 col-xs-12 cf">
            <p class="tabct_keyword_txt">Hot Keywords</p>
            <ul class="tabct_keyword_ul cf">

              @foreach ($data['hot_trend_keyword'][1] as $h => $ho)
                {{--
                tabct_keyword -> 핫키워드
                --}}
                @component('components.tabct_keyword')
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
              @foreach ($data['hot_trend_value'][1] as $h => $ho)
                  @if ($h == 0)
                    <li class="active">
                      {{--
                      tabct_tab_img -> 탭 썸네일 이미지
                      tabct_tab_txt -> 탭 타이틀
                      tabct_tab_link -> 탭과 컨텐츠 영역 연결 아이디 값
                      --}}
                      @component('components.tabct_tab')
                      @slot('tabct_tab_img') common_tabct_tab_img.jpg @endslot
                      @slot('tabct_tab_txt') {{ $ho->name }} @endslot
                      @slot('tabct_tab_link') #man_fashion @endslot
                      @endcomponent
                    </li>
                  @else
                    <li>
                      @component('components.tabct_tab')
                      @slot('tabct_tab_img') common_tabct_tab_img.jpg @endslot
                      @slot('tabct_tab_txt') {{ $ho->name }} @endslot
                      @slot('tabct_tab_link') #man_cosmetic @endslot
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
                @component('components.tabct_ct_man')
                @slot('tabct_ct_link') man_fashion @endslot
                @slot('tabct_ct_active') in active @endslot
                @endcomponent

                @component('components.tabct_ct_man')
                @slot('tabct_ct_link') man_cosmetic @endslot
                @endcomponent

                @component('components.tabct_ct_man')
                @slot('tabct_ct_link') man_denims @endslot
                @endcomponent

                @component('components.tabct_ct_man')
                @slot('tabct_ct_link') man_coolingcloth @endslot
                @endcomponent
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="product_group product_group_03 wrapper">
        <div class="tabct_ca_box row">
          <div class="tabct_ca col-md-3 col-sm-4 col-xs-12">{{ $data['hot_trend_title'][2] }}</div>
          <div class="tabct_keyword col-md-9 col-sm-8 col-xs-12 cf">
            <p class="tabct_keyword_txt">Hot Keywords</p>
            <ul class="tabct_keyword_ul cf">

              @foreach ($data['hot_trend_keyword'][2] as $h => $ho)

                {{--
                tabct_keyword -> 핫키워드
                --}}
                @component('components.tabct_keyword')
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
              @foreach ($data['hot_trend_value'][2] as $h => $ho)
                @if ($h == 0)
                  <li class="active">
                    {{--
                      tabct_tab_img -> 탭 썸네일 이미지
                      tabct_tab_txt -> 탭 타이틀
                      tabct_tab_link -> 탭과 컨텐츠 영역 연결 아이디 값
                      --}}
                    @component('components.tabct_tab')
                    @slot('tabct_tab_img') common_tabct_tab_img.jpg @endslot
                    @slot('tabct_tab_txt') {{ $ho->name }} @endslot
                    @slot('tabct_tab_link') #travel_fashion @endslot
                    @endcomponent
                  </li>
                @else
                  <li>
                    @component('components.tabct_tab')
                    @slot('tabct_tab_img') common_tabct_tab_img.jpg @endslot
                    @slot('tabct_tab_txt') {{ $ho->name }} @endslot
                    @slot('tabct_tab_link') #travel_cosmetic @endslot
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
                @component('components.tabct_ct_travel')
                @slot('tabct_ct_link') travel_fashion @endslot
                @slot('tabct_ct_active') in active @endslot
                @endcomponent

                @component('components.tabct_ct_travel')
                @slot('tabct_ct_link') travel_cosmetic @endslot
                @endcomponent

                @component('components.tabct_ct_travel')
                @slot('tabct_ct_link') travel_denims @endslot
                @endcomponent

                @component('components.tabct_ct_travel')
                @slot('tabct_ct_link') travel_coolingcloth @endslot
                @endcomponent
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        <!-- main-banner { -->
      <div class="main_banner">
        <div class="main_banner_wr wrapper">
          <img src="https://2020aliseon.s3.ap-northeast-2.amazonaws.com{{ $data['section1']->photo }}" alt="" onclick="location.href='exhibition/keyword/list/id'" style="cursor: pointer;" >
        </div>
      </div>
      <!-- } main-banner -->
    <!-- } product(Tab&Contents) -->
</div>
  {{-- </div> --}}
  @endsection

  <script type="text/javascript" src="/libs/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>
 
  
  