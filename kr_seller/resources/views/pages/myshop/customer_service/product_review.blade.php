@extends('layouts.common.seller_myshop_master')

@section('title') Customer Service @endsection

@section('contents')

     @component('components.myshop.breadcrumb')
         @slot('title') Customer Service  @endslot
         @slot('li_1') Customer Service  @endslot
     @endcomponent     

    <div class="row">
        <div class="col-12">            
            <div class="financials_card_wr row">                    
                <div class="financials_card col-xl-4">   
                    @component('components.myshop.dashboard-widget3')
                    @slot('card_title') Product Inquiry @endslot
                    @slot('order_count_label') New @endslot
                    @slot('order_count_num') 45 @endslot
                    @endcomponent     
                </div> 
                <div class="financials_card col-xl-4">   
                    @component('components.myshop.dashboard-widget3')
                    @slot('card_title') Product Review @endslot
                    @slot('order_count_label') New @endslot
                    @slot('order_count_num') 23 @endslot
                    @endcomponent   
                </div> 
                <div class="financials_card col-xl-4">   
                    @component('components.myshop.dashboard-widget3')
                    @slot('card_title') Product Report @endslot
                    @slot('order_count_label') New @endslot
                    @slot('order_count_num') 23 @endslot
                    @endcomponent  
                </div>  
            </div>            
                
            <div class="card">
                <div class="card-body">
                    {{--탭 --}}
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light card">
                            <a class="nav-link active" data-toggle="tab" href="#inquiry" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Product Inquiry</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light card">
                            <a class="nav-link" data-toggle="tab" href="#review" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Product Review</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light card">
                            <a class="nav-link" data-toggle="tab" href="#Report" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Product Report</span>
                            </a>
                        </li>                
                    </ul>                    
                                       
                    <div class="search_wr">
                        <div class="search_input">                    
                            <select class="form-control">
                                <option>Customer</option>
                                <option>Customer1</option>
                                <option>Customer2</option>
                            </select>
                        </div>  

                        <div class="search_input">    
                            <input class="form-control" type="text" value="Customer" id="example-text-input">
                        </div>

                        <div class="search_input date_start"> 
                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>

                        <div class="search_input date_end"> 
                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>
                        
                        <button type="button" class="btn_blue">Search</button>
                    </div>
             
                    <div class="total_count_wr">
                        <ul class="total_count_ul">
                            <li>
                                <span class="total_count_tit">
                                    Total Deposit List
                                </span>
                                <span class="total_count">
                                    132 
                                </span>
                            </li>
                            <li>
                                <span class="total_count_tit">
                                    On processing
                                </span>
                                <span class="total_count">
                                    445
                                </span>
                            </li>
                            <li>
                                <span class="total_count_tit">
                                    Completed
                                </span>
                                <span class="total_count">
                                    445
                                </span>
                            </li>                            
                        </ul>
                    </div> <!-- total_count_wr -->


                    {{--탭 컨텐츠--}}
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="inquiry" role="tabpanel">
                            <div class="product_table">
                                <table>
                                    <tr>
                                        <th class="th_chk">
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </th>
                                        <th class="th_inquiry_date">Inquiry Date</th>
                                        <th class="th_reply_date">Reply date</th>
                                        <th class="th_id">User ID</th>
                                        <th class="th_preview">Inquiry Preview</th>
                                    </tr>
                                    <tr>
                                        <td class="td_chk">
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </td>
                                        <td class="td_inquiry_date">04-06-2020</td>
                                        <td class="td_reply_date">New Inquiry</td>
                                        <td class="td_id">Jiwoong(Jaq)</td>
                                        <td class="td_preview">Is this a skincare product?</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="review" role="tabpanel">
                            <div class="product_table">
                                <table>
                                    <tr>
                                        <th class="th_chk">
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </th>
                                        <th class="th_inquiry_date">Review Date</th>
                                        <th class="th_reply_date">Checked date</th>
                                        <th class="th_id">User ID</th>
                                        <th class="th_preview">Inquiry Preview</th>
                                        <th class="th_btn">Request to Admin</th>
                                    </tr>
                                    <tr>
                                        <td class="td_chk">
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </td>
                                        <td class="td_inquiry_date">04-06-2020</td>
                                        <td class="td_reply_date">Not Check</td>
                                        <td class="td_id">Jiwoong(Jaq)</td>
                                        <td class="td_preview">Is this a skincare product?</td>
                                        <td class="td_btn">
                                            <button type="button" class="btn_blue">Request to delete</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="Report" role="tabpanel">
                            <div class="product_table">
                                <table>
                                    <tr>
                                        <th class="th_chk">
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </th>
                                        <th class="th_inquiry_date">Inquiry Date</th>
                                        <th class="th_reply_date">Reply Date</th>
                                        <th class="th_id">User ID</th>
                                        <th class="th_status">Status</th>
                                        <th class="th_preview">Report Preview</th>
                                        <th class="th_btn">Product Report
                                            Management</th>
                                    </tr>
                                    <tr>
                                        <td class="td_chk">
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </td>
                                        <td class="td_inquiry_date">04-06-2020</td>
                                        <td class="td_reply_date">Not Check</td>
                                        <td class="td_id">Jiwoong(Jaq)</td>
                                        <td class="td_status">Not Checked</td>
                                        <td class="td_preview">Is this a skincare product?</td>
                                        <td class="td_btn">
                                            <button type="button" class="btn_blue">Management</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{--탭 컨텐츠--}}

                </div>
            </div>            
        </div>
    </div>


    
    <!-- pop Inquiry Information -->
    <div class="pop_bg pop_inquiryInformation_wr">
        <div class="pop_wr pop_inquiryInformation">
            <div class="pop_edit_top">
                <p class="pop_edit_tit">Inquiry Information</p>
                <button type="button" class="btn_red" id="btn_inquiryInformation_close">Close</button>                              
            </div>            

            <div class="pop_edit_mid"> 
                <div class="customerDetail_info_wr">
                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Type of Inquiry </label>

                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        Exchange
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Customer</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        Jiwoong (backgu@daum.net)
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">A private article</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        Private / Public
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Target Product</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value inquiry_info_value">
                                        <div class="orderDetail_content_left">
                                            <div class="collabo_pro_img">
                                                <img src="/images/product/product_img01.png" alt="">
                                            </div>                            
                                            <div class="collabo_pro_info">
                                                <div class="collabo_pro_name">Product name </div>
                                                <div class="collabo_pro_desc">DescriptionsDescriptionsDescriptions
                                                    DescriptionsDescriptionsDescriptions
                                                </div>
                                                <div class="pro_detail_info">
                                                    <div class="pro_detail_info_box">
                                                        <span class="pro_detail_info_label">
                                                            Option :
                                                        </span>
                                                        <span class="pro_detail_info_value">
                                                            BASIC
                                                        </span>
                                                    </div>
                
                                                    <div class="pro_detail_info_box">
                                                        <span class="pro_detail_info_label">
                                                            Price :
                                                        </span>
                                                        <span class="pro_detail_info_value">
                                                            300
                                                        </span>
                                                        <span class="pro_detail_info_unite">
                                                            AED
                                                        </span>
                                                    </div>
                
                                                    <div class="pro_detail_info_box">
                                                        <span class="pro_detail_info_label">
                                                            Quantity  :
                                                        </span>
                                                        <span class="pro_detail_info_value">
                                                            1
                                                        </span>
                                                        <span class="pro_detail_info_unite">
                                                            EA
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div> 
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Subject of inquiry</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        I want to know more this product
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Inquiry contents</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        <div class="inquiry_contents_wr">
                                            <div class="inquiry_receive_wr">
                                                <div class="inquiry_receive_con">
                                                    Is this product eco-friendly? Can my child use it? My child has a severe atopy.
                                                </div>
                                                <div class="inquiry_receive_action_wr">
                                                    <div class="inquiry_receive_time">
                                                        23-04-2020 16:32
                                                    </div>
                                                    <div class="inquiry_receive_action">
                                                        <button type="button" id="btn_inquiry_reply_open">Reply</button>
                                                        <button type="button" id="btn_inquiry_del">Delete request to ALISEON</button>
                                                    </div>
                                                </div>                                               
                                            </div>

                                            <div class="inquiry_comment_wr">
                                                <div class="inquiry_comment_con">
                                                    It is an eco-friendly product for your children. Use this product to help atopic soothing effects.
                                                </div>
                                                <div class="inquiry_comment_action_wr">
                                                    <div class="inquiry_comment_time">
                                                        23-04-2020 16:32
                                                    </div>
                                                    <div class="inquiry_comment_action">
                                                        <span class="sellerId_val">sellerID</span>
                                                        <button type="button" id="btn_inquiry_Edit_open">Edit</button>
                                                        <button type="button" id="btn_comment_del">Delete</button>
                                                    </div>
                                                </div>                                               
                                            </div>

                                            <div class="inquiry_Send_wr">
                                                <textarea class="input_inquiry_Send" name="inquiry_Send" id="inquiry_Send"></textarea>
                                                <button type="button" class="btn_blue" id="btn_inquiry_reply">Reply</button>
                                            </div>

                                            <div class="inquiry_edit_wr">
                                                <textarea class="input_inquiry_edit" name="inquiry_edit" id="inquiry_edit">It is an eco-friendly product for your children. Use this product to help atopic soothing effects.</textarea>
                                                <button type="button" class="btn_blue" id="btn_inquiry_edit">Edit</button>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>            

            <div class="pop_edit_btn_wr">
                <button type="button" id="btn_pop_inquiryInformation_confirm" class="btn_blue">Confirm</button>
            </div>
        </div>
    </div>

    
    <!-- pop Product review -->
    <div class="pop_bg pop_productReview_wr">
        <div class="pop_wr pop_productReview">
            <div class="pop_edit_top">
                <p class="pop_edit_tit">Product review</p>
                <button type="button" class="btn_red" id="btn_productReview_close">Close</button>                              
            </div>            

            <div class="pop_edit_mid"> 
                <div class="customerDetail_info_wr"> 
                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Customer</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        Jiwoong (backgu@daum.net)
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>                    

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Target Product</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value inquiry_info_value">
                                        <div class="orderDetail_content_left">
                                            <div class="collabo_pro_img">
                                                <img src="/images/product/product_img01.png" alt="">
                                            </div>                            
                                            <div class="collabo_pro_info">
                                                <div class="collabo_pro_name">Product name </div>
                                                <div class="collabo_pro_desc">DescriptionsDescriptionsDescriptions
                                                    DescriptionsDescriptionsDescriptions
                                                </div>
                                                <div class="pro_detail_info">
                                                    <div class="pro_detail_info_box">
                                                        <span class="pro_detail_info_label">
                                                            Option :
                                                        </span>
                                                        <span class="pro_detail_info_value">
                                                            BASIC
                                                        </span>
                                                    </div>
                
                                                    <div class="pro_detail_info_box">
                                                        <span class="pro_detail_info_label">
                                                            Price :
                                                        </span>
                                                        <span class="pro_detail_info_value">
                                                            300
                                                        </span>
                                                        <span class="pro_detail_info_unite">
                                                            AED
                                                        </span>
                                                    </div>
                
                                                    <div class="pro_detail_info_box">
                                                        <span class="pro_detail_info_label">
                                                            Quantity  :
                                                        </span>
                                                        <span class="pro_detail_info_value">
                                                            1
                                                        </span>
                                                        <span class="pro_detail_info_unite">
                                                            EA
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div> 
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>                    

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Review</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        <div class="inquiry_contents_wr">
                                            <div class="inquiry_receive_wr">
                                                <div class="inquiry_receive_con">
                                                    Is this product eco-friendly? Can my child use it? My child has a severe atopy.
                                                </div>
                                                <div class="inquiry_receive_action_wr">
                                                    <div class="inquiry_receive_time">
                                                        23-04-2020 16:32
                                                    </div>
                                                    <div class="inquiry_receive_action">
                                                        <button type="button" id="btn_inquiry_reply_open">Reply</button>
                                                        <button type="button" id="btn_inquiry_del">Delete request to ALISEON</button>
                                                    </div>
                                                </div>                                               
                                            </div>

                                            <div class="inquiry_comment_wr">
                                                <div class="inquiry_comment_con">
                                                    It is an eco-friendly product for your children. Use this product to help atopic soothing effects.
                                                </div>
                                                <div class="inquiry_comment_action_wr">
                                                    <div class="inquiry_comment_time">
                                                        23-04-2020 16:32
                                                    </div>
                                                    <div class="inquiry_comment_action">
                                                        <span class="sellerId_val">sellerID</span>
                                                        <button type="button" id="btn_inquiry_Edit_open">Edit</button>
                                                        <button type="button" id="btn_comment_del">Delete</button>
                                                    </div>
                                                </div>                                               
                                            </div>

                                            <div class="inquiry_Send_wr">
                                                <textarea class="input_inquiry_Send" name="inquiry_Send" id="inquiry_Send"></textarea>
                                                <button type="button" class="btn_blue" id="btn_inquiry_reply">Reply</button>
                                            </div>

                                            <div class="inquiry_edit_wr">
                                                <textarea class="input_inquiry_edit" name="inquiry_edit" id="inquiry_edit">It is an eco-friendly product for your children. Use this product to help atopic soothing effects.</textarea>
                                                <button type="button" class="btn_blue" id="btn_inquiry_edit">Edit</button>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>            

            <div class="pop_edit_btn_wr">
                <button type="button" id="btn_productReview_confirm" class="btn_blue">Confirm</button>
            </div>
        </div>
    </div>

    <!-- pop Product review_Delete request -->
    <div class="pop_bg pop_productReviewDel_wr">
        <div class="pop_wr pop_productReviewDel">
            <div class="pop_edit_top">
                <p class="pop_edit_tit">Product review Delete request</p>
                <button type="button" class="btn_red" id="btn_productReviewDel_close">Close</button>                              
            </div>            

            <div class="pop_edit_mid"> 
                <div class="customerDetail_info_wr"> 
                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Customer</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        Jiwoong (backgu@daum.net)
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>                    

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Target Product</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value inquiry_info_value">
                                        <div class="orderDetail_content_left">
                                            <div class="collabo_pro_img">
                                                <img src="/images/product/product_img01.png" alt="">
                                            </div>                            
                                            <div class="collabo_pro_info">
                                                <div class="collabo_pro_name">Product name </div>
                                                <div class="collabo_pro_desc">DescriptionsDescriptionsDescriptions
                                                    DescriptionsDescriptionsDescriptions
                                                </div>
                                                <div class="pro_detail_info">
                                                    <div class="pro_detail_info_box">
                                                        <span class="pro_detail_info_label">
                                                            Option :
                                                        </span>
                                                        <span class="pro_detail_info_value">
                                                            BASIC
                                                        </span>
                                                    </div>
                
                                                    <div class="pro_detail_info_box">
                                                        <span class="pro_detail_info_label">
                                                            Price :
                                                        </span>
                                                        <span class="pro_detail_info_value">
                                                            300
                                                        </span>
                                                        <span class="pro_detail_info_unite">
                                                            AED
                                                        </span>
                                                    </div>
                
                                                    <div class="pro_detail_info_box">
                                                        <span class="pro_detail_info_label">
                                                            Quantity  :
                                                        </span>
                                                        <span class="pro_detail_info_value">
                                                            1
                                                        </span>
                                                        <span class="pro_detail_info_unite">
                                                            EA
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div> 
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>                    

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Review</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        <div class="inquiry_contents_wr">
                                            <div class="inquiry_receive_wr">
                                                <div class="inquiry_receive_con">
                                                    Is this product eco-friendly? Can my child use it? My child has a severe atopy.
                                                </div>
                                                <div class="inquiry_receive_action_wr">
                                                    <div class="inquiry_receive_time">
                                                        23-04-2020 16:32
                                                    </div>   
                                                </div>                                               
                                            </div>                                            
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Delete request</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        <div class="review_del_input">
                                            <textarea name="review_del_request" class="input_review_del" id="review_del_request" rows="5">This is a malicious consumer’s comment.
                                            </textarea> 
                                            <button type="button" id="btn_review_del_send" class="btn_blue">Send</button>             
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>


                </div>
            </div>            

            <div class="pop_edit_btn_wr">
                <button type="button" id="btn_productReviewDel_confirm" class="btn_blue">Confirm</button>
            </div>
        </div>
    </div>

    <!-- pop Product report-->
    <div class="pop_bg pop_productReport_wr">
        <div class="pop_wr pop_productReport">
            <div class="pop_edit_top">
                <p class="pop_edit_tit">Product report</p>
                <button type="button" class="btn_red" id="btn_productReport_close">Close</button>                              
            </div>            

            <div class="pop_edit_mid"> 
                <div class="customerDetail_info_wr"> 
                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Customer</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        Jiwoong (backgu@daum.net)
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>                    

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Target Product</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value inquiry_info_value">
                                        <div class="orderDetail_content_left">
                                            <div class="collabo_pro_img">
                                                <img src="/images/product/product_img01.png" alt="">
                                            </div>                            
                                            <div class="collabo_pro_info">
                                                <div class="collabo_pro_name">Product name </div>
                                                <div class="collabo_pro_desc">DescriptionsDescriptionsDescriptions
                                                    DescriptionsDescriptionsDescriptions
                                                </div>
                                                <div class="pro_detail_info">
                                                    <div class="pro_detail_info_box">
                                                        <span class="pro_detail_info_label">
                                                            Option :
                                                        </span>
                                                        <span class="pro_detail_info_value">
                                                            BASIC
                                                        </span>
                                                    </div>
                
                                                    <div class="pro_detail_info_box">
                                                        <span class="pro_detail_info_label">
                                                            Price :
                                                        </span>
                                                        <span class="pro_detail_info_value">
                                                            300
                                                        </span>
                                                        <span class="pro_detail_info_unite">
                                                            AED
                                                        </span>
                                                    </div>
                
                                                    <div class="pro_detail_info_box">
                                                        <span class="pro_detail_info_label">
                                                            Quantity  :
                                                        </span>
                                                        <span class="pro_detail_info_value">
                                                            1
                                                        </span>
                                                        <span class="pro_detail_info_unite">
                                                            EA
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div> 
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>                    

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Report</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        <div class="inquiry_contents_wr">
                                            <div class="inquiry_receive_wr">
                                                <div class="inquiry_receive_con">
                                                    Is this product eco-friendly? Can my child use it? My child has a severe atopy.
                                                </div>
                                                <div class="inquiry_receive_action_wr">
                                                    <div class="inquiry_receive_time">
                                                        23-04-2020 16:32
                                                    </div>
                                                    <div class="inquiry_receive_action">
                                                        <button type="button" id="btn_inquiry_reply_open">Reply</button>
                                                        <button type="button" id="btn_inquiry_del">Delete request to ALISEON</button>
                                                    </div>
                                                </div>                                               
                                            </div>

                                            <div class="inquiry_comment_wr">
                                                <div class="inquiry_comment_con">
                                                    It is an eco-friendly product for your children. Use this product to help atopic soothing effects.
                                                </div>
                                                <div class="inquiry_comment_action_wr">
                                                    <div class="inquiry_comment_time">
                                                        23-04-2020 16:32
                                                    </div>
                                                    <div class="inquiry_comment_action">
                                                        <span class="sellerId_val">sellerID</span>
                                                        <button type="button" id="btn_inquiry_Edit_open">Edit</button>
                                                        <button type="button" id="btn_comment_del">Delete</button>
                                                    </div>
                                                </div>                                               
                                            </div>

                                            <div class="inquiry_Send_wr">
                                                <textarea class="input_inquiry_Send" name="inquiry_Send" id="inquiry_Send"></textarea>
                                                <button type="button" class="btn_blue" id="btn_inquiry_reply">Reply</button>
                                            </div>

                                            <div class="inquiry_edit_wr">
                                                <textarea class="input_inquiry_edit" name="inquiry_edit" id="inquiry_edit">It is an eco-friendly product for your children. Use this product to help atopic soothing effects.</textarea>
                                                <button type="button" class="btn_blue" id="btn_inquiry_edit">Edit</button>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">Report to ALISEON</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        <div class="inquiry_contents_wr">
                                            <div class="inquiry_receive_wr">
                                                <div class="inquiry_receive_con">
                                                    Is this product eco-friendly? Can my child use it? My child has a severe atopy.
                                                </div>
                                                <div class="inquiry_receive_action_wr">
                                                    <div class="inquiry_receive_time">
                                                        23-04-2020 16:32
                                                    </div>
                                                    {{-- <div class="inquiry_receive_action">
                                                        <button type="button" id="btn_inquiry_reply_open">Reply</button>
                                                        <button type="button" id="btn_inquiry_del">Delete request to ALISEON</button>
                                                    </div> --}}
                                                </div>                                               
                                            </div>

                                            {{-- <div class="inquiry_comment_wr">
                                                <div class="inquiry_comment_con">
                                                    It is an eco-friendly product for your children. Use this product to help atopic soothing effects.
                                                </div>
                                                <div class="inquiry_comment_action_wr">
                                                    <div class="inquiry_comment_time">
                                                        23-04-2020 16:32
                                                    </div>
                                                    <div class="inquiry_comment_action">
                                                        <span class="sellerId_val">sellerID</span>
                                                        <button type="button" id="btn_inquiry_Edit_open">Edit</button>
                                                        <button type="button" id="btn_comment_del">Delete</button>
                                                    </div>
                                                </div>                                               
                                            </div> --}}

                                            <div class="inquiry_Send_wr">
                                                <textarea class="input_inquiry_Send" name="inquiry_Send" id="inquiry_Send"></textarea>
                                                <button type="button" class="btn_blue" id="btn_inquiry_reply">Reply</button>
                                            </div>

                                            <div class="inquiry_edit_wr">
                                                <textarea class="input_inquiry_edit" name="inquiry_edit" id="inquiry_edit">It is an eco-friendly product for your children. Use this product to help atopic soothing effects.</textarea>
                                                <button type="button" class="btn_blue" id="btn_inquiry_edit">Edit</button>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>

                    <div class="customerDetail_info_box">
                        <div class="form_wr">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-md-3 col-form-label section_label">ALISEON Notification</label>
                                
                                <div class="col-md-9 padding_set">
                                    <div class="customerDetail_info_value">
                                        <div class="inquiry_contents_wr">
                                            <div class="inquiry_receive_wr">
                                                <div class="inquiry_receive_con">
                                                    Is this product eco-friendly? Can my child use it? My child has a severe atopy.
                                                </div>
                                                <div class="inquiry_receive_action_wr">
                                                    <div class="inquiry_receive_time">
                                                        23-04-2020 16:32
                                                    </div>
                                                    {{-- <div class="inquiry_receive_action">
                                                        <button type="button" id="btn_inquiry_reply_open">Reply</button>
                                                        <button type="button" id="btn_inquiry_del">Delete request to ALISEON</button>
                                                    </div> --}}
                                                </div>                                               
                                            </div>

                                            {{-- <div class="inquiry_comment_wr">
                                                <div class="inquiry_comment_con">
                                                    It is an eco-friendly product for your children. Use this product to help atopic soothing effects.
                                                </div>
                                                <div class="inquiry_comment_action_wr">
                                                    <div class="inquiry_comment_time">
                                                        23-04-2020 16:32
                                                    </div>
                                                    <div class="inquiry_comment_action">
                                                        <span class="sellerId_val">sellerID</span>
                                                        <button type="button" id="btn_inquiry_Edit_open">Edit</button>
                                                        <button type="button" id="btn_comment_del">Delete</button>
                                                    </div>
                                                </div>                                               
                                            </div> --}}

                                            <div class="inquiry_Send_wr">
                                                <textarea class="input_inquiry_Send" name="inquiry_Send" id="inquiry_Send"></textarea>
                                                <button type="button" class="btn_blue" id="btn_inquiry_reply">Reply</button>
                                            </div>

                                            <div class="inquiry_edit_wr">
                                                <textarea class="input_inquiry_edit" name="inquiry_edit" id="inquiry_edit">It is an eco-friendly product for your children. Use this product to help atopic soothing effects.</textarea>
                                                <button type="button" class="btn_blue" id="btn_inquiry_edit">Edit</button>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>            

            <div class="pop_edit_btn_wr">
                <button type="button" id="btn_productReport_confirm" class="btn_blue">Confirm</button>
            </div>
        </div>
    </div>
                                
    <div class="btn_hidden">
        <button id="btn_inquiryInformation" class="btn_blue">Inquiry Information</button> 
        <button id="btn_productReview" class="btn_blue">Product review</button>       
        <button id="btn_productReviewDel" class="btn_blue">Product review Delete request</button>       
        <button id="btn_productReport" class="btn_blue">Product report</button>        
    </div>




@endsection