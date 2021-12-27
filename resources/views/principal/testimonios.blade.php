<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Testimonios</h2>
            <p>Lo que están diciendo de nosotros</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($testi as $test)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $test->testimonio }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{ asset($test->foto) }}" class="testimonial-img" alt="{{ $test->id }}">
                            <h3>{{ $test->nombre }}</h3>
                            <h4>{{ $test->puesto }}</h4>
                        </div>
                    </div><!-- End testimonial item -->
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
