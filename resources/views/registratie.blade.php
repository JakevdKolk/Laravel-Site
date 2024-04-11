@extends('layouts.base')

@section('content')

    <h1>Registratie</h1>

    <form action="" method="post">
        @csrf
        <input type="text" name="username" id="">
        <input type="password" name="password">
        <button name="registreer">submit</button>
    </form>

@endsection