@extends('layouts.common.seller_myshop_master')

@section('title') Order List @endsection

@section('contents')

{{ AUTH::USER() }}

<link rel="stylesheet" type="text/css" href="/libs/dropzone/dropzone.min.css">
<link href="{{URL::asset('/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />

<form action="{{ route('myshop_product_upload') }}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">  
                    <h4 span class="card_title" style="color: #3E56BA">{{$data['general_setting']['general_setting_seller_body']['seller.body.productupload']}}</h4>
                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.productmainimage']}}</label>
                        </div>
                        <div class="form-group row">
                            <div class="thumb-box_3">
                                <img src="/images/main/FontAwsome(plus).png">
                            </div>
                            <div class="thumb-box_3">
                                <img src="/images/main/FontAwsome(plus).png">
                            </div>
                            <div class="thumb-box_3">
                                <img src="/images/main/FontAwsome(plus).png">
                            </div>
                            <div class="thumb-box_3">
                                <img src="/images/main/FontAwsome(plus).png">
                            </div>
                            <div class="thumb-box_3">
                                <img src="/images/main/FontAwsome(plus).png">
                            </div>
                        </div>
                        <div class="apply_cancel">
                            <div class="save_btn">Send Files</div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.category']}}</label>
                        </div>

                        <div class="order_card_wr">
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link  active" data-toggle="tab" href="#list" role="tab" aria-selected="true" name="product_cate">
                                        {{$data['general_setting']['general_setting_seller_body']['seller.body.categoryselect']}}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#waiting" role="tab" aria-selected="true" >
                                        {{$data['general_setting']['general_setting_seller_body']['seller.body.categorysearch']}}
                                    </a>
                                </li>
                            
                                <label style="margin-top: auto;margin-bottom:auto">
                                    <input type="radio" name="product_cate" class="radio_mr" >직접 입력
                                </label>
                        </ul>
                        <div class="thumb-box_4">
                            <div class="row">
                                    <div class="col-9 mr15 mt10">
                                        <input class="form_product" type="text" value="" id="example-text-input">
                                    </div>
                                    <button class="search_btn mt10">
                                        <img src="/images/main/FontAwsome (search).png">
                                    </button>
                            </div>
                            </div>
                        <div class="cate_menu mt10">
                            <span class="cate_tit">{{$data['general_setting']['general_setting_seller_body']['seller.body.category']}}</span>
        
                            <ul class="cate_menu_ul">
                                <li class="cate_menu_li">
                                    1dept
                                </li>
                                <li class="cate_menu_li">
                                    2dept
                                </li>
                                <li class="cate_menu_li">
                                    3dept
                                </li>
                                <li class="cate_menu_li">
                                    4dept
                                </li>
                                <li class="cate_menu_li">
                                    5dept
                                </li>
                            </ul>
                        </div>
        
                        <div class="cate_sub_menu">
                            <div class="row">
                            <ul class="cate_sub_menu_ul1">
                                @foreach ($data['category'] as $c1 => $ca1)
                                    @if (strpos($ca1->parent, '.') == false)
                                        <li class="cate_sub_menu_li" id="{{ $ca1->parent }}">
                                            {{ $ca1->name }}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
        
                            <ul class="cate_sub_menu_ul2">
                                <li class="cate_sub_menu_li cate_sub_act">
                                    Golf
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Golf
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Golf
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Golf
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Golf
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Golf
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Golf
                                </li>
                            </ul>
        
                            <ul class="cate_sub_menu_ul3">
                                <li class="cate_sub_menu_li cate_sub_act">
                                    Sports T-shirt
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Sports T-shirt
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Sports T-shirt
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Sports T-shirt
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Sports T-shirt
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Sports T-shirt
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Sports T-shirt
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Sports T-shirt
                                </li>
                            </ul>
        
                            <ul class="cate_sub_menu_ul4">
                                <li class="cate_sub_menu_li cate_sub_act">
                                    Swimsuit
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Swimsuit
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Swimsuit
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Swimsuit
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Swimsuit
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Swimsuit
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Swimsuit
                                </li>
                            </ul>
                            <ul class="cate_sub_menu_ul5">
                                <li class="cate_sub_menu_li cate_sub_act">
                                    Swimsuit
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Swimsuit
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Swimsuit
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Swimsuit
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Swimsuit
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Swimsuit
                                </li>
                                <li class="cate_sub_menu_li ">
                                    Swimsuit
                                </li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 span class="card_title" style="color: #3E56BA">{{$data['general_setting']['general_setting_seller_body']['seller.body.productinfo']}}</h4>
                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.code']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label" >Code Number</label>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.emailaddress']}}</label>
                            <input class="form-control" type="text"  id="example-text-input">
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.contactnumber']}}</label>
                            <select class="btn_blue_seller"> 
                                <option>+82 </option>
                                <option> 2</option>
                                <option> 2</option>
                            </select>
                            <input class="form-control" type="text"  id="example-text-input">
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.emailaddress']}}</label>
                            <input class="form-control" type="text"  id="example-text-input">
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.emailaddress']}}</label>
                            <input class="form-control" type="text"  id="example-text-input">
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.deliverysetting']}}</label>
                                <label for="example-text-input" class="col-md-2 col-form-label" ><input type="radio" name="oversea" class="radio_mr">{{$data['general_setting']['general_setting_seller_body']['seller.body.available']}}</label>
                                <label for="example-text-input" class="col-md-2 col-form-label"  ><input type="radio" name="oversea" class="radio_mr">{{$data['general_setting']['general_setting_seller_body']['seller.body.notavailable']}}</label>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.salesperiod']}}</label>
                            <div class="search_input date_start"> 
                                <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                            </div>
                            <span style="font-size: 25px" class="mr15 ml15">-</span>
                            <div class="search_input date_end"> 
                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.status']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label" ><input type="radio" name="oversea" class="radio_mr">{{$data['general_setting']['general_setting_seller_body']['seller.body.available']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label"  ><input type="radio" name="oversea" class="radio_mr">{{$data['general_setting']['general_setting_seller_body']['seller.body.notavailable']}}</label>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.collabsetting']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label" ><input type="radio" name="oversea" class="radio_mr">Possible</label>
                            <label for="example-text-input" class="col-md-2 col-form-label"><input type="radio" name="oversea" class="radio_mr">Impossible</label>
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" style="flex: 0 0 13%"> {{$data['general_setting']['general_setting_seller_body']['seller.body.revenueshare']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label" ><input type="radio" name="oversea" class="radio_mr">Possible to Offer</label>
                            <label for="example-text-input" class="col-md-2 col-form-label"  ><input type="radio" name="oversea" class="radio_mr">Profit per piece</label>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.collabsetting']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label" style="padding: 0">                        
                                <select class="btn_blue_seller" id="Private"> 
                                <option>Mega</option>
                                <option>VIP</option>
                                <option>Superb</option>
                                <option>Creator</option>
                            </select></label>
                            <label for="example-text-input" class="col-md-2 col-form-label"><input type="radio" name="oversea" class="radio_mr">Impossible</label>
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" style="flex: 0 0 13%">{{$data['general_setting']['general_setting_seller_body']['seller.body.periodsetting']}}</label>
                            <div class="search_input date_start"> 
                                <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                            </div>
                            <span style="font-size: 25px" class="mr15 ml15">-</span>
                            <div class="search_input date_end"> 
                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 span class="card_title" style="color: #3E56BA">{{$data['general_setting']['general_setting_seller_body']['seller.body.pricenstockamount']}}</h4>
                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.basecurrency']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label pd0" >                            
                                <th class="th_base"><button class="btn_blue_sm " style="width:70px">AED<span class="store_dropdown"></span></button></th>
                            </label>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.productprice']}}</label>
                            <input class="form-control" type="text"  id="example-text-input">
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.rateofdiscount']}}</label>
                            <label for="example-text-input" class="col-6 col-form-label" >
                            <input type="radio" name="oversea" class="radio_mr">Apply Discount
                            <input type="radio" name="oversea" class="radio_mr ml15">Not Discount
                            <input type="radio" name="oversea" class="radio_mr ml15">100 AED
                            <input type="radio" name="oversea" class="radio_mr ml15">10%</label>

                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.totalstock']}}</label>
                            <div class="col-6">
                                <input class="form-control" type="text"  id="example-text-input">
                            </div>
                            <span class="cate_tip tb_auto ml15">{{$data['general_setting']['general_setting_seller_body']['seller.body.totalstockdesc']}}</span>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.remainnotification']}}</label>
                            <div class="col-6">
                                <input class="form-control" type="text"  id="example-text-input">
                            </div>
                            <span class="cate_tip tb_auto ml15">{{$data['general_setting']['general_setting_seller_body']['seller.body.remainnotificationdesc']}}</span>
                        </div>
                    </div>



                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >*상품고시</label>
                            <button class="btn_blue_seller" id="cate_product">{{$data['general_setting']['general_setting_seller_body']['seller.body.categoryproducts']}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 span class="card_title" style="color: #3E56BA">{{$data['general_setting']['general_setting_seller_body']['seller.body.pricenstockamount']}}</h4>
                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.basecurrency']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label pd0" >                            
                                <th class="th_base"><button class="btn_blue_sm " style="width:70px">AED<span class="store_dropdown"></span></button></th>
                            </label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row cate_product">
        <div class="col-12">
            <div class="card" style="margin-bottom:0">
                <div class="card-body">
                    <h4 span class="card_title" style="color: #3E56BA">{{$data['general_setting']['general_setting_seller_body']['seller.body.option']}}</h4>
                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >                      
                                <input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="사이즈">
                            </label>
                            <div class="col-calc-8 ml15 mr15">
                                <input class="form-control" type="text"  id="example-text-input">
                            </div>
                            <label for="example-text-input" class="col-form-label" id ="seller" style="display:flex;justify-content:space-between">      
                                <button class="product_save mr15">{{$data['general_setting']['general_setting_seller_body']['seller.body.optionsave']}}</button>
                                <button class="product_add">{{$data['general_setting']['general_setting_seller_body']['seller.body.optionadd']}}</button> 
                            </label>
                        </div>
                    </div>   
                    
                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >                      
                                <input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="색상">
                            </label>
                            <div class="option_col col-form-label ml15 mr15">
                                <input class="form-control" type="text"  id="example-text-input">
                            </div>
                        </div>
                    </div>   

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >                      
                                <input class="form-control product_placeholder" type="text"  id="example-text-input"  >
                            </label>
                            <div class="option_col col-form-label ml15 mr15">
                                <input class="form-control" type="text"  id="example-text-input">
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        

        <form class="repeater" enctype="multipart/form-data">
            <div data-repeater-list="group-a">
                <div class="apply_cancel pd0">
                    <div data-repeater-create style="cursor: pointer;">
                        <img src="/images/main/plus_btn.png">
                    </div>
                </div>
                <div data-repeater-item class="row none">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" style="position: relative">
                                <div data-repeater-delete class="modal_close_btn">
                            
                                </div>
                                <h4 span class="card_title" style="color: #3E56BA">{{$data['general_setting']['general_setting_seller_body']['seller.body.option']}}</h4>
                                <div class="card-content">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >                      
                                            <input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="사이즈">
                                        </label>
                                        <div class="col-calc-8 ml15 mr15">
                                            <input class="form-control" type="text"  id="example-text-input">
                                        </div>
                                        <label for="example-text-input" class="col-form-label" id ="seller" style="display:flex;justify-content:space-between">      
                                            <button class="product_save mr15">{{$data['general_setting']['general_setting_seller_body']['seller.body.optionsave']}}</button>
                                            <button class="product_add">{{$data['general_setting']['general_setting_seller_body']['seller.body.optionadd']}}</button> 
                                        </label>
                                    </div>
                                </div>   
                                
                                <div class="card-content">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >                      
                                            <input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="색상">
                                        </label>
                                        <div class="option_col col-form-label ml15 mr15">
                                            <input class="form-control" type="text"  id="example-text-input">
                                        </div>
                                    </div>
                                </div>   
                
                                <div class="card-content">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >                      
                                            <input class="form-control product_placeholder" type="text"  id="example-text-input"  >
                                        </label>
                                        <div class="option_col col-form-label ml15 mr15">
                                            <input class="form-control" type="text"  id="example-text-input">
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body row">
                        <h4 span class="card_title mr15" style="color: #3E56BA">{{$data['general_setting']['general_setting_seller_body']['seller.body.productvideo']}}</h4>
                        <span class="cate_tip tb_auto">{{$data['general_setting']['general_setting_seller_body']['seller.body.productvideodesc']}}</span>
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <form action="#" class="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted mdi mdi-upload-network-outline"></i>
                                    </div>
        
                                    <h4 style="color: #ddd; line-height:400px">Drop files here or click to upload.</h4>
                                </div>
                            </form>
                            <button class="store_btn_center float_r mt10">{{$data['general_setting']['general_setting_seller_body']['seller.body.sendfiles']}}</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body row">
                        <h4 span class="card_title mr15" style="color: #3E56BA">Product Description</h4>
                        <span class="cate_tip tb_auto">{{$data['general_setting']['general_setting_seller_body']['seller.body.productdesc']}}</span>
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            
                            <button class="store_btn_center float_r mt10">Confirm</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="apply_cancel">
            <input type="submit" class="save_btn"></input>
        </div>

<div class="order_modal1">
    <div class="be_modal_content3">
        <div class="order_block">
            <div class="modal_close_btn"></div>
            <div class="order_content2">
                <table>
                    <tr>
                        <th class="th_chk">
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
                        </th>
                        <th class="th_option">{{$data['general_setting']['general_setting_seller_body']['seller.body.option']}}</th>
                        <th class="th_status">추가금액</th>
                        <th class="th_name">재고수량</th>
                        <th class="th_contact">통보수량</th>
                        <th class="th_payment">사용여부</th>
                    </tr>
                    <tr>
                        <td class="td_chk">
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
                        </td>
                        <td class="td_option">I2003051424063qrhOpl</td>
                        <td class="td_status"><input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="0"></td>
                        <td class="td_name"><input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="9999"></td>
                        <td class="td_contact"><input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="100"></td>
                        <td class="td_payment">
                            <select class="btn_blue_seller"> 
                                <option>사용함</option>
                                <option>사용 안 함</option>
                            </select>
                        </td>
                    </tr>
                
                    <tr>
                        <td class="td_chk">
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
                        </td>
                        <td class="td_option">I2003051424063qrhOpl</td>
                        <td class="td_status"><input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="0"></td>
                        <td class="td_name"><input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="9999"></td>
                        <td class="td_contact"><input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="100"></td>
                        <td class="td_payment">   
                            <select class="btn_blue_seller"> 
                            <option>사용함</option>
                            <option>사용 안 함</option>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td class="td_chk">
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
                        </td>
                        <td class="td_option">I2003051424063qrhOpl</td>
                        <td class="td_status"><input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="0"></td>
                        <td class="td_name"><input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="9999"></td>
                        <td class="td_contact"><input class="form-control product_placeholder" type="text"  id="example-text-input" placeholder="100"></td>
                        <td class="td_payment">                        
                            <select class="btn_blue_seller"> 
                                <option>사용함</option>
                                <option>사용 안 함</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="be_btn">
                    <div class="be_modal_cancel_btn">Cancel</div>
                    <div class="be_modal_confirm1_btn">Confirm</div>
                </div>
            </div>
        </div>  
    </div>
</form>






<script src="/libs/jquery-repeater/jquery-repeater.min.js"></script>
<script>
    $(document).ready(function(){"use strict";$(".repeater").repeater({defaultValues:{"textarea-input":"foo","text-input":"bar","select-input":"B","checkbox-input":["A","B"],"radio-input":"B"},show:function(){$(this).slideDown()},hide:function(e){confirm("Are you sure you want to delete this element?")&&$(this).slideUp(e)},ready:function(e){}}),window.outerRepeater=$(".outer-repeater").repeater({defaultValues:{"text-input":"outer-default"},show:function(){console.log("outer show"),$(this).slideDown()},hide:function(e){console.log("outer delete"),$(this).slideUp(e)},repeaters:[{selector:".inner-repeater",defaultValues:{"inner-text-input":"inner-default"},show:function(){console.log("inner show"),$(this).slideDown()},hide:function(e){console.log("inner delete"),$(this).slideUp(e)}}]})});
    </script>

<script src="{{URL::asset('/libs/dropzone/dropzone.min.js')}}"></script>
<script src="{{URL::asset('/libs/summernote/summernote.min.js')}}"></script>
<script>

$(function(){
    Dropzone.options.myAwesomeDropzone = {
    maxFilesize: 10,
    addRemoveLinks: true,
    dictResponseError: 'Server not Configured',
    acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
    addRemoveLinks: true, // 삭제버튼 표시 여부 
    dictRemoveFile: '삭제', // 삭제버튼 표시 텍스트
    init:function(){
      var self = this;
      // config
      self.options.addRemoveLinks = true;
      self.options.dictRemoveFile = "Delete";
      //New file added
      self.on("addedfile", function (file) {
        console.log('new file added ', file);
      });
      // Send file starts
      self.on("sending", function (file) {
        console.log('upload started', file);
        $('.meter').show();
      });
      
      // File upload Progress
      self.on("totaluploadprogress", function (progress) {
        console.log("progress ", progress);
        $('.roller').width(progress + '%');
      });

      self.on("queuecomplete", function (progress) {
        $('.meter').delay(999).slideUp(999);
      });
      
      // On removing file
      self.on("removedfile", function (file) {
        console.log(file);
      });
    }
  };
})

</script>

    

@endsection

    <!-- form repeater init -->