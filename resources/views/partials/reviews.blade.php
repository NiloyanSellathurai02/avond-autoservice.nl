<section class="testimonial_section section_space_sm">
    <div class="container">
        <div class="section_heading">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="outline_text">Wat onze klanten zeggen:</div>
                    <h2 class="heading_text mb-0 wow" data-splitting>Recensies</h2>
                </div>
                <div class="col-lg-6 d-none d-lg-flex justify-content-end">
                    <ul class="carousel_arrow unordered_list">
                        <li>
                            <button type="button" class="c3c_arrow_left">
                                <i class="fa-regular fa-angle-left"></i>
                                <i class="fa-regular fa-angle-left"></i>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="c3c_arrow_right">
                                <i class="fa-regular fa-angle-right"></i>
                                <i class="fa-regular fa-angle-right"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @if($reviews->isNotEmpty())
            <div class="testimonial_carousel">
                <div class="testimonial_item_boxed carousel_3col row" data-slick='{"dots": false}'>
                    @foreach($reviews as $review)
                        <div class="col-">
                            <div class="testimonial_item bg-transparent">
                                <h3 class="item_title">
                                    <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                                    <span class="title_text">{{ $review->title }}</span>
                                </h3>
                                <p class="testimonial_content mb-0">{{ $review->content }}</p>
                                <div class="admin_wrap">
                                    <h4 class="admin_name">{{ $review->author_name }}</h4>
                                    <ul class="rating_star unordered_list">
                                        @for ($i = 0; $i < $review->rating; $i++)
                                            <li><i class="fa-solid fa-star"></i></li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="alert alert-info">Er zijn momenteel geen recensies beschikbaar.</div>
        @endif
    </div>
</section>
