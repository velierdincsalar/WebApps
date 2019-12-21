@extends('layout.master')

@section('title')
    test b555
@endsection

@section('content')
    <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>
{{ $name }}
    <button>Get External Content</button>


    @foreach($name2 as $nn)
    <h1>{{ $nn['userName'] }}</h1>
    @endforeach

    {{ print_r($name2) }}

@endsection



