<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/formulario.css">
</head>
<body>
    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress"><br><br><br>
                <h2>Contrato de Personal</h2><br>
                    <ul class="progress-steps">
                        <li class="step active">
                            <span class="num"></span>
                            <p>Empresa <br><span>25 secs to complete</span></p>
                        </li>
                        <li class="step">
                            <span></span>
                            <p>Representante <br><span>25 secs to complete</span></p>
                        </li>
                        <li class="step">
                            <span></span>
                            <p>Contratado<br><span>60 secs to complete</span></p>
                        </li>
                    </ul>
                </div>
                <div>
                <form action="./php/acta_constitutiva.php" method="POST">
                    <div class="one form-step active">
                        <div class="bg-svg"></div>
                        <h2>Información de la Empresa</h2>
                        <p>Ingresa correctamente los datos</p>
                        <div>
                            <label>Nombre de la Empresa</label>
                            <input id="nom_em" name="nom_emp" type="text">  
                        </div>
                        <div>
                            <label>Ubicación</label>
                            <input id="ubi"  type="text" name="ubi" placeholder="Estado Táchira, San Cristóbal, Sector Barrio Obrero, calle 12 entre carreras 13 y 14" >  
                        </div>
                        <div>
                            <label>Cargo Ofertado</label>
                            <input  id="cargo" type="text" name="cargo" placeholder="Acesor de Ventas">  
                        </div>
                        <div>
                            <label>Área a trabajar</label>
                            <input  id="cargo" type="text" name="area" placeholder="Acesor de Ventas">  
                        </div>
                        <div>
                            <label>Funciones a desempeñar</label>
                            <input  id="cargo" type="text" name="funcion" placeholder="Acesor de Ventas">  
                        </div>
                        <div>
                            <label>Salario Ofertado</label>
                            <input  id="salario" type="text" name="salario" placeholder="Acesor de Ventas">  
                        </div>
                        <div class="birth">
                            <label>Fecha de inicio del contrato</label>
                            <div class="grouping">
                                <input type="text" patter="[0.9]*" name="day_inicio" velue="" min="1" max="31" placeholder="DD" >
                                <input type="text" patter="[0.9]*" name="month_inicio" velue="" min="1" max="12" placeholder="MM">
                                <input type="text" patter="[0.9]*" name="year_inicio" velue="" min="1970" max="2006" placeholder="YYYY">
                            </div>
                        </div>
                        <div class="birth">
                            <label>Fecha de culminación del contratoo</label>
                            <div class="grouping">
                                <input type="text" patter="[0.9]*" name="day_fin" velue="" min="1" max="31" placeholder="DD" >
                                <input type="text" patter="[0.9]*" name="month_fin" velue="" min="1" max="12" placeholder="MM">
                                <input type="text" patter="[0.9]*" name="year_fin" velue="" min="1970" max="2006" placeholder="YYYY">
                            </div>
                        </div>
                        
                    </div>
                    <div class="two form-step">
                        <div class="bg-svg"></div>
                        <h2>Representante</h2>
                        <div>
                            <label>Nombres y Apellidos </label>
                            <input id="R_nom" type="text" name="R_nom" placeholder="Jesús Manuel Rivas Rivas">
                        </div>
                        <div>
                            <label>Cédula de Identidad</label>
                            <input id="R_ced"  type="text" name="R_ced" placeholder="00.000.000">
                        </div>
                        <div>
                            <label>Estado Civil</label>
                            <select  id="R_Estado-Civil" name="R_estado_civil" name="Estado-Civil" required>
                            <option value="soltero">Soltero</option>
                            <option value="casado">Casado</option>
                            <option value="viudo">Viudo</option>
                            </select>
                        </div>
                        <div>
                        <label>Nacionalidad</label>
                            <select  id="R_nacion" name="nacion_repre" required>
                            <option value="Venezolano">Venezolano</option>
                            <option value="Extranjero">Extranjero</option>
                            </select>
                        </div>
                        <div>
                            <label>Domicilio</label>
                            <input id="R_Dom"  name="R_Dom" type="text" placeholder="Municipio">
                        </div>
                    </div>
                    <div class="three form-step">
                            <div class="bg-svf"></div>
                            <h2>Información del Contratado</h2>
                        <p>Ingresa correctamente los datos</p>
                        
                        <div>
                            <label>Nombres y Apellidos </label>
                            <input id="C_nom" type="text" name="C_nom" placeholder="Jesús Manuel Rivas Rivas">
                        </div>
                        <div>
                            <label>Cédula de Identidad</label>
                            <input id="c_ced"  type="text" name="c_ced" placeholder="00.000.000">
                        </div>
                        <div>
                            <label>Estado Civil</label>
                            <select  id="C_Estado-Civil" name="c_estado_civil" required>
                            <option value="soltero">Soltero</option>
                            <option value="casado">Casado</option>
                            <option value="viudo">Viudo</option>
                            </select>
                        </div>
                        <div>
                        <label>Nacionalidad</label>
                            <select  id="C_nacion" name="c_nacion" required>
                            <option value="venezolano">Venezolano</option>
                            <option value="extranjero">Extranjero</option>
                            </select>
                        </div>
                        <div>
                            <label>Domicilio</label>
                            <input id="C_Dom" name="c_domicilio" type="text" placeholder="Municipio">
                        </div>
                        <div class="birth">
                            <label>Fecha de nacimiento</label>
                            <div class="grouping">
                                <input type="text" patter="[0.9]*" name="day" velue="" min="1" max="31" placeholder="DD" >
                                <input type="text" patter="[0.9]*" name="month" velue="" min="1" max="12" placeholder="MM">
                                <input type="text" patter="[0.9]*" name="year" velue="" min="1970" max="2006" placeholder="YYYY">
                            </div>
                        </div>
                    </div>
                    <div class="btn">
                        <button type="button" class="btn back" id="muestra" disabled>Anterior</button>
                        <button type="button" class="btn siguiente" id="muestra">Siguiente</button>
                        <button type="submit" class="btn sub" id="muestra">Enviar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/form.js"></script>
</body>
</html>