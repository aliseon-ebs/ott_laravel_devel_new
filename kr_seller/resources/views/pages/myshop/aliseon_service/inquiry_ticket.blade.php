@extends('layouts.common.seller_myshop_master')

@section('title') Ticket with ALISEON @endsection

@section('contents')

     @component('components.myshop.breadcrumb')
         @slot('title') Ticket with ALISEON @endslot
         @slot('li_1') Ticket Service @endslot
     @endcomponent     

    <div class="row">
        <div class="col-12">            
            <div class="financials_card_wr row">                    
                <div class="financials_card col-xl-4">   
                    @component('components.myshop.dashboard-widget3')
                    @slot('card_title') Inquiry Ticket @endslot
                    @slot('order_count_label') New @endslot
                    @slot('order_count_num') 45 @endslot
                    @endcomponent     
                </div> 
                <div class="financials_card col-xl-4">   
                    @component('components.myshop.dashboard-widget3')
                    @slot('card_title') Event Ticket @endslot
                    @slot('order_count_label') New @endslot
                    @slot('order_count_num') 23 @endslot
                    @endcomponent   
                </div> 
                <div class="financials_card col-xl-4">   
                    @component('components.myshop.dashboard-widget3')
                    @slot('card_title') Etc Ticket @endslot
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
                                <span class="d-none d-sm-block">Inquiry Ticket</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light card">
                            <a class="nav-link" data-toggle="tab" href="#event" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Event Ticket</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light card">
                            <a class="nav-link" data-toggle="tab" href="#etc" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Etc Ticket</span>
                            </a>
                        </li>                
                    </ul>    
                    
                    <div class="open_btn_wr">
                        <button tyle="button" class="btn_orange">Open a New Ticket</button>
                    </div>                   
                                       
                    <div class="search_wr">
                        <div class="search_input">                    
                            <select class="form-control">
                                <option>Ticket Subject</option>
                                <option>Ticket Subject1</option>
                                <option>Ticket Subject2</option>
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

                    {{--탭 컨텐츠--}}
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="inquiry" role="tabpanel">
                            <div class="total_count_wr">
                                <ul class="total_count_ul">
                                    <li>
                                        <span class="total_count_tit">
                                            Total Inquiry Ticket
                                        </span>
                                        <span class="total_count">
                                            132 
                                        </span>
                                    </li>
                                    <li>
                                        <span class="total_count_tit">
                                            Not Check
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li>
                                    <li>
                                        <span class="total_count_tit">
                                            Updated
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

                            <div class="product_table">
                                <table>
                                    <tr>
                                        <th class="th_chk">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </th>
                                        <th class="th_inquiry_date">Ticket date</th>
                                        <th class="th_reply_date">Update date</th>
                                        <th class="th_status">Status</th>
                                        <th class="th_cate">Category</th>
                                        <th class="th_preview">Inquiry Subject</th>
                                    </tr>
                                    <tr>
                                        <td class="td_chk">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </td>
                                        <td class="td_inquiry_date">04-06-2020</td>
                                        <td class="td_reply_date">New Inquiry</td>
                                        <td class="td_status">Jiwoong(Jaq)</td>
                                        <td class="td_cate">Payment</td>
                                        <td class="td_preview">Is this a skincare product?</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="event" role="tabpanel">
                            <div class="total_count_wr">
                                <ul class="total_count_ul">
                                    <li>
                                        <span class="total_count_tit">
                                            Total Event Ticket
                                        </span>
                                        <span class="total_count">
                                            132 
                                        </span>
                                    </li>
                                    <li>
                                        <span class="total_count_tit">
                                            Not Check
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li>
                                    <li>
                                        <span class="total_count_tit">
                                            Before Apply
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li>   
                                    <li>
                                        <span class="total_count_tit">
                                            Applying
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li>   
                                    <li>
                                        <span class="total_count_tit">
                                            Approved
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li> 
                                    <li>
                                        <span class="total_count_tit">
                                            Not Approved
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li> 
                                    <li>
                                        <span class="total_count_tit">
                                            Expired
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li>                       
                                </ul>
                            </div> <!-- total_count_wr -->

                            <div class="product_table">
                                <table>
                                    <tr>
                                        <th class="th_chk">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </th>
                                        <th class="th_inquiry_date">Ticket date</th>
                                        <th class="th_reply_date">Update date</th>
                                        <th class="th_status">Status</th>
                                        <th class="th_cate">Category</th>
                                        <th class="th_preview">Inquiry Subject</th>
                                    </tr>
                                    <tr>
                                        <td class="td_chk">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </td>
                                        <td class="td_inquiry_date">04-06-2020</td>
                                        <td class="td_reply_date">New Inquiry</td>
                                        <td class="td_status">Jiwoong(Jaq)</td>
                                        <td class="td_cate">Payment</td>
                                        <td class="td_preview">Is this a skincare product?</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="Report" role="tabpanel">
                            <div class="total_count_wr">
                                <ul class="total_count_ul">
                                    <li>
                                        <span class="total_count_tit">
                                            Total Event Ticket
                                        </span>
                                        <span class="total_count">
                                            132 
                                        </span>
                                    </li>
                                    <li>
                                        <span class="total_count_tit">
                                            Not Check
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li>
                                    <li>
                                        <span class="total_count_tit">
                                            Before Apply
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li>   
                                    <li>
                                        <span class="total_count_tit">
                                            Applying
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li>   
                                    <li>
                                        <span class="total_count_tit">
                                            Approved
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li> 
                                    <li>
                                        <span class="total_count_tit">
                                            Not Approved
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li> 
                                    <li>
                                        <span class="total_count_tit">
                                            Expired
                                        </span>
                                        <span class="total_count">
                                            445
                                        </span>
                                    </li>                       
                                </ul>
                            </div> <!-- total_count_wr -->

                            <div class="product_table">
                                <table>
                                    <tr>
                                        <th class="th_chk">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </th>
                                        <th class="th_inquiry_date">Ticket date</th>
                                        <th class="th_reply_date">Update date</th>
                                        <th class="th_status">Status</th>
                                        <th class="th_cate">Category</th>
                                        <th class="th_preview">Inquiry Subject</th>
                                    </tr>
                                    <tr>
                                        <td class="td_chk">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </td>
                                        <td class="td_inquiry_date">04-06-2020</td>
                                        <td class="td_reply_date">New Inquiry</td>
                                        <td class="td_status">Jiwoong(Jaq)</td>
                                        <td class="td_cate">Payment</td>
                                        <td class="td_preview">Is this a skincare product?</td>
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



    
    <!-- pop Inquiry Ticket -->
    <div class="pop_bg pop_inquiryTicket_wr">
        <div class="pop_wr pop_inquiryTicket">
            <div class="pop_edit_top">
                <p class="pop_edit_tit">Inquiry Ticket</p>
                <button type="button" class="btn_red" id="btn_inquiryTicket_close">Close</button>                              
            </div>            

            <form action="">
                <div class="pop_edit_mid"> 
                    <div class="customerDetail_info_wr">
                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Select Category</label>

                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            <select class="form-control">
                                                <option value="">Order Inquiry</option>
                                                <option value="">Order Inquiry1</option>
                                                <option value="">Order Inquiry2</option>
                                            </select>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Subject</label>
                                    
                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            <input class="form-control" type="text" name="inquiry_ticket_subject" value="" id="inquiry_ticket_subject" placeholder="">
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Inquiry</label>
                                    
                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            <textarea name="inquiry_ticket_content" id="inquiry_ticket_content" rows="5"></textarea>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>    
                
                <div class="pop_edit_top cf">
                    <p class="pop_edit_tit">Additional Information</p>
                    <p class="pop_edit_subtit">If you need additional input related to your inquiry, please enter it.</p>                             
                </div> 

                <div class="pop_edit_mid"> 
                    <div class="customerDetail_info_wr"> 
                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Order Number</label>
                                    
                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            <div class="fz0">
                                                <input class="form-control inquiry_ticket_input" type="text" name="inquiry_ticket_orderNum" value="" id="inquiry_ticket_orderNum" placeholder="">

                                                <button type="button" class="btn_blue btn_info_sch" id="btn_sch_orderNum">Search</button>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Product Number</label>
                                    
                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            <div class="fz0">
                                                <input class="form-control inquiry_ticket_input" type="text" name="inquiry_ticket_proNum" value="" id="inquiry_ticket_proNum" placeholder="">
                                                
                                                <button type="button" class="btn_blue btn_info_sch" id="btn_sch_proNum">Search</button>
                                            </div>
                                        </div>                                    
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Consumer ID</label>
                                    
                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            <div class="fz0">
                                                <input class="form-control inquiry_ticket_input" type="text" name="inquiry_ticket_id" value="" id="inquiry_ticket_id" placeholder="">

                                                <button type="button" class="btn_blue btn_info_sch" id="btn_sch_id">Search</button>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                                        
                    </div>
                </div> 

                <div class="pop_edit_btn_wr">
                    <button type="submit" id="btn_inquiryTicket_confirm" class="btn_blue">Confirm</button>
                </div>                
            </form>
        </div>
    </div>

    <!-- pop Order Number Search -->
    <div class="pop_bg pop_orderNumberSearch_wr">
        <div class="pop_wr pop_orderNumberSearch">
            <div class="pop_edit_top">
                <p class="pop_edit_tit">Order Number Search</p>
                <button type="button" class="btn_red" id="btn_orderNumberSearch_close">Close</button>                              
            </div>            

            <form action="">
                <div class="pop_edit_mid"> 
                    <div class="customerDetail_info_wr">
                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-1 col-form-label section_label">Search</label>

                                    <div class="col-md-11">
                                        <div class="customerDetail_info_value">
                                            <div class="fz0">
                                                <div class="order_sch_form">
                                                    <select class="form-control order_sch_form_sel">
                                                        <option value="">Order Inquiry</option>
                                                        <option value="">Order Inquiry1</option>
                                                        <option value="">Order Inquiry2</option>
                                                    </select> 
                                                
                                                    <input class="form-control order_sch_form_input" type="text" name="order_sch_form_input" value="" id="order_sch_form_input" placeholder=""> 
                                                
                                                    <div class="custom-control custom-checkbox mb-2 date_form  date_start">
                                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                    </div>
                                                
                                                    <div class="custom-control custom-checkbox mb-2 date_form date_end">
                                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input2">
                                                    </div>
                                                </div>
                                            

                                                <div class="order_sch_btn_wr">
                                                    <button type="button" class="btn_blue" id="btn_order_sch_btn">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div> 
                    </div>                  

                    <div class="customerDetail_info_wr">
                        <div class="customerDetail_info_box">
                            <div class="row">
                                <div class="col-12">                                        
                                    <table id="datatable" class="product_table tbl_orderNumSearch table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="th_chk th_none">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </th>
                                                <th class="th01">Order Code</th>
                                                <th class="th02">Order Date</th>
                                                <th class="th03 th_none">Customer ID(Name)</th>
                                                <th class="th04">Sales Amount</th>
                                                <th class="th05 th_none">Select</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="td_chk">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="td01">I2003051424063qrhOpl</td>
                                                <td class="td02">23-04-2020</td>
                                                <td class="td03">Jiwoong(Jaq)</td>
                                                <td class="td04">4,899</td>
                                                <td class="td05">
                                                    <button type="button" class="btn_blue" id="btn_tbl_orderNumSearch">Select</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td_chk">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="td01">I2003051424063qrhOpl</td>
                                                <td class="td02">23-04-2020</td>
                                                <td class="td03">Jiwoong(Jaq)</td>
                                                <td class="td04">4,899</td>
                                                <td class="td05">
                                                    <button type="button" class="btn_blue" id="btn_tbl_orderNumSearch">Select</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td_chk">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="td01">I2003051424063qrhOpl</td>
                                                <td class="td02">23-04-2020</td>
                                                <td class="td03">Jiwoong(Jaq)</td>
                                                <td class="td04">4,899</td>
                                                <td class="td05">
                                                    <button type="button" class="btn_blue" id="btn_tbl_orderNumSearch">Select</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td_chk">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="td01">I2003051424063qrhOpl</td>
                                                <td class="td02">23-04-2020</td>
                                                <td class="td03">Jiwoong(Jaq)</td>
                                                <td class="td04">4,899</td>
                                                <td class="td05">
                                                    <button type="button" class="btn_blue" id="btn_tbl_orderNumSearch">Select</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td_chk">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="td01">I2003051424063qrhOpl</td>
                                                <td class="td02">23-04-2020</td>
                                                <td class="td03">Jiwoong(Jaq)</td>
                                                <td class="td04">4,899</td>
                                                <td class="td05">
                                                    <button type="button" class="btn_blue" id="btn_tbl_orderNumSearch">Select</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td_chk">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="td01">I2003051424063qrhOpl</td>
                                                <td class="td02">23-04-2020</td>
                                                <td class="td03">Jiwoong(Jaq)</td>
                                                <td class="td04">4,899</td>
                                                <td class="td05">
                                                    <button type="button" class="btn_blue" id="btn_tbl_orderNumSearch">Select</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td_chk">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="td01">I2003051424063qrhOpl</td>
                                                <td class="td02">23-04-2020</td>
                                                <td class="td03">Jiwoong(Jaq)</td>
                                                <td class="td04">4,899</td>
                                                <td class="td05">
                                                    <button type="button" class="btn_blue" id="btn_tbl_orderNumSearch">Select</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td_chk">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="td01">I2003051424063qrhOpl</td>
                                                <td class="td02">23-04-2020</td>
                                                <td class="td03">Jiwoong(Jaq)</td>
                                                <td class="td04">4,899</td>
                                                <td class="td05">
                                                    <button type="button" class="btn_blue" id="btn_tbl_orderNumSearch">Select</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td_chk">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="td01">I2003051424063qrhOpl</td>
                                                <td class="td02">23-04-2020</td>
                                                <td class="td03">Jiwoong(Jaq)</td>
                                                <td class="td04">4,899</td>
                                                <td class="td05">
                                                    <button type="button" class="btn_blue" id="btn_tbl_orderNumSearch">Select</button>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="td_chk">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="td01">I2003051424063qrhOpl</td>
                                                <td class="td02">23-04-2020</td>
                                                <td class="td03">Jiwoong(Jaq)</td>
                                                <td class="td04">4,899</td>
                                                <td class="td05">
                                                    <button type="button" class="btn_blue" id="btn_tbl_orderNumSearch">Select</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td_chk">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="td01">I2003051424063qrhOpl</td>
                                                <td class="td02">23-04-2020</td>
                                                <td class="td03">Jiwoong(Jaq)</td>
                                                <td class="td04">4,899</td>
                                                <td class="td05">
                                                    <button type="button" class="btn_blue" id="btn_tbl_orderNumSearch">Select</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="td_chk">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="td01">I2003051424063qrhOpl</td>
                                                <td class="td02">23-04-2020</td>
                                                <td class="td03">Jiwoong(Jaq)</td>
                                                <td class="td04">4,899</td>
                                                <td class="td05">
                                                    <button type="button" class="btn_blue" id="btn_tbl_orderNumSearch">Select</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end col -->
                            </div><!-- end row --> 
                        </div>                                                 
                    </div>
                </div>

                <div class="pop_edit_btn_wr">
                    <button type="submit" id="btn_pop_orderNumberSearch_confirm" class="btn_blue">Confirm</button>
                </div>     
            </form>       
        </div>
    </div>

    <!-- pop Ticket Contents --> 
    <div class="pop_bg pop_ticketContents_wr">
        <div class="pop_wr pop_ticketContents scrollBar">
            <div class="pop_edit_top">
                <p class="pop_edit_tit">Ticket Contents</p>
                <button type="button" class="btn_red" id="btn_ticketContents_close">Close</button>                              
            </div>
            
            <form action="">
                <div class="pop_edit_mid"> 
                    <div class="customerDetail_info_wr">
                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Category</label>

                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value ">
                                            Payment Inquiry
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Ticket Date</label>

                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value ">
                                            24-04-2020
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Subject</label>

                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            The amount of money is different.
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Inquiry</label>

                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            There are guests in truth. Settle the dispute.
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>                   
                    </div>
                </div>    
                
                <div class="pop_edit_top cf">
                    <p class="pop_edit_tit">Additional Information</p>                             
                </div> 

                <div class="pop_edit_mid"> 
                    <div class="customerDetail_info_wr"> 
                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Order Number</label>
                                    
                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            I2003051424063qrhOpl(24-06-2020)
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Product name</label>
                                    
                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            Product name
                                        </div>                                    
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Consumer ID</label>
                                    
                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            Jiwoong (backgu@daum.net)
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>                                        
                    </div>                    
                </div> 




                <div class="pop_edit_top cf">
                    <p class="pop_edit_tit">ALISEON Reply</p>
                </div> 

                <div class="pop_edit_mid"> 
                    <div class="customerDetail_info_wr"> 
                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Manager</label>
                                    
                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            Jenny & Sumaa
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Reply date</label>
                                    
                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            24-04-2020
                                        </div>                                    
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Reply</label>
                                    
                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            In response to your request, we have taken a warning action for the user, and if there is another problem, we will delete the user’s account. Thank you for the report. ALISEON Team Jenny for you
                                        </div>
                                    </div>                                
                                </div>

                                <div class="add_inquiry_btn_wr">
                                    <button type="button" id="btn_additionalRequests" class="btn_orange">Additional Inquiry</button> 
                                </div>
                            </div>

                            <div class="form_wr add_inquirt_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Additional Inquiry</label>
                                    
                                    <div class="col-md-9">
                                        <div class="customerDetail_info_value">
                                            <div class="add_send_form_wr">
                                                <form action="">
                                                    <div class="add_send_form">
                                                        <textarea class="form-control" name="add_inquiry_text" id="add_inquiry_text" rows="5"></textarea>
                                                    </div>
                                                    
                                                    <button type="button" id="btn_add_send" class="btn_blue">Send</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>                                        
                    </div>
                </div> 

                <div class="pop_edit_btn_wr">
                    <button type="submit" id="btn_ticketContents_confirm" class="btn_blue">Confirm</button>
                </div>                
            </form>
            
        </div>
    </div>

    <!-- pop Event Ticket -->  
    <div class="pop_bg pop_eventTicket_wr">
        <div class="pop_wr pop_eventTicket">
            <div class="pop_edit_top">
                <p class="pop_edit_tit">Event Ticket</p>
                <button type="button" class="btn_red" id="btn_eventTicket_close">Close</button>                              
            </div>
            
            <form action="">
                <div class="pop_edit_mid"> 
                    <div class="customerDetail_info_wr scrollBar">
                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Event Category</label>

                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value ">
                                            Party 
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Status</label>

                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value ">
                                            Before application
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Subject</label>

                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            Cooking show and network party with Emirates traditional food…
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-3 col-form-label section_label">Contents</label>

                                    <div class="col-md-9 padding_set">
                                        <div class="customerDetail_info_value">
                                            <div class="eventTicket_con">
                                                <span class="eventTicket_con_label">Date : </span>
                                                <span class="eventTicket_con_text">14-03-2020</span>
                                            </div>
                                            <div class="eventTicket_con">
                                                <span class="eventTicket_con_label">Venue : </span>
                                                <span class="eventTicket_con_text">In front of the Dubai Mall fountain</span>
                                            </div>
                                            <div class="eventTicket_con">
                                                <span class="eventTicket_con_label">Contents : </span>
                                                <span class="eventTicket_con_text">A networking party with Emirati’s traditional food with Dubai’s traditional chef Abdulla</span>
                                            </div> 
                                            <div class="eventTicket_con eventTicket_img">
                                                <img src="/images/admin/event_ticket01.png" alt="">
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>                   
                    </div>
                </div>                  

                <div class="pop_edit_btn_wr">
                    <button type="submit" id="btn_eventTicket_apply" class="btn_blue">Apply</button>
                    <button type="submit" id="btn_eventTicket_cancel" class="btn_blue">Cancel</button>
                </div>                
            </form>
            
        </div>
    </div>

    <!-- pop Event participation information -->  
    <div class="pop_bg pop_eventparticipation_wr">
        <div class="pop_wr pop_eventparticipation">
            <div class="pop_edit_top">
                <p class="pop_edit_tit">Event participation information</p>
                <button type="button" class="btn_red" id="btn_eventparticipation_close">Close</button>                              
            </div>
            
            <form action="">
                <div class="pop_edit_mid"> 
                    <div class="customerDetail_info_wr scrollBar">
                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-4 col-form-label section_label">Applicant’s name</label>

                                    <div class="col-md-8">
                                        <div class="customerDetail_info_value ">
                                            <input type="text" class="form-control" value="" id="event_app_name" name="event_app_name">
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-4 col-form-label section_label">Contact Number</label>

                                    <div class="col-md-8">
                                        <div class="customerDetail_info_value">
                                            <div class="fz0">
                                                <select class="form-control sel_blue select_mini2">
                                                    <option value="971">971</option>
                                                    <option value="971">972</option>
                                                    <option value="971">973</option>
                                                </select>    
                                                
                                                <input type="text" class="form-control" value="" id="event_contactNum" name="event_contactNum">
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-4 col-form-label section_label">Contact E-mail</label>

                                    <div class="col-md-8">
                                        <div class="customerDetail_info_value ">
                                            <input type="text" class="form-control" value="" id="event_contactEmail" name="event_contactEmail">
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>

                        <div class="customerDetail_info_box">
                            <div class="form_wr">
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-4 col-form-label section_label">Motivation to participate</label>

                                    <div class="col-md-8">
                                        <div class="customerDetail_info_value ">
                                            <textarea name="event_motivation" class="form-control" id="event_motivation" rows="8"></textarea>                                            
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>                   
                    </div>
                </div>                  

                <div class="pop_edit_btn_wr">
                    <button type="submit" id="btn_eventparticipation_apply" class="btn_blue">Apply</button>
                    <button type="submit" id="btn_eventparticipation_cancel" class="btn_blue">Cancel</button>
                </div>                
            </form>            
        </div>
    </div>


    <div class="btn_hidden">
        <button id="btn_inquiryTicket" class="btn_blue">Inquiry Ticket</button> 
        <button id="btn_orderNumSch" class="btn_blue">Order Number Search</button>   
        <button id="btn_ticketContents" class="btn_blue">Ticket Contents</button>       
        <button id="btn_eventTicket" class="btn_blue">Event Ticket</button>        
        <button id="btn_eventparticipation" class="btn_blue">Event participation information</button>        
           
    </div>
                                





@endsection