<section id="events" class="events">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>EVENTOS</h2>
            <p>Organice sus eventos en nuestro restaurante</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach($event as $ev)
                <div class="swiper-slide">
                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="{{asset($ev->foto)}}" class="img-fluid" alt="{{$ev->tipo}}">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>{{$ev->tipo}}</h3>
                            <div class="price">
                                <p><span>${{$ev->precio}}</span></p>
                            </div>
                            <p>
                                {{$ev->descripcion}}
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
