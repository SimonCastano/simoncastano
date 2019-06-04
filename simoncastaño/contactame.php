<?php include("menu.php") ?>

<div class="contenido uk-align-center ">
  <h1>Contactame para comentarios sujerencias o trabajos</h1>
   <div class="footer-right">
               <a uk-tooltip="castanosimon2002@gmail.com" href="" class="uk-icon-link" uk-icon="icon: google; ratio: 3.5" ></a>
              <a uk-tooltip="github.com/scr-simon" href="https://github.com/scr-simon" class="uk-icon-link" uk-icon="icon: github; ratio: 3.5" ></a><br>
               <a uk-tooltip="Simón Castaño Scr_simon" href="https://www.linkedin.com/in/sim%C3%B3n-casta%C3%B1o-scr-simon-786603163/" class="uk-icon-link" uk-icon="icon: linkedin; ratio: 3.5" ></a>
                <a uk-tooltip="3015294219" href="#" class="uk-icon-link" uk-icon="icon: whatsapp; ratio: 3.5" ></a>
            </div>
            <br>
<form method="POST" action="contactame.php">

    <div class="uk-margin">
      <label class="uk-form-label" for="form-stacked-text">Nombre</label>
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input name="nombre" class="uk-input uk-form-width-large" type="text" validate>
        </div>
    </div>

    <div class="uk-margin">
      <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-inline">
            <span class="uk-form-icon " uk-icon="icon: mail"></span>
            <input name="imail" class="uk-input uk-form-width-large" type="email" validate>
        </div>
    </div>
       

    <div class="uk-margin">
      <label class="uk-form-label" for="form-stacked-text">Mensaje</label>
       
           
           <textarea name="mensaje" class="uk-textarea" placeholder="Cual es tu mensaje" max-width="50%" validate white></textarea>
        
    </div>
    <button name="enviar" class="uk-button uk-button-default">Enviar mensaje</button>

</form>

</div>

<?php 
error_reporting(0);
$Nombre=$_POST['nombre'];
$Correo=$_POST['CASTANOSIMON2002@gmail.com'];
$asunto=$_POST['Portafolio Simon Castaño'];
$desde="imail";
$Mensaje=$_POST['mensaje'];
$BTNenviar=$_POST['enviar'];
$contenido="NOMBRE:" . $Nombre ." \n correo:" .$Correo ." \n desde:".$desde . "\n mensaje:". $Mensaje ;
if (isset($BTNenviar)) {
  mail($Correo,$asunto,$contenido,$desde);
  echo "<script>UIkit.notification({message: 'Enviado'})
  </script>";
}else{
  echo "<script>UIkit.notification({message: 'Hay un error vuelve a intentarlo'})
  </script>";
}
?>

<?php include("footer.php") ?>


