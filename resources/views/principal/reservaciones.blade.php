<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Reservaciones</h2>
            <p>Reservar una mesa</p>
        </div>

        <form action="{{ route('reservar') }}" method="post" role="form" class="php-email-form" data-aos="fade-up"
            data-aos-delay="100">
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="hidden" class="form-control" name="retorno" value="0">
                    <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre"
                        data-rule="minlen:4" data-msg="Ingrese al menos 4 caracteres">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                        data-rule="email" data-msg="Por favor, introduzca una dirección de correo electrónico válida">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="number" class="form-control" name="telefono" id="phone"
                        placeholder="Tu número de telefono" data-rule="minlen:4"
                        data-msg="Ingrese al menos 4 caracteres">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="date" name="fecha" class="form-control" id="date" placeholder="Fecha"
                        data-rule="minlen:4" data-msg="Ingrese al menos 4 caracteres">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="time" class="form-control" name="hora" id="time" placeholder="Hora"
                        data-rule="minlen:4" data-msg="Ingrese al menos 4 caracteres">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="personas" id="people" placeholder="# de personas"
                        data-rule="minlen:1" data-msg="Ingrese al menos 1 carácter">
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="mensaje" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Se envió su solicitud de reserva. Le devolveremos la llamada o le enviaremos
                    un correo electrónico
                    para confirmar su reserva. ¡Gracias!</div>
            </div>
            <div class="text-center"><button type="submit">Reservar una mesa</button></div>
        </form>

    </div>
</section>
