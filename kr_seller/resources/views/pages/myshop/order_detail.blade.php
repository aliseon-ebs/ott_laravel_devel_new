@extends('layouts.common.seller_myshop_master')

@section('title') Order Detail @endsection

@section('content')

@component('components.breadcrumb')
@slot('title') Order Detail @endslot
@slot('li_1') New Order @endslot
@endcomponent


    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="section_tit">
                        <p class="p1">Order Details</p>
                    </div>

                    <div class="order_data_wr">
                        <table>
                            <tr>
                                <th>Order ID</th>
                                <td>bIMZ1592796988</td>
                            </tr>
                            <tr>
                                <th>Total Product</th>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th>Shipping Method</th>
                                <td>Free Shipping</td>
                            </tr>
                            <tr>
                                <th>Packaging Method</th>
                                <td>Default Packaging</td>
                            </tr>
                            <tr>
                                <th>Total Cost	</th>
                                <td>$390(USD)</td>
                            </tr>
                            <tr>
                                <th>Ordered Date</th>
                                <td>22-Jun-2020 03:36:28 am</td>
                            </tr>
                            <tr>
                                <th>Payment Method</th>
                                <td>Cash On Delivery</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                    <div class="order_data_btn">
                        <div class="d-print-none">                            
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light btn_blue">Print Invoice</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="section_tit">
                        <p class="p1">Billing Details</p>
                    </div>

                    <div class="order_data_wr">
                        <table>
                            <tr>
                                <th>Name</th>
                                <td>sgkang</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>ghssosek1@gmail.com</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>01020771642</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>mokpo city</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>Korea, Republic of</td>
                            </tr>
                            <tr>
                                <th>Payment Method </th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Payment Date</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="section_tit">
                        <p class="p1">Shipping Details</p>
                    </div>

                    <div class="order_data_wr">
                        <table>
                            <tr>
                                <th>Name</th>
                                <td>sgkang</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>ghssosek1@gmail.com</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>01020771642</td>
                            </tr>
                            <tr>
                                <th>Atdress</th>
                                <td> Korea, Republic of</td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td>a</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>a</td>
                            </tr>
                            <tr>
                                <th>Postal Code</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Delivery Company</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Delivery Start Date.</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Delivered date.</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Delivery Status</th>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="section_tit">
                        <p class="p1">Ordered Product</p>
                    </div>

                    <div class="order_data_wr">
                        <div class="order_img">
                            <img src="/images/ai/ai_img20.jpg" alt="">
                        </div>
                        <div class="order_info">
                            <div class="order_name_wr">
                                <p class="pro_name">Product Name</p>
                                <p class="pro_option">Option  : 
                                    <span class="option_txt">Red, S, 3ea</span>
                                </p>
                            </div>
                            <div class="order_price_wr">
                                <p class="order_price">$390(USD)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="order_send_wr">
        <a href="#" class="btn btn-primary w-md waves-effect waves-light btn_blue">Send E-mail</a>
    </div>

    

@endsection


