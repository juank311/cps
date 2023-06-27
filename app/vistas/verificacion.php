<!-- head -->
<?php require RUTA_APP . '/vistas/inc/head.php'; ?>
<!-- end head -->

<body>
    <!-- Nav -->
    <?php require RUTA_APP . '/vistas/inc/nav.php'; ?>
    <!-- end nav -->

    <a href="https://wa.me/+573003168044?text=¡Hola! Me gustaría obtener más información sobre los diplomados." target="_blank" id="whatsapp-button">
        <img src="<?php echo RUTA_URL ?>/img/faculty/logo_whatsapp.png" alt="WhatsApp" style="max-width: 135%; height: auto;" />
    </a>
    </br>
    <!-- FACULTY SECTION END-->
    <div class="container mt-6">
        <div id="course-sec" class="container set-pad mt-4">
            <div class="row mt-5">
                <div class="col-lg-12 col-md-12 col-sm-6">
                    <!-- Primera sección -->
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <div class="text-center">
                            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">VALIDACIÓN DE CERTIFICACIONES</h1>
                        </div>
                        <div style="margin-bottom: 20px;">
                            <span>
                                Para nosotros es muy importante el respaldo y la transparencia en nuestros procesos y certificaciones, aquí podras verificar la veracidad de tus certificados.
                            </span>
                        </div>
                        <div class="col-12 border  text-center align-center  py-4" style="background-color: #36769e; color: aliceblue; padding: 1px;">
                            <h4>INGRESE EL CÓDIGO:</h4>
                        </div>
                        </br>
                        <!-- Formulario -->
                        <form action="" method="POST" id="miFormulario">
                            <div style="margin-bottom: 20px;">
                                <input required type="text" class="form-control" id="code" name="code" placeholder="CODIGO EJ: CPS2023001">
                            </div>
                            <div class="d-grid gap-2 col-3 mx-auto mt-4 text-center ">
                                <button class="btn btn-success" id="enviar" name="enviar" type="submit"><b>Consultar</b></button>
                            </div>
                        </form>
                        <!-- End Formulario -->
                        
                        <?php if (isset($datos['dataCertificacion'][0]->code)) :  ?>
                            <div class="card  text-white">
                                <div data-scroll-reveal="enter from the bottom after 0.3s" class="card-body" style="padding: 10px;">
                                    <h4 class="text-center" class="card-title"><b>Datos Consultados</b></h4>
                                    <ul class="list-group">
                                        <li class="list-group-item"><b>Nombres: </b> <?php echo $datos['dataCertificacion'][0]->name; ?></li>
                                        <li class="list-group-item"><b>Apellidos: </b> <?php echo $datos['dataCertificacion'][0]->lastname; ?></li>
                                        <li class="list-group-item"><b>Fecha de Culminación: </b> <?php echo $datos['dataCertificacion'][0]->date; ?></li>
                                        <li class="list-group-item"><b>Estado: </b> <?php echo $datos['dataCertificacion'][0]->status; ?></li>
                                        <li class="list-group-item"><b>Código: </b> <?php echo $datos['dataCertificacion'][0]->code; ?></li>
                                    </ul>
                                </div>
                            </div>
                           
                        <?php endif; ?>
                        </br>
                        <!-- alert -->
                        <?php if (isset($datos['dataCertificacion']) && $datos['dataCertificacion'] = 1 && !isset($datos['dataCertificacion'][0]->code)) :  ?>
                        <div class="alert alert-danger" role="alert">
                            Código de certificado no encontrado, por favor verifiquelo.
                        </div>
                        <?php endif; ?>
                        <!-- end alert -->
                        </br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
       <div class="container fixed-bottom">
           <div class="row set-row-pad">
               <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                   <h4><strong>Localización </strong></h4>
                   <hr />
                   <div>
                       <h6>Calle 19A No. 6 - 67</h6>
                       <h6>Sahagún Córdoba</h6>
                       <h6><strong>Call:</strong> +57 300 316 8044</h6>
                       <h6><strong>Email: </strong>corposabana.edu@gmail.com</h6>
                   </div>


               </div>
               <div class=" col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                   <h4><strong>Redes Sociales</strong></h4>
                   <hr />
                   <div>
                       <a href="#"> <img src="<?php echo RUTA_URL ?>/img/Social/facebook.png" alt="" /> </a>
                       <a href="#"> <img src="<?php echo RUTA_URL ?>/img/Social/google-plus.png" alt="" /></a>
                       <a href="#"> <img src="<?php echo RUTA_URL ?>/img/Social/twitter.png" alt="" /></a>
                       <a href="https://wa.me/+573003168044?text=¡Hola! Me gustaría obtener más información sobre los diplomados."> <img src="<?php echo RUTA_URL ?>/img/Social/logo_whatsapp.png" alt="" style="max-width: 24%; height: auto;" /></a>
                   </div>
               </div>


           </div>
       </div>
       <!-- CONTACT SECTION END-->
       <div id="footer">
           &copy 2023 corposabana.com | All Rights Reserved | <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : JksoftwareSolutions</a>
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
    <!-- end footer -->