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
        }

        .content-wrapper {
            flex-grow: 1;
        }

        footer {
            background-color: #b6b6b6;
            padding: 30px 0;
            flex-shrink: 0;
            margin-top: 100px;
        }

        #commentForm {
            max-width: 600px;
            margin: 0 auto;
        }

        #commentForm label {
            display: block;
            margin-bottom: 5px;
        }

        .footer_column {
            height: 50px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start
        }

        .copyright {
            background-color: #e3e4e5;
            margin-top: 150px;
        }
    </style>

    <body>
        <div class="content-wrapper">
            <!-- navbar -->
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

            <!--  -->

            <div class="container">
                <h1>"El Impacto del Deporte: Fortaleciendo Nuestro Futuro"</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus architecto ullam facere illo rem
                    quasi suscipit quia cumque pariatur laboriosam sit perspiciatis rerum, repellat laudantium provident
                    voluptatem error aperiam soluta?
                    Cum aperiam officiis consectetur exercitationem quos. Animi quis magnam optio atque placeat
                    consectetur cum et tempora. Vitae, soluta expedita corporis obcaecati reiciendis neque illum aperiam
                    error quo quibusdam. Tempora, animi!</p>
                <img src="" alt="">
            </div>
            <div class="container">
                <br>
                <div class="row justify-content-around">
                    <div class="card" style="width: 18rem;">
                        <img src="https://wallpaperaccess.com/full/1398616.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Futbol</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://metaganadora.com/que-aspectos-positivos-tiene-el-futbol/#:~:text=1.%20Mejora%20la%20salud%20f%C3%ADsica:%20El%20f%C3%BAtbol%20es"
                                target="_blank" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://wallpaperaccess.com/full/1651685.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Baloncesto</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://www.quironsalud.com/blogs/es/medicina-deporte/beneficios-baloncesto-salud#:~:text=%C2%BFCu%C3%A1les%20son%20los%20principales%20beneficios?"
                                target="_blank" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://wallpaperaccess.com/full/2605200.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Fútbol Americano</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://www.benefimundo.com/jugar-futbol-americano-7-beneficios-fisicos-y-mentales/"
                                target="_blank" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <br> <br>
                <div class="row justify-content-around">
                    <div class="card" style="width: 18rem;">
                        <img src="https://img.bekiasalud.com/articulos/portada/45000/45399.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Natación</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://www.nationalgeographic.es/ciencia/2024/04/nadar-ejercicio-mas-completo-saludable-explicacion-cientifica#:~:text=Los%20expertos%20detallan%20los%20beneficios%20de"
                                target="_blank" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://img.asmedia.epimg.net/resizer/v2/SQTYS24Y2BK6XPVAIJKBOP73H4.jpg?auth=395866f77d9b3a4966e23b835294192003d68e74e52c553cb04d2b770156a6a5&width=736&height=414&smart=true"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ciclismo</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="https://blog.klinc.com/los-beneficios-del-ciclismo/#:~:text=En%20estas%20edades,%20sus%20beneficios%20son%20tan"
                                target="_blank" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.simplemost.com/wp-content/uploads/2017/10/tennis.jpeg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tenis</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="https://www.usta.com/es/home/improve/tennis-health---fitness/national/how-tennis-protects-and-supports-mental--emotional-and-physical-.html#:~:text=Salud%20del%20cerebro.%20P:%20%C2%BFEl%20deporte%20de"
                                target="_blank" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <h4>Envianos un comentario o establece contacto con nostros</h4>
                <form id="commentForm" action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Tu comentario:</label>
                        <textarea class="form-control" id="comment" name="comment" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Comentario</button>
                </form>

                <!-- Lista de comentarios -->
                @if (isset($comments) && $comments->isNotEmpty())
                    <h2 class="mt-5">Lista de comentarios</h2>
                    <div class="listComments">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Comentario</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <td>{{ $comment->name }}</td>
                                        <td>{{ $comment->email }}</td>
                                        <td>{{ $comment->comment }}</td>
                                        <td>{{ $comment->created_at }}</td>
                                        <td>
                                            <button class="btn btn-primary editComment" data-id="{{ $comment->id }}"
                                                onclick="document.getElementById('editForm').style.display = 'block';">Editar
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger deleteComment" data-id="{{ $comment->id }}"
                                                onclick="document.getElementById('delete-comment-form-{{ $comment->id }}').submit()">Eliminar</button>
                                            <form id="delete-comment-form-{{ $comment->id }}"
                                                action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>No hay comentarios disponibles.</p>
                @endif
                <!-- Formulario de edición (oculto por defecto) -->
                <div id="editForm" style="display: none;">
                    <h2>Editar comentario</h2>
                    <form>
                        <input type="hidden" id="editId" name="id">
                        <div class="mb-3">
                            <label for="editName" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="editName" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Correo electrónico:</label>
                            <input type="email" class="form-control" id="editEmail" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="editComment" class="form-label">Comentario:</label>
                            <textarea class="form-control" id="editComment" name="comment" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
</div>
<!--  -->
<footer>
    <div class="footer_container">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="footer_column">
                <div style="width: calc(50% - 15px);">
                    <h3 style="margin-top: 0; font-weight: bold;">Acerca de nosotros</h3>
                    <p>Este es un blog dedicado a...</p>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li><a href="#" style="color: #337ab7; text-decoration: none;">Nuestra misión</a></li>
                        <li><a href="#" style="color: #337ab7; text-decoration: none;">Nuestros valores</a></li>
                        <li><a href="#" style="color: #337ab7; text-decoration: none;">Equipo de trabajo</a>
                        </li>
                    </ul>
                </div>

                <div style="width: calc(50% - 15px);">
                    <h3 style="margin-top: 0; font-weight: bold;">Enlaces útiles</h3>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li><a href="#" style="color: #337ab7; text-decoration: none;">Preguntas frecuentes</a>
                        </li>
                        <li><a href="#" style="color: #337ab7; text-decoration: none;">Política de
                                privacidad</a></li>
                        <li><a href="#" style="color: #337ab7; text-decoration: none;">Términos y
                                condiciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p style="text-align: center;">&copy; 2024 Carlos Andres Marin Agudelo. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
