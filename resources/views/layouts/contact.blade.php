@extends('layouts.base')

@section('content')


<div class="homepageImageContainer">
    <form action="" class="formContainer" method="post">
        @csrf

        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="email" name="email">
        <input type="text" placeholder="message" name="message" id="">
        <button name="submit">submit</button>
    </form>
</div>
@endsection

