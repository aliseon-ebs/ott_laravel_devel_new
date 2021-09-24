@extends('layouts.common.seller_myshop_master')

@section('title') Order List @endsection

@section('contents')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">                    
                    <div class="search_wr">    
                        <div class="row">
                            <div class="col-4 mr15">
                                <div class="card shadow">
                                    <div class="card-body">
                                        
                                            <div class="card_title_wr">
                                                <h4 class="card-title">{{$data['general_setting']['general_setting_seller_body']['seller.body.totalincome']}}</h4>
                                            </div> 
                                
                                            <div class="order_card_body order_card_whole">
                                                <div class="order_card_body_half">
                                                    
                                                </div>
                                                <div class="order_card_body_full">
                                                    
                                                    <p class="order_count_num2">30,820</p>
                                                    <span class="media_unit">AED</span>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mr15">
                                <div class="card shadow">
                                    <div class="card-body">
                                        
                                            <div class="card_title_wr">
                                                <h4 class="card-title">Collaboration in Process </h4>
                                            </div> 
                                
                                            <div class="order_card_body order_card_whole">
                                                <div class="order_card_body_half">
                                                    
                                                </div>
                                                <div class="order_card_body_full">
                                                    
                                                    <p class="order_count_num2">30,820</p>
                                                    <span class="media_unit">AED</span>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mr15">
                                <div class="card shadow">
                                    <div class="card-body">
                                        
                                            <div class="card_title_wr">
                                                <h4 class="card-title">Total Income</h4>
                                            </div> 
                                
                                            <div class="order_card_body order_card_whole">
                                                <div class="order_card_body_half">
                                                    
                                                </div>
                                                <div class="order_card_body_full">
                                                    
                                                    <p class="order_count_num2">30,820</p>
                                                    <span class="media_unit">AED</span>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="dash_row">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="order_card_wr">
                                            <div class="card_title_wr">
                                                
                                                <h4 class="card-title">Income of This Month</h4>
                                            </div> 
                                
                                            <div class="order_card_body">
                                                <div class="dash_row card_widget_wr">            
                                                    <div class="dash_col-5 card_widget_left">                       
                                                       
                                                    </div>
                                                    <div class="col-7 align-self-center card_widget_right">
                                                        
                                                        <div class="dash_row">
                                                            <div class="order_card_val_wr">
                                                                <span class="order_count_num2">30,820</span>
                                                                <span class="media_unit">AED</span>                       
                                                            </div>
                                                            <button class="store_btn_center">ALL</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apply_cancel">
                                                    <div class="save_btn">정산 신고</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>  
                    </div>
                    
                    @component('components.myshop.calculate-widget')
                        
                        @slot('new_order')
                        List of deposits to be processed
                    @endslot
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

