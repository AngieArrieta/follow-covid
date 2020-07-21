<?php 

require('bd.php');

    $numero_caso = $_POST['n_caso'];
    $semaforo = $_POST['semaforo'];
    $estado_final = $_POST['estado_final'];
    $municipio = $_POST['municipio'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tipo_identificacion = $_POST['tipo_identificacion'];
    $n_identificacion = $_POST['n_identificacion'];
    $edad = $_POST['edad'];
    $unidad = $_POST['unidad'];
    $sexo = $_POST['sexo'];
    $direccion = $_POST['direccion'];
    $barrio = $_POST['barrio'];
    $eps = $_POST['eps'];
    $antecedentes_patologicos = '' ;
    $otros_antecedentes = $_POST['otros_antecedentes'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $toma_muestra = $_POST['toma_muestra'];
    $numero_prueba = (int) $_POST['numero_prueba'];
    $resultado = $_POST['resultado'];
    $fecha_resultado = $_POST['fecha_resultado'];
    $angenda_visita = $_POST['angenda_visita'];
    $hospitalizacion = $_POST['hospitalizacion'];
    $proxima_gestion = $_POST['proxima_gestion'];



    if(isset($_POST['btn-crear-paciente'])){
        if(!empty($_POST['antecedentes_patologicos'])) {
            $checked_contador = sizeof($_POST['antecedentes_patologicos']);
            foreach($_POST['antecedentes_patologicos'] as $seleccion) {
            $antecedentes_patologicos = $antecedentes_patologicos.','.$seleccion;
            }
        }
    }
    
    $antecedentes_patologicos = substr($antecedentes_patologicos,1);

    //echo $numero_caso .",'". $semaforo."','".$estado_final."','". $municipio."','". $nombre ."','". $apellido."','". $tipo_identificacion."','". $n_identificacion."',". $edad.",'". $unidad."','". $sexo."','". $direccion."','". $barrio."','". $eps."','". $antecedentes_patologicos."','". $otros_antecedentes."','". $telefono."','". $celular."','". $toma_muestra."',". $numero_prueba.",'". $resultado."','". $fecha_resultado."','".$angenda_visita."','".$hospitalizacion;
    
    $query = "insert into Pacientes_php (NUMERO_CASO,SEMAFORO,ESTADO_FINAL ,MUNICIPIO ,NOMBRE, APELLIDOS,TIPO_DE_IDENTIFICACION ,NUMERO_IDENTIFICACION,EDAD ,UNIDAD_DE_MEDIDA ,SEXO,DIRECCION,BARRIO,EPS,ANTECEDENTES_PATOLOGICOS ,OTROS_ANTECEDENTES,TELEFONO ,CELULAR ,TOMA_DE_MUESTRA ,NUMERO_PRUEBA ,RESULTADO ,FECHA_RESULTADO ,AGENDA_VISITA,HOSPITALIZACION, PROXIMA_GESTION) values (". $numero_caso .",'". $semaforo."','".$estado_final."','". $municipio."','". $nombre ."','". $apellido."','". $tipo_identificacion."','". $n_identificacion."',". $edad.",'". $unidad."','". $sexo."','". $direccion."','". $barrio."','". $eps."','". $antecedentes_patologicos."','". $otros_antecedentes."','". $telefono."','". $celular."','". $toma_muestra."',". $numero_prueba.",'". $resultado."','". $fecha_resultado."','".$angenda_visita."','".$hospitalizacion."','".$proxima_gestion."');";

    $res = $conn->query($query);


    $_SESSION['message'] = 'Paciente guardado exitosamente!';
    $_SESSION['message_type'] = 'success';

    header("Location: ../crear-paciente.php");
    


?>