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
                  <td> <a class="btn btn-warning" href="#" role="button">Modifica</a></td>
                  <td> <a class="btn btn-danger" href="#" role="button">Elimina</a></td>
                <tr>
                @endforeach
              </tr>
              <a class="btn btn-success" href="{{ route('comics.create') }}" role="button">Aggiungi Nuovo</a>

            </tbody>
          </table>


    </div>
    
@endsection