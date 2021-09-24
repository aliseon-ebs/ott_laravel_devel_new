<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!--<li class="menu-title">Menu</li>-->             

                <li>
                    <a href="{{route('myshop_index')}}" >
                        <img src="/images/common/FontAwsome (th).png">
                        <span> {{$data['general_setting']['general_setting_seller_middle']['seller.middle.dashboard']}} </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('myshop_store_management')}}" >
                        <img src="/images/common/FontAwsome (store).png">
                        <span> {{$data['general_setting']['general_setting_seller_middle']['seller.middle.storemanagement']}}</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class=" down_arrow">
                        <img src="/images/common/FontAwsome (folder-plus).png">
                        <span>{{$data['general_setting']['general_setting_seller_middle']['seller.middle.product']}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('myshop_product')}}">{{$data['general_setting']['general_setting_seller_middle']['seller.middle.productlist']}}</a></li>
                        <li><a href="{{route('myshop_product_upload')}}">{{$data['general_setting']['general_setting_seller_middle']['seller.middle.addnewproduct']}}</a></li>
                        <li><a href="{{route('myshop_product_upload2')}}">상품 업로드 테스트</a></li>
                        <li><a href="{{'http://seller.kr.aliseon.com/myshop/product/view/123'}}">{{$data['general_setting']['general_setting_seller_middle']['seller.middle.productgroup']}}</a></li>
                        <li><a href="{{route('myshop_product_bulkupload')}}">{{$data['general_setting']['general_setting_seller_middle']['seller.middle.addbulkproducts']}}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('myshop_order')}}" >
                        <img src="/images/common/FontAwsome (cart-plus).png">
                        <span> {{$data['general_setting']['general_setting_seller_middle']['seller.middle.order']}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('myshop_cancel_refund_exchange')}}" >
                        <img src="/images/common/FontAwsome (history).png">
                        <span> {{$data['general_setting']['general_setting_seller_middle']['seller.middle.cancelrefundexchange']}}</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class=" down_arrow">
                        <img src="/images/common/FontAwsome (user-friends).png">
                        <span>Collaboration</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('myshop_cooperation_index')}}">{{$data['general_setting']['general_setting_seller_middle']['seller.middle.collaboration']}}</a></li>
                        <li><a href="{{route('myshop_cooperation_list')}}">Collaboration List</a></li>
                    </ul>
                </li>                

                <li>
                    <a href="javascript: void(0);" class=" down_arrow">
                        <img src="/images/common/FontAwsome (chart-line).png">
                        <span>{{$data['general_setting']['general_setting_seller_middle']['seller.middle.account']}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('myshop_account_calculate')}}">Calculate</a></li>
                        <li><a href="{{route('myshop_account_payment_detail')}}">Payment Details</a></li>
                        <li><a href="{{route('myshop_account_penalty')}}">Penalty</a></li>
                    </ul>
                </li>  
                <li>
                    <a href="javascript: void(0);" class=" down_arrow">
                        <img src="/images/common/FontAwsome (calculator).png">
                        <span>{{$data['general_setting']['general_setting_seller_middle']['seller.middle.taxbill']}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('myshop_tax_bill')}}">Value Tax</a></li>
                    </ul>
                </li>  
                <li>
                    <a href="javascript: void(0);" class=" down_arrow">
                        <img src="/images/common/FontAwsome (ad).png">
                        <span>{{$data['general_setting']['general_setting_seller_middle']['seller.middle.ad']}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Setting up ADs</a></li>
                        <li><a href="#">Executive AD History</a></li>
                        <li><a href="#">ALISEON AD Promotion</a></li>
                        <li><a href="#">ETC Ticket</a></li>
                    </ul>
                </li>  
                <li>
                    <a href="javascript: void(0);" class=" down_arrow">
                        <img src="/images/common/FontAwsome (user-clock).png">
                        <span>{{$data['general_setting']['general_setting_seller_middle']['seller.middle.customerservice']}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('myshop_customer_service_product_inquiry')}}">Product Inquiry</a></li>
                        <li><a href="{{route('myshop_customer_service_product_review')}}">Product Review</a></li>
                        <li><a href="{{route('myshop_customer_service_product_report')}}">Product Report</a></li>
                    </ul>
                </li>  
                <li>
                    <a href="javascript: void(0);" class=" down_arrow">
                        <img src="/images/common/FontAwsome (question-circle).png">
                        <span>{{$data['general_setting']['general_setting_seller_middle']['seller.middle.aliseonservice']}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('myshop_aliseon_service_inquiry_ticket')}}">Inquiry Ticket</a></li>
                        <li><a href="{{route('myshop_aliseon_service_event_ticket')}}">Event Ticket</a></li>
                    </ul>
                </li>  
                <li>
                    <a href="{{route('myshop_statistics')}}" >
                        <img src="/images/common/FontAwsome (chart-pie).png">
                        <span>{{$data['general_setting']['general_setting_seller_middle']['seller.middle.salesstatics']}}</span>
                    </a>
                </li>  
            </ul>
        </div>
    </div>
</div>
<!-- Left Sidebar End -->