@extends('layouts.base')

@section('content')

@foreach($contact as $contactitem)
    <div>
        <h1>{{$contactitem->name}}</h1>
        <p>{{$contactitem->email}}</p>
        <p>{{$contactitem->message}}</p>
        <form action="" method="post">
            @csrf
            <button name="delete" value='{{$contactitem->id}}'>delete</button>
        </form>
    </div>

@endforeach

@endsection