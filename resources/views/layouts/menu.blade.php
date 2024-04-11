@extends('layouts.base')

@section('content')
    <div class="menuItemsContainer">

        @foreach ($menus as $menu)
            <section class="menuBlock">
                <h3 class="menuBlockTitle">{{$menu->name}}</h3>
                <p>{{$menu->price}}</p>
            </section>
        @endforeach

    </div>
@endsection

<div></div>
