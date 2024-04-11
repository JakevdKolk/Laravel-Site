@extends('layouts.base')

@section('content')

<div>
    <h2>Menu items</h2>
    <a href="/toevoegen" class="changea">create</a>
    <a href="/updateMenu" class="changea">update/delete</a>
</div>
<div>
    <h2>Contact</h2>
    <a href="/viewContact" class="changea">view/delete</a>
</div>

@endsection