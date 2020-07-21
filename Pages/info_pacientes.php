<?php include('Actions/bd.php');  require_once('../Templates/header.php'); ?>

<div class = "container">

    <?php

    if(isset($_GET['id'])){
        $query = "select * from Pacientes_php where id=".$_GET['id'].";";
        $res = $conn->query($query);
    }

    $row = mysqli_fetch_array($res);

    ?>

<a class='btn btn-outline-primary mt-5' href= "pacientes.php">Volver atras</a>

    <div class="card mt-5">
        <div class="card-body" style = "background-color:#C3EEEE">
            <h3 class="card-title">Informacion del paciente</h3>
            <hr>
            <p><strong>Numero de caso:              </strong><?php  echo $row['NUMERO_CASO'] ?></p> 
            <p><strong>Nombre:                      </strong><?php  echo $row['NOMBRE'] ?></p> 
            <p><strong>Apellidos:                   </strong><?php  echo $row['APELLIDOS'] ?></p>
            <p><strong>Tipo de identificacion:      </strong><?php  echo $row['TIPO_DE_IDENTIFICACION'] ?></p>
            <p><strong>Numero de identificacion:    </strong><?php  echo $row['NUMERO_IDENTIFICACION'] ?></p>
            <p><strong>Municipio:                   </strong><?php  echo $row['MUNICIPIO'] ?></p>  
            <p><strong>Semaforo:                    </strong><?php  echo $row['SEMAFORO'] ?></p> 
            <p><strong>Estado final:                </strong><?php  echo $row['ESTADO_FINAL'] ?></p> 
            <p><strong>Edad:                        </strong><?php  echo $row['EDAD'] ?></p> 
            <p><strong>Unidad de medida:            </strong><?php  echo $row['UNIDAD_DE_MEDIDA'] ?></p> 
            <p><strong>Sexo:                        </strong><?php  echo $row['SEXO'] ?></p> 
            <p><strong>Direccion:                   </strong><?php  echo $row['DIRECCION'] ?></p> 
            <p><strong>Barrio:                      </strong><?php  echo $row['BARRIO'] ?></p> 
            <p><strong>Eps:                         </strong><?php  echo $row['EPS'] ?></p> 
            <p><strong>Antecedentes Patologicos:    </strong><?php  echo $row['ANTECEDENTES_PATOLOGICOS'] ?></p> 
            <p><strong>Otros Antecedentes:          </strong><?php  echo $row['OTROS_ANTECEDENTES'] ?></p> 
            <p><strong>Telefono:                    </strong><?php  echo $row['TELEFONO'] ?></p> 
            <p><strong>Celular:                     </strong><?php  echo $row['CELULAR'] ?></p> 
            <p><strong>Toma de muestra:             </strong><?php  echo $row['TOMA_DE_MUESTRA'] ?></p> 
            <p><strong>Numero de prueba:            </strong><?php  echo $row['NUMERO_PRUEBA'] ?></p> 
            <p><strong>Resultado:                   </strong><?php  echo $row['RESULTADO'] ?></p>  
            <p><strong>Fecha de resultado:          </strong><?php  echo $row['FECHA_RESULTADO'] ?></p> 
            <p><strong>Agendado para visita:        </strong><?php  echo $row['AGENDA_VISITA'] ?></p>
            <p><strong>Hospitalizacion:             </strong><?php  echo $row['HOSPITALIZACION'] ?></p>
        </div>
    </div>


    <?php 

        $query = "select * from Seguimientos_pacientes_php where ID_PACIENTES =".$_GET['id'].";";

        $res = $conn->query($query);
    


    while($row = mysqli_fetch_array($res)){ ?>

    <div class="card mt-5">
        <div class="card-body">
            <h3 class="card-title">Seguimiento # <?php echo $row['NUMERO_DIA_SEGUIMIENTO'] ?></h3>
            <hr>
            <p><strong>Fecha:                   </strong><?php  echo $row['FECHA'] ?></p> 
            <p><strong>Fiebre                   </strong><?php  echo $row['FIEBRE'] ?></p> 
            <p><strong>Tos:                     </strong><?php  echo $row['TOS'] ?></p> 
            <p><strong>Perdida de los sentidos: </strong><?php  echo $row['PERDIDA_SENTIDOS'] ?></p> 
            <p><strong>Diarrea:                 </strong><?php  echo $row['DIARREA'] ?></p> 
            <p><strong>Malestar en la garganta: </strong><?php  echo $row['MALESTAR_GARGANTA'] ?></p> 
            <p><strong>debilidad y cansancio:   </strong><?php  echo $row['DEBILIDAD_CANSANCIO'] ?></p>  
            <p><strong>Temperatura:             </strong><?php  echo $row['TEMPERATURA'] ?></p>
            <p><strong>Dificultad respiratoria: </strong><?php  echo $row['DIFICULTAD_RESPIRATORIA'] ?></p> 
            <p><strong>SO2:                     </strong><?php  echo $row['SO2'] ?></p> 
            <p><strong>Observaciones:           </strong><?php  echo $row['OBSERVACIONES'] ?></p> 
            
        </div>
    </div>

    <?php } ?>


 

</div>