<section id="specials" class="specials">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Especiales</h2>
            <p>Consulte nuestras ofertas especiales</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                    @foreach($espec as $esp)

                    @if ($loop->first)
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-{{$esp->id}}">SE CUMPLIO EL IF</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-{{$esp->id}}">{{$esp->name}}</a>
                    </li>
                    @endif

                    @endforeach
                </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                    @foreach($espec as $esp)
                    @if ($loop->first)
                    <div class="tab-pane active show" id="tab-{{$esp->id}}">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>{{$esp->name}}</h3>
                                <p class="fst-italic">{{$esp->subtitulo}}</p>
                                <p>{{$esp->descripcion}}</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{asset($esp->foto)}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="tab-pane" id="tab-{{$esp->id}}">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>{{$esp->name}}</h3>
                                <p class="fst-italic">{{$esp->subtitulo}}</p>
                                <p>{{$esp->descripcion}}</p>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{asset($esp->foto)}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
