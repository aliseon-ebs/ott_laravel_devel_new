<div class="event_card pdt_cont">
  <a href="/exhibition/keyword/list/id" class="event_box">
    <div class="event_card_img_wr">
			<img src="/images/exhibition/{{$event_thumb_img}}" alt="">
	</div>
		
    <div class="event_card_txt_wr @isset($event_down)event_card_down_wr @endisset">
			<p class="event_organizer">{{$event_organizer}}</p>
			<p class="event_name">{{$event_name}}</p>
			<p class="event_date">{{$event_date}}</p>
			@isset($event_down) 
			<button type="button" class="btn_eventDown"><img src="/images/event/event_down.png" alt=""></button> 			
			@endisset			
    </div>
	</a>
	@isset($event_down)
		<div class="down_complete">
			Download is complete
		</div>
	@endisset		
</div>