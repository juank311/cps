       <!-- COURSES SECTION END-->
       <div id="contact-sec">
           <div class="overlay">
               <div class="container set-pad">
                   <div class="row text-center">
                       <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                           <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">CONTACTANOS</h1>
                           <p data-scroll-reveal="enter from the bottom after 0.3s">
                               Nos encanta que estes interesado, dejanos tus datos y te conctataremos o escribemos por whatsapp haciendo click aquí: <a href="https://wa.me/+573003168044?text=¡Hola! Me gustaría obtener más información sobre los diplomados.">CHATEA CON NOSOTROS</a>
                           </p>
                       </div>

                   </div>
                   <!--/.HEADER LINE END-->
                   <div class="row set-row-pad" data-scroll-reveal="enter from the bottom after 0.5s">
                       <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                           <form method="POST">
                               <div class="form-group">
                                   <input name="name" type="text" class="form-control " required="required" placeholder="Tu nombre" />
                               </div>
                               <div class="form-group">
                                   <input name="email" type="text" class="form-control " required="required" placeholder="Tu Correo" />
                               </div>
                               <div class="form-group">
                                   <input name="tel" type="text" class="form-control " required="required" placeholder="Tu Telefono" />
                               </div>
                               <div class="form-group">
                                   <textarea name="msj" required="required" class="form-control" style="min-height: 150px;" placeholder="Cuentanos en un corto mensaje tu solicitud"></textarea>
                               </div>
                               <div class="form-group">
                                   <button name="enviar" type="submit" class="btn btn-info btn-block btn-lg">ENVIAR</button>
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