<div class="flash_deal_inner" >
  <div class="flash_deal_title_wr">
    <h2>{{ $data['general_setting']['general_setting_main_body']['main.body.flashdeal'] }}</h2>
  </div>   
  
  <div class="wrapper">
    <div class="flash_deal_content">
      <div class="flash_deal_box_wr">
        <div class="flash_deal_box_type flash_deal_box_type3">

          @foreach ($data['flashdeal'] as $f => $ff)

            @component('components.main.flashdeal_card')
            @slot('flashdeal_img') {{$data['flashdeal'][$f]->photo}} @endslot
            @slot('flashdeal_name') {{$data['flashdeal'][$f]->name}} @endslot
            @slot('flashdeal_descr') DescriptionsDescriptionsDescriptionsDescriptionsDescriptions @endslot
            @slot('flashdeal_price') {{$data['flashdeal'][$f]->price}} @endslot
            @slot('flashdeal_sale_price') {{$data['flashdeal'][$f]->discount_price}} @endslot
            @slot('flashdeal_sale_percent') -30 @endslot

            @slot('flashdeal_sell_percent') 19 @endslot
            @slot('flashdeal_sell_qty') 23 @endslot
            @slot('flashdeal_sell_time') 01:34:55 @endslot
            @slot('flashdeal_sell_day') 00Days @endslot
            @slot('flashdeal_sell_status') On deal @endslot
            @slot('flashdeal_sell_status2')     @endslot
            @slot('flashdeal_sell_status3')     @endslot
            @endcomponent

          @endforeach
            {{--
            flashdeal_img => 제품 이미지
            flashdeal_name => 제품명
            flashdeal_descr => 제품 설명
            flashdeal_price => 제품 가격
            flashdeal_sale_price => 제품 할인 가격
            flashdeal_sale_percent => 제품 할인률(%)

            flashdeal_sell_percent => 판매율(%)
            flashdeal_sell_qty => 남은 수량
            flashdeal_sell_time => 남은 시간(hh:mm:ss)
            flashdeal_sell_day => 남은 일수(DD)
            flashdeal_sell_status => 판매상태
            --}}

        </div>
      </div> <!-- flash_deal_box_wr -->

    </div>
  </div>
</div> <!-- flash_deal_inner -->