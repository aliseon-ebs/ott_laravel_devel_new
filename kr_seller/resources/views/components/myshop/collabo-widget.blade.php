
        <div>
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#total" role="tab" aria-selected="true" >
                        Ticket Subject
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#today" role="tab" aria-selected="true" >
                        In Process
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#monthly" role="tab" aria-selected="true" >
                        Completed
                    </a>
                </li>
            </ul>
            <div class="tab-content p3 text-muted">
                <div class="tab-pane active" id="total">
                    <div class="order_list_wr">
                        <div class="btn_wr">
                            <div class="side_btn_wr">
                                <span class="sm_title">{{$new_order}}</span> <span class="order_card_val2">2,333</span>               
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
                                    <th class="th_code">{{$number}}</th>
                                    <th class="th_status">{{$private_public}}</th>
                                    <th class="th_name">{{$sort}}</th>
                                    <th class="th_contact">{{$startdate}}</th>
                                    <th class="th_payment">{{$expiredate}}</th>
                                    <th class="th_total_order">{{$product}}</th>
                                    <th class="th_fee">{{$option}}</th>
                                    <th class="th_inquiry">{{$sales}}</th>
                                    <th class="th_amount">{{$deposit}}</th>
                                    <th class="th_manage" >{{$devidends}} </th>
                                    <th class="th_manage" >{{$income}}</th>
                                    <th class="th_manage" >{{$progress}}</th>
                                    
                                </tr>
                                <tr>
                                    <td class="td_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td class="td_code">I20030514</td>
                                    <td class="td_status">New Order</td>
                                    <td class="td_name">-</td>
                                    <td class="td_contact">DD-MM-YY</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage">2,000</td>
                                    <td class="td_manage">2,000,000</td>
                                    <td class="td_manage">Processing</td>
                                </tr>
                                
                                <tr>
                                    <td class="td_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td class="td_code">I20030514</td>
                                    <td class="td_status">New Order</td>
                                    <td class="td_name">-</td>
                                    <td class="td_contact">DD-MM-YY</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage">2,000</td>
                                    <td class="td_manage">2,000,000</td>
                                    <td class="td_manage">Processing</td>
                                </tr>
                                <tr>
                                    <td class="td_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td class="td_code">I20030514</td>
                                    <td class="td_status">New Order</td>
                                    <td class="td_name">-</td>
                                    <td class="td_contact">DD-MM-YY</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage">2,000</td>
                                    <td class="td_manage">2,000,000</td>
                                    <td class="td_manage">Processing</td>
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
                            <span class="sm_title">{{$new_order}}</span> <span class="order_card_val2">2,333</span>
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
                                    <th class="th_code">Number</th>
                                    <th class="th_status">Private / Public</th>
                                    <th class="th_name">Sort</th>
                                    <th class="th_contact">Started date</th>
                                    <th class="th_payment">Expired date</th>
                                    <th class="th_total_order">Product</th>
                                    <th class="th_fee">Option</th>
                                    <th class="th_inquiry">Sales</th>
                                    <th class="th_amount">Deposit</th>
                                    <th class="th_manage" >Devidends </th>
                                    <th class="th_manage" >Income</th>
                                    <th class="th_manage" >Progress </th>
                                    
                                </tr>
                                <tr>
                                    <td class="td_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td class="td_code">I20030514</td>
                                    <td class="td_status">New Order</td>
                                    <td class="td_name">-</td>
                                    <td class="td_contact">DD-MM-YY</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage">2,000</td>
                                    <td class="td_manage">2,000,000</td>
                                    <td class="td_manage">Processing</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td class="td_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td class="td_code">I20030514</td>
                                    <td class="td_status">New Order</td>
                                    <td class="td_name">-</td>
                                    <td class="td_contact">DD-MM-YY</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage">2,000</td>
                                    <td class="td_manage">2,000,000</td>
                                    <td class="td_manage">Processing</td>
                                </tr>
                                <tr>
                                    <td class="td_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td class="td_code">I20030514</td>
                                    <td class="td_status">New Order</td>
                                    <td class="td_name">-</td>
                                    <td class="td_contact">DD-MM-YY</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage">2,000</td>
                                    <td class="td_manage">2,000,000</td>
                                    <td class="td_manage">Processing</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="monthly">
                    <div class="order_list_wr">
                        <div class="btn_wr">
                            <div class="side_btn_wr">
                            <span class="sm_title">{{$new_order}}</span> <span class="order_card_val2">2,333</span>
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
                                    <th class="th_code">Number</th>
                                    <th class="th_status">Private / Public</th>
                                    <th class="th_name">Sort</th>
                                    <th class="th_contact">Started date</th>
                                    <th class="th_payment">Expired date</th>
                                    <th class="th_total_order">Product</th>
                                    <th class="th_fee">Option</th>
                                    <th class="th_inquiry">Sales</th>
                                    <th class="th_amount">Deposit</th>
                                    <th class="th_manage" >Devidends </th>
                                    <th class="th_manage" >Income</th>
                                    <th class="th_manage" >Progress </th>
                                </tr>
                                <tr>
                                    <td class="td_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td class="td_code">I20030514</td>
                                    <td class="td_status">New Order</td>
                                    <td class="td_name">-</td>
                                    <td class="td_contact">DD-MM-YY</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage">2,000</td>
                                    <td class="td_manage">2,000,000</td>
                                    <td class="td_manage">Processing</td>
                                </tr>
                                
                                <tr>
                                    <td class="td_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td class="td_code">I20030514</td>
                                    <td class="td_status">New Order</td>
                                    <td class="td_name">-</td>
                                    <td class="td_contact">DD-MM-YY</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage">2,000</td>
                                    <td class="td_manage">2,000,000</td>
                                    <td class="td_manage">Processing</td>
                                </tr>
                                <tr>
                                    <td class="td_chk">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td class="td_code">I20030514</td>
                                    <td class="td_status">New Order</td>
                                    <td class="td_name">-</td>
                                    <td class="td_contact">DD-MM-YY</td>
                                    <td class="td_payment">Creadit card</td>
                                    <td class="td_total_order">4,556</td>
                                    <td class="td_fee">343</td>
                                    <td class="td_inquir">N</td>
                                    <td class="td_amount">4,899</td>
                                    <td class="td_manage">2,000</td>
                                    <td class="td_manage">2,000,000</td>
                                    <td class="td_manage">Processing</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 주문 모달 바 -->
