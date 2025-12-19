<div>
    <h2>{{ $name }}</h2>
    <p>Espèce: {{ $species }}</p>
    <p>Âge: {{ $age }} ans</p>
    <p>{{ $desc }}</p>
    <img rel="icon" type="image/png" alt="{{ $species }}" src="{{ asset('images/' . $image) }}">
    <button type="button">Modifier</button>
    <button type="button">Supprimer</button>
</div>