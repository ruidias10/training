@extends('layout.base')


@section('title', 'Signup')


@section('content')
    <h1>Signup</h1>

    <form action="{{ route('signup', ['key' => 123]) }}" method="POST">
        {{ csrf_field() }}

        <div class="field">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            @if ($errors->has('name'))
                @foreach ($errors->get('name') as $error)
                    <small class="error">{{ $error }}</small>
                @endforeach
            @endif
        </div>


        <div class="field">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email">

            @if ($errors->has('email'))
                @foreach ($errors->get('email') as $error)
                    <small class="error">{{ $error }}</small>
                @endforeach
            @endif
        </div>


        <div class="field">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            @if ($errors->has('password'))
                @foreach ($errors->get('password') as $error)
                    <small class="error">{{ $error }}</small>
                @endforeach
            @endif
        </div>


        <div class="btn">
            <button type="submit">Signup</button>
        </div>
    </form>
@endsection
