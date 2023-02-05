@extends('visiteurs.index')
    @section('content')
    <div class="formation__introduction">
        <div class="formation__introduction--directory">
            <p>Formation > Laravel </p>
        </div>
        <section class="formation__introduction--header">
            <div class="header__text">
                <div class="header__text--title">{{$result->nom}}</div>
                <div class="header__text--description">
                    <p>
                        {{$result->description}}
                    </p>
                </div>
                <div class="header__text--button">
                    <button class="header__btn">
                        <a href="{{asset('formations/intro')}}" class="formation-page__content--link"><ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon> Commencer</a>
                    </button>
                </div>
            </div>

            <div class="">
                <img src="{{asset('images/laravel.png')}}" alt="image" class="header__image">
            </div>
        </section>

        <section class="formation__presentation">
            <div class="formation__presentation--chapitre">
                <div class="chapitre__title">Chapitres</div>
                <div class="chapitre__board">
                    <ul class="chapitre__list">

                        @foreach ($tutoriels as $tuto)
                        <li class="chapitre__link">
                            <a href="/tutoriels/tuto/{{$tuto->id}}" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    {{$tuto->titre}} ({{$tuto->video_duree}} min)
                            </a>
                        </li>  
                        @endforeach
                        

                       {{--  <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (5min)
                            </a>
                        </li> --}}

                        {{-- <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (9min)
                            </a>
                        </li>

                        <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (40min)
                            </a>
                        </li> --}}

                       {{--  <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (6min)
                            </a>
                        </li>

                        <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (9min)
                            </a>
                        </li> --}}

                        {{-- <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (40min)
                            </a>
                        </li>

                        <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (6min)
                            </a>
                        </li> --}}

                        {{-- <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (9min)
                            </a>
                        </li>

                        <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (40min)
                            </a>
                        </li> --}}

                        {{-- <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (6min)
                            </a>
                        </li>

                        <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (9min)
                            </a>
                        </li>
 --}}
                        {{-- <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (40min)
                            </a>
                        </li>

                        <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (6min)
                            </a>
                        </li> --}}

                    </ul>
                </div>
            </div>
            <div class="formation__presentation--view">
                <div class="chapitre__title">{{$result->nom}}</div>

                <div class="chapitre__description">
                    <p>{{$result->presentation}}</p>
                </div>

                <div class="chapitre__time">
                    <p>Il y'a 1 semaine</p>
                </div>

                <div class="chapitre__video">
                    <iframe class="chapitre__video video--link" width="500" height="320" src="{{$result->video_link_presentation}}">
                    </iframe>
                </div>
            </div>
        </section>
       
    </div>
    @endsection