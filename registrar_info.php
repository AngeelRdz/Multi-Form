<!DOCTYPE html>
<html lang="es" >
  <head>
    <meta charset="UTF-8">
    <title>Formulario de Actividades</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>

  <body>

    <div class="container">
      <div class="row">

        <div class="col-md-12">
            <br>
            <h1 class="titulo">Datos registrados</h1>
            <br>
              <?php

                // include("../conexion.php");
                define('MB', 1048576);

                if (isset($_POST) && !empty($_POST)) {

                  $nombre_empresa = $_POST["nombre_empresa"];
                  $giro_empresa = $_POST["giro_empresa"];
                  $nombre_contacto = $_POST["nombre_contacto"];
                  $apellido_contacto = $_POST["apellido_contacto"];
                  $celular = $_POST["celular"];
                  $tel_oficina = $_POST["tel_oficina"];
                  $email = $_POST["email"];
                  $pagina_web = $_POST["pagina_web"];
                  $ciudad = $_POST["ciudad"];
                  $pais = $_POST["pais"];
                  $estado = $_POST["estado"];
                  $codigo_postal = $_POST["codigo_postal"];
                  $direccion = $_POST["direccion"];
                  $acerca = $_POST["acerca"];

                  $nombre_actividad = $_POST["nombre_actividad"];
                  $lunes = $_POST["lunes"];
                  $horario_disponible = $_POST["horario_disponible"];
                  $tipo_actividad = $_POST["tipo_actividad"];
                  $adultas = $_POST["adultas"];
                  $ninos = $_POST["ninos"];
                  $hombres = $_POST["hombres"];
                  $mujeres = $_POST["mujeres"];
                  $dias = $_POST["dias"];
                  $horas = $_POST["horas"];
                  $minutos = $_POST["minutos"];
                  $disponible_ingles = $_POST["disponible_ingles"];
                  $forma_pago = $_POST["forma_pago"];
                  $precio = $_POST["precio"];

                  $descripcion_experiencia = $_POST["descripcion_experiencia"];
                  $servicios_acceso = $_POST["servicios_acceso"];
                  $acerca_lugar = $_POST["acerca_lugar"];

                  $agua = $_POST["agua"];
                  $incluye_servicio = $_POST["incluye_servicio"];
                  $durante_experiencia = $_POST["durante_experiencia"];
                  $apuntarse = $_POST["apuntarse"];
                  $notas_adicionales = $_POST["notas_adicionales"];
                  $politica = $_POST["politica"];

                  //almacenamos las propiedades de las imagenes
                  $name_array = $_FILES['files']['name'];
                  $tmp_name_array = $_FILES['files']['tmp_name'];
                  $type_array = $_FILES['files']['type'];
                  $size_array = $_FILES['files']['size'];
                  $error_array = $_FILES['files']['error'];

                  echo  "
                        <div class='contenedor'>
                          <div class='container'>
                            <h3 class='subtitulo_secciones'>Información personal/empresa</h3>
                            <center>
                              <hr class='hr_style'>
                            </center>
                            <p class='titulo_label'>Nombre de la empresa: <span class='span_texto_registrado'> $nombre_empresa </span></p>
                            <p class='titulo_label'>Giro de la empresa: <span class='span_texto_registrado'> $giro_empresa </span></p>
                            <p class='titulo_label'>Nombre del contacto: <span class='span_texto_registrado'> $nombre_contacto </span></p>
                            <p class='titulo_label'>Apellido del contacto: <span class='span_texto_registrado'> $apellido_contacto </span></p>
                            <p class='titulo_label'>Teléfono celular: <span class='span_texto_registrado'> $celular </span></p>
                            <p class='titulo_label'>Teléfono oficina: <span class='span_texto_registrado'> $tel_oficina </span></p>
                            <p class='titulo_label'>Email: <span class='span_texto_registrado'> $email </span></p>
                            <p class='titulo_label'>Página web: <span class='span_texto_registrado'> $pagina_web </span></p>
                            <p class='titulo_label'>Ciudad: <span class='span_texto_registrado'> $ciudad </span></p>
                            <p class='titulo_label'>País: <span class='span_texto_registrado'> $pais </span></p>
                            <p class='titulo_label'>Estado: <span class='span_texto_registrado'> $estado </span></p>
                            <p class='titulo_label'>Código postal: <span class='span_texto_registrado'> $codigo_postal </span></p>
                            <p class='titulo_label'>Dirección: <span class='span_texto_registrado'> $direccion </span></p>
                            <p class='titulo_label'>Acerca de mí: <span class='span_texto_registrado'> $acerca </span></p>
                          </div>
                        </div>

                        <div class='contenedor'>
                          <div class='container'>
                            <h3 class='subtitulo_secciones'>Información de la actividad</h3>
                            <center>
                              <hr class='hr_style'>
                            </center>
                            <p class='titulo_label'>Nombre de la actividad: <span class='span_texto_registrado'> $nombre_actividad </span></p>
                            <p class='titulo_label'>Días disponible: <span class='span_texto_registrado'> $lunes </span></p>
                            <p class='titulo_label'>Horarios disponibles: <span class='span_texto_registrado'> $horario_disponible </span></p>
                            <p class='titulo_label'>Tipo de Actividad: <span class='span_texto_registrado'> $tipo_actividad </span></p>
                            <p class='titulo_label'>¿Cuántas personas adultas?: <span class='span_texto_registrado'> $adultas </span></p>
                            <p class='titulo_label'>¿Cuántos niños?: <span class='span_texto_registrado'> $ninos </span></p>
                            <p class='titulo_label'>¿Cuántos hombres?: <span class='span_texto_registrado'> $hombres </span></p>
                            <p class='titulo_label'>¿Cuántas mujeres?: <span class='span_texto_registrado'> $mujeres </span></p>
                            <p class='titulo_label'>Duración (días): <span class='span_texto_registrado'> $dias </span></p>
                            <p class='titulo_label'>Duración (horas): <span class='span_texto_registrado'> $horas </span></p>
                            <p class='titulo_label'>Duración (minutos): <span class='span_texto_registrado'> $minutos </span></p>
                            <p class='titulo_label'>¿Disponible en inglés?: <span class='span_texto_registrado'> $disponible_ingles </span></p>
                            <p class='titulo_label'>Forma de pago: <span class='span_texto_registrado'> $forma_pago </span></p>
                            <p class='titulo_label'>Precio: <span class='span_texto_registrado'> $precio </span></p>
                          </div>
                        </div>

                        <div class='contenedor'>
                          <div class='container'>
                            <h3 class='subtitulo_secciones'>Descripción de la actividad</h3>
                            <center>
                              <hr class='hr_style'>
                            </center>
                            <p class='titulo_label'>Descripción de la experiencia: <span class='span_texto_registrado'> $descripcion_experiencia </span></p>
                            <p class='titulo_label'>¿A que otros servicios tienen acceso los contratantes?: <span class='span_texto_registrado'> $servicios_acceso </span></p>
                            <p class='titulo_label'>Acerca del lugar: <span class='span_texto_registrado'> $acerca_lugar </span></p>
                          </div>
                        </div>

                        <div class='contenedor'>
                          <div class='container'>
                            <h3 class='subtitulo_secciones'>Servicios que incluye</h3>
                            <center>
                              <hr class='hr_style'>
                            </center>
                            <p class='titulo_label'>Servicios: <span class='span_texto_registrado'> $agua </span></p>
                            <p class='titulo_label'>¿Qué incluye el servicio?: <span class='span_texto_registrado'> $incluye_servicio </span></p>
                            <p class='titulo_label'>¿Qué haremos durante la experiencia?: <span class='span_texto_registrado'> $durante_experiencia </span></p>
                            <p class='titulo_label'>¿Quién puede apuntarse?: <span class='span_texto_registrado'> $apuntarse </span></p>
                            <p class='titulo_label'>Notas adicionales: <span class='span_texto_registrado'> $notas_adicionales </span></p>
                            <p class='titulo_label'>Política de cancelación: <span class='span_texto_registrado'> $politica </span></p>
                          </div>
                        </div>


                        <div class='contenedor'>
                          <div class='container'>
                            <h3 class='subtitulo_secciones'>Galería</h3>
                            <center>
                              <hr class='hr_style'>
                            </center>
                            <br>
                          ";
                            for($i = 0; $i < count($tmp_name_array); $i++){
                              echo "
                                    <div class='col-md-3'>
                                      <img class='thumb' src='".$name_array[$i]."'><br>
                                      <span class='span_texto_registrado'>$name_array[$i]</span><br>
                                    </div>
                                  ";
                          }

                        echo "
                              </div>
                            </div>

                        <div class='container'>
                          <center>
                            <a href='index.html' class='btn next action-button btn-success' role='button' aria-pressed='true'>OK</a>
                          </center>
                        </div>
                        <br><br>

                        ";

                }

               ?>
           </div>
         </div>

       </div>
     </div>

 </body>

</html>
