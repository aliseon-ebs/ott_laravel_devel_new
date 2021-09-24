@extends('layouts.common.seller_myshop_master')

@section('title') Order List @endsection

@section('contents')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">     
                    <div class="row">
                        <div class="col-4 mr15">
                            <div class="card shadow">
                                <div class="card-body">
                                    
                                        <div class="card_title_wr">
                                            <h4 class="card-title">{{$data['general_setting']['general_setting_seller_body']['seller.body.requestcosale']}}</h4>
                                        </div> 
                            
                                        <div class="order_card_body order_card_whole">
                                            <div class="order_card_body_half">
                                                <p class="order_count_label">New</p>
                                                <p class="order_count_num2">45</p>
                                            </div>
                                            <div class="order_card_body_half">
                                                <p class="order_count_label">new</p>
                                                <p class="order_count_num2">30,820</p>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mr15">
                            <div class="card shadow">
                                <div class="card-body">
                                    
                                        <div class="card_title_wr">
                                            <h4 class="card-title">{{$data['general_setting']['general_setting_seller_body']['seller.body.collabinprocess']}} </h4>
                                        </div> 
                            
                                        <div class="order_card_body order_card_whole">
                                            <div class="order_card_body_half">
                                                <p class="order_count_label">New</p>
                                                <p class="order_count_num2">45</p>
                                            </div>
                                            <div class="order_card_body_half">
                                                <p class="order_count_label">new</p>
                                                <p class="order_count_num2">30,820</p>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mr15">
                            <div class="card shadow">
                                <div class="card-body">
                                    
                                        <div class="card_title_wr">
                                            <h4 class="card-title">{{$data['general_setting']['general_setting_seller_body']['seller.body.totalincome']}}</h4>
                                        </div> 
                            
                                        <div class="order_card_body order_card_whole">
                                            <div class="order_card_body_half">
                                                <p class="order_count_label">New</p>
                                                <p class="order_count_num2">45</p>
                                            </div>
                                            <div class="order_card_body_half">
                                                <p class="order_count_label">new</p>
                                                <p class="order_count_num2">30,820</p>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>               
                    <div class="search_wr">    

                        <div class="search_input">                    
                            <select class="form-control">
                                <option>Customer</option>
                                <option>Customer1</option>
                                <option>Customer2</option>
                            </select>
                        </div>  

                        <div class="search_input">    
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                        </div>
                        <div class="search_input">
                            <button type="button" class="btn_blue">Search</button>
                        </div>
                        <div class="search_input">
                        <button type="button" class="btn_gray">일주일</button>
                        <button type="button" class="btn_gray">3개월</button>
                        <button type="button" class="btn_gray">6개월</button>
                        <button type="button" class="btn_gray">1년</button>
                        </div>
                        <div class="search_input">
                            
                            <div class="search_input date_start"> 
                                <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                             </div>
                             ~
                            <div class="search_input date_end"> 
                              <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                            </div>
                        </div>
                        
                    </div>
                    @component('components.myshop.collabo-widget')
                        @slot('order_manage') 주문관리 @endslot
                        @slot('new_order') Collaboration List @endslot
                        @slot('ticket_subject') {{$data['general_setting']['general_setting_seller_body']['seller.body.ticketsubject']}} @endslot
                        @slot('in_process') {{$data['general_setting']['general_setting_seller_body']['seller.body.inprocess']}} @endslot
                        @slot('completed') {{$data['general_setting']['general_setting_seller_body']['seller.body.completed']}} @endslot
                        @slot('number') {{$data['general_setting']['general_setting_seller_body']['seller.body.number']}} @endslot
                        @slot('private_public') {{$data['general_setting']['general_setting_seller_body']['seller.body.privateorpublic']}} @endslot
                        @slot('sort') {{$data['general_setting']['general_setting_seller_body']['seller.body.sort']}} @endslot
                        @slot('startdate') {{$data['general_setting']['general_setting_seller_body']['seller.body.starteddate']}} @endslot
                        @slot('expiredate') {{$data['general_setting']['general_setting_seller_body']['seller.body.expireddate']}} @endslot
                        @slot('option') {{$data['general_setting']['general_setting_seller_body']['seller.body.option']}} @endslot
                        @slot('product') {{$data['general_setting']['general_setting_seller_body']['seller.body.product']}} @endslot
                        @slot('sales') {{$data['general_setting']['general_setting_seller_body']['seller.body.sales']}} @endslot
                        @slot('deposit') {{$data['general_setting']['general_setting_seller_body']['seller.body.deposit']}} @endslot
                        @slot('devidends') {{$data['general_setting']['general_setting_seller_body']['seller.body.devidends']}} @endslot
                        @slot('income') {{$data['general_setting']['general_setting_seller_body']['seller.body.income']}} @endslot
                        @slot('progress') {{$data['general_setting']['general_setting_seller_body']['seller.body.income']}} @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
 
    
    <div class="order_manage">
        <div class="be_modal_content be_order_manage_content">
            <div class="section_tit">
            <div class="order_block">
                <div class="modal_close_btn"></div>
            </div>
        </div>
            
<div class="form_wr">
    <div class="form-group row">
            <div class="collabo_pro_img">
                <img src="/images/product/product_img01.png" alt="">
            </div>
        
            <div class="collabo_pro_info">
                <div class="collabo_pro_name">Product name </div>
                <div class="row">
                    <li class="collabo_pro_option">Option: BASIC</li>
                    <li class="collabo_pro_price">Price: 28,300 AED</li>
                    <div class="collabo_pro_quantity">Quantity: 1ea</div>
                </div>
                <div class="row">
                    <li class="collabo_pro_date">DD-MM-YY</li>
                    <li class="collabo_pro_date">DD-MM-YY</li>
                    <div class="collabo_pro_status">Status</div>
                </div>

                <div class="row">  
                    <div class="col-10">
                        <input class="form_product" type="text" value="" id="example-text-input">
                    </div>
                    <div class="col-2">
                    <select class="cancel_return"> 
                        <option>Order cancel</option>
                        <option>Order return</option>
                        <option>송장 번호</option>
                    </select>
                    </div>
                </div>
                <div class="mt_10">
                    <div class="row">
                        <div class="col-2">
                            <div class="invoice_num">
                                Invoice Number
                            </div>
                        </div>
                        <div class="col-2">
                            <select class="cancel_return" style="margin-left:0px">
                                <option>Delivery</option>
                                <option>Order return</option>
                                <option>송장 번호</option>
                            </select> 
                        </div>
                        <div class="col-md-6">
                            <input class="form_product2" type="text" value="" id="example-text-input">
                        </div>
                        <div class="col-2">
                            <button class="apply">Apply</button>
                        </div>
                    </div>
                </div>
                
            </div>                                                  
    </div>
</div>
<div class="form_wr">
    <div class="form-group row">
        <div class="collabo_pro_img">
            <img src="/images/product/product_img01.png" alt="">
        </div>
        
        <div class="collabo_pro_info">
            <div class="collabo_pro_name">Product name </div>
                <div class="row">
                    <li class="collabo_pro_option">Option: BASIC</li>
                    <li class="collabo_pro_price">Price: 28,300 AED</li>
                <div class="collabo_pro_quantity">Quantity: 1ea</div>
            </div>
            <div class="row">
                <li class="collabo_pro_date">DD-MM-YY</li>
                <li class="collabo_pro_date">DD-MM-YY</li>
                <div class="collabo_pro_status">Status</div>
            </div>

            <div class="row">  
                <div class="col-10">
                    <input class="form_product" type="text" value="" id="example-text-input">
                </div>
                <div class="col-2">
                    <select class="cancel_return"> 
                        <option>Order cancel</option>
                        <option>Order return</option>
                        <option>송장 번호</option>
                    </select>
                </div>
            </div>
            <div class="mt_10">
                <div class="row">
                    <div class="col-2">
                        <div class="invoice_num">
                            Invoice Number
                        </div>
                    </div>
                    <div class="col-2" >
                        <select class="cancel_return" style="margin-left:0px">
                            <option>Delivery</option>
                            <option>Order return</option>
                            <option>송장 번호</option>
                        </select> 
                    </div>
                    <div class="col-md-6">
                        <input class="form_product2" type="text" value="" id="example-text-input">
                    </div>
                    <div class="col-2">
                        <button class="apply">Apply</button>
                    </div>
                </div>
            </div>
        </div>                                                  
    </div>
</div>
<div class="form_wr" style="border:none">
    <div class="form-group row">
        <div class="collabo_pro_blink"></div>
        <div class="collabo_pro_info">
            <div class="row">
                <div class="col-2">
                        <div class="invoice_num">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                            <span class="collabo_pro_name">Group Delivery</span>
                    </div>
                </div>
                <div class="col-2" >
                    <select class="cancel_return" style="margin-left:0px">
                        <option>Delivery</option>
                        <option>Order return</option>
                        <option>송장 번호</option>
                    </select> 
                </div>
                <div class="col-md-6">
                    <input class="form_product2" type="text" value="" id="example-text-input">
                </div>
                <div class="col-2">
                    <button class="apply">Apply</button>
                </div>
            </div>
        </div>
    </div> 
</div>
<div class="apply_cancel">
    <div class="cancel_btn">Cancel</div>
    <div class="apply_btn">Apply</div>
</div>


</div>
</div>



@endsection

