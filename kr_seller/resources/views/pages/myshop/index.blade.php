@extends('layouts.common.seller_myshop_master')

@section('title') Dashboard @endsection

@section('contents')

<div class="main_title">
    {{$data['general_setting']['general_setting_seller_body']['seller.body.dashboard']}}
</div>
<div class="dash_row">
    <div class="col-6" style="margin-left:24px">
        <div class="dash_row">
            @component('components.myshop.dashboard-widget')
            @slot('card_title') {{$data['general_setting']['general_setting_seller_body']['seller.body.neworder']}}  @endslot
            @slot('order_percentage') 0.26%  @endslot
            @slot('order_val2') 2,333  @endslot
            @slot('order_val') 30,820  @endslot
            @slot('order_unit') AED  @endslot
            @endcomponent 
        </div>
        <div class="dash_row">
            <div class="dash_col-6" >
                @component('components.myshop.dashboard-widget2')
                @slot('card_title') {{$data['general_setting']['general_setting_seller_body']['seller.body.completedorder']}}  @endslot
                @slot('total') 1  @endslot
                @slot('today')  1 @endslot
                @slot('monthly') 1  @endslot
                @slot('yearly')  1 @endslot
                @slot('order_val2')
                    2,333    
                @endslot
                @endcomponent
                
            </div>
            <div class="col-6" style="margin-left:24px">
                @component('components.myshop.dashboard-widget2')
                @slot('card_title') {{$data['general_setting']['general_setting_seller_body']['seller.body.completedorder']}}  @endslot
                @slot('total')  2 @endslot
                @slot('today') 2  @endslot
                @slot('monthly') 2  @endslot
                @slot('yearly') 2  @endslot
                @slot('order_val2')
                2,333    
            @endslot
                @endcomponent
                
            </div>
        </div>
        <div class="dash_row">
            <div class="dash_col-6" >
                @component('components.myshop.dashboard-widget2')
                @slot('card_title') {{$data['general_setting']['general_setting_seller_body']['seller.body.completedorder']}} @endslot
                @slot('total')  3 @endslot
                @slot('today') 3  @endslot
                @slot('monthly') 3  @endslot
                @slot('yearly')  3 @endslot
                @slot('order_val2')
                2,333    
            @endslot
                @endcomponent
                
            </div>
            <div class="col-6" style="margin-left:24px">
                @component('components.myshop.dashboard-widget2')
                @slot('card_title') {{$data['general_setting']['general_setting_seller_body']['seller.body.completedorder']}}  @endslot
                @slot('total') 4  @endslot
                @slot('today') 4  @endslot
                @slot('monthly')4  @endslot
                @slot('yearly') 4  @endslot
                @slot('order_val2')
                2,333    
            @endslot
                @endcomponent
                
            </div>
        </div>
    </div>
           <div class="col-6" style="margin-left:24px">
            <div class="card revanue_chart " style="height:607px">
                <div class="card-body">
                    <div class="card_title_link_wr cf">
                        <h4 class="card-title">{{$data['general_setting']['general_setting_seller_body']['seller.body.revenueanalyticsmonth']}}</h4>
                    </div>

                    <div id="revanue-chart" class="apex-charts" dir="ltr" style="width:570px; height:400px"></div>
                </div>
            </div>       
        </div>
</div>

<div class="row row_box">
    <!-- notice -->
    <div class="col-xl-4">                            
        {{--
        *?????????(????????????)
        card_title -> ????????? ??????
        card_link -> ????????? ???????????? ??????
        bo_cate -> ????????? ??? ??????(????????????)
        bo_subj -> ????????? ??? ??????
        --}}
        @component('components.myshop.list-board-card')
        @slot('card_title') {{$data['general_setting']['general_setting_seller_body']['seller.body.aliseonnotice']}}   @endslot
        @slot('card_link') #   @endslot
        @slot('bo_cate') System   @endslot
        @slot('bo_subj') Lorem ipsumLorem ipsumLorem ipsumLoremLorem ipsumLorem ipsumLorem ipsumLorem ???  @endslot
        @endcomponent                                
    </div>
    <!-- end notice -->

    <!-- seller promotion -->
    <div class="col-xl-4">
        @component('components.myshop.list-board-card')
        @slot('card_title') {{$data['general_setting']['general_setting_seller_body']['seller.body.promotion']}}  @endslot
        @slot('card_link') #   @endslot
        @slot('bo_cate') Promotion   @endslot
        @slot('bo_subj') Lorem ipsumLorem ipsumLorem ipsumLoremLorem ipsumLorem ipsumLorem ipsumLorem ???  @endslot
        @endcomponent
    </div>
    <!-- end seller promotion -->

    <div class="col-xl-4">
        {{--
        *?????? ?????????(????????????)
        card_title -> ?????? ??????
        card_link -> ???????????? ??????
        review_con -> ?????? ??????
        reviewer_img -> ????????? ?????????
        reviewer_name -> ????????? ??????
        reviewer_info -> ????????? ??????(??????)
        --}}
        @component('components.myshop.say')
        @slot('card_title') {{$data['general_setting']['general_setting_seller_body']['seller.body.withmeetup']}} @endslot
        @slot('card_link') #   @endslot
        @slot('review_con') New meetup  @endslot
        @slot('reviewer_img') S   @endslot
        @slot('reviewer_name') Simon Hawkins   @endslot
        @slot('reviewer_info') CEO of XYZ Company   @endslot
        @endcomponent                       
    </div>
</div>
   <div class="row row_box">
        <div class="col-xl-4"> 
            @component('components.myshop.list-board-card')
            @slot('card_title') Newest Inquiry   @endslot
            @slot('card_link') #   @endslot
            @slot('bo_cate') Dd-mm-yy   @endslot
            @slot('bo_subj') Lorem ipsumLorem ipsumLorem ipsumLoremLorem ipsumLorem ipsumLorem ipsumLorem ???  @endslot
            @endcomponent                                
        </div>

        <div class="col-xl-4">
            @component('components.myshop.list-board-card')
            @slot('card_title') Newest Reports  @endslot
            @slot('card_link') #   @endslot
            @slot('bo_cate') Dd-mm-yy   @endslot
            @slot('bo_subj') Lorem ipsumLorem ipsumLorem ipsumLoremLorem ipsumLorem ipsumLorem ipsumLorem ???  @endslot
            @endcomponent  
        </div>

        <div class="col-xl-4">                            
            @component('components.myshop.say2')
            @slot('card_title') Newest Reviews @endslot
            @slot('card_link') #   @endslot
            @slot('review_con')   @endslot
            @slot('reviewer_img') S   @endslot
            @slot('reviewer_name') Simon Hawkins   @endslot
            @slot('reviewer_info') CEO of XYZ Company   @endslot
            @endcomponent                       
        </div>
    </div>
                   
    <div class="row row_box">
        <div class="col-5">
            {{--
            *myselling.co-sales(????????????)
            card_title -> ?????? ??????
            card_link -> ???????????? ??????
            review_con -> ?????? ??????
            reviewer_img -> ????????? ?????????
            reviewer_name -> ????????? ??????
            reviewer_info -> ????????? ??????(??????)                                    
            --}}
            @component('components.myshop.co-sales')
            @slot('card_title') ?????? ????????? ??????????????? ?????? ??????  @endslot
            @slot('requester_img') <img src="/images/common/admin_creator_thum01.png" alt="" class="avatar-sm rounded-circle">  @endslot
            @slot('requester_name') Paul  @endslot
            @slot('requester_msg') Hey! there I'm available  @endslot
            @slot('requester_time') 05 min  @endslot
            @slot('card_link') #  @endslot
            @endcomponent                                
        </div>

        <!-- monthly top creator -->
        <div class="col-7">
            @component('layouts.myshop.layout-4-creator')    

            @endcomponent 
        </div>
        <!-- end monthly top creator -->                        
    </div>

    <div class="row row_box">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Column Charts</h4>

                    <div id="column_chart" class="apex-charts" dir="ltr" ></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
<script src="{{ URL::asset('/libs/apexcharts/apexcharts.min.js')}}"></script>
    
<script src="{{ URL::asset('/libs/pages/dashboard.init.js')}}"></script>
<script src="{{URL::asset('/libs/pages/apexcharts.init.js')}}"></script>

@endsection