<div class="card_type_G">
    <div class="big_slide_wr">
        @for($i=0; $i<=2; $i++)
        <div class="big_slide">
            <div class="card_type_G_box_wr pdt_cont_wr">
                {{--
                product_thumb_img => 제품 썸네일 이미지
                product_seller_name => 제품 판매자 이름
                product_name => 제품명
                product_price => 제품 가격
                product_distance => 제품(스토어) 거리
                --}}
                @component('components.crossborder.product_card')
                @slot('product_thumb_img') crossborder_img01.png   @endslot
                @slot('product_seller_name') Seller name   @endslot
                @slot('product_name') Product Name  @endslot
                @slot('product_price') 400AED  @endslot
                @endcomponent

                @component('components.crossborder.product_card')
                @slot('product_thumb_img') crossborder_img02.png   @endslot
                @slot('product_seller_name') Seller name   @endslot
                @slot('product_name') Product Name  @endslot
                @slot('product_price') 400AED  @endslot
                @endcomponent

                @component('components.crossborder.product_card')
                @slot('product_thumb_img') crossborder_img03.png   @endslot
                @slot('product_seller_name') Seller name   @endslot
                @slot('product_name') Product Name  @endslot
                @slot('product_price') 400AED  @endslot
                @endcomponent

                @component('components.crossborder.product_card')
                @slot('product_thumb_img') crossborder_img04.png   @endslot
                @slot('product_seller_name') Seller name   @endslot
                @slot('product_name') Product Name  @endslot
                @slot('product_price') 400AED  @endslot
                @endcomponent

                @component('components.crossborder.product_card')
                @slot('product_thumb_img') crossborder_img05.png   @endslot
                @slot('product_seller_name') Seller name   @endslot
                @slot('product_name') Product Name  @endslot
                @slot('product_price') 400AED  @endslot
                @endcomponent

                @component('components.crossborder.product_card')
                @slot('product_thumb_img') crossborder_img06.png   @endslot
                @slot('product_seller_name') Seller name   @endslot
                @slot('product_name') Product Name  @endslot
                @slot('product_price') 400AED  @endslot
                @endcomponent

                @component('components.crossborder.product_card')
                @slot('product_thumb_img') crossborder_img07.png   @endslot
                @slot('product_seller_name') Seller name   @endslot
                @slot('product_name') Product Name  @endslot
                @slot('product_price') 400AED  @endslot
                @endcomponent

                @component('components.crossborder.product_card')
                @slot('product_thumb_img') crossborder_img08.png   @endslot
                @slot('product_seller_name') Seller name   @endslot
                @slot('product_name') Product Name  @endslot
                @slot('product_price') 400AED  @endslot
                @endcomponent

                @component('components.crossborder.product_card')
                @slot('product_thumb_img') crossborder_img09.png   @endslot
                @slot('product_seller_name') Seller name   @endslot
                @slot('product_name') Product Name  @endslot
                @slot('product_price') 400AED  @endslot
                @endcomponent

                @component('components.crossborder.product_card')
                @slot('product_thumb_img') crossborder_img10.png   @endslot
                @slot('product_seller_name') Seller name   @endslot
                @slot('product_name') Product Name  @endslot
                @slot('product_price') 400AED  @endslot
                @endcomponent

                @component('components.crossborder.product_card')
                @slot('product_thumb_img') crossborder_img11.png   @endslot
                @slot('product_seller_name') Seller name   @endslot
                @slot('product_name') Product Name  @endslot
                @slot('product_price') 400AED  @endslot
                @endcomponent

                @component('components.crossborder.product_card')
                @slot('product_thumb_img') crossborder_img12.png   @endslot
                @slot('product_seller_name') Seller name   @endslot
                @slot('product_name') Product Name  @endslot
                @slot('product_price') 400AED  @endslot
                @endcomponent
            </div> <!-- card_type_G_box_wr_2page-->
        </div> <!-- big_slide -->
        @endfor
    </div> <!-- big_slide_wr -->
</div>