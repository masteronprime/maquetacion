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


    <div class="card" id="inicio-container">
        <nav class="navbar navbar-light " id="navbar">

            <a class="navbar-brand">
                <img src="/image/logoempresa.png" width="150px" height="40px">
            </a>

            <ul class="nav justify-content-end">


                <li class="nav-item" id="nav1">
                    <a class="nav-link active" href="#" id="inicio-link"><span class="resaltado2">Inicio</span></a>
                </li>
                <li class="nav-item" id="nav2">
                    <a class="nav-link" href="#" id="nosotros-link"><span class="resaltado2">Nosotros</span></a>
                </li>
                <li class="nav-item dropdown" id="nav3">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span class="resaltado2">Cursos</span></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#" id="curso-link">Sobre el curso</a>
                        <a class="dropdown-item" href="#" id="certificados-link">Certificados</a>
                        <a class="dropdown-item" href="#" id="aprender-link">¿Que aprenderas?</a>

                    </div>
                </li>




            </ul>
            <a class="navbar-brand" id="cabecera">
                <img src="/image/cabeceraimg.jpg" class="logoempresa"></a>
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
                            <h3 class="textocuadrot">Quiero seguir creciendo laboralmente</h3>

                            <div class="formulario">
                                <form method="POST" action="{{route('users.registration') }}">
                                    @csrf
                                    <!-- Agrega el campo CSRF para protección contra falsificación de solicitudes -->
                                    <h3 class="nombre1">Nombre</h3>
                                    <input type="text" name="nombre" id="nombre" class="nombre">
                                    <h3 class="nombre1">Apellido</h3>
                                    <input type="text" name="apellido" id="apellido" class="apellido">
                                    <h3 class="nombre1">Correo</h3>
                                    <input type="text" name="correo" id="correo" class="correo">
                                    <h3 class="nombre1">Celular</h3>
                                    <input type="text" name="numero" id="numero" class="numero"></br>
                                    <div class="enviar">
                                        <input type="checkbox" name="informacion" id="informacion"><span
                                            class="mensaje">Deseo recibir información de ofertas y
                                            promociones</br></span></input>
                                        <input type="checkbox" name="politica" id="politic"><span class="mensaje">Acepto
                                            la Política de protección de datos</br></span></input>
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
                    ¡Posiciona sitios web en los buscadores <br> mas usados del mundo!
                </div>

                <div class="container">
                    <div class="imagenes">

                        <ul>


                            <a>
                                <img src="/image/google.png" hight=120 width=70 class="google">
                            </a>
                            <a>
                                <img src="/image/bing.png" hight=120 width=70 class="bing">
                            </a>

                            <a>
                                <img src="/image/yahoo.png" hight=120 width=70 class="yahoo">
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
                Destaca en el mundo laboral adquiriendo habilidades en posicionamiento orgánico en
                buscadores.


            </div>
        </div>
    </div>


    <div class="container" id="nosotros-container">
        <div class="contenedor2">
            <h1 class="titulo2">¿Quieres mejorar tus habilidades y tener éxito en el mercado laboral?</h1>
            <div class="texto2pag2">
                La visibilidad orgánica en motores de búsqueda es un tema esencial para toda marca o empresa.<br><br>
                Estar en la primera página de resultados orgánicos en los buscadores más utilizados le dará a cualquier
                proyecto el impulso necesario para crear un canal de adquisición de tráfico a la par de otros canales e
                incrementar la visibilidad, tráfico y oportunidades de ventas.
            </div>
            <div class="figura3">
                <img src="/image/comillas.jpg" class="comillas">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="530px"
                    height="309px">
                    <path fill-rule="evenodd" stroke="rgb(250, 189, 4)" stroke-width="2px" stroke-linecap="butt"
                        stroke-linejoin="miter" fill="none"
                        d="M33.208,2.000 L482.847,2.000 C507.139,2.000 527.000,21.659 527.000,45.583 L527.000,271.330 C527.000,291.695 509.011,306.943 486.991,305.650 L75.867,281.500 C57.361,280.413 40.020,264.614 36.970,245.994 L3.422,41.203 C-0.105,19.670 13.142,2.000 33.208,2.000 Z" />
                </svg>
                <div class="figuratexto">
                    <h3>Más de 3,5 mil millones de usuarios usan </br>Google cada mes".</h3>
                     </br>
                    <h3 id="h3mod2">Fuente: Internet Live Stats</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedorprincipal4">
        <div class="container">
            <div class="contenedor3" id="curso-container">
                <img src="/image/imagenlaptop.jpg" class="laptop">
                <div class="contenedortexto3">
                    <h1 class="texto4">Sobre el curso profesional de SEO</h1>
                    <h3 class="h3text1">En nuestro <span class="h3mod">Curso Profesional de SEO </span>exploraremos los
                        conceptos, herramientas, técnicas y
                        métodos para planificar, diseñar y lanzar una estrategia SEO que impulse la visibilidad de la
                        marca en
                        los principales buscadores web.
                    </h3>

                </div>
                <a href="https://web.whatsapp.com">
                <div class="wps">
                    Escribenos al </br> WhatsApp
                    <img src="/image/whatsappp.jpg" class="telefono" width=30 height=30>

                </div>
                </a>
                <a href="#">
                <div class="canales">
                    <span class="canal">Canal de Ventas </span> </br>01 000 0009
                    <img src="/image/telefono.jpg" class="telefono" width=30 height=30>

                </div>
                </a>
            </div>
        </div>

    </div>

    <div class="container" id="certificados-container">
        <div class="contenedor4">
            <img src="/image/logo1.jpg" class="logo1">
            <div class="logo1texto">
                <h1 class="textologo1">Certificado a nombre de la nacion</h1></br>
                <h3 class="texto2logo1">Cuando finalices cualquiera de nuestros cursos</br> obtendrás un certificado
                    avalado por ISAM.</br><span class="remarcar">Somos un instituto licenciado por MINEDU</span></h3>


            </div>
            <img src="/image/logo2.jpg" class="logo2">
            <div class="logo1texto2">
                <h1 class="textologo2">Certificado a nombre de la nacion</h1></br>
                <h3 class="texto2logo2">Cuando finalices cualquiera de nuestros cursos</br> obtendrás un certificado
                    avalado por ISAM.</br><span class="remarcar2">Somos un instituto licenciado por MINEDU</span></h3>


            </div>

            <div class="figura4">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500px"
                    height="759px" class=figural>
                    <path fill-rule="evenodd" fill="rgb(250, 189, 4)"
                        d="M32.655,33.265 L454.325,0.120 C479.419,-1.853 499.986,17.545 499.986,43.258 L499.986,726.214 C499.986,746.004 482.128,760.061 460.308,757.772 L88.375,718.754 C70.487,716.877 54.853,701.007 53.291,683.177 L0.186,76.945 C-1.784,54.458 12.660,34.836 32.655,33.265 Z" />
                </svg>
                <img src="/image/exclamacion.png" class="exclamacion">
                <h1 class="textofigurasvg">Beneficios:</h1>
                <div class="svgtexto1">

                    Las habilidades SEO que adquirirás </br> en nuestro curso,
                    te permitirán </br> llegar a un amplio número de </br>usuarios mediante contenidos de </br> valor
                    que serán rastreados e </br>indexados por los buscadores para </br>ser presentados en el momento </br> preciso y
                    a las personas correctas.
                    Aprender SEO te ayudará a:
                    

                </div>
                <div class="listatexto">
                    <img src="/image/check2.png" class="check2"></br>
                    <img src="/image/check2.png" class="check2"></br>
                    <img src="/image/check2.png" class="check2"></br>
                    <img src="/image/check2.png" class="check2"></br>
                    <img src="/image/check2.png" class="check2">
                    <div class="textolista">
                    Plantear metas acordes a las necesidades del proyecto.</br>
                    </br>
                    Auditar sitios web para corregir y optimizar el SEO.</br>
                    </br>
                    Crear estrategias de contenido para ganar visibilidad en los buscadores web.</br>
                    </br>
                   Analizar las métricas y optimizar según los datos generados de la estrategia.</br>
                   </br>
                    Generar reportes de resultados con indicadores acordes al negocio.</br>
                    </br>

                </div>
                </div>
            

            </div>
            <div class=svg2>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="822px"
                    height="297px">
                    <path fill-rule="evenodd" opacity="0.102" fill="rgb(0, 0, 0)"
                        d="M82.058,0.891 L789.390,0.046 C810.768,0.021 824.978,18.200 821.257,40.612 L790.382,226.554 C786.725,248.578 766.614,267.089 745.339,267.942 L42.221,296.108 C16.214,297.150 -2.361,278.149 0.901,253.616 L28.468,46.281 C31.794,21.266 55.864,0.922 82.058,0.891 Z" />
                </svg>
                <h1 class="titulosvg2">
                    Triple certificacion:
                </h1>
                <div class="imagenessvg2">
                    <ul>


                        <a>
                            <img src="/image/imagenessvg.jpg" class="svgimg">
                        </a>
                        <a>
                            <img src="/image/imagenessvg2.jpg" class="svgimg2">
                        </a>

                        <a>
                            <img src="/image/imagenessvg3.jpg" class="svgimg3">
                        </a>



                    </ul>
                    <h1 class="titulosvg3">
                        Certificacion a nombre de la nacion
                    </h1>


                </div>
            </div>

        </div>
    </div>
    <div class="container" id="aprender-container">
        <div class="contenedor5">
            <div class=textocont5>
                ¿Qué aprenderás en el Curso
                Profesional de SEO?
            </div>
            <div class="texto1cont5">
                Aproveche los beneficios de poder atraer nuevos clientes a su negocio y aprender cómo emplear estas
                herramientas de publicidad para mejorar su empleabilidad o hacer crecer su proyecto.

            </div>
            <div class="figuras3">
                <div class="rectangulo1">
                    <img src="/image/compu.jpg" width="100px" height="100px" class="compu">
                    <div class="textocompu">
                        <h1 class="tcompu">Fundamentos</h1>

                        Conocerás y aprenderás sobre los términos y
                        conceptos necesarios para implementar estrategias de marketing
                        enfocadas en SEO.

                    </div>


                </div>
                <div class="rectangulo2">
                    <img src="/image/img2.jpg" width="80px" height="120px" class="compu">
                    <div class="textocompu">
                        <h1 class="tcompu">Auditoria</h1>
                        Aprenderás a establecer los criterios necesarios para determinar una
                        hoja de ruta en la optimización SEO de sitios </br>web

                    </div>

                </div>
                <div class="rectangulo3">
                    <img src="/image/img3.jpg" width="100px" height="100px" class="compu">
                    <div class="textocompu">
                        <h1 class="tcompu">SEO ON page</h1>
                        Entenderás cuáles son los criterios de </br>contenidos a nivel de página para poder
                        posicionar contenidos en los buscadores.
                        Aprenderás a usar herramientas de</br> vanguardia como ChatGPT.

                    </div>

                </div>
                <div class="rectangulo4">
                    <img src="/image/img4.jpg" width="100px" height="100px" class="compu">
                    <div class="textocompu">
                        <h1 class="tcompu">Medición </h1>

                        Profundizarás un poco más en las </br> métricas generadas en las estrategias</br> para
                        tomar decisiones basadas en datos.

                    </div>

                </div>
                <div class="botton3">
                    <button type="submit" class="btn">
                        <img src="/image/btn.jpg" width="23px" height="25px">
                        Ver silabo del curso
                    </button>
                </div>
            </div>
        </div>
    </div>






    </div>

    </div>

    <div class="container">
        <div class="contenedor6">
            <img src="/image/personas.png" class="personas">
            <h1 class="personastext">¿Para quien es este curso?</h1>
            <div class="ul">
            <ul>
                <img src="/image/check.png" class="checkfinal">
                Trabajadores independientes</br>
                <img src="/image/check.png" class="checkfinal">
                Emprendedores</br>
                <img src="/image/check.png" class="checkfinal">
                Estudiantes de marketing</br>
                <img src="/image/check.png" class="checkfinal">
                Comerciantes</br>
                <img src="/image/check.png" class="checkfinal">
                Analistas de marketing
            </ul>
            </div>
            <div class="ul1">
                <ul>
                    <img src="/image/check.png" class="checkfinal">
                    Practicante de marketing </br>
                    <img src="/image/check.png" class="checkfinal">
                    Community Manager</br>
                    <img src="/image/check.png" class="checkfinal">
                    Creadores de contenidos</br>
                    <img src="/image/check.png" class="checkfinal">
                    Influencers,entre otros 



                </ul>
            </div>
        </div>


    </div>
    <div class="contenedorpadre">
        <div class="container">

            <div class="containersub1">

                <div class=textocont6>
                    Sobre los docentes especialistas
                </div>
                <img src="/image/ing.jpg" class="ing">


                <div class=textocont7>
                    <h1 class="tituloing"> Ing. Andruz Legro</h1>
                    <span class=textonegro> Especialista SEO</br>
                        </br>
                        Tengo más de 7 años de experiencia en el diseño, desarrollo e implementación
                        de </br> estrategias SEO para la creación de canales de adquisición orgánicos.</span>


                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="contenedor7">

            <h1 class="texto5">Preguntas frecuentes sobre el </h1>
            <h1 class="texto6">Curso Profesional de Marketing en Buscadores</h1>
            <button class="botton4" type="submit" id="hide_text_btn">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px"
                    height="36px" class="numero1">
                    <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)"
                        transform="matrix( 2.09903674939749, 0, 0, 2.0990367493975,6.06979192930868, 35.8418123698784)"
                        font-size="25px">
                        <tspan font-size="25px" font-family="Palatino" font-weight="bold" fill="#FFFFFF">&#49;</tspan>
                    </text>
                </svg>
                <span class="textop">¿Cómo me ayudaría este curso a mejorar mi perfil profesional?
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px"
                    height="4px" class="menos">
                    <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)"
                        transform="matrix( 2.95080439713029, 0, 0, 2.95080439713039,1.30741428199485, 18.2279487820188)"
                        font-size="20px">
                        <tspan font-size="20px" font-family="Palatino" fill="#FFFFFF">&#45;</tspan>
                    </text>
                </svg>

            </button>
            <span class="ptexto2" id="hide_text">
                <h3 class="ptextoprincipal">
                    <span class="ptexto3">Dominar el SEO te ayudará a tener habilidades altamente demandadas en el
                        mercado
                        laboral actual.</span>
                    Podrás plantear estrategias de posicionamiento orgánico en buscadores para cualquier tipo de empresa
                    o
                    proyecto personal.
                </h3>
            </span>
            <button class="botton5" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="35px" class="numero2">
                    <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)"
                        transform="matrix( 2.09903674939749, 0, 0, 2.0990367493975,1.45443937102698, 35.3418123698784)"
                        font-size="25px">
                        <tspan font-size="25px" font-family="Palatino" font-weight="bold" fill="#FABD04">&#50;</tspan>
                    </text>
                </svg>
                <span class="textop">¿Cómo me ayudaría este curso a mejorar mi perfil profesional?
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"
                    height="30px" class="mas">
                    <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)"
                        transform="matrix( 2.95080439713029, 0, 0, 2.95080439713039,0.36991179902793, 31.1704080962745)"
                        font-size="20px">
                        <tspan font-size="20px" font-family="Palatino" fill="#FFFFFF">&#43;</tspan>
                    </text>
                </svg>
            </button>
            <button class="botton6" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px"
                    height="36px" class="numero3">
                    <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)"
                        transform="matrix( 2.09903674939749, 0, 0, 2.0990367493975,1.2692948834366, 35.8418123698784)"
                        font-size="25px">
                        <tspan font-size="25px" font-family="Palatino" font-weight="bold" fill="#FABD04">&#51;</tspan>
                    </text>
                </svg>
                <span class="textop">¿Cómo me ayudaría este curso a mejorar mi perfil profesional?
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"
                    height="30px" class="mas1">
                    <text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)"
                        transform="matrix( 2.95080439713029, 0, 0, 2.95080439713039,0.36991179902793, 31.1704080962745)"
                        font-size="20px">
                        <tspan font-size="20px" font-family="Palatino" fill="#FFFFFF">&#43;</tspan>
                    </text>
                </svg>
            </button>

        </div>
    </div>
    <div class="contenedorfinal">
        <div class="container">
            <div class="contenedor8">
                <div class="textofinal">
                    Colaboramos con marcas y personas ambiciosas; nos encantaría construir algo juntos.
                    Para comenzar, comuníquese con Andruz Legro al: </br>
                    </br>
                    <a href="mailto:info@isamlab.edu.pe" class="msjcorreo">info@isamlab.edu.pe.</a></br>
                    </br>
                    <span class=horario>Horario de atencion:</span></br>
                    08:00-17:PM
                </div>
                <div class="lista3">
                    <ul>
                        <a href="#" id="inicio2-link">
                            <li><span class="Inicio">Inicio</span></li>
                        </a>
                        <a href="#" id="nosotros2-link">
                            <li><span class="Inicio">Nosotros</span></li>
                        </a>
                        <a href="#" id="curso2-link">
                            <li><span class="Inicio">Cursos</span></li>
                        </a>
                    </ul>
                </div>
                <div class="what2">
                <img src="/image/whats.png" class="whats2">
                <span class="textowps">904 789 982</span>

                </div>
                <div class="rounded-circle" id="circle">
                    <img src="/image/vector.png" class="vector">
                  


                </div>
             
            </div>



        </div>

    </div>
    <div class="contenedorpadre3"> 
        <div class="container">
          <div class="contenedor10">
          <img src="/image/logoempresa.png" width="150px" height="30px" id="logofinal">
          <a href="#" id="derechos">© 2023 ISAM LAB. Reservados todos los derechos.</a>
          <div class="links">
          <ul>
          <a href="https://www.facebook.com/">
          <img src="/image/facebook.png" alt="Enlace a Facebook">
          </a>
          <a href="https://www.linkedin.com/">
          <img src="/image/linke.png" alt="Enlace a LinkedIn">
          </a>

          <a href="https://www.instagram.com/">
          <img src="/image/instagram.png" alt="Enlace a Instagram">
          </a>
          </ul>
          </div>
          </div>
         



        </div>


    </div>







</body>
<!--parte de la importacion de archivos para redirgirnos a un contenedor especifico-->
<script src="{{ asset('js/inicio.js') }}"></script>
<script src="{{ asset('js/nosotros.js') }}"></script>
<script src="{{ asset('js/certificados.js') }}"></script>
<script src="{{ asset('js/curso.js') }}"></script>
<script src="{{ asset('js/aprender.js') }}"></script>
<script src="{{ asset('js/inicio2.js') }}"></script>
<script src="{{ asset('js/nosotros2.js') }}"></script>
<script src="{{ asset('js/curso2.js') }}"></script>
<script src="{{ asset('js/hide.js') }}"></script>

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