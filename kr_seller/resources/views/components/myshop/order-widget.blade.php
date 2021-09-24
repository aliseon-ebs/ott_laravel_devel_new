
        <div class="order_card_wr">
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#total" role="tab" aria-selected="true" >
                        총 주문 내역
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#today" role="tab" aria-selected="true" >
                        배송 전 주문
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#monthly" role="tab" aria-selected="true" >
                         배송 중인 주문
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#yearly" role="tab" aria-selected="true" >
                        배송 완료 주문     
                    </a>
                </li>
            </ul>
            <div class="tab-content p3 text-muted">
                <div class="tab-pane active" id="total">
                    <div class="order_list_wr">
                        <div class="btn_wr">
                            <div class="side_btn_wr">
                            새 주문 <span class="order_card_val2">2,333</span>               
                            </div>
                            <div class="side_btn_wr">
                                <button type="button" class="be_submit btn_blue ">Batch delivery of selected orders</button>
                                <button type="button" class="btn_blue">Excel Download</button>
                            </div>   
                        </div>                    
                        
                        <div class="product_table">
                            <table>
                                <colgroup>
                                    <col width="">
                                    <col width="15%">
                                    <col width="10%">
                                    <col width="5%">
                                    <col width="20%">
                                    <col width="1%">
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="5%">
                                    <col width="">
                                    <col width="">
                                </colgroup>
                                <tr>
                                    <th class="th_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </th>
                                    <th class="th_code">{{$order_code}}</th>
                                    <th class="th_status">{{$order_status}}</th>
                                    <th class="th_name">{{$customer_id}}</th>
                                    <th class="th_contact">{{$contact_name_number_email}}</th>
                                    <th class="th_payment">Payment Method</th>
                                    <th class="th_total_order">{{$total_order_amount}}</th>
                                    <th class="th_fee">{{$delivery_fee}}</th>
                                    <th class="th_inquiry">{{$inquiry}}</th>
                                    <th class="th_amount">{{$sales_amount}}</th>
                                    <th class="th_manage" >{{$order_management}}</th>
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
                                    <td class="td_contact">mokpo, <br>(+81-10-8100-2et)</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage"><button type="button" class=" order_manage_btn sm" style="padding: 5px 15px">{{$order_manage}}</button></td>
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
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
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

                <div class="be_modal">
                    <div class="be_modal_content_batch be_modal_content_order">
                        <div class="order_block">
                        <div class="modal_close_btn"></div>
                        <div class="order_content">
                            <input type="checkbox" class="order-input" id="">
                            배송 처리
                        </div>
                        <div class="order_content">
                            <input type="checkbox" class="order-input" id="">
                            배송 완료 처리
                        </div>
                        <div class="order_content">
                            <input type="checkbox" class="order-input" id="">
                            주문 취소
                        </div>
                        <div class="order_content">
                            <input type="checkbox" class="order-input" id="">
                            반품
                        </div>
                        <div class="order_content">
                            <input type="checkbox" class="order-input" id="">
                            결제 취소
                        </div>
                        <div class="be_btn">
                            <div class="be_modal_cancel_btn">Cancel</div>
                            <div class="be_modal_confirm_btn">Confirm</div>
                        </div>
                    </div>
                    </div>  
                </div>


                <div class="tab-pane" id="today">
                    <div class="order_list_wr">
                        <div class="btn_wr">
                            <div class="side_btn_wr">
                            새 주문 <span class="order_card_val2">2,333</span>
                            </div>
                            <div class="side_btn_wr">
                                <button type="button" class="be_submit btn_blue ">Batch delivery of selected orders</button>
                                <button type="button" class="btn_blue">Excel Download</button>
                            </div>   
                        </div>                    
                        
                        <div class="product_table">
                            <table>
                                <tr>
                                    <th class="th_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </th>
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
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
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
                                    <td class="td_manage"><button type="button" class=" order_manage_btn sm" style="padding: 5px 15px">{{$order_manage}}</button></td>
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
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
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
                <div class="tab-pane" id="monthly">
                    <div class="order_list_wr">
                        <div class="btn_wr">
                            <div class="side_btn_wr">
                            새 주문 <span class="order_card_val2">2,333</span>
                            </div>
                            <div class="side_btn_wr">
                                <button type="button" class="be_submit btn_blue ">Batch delivery of selected orders</button>
                                <button type="button" class="btn_blue">Excel Download</button>
                            </div>   
                        </div>                    
                        
                        <div class="product_table">
                            <table>
                                <tr>
                                    <th class="th_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </th>
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
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
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
                                    <td class="td_manage"><button type="button" class=" order_manage_btn sm" style="padding: 5px 15px">{{$order_manage}}</button></td>
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
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
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
                <div class="tab-pane" id="yearly">
                    <div class="order_list_wr">
                        <div class="btn_wr">
                            <div class="side_btn_wr">
                            새 주문 <span class="order_card_val2">2,333</span>
                            </div>
                            <div class="side_btn_wr">
                                <button type="button" class="be_submit btn_blue ">Batch delivery of selected orders</button>
                                <button type="button" class="btn_blue">Excel Download</button>
                            </div>   
                        </div>                    
                        
                        <div class="product_table">
                            <table>
                                <tr>
                                    <th class="th_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </th>
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
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
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
                                    <td class="td_manage"><button type="button" class=" order_manage_btn sm" style="padding: 5px 15px">{{$order_manage}}</button></td>
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
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
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

        <!-- 주문 모달 바 -->
        <div class="order_modal1">
            <div class="be_modal_content1">
                <div class="order_block">
                    <div class="modal_close_btn"></div>
                    <div class="order_content"></div>
                    <div class="order_content"></div>
                    <div class="order_content2">
                        선택한 일을 일괄 진행하겠습니다.
                    </div>
                    <div class="order_content">
                    </div>
                    <div class="be_btn">
                        <div class="be_modal_cancel_btn">Cancel</div>
                        <div class="be_modal_confirm1_btn">Confirm</div>
                    </div>
                </div>
            </div>  
        </div>

        <div class="order_modal2">
            <div class="be_modal_content2">
                <div class="order_block">
                    <div class="modal_close_btn"></div>
                    <div class="order_content"></div>
                    <div class="order_content"></div>
                    <div class="order_content2">
                        처리되었습니다.
                    </div>
                    <div class="order_content">
                    </div>
                    <div class="be_btn">
                        <div class="be_modal_confirm2_btn">Confirm</div>
                    </div>
                </div>
            </div>  
        </div>