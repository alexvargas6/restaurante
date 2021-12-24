<section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Gallery</h2>
            <p>Algunas fotos de Nuestro Restaurante</p>
        </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
            @foreach ($fotos as $foto)
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ $foto->foto }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ $foto->foto }}" alt="{{ $foto->name }}" class="img-fluid">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
