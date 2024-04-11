
@section('header')
    <header class="headerContainer">
        <a><img class="logoHeaderImage" src="{{ asset('images/logo-image-black.png')}}" alt=""></a>
        <a class="headerTekst" href="{{ route('menu.index') }}">Menu</a>
        <a class="headerTekst" href="{{ route('contact') }}">Contact</a>
    </header>
@endsection