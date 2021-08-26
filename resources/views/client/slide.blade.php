<!-- block slide top -->
<div class="block-slide-main slide-opt-1">

    <!-- slide -->
    <div class="owl-carousel dotsData"
        data-nav="true"
        data-dots="true"
        data-margin="0"
        data-items='1'
        data-autoplayTimeout="700"
        data-autoplay="true"
        data-loop="true">
        @foreach ($slideMain as $key => $value)
            <div class="item item2" style="background-image: url({{$value->url}});" data-dot="{{$key + 1}}">
                <div class="description">
                    <span class="title">{{ $value->title }}</span>
                    <span class="subtitle">{{ $value->subtitle }}</span>
                    <span class="des">{{ $value->des }}</span>
                    <a href="{{ $value->href }}" class="btn">{{ $value->btn }}</a>
                </div>
            </div>
        @endforeach
    </div> <!-- slide -->

</div><!-- block slide top -->

<!-- banner -->
<div class="banner-slide">
    @foreach ($sildeSub as $value)
        <a href="{{ $value->href }}" class="box-img"><img src="{{$value->url}}" alt="banner-slide"></a>
    @endforeach
</div><!-- banner -->
