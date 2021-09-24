@extends('layouts.common.seller_myshop_master')

@section('title') Bulk Uplaod @endsection

@section('contents')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">  
                <h4 span class="card_title" style="color: #3E56BA">{{$data['general_setting']['general_setting_seller_body']['seller.body.bulkupload']}}</h4>
                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller">{{$data['general_setting']['general_setting_seller_body']['seller.body.downloadnuploadexcelform']}}</label>
                        <div class="col-5 tb_auto">
                            <select class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="Choose Product category">
                                <option disabled selected>Choose Product category</option>
                                <option> dd</option>
                            </select>
                        </div>
                        <button class="store_btn_center">{{$data['general_setting']['general_setting_seller_body']['seller.body.download']}}</button>
                    </div>
                </div>
                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.uploadexcelandimage']}}</label>
                        <button class="store_btn_center" id="cate_product">{{$data['general_setting']['general_setting_seller_body']['seller.body.upload']}}</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="row cate_product">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="card-content" style="border-bottom: 1px solid #d3d3d3;">
                    <h4 span class="card_title" style="color: #3E56BA">Bulk Upload Check</h4>
                </div>               
                @component('components.myshop.bulk_upload_check')
                {{-- @slot('product_list') {{$data['general_setting']['general_setting_seller_middle']['seller.middle.productlist']}} @endslot --}}
                @slot('product_number') {{$data['general_setting']['general_setting_seller_body']['seller.body.productnumber']}} @endslot
                @slot('product_name_brand') {{$data['general_setting']['general_setting_seller_body']['seller.body.productnamenbrand']}} @endslot
                @slot('product_type_desc') {{$data['general_setting']['general_setting_seller_body']['seller.body.producttypedesc']}} @endslot
                @slot('sales_period') {{$data['general_setting']['general_setting_seller_body']['seller.body.salesperiod']}} @endslot
                @slot('base_currency') {{$data['general_setting']['general_setting_seller_body']['seller.body.basecurrency']}} @endslot
                @slot('price_discount_rate') {{$data['general_setting']['general_setting_seller_body']['seller.body.pricediscountrate']}} @endslot
                @slot('sales_amount') {{$data['general_setting']['general_setting_seller_body']['seller.body.salesamount']}} @endslot
                @slot('sale_status') {{$data['general_setting']['general_setting_seller_body']['seller.body.salestatus']}} @endslot
                @slot('management') {{$data['general_setting']['general_setting_seller_body']['seller.body.management']}} @endslot
                @endcomponent
            </div>
        </div>
    </div>

</div>



@endsection