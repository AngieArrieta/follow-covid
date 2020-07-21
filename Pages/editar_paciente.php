<?php include('Actions/bd.php'); require_once('../Templates/header.php');   



if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from Pacientes_php where ID = $id";
    $res = $conn->query($query);

    if(mysqli_num_rows($res) == 1){
        $row = mysqli_fetch_array($res);


        $numero_caso = $row['NUMERO_CASO'];
        $semaforo = $row['SEMAFORO'];
        $estado_final = $row['ESTADO_FINAL'];
        $municipio = $row['MUNICIPIO'];
        $nombre = $row['NOMBRE'];
        $apellido = $row['APELLIDOS'];
        $tipo_identificacion = $row['TIPO_DE_IDENTIFICACION'];
        $n_identificacion = $row['NUMERO_IDENTIFICACION'];
        $edad = $row['EDAD'];
        $unidad = $row['UNIDAD_DE_MEDIDA'];
        $sexo = $row['SEXO'];
        $direccion = $row['DIRECCION'];
        $barrio = $row['BARRIO'];
        $eps = $row['EPS'];
        $antecedentes_patologicos = $row['ANTECEDENTES_PATOLOGICOS'] ;
        $otros_antecedentes = $row['OTROS_ANTECEDENTES'];
        $telefono = $row['TELEFONO'];
        $celular = $row['CELULAR'];
        $toma_muestra = $row['TOMA_DE_MUESTRA'];
        $numero_prueba = (int) $row['NUMERO_PRUEBA'];
        $resultado = $row['RESULTADO'];
        $fecha_resultado = $row['FECHA_RESULTADO'];
        $angenda_visita = $row['AGENDA_VISITA'];
        $hospitalizacion = $row['HOSPITALIZACION'];
        $proxima_gestion = $row['PROXIMA_GESTION'];
    }
}

if (isset($_POST['editar'])){

    $id = $_GET['id'];

        $semaforo = $_POST['semaforo'];
        $estado_final = $_POST['estado_final'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $barrio = $_POST['barrio'];
        $eps = $_POST['eps'];
        $telefono = $_POST['telefono'];
        $celular = $_POST['celular'];
        $toma_muestra = $_POST['toma_muestra'];
        $numero_prueba = (int) $_POST['numero_prueba'];
        $resultado = $_POST['resultado'];
        $fecha_resultado = $_POST['fecha_resultado'];
        $angenda_visita = $_POST['angenda_visita'];
        $hospitalizacion = $_POST['hospitalizacion'];
        $proxima_gestion = $_POST['proxima_gestion'];

   $query = "UPDATE Pacientes_php SET SEMAFORO = '$semaforo' , ESTADO_FINAL = '$estado_final', EDAD = $edad, DIRECCION = '$direccion', BARRIO = '$barrio', EPS = '$eps', TELEFONO = '$telefono', CELULAR = '$celular', TOMA_DE_MUESTRA = '$toma_muestra', NUMERO_PRUEBA = $numero_prueba, RESULTADO = '$resultado', FECHA_RESULTADO = '$fecha_resultado', AGENDA_VISITA = '$angenda_visita', HOSPITALIZACION = '$hospitalizacion' , PROXIMA_GESTION = '$proxima_gestion'  WHERE ID = $id;";

    $conn->query($query);

    header('Location: pacientes.php');
}

?>




<div class="container">

    <a class='btn btn-outline-primary mt-5' href= "pacientes.php">Volver atras</a>


    <div class="col-sm-12 align-self-center text-center">
        <h1  >Editar Paciente</h1> <br>
    </div>

    <div class="row">

        <div class="col-md-8 mx-auto">
        
            <div class="card card-body">
      
                <form action="editar_paciente.php?id=<?php echo $id ?>" method = "POST">

                <div class="form-group">
                    <label  for="n_caso">Numero de caso</label>
                    <input disabled class="form-control col-md-12 " type="text" name="n_caso" value="<?php echo $numero_caso ?>">
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input disabled type="text" name="nombre" class="form-control col-md-12 " value="<?php echo $nombre ?>">
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input disabled type="text" name="apellido" class="form-control col-md-12 " value="<?php echo $apellido ?>">
                </div>


                <div class="form-group">
                    <label for="n_identificacion">Numero de identificación</label>
                    <input disabled type="text" name="n_identificacion" class="form-control col-md-12 " value="<?php echo $n_identificacion ?>">
                </div>

                <hr>

                <div class="form-group">
                    <label for="semaforo">Semaforo *</label>
                    <select required name="semaforo"class="form-control col-md-12 ">
                        <option <?php if($semaforo=="amarillo") echo "selected" ?> value="amarillo">Amarillo</option>
                        <option <?php if($semaforo=="rojo") echo "selected" ?> value="rojo">Rojo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="estado_final">Estado final *</label>
                    <select required name="estado_final" class="form-control col-md-12 " >
                        <option <?php if($estado_final=="fallecido") echo "selected" ?>  value="fallecido">Fallecido</option>
                        <option <?php if($estado_final=="recuperado") echo "selected" ?> value="recuperado">Recuperado</option>
                        <option <?php if($estado_final=="sano") echo "selected" ?> value="sano">Sano</option>
                        <option <?php if($estado_final=="no responde") echo "selected" ?> value="no responde">No responde</option>
                        <option <?php if($estado_final=="no aplica") echo "selected" ?> value="no aplica">No Aplica</option>
                    </select>
                </div>

                

                <div class="form-group">
                    <label for="edad">Edad *</label>
                    <input autocomplete="off" required min=0 type="text" name="edad" class="form-control col-md-12 " value="<?php echo $edad ?>" >
                    <label class="ml-2"> <i>  <?php echo $unidad ?>  </i> </label>
                </div>

                <div class="form-group">
                    <label for="direccion">Direccion *</label>
                    <input autocomplete="off" maxlength=150 type="text" name="direccion" class="form-control col-md-12 " value="<?php echo $direccion ?>" >
                </div>

                <div class="form-group">
                    <label for="barrio">Barrio *</label>
                    <input autocomplete="off" required maxlength=150 type="text" name="barrio" class="form-control col-md-12 " value="<?php echo $barrio ?>">
                </div>

                <div class="form-group">
                    <label for="eps">EPS*</label>
                    <input autocomplete="off" required maxlength=100 type="text" name="eps" class="form-control col-md-12 " value="<?php echo $eps ?>" > 
                </div>


                <div class="form-group">
                    <label for="telefono">Telefono *</label>
                    <input autocomplete="off" required maxlength=30 type="text" name="telefono" class="form-control col-md-12 " value="<?php echo $telefono ?>">
                </div>

                <div class="form-group">
                    <label for="celular">Celular *</label>
                    <input autocomplete="off" required maxlength=30 type="text" name="celular" class="form-control col-md-12 " value="<?php echo $celular ?>">
                </div>

                <div class="form-group">
                    <label for="toma_muestra">Toma de la muestra</label>
                    <select required name="toma_muestra" class="form-control col-md-12 " >
                        <option <?php if($toma_muestra=="si") echo "selected" ?> value="si">Si</option>
                        <option <?php if($toma_muestra=="no") echo "selected" ?> value="no">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="numero_prueba">Numero de la prueba</label>
                    <input autocomplete="off" min=0 type="text" name="numero_prueba" class="form-control col-md-12 " value="<?php echo $numero_prueba ?>" >
                </div>

                <div class="form-group">
                    <label for="resultado">Resultado *</label>
                    <select required name="resultado" class="form-control col-md-12 " >
                        <option <?php if($resultado=="positivo") echo "selected" ?> value="positivo">Positivo</option>
                        <option <?php if($resultado=="negativo") echo "selected" ?> value="negativo">Negativo</option>
                        <option <?php if($resultado=="pendiente") echo "selected" ?>value="pendiente">Pendiente</option>
                        <option <?php if($resultado=="na") echo "selected" ?>value="na">No aplica</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fecha_resultado">Fecha de resultado</label> <br>
                    <input type="date" name="fecha_resultado" class="form-control col-md-12 " value="<?php echo $fecha_resultado ?>">
                </div>

                <div class="form-group">
                    <label for="angenda_visita">Agendado para visita *</label>
                    <select required name="angenda_visita" class="form-control col-md-12 " >
                        <option <?php if($angenda_visita=="si") echo "selected" ?> value="si">Si</option>
                        <option <?php if($angenda_visita=="no") echo "selected" ?>  value="no">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="hospitalizacion">Hospitalizacion *</label>
                    <select required name="hospitalizacion" class="form-control col-md-12 " >
                        <option <?php if($hospitalizacion=="si") echo "selected" ?> value="si">Si</option>
                        <option <?php if($hospitalizacion=="no") echo "selected" ?> value="no">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="proxima_gestion">Proxima gestion *</label> <br>
                    <input required type="date" name="proxima_gestion" class="form-control col-md-12 " value="<?php echo $proxima_gestion ?>" >
                </div>

                <button class="btn btn-success" name="editar">Editar</button>
               
                
            </form>
                
               

            </div>

        </div>
    
    </div>

</div>








<?php // require_once('../Templates/footer.php'); ?>