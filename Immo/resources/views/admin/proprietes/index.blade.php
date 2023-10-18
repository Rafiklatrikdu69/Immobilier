@extends('admin.admin')
@section('titre')
    Article
@endsection
@section('contenu')

<h1>Les biens</h1>
<table>
    <thead>
    <tr>
        <th>Titre</th>
        <th>Surface</th>
        <th>Prix</th>
        <th>Ville</th>
        <th>Les Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($proprietes as $propriete)
        <tr>{{$propriete->titre}}</tr>
        <tr>{{$propriete->surface}}</tr>
        <tr>{{$propriete->prix}}</tr>
        <tr>{{$propriete->ville}}</tr>
    @endforeach
    </tbody>


</table>

@endsection





