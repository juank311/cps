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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- datatable -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/05e15f14b6.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost/cps/css/estilos.css">
</head><!-- end head -->
    
</head>

<body>
    
    <!-- end nav -->
    </br></br>
    <div class="mt-4 container">
        <h1 class="mt-4 text-center">Registro de certificados</h1>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Nombres:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="lastname">Apellidos:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>

                    <div class="form-group">
                        <label for="code">Código:</label>
                        <input type="text" class="form-control" id="code" name="code" value="CPS2023" required>
                    </div>

                    <div class="form-group">
                        <label for="date">Fecha:</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Estado:</label>
                        <input type="text" class="form-control" id="status" name="status" value="CULMINADO" required>
                    </div>

                    <button type="submit" name="enviar_registro" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="container" id="caja">
        <div class="row">
        </div>
        <div class="row mt-2 caja">
            <div class="col-sm-12">
                <table id="tblFormularios" class=" mt-4 mb-4" style="width:100%">
                    <thead>
                        <tr class="border">
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Fecha de Culminación</th>
                            <th>Estado</th>
                            <th>Código</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos['mostrarCertificaciones'] as $row) : ?>
                            <tr class="border">
                                <td><?= $row->name;?></td>
                                <td><?= $row->lastname;?></td>
                                <td><?= $row->date;?></td>
                                <td><?= $row->status;?></td>
                                <td><?= $row->code;?></td>
                                <td>
                                <a href="" class="btn btn-warning"><i class="fa-solid fa-eye"></i> Ver</a>

                                <a href="<?=RUTA_URL?>/diplomados/borrar/<?= $row->id;?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Borrar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
        CKEDITOR.replace( 'texto' );
</script>
   
<Script> type="text/javascript" src="<?= RUTA_URL?>/js/main.js" </Script>
<script src="https://kit.fontawesome.com/05e15f14b6.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#tblFormularios').DataTable();
    });

    
</script>
</body>