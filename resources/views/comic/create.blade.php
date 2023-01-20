@extends('leyauts.main')

@section('page-content')
    <div class="contaier">
        <h1>Nuovo Fumetto</h1>
    </div>  
    
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        
    </form>
@endsection