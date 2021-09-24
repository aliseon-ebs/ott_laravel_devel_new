<div class="card_type_G">
  <div class="big_slide_wr">
    @for($i=0; $i<=2; $i++) 
    <div class="big_slide">
      <div class="card_type_G_box_wr pdt_cont_wr">
        {{--
          event_thumb_img => 이벤트 썸네일 이미지
          event_organizer => 이벤트 주최자
          event_name => 이벤트명
          event_date => 이벤트 기간
          event_down => 이벤트 쿠폰 다운로드
          --}}
        @component('components.eventcoupon.event_card')
        @slot('event_thumb_img') event_img01.jpg @endslot
        @slot('event_organizer') ALISEON Official @endslot
        @slot('event_name') Event Name @endslot
        @slot('event_date') 03, Feb, 2020 15:00 @endslot
        @slot('event_down') # @endslot
        @endcomponent

        @component('components.eventcoupon.event_card')
        @slot('event_thumb_img') event_img02.jpg @endslot
        @slot('event_organizer') ALISEON Official @endslot
        @slot('event_name') Event Name @endslot
        @slot('event_date') 03, Feb, 2020 15:00 @endslot
        @slot('event_down') # @endslot
        @endcomponent

        @component('components.eventcoupon.event_card')
        @slot('event_thumb_img') event_img03.jpg @endslot
        @slot('event_organizer') ALISEON Official @endslot
        @slot('event_name') Event Name @endslot
        @slot('event_date') 03, Feb, 2020 15:00 @endslot
        @slot('event_down') # @endslot
        @endcomponent

        @component('components.eventcoupon.event_card')
        @slot('event_thumb_img') event_img04.jpg @endslot
        @slot('event_organizer') ALISEON Official @endslot
        @slot('event_name') Event Name @endslot
        @slot('event_date') 03, Feb, 2020 15:00 @endslot
        @slot('event_down') # @endslot
        @endcomponent

        @component('components.eventcoupon.event_card')
        @slot('event_thumb_img') event_img01.jpg @endslot
        @slot('event_organizer') ALISEON Official @endslot
        @slot('event_name') Event Name @endslot
        @slot('event_date') 03, Feb, 2020 15:00 @endslot
        @slot('event_down') # @endslot
        @endcomponent

        @component('components.eventcoupon.event_card')
        @slot('event_thumb_img') event_img02.jpg @endslot
        @slot('event_organizer') ALISEON Official @endslot
        @slot('event_name') Event Name @endslot
        @slot('event_date') 03, Feb, 2020 15:00 @endslot
        @slot('event_down') # @endslot
        @endcomponent

        @component('components.eventcoupon.event_card')
        @slot('event_thumb_img') event_img03.jpg @endslot
        @slot('event_organizer') ALISEON Official @endslot
        @slot('event_name') Event Name @endslot
        @slot('event_date') 03, Feb, 2020 15:00 @endslot
        @slot('event_down') # @endslot
        @endcomponent

        @component('components.eventcoupon.event_card')
        @slot('event_thumb_img') event_img04.jpg @endslot
        @slot('event_organizer') ALISEON Official @endslot
        @slot('event_name') Event Name @endslot
        @slot('event_date') 03, Feb, 2020 15:00 @endslot
        @slot('event_down') # @endslot
        @endcomponent  
      </div> <!-- card_type_G_box_wr_2page-->
  </div> <!-- big_slide -->
  @endfor
</div> <!-- big_slide_wr -->
</div>