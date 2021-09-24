@extends('layouts.common.seller_myshop_master')

@section('title') Dashboard @endsection

@section('contents')

<div class="main_title">
</div>
<div class="dash_row">
    <div class="col-6" style="margin-left:24px">
        <div class="dash_row">
            @component('components.myshop.dashboard-widget2')
            @slot('card_title') {{$data['general_setting']['general_setting_seller_body']['seller.body.totalincomecosale']}}  @endslot
            @slot('total')  2 @endslot
            @slot('today') 2  @endslot
            @slot('monthly') 2  @endslot
            @slot('yearly') 2  @endslot
            @slot('order_val2')
            2,333    
        @endslot
            @endcomponent
        </div>
        <div class="dash_row">
            <div class="dash_col-6" >
                <div class="card">
                    <div class="card-body">
                        <div class="order_card_wr">
                            <div class="card_title_wr">
                                
                                <h4 class="card-title">{{$data['general_setting']['general_setting_seller_body']['seller.body.incomethismonth']}}</h4>
                            </div> 
                
                            <div class="order_card_body">
                                <div class="dash_row card_widget_wr">            
                                    <div class="dash_col-5 card_widget_left">                       
                                       
                                    </div>
                                    <div class="col-7 align-self-center card_widget_right">
                                        <div class="dash_row">
                                            <div class="order_card_val_wr2">
                                                <span class="order_card_val2">2,333</span>                          
                                            </div>
                                        </div>
                                        <div class="dash_row">
                                            <div class="order_card_val_wr" style="margin-left: 10%">
                                                <span class="order_card_val">30,820</span>
                                                <span class="media_unit">AED</span>                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6" style="margin-left:24px">
                <div class="card">
                    <div class="card-body">
                        <div class="order_card_wr">
                            <div class="card_title_wr">
                                
                                <h4 class="card-title">{{$data['general_setting']['general_setting_seller_body']['seller.body.dividends']}}</h4>
                            </div> 
                
                            <div class="order_card_body">
                                <div class="dash_row card_widget_wr">            
                                    <div class="dash_col-5 card_widget_left">                       
                                       
                                    </div>
                                    <div class="col-7 align-self-center card_widget_right">
                                        <div class="dash_row">
                                            <div class="order_card_val_wr2">
                                                <span class="order_card_val2">2,333</span>                          
                                            </div>
                                        </div>
                                        <div class="dash_row">
                                            <div class="order_card_val_wr" style="margin-left: 10%">
                                                <span class="order_card_val">30,820</span>
                                                <span class="media_unit">AED</span>                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dash_row">
            @component('components.myshop.dashboard-widget')
            @slot('card_title') {{$data['general_setting']['general_setting_seller_body']['seller.body.inprocess']}}  @endslot
            @slot('order_percentage') @endslot
            @slot('order_val2') 2,333  @endslot
            @slot('order_val') 30,820  @endslot
            @slot('order_unit') AED  @endslot
            @endcomponent 
        </div>
    </div>
           <div class="col-6" style="margin-left:24px">
            <div class="card revanue_chart " style="height:607px">
                <div class="card-body">
                    <div class="card_title_link_wr cf">
                        <h4 class="card-title">{{$data['general_setting']['general_setting_seller_body']['seller.body.collabbeforeafter']}}</h4>
                    </div>

                    <div id="revanue-chart" class="apex-charts" dir="ltr" style="width:570px; height:400px"></div>
                </div>
            </div>       
        </div>
</div>

<div class="row row_box"style="margin-left: 24px">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="dash_col-6">
                    <div class="form-control padding_20 mb15" style="height: auto">
                        <div class="row">
                            <div class="col-2 txt_center tb_auto">
                                <img src="/images/common/admin_creator_thum01.png" class="seller_img">
                                <div>
                                    <span class="seller_span">EMMA</span>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="seller_info">
                                    <div class="info_row">
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Subscriber
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Product
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_row">
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Posting
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Sales
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_row">
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Sales(Previous)
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Dividend
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">10,000,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dash_col-6 ml15">
                    <div class="form-control padding_20 mb15" style="height: auto">
                        <div class="row">
                            <div class="col-2 txt_center tb_auto">
                                <img src="/images/common/admin_creator_thum01.png" class="seller_img">
                                <div>
                                    <span class="seller_span">EMMA</span>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="seller_info">
                                    <div class="info_row">
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Subscriber
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Product
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_row">
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Posting
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Sales
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_row">
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Sales(Previous)
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Dividend
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">10,000,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="dash_col-6">
                    <div class="form-control padding_20 mb15" style="height: auto">
                        <div class="row">
                            <div class="col-2 txt_center tb_auto">
                                <img src="/images/common/admin_creator_thum01.png" class="seller_img">
                                <div>
                                    <span class="seller_span">EMMA</span>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="seller_info">
                                    <div class="info_row">
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Subscriber
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Product
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_row">
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Posting
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Sales
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_row">
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Sales(Previous)
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Dividend
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">10,000,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dash_col-6 ml15">
                    <div class="form-control padding_20 mb15" style="height: auto">
                        <div class="row">
                            <div class="col-2 txt_center tb_auto">
                                <img src="/images/common/admin_creator_thum01.png" class="seller_img">
                                <div>
                                    <span class="seller_span">EMMA</span>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="seller_info">
                                    <div class="info_row">
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Subscriber
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Product
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_row">
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Posting
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Sales
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info_row">
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Sales(Previous)
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">20,000,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash_col-6 tb_auto">
                                            <div class="row">
                                                <div class="dash_col-6 tb_auto">
                                                    Dividend
                                                </div>
                                                <div class="dash_col-6 tb_auto">
                                                    <span class="seller_span">10,000,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
   



    <div class="row row_box" >
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{$data['general_setting']['general_setting_seller_body']['seller.body.salesreportperiod']}}</h4>

                    <div id="column_chart" class="apex-charts" dir="ltr" ></div>
                </div>
            </div>
        </div>
    </div>

@endsection

<!-- 잠시 안쓸거 -->
<script>
    
    /*
<div id="revanue-chart" class="apex-charts" dir="ltr"></div>
<div id="column_chart" class="apex-charts" dir="ltr"></div>
</script>
@section('script')
<script src="{{ URL::asset('libs/apexcharts/apexcharts.min.js')}}"></script>
    
<script src="{{ URL::asset('libs/pages/dashboard.init.js')}}"></script>
<script src="{{URL::asset('/libs/pages/apexcharts.init.js')}}"></script>

@endsection