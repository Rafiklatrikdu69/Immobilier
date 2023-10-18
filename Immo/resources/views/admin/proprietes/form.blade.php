@extends('admin.admin')

@section('titre', $propriete->exists? "Editez un bien " : "Creer un nouveau bien ")


@section('contenu')

<h1>@yield('titre')</h1>
        <form action="{{route($propriete->exists ? "admin.proprietes.update" : "admin.proprietes.store",['propriete'=>$propriete]) }}" method="get">
        @csrf
        @include('shared.input',['titre'=>'Titre','name' =>'titreBien'])
        </form>
    <div>
        <button>
        @if($propriete->exists)
            Modifier
        @else
            Créer
        @endif
        </button>

    </div>
@endsection
