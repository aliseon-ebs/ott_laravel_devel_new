<div class="creator_list_inner">
    <div class="creator_list_thum">
        {{ $creator_img }}
    </div>

    <p class="creator_list_name">{{ $creator_name }}</p>

    <div class="creator_list_expl">
        {{ $creator_expl }}
    </div>

    <div class="creator_list_info">
        <span class="creator_subsc">
            {{ $creator_subscribe }} 
        </span>
        <span class="creator_views">
            {{ $creator_price }} 
        </span>
    </div>

    <a href="{{ $collabo_link }}" class="creator_req_btn">
        Collaboration Request
    </a>
</div>