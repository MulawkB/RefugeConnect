<div>
    <h2>{{ $name }}</h2>
    <p>Species: {{ $species }}</p>
    <p>Age: {{ $age }}</p>
    <p>Description: {{ $desc }}</p>
    <img rel="icon" type="image/png" alt="{{ $species }}" src="{{ asset('images/' . $image) }}">
    <button route="g">modifier</button> <button>supprimer</button>
</div>