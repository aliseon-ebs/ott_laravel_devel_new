{{-- atrend view {{ $request }} --}}

@extends('layouts.common.main_master')

@section('title') Aliseon @endsection

@section('contents')

<!-- page js -->
<script src="{{ URL::asset('/js/atrend/atrend.js')}}"></script>



<div id="atrend_view" class="sub">
  <div class="sub_visual atrend_visual">
    <div class="wrapper">
      <h2>A-Trend</h2>
    </div>
  </div>

  <div class="wrapper">
    <!--content-->
    <div class="atrend_blog">
      <div class="blog spc1">
        <ul class="breadcrumb">
          <li><a href="#">A-Trend</a></li>
          <li class="pageon">Category</li>
        </ul>

        <div class="blog-single-post">
          <div class="row">
            <div class="blog-content  col-md-9  col-xs-12">
              <div class="blog-post-item v2">
                <div class="blog-img">
                  <a href="#" class="hover-images">
                    <img src="/images/atrend/atrend_blog01.jpg" alt="" class="img-reponsive">
                  </a>
                  <div class="blog-post-date abs v2">
                    <span class="b-date">14</span>
                    <span class="b-month">dec</span>
                  </div>
                </div>
                <div class="blog-info-bd">
                  <div class="blog-info">
                    <h3 class="blog-post-title v2">Ricoh's latest spherical camera nets quality images</h3>
                    <div class="blog-post-desc">
                      <p>We may encounter many defeats but we must not be defeated.<br>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                      <p>If you don't like how things are, change it! You're not a tree.<br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like aldus pagemaker including versions. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>

                    <div class="blog-info-bottom cf">
                      <div class="blog-writer">
                        Posted by <b>Admin</b>
                      </div>

                      <div class="blog-btn">
                        <ul>
                          <li>
                            <button type="butoon" id="blog-adjust">Adjustment</button>
                          </li>
                          <li>
                            <button type="butoon" id="blog-delete">Delete</button>
                          </li>
                          <li>
                            <button type="butoon" id="blog-share">Share</button>
                          </li>
                          <li>
                            <button type="button" id="blog-comment">
                              <img src="/images/atrend/atrend_comment_b.png" alt="">
                              <span>2</span>
                            </button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="blog-post-author v2">
                    <div class="blog-post-tags">
                      <a href="#">Design</a>,<a href="#">Tecnology</a>
                    </div>

                    <div class="blog-post-social">
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                  </div> --}}
                </div>
              </div>

              <div class="blog-comment">
                <div class="blog-comment-top">
                  <div class="blog-comment-item">
                    <div class="cmt-img">
                      <img src="/images/atrend/atrend_blog_img06.jpg" alt="">
                    </div>
                    <div class="cmt-content">
                      <div class="cmt-content-text">
                        <div class="wrp-name"><span class="name">Robert Havard</span></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries..
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries..
                        </p>
                      </div>

                      <div class="writer_info cf">
                        <span class="date">April 20, 2021</span>

                        <div class="cmt-content-btn">
                          <ul>
                            <li>
                              <a href="">More</a>
                            </li>
                            <li>
                              <a href="">Go to order</a>
                            </li>
                          </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="blog-comment-bottom">
                  <div class="cmt-title text-center abs">
                    <h1 class="oval-bd">Leave a comment</h1>
                  </div>
                  <div class="cmt-form">
                    <div class="login-form">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6 col-xs-12">
                            <input type="text" id="author" class="form-control" name="comment[author]" value="" placeholder="Name">
                          </div>
                          <div class="col-md-6 col-xs-12">
                            <input type="email" id="email" class="form-control" name="comment[email]" value="" placeholder="E-mail">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                            <textarea id="message" class="form-control" name="comment[body]" placeholder="Comment"></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="form-group text-center">
                        <button type="submit" class="btn btn-submit">
                          Confirm
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="blog-comment-content">
                  <ul class="defalut">
                    <li>
                      <div class="blog-comment-item blog-comment-history">
                        <div class="cmt-img cmt-img-s">
                          <img src="/images/atrend/atrend_blog_img07.jpg" alt="">
                        </div>
                        <div class="cmt-content">
                          <div class="wrp-name">
                            <div class="wrp-element">
                              <span class="name">Robert Havard</span>
                              <a href="#"><span><img src="/images/atrend/atrend_comment_arrow.png" alt=""></span></a>
                            </div>
                            <span class="date">Dec 02, 2018, 6:05 pm</span>
                          </div>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's<br> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries..</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="blog-comment-item blog-comment-history">
                        <div class="cmt-img cmt-img-s">
                          <img src="/images/atrend/atrend_blog_img06.jpg" alt="">
                        </div>
                        <div class="cmt-content">
                          <div class="wrp-name">
                            <div class="wrp-element">
                              <span class="name">Robert Havard</span>
                              <a href="#"><span><img src="/images/atrend/atrend_comment_arrow.png" alt=""></span></a>
                            </div>
                            <span class="date">Dec 02, 2018, 6:05 pm</span>
                          </div>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries..</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="defalut">
                    <li>
                      <div class="blog-comment-item blog-comment-history">
                        <div class="cmt-img cmt-img-s">
                          <img src="/images/atrend/atrend_blog_img08.jpg" alt="">
                        </div>
                        <div class="cmt-content">
                          <div class="wrp-name">
                            <div class="wrp-element">
                              <span class="name">Robert Havard</span>
                              <a href="#"><span><img src="/images/atrend/atrend_comment_arrow.png" alt=""></span></a>
                            </div>
                            <span class="date">Dec 02, 2018, 6:05 pm</span>
                          </div>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's<br> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries..</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="blog-comment-item blog-comment-history">
                        <div class="cmt-img cmt-img-s">
                          <img src="/images/atrend/atrend_blog_img06.jpg" alt="">
                        </div>
                        <div class="cmt-content">
                          <div class="wrp-name">
                            <div class="wrp-element">
                              <span class="name">Robert Havard</span>
                              <a href="#"><span><img src="/images/atrend/atrend_comment_arrow.png" alt=""></span></a>
                            </div>
                            <span class="date">Dec 02, 2018, 6:05 pm</span>
                          </div>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries..</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <div class="blog-comment-item blog-comment-history">
                        <div class="cmt-img cmt-img-s">
                          <img src="/images/atrend/atrend_blog_img07.jpg" alt="">
                        </div>
                        <div class="cmt-content">
                          <div class="wrp-name">
                            <div class="wrp-element">
                              <span class="name">Robert Havard</span>
                              <a href="#"><span><img src="/images/atrend/atrend_comment_arrow.png" alt=""></span></a>
                            </div>
                            <span class="date">Dec 02, 2018, 6:05 pm</span>
                          </div>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's<br> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries..</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="blog-comment-item blog-comment-history">
                        <div class="cmt-img cmt-img-s">
                          <img src="/images/atrend/atrend_blog_img07.jpg" alt="">
                        </div>
                        <div class="cmt-content">
                          <div class="wrp-name">
                            <div class="wrp-element">
                              <span class="name">Robert Havard</span>
                              <a href="#"><span><img src="/images/atrend/atrend_comment_arrow.png" alt=""></span></a>
                            </div>
                            <span class="date">Dec 02, 2018, 6:05 pm</span>
                          </div>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries..</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="blog-comment-item blog-comment-history">
                        <div class="cmt-img cmt-img-s">
                          <img src="/images/atrend/atrend_blog_img06.jpg" alt="">
                        </div>
                        <div class="cmt-content">
                          <div class="wrp-name">
                            <div class="wrp-element">
                              <span class="name">Robert Havard</span>
                              <a href="#"><span><img src="/images/atrend/atrend_comment_arrow.png" alt=""></span></a>
                            </div>
                            <span class="date">Dec 02, 2018, 6:05 pm</span>
                          </div>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's<br> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries..</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>

                <span class="blog-comment-more">
                  <button id="btn_commentMore"></button>
                </span>
              </div>

              <div class="e-category">
                <div class="e-category-wr">
                  <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <h1 class="cate-title">Recommended product</h1>
                      <div class="cate-item">
                        <div class="product-img">
                          <a href="#"><img src="/images/atrend/atrend_thumb01.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                          <h3 class="product-title"><a href="#">Product Name</a></h3>
                          <p class="product-des">DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions</p>
                          <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                      </div>

                      <div class="cate-item">
                        <div class="product-img">
                          <a href="#"><img src="/images/atrend/atrend_thumb01.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                          <h3 class="product-title"><a href="#">Product Name</a></h3>
                          <p class="product-des">DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions</p>
                          <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                      </div>

                      <div class="cate-item">
                        <div class="product-img">
                          <a href="#"><img src="/images/atrend/atrend_thumb01.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                          <h3 class="product-title"><a href="#">Product Name</a></h3>
                          <p class="product-des">DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions</p>
                          <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <h1 class="cate-title">Top Search Products</h1>
                      <div class="cate-item">
                        <div class="product-img">
                          <a href="#"><img src="/images/atrend/atrend_thumb01.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                          <h3 class="product-title"><a href="#">Product Name</a></h3>
                          <p class="product-des">DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions</p>
                          <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                      </div>

                      <div class="cate-item">
                        <div class="product-img">
                          <a href="#"><img src="/images/atrend/atrend_thumb01.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                          <h3 class="product-title"><a href="#">Product Name</a></h3>
                          <p class="product-des">DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions</p>
                          <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                      </div>

                      <div class="cate-item">
                        <div class="product-img">
                          <a href="#"><img src="/images/atrend/atrend_thumb01.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                          <h3 class="product-title"><a href="#">Product Name</a></h3>
                          <p class="product-des">DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions</p>
                          <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4">
                      <h1 class="cate-title">Best selling product</h1>
                      <div class="cate-item">
                        <div class="product-img">
                          <a href="#"><img src="/images/atrend/atrend_thumb01.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                          <h3 class="product-title"><a href="#">Product Name</a></h3>
                          <p class="product-des">DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions</p>
                          <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                      </div>

                      <div class="cate-item">
                        <div class="product-img">
                          <a href="#"><img src="/images/atrend/atrend_thumb01.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                          <h3 class="product-title"><a href="#">Product Name</a></h3>
                          <p class="product-des">DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions</p>
                          <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                      </div>

                      <div class="cate-item">
                        <div class="product-img">
                          <a href="#"><img src="/images/atrend/atrend_thumb01.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                          <h3 class="product-title"><a href="#">Product Name</a></h3>
                          <p class="product-des">DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions DescriptionsDescriptions
                            DescriptionsDescriptions</p>
                          <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="feature">
                <div class="feature_wr">
                  <div class="feature-inside">
                    <div class="feature-block text-center">
                      <div class="feature-block-img"><img src="/images/atrend/atrend_icon_card.png" alt="" class="img-reponsive"></div>
                      <div class="feature-info">
                        <h3>Safe Payment</h3>
                        <p>Pay with the worlds’s most <br>payment methods.</p>
                      </div>
                    </div>

                    <div class="feature-block text-center">
                      <div class="feature-block-img"><img src="/images/atrend/atrend_icon_protection.png" alt="" class="img-reponsive"></div>
                      <div class="feature-info">
                        <h3>Confidence</h3>
                        <p>Protection covers your <br>purchase</p>
                      </div>
                    </div>

                    <div class="feature-block text-center">
                      <div class="feature-block-img"><img src="/images/atrend/atrend_icon_delivery.png" alt="" class="img-reponsive"></div>
                      <div class="feature-info">
                        <h3>Worldwide Delivery</h3>
                        <p>Ship to over 200 countries <br>& regions.</p>
                      </div>
                    </div>

                    <div class="feature-block text-center">
                      <div class="feature-block-img"><img src="/images/atrend/atrend_icon_call.png" alt="" class="img-reponsive"></div>
                      <div class="feature-info">
                        <h3>Contact us</h3>
                        <p>(+82) 070 - 8600 - 1254</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-sidebar col-md-3 col-xs-12">
              <div class="blog-widget blog-widget-category">
                <h1 class="widget-blog-title">Categories</h1>
                <ul class="wiget-content">
                  <li><a href="#">Arts and Entertainment <span class="number">(80)</span></a></li>
                  <li><a href="#">Business <span class="number">(39)</span></a></li>
                  <li><a href="#">Technology <span class="number">(56)</span></a></li>
                  <li><a href="#">Ideas <span class="number">(10)</span></a></li>
                  <li><a href="#">House & Theater <span class="number">(30)</span></a></li>
                </ul>
              </div>

              <div class="blog-widget blog-widget-social">
                <h1 class="widget-blog-title">Follow us</h1>
                <div class="social">
                  <ul>
                    <li>
                      <a href="#">
                        <img src="/images/atrend/atrend_blog_sns01.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="/images/atrend/atrend_blog_sns02.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="/images/atrend/atrend_blog_sns03.png" alt="">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="blog-widget blog-widget-popular">
                <div class="item">
                  <div class="post-item">
                    <div class="post-img">
                      <img src="/images/atrend/atrend_blog_img01.jpg" alt="">
                    </div>
                    <div class="post-info">
                      <div class="post-info-con">
                        <h3><a href="#">Traveling abroad change you forever Traveling abroad change you forever</a></h3>
                        <h4>Posted by <b>Admin</b></h4>
                        <p>April 30, 2016</p>
                      </div>
                    </div>
                  </div>
                  <div class="post-item">
                    <div class="post-img">
                      <img src="/images/atrend/atrend_blog_img02.jpg" alt="">
                    </div>
                    <div class="post-info">
                      <div class="post-info-con">
                        <h3><a href="#">Traveling abroad change you forever</a></h3>
                        <h4>Posted by <b>Admin</b></h4>
                        <p>April 30, 2016</p>
                      </div>
                    </div>
                  </div>

                  <div class="post-item">
                    <div class="post-img">
                      <img src="/images/atrend/atrend_blog_img03.jpg" alt="">
                    </div>
                    <div class="post-info">
                      <div class="post-info-con">
                        <h3><a href="#">Traveling abroad change you forever</a></h3>
                        <h4>Posted by <b>Admin</b></h4>
                        <p>April 30, 2016</p>
                      </div>
                    </div>
                  </div>

                  <div class="post-item">
                    <div class="post-img">
                      <img src="/images/atrend/atrend_blog_img04.jpg" alt="">
                    </div>
                    <div class="post-info">
                      <div class="post-info-con">
                        <h3><a href="#">Traveling abroad change you forever</a></h3>
                        <h4>Posted by <b>Admin</b></h4>
                        <p>April 30, 2016</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="blog-widget blog-widget-ad">
                <img src="/images/atrend/atrend_blog_img05.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection