@extends('visiteurs.index')
    @section('content')
    <div class="formation__introduction">
        <div class="formation__introduction--directory">
            <p>Formation > Laravel </p>
        </div>
        <section class="formation__introduction--header">
            <div class="header__text">
                <div class="header__text--title">Apprendre le framework <br> laravel.</div>
                <div class="header__text--description"><p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of</p></div>
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

                        <li class="chapitre__link">
                            <a href="{{asset('formations/tutoriel')}}" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (10min)
                            </a>
                        </li>

                        <li class="chapitre__link">
                            <a href="" class="chapitre__link--anchor">
                                <ion-icon name="play-circle-outline" class="chapitre__icon"></ion-icon>
                                    Introduction à Laravel (5min)
                            </a>
                        </li>

                        <li class="chapitre__link">
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
                        </li>

                        <li class="chapitre__link">
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

                        <li class="chapitre__link">
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
                        </li>

                        <li class="chapitre__link">
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
                        </li>

                        <li class="chapitre__link">
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

                        <li class="chapitre__link">
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
                        </li>

                    </ul>
                </div>
            </div>
            <div class="formation__presentation--view">
                <div class="chapitre__title">Présentation</div>

                <div class="chapitre__description">
                    <p>Le lorem ipsum (également appelé faux-texte, lipsum, ou bolo bolo ) est, 
                        en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif 
                        venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée.</p>
                </div>

                <div class="chapitre__time">
                    <p>Il y'a 1 semaine</p>
                </div>

                <div class="chapitre__video">
                    <iframe class="chapitre__video video--link" width="500" height="320" src="https://www.youtube.com/embed/reUZRyXxUs4">
                    </iframe>
                </div>
            </div>
        </section>
       
    </div>
    @endsection