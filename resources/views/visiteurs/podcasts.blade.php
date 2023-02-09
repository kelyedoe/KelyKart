@extends('visiteurs.index')
    @section('content')
        <div class="tutoriel">
            <div class="formation__introduction--directory">
                <p>Podcasts > {{$podcast->titre}}</p>
            </div>

            <div class="tutoriel__title">
                {{$podcast->titre}}
            </div>

            <div class="tutoriel__bloc">
                <div class="tutoriel__bloc--video">
                    <iframe class="chapitre__video video--link" width="500" height="400px" src="{{$podcast->lien_video}}">
                    </iframe>
                </div>
                <div class="tutoriel__bloc--program">
                    <div class="tutoriel__bloc--title">
                        {{-- {{$formation->nom}} --}}
                    </div>
                    <div class="tutoriel__bloc--chapitres">

                        <ul class="chapitres__list">

                           {{--  @foreach ($tutoriels as $tutoriel)
                            <li class="chapitres__link">
                                <a href="/tutoriels/tuto/{{$tutoriel->id}}" class="chapitres__link--anchor">
                                    <ion-icon name="play-circle-outline" class="chapitre__icon "></ion-icon>
                                        {{$tutoriel->titre}} ({{$tutoriel->video_duree}} min)
                                </a>
                            </li>
                            @endforeach --}}
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
                <div class="tutoriel__about--title">A propos de ce podcast</div>
                <div class="tutoriel__about--description"> 
                   {{$podcast->description_invite}}   
                </div>
                
            </div>

            <div class="podcast">
                <div class="podcast__header">Invité: {{$podcast->nom_invite}} </div>
                <div class="podcast__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae libero quasi suscipit aspernatur error commodi saepe maiores, qui necessitatibus, illo eveniet consequuntur ipsa mollitia quo ipsam excepturi nisi assumenda quisquam?
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate aliquam fugiat accusamus quam placeat ab sit labore, dolorum ipsum corrupti animi vel repellendus nisi. Accusantium maxime sint ex officia ut?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum nisi voluptatibus sit unde illo modi! Iusto velit nihil architecto culpa vel suscipit labore obcaecati id dicta facilis? Harum, quia exercitationem.
                </div>

                <div class="podcast__realisateur">Réalisateur: {{$podcast->realisateur}}</div> 
                <div class="podcast__footer">{{$podcast->duree_video}} à {{$podcast->lieu_realisation}}</div>
            </div>

            {{-- <div class="section__tutoriel--text">
                    
            
            
        </div> --}}
    @endsection