$(document).ready(function(){

  //seller_normal.js

      // 공지사항 아코디언
      $(".aco_tit").click(function(){ 
        $(".aco_box").hide();
        $(this).next(".aco_box").fadeIn(200);
    })

    //new order message popup 
    $(".btn_send_msg").click(function(){
        $(".msg_pop_wr").fadeIn(100);
    });

    $(".btn_msg_close").click(function(){
        $(".msg_pop_wr").hide();
    });

    //shop management > edit pop
    $(".btn_edit").click(function(){
        $(".pop_edit_wr").fadeIn(100);
    });

    $(".btn_edit_cancel").click(function(){
        $(".pop_edit_wr").hide();
        $(".pop_edit_txt").hide();
    });   
    

    //shop management > edit > change
    $(".btn_name_chk").click(function(){
        $(".pop_edit_txt").fadeIn(100);
    });
    

    //shop management > Search Swift Code pop
    $(".btn_search_code").click(function(){
        $(".pop_swiftcode_wr").fadeIn(100);
    });

    $(".btn_search_close").click(function(){
        $(".pop_swiftcode_wr").hide();
        $(".pop_search_tbl").hide();
    });

    $(".btn_code_search").click(function(){
        $(".pop_search_tbl").fadeIn(100);
    });
    

    //product upload > group pop
    $("#sel_add_group").change(function(){
        if ( $(this).val() == "add_group" ){            
            $(".pop_new_group_wr").fadeIn(100);
        }
    });
   
    $(".btn_group_cancel").click(function(){
        $(".pop_new_group_wr").hide();
    });

    //product list > Collaboration with creator pop    
    $(".btn_onProgress").click(function(){
        $(".pop_collabo_wr").fadeIn(100);
    });

    $(".btn_collabo_close").click(function(){
        $(".pop_collabo_wr").hide();
    });

    $(".btn_collabo_cancel").click(function(){
        $(".pop_collabo_wr").hide();
    });
    

    //product list > product select pop
    $(".btn_collabo_select").click(function(){
        $(".pop_proSel_wr").fadeIn(100);
    });

    $(".btn_proSel_close").click(function(){
        $(".pop_proSel_wr").hide();
    });
    
    //order management > order detail
    $("#btn_orderDetail").click(function(){
        $(".pop_orderDetail_wr").fadeIn(100);
    });

    $("#btn_orderDetail_close").click(function(){
        $(".pop_orderDetail_wr").hide();
    });    
    
    $("#btn_orderDetail_cancel").click(function(){
        $(".pop_orderDetail_wr").hide();
    });


    //order management > customer detail
    $("#btn_customerDetail").click(function(){
        $(".pop_customerDetail_wr").fadeIn(100);
    });

    $("#btn_customerDetail_close").click(function(){
        $(".pop_customerDetail_wr").hide();
    });

   
    //order management > delivery management
    $("#btn_deliveryManagement").click(function(){
        $(".pop_deliveryManagement_wr").fadeIn(100);
    });

    $("#btn_deliveryManagement_close").click(function(){
        $(".pop_deliveryManagement_wr").hide();
    });    

    $("#btn_deliveryManagement_cancel").click(function(){
        $(".pop_deliveryManagement_wr").hide();
    });    

    //order management > Batch delivery of selected orders
    $("#btn_batchDelivery").click(function(){
        $(".pop_batchDelivery_wr").fadeIn(100);
    });

    $("#btn_batchDelivery_close").click(function(){
        $(".pop_batchDelivery_wr").hide();
    });    

    $("#btn_batchDelivery_cancel").click(function(){
        $(".pop_batchDelivery_wr").hide();
    });  

    //Cancel / Exchange Order Management > Order / Cancellation / Exchange Detail
    $("#btn_cancellation").click(function(){
        $(".pop_cancellation_wr").fadeIn(100);
    });

    $("#btn_cancellation_close").click(function(){
        $(".pop_cancellation_wr").hide();
    });    

    $("#btn_cancellation_cancel").click(function(){
        $(".pop_cancellation_wr").hide();
    });  

    //Cancel / Exchange Order Management > Cancel / Exchange Management
    $("#btn_cancelExchange").click(function(){
        $(".pop_cancelExchange_wr").fadeIn(100);
    });

    $("#btn_cancelExchange_close").click(function(){
        $(".pop_cancelExchange_wr").hide();
    });    

    $("#btn_cancelExchange_cancel").click(function(){
        $(".pop_cancelExchange_wr").hide();
    });  


    //financials > Request Payment
    $("#btn_requestPayment").click(function(){
        $(".pop_requestPayment_wr").fadeIn(100);
    });

    $("#btn_requestPayment_close").click(function(){
        $(".pop_requestPayment_wr").hide();
    }); 

    //financials > Batch settlement processing
    $("#btn_batchSettlement").click(function(){
        $(".pop_batchSettlement_wr").fadeIn(100);
    });

    $("#btn_batchSettlement_close").click(function(){
        $(".pop_batchSettlement_wr").hide();
    }); 

    $("#btn_batchSettlement_cancel").click(function(){
        $(".pop_batchSettlement_wr").hide();
    }); 


    //financials > Past settlement
    $("#btn_pastSettlement").click(function(){
        $(".pop_pastSettlement_wr").fadeIn(100);
    });

    $("#btn_pastSettlement_close").click(function(){
        $(".pop_pastSettlement_wr").hide();
    });   

    //customer service > Inquiry Information 
    $("#btn_inquiryInformation").click(function(){
        $(".pop_inquiryInformation_wr").fadeIn(100);
    });

    $("#btn_inquiryInformation_close").click(function(){
        $(".pop_inquiryInformation_wr").hide();
    });  

    $("#btn_inquiry_reply_open").click(function(){ 
        $(".inquiry_edit_wr").slideUp(200);
        $(".inquiry_Send_wr").slideToggle(200);
    });

    $("#btn_inquiry_Edit_open").click(function(){
        $(".inquiry_Send_wr").slideUp(200);
        $(".inquiry_edit_wr").slideToggle(200);
    });

    //customer service > Product review
    $("#btn_productReview").click(function(){
        $(".pop_productReview_wr").fadeIn(100);
    });

    $("#btn_productReview_close").click(function(){
        $(".pop_productReview_wr").hide();
    }); 

    //customer service > Product review Delete request
    $("#btn_productReviewDel").click(function(){
        $(".pop_productReviewDel_wr").fadeIn(100);
    });

    $("#btn_productReviewDel_close").click(function(){
        $(".pop_productReviewDel_wr").hide();
    }); 


    //customer service > Product report
    $("#btn_productReport").click(function(){
        $(".pop_productReport_wr").fadeIn(100);
    });

    $("#btn_productReport_close").click(function(){
        $(".pop_productReport_wr").hide();
    }); 


    //talk with aliseon > Inquiry Ticket
    $("#btn_inquiryTicket").click(function(){
        $(".pop_inquiryTicket_wr").fadeIn(100);
    });

    $("#btn_inquiryTicket_close").click(function(){
        $(".pop_inquiryTicket_wr").hide();
    });


    //talk with aliseon > Order Number Search
    $("#btn_orderNumSch").click(function(){        
        $(".pop_orderNumberSearch_wr").fadeIn(100);
    });

    $("#btn_orderNumberSearch_close").click(function(){
        $(".pop_orderNumberSearch_wr").hide();
    });


    //talk with aliseon > Ticket Contents
    $("#btn_ticketContents").click(function(){        
        $(".pop_ticketContents_wr").fadeIn(100);
    });

    $("#btn_ticketContents_close").click(function(){
        $(".pop_ticketContents_wr").hide();
    });
    
    $("#btn_additionalRequests").click(function(){
        $(".add_inquirt_wr").slideToggle(100);
    });

    //talk with aliseon > Event Ticket
    $("#btn_eventTicket").click(function(){
        $(".pop_eventTicket_wr").fadeIn(100);
    });

    $("#btn_eventTicket_close").click(function(){
        $(".pop_eventTicket_wr").hide();
    });

    //talk with aliseon > Event participation information
    $("#btn_eventparticipation").click(function(){
        $(".pop_eventparticipation_wr").fadeIn(100);
    });

    $("#btn_eventparticipation_close").click(function(){
        $(".pop_eventparticipation_wr").hide();
    });

    //scroll bar custom
    $(".scrollBar").mCustomScrollbar({
        theme:"minimal-dark"
    });



// seller.js

$(".cont_menu").click(function () {
  $(".cont_ul").slideToggle(100);
});




$('.cont_li').on("click", function () {
    var h1 = this.id;
    $('span').text(h1);
    


    $(".cont_ul").slideToggle(100);
});


 /* be_modal: be a seller 페이지 submit 누를 시 */
$('.be_submit').click(function() {
  $('.be_modal').fadeIn(100); 
});


/*모달 창 전부에 해당하는 끄기 버튼 x */
$('.modal_close_btn').click(function() {
  $('.be_modal').fadeOut(100);   
  $('.order_manage').fadeOut(100);
  $('.order_modal1').fadeOut(100);
  $('.order_modal2').fadeOut(100);
  $('.order_modal_req').fadeOut(100);
});

/* be a seller 페이지 제출 모달창 No */
$('.be_modal_No_btn').click(function() {
  $('.be_modal').fadeOut(100);
});
/* be a seller 페이지 제출 모달창 Yes */
$('.be_modal_Yes_btn').click(function() {
  $('.be_modal').fadeOut(100);
});

/* 주문 배달 배치 모달바*/
$('.be_modal_confirm_btn').click(function() {
  $('.order_modal1').fadeIn(0);
  $('.be_modal').fadeOut(0);
});

/* Confirm 버튼 클릭 시*/
$('.be_modal_confirm1_btn').click(function() {
  $('.order_modal2').fadeIn(0);
  $('.order_modal1').fadeOut(0);
  $('.product_modal').fadeOut(0);
});

/* 배송처리  일괄 진행 승낙 시*/
$('.be_modal_confirm2_btn').click(function() {
  $('.order_modal2').fadeOut(100);
});

/* 모달 창 대부분 거절버튼1 */
$('.be_modal_cancel_btn').click(function() {
  $('.be_modal').fadeOut(100);
  $('.order_modal1').fadeOut(100);
  $('.order_modal2').fadeOut(100);
  $('.product_modal').fadeOut(0);
});


/* Order 페이지 주문 관리 버튼*/
$('.order_manage_btn').click(function() {
  $('.order_manage').fadeIn(100);
});

/* 모달 창 대부분 거절버튼2 */
$('.cancel_btn').click(function() {
  $('.order_manage').fadeOut(100);
  $('.order_modal1').fadeOut(100);
  $('.order_modal2').fadeOut(100);
  $('.order_modal_req').fadeOut(100);
  $('.store_manage').fadeOut(100);
  $('.product_modal').fadeIn(100);
});

/* 대부분 모달 창 승낙버튼*/
$('.apply_btn').click(function() {
  $('.order_manage').fadeOut(100);
  $('.order_modal1').fadeOut(100);
  $('.order_modal_req').fadeOut(100);
  $('.store_manage').fadeOut(100);
});

/* 승낙버튼, 이름만 다름*/
$('.req_btn').click(function() {
  $('.order_manage').fadeOut(100);
  $('.order_modal_req').fadeIn(100);
});

/* 승낙버튼, 저장해야하는 부분들에 쓰임*/
$('.save_btn').click(function() {
  $('.store_manage').fadeIn(100);
});
/*close 말고 하단 버튼으로 모달 창 끄는데 사용 */
$('.delete_btn').click(function() {
  $('.order_modal1').fadeIn(100);
});

$('.product_add').click(function() {
  $('.order_modal1').fadeIn(100);
});

$('.thumb-box_close').click(function() {
  $('.thumb-box_1').fadeOut(100);
});


$(".nav input[type=radio]").click(function(){
  var pre = $(this).data("previous");
  var chk = $(this).is(":checked");
  var name = $(this).attr('name');
  if(chk == true && pre == $(this).val()){
      $(this).prop('checked',false);
      $("input[name='"+name+"']").data("previous",'');
      $('.thumb-box_4').fadeOut(100);
  }else{
      if(chk == true) $("input[name='"+name+"']").data("previous",$(this).val());
      $('.thumb-box_4').fadeIn(100);
  }
});


$(".cate_sub_menu_ul1 .cate_sub_menu_li").mouseover(function(){

  now_focus = $(this).attr("id");
  
  $(".cate_sub_menu_ul3").fadeOut(100);
  $(".cate_sub_menu_ul4").fadeOut(100);
  $(".cate_sub_menu_ul5").fadeOut(100);
  $(".cate_sub_menu_ul2").fadeIn(100);
});

$(".cate_sub_menu_ul2 .cate_sub_menu_li").click(function(){
  $(".cate_sub_menu_ul4").fadeOut(100);
  $(".cate_sub_menu_ul5").fadeOut(100);
  $(".cate_sub_menu_ul3").fadeIn(100);
});

$(".cate_sub_menu_ul3 .cate_sub_menu_li").click(function(){
  $(".cate_sub_menu_ul5").fadeOut(100);
  $(".cate_sub_menu_ul4").fadeIn(100);
});

$(".cate_sub_menu_ul4 .cate_sub_menu_li").click(function(){
  $(".cate_sub_menu_ul5").fadeIn(100);
});

$("#cate_product").click(function(){
  $(".cate_product").slideToggle(200);
});



/* Aliseon ticket */
$("#btn_eventTicket").click(function(){
  $(".pop_eventTicket_wr").fadeIn(100);
});

$("#btn_eventTicket_close").click(function(){
  $(".pop_eventTicket_wr").hide();
});

})

function initLeftMenuCollapse() {
  $('#side-menu').on('click', function (event) {
      event.preventDefault();
      $('waves-effect').toggleClass('waves-ripple');
      if ($(window).width() >= 992) {
        $('waves-effect').toggleClass('waves-ripple');
      } else {
          $('body').removeClass('vertical-collpsed');
      }
  });
}

function setThumbnail1(event) { 
    var reader = new FileReader(); 
    reader.onload = function(event) {
        var img = document.createElement("img"); 
        img.setAttribute("src", event.target.result); 
        document.querySelector("div.thumb-box_1").appendChild(img);
    }; 
    reader.readAsDataURL(event.target.files[0]); 
} 

function setThumbnail2(event) { 
  var reader = new FileReader(); 
  reader.onload = function(event) {
      var img = document.createElement("img"); 
      img.setAttribute("src", event.target.result); 
      document.querySelector("div.thumb-box_2").appendChild(img);
  }; 
  reader.readAsDataURL(event.target.files[0]); 
} 

  
