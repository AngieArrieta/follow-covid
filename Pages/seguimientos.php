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
        <h1  >Pacientes para seguimiento de hoy</h1>
    </div>

    <div class="col">
    
        <div class="col-md-12">

            <table class="table table-bordered mt-5">


                <thead>
                    <tr>
                        
                        <th> Enfermera </th>
                        <th> Nombre del paciente </th>
                        <th> Apellidos del paciente </th>
                        <th> Número de documento </th>
                        <th> Acciones </th>

                    </tr>
                </thead>


                <tbody>
                    <?php 
                    $query = "select e.nombre, p.NOMBRE, p.APELLIDOS, p.NUMERO_IDENTIFICACION, p.ID
                            from enfermeras_php as e, Pacientes_php as p
                            where p.PROXIMA_GESTION = CURDATE();";

                    $res = $conn->query($query);

                    while($row = mysqli_fetch_array($res)){ ?>

                        <tr>
                            
                            <td><?php  echo $row['nombre'] ?></td>
                            <td><?php  echo $row['NOMBRE'] ?></td>
                            <td><?php  echo $row['APELLIDOS'] ?></td>
                            <td><?php  echo $row['NUMERO_IDENTIFICACION'] ?></td>
                            <td>
                                <a class="btn btn-primary" href="seguimiento_paciente.php?id=<?php echo $row['ID']?>"> Hacer seguimiento </a>
                            </td>
                        </tr>
                        


                    <?php } ?>
                </tbody>


            </table>


        </div>

    </div>

</div>


<?php // require_once('../Templates/footer.php'); ?>