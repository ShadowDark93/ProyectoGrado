@extends('layouts.plantilla')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Green Campus</h1>
            <p>Somos <span class="typed" data-typed-items="Innovadores, Desarrolladores, Emprendedores, Geeks"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Introducción</h2>
                    <div class="container">
                        <div class="row">
                            <p>Debido a que el mundo está evolucionando a una era digital en la cual las personas deben
                                estar interconectadas por medios tecnológicos, cada vez la interacción aumenta, tal y como
                                lo afirman (Holloway, 2020). Esto conlleva a que el mundo realice un cambio sustancial en la
                                manera de hacer las cosas y más aun con el auge de la industria 4.0, el cual está
                                revolucionando al mundo.</p>
                        </div><br>
                        <div class="row">
                            <p>La presente propuesta de investigación tiene como objetivo realizar un análisis al consumo
                                energético de la Universidad Cooperativa de Colombia, sede Ibagué, en su área de Salas de
                                Computo, con el fin de plantear una solución que permita informar sobre el uso energético de
                                tipo IoT que permite enviar esta información a una base de datos. A esta información
                                posteriormente se le realizará un análisis en los resultados obtenidos utilizando técnicas
                                de Machine Learning e Inteligencia Artificial como lo indica (Openmind, 2019) ya que este
                                tipo de herramientas permite realizar predicciones, minimizar consumos innecesarios y
                                notificar anomalías encontradas en el sistema eléctrico medido ya que esta zona de la
                                Universidad es bastante concurrente debido a que es dedicada a brindar asesorías, practicas,
                                capacitaciones y clases a los estudiantes, profesores, administrativos y personal externo
                                previamente autorizado al uso de estas. </p>
                        </div><br>
                        <div class="row">
                            <p>El prototipo tiene como propósito general apuntar a dos ejes estratégicos (Universidad
                                Cooperativa de Colombia, 2013), dentro de los cuales se indica que la universidad debe ser
                                sostenible social, financiera y ambientalmente, lo cual se logra con la reducción de consumo
                                eléctrico y para el siguiente eje estratégico la Universidad se plantea ser innovadora, lo
                                cual se logra con la implementación de este tipo de tecnologías de tipo IoT y Machine
                                Learning adaptado a las necesidades particulares de esta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resumen</h2>
                    <div class="container">
                        <div class="row">
                            <div class="resume-item">
                                <p>A causa de la globalización e integración que ha tenido el ser humano con las nuevas
                                    tecnologías
                                    en
                                    un contexto diario, este ha tenido que relacionarse con otras personas ya sea por
                                    trabajo,
                                    amistad,
                                    relaciones familiares o afectivas haciendo uso de diferentes mecanismos, los cuales
                                    permiten
                                    realizar esta interacción aumentando cada vez el consumo eléctrico y por ende la
                                    generación
                                    CO2
                                    en
                                    este tipo de edificaciones. </p>
                            </div>
                            <div class="resume-item">
                                <p>Acorde con esto, alrededor del mundo se han tenido algunas iniciativas para monitorizar
                                    los
                                    consumos
                                    y darlos a conocer al público con el fin de generar conciencia ambiental y apoyando
                                    estas se
                                    han
                                    hecho esfuerzos empleando algoritmos de aprendizaje automatizado (Machine Learning) y
                                    otras
                                    técnicas
                                    de inteligencia artificial para lograr predecir los consumos eléctricos en edificaciones
                                    de
                                    un
                                    tamaño considerable, pero muchos de estos esfuerzos han sido aislados y sin mayor
                                    impacto.
                                </p>
                            </div>
                            <div class="resume-item">
                                <p>Para el caso particular de las universidades, ha sido y continúa siendo uno de los
                                    mayores
                                    generadores de costos en los presupuestos anuales, por consiguiente, el presente
                                    artículo
                                    expone
                                    un
                                    prototipo de tipo IoT conectado una arquitectura basada en la web, en la cual se hará
                                    uso de
                                    técnicas de machine learning e inteligencia artificial para minimizar estos consumos.
                                    Todas
                                    estas
                                    características se combinan para realiza un monitoreo al consumo eléctrico, permitiendo
                                    notificar
                                    anomalías encontradas en las mediciones realizadas con el fin de garantizar un mejor
                                    aprovechamiento
                                    de la energía eléctrica.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Nosotros Section ======= -->
        <section id="nosotros" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Nosotros</h2>
                    <p>Nuestro equipo de trabajo conformado por tres estudiantes de pregrado de ingeniería de sistemas, 2
                        profesores con los más altos grados de conocimiento y experiencia dentro del área los cuales nos
                        guían para este proceso.</p>
                </div>

                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item" data-aos="fade-up">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Estudiante de último semestre de ingeniería de sistemas encargado de la codificacion principal
                            Full Stack encargado del diseño del software basado en Laravel, MySQL y Bootstrap.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>David Ortega</h3>
                        <h4>Desarrollador</h4>
                    </div>

                    <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Estudiante de ingeniería de sistemas encargada del diseño, mantenimiento de los datos,
                            busquedas especializadas, estructuras de funcionales de ML, IA y soporte en Arduino.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Vivian Vargas</h3>
                        <h4>Deseñadora</h4>
                    </div>

                    <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Estudiante de último semestre de ingenieria de sistemas encargado de los
                            requerimientos funcionales del proyecto, diagramas electronicos y codificacion
                            del prototipo.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Julian Orjuela</h3>
                        <h4>Desarrollador</h4>
                    </div>

                    <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Ingeniería de Sistemas y coordinadora E-Learning de la Universidad Cooperativa de Colombia
                            campus Ibagué-Espinal. Co-investigadora en proyectos de investigación en Software y
                            ML.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                        <h3>Nelly Clavijo</h3>
                        <h4>Directora Metodolófica</h4>
                    </div>

                    <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Profesor Investigador de la Universidad Cooperativa de Colombia de la sede Ibagué– Espinal,
                            Grupo de investigación AQUA, Candidato a Doctor en Ingeniería de la UNAB.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                        <h3>Fernando Gutierrez</h3>
                        <h4>Director Técnico</h4>
                    </div>

                </div>

            </div>
        </section><!-- End Nosotros Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Ubicación:</h4>
                                <p>1, Cl. 10 ##64, Ibagué, Tolima, Colombia</p>
                            </div>

                            <div class="email">
                                <i class="fas fa-globe-americas"></i>
                                <h4>Web:</h4>
                                <p>www.ucc.edu.co</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Telefono:</h4>
                                <p>+573005460136</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7955.672962027924!2d-75.23764047400475!3d4.441519383727541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcad3203b0739d0ff!2sSede%20Administrativa%20Universidad%20Cooperativa!5e0!3m2!1ses!2sbg!4v1620933863385!5m2!1ses!2sbg"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Correo</label>
                                    <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Asunto</label>
                                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Mensaje</label>
                                <textarea class="form-control" name="message" rows="10" data-rule="required"
                                    data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
