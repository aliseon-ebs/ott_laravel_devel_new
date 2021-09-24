<div class="card">
    <div class="card-body">
        <div class="say_carousel_wr">
            <div class="card_title_link_wr cf">
                <h4 class="card-title">{{ $card_title }}</h4>
                <a href="{{ $card_link }}" class="card-title-more">+</a>
            </div>

            <div class="say_carousel"> 
                <div class="say_carousel_1f">
                    <img src="/images/common/FontAwsome (quote-left).png">
                </div>

                <div class="say_carousel_quote_wr">
                    <i class="fas fa-quote-left h4 text-primary"></i>
                </div>

                <div id="reviewExampleControls" class="carousel slide review-carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div>
                                <div class="pl"><img src="/images/common/meetup_logo.png"> {{ $review_con }}</div>
                                <div class="media mt-4">
                                    <div class="avatar-sm mr-3">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            {{ $reviewer_img }}
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="font-size-16 mb-1">{{ $reviewer_name }}</h5>
                                        <p class="mb-2">{{ $reviewer_info }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <div class="pl"><img src="/images/common/meetup_logo.png"> {{ $review_con }}</div>
                                <div class="media mt-4">
                                    <div class="avatar-sm mr-3">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            {{ $reviewer_img }}
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="font-size-16 mb-1">{{ $reviewer_name }}</h5>
                                        <p class="mb-2">{{ $reviewer_info }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <div class="pl"><img src="/images/common/meetup_logo.png"> {{ $review_con }}</div>
                                <div class="media mt-4">
                                    <div class="avatar-sm mr-3">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            {{ $reviewer_img }}
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="font-size-16 mb-1">{{ $reviewer_name }}</h5>
                                        <p class="mb-2">{{ $reviewer_info }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>

                    <a class="carousel-control-prev" href="#reviewExampleControls" role="button" data-slide="prev">
                        <i class="mdi mdi-chevron-left carousel-control-icon"></i>
                    </a>
                    <a class="carousel-control-next" href="#reviewExampleControls" role="button" data-slide="next">
                        <i class="mdi mdi-chevron-right carousel-control-icon"></i>
                    </a>
                </div>
            </div> <!-- say_carousel -->
        </div>
    </div>
</div>