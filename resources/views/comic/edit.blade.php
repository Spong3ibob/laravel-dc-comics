@extends('leyauts.main')

@section('page-content')
    <div class="contaier">
        <h1>Modifica Fumetto</h1>
      
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title*</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $comic->title }}" placeholder="Inserisci Titolo" maxlength="50" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type*</label>
                <select class="form-select form-select-lg mb-3" name="type" id="type">
                    <option value="comic_book" {{ $comic->type === 'comic book' ? 'selected' : null }}>Comic Book</option>
                    <option value="graphic_novel" {{ $comic->type === 'graphic novel' ? 'selected' : null }}>Graphic Novel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date*</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price*</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>

    </div>
@endsection