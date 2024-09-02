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
                <form action="">
                    <div class="one form-step active">
                        <div class="bg-svg"></div>
                        <h2>Información de la Empresa</h2>
                        <p>Ingresa correctamente los datos</p>
                        <div>
                            <label>Nombre de la Empresa</label>
                            <input id="nom_em" type="text">  
                        </div>
                        <div>
                            <label>Ubicación</label>
                            <input id="ubi"  type="text" placeholder="Estado Táchira, San Cristóbal, Sector Barrio Obrero, calle 12 entre carreras 13 y 14">  
                        </div>
                        <div>
                            <label>Cargo Ofertado</label>
                            <input  id="cargo" type="text" placeholder="Acesor de Ventas">  
                        </div>
                        <div>
                            <label>Salario Ofertado</label>
                            <input  id="salario" type="text" placeholder="Acesor de Ventas">  
                        </div>
                    </div>
                    <div class="two form-step">
                        <div class="bg-svg"></div>
                        <h2>Representante</h2>
                        <div>
                            <label>Nombres y Apellidos </label>
                            <input id="R_nom" type="text" placeholder="Jesús Manuel Rivas Rivas">
                        </div>
                        <div>
                            <label>Cédula de Identidad</label>
                            <input id="R_ced"  type="text" placeholder="00.000.000">
                        </div>
                        <div>
                            <label>Estado Civil</label>
                            <select  id="R_Estado-Civil" name="Estado-Civil" required>
                            <option value="soltero">Soltero</option>
                            <option value="casado">Casado</option>
                            <option value="viudo">Viudo</option>
                            </select>
                        </div>
                        <div>
                        <label>Nacionalidad</label>
                            <select  id="R_nacion" name="nacion" required>
                            <option value="ven">Venezolano</option>
                            <option value="ext">Extranjero</option>
                            </select>
                        </div>
                        <div>
                            <label>Domicilio</label>
                            <input id="R_Dom"  type="text" placeholder="Municipio">
                        </div>
                    </div>
                    <div class="three form-step">
                            <div class="bg-svf"></div>
                            <h2>Información del Contratado</h2>
                        <p>Ingresa correctamente los datos</p>
                        
                        <div>
                            <label>Nombres y Apellidos </label>
                            <input id="C_nom" type="text" placeholder="Jesús Manuel Rivas Rivas">
                        </div>
                        <div>
                            <label>Cédula de Identidad</label>
                            <input id="c_ced"  type="text" placeholder="00.000.000">
                        </div>
                        <div>
                            <label>Estado Civil</label>
                            <select  id="C_Estado-Civil" name="Estado-Civil" required>
                            <option value="soltero">Soltero</option>
                            <option value="casado">Casado</option>
                            <option value="viudo">Viudo</option>
                            </select>
                        </div>
                        <div>
                        <label>Nacionalidad</label>
                            <select  id="C_nacion" name="nacion" required>
                            <option value="ven">Venezolano</option>
                            <option value="ext">Extranjero</option>
                            </select>
                        </div>
                        <div>
                            <label>Domicilio</label>
                            <input id="C_Dom"  type="text" placeholder="Municipio">
                        </div>
                        <div class="birth">
                            <label>Date of Birth</label>
                            <div class="grouping">
                                <input type="text" patter="[0.9]*" name="day" velue="" min="1" max="31" placeholder="DD">
                                <input type="text" patter="[0.9]*" name="month" velue="" min="1" max="12" placeholder="MM">
                                <input type="text" patter="[0.9]*" name="year" velue="" min="1970" max="2006" placeholder="YYYY">
                            </div>
                        </div>
                    </div>
                    <div class="btn">
                        <button type="button" class="btn back" id="muestra" disabled>Anterior</button>
                        <button type="button" class="btn siguiente" id="muestra">Siguiente</button>
                        <button type="button" class="btn sub" id="muestra">Enviar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/form.js"></script>
</body>
</html>