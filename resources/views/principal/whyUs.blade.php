<section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Porque nosotros</h2>
            <p>Porque elegir nuestro restaurante</p>
        </div>
        <div class="row">
            @foreach ($whyus as $why)
                <div class="col-lg-4">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span>{{ $why->id }}</span>
                        <h4>{{ $why->titulo }}</h4>
                        <p>{{ $why->motivo }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
