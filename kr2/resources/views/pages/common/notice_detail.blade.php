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
        <div class="row">
            <a href="" class="sub_let">Notice
            </a>
            <span class="main_let">공지사항 글 알림</span>
        </div>
    </div>
</div>

<div class="top_margin">
    <div class="wrapper">
        <div class="alarm2">
                <div class="main_let">
                    <div class="guest">
                        <span class="guest_post">
                            [장애 안내] January 10, 2021
                        </span>
                    </div>
                </div>
                <div class="right_title_sub">
                    <span class="right_tit_sub1">23/12/20</span>
                    <span class="right_tit_sub2">32244</span>
                </div>
        </div>
        <textarea class="feedback">
        </textarea>

    </div>
</div>
<div class="wrapper">
    <div class="let_wrapper">
        <div class="feedback_wrapper">
            <a href="{{route('notice')}}" class="let_back btn-primary">글 목록 이동</a>
        </div>
    </div>

</div>

<div class="blink">



@endsection