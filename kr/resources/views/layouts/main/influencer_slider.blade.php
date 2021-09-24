<div class="title_st01_box">
  <span class="title">{{ $data['general_setting']['general_setting_main_body']['main.body.influencerpick'] }}</span>
  <span class="descr">{{ $data['general_setting']['general_setting_main_body']['main.body.influencerpickdesc'] }}</span>
</div> 

<div class="influencer_list_box"  >
  <div class="influencer_list_ul influencer_slide_type" >

    @foreach ($data['influencer'] as $i => $ii)
            
        <div>
          <a href="">
          {{--
          influencer_name => 이름
          influencer_view => 조회수
          influencer_date => 등록일자
          influencer_back_img => 배경이미지
          influencer_profile_img => 프로필이미지

          influencer_seller_name => 판매자 이름
          influencer_product_img => 제품 이미지
          influencer_product_name => 제품명
          influencer_product_price => 제품 가격
          --}}
          @component('components.main.influencer_card')
          @slot('influencer_name') {{$data['influencer'][$i]->nickname}}  @endslot
          @slot('influencer_view') {{$data['influencer'][$i]->subscribe_to_cnt}} @endslot
          @slot('influencer_date') 3days ago  @endslot
          @slot('influencer_back_img') {{$data['influencer'][$i]->store_image}}   @endslot
          @slot('influencer_profile_img') {{$data['influencer'][$i]->profile}}   @endslot

          @slot('influencer_seller_name') Seller name   @endslot
          @slot('influencer_product_img') {{$data['influencer'][$i]->product_thumbnail}}   @endslot
          @slot('influencer_product_name') {{$data['influencer'][$i]->product_name}}  @endslot
          @slot('influencer_product_price') {{ "$"." ".$data['influencer'][$i]->product_price}} @endslot
          @endcomponent
          </a>
        </div>

    @endforeach
      
  </div>
</div>