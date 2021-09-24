@extends('layouts.common.seller_myshop_master')

@section('title') Order List @endsection

@section('contents')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">                    
                    <div class="search_wr">    
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
                        <button type="button" class="btn_blue" >Excel Download </button>
                        
                    </div>

                    <div class="product_table overflow-scroll mt10">
                        <table>
                            <tr>
                                <th class="th_chk"  rowspan="2">
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1"></label>
                                    </div>
                                </th>
                                <th class="th_code" rowspan="2">Order Code</th>
                                <th class="th_status" rowspan="2">Order Status</th>
                                <th class="th_name" rowspan="2">Customer ID(Name)</th>
                                <th class="th_contact" rowspan="2">Contact <br>Address / Number / E-mail</th>
                                <th class="th_payment" colspan="5">Payment Method</th>
                                <th class="th_total_order" colspan="5">Total Order Amount</th>
                                <th class="th_fee" rowspan="2">Delivery Fee</th>
                                <th class="th_inquiry" rowspan="2">Inquiry</th>
                                <th class="th_amount" rowspan="2">Sales Amount</th>
                                <th class="th_manage"  rowspan="2">주문 관리 </th>
                                <th class="th_code" rowspan="2">Order Code</th>
                                <th class="th_status" rowspan="2">Order Status</th>
                                <th class="th_name" rowspan="2">Customer ID(Name)</th>
                                <th class="th_contact" rowspan="2">Contact <br>Address / Number / E-mail</th>
                                
                                <th class="th_fee" rowspan="2">Delivery Fee</th>
                                <th class="th_inquiry" rowspan="2">Inquiry</th>
                                <th class="th_amount" rowspan="2">Sales Amount</th>
                                <th class="th_manage"  rowspan="2">주문 관리 </th>
                            </tr>
                            <tr class="product_table2">
                                <td class="td_code">I2003051424063qrhOpl</td>
                                <td class="td_status">New Order</td>
                                <td class="td_name">Jiwoong(Jaq)</td>
                                <td class="td_contact">mokp)</td>
                                <td class="td_payment">Creadit card</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_total_order">4,556</td>
                                
                            </tr>
                            
                            <tr>
                                <td class="td_chk">
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1"></label>
                                    </div>
                                </td>
                                <td class="td_code">I2003051424063qrhOpl</td>
                                <td class="td_status">New Order</td>
                                <td class="td_name">Jiwoong(Jaq)</td>
                                <td class="td_contact">mokp)</td>
                                <td class="td_payment">Creadit card</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_manage">구매 확정</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_code">I2003051424063qrhOpl</td>
                                <td class="td_status">New Order</td>
                                <td class="td_name">Jiwoong(Jaq)</td>
                                <td class="td_contact">mokp)</td>
                                <td class="td_payment">Creadit card</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                
                            </tr>
                            <tr>
                                <td class="td_chk">
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1"></label>
                                    </div>
                                </td>
                                <td class="td_code">I2003051424063qrhOpl</td>
                                <td class="td_status">New Order</td>
                                <td class="td_name">Jiwoong(Jaq)</td>
                                <td class="td_contact">mokp)</td>
                                <td class="td_payment">Creadit card</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_manage">결제 미완료</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_code">I2003051424063qrhOpl</td>
                                <td class="td_status">New Order</td>
                                <td class="td_name">Jiwoong(Jaq)</td>
                                <td class="td_contact">mokp)</td>
                                <td class="td_payment">Creadit card</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                               
                            </tr>
                            <tr>
                                <td class="td_chk">
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1"></label>
                                    </div>
                                </td>
                                <td class="td_code">I2003051424063qrhOpl</td>
                                <td class="td_status">New Order</td>
                                <td class="td_name">Jiwoong(Jaq)</td>
                                <td class="td_contact">mokp)</td>
                                <td class="td_payment">Creadit card</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_manage">구매 확정</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_code">I2003051424063qrhOpl</td>
                                <td class="td_status">New Order</td>
                                <td class="td_name">Jiwoong(Jaq)</td>
                                <td class="td_contact">mokp)</td>
                                <td class="td_payment">Creadit card</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                               
                            </tr>
                            <tr>
                                <td class="td_chk">
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1"></label>
                                    </div>
                                </td>
                                <td class="td_code">I2003051424063qrhOpl</td>
                                <td class="td_status">New Order</td>
                                <td class="td_name">Jiwoong(Jaq)</td>
                                <td class="td_contact">mokp)</td>
                                <td class="td_payment">Creadit card</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_manage">구매 확정</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                                <td class="td_amount">4,899</td>
                                <td class="td_code">I2003051424063qrhOpl</td>
                                <td class="td_status">New Order</td>
                                <td class="td_name">Jiwoong(Jaq)</td>
                                <td class="td_contact">mokp)</td>
                                <td class="td_payment">Creadit card</td>
                                <td class="td_total_order">4,556</td>
                                <td class="td_fee">343</td>
                                <td class="td_inquir">N</td>
                               
                            </tr>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 


@endsection

