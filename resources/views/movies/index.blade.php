@extends("layouts.app")

@section("page-title", "Movies List")

{{--
    "id" => 1
        "title" => "Il Padrino"
        "original_title" => "The Godfather"
        "nationality" => "american"
        "date" => "1972-03-24"
        "vote" => 9.2 --}}
@section("main-content")

    <h1 class="fw-bold text-center">Movies List</h1>

    <div class="container">
        <div class="row">

            @forelse ( $movies as $movie )

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Titolo {{ $movie->title }}</h3>
                        <h4>Original Title: {{ $movie->original_title }}</h4>
                        <ul>
                            <li>
                                Nazionalità: {{ $movie->nationality }}
                            </li>
                            <li>
                                Prima: {{ $movie->date }}
                            </li>
                            <li>
                                Voto della critica: {{ $movie->vote }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>

@endsection
