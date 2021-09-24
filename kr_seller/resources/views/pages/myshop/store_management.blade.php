@extends('layouts.common.seller_myshop_master')

@section('title') Order List @endsection

@section('contents')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">{{$data['general_setting']['general_setting_seller_body']['seller.body.companyfile']}}</h4>
                

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Shop Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text"  id="example-text-input">
                            <input type="file"   id="image" accept="image/*" onchange="setThumbnail1(event);"/> 
                            <button class="store_btn">File</button>
                        </div>
                    </div>
                    <div class="form_group row thumb-box_1">
                        <label for="example-search-input" class="col-md-2 col-form-label"></label>
                    </div>  
                </div>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.storename']}}</label>
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.storename']}}</label>
                        <button class="btn_gray_seller">Change</button>
                    </div>
                </div>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.storeprofileimage']}}</label>
                        <div class="col-3">
                            <div class="img_box">
                                <div class="thumb-box_2">
                                    <div class="thumb-box_close"></div>
                                </div>
                                <input type="file" id="image" accept="image/*" onchange="setThumbnail2(event);"/> 
                                <button class="store_btn">File</button>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <form action="#" class="dz-clickable dropzone">

                                <button class="store_btn">File</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Company Name</label>
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Sunny's Company</label>
                        <button class="btn_gray_seller">Change</button>
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
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.storedesc']}}</label>
                        <input class="form-control" type="text"  id="example-text-input">
                    </div>
                </div>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.address']}}</label>
                        <input class="form-control" type="text"  id="example-text-input">
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

                <h4 class="card-title">{{$data['general_setting']['general_setting_seller_body']['seller.body.additionalinfo']}}</h4>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.storemanager']}}</label>
                        <input class="form-control" type="text"  id="example-text-input">
                    </div>
                </div>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Manager Contact</label>
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

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Overseas sales settings</h4>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.majorselling']}}</label>
                        <button class="btn_blue_store">Korea, Republic of<span class="store_dropdown"></span></button>
                        <button class="btn_gray_store"></button>
                        <button class="btn_gray_store"></button>
                        <button class="btn_gray_store"></button>
                    </div>
                </div>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.sellingoversea']}}</label>
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" ><input type="radio" name="oversea" class="radio_mr">{{$data['general_setting']['general_setting_seller_body']['seller.body.available']}}</label>
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" ><input type="radio" name="oversea" class="radio_mr">{{$data['general_setting']['general_setting_seller_body']['seller.body.notavailable']}}</label>
                    </div>
                </div>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.deliverycost']}}</label>
                        <div class="flex_bet row">
                            <div class="col-cd-5 row">
                                <button class="btn_blue_seller">택배사<span class="store_dropdown"></span></button>
                                <input class="form-control" type="text"  id="example-text-input" style="margin-right: 10px">
                                <input class="form-control" type="text"  id="example-text-input">
                            </div>  
                            <div class="mt_mb_auto">
                                <input type="radio" id="" value="">Shipping oversea
                            </div>
                            <div class="col-cd-5 row">
                                <button class="btn_blue_seller">택배사<span class="store_dropdown"></span></button>
                                <input class="form-control" type="text"  id="example-text-input" style="margin-right: 10px">
                                <input class="form-control" type="text"  id="example-text-input">
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

                <h4 class="card-title">Delivery Settings</h4>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.codcheck']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" ><input type="radio" name="oversea" class="radio_mr">{{$data['general_setting']['general_setting_seller_body']['seller.body.available']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" ><input type="radio" name="oversea" class="radio_mr">{{$data['general_setting']['general_setting_seller_body']['seller.body.notavailable']}}</label>
                    </div>
                </div>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.freedeliverycost']}}</label>
                        <div class="mt_mb_auto_wd row">
                            <input class="form-control" type="text"  id="example-text-input" style="margin-right: 10px">
                            <button class="btn_blue_seller mr0">AED<span class="store_dropdown"></span></button>
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

                <h4 class="card-title">{{$data['general_setting']['general_setting_seller_body']['seller.body.additionalinfo']}}</h4>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.tradelicense']}}</label>
                        <button class="btn_blue_store sm nowrap">{{$data['general_setting']['general_setting_seller_body']['seller.body.receivingnation']}}<span class="store_dropdown" ></span></button>
                        <input class="form-control" type="text"  id="example-text-input">
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" ></label>
                        <div class="thumb-box_2">
                            <div class="thumb-box_close"></div>
                        </div>
                        <button class="store_btn_center">Choose File</button>
                    </div>
                </div>
                
                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.bankaccount']}}</label>
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Swift Code</label>
                        <input class="form-control ml55" type="text"  id="example-text-input" style="margin-right: 10px">
                        <button class="btn_blue_seller mr0 sm nowrap" style="padding: 5px 15px">{{$data['general_setting']['general_setting_seller_body']['seller.body.searchswiftcode']}}</button>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" ></label>
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Account Number</label>
                        <button class="btn_blue_store sm nowrap ml55">Receiving nation<span class="store_dropdown" ></span></button>
                        <input class="form-control" type="text"  id="example-text-input">
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" ></label>
                        <div class="thumb-box_2">
                            <div class="thumb-box_close"></div>
                        </div>
                        <button class="store_btn_center">Choose File</button>
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
                <h4 class="card-title">{{$data['general_setting']['general_setting_seller_body']['seller.body.requestinfonpapers']}}</h4>
                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >통신판매신고증</label>
                            <input class="form-control mr15" type="text"  id="example-text-input">
                            <button class="btn_blue_seller mr0 sm nowrap" style="padding: 5px 15px">Choose File</button>
                    </div>
                    <div class="form_group row">
                        <label for="example-search-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-5">
                        </div>
                    </div>  
                </div>

                <div class="card-content">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.otherpapers']}}</label>
                            <input class="form-control mr15" type="text"  id="example-text-input">
                            <button class="btn_blue_seller mr0 sm nowrap" style="padding: 5px 15px">Choose File</button>
                    </div>
                    <div class="form_group row">
                        <label for="example-search-input" class="col-md-2 col-form-label"></label>
                        <div class="form_group row thumb-box_1"></div>
                        <div class="col-md-5">
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <div class="apply_cancel">
            <div class="save_btn">Save</div>
        </div>
    </div>
</div>


<div class="blink">

</div>

<div class="store_manage">

    <div class="save_modal">
        <div class="card">
            <div class="card-body">
    
                <div class=" border_none">
                    <div class="form-group row option_div">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Contry Code</label>
                        <div class="col-7 ">
                            <input class="form-control ml55" type="discount" value="" id="example-text-input" >
                        </div>    
                    </div>
    
                    <div class="form-group row option_div">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Bank Name</label>
                        <div class="col-7 ">
                            <input class="form-control ml55" type="discount" value="" id="example-text-input" >
                        </div>    
                    </div>
    
                    <div class="form-group row option_div">
                        <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >City Name</label>
                        <div class="col-7 ">
                            <input class="form-control ml55" type="discount" value="" id="example-text-input" >
                        </div>                 
                    </div>
                </div>
                
                <div class=" border_none">
                        <table class="product_table product_option_tbl scrollBar">
                            <tbody>
                                <tr>
                                    <th class="th_option">Option</th>
                                    <th class="th_add">Add price</th>
                                    <th class="th_quantity">Total sales quantity</th>
                                    <th class="th_remaining">Remaining notification Amount</th>
                                </tr>
                                <tr>
                                    <td class="th_option">BLICHKHKXXX</td>
                                    <td class="th_add">HSBC PRIVATE BANK (SUISSE) SA/1 1UEEN’S ROAD CENTRAL CENTRAL ANDWESTERN DISTRICT HSBC MAIN BUILDING
                                    </td>
                                    <td class="th_quantity">
                                        DUBAI
                                    </td>
                                    <td class="th_remaining">
                                        <button class="btn_blue_seller pd_lg">Select</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="th_option">BLICHKHKXXX</td>
                                    <td class="th_add">HSBC PRIVATE BANK (SUISSE) SA/1 1UEEN’S ROAD CENTRAL CENTRAL ANDWESTERN DISTRICT HSBC MAIN BUILDING
                                    </td>
                                    <td class="th_quantity">
                                        DUBAI
                                    </td>
                                    <td class="th_remaining">
                                        <button class="btn_blue_seller pd_lg">Select</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="th_option">BLICHKHKXXX</td>
                                    <td class="th_add">HSBC PRIVATE BANK (SUISSE) SA/1 1UEEN’S ROAD CENTRAL CENTRAL ANDWESTERN DISTRICT HSBC MAIN BUILDING
                                    </td>
                                    <td class="th_quantity">
                                        DUBAI
                                    </td>
                                    <td class="th_remaining">
                                        <button class="btn_blue_seller pd_lg">Select</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="th_option">BLICHKHKXXX</td>
                                    <td class="th_add">HSBC PRIVATE BANK (SUISSE) SA/1 1UEEN’S ROAD CENTRAL CENTRAL ANDWESTERN DISTRICT HSBC MAIN BUILDING
                                    </td>
                                    <td class="th_quantity">
                                        DUBAI
                                    </td>
                                    <td class="th_remaining">
                                        <button class="btn_blue_seller pd_lg">Select</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="th_option">BLICHKHKXXX</td>
                                    <td class="th_add">HSBC PRIVATE BANK (SUISSE) SA/1 1UEEN’S ROAD CENTRAL CENTRAL ANDWESTERN DISTRICT HSBC MAIN BUILDING
                                    </td>
                                    <td class="th_quantity">
                                        DUBAI
                                    </td>
                                    <td class="th_remaining">
                                        <button class="btn_blue_seller pd_lg">Select</button>
                                    </td>
                                </tr>                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="apply_cancel">
                    <div class="cancel_btn">Cancel</div>
                    <div class="apply_btn">Apply</div>
                </div>
            </div>
        </div>
    </div>
@endsection
