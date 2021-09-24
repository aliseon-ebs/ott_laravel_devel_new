<div class="top_banner">
	<div class="top_banner_close"><img src="/images/common/hd_close_icon01.png" alt=""></div>
	<img src="/images/common/hd_top_banner.png" alt="" class="top_banner_img">
</div>

<div class="wrapper">
    <div class="selling_header">
        <div class="header_logo">

        </div>
    
        <a href="{{route('myshop_index')}}" class="header_selling">
            {{$data['general_setting']['general_setting_seller_header']['seller.header.mysellingpage']}}    
        </a>

        <div class="category">
            <ul class="header_category">
                <li>
                    <a href="{{route('sales_traning')}}">{{$data['general_setting']['general_setting_seller_header']['seller.header.salestraining']}}</a>
                </li>
                <li>
                    <a href="{{route('news_in_aliseon')}}">{{$data['general_setting']['general_setting_seller_header']['seller.header.newsinaliseon']}}</a>
                </li>
                <li>
                    <a href="{{route('success_story')}}">{{$data['general_setting']['general_setting_seller_header']['seller.header.successstory']}}</a>
                </li>
                <li>
                    <a href="{{route('become_a_seller')}}">{{$data['general_setting']['general_setting_seller_header']['seller.header.becomeaseller']}}  </a>
                </li>
                <li>
                    <a href="">{{$data['general_setting']['general_setting_seller_header']['seller.header.adforseller']}}</a>
                </li>
                <li class="lang_btn"><a href="javascript:void(0)">English<span class="deco_dropDown"></span></a>
                    <ul class="langList_ul">
                        <li class="langList_li">
                            <a href="#">English</a>
                        </li>
                        <li class="langList_li">
                            <a href="#">Korean</a>
                        </li>							
                    </ul>
                </li>
                <li class="currency_btn"><a href="javascript:void(0)">USD<span class="deco_dropDown"></span></a>
                    <ul class="currency_ul">
                        <li class="currency_li">
                            <a href="#">USD</a>
                        </li>
                        <li class="currency_li">
                            <a href="#">KRW</a>
                        </li>
                        <li class="currency_li">
                            <a href="#">AED</a>
                        </li>							
                    </ul>
                </li>
            </ul>
        </div>
    </div>


















</div>