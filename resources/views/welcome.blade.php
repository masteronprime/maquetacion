<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maquetacion</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://www.dafontfree.net/embed/cGFsYXRpbm8tcm9tYW4tcmVndWxhciZkYXRhLzI2L3AvMTM3NzEwL3BhbHRuLnR0Zg"
        rel="stylesheet" type="text/css" />
    <link href="https://www.dafontfree.net/embed/cGFsYXRpbm8tYm9sZCZkYXRhLzI2L3AvMTM3Njg3L1BBTEFUMzIudHRm"
        rel="stylesheet" type="text/css" />
    <link
        href="https://www.dafontfree.net/embed/YWNhZGVteS1lbmdyYXZlZC1sZXQtcGxhaW4mZGF0YS8xMy9hLzY0MzEzLzQ2MTUyX19fLlRURg"
        rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="card">
        <nav class="navbar navbar-light " id="navbar">
            <a class="navbar-brand">
                <img src="/image/imagen.jpg"></a>
            </a>

            <ul class="nav justify-content-end">


                <li class="nav-item" id="nav1">
                    <a class="nav-link active" href="#" id="m"><span class="resaltado2">Inicio</span></a>
                </li>
                <li class="nav-item" id="nav2">

                    <a class="nav-link" href="#"><span class="resaltado2">Nosotros</span></a>
                </li>
                <li class="nav-item dropdown" id="nav3">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span class="resaltado2">Cursos</span></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>

                    </div>
                </li>




            </ul>
            <a class="navbar-brand" id="cabecera">
                <img src="/image/cabeceraimg.jpg" width=200 height=70></a>
            </a>
        </nav>
    </div>
    <div class="container">
        <div class="contenedor1">
            <img class="chica" src="/image/chica.jpg">
            <div class="container">
                <div class="opciones">
                    <div class="container">
                        <div class="textocuadro">
                            <h3>Quiero seguir creciendo laboralmente</h3>
                            <h3 class="nombre1">Nombre</h3>
                            <div class="formulario">
                                <form method="POST" action="{{ route('users.registration') }}">
                                    @csrf
                                    <!-- Agrega el campo CSRF para protección contra falsificación de solicitudes -->
                                    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                                    <input type="text" name="apellido" id="apellido" placeholder="Apellido">
                                    <input type="text" name="correo" id="correo" placeholder="Correo electrónico">
                                    <input type="text" name="numero" id="numero" placeholder="Número de teléfono"></br>
                                    <div class="enviar">
                                        <button type="submit" id="enviar">Enviar</button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="pagina1">

                    <h1 id="titulo1">Curso Profesional <br>de SEO</h1>
                    <h2 id="texto1"> ¡Posiciona sitios web en los buscadores <br> mas usados del mundo!</h2>
                </div>

                <div class="container">
                    <div class="imagenes">

                        <ul>


                            <a>
                                <img src="/image/google.jpg" hight=140 width=110>
                            </a>
                            <a>
                                <img src="/image/bing.jpg" hight=140 width=110 class="yahoo">
                            </a>

                            <a>
                                <img src="/image/yahoo.jpg" hight=140 width=110 class="yahoo">
                            </a>



                        </ul>
                    </div>
                </div>

            </div>


            <div class="figura2">
                <h1 class="textofigura2">INCIO: 00 de mayo</h1>
            </div>

            <div class="contenedortexto2">
                <P class=texto2><span class="resaltado">04</span> Semanas</P>
                <P class=texto2><span class="resaltado">16</span> Horas</P>
                <P class=texto2><span class="resaltado">100%</span> Online</P>
            </div>
            <div class="texto3">
                <h3 class="textoh3">Destaca en el mundo laboral adquiriendo habilidades en posicionamiento orgánico en buscadores.</h3>


            </div>
        </div>


    </div>
<div class="container">
    <div class="contenedor2">
        <h1 class="titulo2">¿Quieres mejorar tus habilidades y </br>
              tener éxito en el mercado laboral? </h1>
        <div class="texto2pag2">
            <!--palatino roman-->
        La visibilidad orgánica en motores de búsqueda es un tema esencial para toda marca o empresa</br>
        </br> 
        Estar en la primera página de resultados orgánicos en los 
        buscadores más utilizados le dará a cualquier proyecto el impulso 
        necesario para crear un canal de adquisición de tráfico a la par de
        otros canales e incrementar la visibilidad, tráfico y oportunidades
        de ventas 

        </div>
       <div class="figura3">
         <img src="/image/comillas.jpg" class="comillas">
        
       </div>
















    </div>
</div>
<div class="contenedor3">
    <img src="/image/imagenlaptop.jpg" class="laptop">
    <div class="contenedortexto3">
        <h1 class="texto4">Sobre el curso profesional de SEO</h1>
        <h3 class="h3text1">En nuestro Curso Profesional de SEO exploraremos los conceptos, herramientas, técnicas y métodos para planificar, diseñar y lanzar una estrategia SEO que impulse la visibilidad de la marca en los principales buscadores web.
       </h3>
       
    </div>
    <div class="wps">
         Escribenos al </br> WhatsApp
         <img src="/image/whatsappp.jpg" class="telefono" width=30 height=30>

       </div>
    <div class="canales">
        <span class="canal">Canal de Ventas </span> </br>01 000 0009
         <img src="/image/telefono.jpg" class="telefono" width=30 height=30>

    </div>

</div>
<div class="container">
    <div class="contenedor4">
        <img src="/image/logo1.jpg"class="logo1">
        <div class="logo1texto">
            <h1 class="textologo1">Certificado a nombre de la nacion</h1></br> 
            <h3 class="texto2logo1">Cuando finalices cualquiera de nuestros cursos</br> obtendrás un certificado
                 avalado por ISAM.</br><span class="remarcar">Somos  un instituto licenciado por MINEDU</span></h3>


        </div>
        <img src="/image/logo2.jpg"class="logo2">
        <div class="logo1texto2">
            <h1 class="textologo2">Certificado a nombre de la nacion</h1></br> 
            <h3 class="texto2logo2">Cuando finalices cualquiera de nuestros cursos</br> obtendrás un certificado
                 avalado por ISAM.</br><span class="remarcar2">Somos  un instituto licenciado por MINEDU</span></h3>


        </div>
        <div 






</div>




</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>