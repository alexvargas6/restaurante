<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contacto</h2>
            <p>Contactenos</p>
        </div>
    </div>

    <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;"
            src="https://maps.google.com/maps?q=M%C3%A9rida%20yucat%C3%A1n&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" data-aos="fade-up">

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Dirección:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="open-hours">
                        <i class="bi bi-clock"></i>
                        <h4>Horario:</h4>
                        <p>
                            Monday-Saturday:<br>
                            11:00 AM - 2300 PM
                        </p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Tel:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Tu email"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="8" placeholder="Mensaje"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Cargando..</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Tu mensaje se ha enviado. ¡Gracias!</div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar</button></div>
                </form>

            </div>

        </div>

    </div>
</section>
