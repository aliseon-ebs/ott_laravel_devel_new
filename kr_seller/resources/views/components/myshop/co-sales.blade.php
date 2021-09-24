<div class="card">
    <div class="card-body">
        <div class="co_sales_request_wr">
            <h4 class="card-title mb-4">{{ $card_title }}</h4>

            <ul class="inbox-wid list-unstyled">
                <li class="inbox-list-item">
                    <a href="#">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                {{ $requester_img }}
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="font-size-16 mb-1">{{ $requester_name }}</h5>
                                <p class="text-truncate mb-0">{{ $requester_msg }}</p>
                            </div>
                            <div class="font-size-12 ml-2">
                                {{ $requester_time }}
                            </div>
                        </div>
                    </a>
                </li>   
                <li class="inbox-list-item">
                    <a href="#">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                {{ $requester_img }}
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="font-size-16 mb-1">{{ $requester_name }}</h5>
                                <p class="text-truncate mb-0">{{ $requester_msg }}</p>
                            </div>
                            <div class="font-size-12 ml-2">
                                {{ $requester_time }}
                            </div>
                        </div>
                    </a>
                </li>
                <li class="inbox-list-item">
                    <a href="#">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                {{ $requester_img }}
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="font-size-16 mb-1">{{ $requester_name }}</h5>
                                <p class="text-truncate mb-0">{{ $requester_msg }}</p>
                            </div>
                            <div class="font-size-12 ml-2">
                                {{ $requester_time }}
                            </div>
                        </div>
                    </a>
                </li>   
            </ul>

            <div class="text-center">
                <a href="{{ $card_link }}" class="btn btn-primary btn-sm">Load more</a>
            </div>
        </div>
    </div>
</div>