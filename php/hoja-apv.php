<?php include('./header.php'); ?>


<div class="container">
  <div class="mx-auto">
    <nav id="navbar-example3" class="navbar bg-body-tertiary px-2">
      <nav class="nav">
        <a class="nav-link active" aria-current="page"
          href="http://localhost/nissan-clientes/login/index-apv.php">Inicio</a>
        <a class="nav-link" href="http://localhost/nissan-clientes/php/solicitud-cliente.php">Solicitudes del
          Cliente</a>
        <a class="nav-link" href="http://localhost/nissan-clientes/php/hoja-apv.php">Generar Hoja de Prospecto APV</a>
        <a class="nav-link" href="http://localhost/nissan-clientes/php/tabla-apv.php">Ver Tabla</a>
      </nav>
    </nav>


    <div class="container">

      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
      </head>

      <body onload="OcultarDiv();">
        <div class="container col-8">
          <h1 class="text-center">Hoja de Prospecto - APV</h1><br>

          <!-- Inicio de Formulario APV -->
          <form id="formulario" method="POST" action="database-form-apv.php">
            <!-- <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" style="color: black;">Id Vendedor: </label>
              <input type="number" name="idvendedor" id="idvendedor" aria-describedby="nameHelp" placeholder="Id Vendedor" required />
            </div> -->

            <!-- <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" style="color: black;">Orden con Numero de Folio:
              </label>
              <input type="number" name="numerofolio" id="numerofolio" aria-describedby="nameHelp" placeholder="Folio"/>
            </div> -->

            <div class="form-group mb-3">
              <label for="fecha" class="form-label">Fecha y Hora: </label>
              <input type="datetime-local" name="fecha" id="fecha" required>
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" style="color: black;">Nombre del Vendedor: </label>
              <input type="text" name="nombre_vendedor" id="nombre_vendedor" aria-describedby="nameHelp"
                placeholder="Vendedor" required />
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" style="color: black;">Sucursal: </label>
              <input type="text" name="sucursal" id="sucursal" aria-describedby="nameHelp" placeholder="Sucursal"
                required />
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">¿Desea manejar el Auto?</label><br>
              <input type="radio" class="btn-check" name="ManejarAuto" id="ManejarSi" value="Si">
              <label class="btn btn-outline-primary" for="ManejarSi">Si</label>

              <input type="radio" class="btn-check" name="ManejarAuto" id="ManejarNo" value="No">
              <label class="btn btn-outline-primary" for="ManejarNo">No</label>
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" style="color: black;">¿Que auto tiene actualmente?
              </label>
              <input type="text" name="AutoTiene" id="AutoTiene" aria-describedby="nameHelp" placeholder="Auto"
                required />
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Auto de Interes</label>
              <input type="text" name="Auto_Interes" class="form-control" id="Auto_Interes" aria-describedby="nameHelp"
                placeholder="Auto" required /><br>

              <div>
                <label for="exampleInputEmail1" class="form-label">Versión: </label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="version" id="version1" value="Version_Basica">
                  <label class="form-check-label" for="version1">Básica</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="version" id="version2" value="Version_Intermedia">
                  <label class="form-check-label" for="version2">Intermedia</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="version" id="version3" value="Version_Equipada">
                  <label class="form-check-label" for="version3">Equipada</label>
                </div>
              </div><br><br>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">¿Le interesa dejarlo a cuenta?</label><br>
                <input type="radio" class="btn-check" name="Dejarlo_Cuenta" id="Cuenta1" value="Si">
                <label class="btn btn-outline-primary" for="Cuenta1">Si</label>

                <input type="radio" class="btn-check" name="Dejarlo_Cuenta" id="Cuenta2" value="No">
                <label class="btn btn-outline-primary" for="Cuenta2">No</label>
              </div>

              <div>
                <label for="exampleInputEmail1" class="form-label" name="FechaAprox">¿Cual es su fecha aproximada de
                  compra?</label><br>
                <select class="nieve" onchange="OcultarDiv();" id="fecha_aprox_compra" name="fechaAprox">
                  <option value="seleccioneUno" selected="selected">Seleccione Uno …</option>
                  <option value="Mes_Actual">Mes Actual</option>
                  <option value="Siguiente_Mes">Siguiente Mes</option>
                  <option value="3_Meses">3 Meses</option>
                  <option value="6_Meses">6 Meses</option>
                  <option value="otro">Otro</option>

                </select>
                </label>
              </div>
              <div id="motivo">
                <input type="input" name="otraFecha" class="form-control" aria-describedby="nameHelp"
                  placeholder="Escriba otra fecha" />
              </div><br><br>

              <!-- <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">¿Cual es su fecha aproximada de compra?</label><br>
              <select name="educacion">
                <option value="" selected="selected">Seleccione Uno …</option>
                <option value="sin-estudios">Mes Actual</option>
                <option value="educacion-obligatoria">Siguiente Mes</option>
                <option value="formacion-profesional">3 Meses</option>
                <option value="universidad">6 Meses</option>
                <option value="universidad">Otro</option>
              </select> <br>
              <label for="exampleInputEmail1" class="form-label">Otro:</label>
              <input type="input" name="puesto" class="form-control" id="puesto" aria-describedby="nameHelp"
                placeholder="Escriba otro motivo" required />
            </div> -->

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Auto Final</label>
                <input type="input" name="autoFinal" class="form-control" id="autoFinal" aria-describedby="nameHelp"
                  placeholder="Auto" required /><br>
              </div>

              <div>
                <label for="exampleInputEmail1" class="form-label">Versión Final: </label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="finalVersion" id="version_1"
                    value="Version_Basica">
                  <label class="form-check-label" for="version1">Básica</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="finalVersion" id="version_2"
                    value="Version_Intermedia">
                  <label class="form-check-label" for="version2">Intermedia</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="finalVersion" id="version_3"
                    value="Version_Equipada">
                  <label class="form-check-label" for="version3">Equipada</label>
                </div><br><br>
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo de Operación</label><br>
                <select name="tipoOperacion">
                  <option value="seleccione-uno" selected="selected">Seleccione Uno …</option>
                  <option value="Credinissan">Credinissan</option>
                  <option value="Contado">Contado</option>
                  <option value="Sicrea">Sicrea</option>
                  <option value="Banco">Banco</option>
                  <option value="Ensueño">Ensueño</option>
                </select> <br>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Comentarios y Observaciones</label>
                <textarea class="form-control" name="comentarios_y_observaciones" id="comentarios_y_observaciones"
                  rows="3" placeholder="Escriba Comentarios y Observaciones"></textarea>
              </div><br>
              <!-- Fin de Formulario APV -->

              <!-- Boton de guardado Formulario -->
              <div class="text-center">
                <button type="submit" class="btn btn-primary" id="botonGuardar">Guardar</button>
              </div>
          </form>
        </div><br><br>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <script>
          function OcultarDiv() {
            var FechaAprox = document.getElementById("fecha_aprox_compra").value; //id que hay en el html identificador del select
            var v = document.getElementById("motivo");

            if (FechaAprox == "otro") {
              v.style.display = "block";
            } else {
              v.style.display = "none";
            }
          }



        </script>
      </body>

    </div>
    <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Nissan_wall_sign_2021.jpg/1280px-Nissan_wall_sign_2021.jpg" class="img-fluid" alt="Nissan"> -->

  </div>

  <?php include 'footer.php'; ?>