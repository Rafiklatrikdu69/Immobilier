@extends('admin.admin')

@section('titre', $propriete->exists? "Editez un bien " : "Creer un nouveau bien ")


@section('contenu')

<h1>@yield('titre')</h1>
<form method="POST" action="{{ route('admin.proprietes.store') }}">
    @csrf

@include('shared.input',['titre'=>'Le bien' ,'name'=>'bien'])

    <button type="submit">
        @if($propriete->exists)
            Modifier
        @else
            Créer
        @endif
    </button>


</form>



@error('titre')
<div>{{$message}}</div>
@enderror

@endsection
