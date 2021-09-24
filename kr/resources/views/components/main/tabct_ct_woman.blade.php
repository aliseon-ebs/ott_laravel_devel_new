<div id="{{$tabct_ct_link}}" class="tab-pane fade @isset($tabct_ct_active) {{$tabct_ct_active}} @endisset ">
  <div class="tab_slide">
    @for ($i = 0; $i < 2; $i++)
      <div class="tab-content_inner row">
          {{--
          tabct_ct_img -> 컨텐츠카드 썸네일 이미지
          tabct_ct_seller -> 컨텐츠카드 판매자명
          tabct_ct_product_name -> 컨텐츠카드 제품명
          tabct_ct_product_price -> 컨텐츠카드 제품가격
          --}}
        @for ($ii = 1; $ii < 9; $ii++)
          @component('components.main.tabct_ct_card')
          @slot('tabct_ct_img') common_tabct_pdt_img0{{$ii}}.jpg   @endslot

          @slot('tabct_ct_product_name') Product Name   @endslot
          @slot('tabct_ct_product_price') 400AED   @endslot
          @endcomponent
        @endfor
      </div>
    @endfor
  </div>
</div>