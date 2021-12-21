@extends('layout.base')

@section('title', 'Success')

@section('content')
    <h1>Hi {{ $name }}, registration successful!</h1>

    <a href="{{ route('home')}}">Home</a>
@endsection
