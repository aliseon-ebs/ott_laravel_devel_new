<div class="card_type_G">
  <div class="big_slide_wr">
    @for($i=0; $i<=2; $i++) <div class="big_slide">
      <div class="card_type_G_box_wr pdt_cont_wr">
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
          @component('components.flashdeal.flashdeal_card')
          @slot('flashdeal_img') flash_img01.png @endslot
          @slot('flashdeal_name') Product Name @endslot
          @slot('flashdeal_descr') DescriptionsDescriptionsDescriptionsDescriptionsDescriptions @endslot
          @slot('flashdeal_price') 79,00 @endslot
          @slot('flashdeal_sale_price') 99,00 @endslot
          @slot('flashdeal_sale_percent') -30 @endslot

          @slot('flashdeal_sell_percent') 19 @endslot
          @slot('flashdeal_sell_qty') 23 @endslot
          @slot('flashdeal_sell_time') 01:34:55 @endslot
          @slot('flashdeal_sell_day') 00Days @endslot
          @slot('flashdeal_sell_status') On deal @endslot
          @slot('flashdeal_sell_status2')     @endslot
          @slot('flashdeal_sell_status3')     @endslot
          @endcomponent

          @component('components.flashdeal.flashdeal_card')
          @slot('flashdeal_img') flash_img01.png @endslot
          @slot('flashdeal_name') Product Name @endslot
          @slot('flashdeal_descr') DescriptionsDescriptionsDescriptionsDescriptionsDescriptions @endslot
          @slot('flashdeal_price') 79,00 @endslot
          @slot('flashdeal_sale_price') 99,00 @endslot
          @slot('flashdeal_sale_percent') -30 @endslot

          @slot('flashdeal_sell_percent') 19 @endslot
          @slot('flashdeal_sell_qty') 23 @endslot
          @slot('flashdeal_sell_time') 01:34:55 @endslot
          @slot('flashdeal_sell_day') 00Days @endslot
          @slot('flashdeal_sell_status')      @endslot
          @slot('flashdeal_sell_status2') Expired @endslot
          @slot('flashdeal_sell_status3')     @endslot
          @endcomponent

          @component('components.flashdeal.flashdeal_card')
          @slot('flashdeal_img') flash_img01.png @endslot
          @slot('flashdeal_name') Product Name @endslot
          @slot('flashdeal_descr') DescriptionsDescriptionsDescriptionsDescriptionsDescriptions @endslot
          @slot('flashdeal_price') 79,00 @endslot
          @slot('flashdeal_sale_price') 99,00 @endslot
          @slot('flashdeal_sale_percent') -30 @endslot

          @slot('flashdeal_sell_percent') 19 @endslot
          @slot('flashdeal_sell_qty') 23 @endslot
          @slot('flashdeal_sell_time') 01:34:55 @endslot
          @slot('flashdeal_sell_day') 00Days @endslot
          @slot('flashdeal_sell_status')      @endslot
          @slot('flashdeal_sell_status2')  @endslot
          @slot('flashdeal_sell_status3')  Sold Out   @endslot
          @endcomponent

          @component('components.flashdeal.flashdeal_card')
          @slot('flashdeal_img') flash_img01.png @endslot
          @slot('flashdeal_name') Product Name @endslot
          @slot('flashdeal_descr') DescriptionsDescriptionsDescriptionsDescriptionsDescriptions @endslot
          @slot('flashdeal_price') 79,00 @endslot
          @slot('flashdeal_sale_price') 99,00 @endslot
          @slot('flashdeal_sale_percent') -30 @endslot

          @slot('flashdeal_sell_percent') 19 @endslot
          @slot('flashdeal_sell_qty') 23 @endslot
          @slot('flashdeal_sell_time') 01:34:55 @endslot
          @slot('flashdeal_sell_day') 00Days @endslot
          @slot('flashdeal_sell_status') On deal @endslot
          @slot('flashdeal_sell_status2')     @endslot
          @slot('flashdeal_sell_status3')     @endslot
          @endcomponent

          @component('components.flashdeal.flashdeal_card')
          @slot('flashdeal_img') flash_img01.png @endslot
          @slot('flashdeal_name') Product Name @endslot
          @slot('flashdeal_descr') DescriptionsDescriptionsDescriptionsDescriptionsDescriptions @endslot
          @slot('flashdeal_price') 79,00 @endslot
          @slot('flashdeal_sale_price') 99,00 @endslot
          @slot('flashdeal_sale_percent') -30 @endslot

          @slot('flashdeal_sell_percent') 19 @endslot
          @slot('flashdeal_sell_qty') 23 @endslot
          @slot('flashdeal_sell_time') 01:34:55 @endslot
          @slot('flashdeal_sell_day') 00Days @endslot
          @slot('flashdeal_sell_status')      @endslot
          @slot('flashdeal_sell_status2') Expired @endslot
          @slot('flashdeal_sell_status3')     @endslot
          @endcomponent

          @component('components.flashdeal.flashdeal_card')
          @slot('flashdeal_img') flash_img01.png @endslot
          @slot('flashdeal_name') Product Name @endslot
          @slot('flashdeal_descr') DescriptionsDescriptionsDescriptionsDescriptionsDescriptions @endslot
          @slot('flashdeal_price') 79,00 @endslot
          @slot('flashdeal_sale_price') 99,00 @endslot
          @slot('flashdeal_sale_percent') -30 @endslot

          @slot('flashdeal_sell_percent') 19 @endslot
          @slot('flashdeal_sell_qty') 23 @endslot
          @slot('flashdeal_sell_time') 01:34:55 @endslot
          @slot('flashdeal_sell_day') 00Days @endslot
          @slot('flashdeal_sell_status')      @endslot
          @slot('flashdeal_sell_status2')  @endslot
          @slot('flashdeal_sell_status3')  Sold Out   @endslot
          @endcomponent
      </div> <!-- card_type_G_box_wr_2page-->
  </div> <!-- big_slide -->
  @endfor
</div> <!-- big_slide_wr -->
</div>