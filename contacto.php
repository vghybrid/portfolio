<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
    <header>
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link me-5" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-5" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-5" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="proyectos.php">ES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="en/proyects.php">EN</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Contacto</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
                </div>
                <div class="col-12 col-sm-6">
                    <form action="" method="post">
                        <div>
                            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                                class="form-control mb-3">
                        </div>
                        <div>
                            <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo"
                                class="form-control mb-3">
                        </div>
                        <div>
                            <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono"
                                class="form-control mb-3">
                        </div>
                        <div>
                            <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10"
                                placeholder="Escribe aquí tu mensaje" class="form-control"></textarea>
                        </div>
                        <div>
                            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn mt-4">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <footer class="footer mt-5 py-3 text-center text-sm-left">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                    <a href="www.linkedin.com/in/anderson-sarmiento-peña" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-12 col-sm-3">
                    Sponsor <a href="http://depcsuite.com">DePC Suite</a>
                </div>
                <div class="col-12 col-sm-3">
                    <a href="mailto:anderson.sarmiento13@gmail.com">anderson.sarmiento13@gmail.com</a>
                </div>
            </div>
        </div>
    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541122500780" target="_blank"
            title="Enviar mensaje directo Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>