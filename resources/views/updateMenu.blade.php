@extends('layouts.base')
@section('content')
@foreach($menus as $menuitem)
    <div>
        <h1>{{$menuitem->name}}</h1>    
        <form action="{{ route('menu.update') }}" method="post">
            @csrf
            <input name="name" type="text" value="{{$menuitem->name}}" placeholder="name">
            <input name="price" type="text" value="{{$menuitem->price}}" placeholder="price">
            <button name="update" value="{{$menuitem->id}}">update</button>
        </form>
        <form action="{{ route('menu.destroy' , ['id' => $menuitem->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="hidden" name="delete" value="{{$menuitem->id}}">
            <button type="submit">delete</button>
        </form>
    </div>
@endforeach

@endsection