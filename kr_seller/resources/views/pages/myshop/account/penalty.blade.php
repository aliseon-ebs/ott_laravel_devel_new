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

                        <div class="product_table mt10"  >
                            <table>
                                <colgroup>
                                    <col width="10%">
                                    <col width="15%">
                                    <col width="10%">
                                    <col width="5%">
                                    <col width="25%">
                                    <col width="1%">
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="5%">
                                    <col width="">
                                    <col width="">
                                </colgroup>
                                <tr>
                                    <th class="th_chk">
                                    접수 번호</th>
                                    <th class="th_code">Order Code</th>
                                    <th class="th_status">Order Status</th>
                                    <th class="th_name">Customer ID(Name)</th>
                                    <th class="th_contact">Contact <br>Address / Number / E-mail</th>
                                    <th class="th_payment">Payment Method</th>
                                    <th class="th_total_order">Total Order Amount</th>
                                    <th class="th_fee">Delivery Fee</th>
                                    <th class="th_inquiry">Inquiry</th>
                                    <th class="th_amount">Sales Amount</th>
                                    <th class="th_manage" >주문 관리 </th>
                                </tr>
                                <tr>
                                    <td class="td_chk">
                                    </td>
                                    <td class="td_code">I2003051424063qrhOpl</td>
                                    <td class="td_status">New Order</td>
                                    <td class="td_name">Jiwoong(Jaq)</td>
                                    <td class="td_contact">mokpo, <br>(+81-10-8100-2et)</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage"><button type="button" class=" order_manage_btn sm" style="padding: 5px 15px"> 의견 제시</button></td>
                                </tr>
                                
                                <tr>
                                    <td class="td_chk">
                                    </td>
                                    <td class="td_code">I2003051424063qrhOpl</td>
                                    <td class="td_status">New Order</td>
                                    <td class="td_name">Jiwoong(Jaq)</td>
                                    <td class="td_contact">mokpo, <br>(+81-10-8100-2et)</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage">구매 확정</td>
                                </tr>
                                <tr>
                                    <td class="td_chk">
                                    </td>
                                    <td class="td_code">I2003051424063qrhOpl</td>
                                    <td class="td_status">New Order</td>
                                    <td class="td_name">Jiwoong(Jaq)</td>
                                    <td class="td_contact">mokpo, <br>(+81-10-8100-2et)</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage">결제 미완료</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 


@endsection

