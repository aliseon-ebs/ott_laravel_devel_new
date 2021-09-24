<div class="card">
    <div class="card-body">
        <div class="creator">
            <div class="creator_box">
                <div class="card_title_link_wr cf">
                    <h4 class="card-title">Top 5 Creator</h4>
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#total" role="tab" aria-selected="true" >
                                Total
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#today" role="tab" aria-selected="true" >
                                Today
                            </a>
                        </li>
                    </ul>  
                </div>              
            </div>
            <div class="tab-content p3 text-muted">
                <div class="tab-pane active" id="total">
                    <div class="creator_list">
                        <ul class="row">
                            <li class="col-2">
                                @component('components.common.creator-card')
                                @slot('creator_img') <img src="/images/common/admin_creator_thum01.png" alt=""> @endslot
                                @slot('creator_name') Jenny @endslot
                                @slot('creator_expl') 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam @endslot
                                @slot('creator_subscribe') 3,000 subscribe @endslot
                                @slot('creator_price') 45,349 AED @endslot
                                @slot('collabo_link') # @endslot
                                @endcomponent  
                            </li>
                            <li class="col-2">
                                @component('components.common.creator-card')
                                @slot('creator_img') <img src="/images/common/admin_creator_thum02.png" alt=""> @endslot
                                @slot('creator_name') Summa @endslot
                                @slot('creator_expl') 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam @endslot
                                @slot('creator_subscribe') 3,000 subscribe @endslot
                                @slot('creator_price') 45,349 AED @endslot
                                @slot('collabo_link') # @endslot
                                @endcomponent  
                            </li>
                            <li class="col-2">
                                @component('components.common.creator-card')
                                @slot('creator_img') <img src="/images/common/admin_creator_thum03.png" alt=""> @endslot
                                @slot('creator_name') Dolly @endslot
                                @slot('creator_expl') 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam @endslot
                                @slot('creator_subscribe') 3,000 subscribe @endslot
                                @slot('creator_price') 45,349 AED @endslot
                                @slot('collabo_link') # @endslot
                                @endcomponent  
                            </li>
                            <li class="col-2">
                                @component('components.common.creator-card')
                                @slot('creator_img') <img src="/images/common/admin_creator_thum03.png" alt=""> @endslot
                                @slot('creator_name') Dolly @endslot
                                @slot('creator_expl') 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam @endslot
                                @slot('creator_subscribe') 3,000 subscribe @endslot
                                @slot('creator_price') 45,349 AED @endslot
                                @slot('collabo_link') # @endslot
                                @endcomponent  
                            </li>
                            <li class="col-2" style="margin-left:0px">
                                @component('components.common.creator-card')
                                @slot('creator_img') <img src="/images/common/admin_creator_thum03.png" alt=""> @endslot
                                @slot('creator_name') Dolly @endslot
                                @slot('creator_expl') 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam @endslot
                                @slot('creator_subscribe') 3,000 subscribe @endslot
                                @slot('creator_price') 45,349 AED @endslot
                                @slot('collabo_link') # @endslot
                                @endcomponent  
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="today">
                    <div class="creator_list">
                        <ul class="row">
                            <li class="col-2">
                                @component('components.common.creator-card')
                                @slot('creator_img') <img src="/images/common/admin_creator_thum02.png" alt=""> @endslot
                                @slot('creator_name') Jenny @endslot
                                @slot('creator_expl') 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam @endslot
                                @slot('creator_subscribe') 3,000 subscribe @endslot
                                @slot('creator_price') 45,349 AED @endslot
                                @slot('collabo_link') # @endslot
                                @endcomponent  
                            </li>
                            <li class="col-2">
                                @component('components.common.creator-card')
                                @slot('creator_img') <img src="/images/common/admin_creator_thum03.png" alt=""> @endslot
                                @slot('creator_name') Summa @endslot
                                @slot('creator_expl') 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam @endslot
                                @slot('creator_subscribe') 3,000 subscribe @endslot
                                @slot('creator_price') 45,349 AED @endslot
                                @slot('collabo_link') # @endslot
                                @endcomponent  
                            </li>
                            <li class="col-2">
                                @component('components.common.creator-card')
                                @slot('creator_img') <img src="/images/common/admin_creator_thum01.png" alt=""> @endslot
                                @slot('creator_name') Dolly @endslot
                                @slot('creator_expl') 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam @endslot
                                @slot('creator_subscribe') 3,000 subscribe @endslot
                                @slot('creator_price') 45,349 AED @endslot
                                @slot('collabo_link') # @endslot
                                @endcomponent  
                            </li>
                            <li class="col-2">
                                @component('components.common.creator-card')
                                @slot('creator_img') <img src="/images/common/admin_creator_thum03.png" alt=""> @endslot
                                @slot('creator_name') Dolly @endslot
                                @slot('creator_expl') 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam @endslot
                                @slot('creator_subscribe') 3,000 subscribe @endslot
                                @slot('creator_price') 45,349 AED @endslot
                                @slot('collabo_link') # @endslot
                                @endcomponent  
                            </li>
                            <li class="col-2" style="margin-left:0px">
                                @component('components.common.creator-card')
                                @slot('creator_img') <img src="/images/common/admin_creator_thum01.png" alt=""> @endslot
                                @slot('creator_name') Dolly @endslot
                                @slot('creator_expl') 
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam @endslot
                                @slot('creator_subscribe') 3,000 subscribe @endslot
                                @slot('creator_price') 45,349 AED @endslot
                                @slot('collabo_link') # @endslot
                                @endcomponent  
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>