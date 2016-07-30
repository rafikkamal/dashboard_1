<div class="container-fluid slider-container">
    <div class="slider">
        <div class="slider-nav">
            <div class="col-sm-6 slider-nav-header">
                <span>Product Slider Demo</span>
            </div>
            <div class="col-sm-6 slider-nav-navigation">
                <button class="btn btn-primary" id="slider-nav-navigation-btn-next"
                        onclick="getNext()">
                    Next
                </button>
                <button class="btn btn-primary" id="slider-nav-navigation-btn-prev"
                        onclick="getPrev()">
                    Prev
                </button>
            </div>
        </div>
        <div class="slider-element-container">
            @for($i=1;$i<11;$i++)
            <div class="slider-element" id="slider-element-id-{{$i}}">
                <div class="slider-element-header">
                    <div class="slider-element-header-discount">19.99%</div>
                    <div class="slider-element-header-image">        
                        <img src="{{asset('img/slider/product_slider/mobile.png')}}"  alt="slider image" class="slider-image">
                    </div>
                </div>
                <div class="slider-element-content">
                    <div class="slider-element-content-title">
                        <a href="">This Is Product Title {{$i}}</a>
                    </div>
                    <div class="slider-element-content-detail">
                        The Samsung Galaxy Note 5 N920 is a feature rich Android smartphone that incorporates 
                        some noteworthy upgrades over its predecessor. The 153.2 x 76.1 x 7.6cm phone produces 
                        spectacular 1440 x 2560p resolution images on its tall 5.7inch Super AMOLED capacitive.
                    </div>
                </div>
                <div class="slider-element-footer">
                    <div class="slider-element-footer-rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <div class="slider-element-footer-price">
                        31220.00Tk
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>