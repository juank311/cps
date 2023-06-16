<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CPS</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    
    <link href="<?php echo RUTA_URL ?>/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="<?php echo RUTA_URL ?>/css/font-awesome.min.css" rel="stylesheet" />
    <!-- FLEXSLIDER CSS -->
    <link href="<?php echo RUTA_URL ?>/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="<?php echo RUTA_URL ?>/css/style.css" rel="stylesheet" />
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>

<body>
   

    <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="<?php echo RUTA_URL ?>/img/logo_lema.png" alt="" /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#features-sec">OFERTAS</a></li>
                    <li><a href="#faculty-sec">NOSOTROS</a></li>
                    <li><a href="#course-sec">COURSES</a></li>
                    <li><a href="#contact-sec">CONTACT</a></li>

                </ul>
            </div>
        </div>
    </div>
    <a href="https://wa.me/+573014574615" target="_blank" id="whatsapp-button">
        <img src="<?php echo RUTA_URL ?>/img/faculty/logo_whatsapp.png" alt="WhatsApp" style="max-width: 135%; height: auto;" />
    </a>
    <!--NAVBAR SECTION END-->
    <div class="home-sec" id="home">
        <div class="overlay">
            <div class="container">
                <div class="row text-center ">

                    <div class="col-lg-12  col-md-12 col-sm-12">

                        <div class="flexslider set-flexi" id="main-section">
                            <ul class="slides move-me">
                                <!-- Slider 01 -->
                                <li>
                                    <h3>ESTUDIA GRATIS EN EL DIPLOMADO:</h3>
                                    <h1>ATENCIÓN INTEGRAL A LA PRIMERA INFANCIA</h1>
                                    <h4>Dale un Plus+ a tu carrera!</h4>
                                    <a href="#features-sec" class="btn btn-info btn-lg">
                                        Inscribirse
                                    </a>

                                </li>
                                <!-- End Slider 01 -->

                                <!-- Slider 02 -->
                                <li>
                                    <h3>ESTUDIA GRATIS EN EL DIPLOMADO:</h3>
                                    <h1>PSICOPEDAGOGÍA INFANTIL</h1>
                                    <h4>Dale un Plus+ a tu carrera!</h4>
                                    <a href="#features-sec" class="btn btn-info btn-lg">
                                        Inscribirse
                                    </a>

                                </li>
                                <!-- End Slider 02 -->

                                <!-- Slider 03 -->
                                <!-- <li>
                            <h3>ESTUDIA GRATIS EN EL DIPLOMADO:</h3>
                           <h1>AWESOME FACULTY PANEL</h1>
                             <a  href="#features-sec" class="btn btn-default btn-lg" >
                                GET AWESOME 
                            </a>
                             <a  href="#features-sec" class="btn btn-info btn-lg" >
                                FEATURE LIST
                            </a>
                        </li> -->
                                <!-- End Slider 03 -->
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <!--HOME SECTION END-->
    <div class="tag-line">
        <div class="container">
            <div class="row  text-center">

                <div class="col-lg-12  col-md-12 col-sm-12">

                    <h2 data-scroll-reveal="enter from the bottom after 0.1s"> CORPORACIÓN PEDAGÓGICA DE LA SABANA</h2>
                </div>
            </div>
        </div>

    </div>
    <!--HOME SECTION TAG LINE END-->
    <div id="features-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">DIPLOMADOS</h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                    Elige el diplomado que mas te guste, registrate y estudia totalmente gratis, se participe de la mejor educación informal. La certificación es opcional.
                </p>
            </div>

        </div>
        <!--/.HEADER LINE END-->


        <div class="row">


            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <!-- <i class="fa fa-paper-plane-o fa-4x icon-round-border" ></i> -->
                    <h3>Atención Integral a la Primera Infancia</h3>
                    <hr />
                    <img src="<?php echo RUTA_URL ?>/img/faculty/4.jpg" class="img-rounded" style="max-width: 80%; height: auto;" />
                    <hr />
                    <span>
                        <b>Duracion:</b> 120 horas
                        <br />
                        <b>Modalidad:</b> Virtual
                        <br />
                        <b>Tipo:</b> Diplomado
                        <br />
                        <b>Tipo de educación:</b> Informal
                    </span>
                    <br />
                    <a href="#" class="btn btn-info btn-set">Ver mas</a>
                    <a href="#" class="btn btn-success btn-set">Inscribirse</a>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="about-div">
                    <!-- <i class="fa fa-bolt fa-4x icon-round-border" ></i> -->
                    <h3>psicopedagogía infantil</h3>
                    <hr />
                    <img src="<?php echo RUTA_URL ?>/img/faculty/4.webp" class="img-rounded" style="max-width: 80%; height: auto;" />
                    <hr />
                    <span>
                        <b>Duracion:</b> 120 horas
                        <br />
                        <b>Modalidad:</b> Virtual
                        <br />
                        <b>Tipo:</b> Diplomado
                        <br />
                        <b>Tipo de educación:</b> Informal
                    </span>
                    <br />
                    <a href="#" class="btn btn-info btn-set">Ver mas</a>
                    <a href="#" class="btn btn-success btn-set">Inscribirse</a>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="about-div">
                    <!-- <i class="fa fa-magic fa-4x icon-round-border" ></i> -->
                    <h3>innovación en la educación infantil </h3>
                    <hr />
                    <img src="<?php echo RUTA_URL ?>/img/faculty/1.jpeg" class="img-rounded" style="max-width: 80%; height: auto;" />
                    <hr />
                    <span>
                        <b>Duracion:</b>
                        <br />
                        <b>Modalidad:</b> Proximamente
                        <br />
                        <b>Tipo:</b> Diplomado
                        <br />
                        <b>Tipo de educación:</b> Informal
                    </span>
                    <br />
                    <a href="#" class="btn btn-info btn-set">Ver mas</a>
                    <!-- <a href="#" class="btn btn-success btn-set">Inscribirse</a> -->
                </div>
            </div>


        </div>
    </div>
    <!-- FEATURES SECTION END-->
    <div id="faculty-sec">
        <div class="container set-pad">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">SOBRE NOSOTROS</h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                        ¿Por qué estudiar aquí?
                    </p>
                </div>

            </div>
            <!--/.HEADER LINE END-->

            <div class="row">


                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                    <div class="faculty-div">
                        <img src="<?php echo RUTA_URL ?>/img/faculty/ISO_2.png" class="img-rounded" style="max-width: 80%; height: auto;" />
                        <h3>CERTIFICACIÓN</h3>
                        <hr />
                        <h4>ISO NTC</h4>
                        <p>
                            La norma ISO 9001, NTC 5581 y NTC 5555 ayudan a las organizaciones para que puedan ofrecer productos y servicios de calidad.

                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="faculty-div">
                        <img src="<?php echo RUTA_URL ?>/img/faculty/meet.jpg" class="img-rounded" style="max-width: 80%; height: auto;" />
                        <h3>VIRTUALIDAD</h3>
                        <hr />
                        <h4>Google Meet</h4>
                        <p>
                            Todas nuestras clases son totalmente en vivo y 100% en modalidad virtual, brindando
                            flexibilidad para que puedas acceder desde cualquier lugar o dispositivo.

                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                    <div class="faculty-div">
                        <img src="<?php echo RUTA_URL ?>/img/faculty/docente.png" class="img-rounded" style="max-width: 80%; height: auto;" />
                        <h3>DOCENTES DE CALIDAD</h3>
                        <hr />
                        <h4>Compromiso y calidad educativa</h4>
                        <p>
                            Nuestros docentes están altamente calificados, apasionados por la educación y comprometidos en brindar
                            una experiencia educativa de calidad.


                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FACULTY SECTION END-->
    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">NUESTROS PARTICIPANTES</h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                    ¡Nos complace ver cómo cada vez más personas se suman a estudiar con nosotros!
                    Nuestro objetivo es proporcionar una educación de calidad y accesible para todos,
                    y nos alegra que tantas personas estén reconociendo el valor de nuestra oferta educativa.
                </p>
            </div>

        </div>
        <!--/.HEADER LINE END-->


        <div class="row set-row-pad">
            <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s">
                <img src="<?php echo RUTA_URL ?>/img/faculty/mas_clases.jpg" class="img-rounded" class="img-thumbnail" style="max-width: 100%; height: auto;" />

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                                    <strong> 765+</strong> ATENCIÓN INTEGRAL A LA PRIMERA INFANCIA
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <p>Ya son más de 700 personas certificadas en diplomado de atención integral a la primera infancia.
                                    Su compromiso marca la diferencia en el desarrollo de los niños.
                                    Gracias por contribuir al bienestar de las comunidades.
                                    ¡Sigan fortaleciendo la atención a la primera infancia!</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                    <strong> 350+</strong> PSICOPEDAGOGÍA INFANTIL
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <p>
                                    ¡Increíble! Más de 300 personas se han certificado en el diplomado de psicopedagogía infantil.
                                    Felicitaciones por su compromiso con el desarrollo y el aprendizaje de los niños.
                                    Su dedicación en esta área es invaluable y hará una diferencia significativa en las vidas de los pequeños.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                                    <strong> 153+</strong> MANAGEMENT COURSES
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac orci ac aliquam. Nulla eget condimentum mauris, eget tincidunt est.
                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="alert alert-info" data-scroll-reveal="enter from the bottom after 1.1s">
                    <span style="font-size:40px;">
                        <strong> 1000 + </strong>
                        <hr />
                        Certificaciones
                    </span>
                </div>
            </div>



        </div>
    </div>
    <!-- COURSES SECTION END-->
    <div id="contact-sec">
        <div class="overlay">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">CONTACTANOS</h1>
                        <p data-scroll-reveal="enter from the bottom after 0.3s">
                            Nos encanta que estes interesado, dejanos tus datos y te conctataremos o escribemos por whatsapp.
                        </p>
                    </div>

                </div>
                <!--/.HEADER LINE END-->
                <div class="row set-row-pad" data-scroll-reveal="enter from the bottom after 0.5s">


                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control " required="required" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " required="required" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <textarea name="message" required="required" class="form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-block btn-lg">SUBMIT REQUEST</button>
                            </div>

                        </form>
                    </div>






                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row set-row-pad">
            <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                <h2><strong>Our Location </strong></h2>
                <hr />
                <div>
                    <h4>234/80 -UFG , New Street,</h4>
                    <h4>Switzerland.</h4>
                    <h4><strong>Call:</strong> + 67-098-907-1269 / 70 / 71 </h4>
                    <h4><strong>Email: </strong>info@yourdomain.com</h4>
                </div>


            </div>
            <div class=" col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                <h2><strong>Social Conectivity </strong></h2>
                <hr />
                <div>
                    <a href="#"> <img src="<?php echo RUTA_URL ?>/img/Social/facebook.png" alt="" /> </a>
                    <a href="#"> <img src="<?php echo RUTA_URL ?>/img/Social/google-plus.png" alt="" /></a>
                    <a href="#"> <img src="<?php echo RUTA_URL ?>/img/Social/twitter.png" alt="" /></a>
                </div>
            </div>


        </div>
    </div>
    <!-- CONTACT SECTION END-->
    <div id="footer">
        &copy 2014 yourdomain.com | All Rights Reserved | <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
    </div>
    <!-- FOOTER SECTION END-->

    <!--  Jquery Core Script -->
    <script>
    window.addEventListener('scroll', function() {
      var whatsappButton = document.getElementById('whatsapp-button');
      var scrollPosition = window.scrollY || document.documentElement.scrollTop;

      if (scrollPosition > 100) {
        whatsappButton.style.display = 'block';
      } else {
        whatsappButton.style.display = 'none';
      }
    });
  </script>
    </script>
    <script src="<?php echo RUTA_URL ?>/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="<?php echo RUTA_URL ?>/js/bootstrap.js"></script>
    <!--  Flexslider Scripts -->
    <script src="<?php echo RUTA_URL ?>/js/jquery.flexslider.js"></script>
    <!--  Scrolling Reveal Script -->
    <script src="<?php echo RUTA_URL ?>/js/scrollReveal.js"></script>
    <!--  Scroll Scripts -->
    <script src="<?php echo RUTA_URL ?>/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts -->
    <script src="<?php echo RUTA_URL ?>/js/custom.js"></script>
</body>

</html>