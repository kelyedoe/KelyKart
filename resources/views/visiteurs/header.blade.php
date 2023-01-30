{{-- @extends('visiteurs.index') --}}
{{-- @section('header') --}}
<img class="header__logo" src="{{ asset('images/kelykart.png')}}" alt="kelykart logo">

<nav class="header__navigation">
    <ul class="header__navigation--list">
        <li class="header__navigation--link">
            <a href="" class="link">
                <ion-icon name="terminal-outline"></ion-icon>
                <span>Formations</span>        
            </a>
        </li>
        <li class="header__navigation--link">
            <a href="" class="link">
                <ion-icon name="mic-outline"></ion-icon>
                <span>Podcasts</span>
            </a>
        </li>
        <li class="header__navigation--link">
            <a href="" class="link">
                <ion-icon name="pencil-outline"></ion-icon><span>Blog</span>
            </a>
        </li>
    </ul>
</nav>
{{-- @endsection --}}