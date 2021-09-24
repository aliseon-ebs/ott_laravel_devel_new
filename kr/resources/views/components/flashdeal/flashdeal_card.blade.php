<div class="flash_deal_box pdt_cont">
    <div class="flash_deal_box_inner">
      <a href="/atrend/view/id">
      <span class="mark_sale">{{$flashdeal_sale_percent}}%</span>

      <div class="flash_deal_box_img_wr">
          <img src="/images/flashdeal/{{$flashdeal_img}}" alt="">
      </div>

      <div class="flash_deal_box_name_wr">
          <p class="flash_deal_box_name">{{$flashdeal_name}}</p>
      </div>

      <div class="flash_deal_box_price_wr">
          <div class="flash_deal_box_price">
              <p class="flash_deal_box_price_sale">$ {{$flashdeal_price}}</p>
              <p class="flash_deal_box_price_ori">$ {{$flashdeal_sale_price}}</p>
          </div>
      </div>

      <div class="flash_deal_box_txt_wr">
          <p class="flash_deal_box_txt">{{$flashdeal_descr}}</p>
      </div>

      <div class="flash_deal_box_bar_wr">
          <div class="flash_deal_box_bar_txt cf">
              <p class="flash_deal_box_bar_p1">{{$flashdeal_sell_percent}}% already Claimed</p>
              <p class="flash_deal_box_bar_p2">Available : {{$flashdeal_sell_qty}}</p>
          </div>
          <div class="flash_deal_box_bar">
              <span class="flash_deal_box_bar_act"></span>
          </div>
          
      </div>

      <div class="flash_deal_box_end_wr">
          <p class="flash_deal_box_end_txt01">
              Deal ends in : 
              <span class="flash_deal_box_end_time">{{$flashdeal_sell_time}}</span>
              <span class="flash_deal_box_end_days">{{$flashdeal_sell_day}}</span>
          </p>
          <p class="flash_deal_box_end_txt02_ondeal">{{$flashdeal_sell_status}}</p>
          <p class="flash_deal_box_end_txt02_expired">{{$flashdeal_sell_status2}}</p>
          <p class="flash_deal_box_end_txt02_soldout">{{$flashdeal_sell_status3}}</p>
      </div>
      </a>
    </div>
</div> <!-- flash_deal_box01 -->