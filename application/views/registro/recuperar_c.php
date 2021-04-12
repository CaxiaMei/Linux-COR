
<div class="recuperar  shadow">

    <?php if(isset($alert)){ ?>
    <div class="alert alert-<?php echo $alert['type']?>" role="alert">
    <?php echo $alert['msg']; ?>  
    </div>
    <?php }?>

    <h3 class="center title">Recuperar Contraseña</h3>
    <br>
    <form action="<?php echo base_url('inicio/recuperar_c') ?>" method="post" >
  <div class="form-group">
    <label for="formGroupExampleInput">Nueva Contraseña</label>
    <input type="password" name="pass" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Confirmar Contraseña</label>
    <input type="password" name="pass2" class="form-control" id="formGroupExampleInput2">
    <input type="hidden" name="cr" value="<?php echo $cr ?>">
  </div>
  <div class="row">
      <div class="col d-flex justify-content-end">
      <button type="submit" class="btn btn-white">Guardar</button>
      </div>
  </div>
  
</form>
</div>





