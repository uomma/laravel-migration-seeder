@extends('layouts.app')

@section('page.main')
    <section>
        <div class="container">
            <h3>films</h3>
            <ul>
                @foreach ($movies as $movie)
                <li>{{$movie['title']}}</li>
            </ul>
            @endforeach
        </div>
    </section>
@endsection
