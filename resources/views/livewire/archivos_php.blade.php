<div>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Estilos -->
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }

        .content-wrapper {
            flex-grow: 1;
            padding-top: 60px;
        }

        header {
            background-color: #0066cc;
            color: white;
            padding: 15px 0;
        }

        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .beneficios {
            margin-top: 30px;
        }

        .beneficios ul {
            padding-left: 0;
        }

        .beneficios li {
            font-style: italic;
            color: #666;
            margin-bottom: 10px;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        footer {
            background-color: #b6b6b6;
            padding: 30px 0;
            flex-shrink: 0;
            margin-top: 50px;
        }

        .footer_container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer_column {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .copyright {
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            main {
                padding: 20px;
            }

            .section-title {
                font-size: 24px;
            }

            .beneficios li {
                font-size: 16px;
            }

            .card-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <body>
        <div>
            <!-- navbar -->
            <div id="navbar-wrapper">
                <div class="containerNavbar">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Deportes</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/profile">Perfil</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="/dashboard">Dashboard</a>
                                    </li>
                                </ul>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <body>
                <header>
                    <h1>Bienvenido al Blog de Deportes</h1>
                </header>

                <main>
                    <div class="section-title">
                        <h2>El Impacto del Deporte: Fortaleciendo Nuestro Futuro</h2>
                    </div>

                    <div class="beneficios">
                        <h3>Mejoras en la Salud</h3>
                        <ul>
                            <li><strong>Fortalecimiento muscular:</strong> El fútbol ayuda a desarrollar fuerza y
                                resistencia muscular.</li>
                            <li><strong>Mejora cardiovascular:</strong> El ejercicio intenso del fútbol mejora la salud
                                cardiorrespiratoria.</li>
                            <li><strong>Reducción del estrés:</strong> La actividad física libera endorfinas, mejorando
                                el estado de ánimo.</li>
                            <li><strong>Control de peso:</strong> Jugar al fútbol regularmente ayuda a mantener un peso
                                saludable.</li>
                        </ul>

                        <h3>Beneficios Psicológicos</h3>
                        <ul>
                            <li><strong>Mejora del autoestima:</strong> El éxito en el campo puede aumentar la confianza
                                personal.</li>
                            <li><strong>Desarrollo de habilidades sociales:</strong> Jugar con otros fomenta la
                                comunicación y el trabajo en equipo.</li>
                            <li><strong>Uso de tiempo constructivo:</strong> Participar en actividades físicas reduce el
                                tiempo dedicado a comportamientos poco saludables.</li>
                        </ul>

                        <h3>Otros Beneficios</h3>
                        <p>Además de los beneficios mencionados anteriormente, el fútbol también ofrece:</p>
                        <ul>
                            <li><strong>Mejora cognitiva:</strong> La actividad física estimula el desarrollo cerebral.
                            </li>
                            <li><strong>Reducción del riesgo de enfermedades crónico-degenerativas:</strong> El
                                ejercicio regular reduce el riesgo de enfermedades como el diabetes tipo 2 y algunos
                                tipos de cáncer.</li>
                            <li><strong>Mejora del sueño:</strong> La actividad física regular ayuda a tener un mejor
                                descanso nocturno.</li>
                            <li><strong>Beneficios para la infancia:</strong> El fútbol promueve el desarrollo motor y
                                social en los niños.</li>
                        </ul>
                    </div>
                    <div>
                        <a href="{{ route('blogs.create') }}" class="btn btn-primary">Crear nuevo blog</a>
                        <a href="{{ route('blogs.index') }}" class="btn btn-primary">Ver todos los blogs</a>

                    </div>

                    <div class="container">
                        <br>
                        <div class="card-grid">
                            <div class="card">
                                <img src="https://wallpaperaccess.com/full/1398616.jpg" alt="Futbol"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Futbol</h5>
                                    <p class="card-text">El fútbol es uno de los deportes más populares y beneficiosos
                                        para la salud.</p>
                                    <a href="/livewire/blog-futbol" class="btn btn-primary">Leer más</a>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://wallpaperaccess.com/full/1651685.jpg" alt="Baloncesto"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Baloncesto</h5>
                                    <p class="card-text">El baloncesto es un deporte rápido y emocionante que ofrece
                                        numerosos beneficios.</p>
                                    <a href="/livewire/blog-baloncesto" class="btn btn-primary">Leer más</a>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://wallpaperaccess.com/full/2605200.jpg" alt="Fútbol Americano"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Fútbol Americano</h5>
                                    <p class="card-text">El fútbol americano es un deporte de contacto que requiere
                                        habilidad y fuerza.</p>
                                    <a href="/livewire/blog-futbol-americano" class="btn btn-primary">Leer más</a>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://img.bekiasalud.com/articulos/portada/45000/45399.jpg" alt="Natación"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Natación</h5>
                                    <p class="card-text">La natación es un excelente ejercicio para mejorar la condición
                                        física.</p>
                                    <a href="/livewire/blog-natacion" class="btn btn-primary">Leer más</a>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://img.asmedia.epimg.net/resizer/v2/SQTYS24Y2BK6XPVAIJKBOP73H4.jpg?auth=395866f77d9b3a4966e23b835294192003d68e74e52c553cb04d2b770156a6a5&width=736&height=414&smart=true"
                                    alt="Ciclismo" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Ciclismo</h5>
                                    <p class="card-text">El ciclismo es un deporte que fortalece músculos y mejora la
                                        condición cardiovascular.</p>
                                    <a href="/livewire/blog-ciclismo" class="btn btn-primary">Leer más</a>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://banner2.cleanpng.com/lnd/20240615/wih/azgbzbwhz.webp" alt="Tenis"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Tenis</h5>
                                    <p class="card-text">El tenis es un deporte individual que ofrece excelentes
                                        beneficios para la salud y el bienestar físico.</p>
                                    <a href="/livewire/blog-tenis" class="btn btn-primary">Leer más</a>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-5">
                            <div class="col-md-6 text-center">
                                <h2>Dejanos tu Comentario</h2>
                                <p>Si deseas hacer un comentario sobre este blog, por favor presiona el boton "Agregar
                                    Comentario" y nos dejanos saber tus pensamientos.</p>
                            </div>
                            <div class="col-md-4">
                                <a href="/livewire/form-comment" class="btn btn-primary btn-lg">Agregar Comentario</a>
                            </div>
                        </div>

                </main>

                <footer>
                    <div class="footer_container">
                        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                            <div class="footer_column">
                                <div style="width: calc(50% - 15px);">
                                    <h3 style="margin-top: 0; font-weight: bold;">Acerca de nosotros</h3>
                                    <p>Este es un blog dedicado a discutir los beneficios y aspectos interesantes de
                                        diversos deportes.</p>
                                    <ul style="list-style-type: none; padding-left: 0;">
                                        <li><a href="#" style="color: #337ab7; text-decoration: none;">Nuestra
                                                misión</a></li>
                                        <li><a href="#" style="color: #337ab7; text-decoration: none;">Nuestros
                                                valores</a></li>
                                        <li><a href="#" style="color: #337ab7; text-decoration: none;">Equipo de
                                                trabajo</a></li>
                                    </ul>
                                </div>

                                <div style="width: calc(50% - 15px);">
                                    <h3 style="margin-top: 0; font-weight: bold;">Enlaces útiles</h3>
                                    <ul style="list-style-type: none; padding-left: 0;">
                                        <li><a href="#" style="color: #337ab7; text-decoration: none;">Preguntas
                                                frecuentes</a></li>
                                        <li><a href="#" style="color: #337ab7; text-decoration: none;">Política
                                                de privacidad</a></li>
                                        <li><a href="#" style="color: #337ab7; text-decoration: none;">Términos
                                                y condiciones</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="copyright">
                                <p style="text-align: center;">&copy; 2024 Carlos Andres Marin Agudelo. Todos los
                                    derechos reservados.</p>
                            </div>
                        </div>
                    </div>
                </footer>

                <!-- Bootstrap JS -->
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-choMNfiG8BwwbiOYLZycny7sC1nTAAUSYXG5Xnk/c4Ilhij93AllmRFmpxc7WcA4l" crossorigin="anonymous">
                </script>
        </div>
</div>
