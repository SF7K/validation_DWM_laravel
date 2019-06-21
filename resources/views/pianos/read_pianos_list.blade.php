
@extends('layouts.template')

@section('content')
    <h1>Nos Pianos</h1>
    <table>
        <thead>
            <tr>Pianos enregistrés</tr>
        </thead>
        <tbody>
        <tr>
            <th>Marque</th>
            <th>Nombre de Touches</th>
            <th>Hauteur (cm)</th>
            <th>Largeur (cm)</th>
            <th>Profondeur (cm)</th>
            <th>Couleur</th>
            @auth
                <th>Modifier</th>
                <th>Supprimer</th>
            @endif
        </tr>
        @foreach ($pianos as $piano)
            <tr>
                <td>{{ $piano->brand }}</td>
                <td>{{ $piano->keys }}</td>
                <td>{{ $piano->height }}</td>
                <td>{{ $piano->width }}</td>
                <td>{{ $piano->depth }}</td>
                <td>{{ $piano->color }}</td>
                @auth
                    <td><a href="{{ route('edit', $piano->id) }}"><button>🔄</button></a></td>
                    <td>
                        <form method="POST" action="{{ route('delete', $piano->id) }}" class="delete">
                            @csrf
                            <button>🗑</button>
                        </form>
                    ️</td>
                @endif
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection