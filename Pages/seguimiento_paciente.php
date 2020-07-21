<?php include('Actions/bd.php');  require_once('../Templates/header.php'); ?>

<div class = "container">

    <?php

    if(isset($_GET['id'])){
        $query = "select * from Pacientes_php where id=".$_GET['id'].";";
        $res = $conn->query($query);
    }

    $row = mysqli_fetch_array($res);

    ?>

    
    <a class='btn btn-outline-primary mt-5' href= "seguimientos.php">Volver atras</a>


    <div class="card mt-5" style = "background-color:#C3EEEE">
        <div class="card-body">
            <h3 class="card-title">Informacion del paciente</h3>
            <hr>
            <p><strong>Nombre:      </strong><?php  echo $row['NOMBRE'] ?></p> 
            <p><strong>Apellido:    </strong><?php  echo $row['APELLIDOS'] ?></p> 
            <p><strong>Celular:     </strong><?php  echo $row['CELULAR'] ?></p> 
            <p><strong>Telefono:    </strong><?php  echo $row['TELEFONO'] ?></p> 
            <p><strong>sexo:        </strong><?php  echo $row['SEXO'] ?></p> 
            <p><strong>edad:        </strong><?php  echo $row['EDAD'] ?></p> 
            <p><strong>Municipio:   </strong><?php  echo $row['MUNICIPIO'] ?></p> 
        </div>
    </div>



    <div class="card mt-5 mb-5">
        <div class="card-body">
            <h3 class="card-title">Formulario de seguimiento</h3>
            <hr>

            <form method="POST"  enctype = "multipart/form-data" action="Actions/guardar-seguimiento.php?id=<?php echo $_GET['id'] ?>">

                <div class="form-group" >
                    <label for="fecha_seguimiento">Fecha de seguimiento</label> <br>
                    <input required  type="date" name="fecha_seguimiento" class="form-control col-md-12 " >
                </div>

                <div class="form-group" >
                    <label for="fiebre">Fiebre</label> <br>
                    <div class="container ml-2">
                    <input class="form-check-input" type = "radio" name = "fiebre" value = "Si">
                    <label  for="Si">Si</label>
                    <br>
                    <input class="form-check-input" type = "radio" name = "fiebre" value = "No">
                    <label for="No">No</label>
                    </div>
                </div>

                <div class="form-group" >
                    <label for="Tos">Tos</label> <br>
                    <div class="container ml-2">
                    <input class="form-check-input" type = "radio" name = "Tos" value = "Si">
                    <label  for="Si">Si</label>
                    <br>
                    <input class="form-check-input" type = "radio" name = "Tos" value = "No">
                    <label for="No">No</label>
                    </div>
                </div>

                <div class="form-group" >
                    <label for="perdida_sentidos">Perdida de los sentidos</label> <br>
                    <div class="container ml-2">
                    <input class="form-check-input" type = "radio" name = "perdida_sentidos" value = "Si">
                    <label  for="Si">Si</label>
                    <br>
                    <input class="form-check-input" type = "radio" name = "perdida_sentidos" value = "No">
                    <label for="No">No</label>
                    </div>
                </div>

                <div class="form-group" >
                    <label for="diarrea">Diarrea</label> <br>
                    <div class="container ml-2">
                    <input class="form-check-input" type = "radio" name = "diarrea" value = "Si">
                    <label  for="Si">Si</label>
                    <br>
                    <input class="form-check-input" type = "radio" name = "diarrea" value = "No">
                    <label for="No">No</label>
                    </div>
                </div>

                <div class="form-group" >
                    <label for="malestar_garganta">Malestar en la garganta</label> <br>
                    <div class="container ml-2">
                    <input class="form-check-input" type = "radio" name = "malestar_garganta" value = "Si">
                    <label  for="Si">Si</label>
                    <br>
                    <input class="form-check-input" type = "radio" name = "malestar_garganta" value = "No">
                    <label for="No">No</label>
                    </div>
                </div>

                <div class="form-group" >
                    <label for="debilidad_cansancio">Debilidad y cansancio</label> <br>
                    <div class="container ml-2">
                    <input class="form-check-input" type = "radio" name = "debilidad_cansancio" value = "Si">
                    <label  for="Si">Si</label>
                    <br>
                    <input class="form-check-input" type = "radio" name = "debilidad_cansancio" value = "No">
                    <label for="No">No</label>
                    </div>
                </div>

                <div class="form-group" >
                    <label for="temperatura">Temperatura</label> <br>
                    <input class="form-control col-md-12 " type="text" name="temperatura"  ?>
                </div>

                <div class="form-group" >
                    <label for="dificultad_respiratoria">dificultad_respiratoria</label> <br>
                    <div class="container ml-2">
                    <input class="form-check-input" type = "radio" name = "dificultad_respiratoria" value = "Si">
                    <label  for="Si">Si</label>
                    <br>
                    <input class="form-check-input" type = "radio" name = "dificultad_respiratoria" value = "No">
                    <label for="No">No</label>
                    <br>
                    <input class="form-check-input" type = "radio" name = "dificultad_respiratoria" value = "Sensacion_ahogo">
                    <label for="Sensacion_ahogo">Sensacion de ahogo</label>
                    </div>
                </div>

                <div class="form-group" >
                    <label for="SO2">SO2</label> <br>
                    <input required class="form-control col-md-12 " type="text" name="SO2"  ?> 
                </div>

                <div class="form-group" >
                    <label for="Observaciones">Observaciones</label> <br>
                    <input class="form-control col-md-12 " type="text" name="Observaciones"  ?> 
                </div>

                <div class="form-group" >
                    <label for="proxima_gestion">Proxima gestion</label> <br>
                    <input required type="date" name="proxima_gestion" class="form-control col-md-12 " >
                </div>

                <br>
                <input  class="btn btn-success mb-5" type="submit" value="Guardar seguimiento" name="btn-crear-paciente">

            </form>

        </div>
    </div>



</div>