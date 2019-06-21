@extends('layouts.template')

@section('content')
    <div class="flex welcome">
        <h3>Bienvenue sur Piano Mino !</h3>
        <div class="README">
            <p>Bonjour, ceci est un texte de remplissage qui devrait servir de présentation. Comme je n'ai aucune idée de quoi raconter comme connerie (pour une fois) ce texte servira de readme.</p>
            <p>Actuellement le site fonctionne de la manière suivante : Si tu n'es pas connecté, tu pourras voir la liste de nos pianos, sans pouvoir les modifier ni les supprimer. Si tu te connectes, tu pourras accéder à la suppression et aux modifications et donc à la page qu'il lui est liée. </p>
            <p>Malheureusement je n'ai pas eu le temps de regarder comment accorder les droits à l'admin ou le merchant seulement...</p>
        </div>
    </div>
@endsection