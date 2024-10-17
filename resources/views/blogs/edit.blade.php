<div>
    <h1>Editar Blog</h1>

    <form method="POST" action="{{ route('blogs.update', $blog->id) }}">
        @csrf
        @method('PUT')
    
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $blog->title) }}" required>
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $blog->description) }}</textarea>
        </div>
    
        <div class="mb-3">
            <label for="author_id" class="form-label">Autor</label>
            <select class="form-select" id="author_id" name="author_id" required>
                <option value="">Seleccione un autor</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ old('author_id', $blog->author_id) == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>
    
        <div class="mb-3">
            <label for="category_id" class="form-label">Categoría</label>
            <select class="form-select" id="category_id" name="category_id" required>
                <option value="">Seleccione una categoría</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    
</div>
