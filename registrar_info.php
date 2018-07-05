<!DOCTYPE html>
<html lang="es" >
  <head>
    <meta charset="UTF-8">
    <title>Formulario de Actividades</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  </head>

  <body>

    <div class="container">
      <div class="row">

        <div class="col-md-12">
            <br>
            <h1 class="titulo">Datos registrados</h1>
            <br>

            <div id="page-loader"><span class="preloader-interior"></span></div>

              <?php

                include("conexion.php");
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
                  $dias_disponibles = $_POST["dias_disponibles"];
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

                  $servicios = $_POST["servicios"];
                  $incluye_servicio = $_POST["incluye_servicio"];
                  $durante_experiencia = $_POST["durante_experiencia"];
                  $apuntarse = $_POST["apuntarse"];
                  $notas_adicionales = $_POST["notas_adicionales"];
                  $politica = $_POST["politica"];

                  $requisitos = $_POST["requisitos"];

                  //aqui van las imagenes (Carpeta o ruta que usaras)
                  $path = "galeria/";

                  if (isset($_POST['nombre_empresa'])) {

                  $sql = "INSERT INTO empresas (`nombre_empresa`, `giro_empresa`, `nombre_contacto`, `apellido_contacto`, `tel_celular`, `tel_oficina`, `email`, `pagina_web`, `ciudad`, `pais`, `estado`, `codigo_postal`, `direccion`, `acerca_de`)
                          VALUES ('" . $nombre_empresa . "', '" . $giro_empresa . "', '" . $nombre_contacto . "', '" . $apellido_contacto . "', '" . $celular . "', '" . $tel_oficina . "', '" . $email . "', '" . $pagina_web . "', '" . $ciudad . "', '" . $pais . "', '" . $estado . "', '" . $codigo_postal . "', '" . $direccion . "', '" . $acerca . "')";

                  $resultados_empresa = $conection->query($sql);
                  //echo $sql;

                  echo  "
                        <div class='container'>
                          <h3 class='subtitulo_secciones'>Información personal/empresa</h3>
                          <div class='col-md-12'>
                            <p class='titulo_label col-md-4'>Nombre de la empresa: <span class='span_texto_registrado'> $nombre_empresa </span></p>
                            <p class='titulo_label col-md-4'>Giro de la empresa: <span class='span_texto_registrado'> $giro_empresa </span></p>
                            <p class='titulo_label col-md-4'>Nombre del contacto: <span class='span_texto_registrado'> $nombre_contacto </span></p>
                            <p class='titulo_label col-md-4'>Apellido del contacto: <span class='span_texto_registrado'> $apellido_contacto </span></p>
                            <p class='titulo_label col-md-4'>Teléfono celular: <span class='span_texto_registrado'> $celular </span></p>
                            <p class='titulo_label col-md-4'>Teléfono oficina: <span class='span_texto_registrado'> $tel_oficina </span></p>
                            <p class='titulo_label col-md-4'>Email: <span class='span_texto_registrado'> $email </span></p>
                            <p class='titulo_label col-md-4'>Página web: <span class='span_texto_registrado'> $pagina_web </span></p>
                            <p class='titulo_label col-md-4'>Ciudad: <span class='span_texto_registrado'> $ciudad </span></p>
                            <p class='titulo_label col-md-4'>País: <span class='span_texto_registrado'> $pais </span></p>
                            <p class='titulo_label col-md-4'>Estado: <span class='span_texto_registrado'> $estado </span></p>
                            <p class='titulo_label col-md-4'>Código postal: <span class='span_texto_registrado'> $codigo_postal </span></p>
                            <p class='titulo_label col-md-4'>Dirección: <span class='span_texto_registrado'> $direccion </span></p>
                            <p class='titulo_label col-md-4'>Acerca de mí: <span class='span_texto_registrado'> $acerca </span></p>
                          </div>
                        ";

                            if (!$sql) {
                              echo "
                                    <div class='col-md-12 col-sm-12 col-xs-12 contenido_exito'>
                                      <h5 class='caja_error'><i class='fa fa-close' style='color:white'></i>&nbsp;&nbsp;Lo sentimos, no se pudo registrar la empresa $nombre_empresa.</h5>
                                    </div>
                              ";
                            }else {
                              echo "
                                    <div class='col-md-12 col-sm-12 col-xs-12 contenido_exito'>
                                      <h5 class='caja_bien'><i class='fa fa-check' style='color:white'></i>&nbsp;&nbsp;Registro de la empresa $nombre_empresa exitosamente.</h5>
                                    </div>
                              ";
                            }

                  echo "
                        </div>
                        <hr class='hr_style'><br>
                      ";

                  }

                  if (isset($_POST['nombre_actividad'])) {

                  $id_registro = mysqli_insert_id($conection);

                  // $texto_colores = implode(', ', $dias_disponibles);
                  // echo ' seleccionaste: ' . $texto_colores;

                  foreach($dias_disponibles as $dias_seleccionados){
                  		$valor = $dias_seleccionados;
                  		$dias_aux[] = $valor;
                  }
                  $valores = implode(', ', $dias_aux);
                  $sql_valores = "(" .$valores. ")";

                  $sql_actividades = "INSERT INTO actividades (`nombre_actividad`, `dias_disponibles`, `horarios_disponibles`, `tipo_actividad`, `personas_adultas`,
                  										`ninos`, `hombres`, `mujeres`, `duracion_dias`, `duracion_horas`, `duracion_minutos`, `disponible_ingles`, `forma_pago`, `precio`, `id_empresa`)
                  				VALUES ('" . $nombre_actividad . "', '" . $sql_valores . "', '" . $horario_disponible . "', '" . $tipo_actividad . "', '" . $adultas . "', '" . $ninos . "',
                  					'" . $hombres . "', '" . $mujeres . "', '" . $dias . "', '" . $horas . "', '" . $minutos . "', '" . $disponible_ingles . "', '" . $forma_pago . "',
                  					'" . $precio . "', '" .$id_registro. "')";

                  $resultados_actividades = $conection->query($sql_actividades);
                  //echo $sql_actividades;

                  echo "
                  			<div class='container'>
                					<h3 class='subtitulo_secciones'>Información de la actividad</h3>
                          <div class='col-md-12'>
                  					<p class='titulo_label col-md-4'>Nombre de la actividad: <span class='span_texto_registrado'> $nombre_actividad </span></p>
                  					<p class='titulo_label col-md-4'>Días disponibles: <span class='span_texto_registrado'> $sql_valores </span></p>
                  					<p class='titulo_label col-md-4'>Horarios disponibles: <span class='span_texto_registrado'> $horario_disponible </span></p>
                  					<p class='titulo_label col-md-4'>Tipo de Actividad: <span class='span_texto_registrado'> $tipo_actividad </span></p>
                  					<p class='titulo_label col-md-4'>¿Cuántas personas adultas?: <span class='span_texto_registrado'> $adultas </span></p>
                  					<p class='titulo_label col-md-4'>¿Cuántos niños?: <span class='span_texto_registrado'> $ninos </span></p>
                  					<p class='titulo_label col-md-4'>¿Cuántos hombres?: <span class='span_texto_registrado'> $hombres </span></p>
                  					<p class='titulo_label col-md-4'>¿Cuántas mujeres?: <span class='span_texto_registrado'> $mujeres </span></p>
                  					<p class='titulo_label col-md-4'>Duración (días): <span class='span_texto_registrado'> $dias </span></p>
                  					<p class='titulo_label col-md-4'>Duración (horas): <span class='span_texto_registrado'> $horas </span></p>
                  					<p class='titulo_label col-md-4'>Duración (minutos): <span class='span_texto_registrado'> $minutos </span></p>
                  					<p class='titulo_label col-md-4'>¿Disponible en inglés?: <span class='span_texto_registrado'> $disponible_ingles </span></p>
                  					<p class='titulo_label col-md-4'>Forma de pago: <span class='span_texto_registrado'> $forma_pago </span></p>
                  					<p class='titulo_label col-md-4'>Precio: <span class='span_texto_registrado'> $precio </span></p>
                          </div>
                      ";

                  					if (!$sql_actividades) {
                              echo "
                                    <div class='col-md-12 col-sm-12 col-xs-12 contenido_exito'>
                                      <h5 class='caja_error'><i class='fa fa-close' style='color:white'></i>&nbsp;&nbsp;Lo sentimos, no se pudo registrar la actividad $nombre_actividad.</h5>
                                    </div>
                              ";
                  					}else {
                  						echo "
                                    <div class='col-md-12 col-sm-12 col-xs-12 contenido_exito'>
                                      <h5 class='caja_bien'><i class='fa fa-check' style='color:white'></i>&nbsp;&nbsp;Registro de la actividad $nombre_actividad exitosamente.</h5>
                                    </div>
                              ";
                  					}

                  echo "
                  			</div>
                        <hr class='hr_style'><br>
                      ";

                  }

                  if (isset($_POST['descripcion_experiencia'])) {

                  $sql_descripcion_actividades = "INSERT INTO descripcion_actividades (`descripcion_actividad`, `servicios_contratantes`, `acerca_lugar`, `id_empresa`)
                          VALUES ('" . $descripcion_experiencia . "', '" . $servicios_acceso . "', '" . $acerca_lugar . "', '" .$id_registro. "')";

                  $resultados_descripcion_actividades = $conection->query($sql_descripcion_actividades);
                  //echo $sql_descripcion_actividades;

                  echo "
                        <div class='container'>
                          <h3 class='subtitulo_secciones'>Descripción de la actividad</h3>
                          <div class='col-md-12'>
                            <p class='titulo_label col-md-4'>Descripción de la experiencia: <span class='span_texto_registrado'> $descripcion_experiencia </span></p>
                            <p class='titulo_label col-md-4'>¿A que otros servicios tienen acceso los contratantes?: <span class='span_texto_registrado'> $servicios_acceso </span></p>
                            <p class='titulo_label col-md-4'>Acerca del lugar: <span class='span_texto_registrado'> $acerca_lugar </span></p>
                          </div>
                      ";

                            if (!$sql_descripcion_actividades) {
                              echo "
                                    <div class='col-md-12 col-sm-12 col-xs-12 contenido_exito'>
                                      <h5 class='caja_error'><i class='fa fa-close' style='color:white'></i>&nbsp;&nbsp;Lo sentimos, no se pudo registrar la descripción de la actividad.</h5>
                                    </div>
                              ";
                            }else {
                              echo "
                                    <div class='col-md-12 col-sm-12 col-xs-12 contenido_exito'>
                                      <h5 class='caja_bien'><i class='fa fa-check' style='color:white'></i>&nbsp;&nbsp;Registro de descripción de la actividad exitosamente.</h5>
                                    </div>
                              ";
                            }

                  echo "
                        </div>
                        <hr class='hr_style'><br>
                      ";

                  }

                  if (isset($_POST['servicios'])) {

                  foreach($servicios as $servicios_seleccionados){
                  		$serv = $servicios_seleccionados;
                  		$servicios_aux[] = $serv;
                  }
                  $valor_servicios = implode(', ', $servicios_aux);
                  $sql_servicios_seleccionados = "(" .$valor_servicios. ")";

                  $sql_servicios = "INSERT INTO servicios (`servicios`, `descripcion_servicios`, `descripcion_experiencia`, `quien_apuntarse`,
                                                              `notas_adicionales`, `politica_cancelacion`, `id_empresa`)
                          VALUES ('" . $sql_servicios_seleccionados . "', '" . $incluye_servicio . "', '" . $durante_experiencia . "',
                                  '" . $apuntarse . "', '" . $notas_adicionales . "', '" . $politica . "', '" .$id_registro. "')";

                  $resultados_servicios = $conection->query($sql_servicios);
                  //echo $sql_servicios;

                  echo "
                        <div class='container'>
                            <h3 class='subtitulo_secciones'>Servicios que incluye</h3>
                            <div class='col-md-12'>
                              <p class='titulo_label col-md-4'>Servicios: <span class='span_texto_registrado'> $sql_servicios_seleccionados </span></p>
                              <p class='titulo_label col-md-4'>¿Qué incluye el servicio?: <span class='span_texto_registrado'> $incluye_servicio </span></p>
                              <p class='titulo_label col-md-4'>¿Qué haremos durante la experiencia?: <span class='span_texto_registrado'> $durante_experiencia </span></p>
                              <p class='titulo_label col-md-4'>¿Quién puede apuntarse?: <span class='span_texto_registrado'> $apuntarse </span></p>
                              <p class='titulo_label col-md-4'>Notas adicionales: <span class='span_texto_registrado'> $notas_adicionales </span></p>
                              <p class='titulo_label col-md-4'>Política de cancelación: <span class='span_texto_registrado'> $politica </span></p>
                            </div>
                      ";

                            if (!$sql_servicios) {
                              echo "
                                    <div class='col-md-12 col-sm-12 col-xs-12 contenido_exito'>
                                      <h5 class='caja_error'><i class='fa fa-close' style='color:white'></i>&nbsp;&nbsp;Lo sentimos, no se pudo registrar servicio (s).</h5>
                                    </div>
                              ";
                            }else {
                              echo "
                                    <div class='col-md-12 col-sm-12 col-xs-12 contenido_exito'>
                                      <h5 class='caja_bien'><i class='fa fa-check' style='color:white'></i>&nbsp;&nbsp;Registro de servicio (s) exitosamente.</h5>
                                    </div>
                              ";
                            }

                    echo "
                          </div>
                          <hr class='hr_style'><br>
                        ";
                  }

                  echo "<div class='container'>
                          <h3 class='subtitulo_secciones'>Galería</h3>
                          <br>";

                  if (isset($_FILES['files']) && isset($_POST['nombre_empresa'])) {
                    // echo "<pre>";print_r($_FILES);echo "</pre>";
                    // echo "<br><br><br>";
                    // echo "<pre>";print_r($_POST);echo "</pre>";

                    //almacenamos las propiedades de las imagenes
                    $name_array = $_FILES['files']['name'];
                    $tmp_name_array = $_FILES['files']['tmp_name'];
                    $type_array = $_FILES['files']['type'];
                    $size_array = $_FILES['files']['size'];
                    $error_array = $_FILES['files']['error'];
                    $nombreImagen =  "Galería de " . trim($nombre_empresa);

                    //recorremos el array de imagenes para subirlas al simultaneo
                    for($i = 0; $i < count($tmp_name_array); $i++){
                      if(move_uploaded_file($tmp_name_array[$i], "galeria/".$name_array[$i])){
                          //guardamos en la base de datos el nombre
                          $sql_galeria = 'INSERT INTO galeria (src, active, nombre_imagen, id_empresa) VALUES ("'.$name_array[$i].'", "1", "' .$nombreImagen. '", "' .$id_registro. '")';
                          $resultados_galeria = $conection->query($sql_galeria);
                          //mostramos las imagenes para verificar que se subieron
                          echo "
                                <div class='col-md-3 col-sm-6 col-xs-6'>
                                  <img class='thumb' src='".$path.$name_array[$i]."'><br>
                                  <span class='span_texto_registrado'>$name_array[$i]</span><br><br>
                                </div>
                              ";
                      }else{
                          //si ocurrio algun problema entonces
                          echo "No se pudo guardar la galería en la carpeta ".$name_array[$i]."<br>";
                      }

                  }
                  if (!$sql_galeria) {
                    echo "
                          <div class='col-md-12 col-sm-12 col-xs-12 contenido_exito'>
                            <h5 class='caja_error'><i class='fa fa-close' style='color:white'></i>&nbsp;&nbsp;Lo sentimos, no se pudo registrar la  $nombreImagen.</h5>
                          </div>
                    ";
                  }else {
                    echo "
                          <div class='col-md-12 col-sm-12 col-xs-12 contenido_exito'>
                            <h5 class='caja_bien'><i class='fa fa-check' style='color:white'></i>&nbsp;&nbsp;Registro de $nombreImagen exitosamente.</h5>
                          </div>
                    ";
                  }

                  echo "
                      </div>
                      <hr class='hr_style'><br>
                    ";
                  }

                  if (isset($_POST['descripcion_experiencia'])) {

                  $sql_requisitos = "INSERT INTO requisitos (`descripcion_requisitos`, `id_empresa`)
                          VALUES ('" . $requisitos . "', '" .$id_registro. "')";

                  $resultados_descripcion_actividades = $conection->query($sql_requisitos);
                  //echo $sql_requisitos;

                  echo "
                        <div class='container'>
                          <h3 class='subtitulo_secciones'>Requisitos</h3>
                          <div class='col-md-12'>
                            <p class='titulo_label col-md-12'>Descripción de la experiencia: <span class='span_texto_registrado'> $requisitos </span></p>
                          </div>
                      ";

                            if (!$sql_requisitos) {
                              echo "
                                    <div class='col-md-12 col-sm-12 col-xs-12 contenido_exito'>
                                      <h5 class='caja_error'><i class='fa fa-close' style='color:white'></i>&nbsp;&nbsp;Lo sentimos, no se pudieron registrar los requisitos.</h5>
                                    </div>
                              ";
                            }else {
                              echo "
                                    <div class='col-md-12 col-sm-12 col-xs-12 contenido_exito'>
                                      <h5 class='caja_bien'><i class='fa fa-check' style='color:white'></i>&nbsp;&nbsp;Registro de requisitos exitosamente.</h5>
                                    </div>
                              ";
                            }

                  echo "
                        </div>
                        <hr class='hr_style'><br>
                      ";

                  }

                  echo "
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

     <script>
       $(window).load(function(){
           $('#page-loader').fadeOut(1000);
       });
     </script>

 </body>

</html>
