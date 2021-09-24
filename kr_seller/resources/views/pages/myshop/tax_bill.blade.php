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

                <div class="product_table mt10" >
                    <table>
                        <colgroup>
                            <col width="7%">
                            <col width="7%">
                            <col width="10%">
                            <col width="15%">
                            <col width="20%">
                            <col width="13%">
                            <col width="13%">
                        </colgroup>
                        <tr>
                            <th class="th_code">판매일</th>
                            <th class="th_status">정산 예정일</th>
                            <th class="th_name">정산금액</th>
                            <th class="th_contact">발급기한</th>
                            <th class="th_payment">상세내역  </th>
                            <th class="th_total_order">공급가액</th>
                            <th class="th_fee">부가세</th>
                        </tr>
                        <tr>
                            <td class="td_code">I2003051424063qrhOpl</td>
                            <td class="td_status">New Order</td>
                            <td class="td_name">Jiwoong(Jaq)</td>
                            <td class="td_contact">mokpo, <br>(+81-10-8100-2et)</td>
                            <td class="td_payment">Creadit card</td>
                            <td class="td_total_order">4,556</td>
                            <td class="td_fee">343</td>
                           
                        </tr>
                        
                        <tr>
                            <td class="td_code">I2003051424063qrhOpl</td>
                            <td class="td_status">New Order</td>
                            <td class="td_name">Jiwoong(Jaq)</td>
                            <td class="td_contact">mokpo, <br>(+81-10-8100-2et)</td>
                            <td class="td_payment">Creadit card</td>
                            <td class="td_total_order">4,556</td>
                            <td class="td_fee">343</td>
                        </tr>
                        <tr>
                            <td class="td_code">I2003051424063qrhOpl</td>
                            <td class="td_status">New Order</td>
                            <td class="td_name">Jiwoong(Jaq)</td>
                            <td class="td_contact">mokpo, <br>(+81-10-8100-2et)</td>
                            <td class="td_payment">Creadit card</td>
                            <td class="td_total_order">4,556</td>
                            <td class="td_fee">343</td>
                        </tr>
                    </table>
                </div>

                <div class="faq">
                    <div>
                         <span>* 현금영수증 발행내역: 매출인식 기준으로 국세청 전송자료(결제기준)과는 다릅니다.</span>
                    </div>
                    <div>
                        <span>* 기타: 핸드폰, 캐시, 쿠폰 등의 내용이 반영되어 있으며, (매출총액-신용카드, 결제-현금영수증)으로 산정합니다.</span>
                    </div>
                </div>

                <div class="faq ">
                    <div>
                        <div>
                            <span style="color:red">FAQ</span>
                        </div>
                        <div>
                            <span style="color:#2196F3">Q. 국세청 금액과 왜 다른가요?</span>
                        </div>
                        <div>
                            <span >A. 제공 금액은 매출인식 기준이므로 국세청 전송자료와 다름.</span>
                        </div>
                    
                    </div>
                </div>

                <div class="faq ">
                    <div>
                        <span style="color:#2196F3">Q. 기타 항목?</span>
                    </div>
                    <div>
                        <span >A. 핸드폰, 캐시, 쿠폰 등의 내용이 반영되어 있음.</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection

