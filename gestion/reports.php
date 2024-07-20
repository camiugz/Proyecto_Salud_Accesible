<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Panel de Control de Reportes</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body class="reports">
    <header>
        <h1>Panel de Control de Reportes Médicos</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Reportes Médicos</a></li>
                <li><a href="#">Configuración</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="dashboard">
            <h2>Panel de Control</h2>
            <p>Algo así se vería el conteo de reportes conectado a la base de datos</p>
            <div class="dashboard-info">
                <div class="info-box">
                    <h3>Total de Reportes</h3>
                    <p>0</p>
                </div>
                <div class="info-box">
                    <h3>Reportes Pendientes</h3>
                    <p>0</p>
                </div>
                <div class="info-box">
                    <h3>Últimos Reportes</h3>
                    <p>No hay reportes recientes.</p>
                </div>
            </div>
        </section>

        <section id="medical-reports">
            <h2>Reportes Médicos</h2>
            <button class="add-report-btn">Añadir Reporte</button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Paciente</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <p>Así se verían los reportes estéticamente con la información extraída de la base de datos</p>
                    <!-- Aquí irán los reportes añadidos en la base de datos -->
                    <tr>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td><a href="#">Ver</a> | <a href="#">Eliminar</a></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    
    <footer>
        <p>@2024 Salud Accesible. Todos los derechos reservados</p>
    </footer>
</body>
</html>


