
<div class="card">
    <div class="card-body">
        <div class="order_card_wr">
            <div class="card_title_wr">
                <a href="" class="card-title-more">+</a>
                <h4 class="card-title">{{ $card_title }}</h4>
            </div> 
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#total{{$total}}" role="tab" aria-selected="true" >
                        Total
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#today{{$today}}" role="tab" aria-selected="true" >
                        Today
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#monthly{{$monthly}}" role="tab" aria-selected="true" >
                        Monthly
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#yearly{{$yearly}}" role="tab" aria-selected="true" >
                        Yearly
                    </a>
                </li>
            </ul>
            <div class="tab-content p3 text-muted">
                <div class="tab-pane active" id="total{{$total}}">
                    1
                </div>
                <div class="tab-pane" id="today{{$today}}">
                    2
                </div>
                <div class="tab-pane" id="monthly{{$monthly}}">
                    3
                </div>
                <div class="tab-pane" id="yearly{{$yearly}}">
                    4
                </div>
            </div>
            <div class="order_card_val_wr2">
                <span class="order_card_val2">{{ $order_val2 }}</span>                          
            </div>
        </div>
    </div>
</div>

