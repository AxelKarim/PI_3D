<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión y Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #001eff, #ff9900);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco con 80% de transparencia */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: center;
        }

        h2 {
            color: #000000;
            margin-bottom: 30px;
            font-size: 24px;
        }

        label {
            font-size: 14px;
            color: #333;
            display: block;
            text-align: left;
            margin-bottom: 8px;
        }

        input[type="text"], input[type="email"], input[type="password"], input[type="date"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #354eb4;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #354eb4;
        }

        .link {
            text-align: center;
            margin-top: 15px;
        }

        .link a {
            color: #000000;
            text-decoration: none;
            font-size: 14px;
        }

        .link a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            font-size: 12px;
            display: none;
        }
    </style>
</head>
<body>

    <!-- Formulario de Inicio de Sesión -->
    <div class="container" id="loginForm">
        <h2>Iniciar Sesión</h2>
        <form>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
        <div class="link">
            <p>¿No tienes cuenta? <a href="#" onclick="showRegister()">Crea una cuenta</a></p>
            <p><a href="#" onclick="showForgotPassword()">¿Olvidaste tu contraseña?</a></p>
        </div>
    </div>

    <!-- Formulario de Registro -->
    <div class="container" id="registerForm" style="display: none;">
        <h2>Registro</h2>
        <form onsubmit="return validateForm()">
            <label for="firstName">Primer Nombre:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="secondName">Segundo Nombre:</label>
            <input type="text" id="secondName" name="secondName">

            <label for="lastName">Primer Apellido:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="secondLastName">Segundo Apellido:</label>
            <input type="text" id="secondLastName" name="secondLastName" required>

            <label for="emailRegister">Correo Electrónico:</label>
            <input type="email" id="emailRegister" name="emailRegister" required>

            <label for="passwordRegister">Contraseña:</label>
            <input type="password" id="passwordRegister" name="passwordRegister" required>

            <label for="confirmPassword">Confirmar Contraseña:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
            <span class="error" id="passwordError">Las contraseñas no coinciden</span>

            <label for="birthdate">Fecha de Nacimiento:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            <span class="error" id="dateError">Fecha inválida</span>

            <button type="submit">Registrar</button>
        </form>
        <div class="link">
            <p>¿Ya tienes una cuenta? <a href="#" onclick="showLogin()">Inicia Sesión</a></p>
        </div>
    </div>

    <!-- Formulario de Recuperar Contraseña -->
    <div class="container" id="forgotPasswordForm" style="display: none;">
        <h2>Recuperar Contraseña</h2>
        <form onsubmit="return validateEmail()">
            <label for="emailForgot">Correo Electrónico:</label>
            <input type="email" id="emailForgot" name="emailForgot" required>

            <button type="submit">Enviar enlace de recuperación</button>
        </form>
        <div class="link">
            <p><a href="#" onclick="showLogin()">Volver al inicio de sesión</a></p>
        </div>
    </div>

    <script>
        // Mostrar el formulario de registro
        function showRegister() {
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('registerForm').style.display = 'block';
            document.getElementById('forgotPasswordForm').style.display = 'none';
        }

        // Mostrar el formulario de inicio de sesión
        function showLogin() {
            document.getElementById('loginForm').style.display = 'block';
            document.getElementById('registerForm').style.display = 'none';
            document.getElementById('forgotPasswordForm').style.display = 'none';
        }

        // Mostrar el formulario de recuperación de contraseña
        function showForgotPassword() {
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('registerForm').style.display = 'none';
            document.getElementById('forgotPasswordForm').style.display = 'block';
        }

        // Validar el formulario de registro
        function validateForm() {
            let password = document.getElementById('passwordRegister').value;
            let confirmPassword = document.getElementById('confirmPassword').value;
            let birthdate = document.getElementById('birthdate').value;

            // Validar contraseñas
            if (password !== confirmPassword) {
                document.getElementById('passwordError').style.display = 'block';
                return false;
            } else {
                document.getElementById('passwordError').style.display = 'none';
            }

            // Validar fecha de nacimiento (entre hace 80 años y hasta el año 2006)
            let currentDate = new Date();
            let minDate = new Date(currentDate.getFullYear() - 80, currentDate.getMonth(), currentDate.getDate()); // Hace 80 años
            let maxDate = new Date(2006, 11, 31); // Hasta el 31 de diciembre de 2006

            let birthDateObject = new Date(birthdate);

            if (birthDateObject < minDate || birthDateObject > maxDate) {
                document.getElementById('dateError').style.display = 'block';
                return false;
            } else {
                document.getElementById('dateError').style.display = 'none';
            }

            return true; // Si todas las validaciones son correctas
        }

        // Validar el formulario de recuperación de contraseña
        function validateEmail() {
            let email = document.getElementById('emailForgot').value;
            if (email === "") {
                alert("Por favor, ingresa un correo electrónico válido.");
                return false;
            }
            alert("Se ha enviado un enlace de recuperación a tu correo.");
            return true;
        }

        // Configurar el rango permitido de fechas de nacimiento
        window.onload = function() {
            let dateInput = document.getElementById('birthdate');
            let currentDate = new Date();
            let minDate = new Date(currentDate.getFullYear() - 80, currentDate.getMonth(), currentDate.getDate()); // Hace 80 años
            let maxDate = new Date(2006, 11, 31); // Hasta el 31 de diciembre de 2006

            // Formato de fecha en yyyy-mm-dd
            dateInput.min = minDate.toISOString().split('T')[0];
            dateInput.max = maxDate.toISOString().split('T')[0];
        };
    </script>

</body>
</html>
