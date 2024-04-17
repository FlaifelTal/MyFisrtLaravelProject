@extends('layouts.master')
@section('content')
    <h1>Home</h1>
    <h1>{{ $pass }} {{ $hello }}</h1> {{-- pass data  --}}



    {{-- write any php script  --}}
    @php
        echo 'hello';
        $data = true;
        $i = 1;
        $j = '';
    @endphp
    {{-- check if var is set by passing the data using isset -> if no data is passed doesnt raise an error --}}
    @isset($data)
        <div class = "alert alert-success">Success</div>
    @endisset
    {{-- switch cases --}}
    @switch($i)
        @case(1)
            {{-- do .alert and youll have the message --}}
            <div class="alert alert-danger">Fail</div>
        @break

        @case(2)
            <div class="alert alert-success">Success</div>
        @break

        @default
            <div class="alert alert-warning">warning</div>
    @endswitch
    {{-- checks if any value is empty  --}}

    @empty($j)
        <div class="alert alert-success">empty</div>
    @endempty
@endsection
