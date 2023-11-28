<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../STYLES/estilos.css">
    
</head>
<body>
    <div class="contenidoLogin">
        <form method="post">
            <div id="infologin">
                <label id="tituloLogin">LOGIN</label>
                <div id="divUsuario">
                    <div id="lblNombreUsuario">
                        <label>Nombre de Usuario:</label>
                    </div>
                    <div id="txtNombreUsuario">
                        <input type="text" name="txtNombreUsuario">
                    </div>
                </div>
                <div id="divContraseña">
                    <div id="lblContraseña">
                        <label>Contraseña:</label>
                    </div>
                    <div id="txtContraseña">
                        <input type="text" name="txtNombreUsuario">
                    </div>
                </div>
                <div id="divBotones">
                    <div id="btnAcceder">
                        <input type="submit" value="Acceder" name="btnAcceder" id="btnAcceder">
                    </div>
                    <div id="txtNombreUsuario">
                        <input type="submit" value="Registrarse" name="btnRegistro" id="btnRegistro">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>