<?php 

require('bd.php');

    $id_paciente = $_GET['id'];
    $fecha_seguimiento = $_POST['fecha_seguimiento'];
    $fiebre = $_POST['fiebre'];
    $Tos = $_POST['Tos'];
    $perdida_sentidos = $_POST['perdida_sentidos'];
    $diarrea = $_POST['diarrea'];
    $malestar_garganta = $_POST['malestar_garganta'];
    $debilidad_cansancio = $_POST['debilidad_cansancio'];
    $dificultad_respiratoria = $_POST['dificultad_respiratoria'];
    $SO2 = $_POST['SO2'];
    $Observaciones = $_POST['Observaciones'];
    $proxima_gestion = $_POST['proxima_gestion'];



    // echo $numero_caso .",'". $semaforo."','".$estado_final."','". $municipio."','". $nombre ."','". $apellido."','". $tipo_identificacion."','". $n_identificacion."',". $edad.",'". $unidad."','". $sexo."','". $direccion."','". $barrio."','". $eps."','". $antecedentes_patologicos."','". $otros_antecedentes."','". $telefono."','". $celular."','". $toma_muestra."',". $numero_prueba.",'". $resultado."','". $fecha_resultado."','".$angenda_visita."','".$hospitalizacion;
    
    $query = "insert into Seguimientos_pacientes_php (ID_PACIENTES,FECHA,FIEBRE ,TOS ,PERDIDA_SENTIDOS, MALESTAR_GARGANTA,DEBILIDAD_CANSANCIO ,TEMPERATURA,DIFICULTAD_RESPIRATORIA ,SO2 ,OBSERVACIONES) 
    values (". $id_paciente .",'". $fecha_seguimiento."','".$fiebre."','". $Tos."','". $perdida_sentidos ."','". $diarrea."','". $malestar_garganta."','". $debilidad_cansancio."','". $dificultad_respiratoria."','". $SO2."','". $Observaciones."');";

    $res = $conn->query($query);


    $query = "update Pacientes_php SET PROXIMA_GESTION = '".$proxima_gestion."' WHERE ID =".$id_paciente.";";

    $res = $conn->query($query);

    $_SESSION['message'] = 'Seguimiento registrado exitosamente!';
    $_SESSION['message_type'] = 'success';

    header("Location: ../seguimientos.php");




?>