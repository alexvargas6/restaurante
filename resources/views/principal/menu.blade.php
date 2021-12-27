<section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Menu</h2>
            <p>Consulte nuestro menú</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter="*" class="filter-active">Todos</li>
                    @foreach ($platillo as $plat)
                        <li data-filter=".filter-{{ $plat->platillos }}">{{ $plat->platillos }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($menu as $men)
                <div class="col-lg-6 menu-item filter-{{ $men->getTipo->platillos }}">
                    <img src="{{ asset($men->foto) }}" class="menu-img" alt="{{ $men->nombre }}">
                    <div class="menu-content">
                        <a href="#">{{ $men->nombre }}</a><span>${{ $men->precio }}</span>
                    </div>
                    <div class="menu-ingredients">
                        {{ $men->ingredientes }}
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
