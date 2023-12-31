<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div>
                <h3>LOGO</h3>
            </div>
            <ul>
                <li>Inicio</li>
                <li>Nosotros</li>
                <li>Servicios</li>
                <li>Contactos</li>
            </ul>
        </nav>
    </header>
    
    <section>
        <div class="container">
            <h1>Formulario</h1>
        </div>
    </section>

    <section>
        <div class="container">
            <form id="myForm">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
</body>
</html>