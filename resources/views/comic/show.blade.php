@extends('leyauts.main')

@section('page-content')
    <div class="container">
        <h1>{{$comic->title}}</h1>
        <p>Drescription</p>
        <a class="btn btn-dark" href="{{ route('comics.index') }}" role="button">Ritorna alla Home</a>

    </div>
@endsection