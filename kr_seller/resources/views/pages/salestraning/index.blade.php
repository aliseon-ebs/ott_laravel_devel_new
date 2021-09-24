@extends('layouts.common.seller_master')

<script src="{{ URL::asset('/js/common/main_header.js')}}"></script>

@section('contents')
  <div class="wrapper">
    <div class="title_st01_box">
      <span class="training_title">Today A-Trend</span>
    </div>
    <div class="train">
      @component('components.common.event_post')
        @slot('view_date')
        
        @endslot
        @slot('view_id')
            salestraining/view/id
        @endslot
      @endcomponent
    </div>
  </div>
  <div class="blink">
  </div>
@endsection


<script type="text/javascript" src="/libs/jquery/jquery.min.js"></script>
