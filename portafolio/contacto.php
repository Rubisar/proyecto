
<?php
require 'includes/header.php';
?>

<h1>contactonos</h1>
<main>

    <form class="formulario" method="POST">
        <fieldset>
            <legend>digite sus datos</legend>
            <div class="campo">
                <div class="campo">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre"   id="nombre" placeholder="digite nombre completo" require autofocus>

                </div>
                <div class="campo">
                  <label for="tel">telefono</label>
                  <input type="text"  name="tel" id="tel" placeholder="+57 3xxxxxx">

                </div>
                <div class="campo">
                 <label for="email">Email</label>
                 <input type="text" id="email" placeholder="correo@correo.com">
                </div>  
            </div>
            <div>
                <label for="men">Mensaje</label>
                <textarea type="" id="men" placeholder="Mensaje"></textarea>
            </div>

            
              <input type="submit" class="btn">

        </fieldset>

    </form>

</main>

<?php
 var_dump($_POST);
 $nombre = $_post['nombre'];
 $telefono =$_POST['tel'];
 $correo =$_POST['email'];
 $mensaje =$_POST['mensaje'];
try{

 require __DIR__.('/includes/conexio_bd.php');
 $sql "INSERT INTO formulario (nombre, telefono, correo, mensaje) VALUES ('$nombre', '$telefono', '$correo', '$mensaje')";
 $query =mysql_query($coneccion, $sql);
 echo 'se a revisado su mensaje';

} catch(\Throwable $th);{
  var_dump(th);
} 


    
include 'includes/footer.php';
?>