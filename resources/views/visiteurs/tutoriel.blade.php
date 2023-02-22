@extends('visiteurs.index')
    @section('content')
        <div class="tutoriel">
            <div class="formation__introduction--directory">
                <p>Formation > {{$formation->nom}} > {{$tutoriel->titre}}</p>
            </div>

            <div class="tutoriel__title">
                {{$tutoriel->titre}}
            </div>

            <div class="tutoriel__bloc">
                <div class="tutoriel__bloc--video">
                    <iframe class="chapitre__video video--link" width="500" height="400px" src="{{$tutoriel->video_youtube}}">
                    </iframe>
                </div>
                <div class="tutoriel__bloc--program">
                    <div class="tutoriel__bloc--title">
                        {{$formation->nom}}
                    </div>
                    <div class="tutoriel__bloc--chapitres">

                        <ul class="chapitres__list">

                            @foreach ($tutoriels as $tutoriel)
                            <li class="chapitres__link">
                                <a href="/tutoriels/tuto/{{$tutoriel->id}}" class="chapitres__link--anchor">
                                    <ion-icon name="play-circle-outline" class="chapitre__icon "></ion-icon>
                                        {{$tutoriel->titre}} ({{$tutoriel->video_duree}} min)
                                </a>
                            </li>
                            @endforeach
                            {{-- <li class="chapitres__link">
                                <a href="" class="chapitres__link--anchor">
                                    <ion-icon name="play-circle-outline" class="chapitre__icon "></ion-icon>
                                        Introduction à Laravel (10min)
                                </a>
                            </li>

                            <li class="chapitres__link">
                                <a href="" class="chapitres__link--anchor">
                                    <ion-icon name="play-circle-outline" class="chapitre__icon "></ion-icon>
                                        Introduction à Laravel (10min)
                                </a>
                            </li> --}}

                            {{-- <li class="chapitres__link">
                                <a href="" class="chapitres__link--anchor">
                                    <ion-icon name="play-circle-outline" class="chapitre__icon "></ion-icon>
                                        Introduction à Laravel (10min)
                                </a>
                            </li>

                            <li class="chapitres__link">
                                <a href="" class="chapitres__link--anchor">
                                    <ion-icon name="play-circle-outline" class="chapitre__icon "></ion-icon>
                                        Introduction à Laravel (10min)
                                </a>
                            </li> --}}

                           {{--  <li class="chapitres__link">
                                <a href="" class="chapitres__link--anchor">
                                    <ion-icon name="play-circle-outline" class="chapitre__icon "></ion-icon>
                                        Introduction à Laravel (10min)
                                </a>
                            </li>

                            <li class="chapitres__link">
                                <a href="" class="chapitres__link--anchor">
                                    <ion-icon name="play-circle-outline" class="chapitre__icon "></ion-icon>
                                        Introduction à Laravel (10min)
                                </a>
                            </li> --}}
{{-- 
                            <li class="chapitres__link">
                                <a href="" class="chapitres__link--anchor">
                                    <ion-icon name="play-circle-outline" class="chapitre__icon "></ion-icon>
                                        Introduction à Laravel (10min)
                                </a>
                            </li>

                            <li class="chapitres__link">
                                <a href="" class="chapitres__link--anchor">
                                    <ion-icon name="play-circle-outline" class="chapitre__icon "></ion-icon>
                                        Introduction à Laravel (10min)
                                </a>
                            </li> --}}

                           {{--  <li class="chapitres__link">
                                <a href="" class="chapitres__link--anchor">
                                    <ion-icon name="play-circle-outline" class="chapitre__icon "></ion-icon>
                                        Introduction à Laravel (10min)
                                </a>
                            </li> --}}
                        </ul>

                    </div>
                </div>
            </div>

            <div class="tutoriel__about">
                <div class="tutoriel__about--title">A propos de ce tutoriel</div>
                <div class="tutoriel__about--description">
                    {{$tutoriel->description}}    
                </div>
                
            </div>

            <div class="section__tutoriel--text">
                    
            <div class="tutoriel__text">
                <div class="tutoriel__text--title">
                    Tutoriel {{$tutoriel->id}} : {{$tutoriel->titre}}
                </div>
                {{-- <div>
                    <div class="tutoriel__text--introduction">
                        Introduction
                    </div>
                    <p class="intro__content">
                        {{$tutoriel->description}}
                    </p> 
                </div> --}}
                
                <div>
                   {{--  <div class="tutoriel__text--introduction">
                        Créer des groupes de routes en laravel
                    </div> --}}
                    <p class="intro__content">
                        {!! html_entity_decode($tutoriel->content) !!}
                    </p>
                </div>
                

                {{-- <div>
                    <div class="tutoriel__text--introduction">
                        Conclusion
                    </div>
                    <p class="intro__content">
                        {{$tutoriel->description}}
                    </p>
                </div> --}}
            </div>

            <div class="tutoriel__details">

                <hr class="tutoriel__details--line">

                <div class="tutoriel__details--auteur">
                    <div class="tutoriel__details--image"></div>
                    <div class="tutoriel__details--content">
                        <div class="auteur"> Auteur: </div>
                        <div class="auteur__nom">
                             KelyKart
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
        </div>
    @endsection