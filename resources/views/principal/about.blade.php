<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="about-img">
                    <img src="{{ asset($about->foto) }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>{{ $about->titulo }}</h3>
                <p class="fst-italic">
                    {{ $about->sub_titulo }}
                </p>
                <ul>
                    @foreach ($puntos as $po)
                        <li><i class="bi bi-check-circle"></i> {{ $po->punto }}
                        </li>
                    @endforeach
                </ul>
                <p>
                    {{ $about->descripcion }}
                </p>
            </div>
        </div>

    </div>
</section>
