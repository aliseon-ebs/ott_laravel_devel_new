@extends('layouts.common.seller_master')


@section('contents')
<div class="main_top">
    <div class="wrapper">
        <div class="for_seller_top">
            <div class="phone"></div>
            <div class="seller_en">
                <div class="en_tit">
                    {{$data['general_setting']['general_setting_seller_body']['seller.body.aliseonforseller']}}
                </div>
                <div class="en_sub">
                    {{$data['general_setting']['general_setting_seller_body']['seller.body.aliseonforsellerdesc']}}
                </div>
                <div class="en_btn">
                    {{$data['general_setting']['general_setting_seller_body']['seller.body.sellerrequest']}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main_bottom">
    <div class="wrapper">
        <div class="for_seller_top">
            <div class="seller_en">
                <div class="en_tit">
                    {{$data['general_setting']['general_setting_seller_body']['seller.body.aliseonforseller']}}
                </div>
                <div class="en_sub">
                    {{$data['general_setting']['general_setting_seller_body']['seller.body.aliseonforsellerdesc']}}
                </div>
                <div class="en_btn">
                    {{$data['general_setting']['general_setting_seller_body']['seller.body.sellerrequest']}}
                </div>
            </div>
            <div class="phone_right"></div>
        </div>
    </div>
</div>

<div class="collaboration">
    <div class="wrapper">
        <div class="for_seller_bottom">
            <div>
            <div class="en_tit">
                {{$data['general_setting']['general_setting_seller_body']['seller.body.sellercreatorcollab']}}
            </div>
            <div class="en_sub">
                {{$data['general_setting']['general_setting_seller_body']['seller.body.sellercreatorcollabdesc']}}
            </div>
            </div>
        </div>
    </div>
</div>
<div class="simple_seller">
    <div class="wrapper">
        <div class="simple_tit">
            {{$data['general_setting']['general_setting_seller_body']['seller.body.sellerapplytitle']}}
        </div>
        <div class="simple_sub">
            {{$data['general_setting']['general_setting_seller_body']['seller.body.sellerapplysubtitle']}}
        </div>
        <div class="simple_rol">



                <div id="reviewExampleControls" class="carousel slide review-carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="simple_num">
                                {{$data['general_setting']['general_setting_seller_body']['seller.body.sellerapply01']}}
                            </div>
                            <div class="simple_content">
                                <div class="sim_tit">
                                    {{$data['general_setting']['general_setting_seller_body']['seller.body.sellerapply01title']}}
                                </div>
                                <div class="sim_sub">
                                    {{$data['general_setting']['general_setting_seller_body']['seller.body.sellerapply01desc']}}
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="simple_num">
                                02
                            </div>
                            <div class="simple_content">
                                <div class="sim_tit">
                                    셀러 등록 단계
                                </div>
                                <div class="sim_sub">
                                    “셀러 등록 1단계 설명란, 셀러 등록 1단계
                                    설명란, 셀러 등록 1단계 설명란, 셀러 등록
                                    1단계 설명란”
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="simple_num">
                                03
                            </div>
                            <div class="simple_content">
                                <div class="sim_tit">
                                    셀러 등록 단계
                                </div>
                                <div class="sim_sub">
                                    “셀러 등록 1단계 설명란, 셀러 등록 1단계
                                    설명란, 셀러 등록 1단계 설명란, 셀러 등록
                                    1단계 설명란”
                                </div>
                            </div>
                        </div>             
                        <div class="carousel-item">
                            <div class="simple_num">
                                04
                            </div>
                            <div class="simple_content">
                                <div class="sim_tit">
                                    셀러 등록 단계
                                </div>
                                <div class="sim_sub">
                                    “셀러 등록 1단계 설명란, 셀러 등록 1단계
                                    설명란, 셀러 등록 1단계 설명란, 셀러 등록
                                    1단계 설명란”
                                </div>
                            </div>
                        </div>                 
                        <div class="carousel-item">
                            <div class="simple_num">
                                05
                            </div>
                            <div class="simple_content">
                                <div class="sim_tit">
                                    셀러 등록 단계
                                </div>
                                <div class="sim_sub">
                                    “셀러 등록 1단계 설명란, 셀러 등록 1단계
                                    설명란, 셀러 등록 1단계 설명란, 셀러 등록
                                    1단계 설명란”
                                </div>
                            </div>
                        </div>              
                    </div>
                        
                    <a class="carousel-control-prev" href="#reviewExampleControls" role="button" data-slide="prev">
                        <i class="mdi mdi-chevron-left carousel-control-icon"></i>
                    </a>
                    <a class="carousel-control-next" href="#reviewExampleControls" role="button" data-slide="next">
                        <i class="mdi mdi-chevron-right carousel-control-icon"></i>
                    </a>
                </div>

    </div>
</div>
</div>
@endsection
