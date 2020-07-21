<?php include('Actions/bd.php'); require_once('../Templates/header.php');   ?>

<div class = "container mt-3">

<?php if(isset($_SESSION['message'])) {?>
                    
    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>

<?php  $_SESSION['message'] = null ; $_SESSION['message_type'] = null ; } ?>


<a class='btn btn-outline-primary mt-5' href= "inicio.php">Volver atras</a>


<div class="col-sm-12 align-self-center text-center">
    <h1  >Crear Paciente</h1>
</div>
    <div class="col form-group mt-5 abs-center">
    

            <form  method="POST" class = " border p-3 form col-md-6" enctype = "multipart/form-data" action="Actions/crear-paciente-bd.php" >

                <div class="form-group">
                    <label  for="n_caso">Numero de caso *</label>
                    <input min=1 autocomplete="off" required class="form-control col-md-12 " type="number" name="n_caso">
                </div>

                <div class="form-group">
                    <label for="semaforo">Semaforo *</label>
                    <select required name="semaforo"class="form-control col-md-12 " >
                        <option value="amarillo">Amarillo</option>
                        <option value="rojo">Rojo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="estado_final">Estado final *</label>
                    <select required name="estado_final" class="form-control col-md-12 " >
                        <option value="fallecido">Fallecido</option>
                        <option value="recuperado">Recuperado</option>
                        <option value="sano">Sano</option>
                        <option value="no responde">No responde</option>
                        <option value="no aplica" selected >No Aplica</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="municipio">Municipio *</label>
                    <select required name="municipio" class="form-control col-md-12 " >
                        <option value="Barranquilla">Barranquilla</option>
                        <option value="baranoa">Baranoa</option>
                        <option value="Campo de la cruz">Campo de la Cruz</option>
                        <option value="Candelaria">Candelaria</option>
                        <option value="Galapa">Galapa</option>
                        <option value="Juan de acosta">Juan de Acosta</option>
                        <option value="Luruaco">Luruaco</option>
                        <option value="Malambo">Malambo</option>
                        <option value="Manatí">Manatí</option>
                        <option value="Palmar de Varela">Palmar de Varela</option>
                        <option value="Piojó">Piojó</option>
                        <option value="Polonuevo">Polonuevo</option>
                        <option value="Ponedera">Ponedera</option>
                        <option value="Puerto Colombia">Puerto Colombia</option>
                        <option value="Repelón">Repelón</option>
                        <option value="Sabanagrande">Sabanagrande</option>
                        <option value="Sabanalarga">Sabanalarga</option>
                        <option value="Santa Lucía">Santa Lucía</option>
                        <option value="Santo Tomás">Santo Tomás</option>
                        <option value="Soledad">Soledad</option>
                        <option value="Suan">Suan</option>
                        <option value="Tubará">Tubará</option>
                        <option value="Usiacurí">Usiacurí</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre *</label>
                    <input maxlength=150 autocomplete="off" required type="text" name="nombre" class="form-control col-md-12 " >
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido *</label>
                    <input maxlength=150 autocomplete="off" required type="text" name="apellido" class="form-control col-md-12 " >
                </div>

                <div class="form-group">
                    <label for="tipo_identificacion">Tipo de identificación *</label>
                    <select required name="tipo_identificacion" class="form-control col-md-12 " >
                        <option value="AS">AS - Adulto sin identidad.</option>
                        <option value="CC">CC - Cédula de ciudadanía</option>
                        <option value="CE">CE - Cédula de extranjería</option>
                        <option value="MS">MS - Menor sin identificación</option>
                        <option value="PA">PA - Pasaporte</option>
                        <option value="RC">RC - Registro Civil</option>
                        <option value="TI">TI - Tarjeta de identidad</option>
                        <option value="OT">OT - Otros</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="n_identificacion">Numero de identificación *</label>
                    <input maxlength=50 autocomplete="off" required type="text" name="n_identificacion" class="form-control col-md-12 " >
                </div>

                <div class="form-group">
                    <label for="edad">Edad *</label>
                    <input min=0 autocomplete="off" required type="number" name="edad" class="form-control col-md-12 " >
                </div>

                <div class="form-group">
                    <label for="unidad">Unidad de medida *</label>
                    <select required name="unidad" class="form-control col-md-12 " >
                        <option value="años" selected>Años</option>
                        <option value="meses">Meses</option>
                    </select>
                </div>

                <div class="form-group">
                <label required for="sexo">Sexo *</label>
                    <select name="sexo" class="form-control col-md-12 " >
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Otro">Otro</option>
                        <option value="Prefierte no decir">Prefiere no decir</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="direccion">Direccion *</label>
                    <input maxlength=150 autocomplete="off" required type="text" name="direccion" class="form-control col-md-12 " >
                </div>

                <div class="form-group">
                    <label for="barrio">Barrio *</label>
                    <input maxlength=150 autocomplete="off" required type="text" name="barrio" class="form-control col-md-12 " >
                </div>

                <div class="form-group">
                    <label for="eps">EPS *</label>
                    <input maxlength=100 autocomplete="off" required type="text" name="eps" class="form-control col-md-12 " >
                </div>

                <div class="form-group">
                    <label for="antecedentes_patologicos">Antecedentes Patologicos</label> <br> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Artrosis" > <label for="Artrosis">Artrosis</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Asma" > <label for="Asma">Asma</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Diabetis" > <label for="Diabetis">Diabetis</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "EPOC" > <label for="EPOC">EPOC</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Parkinson" > <label for="Parkinson">Parkinson</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Afeccion cardiaca"  > <label for="Afeccion cardiaca">Afeccion cardiaca</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Rinitis" > <label for="Rinitis">Rinitis</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Obesidad" > <label for="Obesidad">Obesidad</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Anemia" > <label for="Anemia">Anemia</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Enfermedad renal" > <label for="Enfermedad renal">Enfermedad renal</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Cáncer" > <label for="Cáncer">Cáncer</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Tiroides" > <label for="Tiroides">Tiroides</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Alergia" > <label for="Alergia">Alergia</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Epilepsia" > <label for="Epilepsia">Epilepsia</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Tubercolosis" > <label for="Tubercolosis">Tubercolosis</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Neumonia" > <label for="Neumonia">Neumonia</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Bronquitis" > <label for="Bronquitis">Bronquitis</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Lupus" > <label for="Lupus">Lupus</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "VIH" > <label for="VIH">VIH</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "HTA" > <label for="HTA">HTA - Hipertension arterial</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Niguno" > <label for="Niguno">Niguno</label> <br>
                    <input type="checkbox" name="antecedentes_patologicos[]" value = "Otro" > <label for="Otro">Otro (Especificar)</label> <br>
                </div>

                <div class="form-group">
                    <label for="otros_antecedentes">Otros antecedentes</label>
                    <input maxlength=250 autocomplete="off" type="text" name="otros_antecedentes" class="form-control col-md-12 " >
                </div>

                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input maxlength=30 autocomplete="off" type="text" name="telefono" class="form-control col-md-12 " >
                </div>

                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input maxlength=30 autocomplete="off" type="text" name="celular" class="form-control col-md-12 " >
                </div>

                <div class="form-group">
                    <label for="toma_muestra">Toma de la muestra *</label>
                    <select required name="toma_muestra" class="form-control col-md-12 " >
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="numero_prueba">Numero de la prueba</label>
                    <input min=1 autocomplete="off" type="number" name="numero_prueba" class="form-control col-md-12 " >
                </div>

                <div class="form-group">
                    <label for="resultado">Resultado *</label>
                    <select required name="resultado" class="form-control col-md-12 " >
                        <option value="positivo">Positivo</option>
                        <option value="negativo">Negativo</option>
                        <option value="pendiente">Pendiente</option>
                        <option value="na">No aplica</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fecha_resultado">Fecha de resultado</label> <br>
                    <input autocomplete="off"  type="date" name="fecha_resultado" class="form-control col-md-12 " >
                </div>

                <div class="form-group">
                    <label for="angenda_visita">Agendado para visita *</label>
                    <select required name="angenda_visita" class="form-control col-md-12 " >
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="hospitalizacion">Hospitalizacion *</label>
                    <select required name="hospitalizacion" class="form-control col-md-12 " >
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="proxima_gestion">Proxima gestión *</label> <br>
                    <input autocomplete="off" required type="date" name="proxima_gestion" class="form-control col-md-12 " >
                </div>

                <input  class="btn btn-success mb-5" type="submit" value="Crear paciente" name="btn-crear-paciente">
               <!-- <button class="btn btn-success" name="crear_seguimiento">Crear paciente y hacer seguimiento</button> -->
            </form>
        </div>
</div>

<?php // require_once('../Templates/footer.php'); ?>