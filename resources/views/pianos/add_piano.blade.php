@extends('layouts.template')

@section('content')
    <h1>Ajouter un piano à la base de données</h1>

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

{{--        <label for="color">Couleur</label>--}}
{{--        <select name="color_id" id="color">--}}
{{--            @foreach ($colors as $color)--}}
{{--                <option value="{{ $color->id }}">{{ $color->name }}</option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
{{--    j'aurai jamais le temps mais l'idée était là--}}



        <input type="submit" value="Ajouter le piano">
    </form>


@endsection