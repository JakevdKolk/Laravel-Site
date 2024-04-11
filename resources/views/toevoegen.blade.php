@extends('layouts.base')


@section('content')


<form action="" method="post">

    @csrf
    <input type="text" name="name" id="">
    <input type="text" name="price" id="">   
    <button name="toevoegen">toevoegen</button>
</form>

@endsection