
    <div class="atrend_rev_new" >
        <div class="atrend_rev_big_slide">
            <a href="/atrend/view/{{ $data['atrend'][$i*3]->id }}">
            <img   src="https://2020aliseon.s3.ap-northeast-2.amazonaws.com{{ $data['atrend'][$i*3]->thumbnail }}" class="atrend_rev_big_slide_img">
            <div class="atrend_profile"> 
                <img src="https://2020aliseon.s3.ap-northeast-2.amazonaws.com{{ $data['atrend'][$i*3]->profile_photo }}">    
                {{ $data['atrend'][$i*3]->nickname }}
            </div>
            <div class="atrend_inner">
                <div class="atrend_banner_sub1"> 
                    {{ $data['atrend'][$i*3]->sub_title }}
                </div>
                <div class="atrend_banner_tit">
                    {{ $data['atrend'][$i*3]->title }}
                </div>
                <div class="atrend_banner_sub2">
                    {{ $data['atrend'][$i*3]->description }}
                </div>
            </div>
            @if (!empty($data['atrend'][$i*3]->items))
                    @component('components.main.atrend_slide')
                    @slot('atrend_product_img')
                        {{ $data['atrend'][$i*3]->items[0]->thumbnail }} 
                    @endslot
                    @slot('atrend_product_name')
                        {{ $data['atrend'][$i*3]->items[0]->name }} 
                    @endslot
                    @slot('atrend_product_price')
                        {{ "$"." ".$data['atrend'][$i*3]->items[0]->price }} 
                    @endslot
                    @endcomponent
                @endif
            </a>
        </div>

        <div class="atrend_row">
            <div class="atrend_small_slide1" >
                <a href="/atrend/view/{{ $data['atrend'][$i*3 + 1]->id }}">
                <img src="https://2020aliseon.s3.ap-northeast-2.amazonaws.com{{ $data['atrend'][$i*3+1]->thumbnail }}" class="atrend_rev_big_slide_img">
                <div class="atrend_sm_banner">
                    <div class="atrend_inner_sm">
                        <div class="atrend_banner_sub1_sm">
                            {{ $data['atrend'][$i*3 + 1]->sub_title }}
                        </div>
                        <div class="atrend_banner_tit_sm">
                            {{ $data['atrend'][$i*3 + 1]->title }}
                        </div>
                        <div class="atrend_banner_sub2_sm">
                            {{ $data['atrend'][$i*3 + 1]->description }}
                        </div>
                        <div class="atrend_profile"> 
                            <img src="https://2020aliseon.s3.ap-northeast-2.amazonaws.com{{ $data['atrend'][$i*3 + 1]->profile_photo }}">    
                            {{ $data['atrend'][$i*3 + 1]->nickname }}
                        </div>
                    </div>
                    
                </div>
                @if (!empty($data['atrend'][$i*3 + 1]->items))
                    @component('components.main.atrend_slide')
                    @slot('atrend_product_img')
                    {{ $data['atrend'][$i*3 + 1]->items[0]->thumbnail }} 
                    @endslot
                    @slot('atrend_product_name')
                    {{ $data['atrend'][$i*3 + 1]->items[0]->name }} 
                    @endslot
                    @slot('atrend_product_price')
                    {{ "$"." ".$data['atrend'][$i*3 + 1]->items[0]->price }} 
                    @endslot
                    @endcomponent
                @endif
                </a>
            </div>
            <div class="atrend_small_slide2" >
                <a href="/atrend/view/{{ $data['atrend'][$i*3 + 2]->id }}"> 
                <img src="https://2020aliseon.s3.ap-northeast-2.amazonaws.com{{ $data['atrend'][$i*3+2]->thumbnail }}" class="atrend_rev_big_slide_img">
                    <div class="atrend_sm_banner">
                        <div class="atrend_inner_sm">
                            <div class="atrend_banner_sub1_sm">
                                {{ $data['atrend'][$i*3 + 2]->sub_title }}
                            </div>
                            <div class="atrend_banner_tit_sm">
                                {{ $data['atrend'][$i*3 + 2]->title }}
                            </div>
                            <div class="atrend_banner_sub2_sm">
                                {{ $data['atrend'][$i*3 + 2]->description }}
                            </div>
                            <div class="atrend_profile">
                                <img src="https://2020aliseon.s3.ap-northeast-2.amazonaws.com{{ $data['atrend'][$i*3 + 2]->profile_photo }}">   
                                {{ $data['atrend'][$i*3 + 2]->nickname }}
                            </div>
                        </div>
                    </div>
                    
                    @if (!empty($data['atrend'][$i*3 + 2]->items))
                        @component('components.main.atrend_slide')
                            @slot('atrend_product_img')
                            {{ $data['atrend'][$i*3 + 2]->items[0]->thumbnail }} 
                            @endslot
                            @slot('atrend_product_name')
                            {{ $data['atrend'][$i*3 + 2]->items[0]->name }} 
                            @endslot
                            @slot('atrend_product_price')
                            {{ "$"." ".$data['atrend'][$i*3 + 2]->items[0]->price }} 
                            @endslot
                        @endcomponent
                    @endif
                </a>
            </div>
        </div>
    </div>
