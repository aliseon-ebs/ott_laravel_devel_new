@extends('layouts.master')

@section('title') Aliseon @endsection

@section('contents')

<!-- page js -->
<script src="{{ URL::asset('/js/atrend.js')}}"></script>

<div id="atrend" class="sub">
  <div class="sub_visual atrend_visual">
    <div class="wrapper">
      <h2>A-Trend</h2>
    </div>
  </div>

  <div class="atrend_con">
    <div class="wrapper">
      <div class="blog spc1">
        <ul class="breadcrumb">
          <li>A-Trend</li>
          <li class="pageon">Category</li>
        </ul>
        <div class="blog-grid">        
          <div class="row">
            @component('components.atrend_post_item')
                @slot('post_title')
                  Ricoh's latest spherical camera nets quality images
                @endslot
                @slot('post_img')
                    atrend_img01.jpg
                @endslot
            @endcomponent
            @component('components.atrend_post_item')
                @slot('post_title')
                  Ricoh's latest spherical camera nets quality images
                @endslot
                @slot('post_img')
                    atrend_img02.jpg
                @endslot
            @endcomponent
            @component('components.atrend_post_item')
                @slot('post_title')
                  Ricoh's latest spherical camera nets quality images
                @endslot
                @slot('post_img')
                    atrend_img03.jpg
                @endslot
            @endcomponent
            @component('components.atrend_post_item')
                @slot('post_title')
                  Ricoh's latest spherical camera nets quality images
                @endslot
                @slot('post_img')
                    atrend_img04.jpg
                @endslot
            @endcomponent
            @component('components.atrend_post_item')
                @slot('post_title')
                  Ricoh's latest spherical camera nets quality images
                @endslot
                @slot('post_img')
                    atrend_img05.jpg
                @endslot
            @endcomponent
            @component('components.atrend_post_item')
                @slot('post_title')
                  Ricoh's latest spherical camera nets quality images
                @endslot
                @slot('post_img')
                    atrend_img06.jpg
                @endslot
            @endcomponent
            @component('components.atrend_post_item')
                @slot('post_title')
                  Ricoh's latest spherical camera nets quality images
                @endslot
                @slot('post_img')
                    atrend_img07.jpg
                @endslot
            @endcomponent
            @component('components.atrend_post_item')
                @slot('post_title')
                  Ricoh's latest spherical camera nets quality images
                @endslot
                @slot('post_img')
                    atrend_img08.jpg
                @endslot
            @endcomponent
           @component('components.atrend_post_item')
                @slot('post_title')
                  Ricoh's latest spherical camera nets quality images
                @endslot
                @slot('post_img')
                    atrend_img09.jpg
                @endslot
            @endcomponent

          </div>
        </div>
        <ul class="pagination">
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#"><span class="next_arrow"></span></a></li>
        </ul>
      </div>
    </div>    
  </div>
</div>

@endsection