<div class="category_slider">
  {{--
  category_item_link => 카테고리 링크
  category_item_img => 카테고리 이미지
  category_item_img => 카테고리 타이틀
  --}}
  @component('components.o2o.category_card')
  @slot('category_item_link') category/list/id  @endslot
  @slot('category_item_img') main_category_sl_beauty.jpg  @endslot
  @slot('category_item_txt') Beauty  @endslot
  @endcomponent

  @component('components.o2o.category_card')
  @slot('category_item_link') category/list/id  @endslot
  @slot('category_item_img') main_category_sl_life.jpg  @endslot
  @slot('category_item_txt') Life  @endslot
  @endcomponent

  @component('components.o2o.category_card')
  @slot('category_item_link') category/list/id  @endslot
  @slot('category_item_img') main_category_sl_fashion.jpg  @endslot
  @slot('category_item_txt') Fashion  @endslot
  @endcomponent

  @component('components.o2o.category_card')
  @slot('category_item_link') category/list/id  @endslot
  @slot('category_item_img') main_category_sl_kids.jpg  @endslot
  @slot('category_item_txt') Kids  @endslot
  @endcomponent

  @component('components.o2o.category_card')
  @slot('category_item_link') category/list/id  @endslot
  @slot('category_item_img') main_category_sl_food.jpg  @endslot
  @slot('category_item_txt') Food  @endslot
  @endcomponent

  @component('components.o2o.category_card')
  @slot('category_item_link') category/list/id  @endslot
  @slot('category_item_img') main_category_sl_sports.jpg  @endslot
  @slot('category_item_txt') Sports  @endslot
  @endcomponent

  @component('components.o2o.category_card')
  @slot('category_item_link') category/list/id  @endslot
  @slot('category_item_img') main_category_sl_health.jpg  @endslot
  @slot('category_item_txt') Health  @endslot
  @endcomponent

  @component('components.o2o.category_card')
  @slot('category_item_link') category/list/id  @endslot
  @slot('category_item_img') main_category_sl_appliance.jpg  @endslot
  @slot('category_item_txt') Appliance  @endslot
  @endcomponent

  @component('components.o2o.category_card')
  @slot('category_item_link') category/list/id  @endslot
  @slot('category_item_img') main_category_sl_sports.jpg  @endslot
  @slot('category_item_txt') Sports  @endslot
  @endcomponent
</div>