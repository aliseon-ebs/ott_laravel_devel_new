@extends('layouts.footer_master')
@section('title') Aliseon @endsection



@section('contents')
<div id="event" class="sub">
    <div class="sub_visual notice_visual">    
      <div class="wrapper">      
        <div class="top_img_banner_content">            
          <p class="top_img_banner_tit04 notice_tit">Notice</p>
        </div>      
      </div>
    </div> 
</div>  

<div class="alarm1">
    <div class="wrapper">
            <span  class="sub_let">Notice
            </span>
            <span class="main_let">공지사항 글 알림</span>
    </div>
</div>

<div class="top_margin1">
    <div class="wrapper">
        @component('layouts.notice')
            
        @endcomponent
    </div>
</div>




<div class="let_btn">
    <div class="let_wrapper">
        <div class="let_btn_wrapper">
                <div class="let_btn_btn">1 </div>
                <div class="let_btn_btn">2 </div>
                <div class="let_btn_btn">3 </div>
                <div class="let_btn_btn">4 </div>
                <div class="let_btn_btn">5 </div>
                <div class="let_btn_btn">6 </div>
                <div class="let_btn_btn">7 </div>
                <div class="let_btn_btn">8 </div>
        </div>
    </div>
</div>



<div class="let_search">
    <div class="wrapper">
        <div class="let_wrapper">
            <div class="let_search_wrapper">
                <input type="radio" class="let_radio"> 
                <span class="let_content">
                    Title + Content
                    </span>
                <input type="search" class="let_search_type">
                <a href="" class="text_search">search</a>
            </div>
        </div>
    </div>
</div>


<div class="blink">



@endsection