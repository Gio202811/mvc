<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="/css/login.css">
</head>

<body>

    <div class="login-container">

        <div class="login-card">

            <div class="login-header">
                <h1>Bienvenido</h1>
                <p>Inicia sesión para continuar</p>
            </div>

            <form action="/login" method="POST" id="loginForm">

                <div class="input-group">
                    <label for="email">Correo electrónico</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="correo@ejemplo.com"
                        required>
                </div>

                <div class="input-group">
                    <label for="password">Contraseña</label>

                    <div class="password-box">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="********"
                            required>

                        <button type="button" id="togglePassword">
                            👁
                        </button>
                    </div>
                </div>

                <div class="options">
                    <label>
                        <input type="checkbox">
                        Recordarme
                    </label>

                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>

                <button type="submit" class="btn-login">
                    Iniciar Sesión
                </button>

            </form>

        </div>

    </div>

    <script src="/js/login.js"></script>

</body>

</html>