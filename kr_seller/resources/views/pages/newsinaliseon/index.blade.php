@extends('layouts.common.seller_master')

<script src="{{ URL::asset('/js/common/main_header.js')}}"></script>

@section('contents')
  <div class="wrapper">
    <div class="title_st01_box">
      <span class="training_title">News in ALISEON</span>
    </div>
    <div class="train">
      @component('components.common.event_post')
        @slot('view_date')
            DD-MM-YY
        @endslot
        @slot('view_id')
          news/view/id
        @endslot
      @endcomponent
    </div>
  </div>
  <div class="blink">
  </div>
@endsection


<script type="text/javascript" src="/libs/jquery/jquery.min.js"></script>
