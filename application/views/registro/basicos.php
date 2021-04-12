<div class="row" >
	<div class="col-6 fondo-basicos" style="margin-top: 120px;"></div>
	<div class="col-6 fondo-basicos-2" style="margin-top: 120px;">
		<h1><b>¿Buscas algún comando?</b></h1>
		<h2>Aquí tenemos algunas clasificaciones para facilitar tu búsqueda.</h2>
		<br>
		<select name="temas" class="custom-select" id="temas" onchange='form1.submit()'>
			<option value="">Selecciona un tema</option>
			<option value="">Creación de directorios</option>
			<option value="">Clasificación 2</option>
			<option value="">Clasificación 3</option>

				<?php foreach($temas_preg as $row) {?>                  
					<option value="<?php echo $row->tema?>" ><?php echo $row->tema ?></option>
				<?php } ?>
		</select>
	</div>
</div>
<br>

<div class="row justify-content-center">
	<div class="col-10 acordeon-basicos">
		<br>
		<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Comando: cd
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
		<p>Para navegar por los archivos y directorios de Linux, usa el comando cd. Te pedirá la ruta completa o el nombre del directorio, dependiendo del directorio de trabajo actual en el que te encuentres.
		<br>
		Supongamos que estás en /home/nombredeusuario/Documentos y deseas ir a Fotos, un subdirectorio de Documentos. Para hacerlo, simplemente escribe el siguiente comando: <b>cd Fotos.</b>
		<br>
		Otro escenario es si deseas ir a un directorio completamente nuevo, por ejemplo, /home/nombredeusuario/Peliculas. En este caso, debes escribir cd seguido de la ruta absoluta del directorio: cd /home/ nombredeusuario/Peliculas.
		<br>
		Hay algunos atajos para ayudarte a navegar rápidamente:
		<br>
		cd .. (con dos puntos) para ir un directorio hacia arriba
		cd para ir directamente a la carpeta de inicio
		cd- (con un guión) para ir al directorio anterior
		Como nota al margen, el shell de Linux distingue entre mayúsculas y minúsculas. Por lo tanto, debes escribir el nombre del directorio de forma exacta.</p>
	  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Comando: ls
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
		El comando ls se usa para ver el contenido de un directorio. Por defecto, este comando mostrará el contenido de tu directorio de trabajo actual.
	<br>
		Si deseas ver el contenido de otros directorios, escribe ls y luego la ruta del directorio. Por ejemplo, ingresa ls/home/nombredeusuario/Documentos para ver el contenido de Documentos.
	<br>
		Hay variaciones que puedes usar con el comando ls:
	<br>
		ls -R también listará todos los archivos en los subdirectorios
		ls -a mostrará los archivos ocultos
		ls -al listará los archivos y directorios con información detallada como los permisos, el tamaño, el propietario, etc.
	  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Comando: cat
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
		cat (abreviatura de concatenate, en inglés) es uno de los comandos más utilizados en Linux. Se utiliza para listar el contenido de un archivo en la salida estándar (sdout). Para ejecutar este comando, escribe cat seguido del nombre del archivo y su extensión. Por ejemplo: cat archivo.txt.
	<br>
		Aquí hay otras formas de usar el comando cat:
	<br>
	cat > nombredearchivo crea un nuevo archivo.
	cat nombredearchivo1 nombredearchivo2>nombredearchivo3 une dos archivos (1 y 2) y almacena la salida de ellos en un nuevo archivo (3)
	convertir un archivo a mayúsculas o minúsculas, cat nombredearchivo | tr a-z A-Z> salida.txt
	  </div>
    </div>
  </div>
  <br>			
</div>
		
		
	</div>
</div>
<br>