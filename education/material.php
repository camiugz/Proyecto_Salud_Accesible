<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Material Educativo</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body class="education">
    <header>
        <h1>Material Educativo sobre Enfermedades</h1>
        <nav>
            <ul>
                <li><a href="#cronicas">Enfermedades Crónicas</a></li>
                <li><a href="#diabetes">Diabetes</a></li>
                <li><a href="#hipertension">Hipertensión</a></li>
                <li><a href="#asma">Asma</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="cronicas">
            <h2>Enfermedades Crónicas</h2>
            <p>Aquí van documentos descargables con información sobre las enfermedades crónicas.</p>
        </section>

        <section id="diabetes">
            <h2>Diabetes</h2>
            <p>Aquí van documentos descargables con información sobre la diabetes...</p>
        </section>

        <section id="hipertension">
            <h2>Hipertensión</h2>
            <p>Aquí van documentos descargables con información sobre la hipertensión...</p>
        </section>

        <section id="asma">
            <h2>Asma</h2>
            <p>Aquí van documentos descargables con información sobre el asma...</p>
        </section>
        
        <section>
            <h2>Solicitar Documento</h2>
            <form>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>

                <label for="id">Cédula:</label>
                <input type="text" id="id" name="id" required>

                <label for="document">¿Sobre cuál enfermedad desea más información?</label>
                <textarea id="document" name="document" required></textarea>

                <button type="submit">Solicitar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>@2024 Salud Accesible. Todos los derechos reservados</p>
    </footer>
</body>
</html>

