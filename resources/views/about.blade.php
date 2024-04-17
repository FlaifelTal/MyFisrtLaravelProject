@extends('layouts.master')
@section('content')
    <div class="container mt-4 content">

        <h1>Welcome to Your Website</h1>
        <p class="lead">Hello from about</p>

        <h1>foreach</h1>

        <div class = "row mt-5">
            {{-- notice --}}
            @foreach ($blogs as $blog)
            {{-- conditional rendering --}}
                @if ($blog['status'] == 1)
                    <div class = "col-md-4">
                        <div class = "card">
                            <div class = "card-body">
                                {{-- $blogs -> 'title' //if object --}}
                                <h2>{{ $blog['title'] }}</h2>
                                <p>{{ $blog['body'] }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- else  --}}
                @else
                    <div class = "col-md-4">
                        <div class = "card">
                            <div class = "card-body">
                                {{-- $blogs -> 'title' //if object --}}
                                <h2>{{ $blog['title'] }}</h2>
                                <p>{{ $blog['body'] }}</p>
                                <div class="btn-sm bg-warning text-light">Pending</div>

                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>


        <h1>for</h1>

        <div class = "row mt-5">
            {{-- for syntax --}}
            @for ($i = 0; $i < count($blogs); $i++)
                <div class = "col-md-4">
                    <div class = "card">
                        <div class = "card-body">
                            {{-- $blogs -> 'title' //if object --}}
                            <h2>{{ $blogs[$i]['title'] }}</h2>
                            <p>{{ $blogs[$i]['body'] }}</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>



    </div>
@endsection
