@extends('layouts.template')

@section('content')
    <h1>Modifier le piano {{ $piano->brand }}</h1>

    <form action="{{ route('store') }}" method="POST" class="forms">
        @csrf
        <label for="brand">Marque</label>
        <input type="text" name="brand">

        <label for="keys">Nombre de touches</label>
        <input type="number" name="keys">

        <label for="height">Hauteur (cm)</label>
        <input type="number" name="height">

        <label for="width">Largeur (cm)</label>
        <input type="number" name="width">

        <label for="depth">Profondeur (cm)</label>
        <input type="number" name="depth">

        <label for="color">Couleur</label>
        <input type="text" name="color">

        <input type="submit" value="Ajouter le piano">
    </form>


@endsection



