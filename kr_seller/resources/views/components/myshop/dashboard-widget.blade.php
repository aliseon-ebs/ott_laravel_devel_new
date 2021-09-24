
<div class="card">
    <div class="card-body">
        <div class="order_card_wr">
            <div class="card_title_wr">
                <a href="" class="card-title-more">+</a>
                <h4 class="card-title">{{ $card_title }}</h4>
            </div> 

            <div class="order_card_body">
                <div class="dash_row card_widget_wr">            
                    <div class="dash_col-5 card_widget_left">                       
                        @isset($order_txt) <span class="mt-2">{{ $order_txt }}</span> @endisset
                        @isset($order_percentage) 
                            <p class="mb-0"><span class="text-success percent_plus"> <i class="mdi mdi-plus"></i> {{ $order_percentage }}  </span></p>
                            <p class="mb-0"><span class="text-success percent_minus"> <i class="mdi mdi-minus"></i> {{ $order_percentage }}  </span></p>
                        @endisset
                    </div>
                    <div class="col-7 align-self-center card_widget_right">
                        <div class="dash_row">
                            <div class="order_card_val_wr2">
                                <span class="order_card_val2">{{ $order_val2 }}</span>                          
                            </div>
                        </div>
                        <div class="dash_row">
                            <div class="order_card_val_wr">
                                <span class="order_card_val">{{ $order_val }}</span>
                                @isset($order_unit) <span class="media_unit">{{ $order_unit }}</span> @endisset                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

