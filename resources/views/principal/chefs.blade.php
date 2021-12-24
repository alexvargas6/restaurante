<section id="chefs" class="chefs">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Chefs</h2>
            <p>Nuestros Chefs Profesionales</p>
        </div>
        <div class="row">
            @foreach ($chef as $chefcito)
                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset($chefcito->foto) }}" class="img-fluid" alt="{{ $chefcito->name }}">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>{{ $chefcito->name }}</h4>
                                <span>{{ $chefcito->puesto }}</span>
                            </div>
                            <div class="social">
                                <a href="{{ $chefcito->twitter }}"><i class="bi bi-twitter"></i></a>
                                <a href="{{ $chefcito->facebook }}"><i class="bi bi-facebook"></i></a>
                                <a href="{{ $chefcito->instagram }}"><i class="bi bi-instagram"></i></a>
                                <a href="{{ $chefcito->linkedin }}"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
