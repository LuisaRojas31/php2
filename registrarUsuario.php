<?php
if(isset($_POST['enviar'])) {
$identificacion=$_POST['identificacion'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$sexo=$_POST['sexo'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$direccion=$_POST['dirección'];
$password=$_POST['password'];
$estado=$_POST['estado'];
$fechaCreacion=$_POST['fechaCreacion'];

$query=mysqli_query($con, "INSERT INTO user(identificacion,nombre,telefono,email,sexo,genero,edad,fecha_nacimiento,direccion,password,estado,fecha_creacion) VALUES ('$identificacion','$nombre','$telefono','$email','$sexo','$genero','$edad','$fechaNacimiento','$direccion','$password','$estado','$fechaCreacion')");

if ($query){
    echo '<div class="alert alert-success" role="alert">
   Datos guardados con exito
  </div>';
}else{
    echo '<div class="alert alert-danger" role="alert">
   Error al guardar, intente nuevamente
  </div>';

}

}
  
?>
<form method='post'>
  <div class="mb-3">
    <label class="form-label">Identificación</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="identificacion">
  </div>
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="nombre">
  </div>
  <div class="mb-3">
    <label class="form-label">Telefono</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="telefono">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">sexo</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="sexo">
  </div>
  <div class="mb-3">
    <label class="form-label">genero</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="genero">
  </div>
  <div class="mb-3">
    <label class="form-label">edad</label>
    <input type="number" class="form-control"  aria-describedby="emailHelp" name="edad">
  </div>
  <div class="mb-3">
    <label class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control"  aria-describedby="emailHelp" name="fechaNacimiento">
  </div>
  <div class="mb-3">
    <label class="form-label">Dirección</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="dirección">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="password">
  </div>
  <div class="mb-3">
    <label class="form-label">Estado</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="estado">
  </div>
  <div class="mb-3">
    <label class="form-label">Fecha Creación</label>
    <input type="date" class="form-control"  aria-describedby="emailHelp" name="fechaCreacion">
  </div>
  
 
  <button type="submit" class="btn btn-primary" name='enviar'>Submit</button>
</form>