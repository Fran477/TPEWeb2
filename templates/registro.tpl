  {include file= 'templates/header.tpl'}
  <div class="container-login">
  <form action="registrarse" method="POST" class="from-login">
      <h6>Usuario</h6>
      <input class="form-control mr-sm-2" type="text" name="nombre" id="nombre"  required>
      <h6>Contraseña</h6>
      <input class="form-control mr-sm-2" type="password" name="clave" id="clave" required>
      <input class="btn btn-outline-success my-2 my-sm-1" type="submit" value="registrarse" />
  </form>
 </div>
{include file= 'templates/footer.tpl'}