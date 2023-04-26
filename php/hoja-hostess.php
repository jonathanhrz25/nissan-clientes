<?php include 'header.php' ?>

<div class="container">
  <div class="mx-auto">
    <nav id="navbar-example3" class="navbar bg-body-tertiary px-2">
      <nav class="nav">
        <a class="nav-link active" aria-current="page"
          href="http://localhost/nissan-clientes/login/index-piso.php">Inicio</a>
        <a class="nav-link" href="http://localhost/nissan-clientes/php/hoja-hostess.php">Generar Hoja de Prospecto
          Hostess</a>
        <a class="nav-link" href="http://localhost/nissan-clientes/php/tabla-hostess.php">Ver Tabla</a>
      </nav>
    </nav>




    <div class="container">
      <!DOCTYPE html>
      <html lang="es">

      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
      </head>

      <body onload="ocultarDiv(); ocultarMedio(); ocultarEmpresas();">
        <div class="container col-8">
          <h1 class="text-center">Hoja de Prospecto - Piso</h1><br>


          <?php
          session_start();
          ?>

          <!-- Inicio de Formulario Hostess -->

          <form id="formulario" method="POST" action="database-form-piso.php">
            <div class="form-group mb-3">
              <label for="folio" class="form-label" style="color: black;">Numero de Folio: </label>
              <input type="number" name="folio" id="folio" aria-describedby="nameHelp" placeholder="Folio" />
            </div>

            <div class="form-group mb-3">
              <label for="fecha" class="form-label">Fecha y Hora: </label>
              <input type="datetime-local" name="fecha" id="fecha" required>
            </div>

            <div class="form-group mb-3">
              <label for="VisitaInteres" class="form-label">Asunto de Visita de Interes:</label>
              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="Asunto" id="Asunto1" value="Visita_de_Interes1">
                  <label class="form-check-label" for="Asunto1">1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="Asunto" id="Asunto2" value="Visita_de_Interes2">
                  <label class="form-check-label" for="Asunto2">2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="Asunto" id="Asunto3" value="Visita_de_Interes3">
                  <label class="form-check-label" for="Asunto3">3</label>
                </div>


                <div class="form-group mb-3">
                  <label for="TipoProspecto" class="form-label">Tipo de Prospecto: </label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="Tipo" id="Tipo1"
                        value="Tipo_de_Prospecto_Nuevo">
                      <label class="form-check-label" for="Tipo1">Nuevo</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="Tipo" id="Tipo2"
                        value="Tipo_de_Prospecto_Re-Compra">
                      <label class="form-check-label" for="Tipo2">Re-Compra</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="Tipo" id="Tipo3"
                        value="Tipo_de_Prospecto_Acompañantes">
                      <label class="form-check-label" for="Tipo3">Acompañantes</label>
                    </div><br><br>
                    

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nombre del Cliente/Empresa: </label>
                      <input type="text" name="nombreCE" class="form-control" id="nombreCE" aria-describedby="nameHelp"
                        placeholder="Nombre de la persona o empresa" required />
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Telefono:</label>
                      <input type="number" name="telefono" class="form-control" id="telefono"
                        aria-describedby="nameHelp" placeholder="Numero de telefono" required />
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Correo</label>
                      <input type="email" name="correo" class="form-control" id="correo" aria-describedby="nameHelp"
                        placeholder="e-mail" required />
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Lugar donde nos visita:</label>
                      <input type="text" name="lugardevisita" class="form-control" id="lugardevisita"
                        aria-describedby="nameHelp" placeholder="Lugar" required />
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CP:</label>
                      <input type="number" name="cp" class="form-control" id="cp" aria-describedby="nameHelp"
                        placeholder="cp" required />
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Edad</label>
                      <input type="number" name="edad" class="form-control" id="edad" aria-describedby="nameHelp"
                        placeholder="Edad de la persona" required />
                    </div>

                    <div>

                      <label for="exampleInputEmail1" class="form-label" name="MotiOpcion">¿Por que motivo nos
                        considera
                        como
                        su
                        primera opción para estrenar un auto?</label><br>
                      <select class="nieve" onchange="ocultarDiv();" id="MotivoOpcion" name="MotivoOpcion">
                        <option value="">Seleccione Uno …</option>
                        <option value="Excvelente Atención">Excvelente Atención</option>
                        <option value="Calidad del Producto">Calidad del Producto</option>
                        <option value="Ubicación">Ubicación</option>
                        <option value="Infraestructura">Infraestructura</option>
                        <option value="Promociones">Promociones</option>
                        <option value="otro">Otro</option>

                      </select><br><br>
                      </label>
                    </div>
                    <div id="motivo">
                      <input type="text" name="otroMotivo" class="form-control" id="otroMotivo"
                        aria-describedby="nameHelp" placeholder="Escriba otro motivo" />
                    </div>


                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">¿Por que medio se entero de
                        nosotros?</label><br>
                      <select name="medio" id="medio" onchange="ocultarMedio();">
                        <option value="Seleccion" selected="selected">Seleccione Uno …</option>
                        <option value="Call Center">Call Center</option>
                        <option value="Correo Electronico">Correo Electronico</option>
                        <option value="Pagina de Internet">Pagina de Internet</option>
                        <option value="Redes Sociales">Redes Sociales</option>
                        <option value="Radio">Radio</option>
                        <option value="TV">TV</option>
                        <option value="Periodicos">Periodicos</option>
                        <option value="Volante">Volante</option>
                        <option value="Cercania/Paso">Cercania/Paso</option>
                        <option value="Stand/Exhibition">Stand/Exhibition</option>
                        <option value="Centro Comercial">Centro Comercial</option>
                        <option value="Recomendación">Recomendación</option>
                        <option value="Espectacular">Espectacular</option>
                        <option value="Oficina Movil">Oficina Movil</option>
                        <option value="Por Familiares o Conocidos">Por Familiares o Conocidos</option>
                        <option value="otroMe">Otro</option>
                      </select> <br>
                    </div>

                    <div id="otroMedio">
                      <label for="exampleInputEmail1" class="form-label">Otro:</label>
                      <input type="text" name="otroMedio" class="form-control" id="otroMedio"
                        aria-describedby="nameHelp" placeholder="Escriba otro medio" />
                    </div>


                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">¿Estas visitando otras marcas; incluyendo
                        agencias Nissan?</label>
                      <input type="radio" class="btn-check" name="visitandomarcas" id="si" value="si">
                      <label class="btn btn-outline-primary" onclick="mostrarEmpresas();" for="si">SI</label>
                      <input type="radio" class="btn-check" name="visitandomarcas" value="no" id="no">
                      <label class="btn btn-outline-primary" onclick="ocultarEmpresas();" for="no">NO</label>
                    </div>

                    <div id="resp" style="display:none;">
                      <label for="exampleInputEmail1" class="form-label">En caso de que si, ¿Cuales?</label>
                      <input type="text" name="culesmarcas" class="form-control" id="" aria-describedby="nameHelp"
                        placeholder="Cuales" />
                    </div>



                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Auto de Interes</label>
                      <input type="text" name="autointeres" class="form-control" id="puesto" aria-describedby="nameHelp"
                        placeholder="Auto" required /><br>

                      <label for="exampleInputEmail1" class="form-label">Versión: </label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="version" id="version1" value="versionBasica">
                        <label class="form-check-label" for="version1">Básica</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="version" id="version2"
                          value="versionIntermedia">
                        <label class="form-check-label" for="version2">Intermedia</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="version" id="version3"
                          value="versionEquipada">
                        <label class="form-check-label" for="version3">Equipada</label>
                      </div><br>
                      
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Color</label>
                      <input type="text" name="color" class="form-control" id="puesto" aria-describedby="nameHelp"
                        placeholder="Color" required />
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nombre del APV:</label>
                      <input type="text" name="nombreapv" class="form-control" id="apellido" aria-describedby="nameHelp"
                        placeholder="APV" required />
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Comentarios y Observaciones</label>
                      <textarea class="form-control" name="comentarios_y_observaciones" id="comentarios_y_observaciones"
                        rows="3" placeholder="Escriba Comentarios y Observaciones"></textarea>
                    </div><br>
                    <!-- Fin de Formulario Hostess -->

                    <!-- Boton de guardado Formulario -->
                    <div class="text-center">
                      <input type="submit" class="btn btn-primary" name="enviar" value="Guardar">
                    </div>
          </form>

        </div><br><br><!-- Fin de Boton -->

        <script src="../js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
          function ocultarDiv() {
            var motivoOpcion = document.getElementById("MotivoOpcion").value; //id que hay en el html identificador del select
            var m = document.getElementById("motivo");

            if (motivoOpcion == "otro") {
              m.style.display = "block";
            } else {
              m.style.display = "none";
            }
          }
          function ocultarMedio() {
            var medioOpcion = document.getElementById("medio").value; //id que hay en el html identificador del select
            var v = document.getElementById("otroMedio");

            if (medioOpcion == "otroMe") {
              v.style.display = "block";
            } else {
              v.style.display = "none";
            }
          }

          function mostrarEmpresas() {
            var Visita1 = document.getElementById("botonS");
            resp.style.display = "block";
          }
          function ocultarEmpresas() {
            var Visita1 = document.getElementById("botonN");
            resp.style.display = "none";
          }


        </script>

      </body>

    </div>

  </div>

  <?php include 'footer.php'; ?>