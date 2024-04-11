@extends('layouts.base')


@section('content')


<form action="{{ route('login')}}" method="post">

    @csrf
    <input type="text" name="username" id="">
    <input type="text" name="password" id="">
    <button name="inlog">inlog</button>

</form>
@endsection