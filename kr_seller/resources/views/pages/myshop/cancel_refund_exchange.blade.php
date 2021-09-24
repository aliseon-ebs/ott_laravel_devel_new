@extends('layouts.common.seller_myshop_master')

@section('title') Order List @endsection

@section('contents')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">                    
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
                    @component('components.myshop.order-widget')
                        @slot('order_manage') Cancel/Exchange Management @endslot
                        @slot('order_code') {{$data['general_setting']['general_setting_seller_body']['seller.body.ordercode']}} @endslot
                        @slot('order_status') {{$data['general_setting']['general_setting_seller_body']['seller.body.orderstatus']}} @endslot
                        @slot('customer_id') {{$data['general_setting']['general_setting_seller_body']['seller.body.customerid']}} @endslot
                        @slot('contact_name_number_email') {{$data['general_setting']['general_setting_seller_body']['seller.body.contactinfos']}} @endslot
                        {{-- @slot('payment_method') {{$data['general_setting']['general_setting_seller_body']['seller.body.paymentmethod']}} @endslot --}}
                        @slot('total_order_amount') {{$data['general_setting']['general_setting_seller_body']['seller.body.totalorderamount']}} @endslot
                        @slot('delivery_fee') {{$data['general_setting']['general_setting_seller_body']['seller.body.deliveryfee']}} @endslot
                        @slot('inquiry') {{$data['general_setting']['general_setting_seller_body']['seller.body.inquiry']}} @endslot
                        @slot('sales_amount') {{$data['general_setting']['general_setting_seller_body']['seller.body.salesamount']}} @endslot
                        @slot('order_management') {{$data['general_setting']['general_setting_seller_body']['seller.body.ordermanagement']}} @endslot
                    
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
            <div class="row">
                <div class="col-2">
                    <button class="btn_blue_mt">Not letting the item ship</button>
                    <button class="btn_blue_mt">Shipped out</button>
                </div>
                <div class="col-10">
                    <div class="form-group row" style="padding-left: 30px">
                        <div class="collabo_pro_img">
                            <img src="/images/product/product_img01.png" alt="">
                        </div>
                    
                        <div class="collabo_pro_info">
                            <div class="collabo_pro_name" style="margin-top: 20px">Product name </div>
                            <div class="collabo_pro_des">description description description description description description description description description description</div>
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
                        </div>                                                  
                    </div>
                </div>
            </div>

        </div> 
        <div class="form_wr">
            <div class="row">
                <div class="col-2">
                    <button class="btn_blue_mt">Not letting the item ship</button>
                    <button class="btn_blue_mt">Shipped out</button>
                </div>
                <div class="col-10">
                    <div class="form-group row" style="padding-left: 30px">
                        <div class="collabo_pro_img">
                            <img src="/images/product/product_img01.png" alt="">
                        </div>
                    
                        <div class="collabo_pro_info">
                            <div class="collabo_pro_name" style="margin-top: 20px">Product name </div>
                            <div class="collabo_pro_des">description description description description description description description description description description</div>
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
                        </div>                                                  
                    </div>
                </div>
            </div>

        </div> 
        <div class="form_wr">
            <div class="row">
                <div class="col-2">
                    <button class="btn_blue_mt">Not letting the item ship</button>
                    <button class="btn_blue_mt">Shipped out</button>
                </div>
                <div class="col-10">
                    <div class="form-group row" style="padding-left: 30px">
                        <div class="collabo_pro_img">
                            <img src="/images/product/product_img01.png" alt="">
                        </div>
                    
                        <div class="collabo_pro_info">
                            <div class="collabo_pro_name" style="margin-top: 20px">Product name </div>
                            <div class="collabo_pro_des">description description description description description description description description description description</div>
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
                        </div>                                                  
                    </div>
                </div>
            </div>

        </div> 
        <div class="apply_cancel">
            <div class="cancel_btn">Cancel</div>
            <div class="req_btn">Confirm</div>
        </div>
    </div>
</div>

<div class="order_modal_req">
        <div class="be_modal_content be_order_manage_content">
            <div class="section_tit">
                <div class="order_block">
                    <div class="modal_close_btn"></div>
                </div>
            </div>
            <div class="form_wr">
                <div class="form-group row">
                    <input type="radio" id="" class="collabo_radio" name="can_del">
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
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="row_mr">
                                            <input type="radio" id="" class="collabo_radio" name="can_del1"><span class="collabo_pro_name_reg1">Cancellation processing</span>
                                        </div>
                                        <div class="row_mr">
                                            <input type="radio" id="" class="collabo_radio" name="can_del1"><span class="collabo_pro_name_reg1">Cancellation processing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
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
                                        <select class="cancel_return" style="margin-left:0px">
                                            <option>Delivery</option>
                                            <option>Order return</option>
                                            <option>송장 번호</option>
                                        </select> 
                                    </div>
                                    <div class="col-md-8">
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
                    <input type="radio" id="" class="collabo_radio" name="can_del">
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
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="row_mr">
                                            <input type="radio" id="" class="collabo_radio" name="can_del1"><span class="collabo_pro_name_reg1">Cancellation processing</span>
                                        </div>
                                        <div class="row_mr">
                                            <input type="radio" id="" class="collabo_radio" name="can_del1"><span class="collabo_pro_name_reg1">Cancellation processing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
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
                                        <select class="cancel_return" style="margin-left:0px">
                                            <option>Delivery</option>
                                            <option>Order return</option>
                                            <option>송장 번호</option>
                                        </select> 
                                    </div>
                                    <div class="col-md-8">
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
                    <input type="radio" id="" class="collabo_radio" name="can_del">
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
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="row_mr">
                                            <input type="radio" id="" class="collabo_radio" name="can_del1"><span class="collabo_pro_name_reg1">Cancellation processing</span>
                                        </div>
                                        <div class="row_mr">
                                            <input type="radio" id="" class="collabo_radio" name="can_del1"><span class="collabo_pro_name_reg1">Cancellation processing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
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
                                        <select class="cancel_return" style="margin-left:0px">
                                            <option>Delivery</option>
                                            <option>Order return</option>
                                            <option>송장 번호</option>
                                        </select> 
                                    </div>
                                    <div class="col-md-8">
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
                <div class="apply_btn">Confirm</div>
            </div>
        </div> 

    </div>
</div>

</div>

@endsection

