<div class="container-fluid slider-container">
    <div class="slider">
        <div class="slider-nav">
            <div class="col-sm-6 slider-nav-header">
                <span>Product Promo</span>
            </div>
            <div class="col-sm-6 slider-nav-navigation">
                <button class="btn btn-primary" id="promo-slider-nav-navigation-btn-next"
                        onclick="promoProductSlider(this.id)">
                    Next
                </button>
                <button class="btn btn-primary" id="promo-slider-nav-navigation-btn-prev"
                        onclick="promoProductSlider(this.id)">
                    Prev
                </button>
            </div>
        </div>
        <div class="slider-element-container">
            @foreach($promos as $promo)
            <div class="slider-element" id="promo-slider-element-id-{{$promo->id}}">
                <div class="slider-element-header">
                    <div class="slider-element-header-discount">{{$promo->discount}}%</div>
                    
                    <div class="slider-element-header-image">        
                        <img src="{{asset('img/products/'.$promo->image)}}"  alt="slider image" class="slider-image">
                    </div>
                </div>
                <div class="slider-element-content">
                    <div class="slider-element-content-title">
                        <a href="">{{$promo->title}}</a>
                    </div>
                    <div class="slider-element-content-detail">
                        The Samsung Galaxy Note 5 N920 is a feature rich Android smartphone that incorporates 
                        some noteworthy upgrades over its predecessor.
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
                        {{$promo->price}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>