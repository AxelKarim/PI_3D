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
    <section class="programas">
        <h2>Programas</h2>
        <div class="card-container">
            <div class="card">
                <img src="img/Inclusiva.jpg" alt="">
                <div class="card-content">
                    <h3>Educación Inclusiva para Todos</h3>
                    <div class="button-container">
                        <a href="post1.php" class="btn">Mas información</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="img/Fortalecimiento.jpg" alt="">
                <div class="card-content">
                    <h3>Fortalecimiento Educativo para Jóvenes en Riesgo</h3>
                    <div class="button-container">
                        <a href="#" class="btn">Mas información</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="img/Jodidos.jpg" alt="">
                <div class="card-content">
                    <h3>Conectividad y Tecnología en Zonas Rurales</h3>
                    <div class="button-container">
                        <a href="#" class="btn">Mas información</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="img/Oportunidades.jpg" alt="">
                <div class="card-content">
                    <h3>Acceso a Oportunidades para Todos</h3>
                    <div class="button-container">
                        <a href="#" class="btn">Mas información</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="img/Equidad.jpg" alt="">
                <div class="card-content">
                    <h3>Equidad en el Acceso a la Salud y la Educación</h3>
                    <div class="button-container">
                        <a href="#" class="btn">Mas información</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="img/Cohecion.jpg" alt="">
                <div class="card-content">
                    <h3>Diálogo y Cohesión Social</h3>
                    <div class="button-container">
                        <a href="#" class="btn">Mas información</a>
                    </div>
                </div>
            </div>
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