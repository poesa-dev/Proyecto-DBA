<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: autenticacionbasica.php");
    exit();
}

$usuario = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lenguajes Interpretados en el Servidor</title>

    <link rel="stylesheet" href="estilos.css">

</head>

<body>

<div class="contenedor">

    <header>

        <h1>Lenguajes Interpretados en el Servidor</h1>

        <div class="usuario">

            Bienvenido:
            <strong><?php echo htmlspecialchars($usuario); ?></strong>

            <a href="logout.php" class="boton">
                Cerrar sesión
            </a>

        </div>

    </header>

    <section>

        <h2>Clases</h2>

        <ul>

            <li>
                <a href="https://www.udb.edu.sv/udb_files/recursos_guias/informatica-ingenieria/lenguajes-interpretados-en-el-servidor-(ingenieria)/2020/i/guia-1.pdf"
                target="_blank">

                Clase 01: Programación web del lado del servidor

                </a>
            </li>

            <li>
                <a href="http://www.mediafire.com/download/4le9g50t1d3wng1/Clase+02+-+Introducci%C3%B3n+a+la+programaci%C3%B3n+y+sintaxis+de+PHP+-+2025.pdf"
                target="_blank">

                Clase 02: Introducción a la programación y sintaxis de PHP

                </a>
            </li>

            <li>
                <a href="http://www.mediafire.com/download/9zg2du274b6d3fu/Clase+03+-+Estructuras+de+control+sentencias+condicionales+y+repetitivas+-+2025.pdf"
                target="_blank">

                Clase 03: Estructuras de control - Sentencias condicionales y repetitivas

                </a>
            </li>

        </ul>

    </section>

    <section>

        <h2>Guías de práctica</h2>

        <ul>

            <li>
                <a href="https://www.udb.edu.sv/udb_files/recursos_guias/informatica-ingenieria/lenguajes-interpretados-en-el-servidor-(ingenieria)/2020/i/guia-2.pdf"
                target="_blank">

                Guía 02: Introducción a la Programación Web con PHP

                </a>
            </li>

            <li>
                <a href="https://www.udb.edu.sv/udb_files/recursos_guias/informatica-ingenieria/lenguajes-interpretados-en-el-servidor-(ingenieria)/2020/i/guia-3.pdf"
                target="_blank">

                Guía 03: Estructuras de Control

                </a>
            </li>

            <li>
                <a href="https://www.udb.edu.sv/udb_files/recursos_guias/informatica-ingenieria/lenguajes-interpretados-en-el-servidor-(ingenieria)/2020/i/guia-11.pdf"
                target="_blank">

                Guía 11: Protocolo HTTP, Autenticación de usuarios, cookies y sesiones

                </a>
            </li>

        </ul>

    </section>

    <section>

        <h2>Sitios Web</h2>

        <ul>

            <li>

                <a href="https://www.php.net/manual/es/"
                target="_blank">

                Sitio oficial de PHP

                </a>

            </li>

            <li>

                <a href="https://www.php.net/docs.php"
                target="_blank">

                Documentación de PHP

                </a>

            </li>

        </ul>

    </section>

</div>

</body>
</html>