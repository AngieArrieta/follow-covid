<?php include('Actions/bd.php');  require_once('../Templates/header.php'); ?>


<div class = "container">


    <?php if(isset($_SESSION['message'])) {?>
                    
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
                
    <?php $_SESSION['message'] = null ; $_SESSION['message_type'] = null ; } ?>

    <a class='btn btn-outline-primary mt-5' href= "inicio.php">Volver atras</a>


    <div class="col-sm-12 align-self-center text-center">
        <h1>Todos los Pacientes</h1>
    </div>

    <div class="col">
    
        <div class="col-md-12">

            <table class="table table-bordered mt-5">


                <thead>
                    <tr>
                        
                        <th> Enfermera responsable </th>
                        <th> Nombre del paciente </th>
                        <th> Apellidos del paciente </th>
                        <th> Número de documento </th>
                        <th> Proxima gestión </th>
                        <th> Semáforo</th>
                        <th> Estado final</th>
                        <th> Acciones </th>

                    </tr>
                </thead>


                <tbody>
                    <?php 
                    $query = "select e.nombre, p.NOMBRE, p.APELLIDOS, p.NUMERO_IDENTIFICACION, p.ID, p.SEMAFORO, p.ESTADO_FINAL, p.PROXIMA_GESTION
                            from enfermeras_php as e, Pacientes_php as p";

                    $res = $conn->query($query);


                    while($row = mysqli_fetch_array($res)){ ?>

                        <tr>
                            
                            <td><?php  echo $row['nombre'] ?></td>
                            <td><?php  echo $row['NOMBRE'] ?></td>
                            <td><?php  echo $row['APELLIDOS'] ?></td>
                            <td><?php  echo $row['NUMERO_IDENTIFICACION'] ?></td>
                            <td><?php  echo $row['PROXIMA_GESTION'] ?></td>
                            <td><?php  echo $row['SEMAFORO'] ?></td>
                            <td><?php  echo $row['ESTADO_FINAL'] ?></td>
                            <td>
                                <a class="btn btn-success btn-sm col-md-12" href="info_pacientes.php?id=<?php echo $row['ID']?>"> Ver paciente </a>
                                <a class="btn btn-secondary btn-sm col-md-12 mt-3" href="editar_paciente.php?id=<?php echo $row['ID']?>"> Editar </a>
                            </td>
                        </tr>
                        


                    <?php } ?>
                </tbody>


            </table>


        </div>

    </div>

</div>


<?php // require_once('../Templates/footer.php'); ?>