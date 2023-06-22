<!-- head -->
<?php require RUTA_APP . '/vistas/inc/head.php'; ?>
<!-- end head -->

<body>
    <!-- Nav -->
    <?php require RUTA_APP . '/vistas/inc/nav.php'; ?>
    <!-- end nav -->

    <a href="https://wa.me/+573014574615" target="_blank" id="whatsapp-button">
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
                        <?php if (isset($datos['dataCertificacion'][0]->code) ) :  ?>
                        <div class="card  text-white">
                            <div data-scroll-reveal="enter from the bottom after 0.3s" class="card-body" style="padding: 10px;">
                                <h4 class="text-center" class="card-title"><b>Datos Consultados</b></h4>
                                <ul class="list-group">
                                    <li class="list-group-item"><b>Nombres: </b> <?php echo $datos['dataCertificacion'][0]->name;?></li>
                                    <li class="list-group-item"><b>Apellidos: </b> <?php echo $datos['dataCertificacion'][0]->lastname;?></li>
                                    <li class="list-group-item"><b>Fecha de Culminación: </b> <?php echo $datos['dataCertificacion'][0]->date;?></li>
                                    <li class="list-group-item"><b>Estado: </b> <?php echo $datos['dataCertificacion'][0]->status;?></li>
                                    <li class="list-group-item"><b>Código: </b> <?php echo $datos['dataCertificacion'][0]->code;?></li>
                                </ul>
                            </div>
                        </div>
                        <?php endif;?>
                        </br> </br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
    <!-- end footer -->