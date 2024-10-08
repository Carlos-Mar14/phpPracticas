<div class="container mt-5">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Estilos personalizados -->
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

    <div id="navbar-wrapper">
        <!-- Tu navbar existente -->
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
        @if ($comments->isNotEmpty())
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
                                    <button class="btn btn-primary editComment"
                                        onclick="editComment({{ $comment->id }})">Editar</button>
                                </td>
                                <td>
                                    <button class="btn btn-danger deleteComment" data-id="{{ $comment->id }}"
                                        onclick="document.getElementById('delete-comment-form-{{ $comment->id }}').submit()">Eliminar</button>
                                </td>
                                <td>
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
            <form id="editForm" method="POST" action="{{ route('comments.update', $comment->id) }}">
                @csrf
                @method('PUT')
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
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-choMNfiG8BwwbiOYLZycny7sC1nTAAUSYXG5Xnk/c4Ilhij93AllmRFmpxc7WcA4l" crossorigin="anonymous">
    </script>
    <script>
        function cancelEdit() {
            document.getElementById('editForm').style.display = 'none';
        }
    </script>
    <script>
        Livewire.on('commentAdded', () => {
            console.log('Nuevo comentario agregado');
            // Aquí puedes agregar lógica para actualizar la interfaz del usuario si es necesario
        });

        Livewire.on('commentUpdated', () => {
            console.log('Comentario actualizado');
            // Aquí puedes agregar lógica para actualizar la interfaz del usuario si es necesario
        });
    </script>
</div>
