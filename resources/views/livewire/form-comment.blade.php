<div class="container mt-5">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <style>
        >body {
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
    <div class="container mt-5">
        <h4>Envíanos un comentario o establece contacto con nostros</h4>
        <form action="{{ route('comments.store') }}" method="POST">
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
        @if (isset($comments))
            <h2>Lista de comentarios</h2>
            <div class="listComments">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Comentario</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $comment)
                            <tr>
                                <td>{{ $comment->name }}</td>
                                <td>{{ $comment->email }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td>
                                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>

                                    <a href="#" class="btn btn-primary ml-2 edit-comment-btn"
                                        data-id="{{ $comment->id }}" data-name="{{ $comment->name }}"
                                        data-email="{{ $comment->email }}"
                                        data-comment="{{ $comment->comment }}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        <!-- Formulario de edición (oculto por defecto) -->
        <div id="editForm" style="display: none;">
            <h2>Editar comentario</h2>
            <form wire:submit.prevent="updateForm">
                <input type="hidden" wire:model="editingId">
                <div class="mb-3">
                    <label for="editName" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="editName" wire:model="name" required>
                </div>
                <div class="mb-3">
                    <label for="editEmail" class="form-label">Correo electrónico:</label>
                    <input type="email" class="form-control" id="editEmail" wire:model="email" required>
                </div>
                <div class="mb-3">
                    <label for="editComment" class="form-label">Comentario:</label>
                    <textarea class="form-control" id="editComment" wire:model="comment" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Cancelar</button>
            </form>
        </div>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</div>
