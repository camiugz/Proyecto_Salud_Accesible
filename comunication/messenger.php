<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mensajería</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body class="messaging">
    <header>
        <h1>Mensajería</h1>
        <nav>
            <ul>
                <li><a href="#enviar">Enviar Mensaje</a></li>
                <li><a href="#recibidos">Mensajes Recibidos</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="enviar">
            <h2>Enviar Mensaje</h2>
            <div class="message-form-container">
                <form>
                    <label for="username">Nombre de Usuario:</label>
                    <input type="text" id="username" name="username" required placeholder="Tu nombre de usuario">

                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" required placeholder="Escribe tu mensaje aquí..."></textarea>

                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>

        <section id="recibidos">
            <h2>Mensajes Recibidos</h2>
            <!-- Aquí se va a añadir el código PHP para mostrar los mensajes recibidos desde la base de datos -->
            <p>Aquí se muestran</p>
        </section>
    </main>

    <footer>
        <p>@2024 Salud Accesible. Todos los derechos reservados</p>
    </footer>
</body>
</html>
