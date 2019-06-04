<!DOCTYPE html>
<html>
<head>
    <title class="uk-background-secondary">Simon Castaño</title>
    <link rel="icon" type="image/png" href="img/simon blanco.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed.css">
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#0d0f0e",
      "text": "#a8a8a8"
    },
    "button": {
      "background": "red",
      "text": "#000000"
    }
  },
  "theme": "edgeless",
  "position": "button-right",
  "content": {
    "message": "\nEste sitio web utiliza cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web",
    "dismiss": "ok",
    "link": "Políticas de privacidad",
    "href": "https://app-1541638356.000webhostapp.com/"
  }
})});
</script>
</head>
<body>
   <div id="subir"></div>
    <div style="z-index:10000; position: fixed;;" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-stick uk-button-secondary">
        <button style="border-radius: 26px;" class="uk-button uk-button-default uk-button-secondary uk-margin-small-right" type="button" uk-icon="icon: menu" uk-toggle="target: #offcanvas-reveal"></button>
    </div>
    <div class="uk-animation-slide-top" id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
        <div class="uk-offcanvas-bar uk-light">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <ul class="uk-nav uk-nav-default">
              <li class="contenido"><img class="uk-border-circle uk-animation-shake" width="100%" height="100%" src="img/simon blanco.jpg"></li>
                <li class="uk-active"><a href="index.php"><span class="uk-margin-small-right" uk-icon="icon: home"></span>INICIO</a></li>
                <li><a href="blog.php"><span class="uk-margin-small-right" uk-icon="icon:  file-edit" uk-scroll></span>Blog</a></li>
                <li><a href="portafolioA.php"><span class="uk-margin-small-right" uk-icon="icon: phone"></span>PORTAFOLIO DE APPS</a></li>
                <li><a href="portafolioW.php"><span class="uk-margin-small-right" uk-icon="icon: desktop"></span>PORTAFOLIO WEB</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="contactame.php"><span class="uk-margin-small-right" uk-icon="icon: mail"></span>CONTACTAME</a></li>
            </ul>
        </div>
    </div>