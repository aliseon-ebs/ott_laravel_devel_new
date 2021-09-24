@extends('layouts.common.seller_myshop_master')

@section('title') Order List @endsection

@section('contents')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">                    
                <div class="search_wr row">    
                    <div class="search_input">
                        <div class="search_input date_start"> 
                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                         </div>
                            
                        <div class="search_input date_end"> 
                          <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="col-3 mr15">
                        <button class="btn_white pl10">select<span class="store_dropdown bord_bl"></span></button>
                    </div>
                    <div class="col-3 mr15">
                        <input class="form_product" type="text" value="" id="example-text-input">
                    </div>
                    <button class="search_btn">
                        <img src="/images/main/FontAwsome (search).png">
                    </button>
                </div>
                <div class="order_card_wr">
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link  active" data-toggle="tab" href="#list" role="tab" aria-selected="true" >
                                {{$data['general_setting']['general_setting_seller_body']['seller.body.totalproductlist']}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#waiting" role="tab" aria-selected="true" >
                                {{$data['general_setting']['general_setting_seller_body']['seller.body.saleswaiting']}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#sales" role="tab" aria-selected="true" >
                                On sales 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#soldout" role="tab" aria-selected="true" >
                                {{$data['general_setting']['general_setting_seller_body']['seller.body.soldout']}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#suspend" role="tab" aria-selected="true" >
                                {{$data['general_setting']['general_setting_seller_body']['seller.body.suspensionofsale']}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#end" role="tab" aria-selected="true" >
                                {{$data['general_setting']['general_setting_seller_body']['seller.body.endofsale']}}

                            </a>
                        </li>
                    </ul>
                    @component('components.myshop.product-widget')
                    @slot('product_list') {{$data['general_setting']['general_setting_seller_middle']['seller.middle.productlist']}} @endslot
                    @slot('product_number') {{$data['general_setting']['general_setting_seller_body']['seller.body.productnumber']}} @endslot
                    @slot('product_name_brand') {{$data['general_setting']['general_setting_seller_body']['seller.body.productnamenbrand']}} @endslot
                    @slot('product_type_desc') {{$data['general_setting']['general_setting_seller_body']['seller.body.producttypedesc']}} @endslot
                    @slot('sales_period') {{$data['general_setting']['general_setting_seller_body']['seller.body.salesperiod']}} @endslot
                    @slot('base_currency') {{$data['general_setting']['general_setting_seller_body']['seller.body.basecurrency']}} @endslot
                    @slot('price_discount_rate') {{$data['general_setting']['general_setting_seller_body']['seller.body.pricediscountrate']}} @endslot
                    @slot('available_stock') {{$data['general_setting']['general_setting_seller_body']['seller.body.availablestock']}} @endslot
                    @slot('reviews') {{$data['general_setting']['general_setting_seller_body']['seller.body.reviews']}} @endslot
                    @slot('sales_amount') {{$data['general_setting']['general_setting_seller_body']['seller.body.salesamount']}} @endslot
                    @slot('collab_with_creator') {{$data['general_setting']['general_setting_seller_body']['seller.body.collabwithcreator']}} @endslot
                    @slot('sale_status') {{$data['general_setting']['general_setting_seller_body']['seller.body.salestatus']}} @endslot
                    @slot('management') {{$data['general_setting']['general_setting_seller_body']['seller.body.management']}} @endslot
                    @endcomponent
                </div>

            </div>
        </div>
    </div>
</div>





@endsection