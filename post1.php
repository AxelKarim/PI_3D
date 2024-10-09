<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Integrado</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
    <header>
        <div class="logo">
            <img src="img/lotus-icon.png" alt="">
            <a href="#">Lotus</a>
        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="programs.php">Programas</a></li>
                <li><a href="login.php" class="active">Inicia Sesion</a></li>
            </ul>
        </nav>
    </header>

    <script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function() {
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
    </script>
    <section class="articulo">
        <div class="articulo-contenedor">
            <img src="img/Inclusiva.jpg" alt="Descripción de la imagen" class="articulo-imagen">
            <p></p>
            <h1>Educación Inclusiva para Todos</h1>
            <p class="introduccion">Este programa busca asegurar que todos los niños y jóvenes de Chandiablo, especialmente aquellos con discapacidades, pertenecientes a comunidades indígenas o en situaciones de vulnerabilidad, puedan acceder a una educación de calidad en igualdad de condiciones. El programa trabaja en la adaptación de escuelas para ser más accesibles, capacita a los docentes en metodologías inclusivas y proporciona materiales adaptados, como libros en braille y recursos en lenguaje de señas. Además, promueve espacios seguros dentro de las escuelas con apoyo psicológico para garantizar que los estudiantes se desarrollen en un entorno educativo integral.
            <h2>Objetivo:</h2>
            <p>Asegurar que niños y jóvenes con discapacidad, de comunidades indígenas o en situaciones de vulnerabilidad tengan acceso a una educación de calidad.
            <h2>Acciones:</h2>
            <p>Adaptación de escuelas para mejorar la accesibilidad física.</p>
            <p>Capacitación docente en pedagogía inclusiva.</p>
            <p>Distribución de material educativo adaptado (braille, lenguaje de señas, etc.).</p>
            <p>Creación de espacios seguros y de apoyo psicológico en escuelas.</p>
            <p></p>
            <h2>Fecha:</h2>
            <p>Este programa tendra una duracion de una semana y se llevara a cabo desde el Viernes 4 hasta el Viernes 11</p>
            <h2>Lugar y hora:</h2>
            <p>Se llevara a cabo en el Jardin de Chandiablo (Terraplena, 28840 Chandiablo, Col.)</p>
            <p>A partir de las 2 P.M hasta las 4 P.M</p>
        </div>
    </section>
    

    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="img/lotus-icon.png" alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>Sobre la Pagina</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, alias.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, at!</p>
            </div>
            <div class="box">
                <h2>Contactos</h2>
                <div class="correos">
                    <li><a href="#">e</a></li>
                    <li><a href="#">e</a></li>
                    <li><a href="#">e</a></li>
                    <li><a href="#">e</a></li>
                    <li><a href="#">e</a></li>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2024 <b>Lotus</b> - Todos los derechos reservados </small>
        </div>
    </footer>
    

</body>
</html>