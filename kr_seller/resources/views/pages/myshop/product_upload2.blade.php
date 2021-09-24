@extends('layouts.common.seller_myshop_master')

@section('title') 상품 업로드 @endsection

@section('contents')

<link rel="stylesheet" type="text/css" href="/libs/dropzone/dropzone.min.css">
<link href="{{URL::asset('/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />

<form action="{{ route('myshop_product_upload2') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 span class="card_title" style="color: #3E56BA">{{$data['general_setting']['general_setting_seller_body']['seller.body.productupload']}}</h4>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.productmainimage']}}</label>
                        <input type="file" name="photo[]" id="photo" required multiple>
                         </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.category']}}</label>
                            <select class="btn_blue_seller" name="category_id" id="category_id"> 
                                @foreach ($data['category'] as $c1 => $ca1)
                                @if (strpos($ca1->parent, '.') == false)
                                    <option value="{{ $ca1->id }}"> {{ $ca1->name }} </option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.code']}}</label>
                            <label for="seq" id="seq" name="seq" class="col-md-2 col-form-label" >{{ $data['seq'] }}</label>
                        </div>
                        <div class="form-group row" style="display: none">
                            <input type="text" name="seq" id="seq" value="{{ $data['seq'] }}">
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.deliverysetting']}}</label>
                                <label for="example-text-input" class="col-md-2 col-form-label" ><input type="radio" name="delivery_setting" id="delivery_setting" class="radio_mr" checked>{{$data['general_setting']['general_setting_seller_body']['seller.body.available']}}</label>
                                <label for="example-text-input" class="col-md-2 col-form-label"  ><input type="radio" name="delivery_setting" id="delivery_setting" class="radio_mr">{{$data['general_setting']['general_setting_seller_body']['seller.body.notavailable']}}</label>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Product Title</label>
                            <div class="col-4">
                                <input class="form-control" type="text" name="title" id="title">
                            </div>  
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Product Sub-Title</label>
                            <div class="col-4">
                                <input class="form-control" type="text" name="sub_title" id="sub_title">
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Product Policy</label>
                            <div class="col-4">
                                <input class="form-control" type="text" name="policy" id="policy">
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Description</label>
                            <div class="col-4">
                                <textarea class="form-control" name="description" id="description" style="width: 800px; height: 400px;" id="example-text-input"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.salesperiod']}}</label>
                            <div class="search_input date_start"> 
                                <input class="form-control" type="date" value="{{ date("Y-m-d") }}" id="started_sales_period">
                            </div>
                            <span style="font-size: 25px" class="mr15 ml15">-</span>
                            <div class="search_input date_end"> 
                            <input class="form-control" type="date" value="{{ date("Y-m-d") }}" id="ended_sales_period">
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.productprice']}}</label>
                            <div class="col-4">
                                <input class="form-control" type="number" step="0.01" id="price" name="price" >
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.rateofdiscount']}}</label>
                            <label for="example-text-input" class="col-6 col-form-label" >
                            <input type="radio" name="oversea" class="radio_mr" id="rate_discount1" checked>Not Discount
                            <input type="radio" name="oversea" class="radio_mr ml15" id="rate_discount2">A Fixed Discount
                            <input type="radio" name="oversea" class="radio_mr ml15" id="rate_discount3">A Percent Discount</label>

                        </div>
                        <div class="form-group row" style="display: none" id="rate_discount_text">
                            <label for="example-text-input" class="col-md-2 col-form-label"></label>
                            <label for="example-text-input" class="col-6 col-form-label" >
                            <input class="form-control" type="text" name="oversea" class="radio_mr">
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Shipping Price</label>
                            <div class="col-4">
                                <input class="form-control" type="number" value="4" id="example-text-input">
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Free-Shipping Limit</label>
                            <div class="col-4">
                                <input class="form-control" type="number" value="20" id="example-text-input">
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.totalstock']}}</label>
                            <div class="col-4">
                                <input class="form-control" type="text"  id="example-text-input">
                            </div>
                            <span class="cate_tip tb_auto ml15">{{$data['general_setting']['general_setting_seller_body']['seller.body.totalstockdesc']}}</span>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >Notification of Stock</label>
                            <div class="col-4">
                                <input class="form-control" type="text"  id="example-text-input">
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller"> {{$data['general_setting']['general_setting_seller_body']['seller.body.revenueshare']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label" ><input type="radio" name="revenue_share" id="revenue_share" class="radio_mr" checked>Possible to Offer</label>
                            <label for="example-text-input" class="col-md-2 col-form-label" ><input type="radio" name="revenue_share" id="revenue_share" class="radio_mr">Profit per piece</label>
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
                                </select>
                            </label>
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

                    {{-- <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.basecurrency']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label pd0" >                            
                                <select class="btn_blue_seller" id="Private"> 
                                    @foreach ($data['seller_header_currency'] as $c => $cu)
                                        <option> {{ $cu->currency_code." - ".$cu->currency_symbol }} </option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                    </div> --}}

                    <div class="card-content">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label" id ="seller" >{{$data['general_setting']['general_setting_seller_body']['seller.body.status']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label" ><input type="radio" name="product_status" id="product_status" class="radio_mr" checked>{{$data['general_setting']['general_setting_seller_body']['seller.body.available']}}</label>
                            <label for="example-text-input" class="col-md-2 col-form-label"  ><input type="radio" name="product_status" id="product_status" class="radio_mr">{{$data['general_setting']['general_setting_seller_body']['seller.body.notavailable']}}</label>
                        </div>
                    </div>

                    

                    <div class="card-content">
                        <div class="form-group row">
                            <div class="card-content">
                                <div class="form-group row">
                                    <div class="apply_cancel">
                                        <input type="submit" class="save_btn"></input>
                                    </div>
                                </div>
                            </div>
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

<script>

$("#rate_discount1").click(function(){
        $("#rate_discount_text").hide();
});

$("#rate_discount2").click(function(){
        $("#rate_discount_text").show();
});

$("#rate_discount3").click(function(){
        $("#rate_discount_text").show();
});

</script>

    

@endsection

    <!-- form repeater init -->