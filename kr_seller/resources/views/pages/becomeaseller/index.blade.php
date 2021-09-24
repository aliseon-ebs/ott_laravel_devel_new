@extends('layouts.common.seller_master')


@section('contents')
    
<div class="info">
    <div class="wrapper">
        <div class="seller_info">
            <div class="info_tit">
                <div class="info_tit_txt1">
                    정보 입력
                </div>
                <div class="info_tit_txt2">
                    아래 빈칸에 정보를 입력하세요
                </div>

            </div>
            <div class="info_sub">
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label">*Shop Name</label>
                    <div class="col-md-10">
                        <input class="form-control product_placeholder " type="text" id="example-text-input" placeholder="Sunny">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label">*Store Instroduction</label>
                    <div class="col-md-10">
                        <textarea class="form-control product_placeholder" id="example-text-input" style="height:150px; resize:none"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label">*Manager Name</label>
                    <div class="col-md-10">
                        <input class="form-control product_placeholder" type="text" id="example-text-input" placeholder="Manager Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label">*Manager Contact</label>
                    <div class="col-md-10">
                        <input class="form-control product_placeholder" type="text" id="example-text-input" style="padding-left: 80px">
                        <div class="cont_menu"> 
                            <span></span>
                        </div>
                        <div class="cont_ul">
                            <li class="cont_li" id="+971"><img src="/images/becomeaseller/Flag_of_the_United_Arab_Emirates.png" style="margin-right: 20px">+971</li>
                            <li class="cont_li" id="+966"><img src="/images/becomeaseller/Flag_of_China.png" style="margin-right: 20px">+966</li>
                            <li class="cont_li" id="+82"><img src="/images/becomeaseller/Flag_of_Indonesia.png" style="margin-right: 20px">+82</li>
                            <li class="cont_li" id="+86"><img src="/images/becomeaseller/Flag_of_South_Korea.png" style="margin-right: 20px">+86</li>
                            <li class="cont_li" id="+62"><img src="/images/becomeaseller/Flag_of_the_United_Arab_Emirates.png" style="margin-right: 20px">+62</li>
                        </div> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label">*E-mail</label>
                    <div class="col-md-10">
                        <input class="form-control product_placeholder" type="text" id="example-text-input" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label">*Address</label>
                    <div class="col-md-10">
                        <input class="form-control product_placeholder" type="text" id="example-text-input" placeholder="Zip">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label"></label>
                    <div class="col-md-10">
                        <input class="form-control product_placeholder" type="text" id="example-text-input" placeholder="City">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label"></label>
                    <div class="col-md-10">
                        <input class="form-control product_placeholder" type="text" id="example-text-input" placeholder="State">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label"></label>
                    <div class="col-md-10">
                        <input class="form-control product_placeholder" type="text" id="example-text-input" placeholder="Address">
                    </div>
                </div>
            </div>
            <div class="info_tit">
                <div class="info_tit_txt1">
                    입금 정보
                </div>
                <div class="info_tit_txt2">
                    아래 빈칸에 정보를 입력하세요
                </div>
            </div>
            <div class="info_sub">
            <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label">*Country</label>
                <div class="col-md-10">
                    <input class="form-control product_placeholder" type="text" id="example-text-input" style="padding-left: 80px">
                    <div class="cont_menu"> 
                        <span></span>
                    </div>
                    <div class="cont_ul">
                        <li class="cont_li" id="+971"><img src="/images/becomeaseller/Flag_of_the_United_Arab_Emirates.png" style="margin-right: 20px">+971</li>
                        <li class="cont_li" id="+966"><img src="/images/becomeaseller/Flag_of_China.png" style="margin-right: 20px">+966</li>
                        <li class="cont_li" id="+82"><img src="/images/becomeaseller/Flag_of_Indonesia.png" style="margin-right: 20px">+82</li>
                        <li class="cont_li" id="+86"><img src="/images/becomeaseller/Flag_of_South_Korea.png" style="margin-right: 20px">+86</li>
                        <li class="cont_li" id="+62"><img src="/images/becomeaseller/Flag_of_the_United_Arab_Emirates.png" style="margin-right: 20px">+62</li>
                    </div> 
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label">*Bank</label>
                <div class="col-md-10">
                    <input class="form-control product_placeholder" type="text" id="example-text-input" placeholder="Bank">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label"></label>
                <div class="col-md-10">
                    <input class="form-control product_placeholder" type="text" id="example-text-input" placeholder="Bank Account Number">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label"></label>
                <div class="col-md-10">
                    <input class="form-control product_placeholder" type="text" id="example-text-input" placeholder="Bank Account Holder">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-12 col-form-label section_label">*Bank Account Image</label>
                <div class="col-md-10">
                    
                <div class="form_wr">
                    <div>
                        <form action="#" class="dropzone">
                            <img src="/images/becomeaseller/FontAwsome (camera).png">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted mdi mdi-upload-network-outline"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <button class="be_submit seller_submit">Submit</button>
            <div class="be_modal">
                <div class="be_modal_seller">
                    <div class="seller_content">
                    <a class="modal_close_btn"></a>
                    <span style="color: red; font-size:18px">*영문 30자 이상은 2줄로</span>
                    <span style="font-weight:bold; font-size:15px;margin-top:5px">이대로 제출하시겠습니까?</span>
                    <div class="be_btn">
                          <div class="be_modal_No_btn">No</div>
                          <a href="http://seller.ko.aliseon.com/login" class="be_modal_Yes_btn">Yes</a>
                    </div>
                    </div>
                </div>
           
              </div>
          
          

        </div>
    </div>
</div>
<div class="blink">

</div>



@endsection