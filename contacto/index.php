<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>a-LearningMX</title>
    <link rel="icon" href="../images/brainy.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://kit.fontawesome.com/a684445abf.js" crossorigin="anonymous"></script>
    
    <meta property="og:description" content="Contacto" />
    <meta property="og:image" content="http://a-learningmx.com/images/portada-fb.jpg" />
</head>
<body>
    <header>
        <div id="titulo">
            <!-- <img src="../images/02-logo-hor.png" id="heading-icon"> -->
            <!-- <h1></span><span class="title">a-LEARNINGMX</span></h1> -->
            <!-- <h1>Hola</h1> -->
        </div>
        
        <nav class="navbar navbar-inverse" id="navbar-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#">a-LEARNINGMX</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../">Inicio</a></li>
                    <li><a href="../nlc.html">Qué es NLC</a></li>
                    <li><a href="../mi-historia/">Mi Historia</a></li>
                    <li><a href="../servicios.html">Servicios</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Recursos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../recursos/productos.html">Productos</a></li>
                            <li><a href="../recursos/juegos.html">Juegos en línea</a></li>
                        </ul>
                    </li>
                    <li><a href="../blog/">Blog</a></li>                    
                    <li><a href="#">Contacto</a></li>
                </ul>
                
              </div>
            </div>
          </nav>
    </header>
    
    <main id="content">

        <div id="wrapper" class="contacto">

            <div class="contenido">
                <div class="form-header">
                    <h2>Contacto</h2>
                    <p>Déjame tus datos y un comentario y me pondré en contacto contigo para aclarar cualquier duda sobre los cursos o materiales de apoyo.</p>
                </div>
                <form action="contacto.php" method="post">
                    <div class="form-row">
                        <label for="nombre" class="form-label">Nombre Completo</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Tu nombre completo">
                    </div>
                    <div class="form-row">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" name="email" id="email" placeholder="Correo electrónico">
                    </div>
                    <div class="form-row">
                        <label for="pais" class="form-label">País</label>
                        <input type="text" name="pais" id="pais" placeholder="Tu país">
                    </div>
                    <div class="form-row">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <input type="text" id="ciudad" name="ciudad" placeholder="Tu ciudad">
                    </div>
                    <div class="form-row">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" id="telefono" name="tel" placeholder="Teléfono">
                    </div>
                    <div class="form-row">
                        <label for="ocupacion" class="form-label">Ocupación</label>
                        <input type="text" id="ocupacion" name="ocupacion" placeholder="Ocupación">
                    </div>
                    <div class="comment">
                        <label for="comentario" class="form-label">Comentario</label>               
                        <textarea id="comentario" name="mensaje" placeholder="Cuéntame en pocas palabras qué te interesa: cursos, de qué nivel; materiales y otro tipo de duda"></textarea>
                    </div>
                    <fieldset>
                        <legend>¿Por qué medio te enteraste?</legend>
                        <div>
                            <div class="opcion">
                                <input type="radio" id="facebook" name="medio" value="Facebook">                    
                                <label for="facebook">Facebook</label>
                            </div>
                            <div class="opcion">
                                <input type="radio" id="google" name="medio" value="Google">
                                <label for="google">Google</label>
                            </div>
                            <div class="opcion">
                                <input type="radio" id="recomendacion" name="medio" value="Recomendación">
                                <label for="recomendacion">Recomendación</label>
                            </div>
                            <div class="opcion">
                                <input type="radio" id="linkedin" name="medio" value="LinkedIn">
                                <label for="linkedin">LinkedIn</label>
                            </div>
                        </div>
                        <div class="otro">
                            <label for="otro" class="form-label">Otro</label>
                            <input type="text" id="otro" name="otro" placeholder="¿Otro medio?">
                        </div>
                    </fieldset>
                    <div class="botones">
                        <button type="submit" name="submit" id="submit-btn">Enviar</button>
                        
                    </div>
                    <p id="whats"><img src="../images/whatsapp.png"> También puedes contactarme por Whatsapp: (+52) 55 2728 4144</p>
                    <a href="../aviso-de-privacidad.html" style="text-align:right;">Lee nuestro aviso de privacidad</a>
                </form>
            </div>
        </div>

    </main>    

    <footer>
        <div class="ft-1">
            <div class="icons">
                <ul>
                    <li><a href="https://www.facebook.com/alearningmx/" class="icono-social fab fa-facebook"></a></li>
                    <li><a href="https://www.linkedIn.com/in/marcela-grobet-vallarta-a1655336" class="fab fa-linkedin"></a></li>
                    <li><a href="mailto:coachmarcela@a-learningmx.com" class="icono-social far fa-envelope"></a></li>
                </ul>
            </div>
            <a href="aviso-de-privacidad.html">Aviso de privacidad</a>
        </div>
        <div class="ft-2">
            <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>.</div>
            <div>&copy; a-LearningMX 2020, todos los derechos reservados.</div>
            <div>Diseño de imagen: <a href="mailto:hennahstudio@gmail.com">Sandra PHi</a>.</div>
            <div>Sitio web desarrollado por <a href="mailto:pablosgrobet@gmail.com">Pablo Sánchez Grobet</a>.</div>
        </div>
    </footer>


    <script src="../js/main.js" defer></script>
</body>
</html>