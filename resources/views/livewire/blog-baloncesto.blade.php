<div>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        header {
            background: #f4f4f4;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .beneficios {
            margin-top: 30px;
        }

        .beneficio {
            margin-bottom: 25px;
        }

        .beneficio h2 {
            color: #0066cc;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .beneficio p {
            line-height: 1.5;
        }

        .consideraciones {
            margin-top: 30px;
        }

        .consideracion {
            margin-bottom: 25px;
        }

        .consideracion h2 {
            color: #0066cc;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .consideracion p {
            line-height: 1.5;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>

    <div id="navbar-wrapper">
        <div class="containerNavbar">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/livewire/archivos_php">Deportes</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/livewire/archivos_php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/profile">Perfil</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="/dashboard">Dashboard</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <body>
        <header>
            <h1>Beneficios del Baloncesto</h1>
        </header>
        <main>
            <section class="beneficios">
                <div class="beneficio">
                    <h2>1. Condición cardiovascular</h2>
                    <p>El baloncesto es una excelente forma de ejercicio cardiovascular que mejora la salud del corazón
                        y reduce el riesgo de enfermedades cardíacas.</p>
                </div>
                <div class="beneficio">
                    <h2>2. Gestión del peso</h2>
                    <p>La práctica regular ayuda a mantener un peso saludable y composición corporal adecuada.</p>
                </div>
                <div class="beneficio">
                    <h2>3. Fortaleza y resistencia muscular</h2>
                    <p>Mejora la fuerza y resistencia muscular, especialmente en las piernas, brazos e hombros.</p>
                </div>
                <div class="beneficio">
                    <h2>4. Flexibilidad y coordinación</h2>
                    <p>Mejora la flexibilidad y la coordinación física general.</p>
                </div>
                <div class="beneficio">
                    <h2>5. Densidad ósea</h2>
                    <p>La naturaleza de impacto alta del baloncesto fortalece los huesos, reduciendo el riesgo de
                        osteoporosis.</p>
                </div>
            </section>

            <!-- acá llamar form-comment.blade.php para mostrar formulario de comentarios en esta vista-->
            @livewire('form-comment')
            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-choMNfiG8BwwbiOYLZycny7sC1nTAAUSYXG5Xnk/c4Ilhij93AllmRFmpxc7WcA4l" crossorigin="anonymous">
            </script>
    </body>
</div>
