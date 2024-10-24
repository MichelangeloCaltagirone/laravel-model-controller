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

    <h1 class="fw-bold text-center text-white py-4">Movies List</h1>

    <div class="container">
        <div class="row justify-content-around">

            @forelse ( $movies as $movie )

            <div class="col-4">
                <div class="card my-3 singleMovie p-2">
                    <div class="card-body">
                        <h3>Titolo: <span>{{ $movie->title }}</span></h3>
                        <h4>Titolo originale: <span>{{ $movie->original_title }}</span></h4>
                        <ul>
                            <li>
                                Nazionalità: <span>{{ $movie->nationality }}</span>
                            </li>
                            <li>
                                Prima: <span>{{ $movie->date }}</span>
                            </li>
                            <li>
                                Voto della critica: <span>{{ $movie->vote }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @empty

                <h1>No Movies List available...</h1>

            @endforelse

        </div>
    </div>

@endsection
