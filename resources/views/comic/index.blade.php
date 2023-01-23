@extends('leyauts.main')

@section('page-content')
    <div class="container">
        <h1>Lista Comics</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Sale Date</th>
              </tr>
            </thead>
            <tbody>
              
                @foreach ($comics as $comic)
                <tr>
                  <th scope="row">{{$comic->id}}</th>
                  <td>{{$comic->title}}</td>
                  <td>{{$comic->type}}</td>
                  <td>{{$comic->price}}€</td>
                  <td>{{$comic->sale_date}}</td>
                  <td>{{$comic->description}}</td>

                  <td> <a class="btn btn-info" href="{{ route('comics.show', $comic->id) }}" role="button">Info</a></td>
                  <td> <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id)  }}" role="button">Modifica</a></td>
                  <form action="{{ route('comics.destroy', $comic->id)  }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td> <button class="btn btn-danger" type="submit" >Elimina</button></td>
                  </form>
                <tr>
                @endforeach
              </tr>
              <a class="btn btn-success" href="{{ route('comics.create') }}" role="button">Aggiungi Nuovo</a>

            </tbody>
          </table>


    </div>
    
@endsection