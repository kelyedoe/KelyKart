@extends('visiteurs.index')
@section('content')
    {{-- Box Section start --}}
    <section class="box">
        <div class="row action">
            <div class="action__text ">
                <span class="apprenez">Apprenez</span> <br> 
                <span class="new">de nouvelles choses</span> <br> 
                <span class="gratuit">Gratuitement.</span>

                <div class="row buttons action__mediaq">
                    <a href="{{asset('formations')}}" class="action__button">
                        <button class="buttons__blue" type="button">
                            Formations
                        </button>
                    </a>

                    <a href="{{asset('blog')}}" class="action__button">
                        <button class="buttons__blue btn--color" type="button">
                            Blog
                        </button>
                    </a>
                   {{--  <a href="">
                        <button class="buttons__orange" type="button">
                            Blog
                        </button>
                    </a> --}}
                </div>
            </div>
            <div class=" col-1-of-2">
                <img src="{{asset('images/action.jpg')}}" alt="" class="action__image">
            </div>
        </div>  
    </section>
{{-- Box Section End --}}
{{-- Formations Section start --}}
    <section class="formations">
        <div class="formations__header">
            <span class="les">Les</span><span class="format"> 
                formations</span> <br> 
                <span class="disponibles">disponibles.</span>
           
        </div>
        
        <div class="formations__list">

            @foreach ($formations as $formation)
                <div class="formations__item">
                    <div>
                        <img src="images/{{$formation->icon_large}}" class="formations__item--image" alt="formation icon">
                    </div>

                    <div class="formations__text">
                        <div class="formations__item--titre">
                            <a href="formations/introduction/{{$formation->id}}" class="formation-page__content--link">{{$formation->nom}}</a>
                        </div>
                        <div class="formations__item--description">
                            <p>{{$formation->description}}</p>
                        </div>
                        <div class="formations__item--stats">
                            <a href="formations/introduction/{{$formation->id}}" class="formation-page__content--link"><span><ion-icon name="folder-open-outline"> </ion-icon>{{$formation->total_chapitres}} Chapitres</span></a>
                            <a href="formations/introduction/{{$formation->id}}" class="formation-page__content--link"><span><ion-icon name="time-outline"></ion-icon> {{$formation->total_duree}} Heures.</span> </a>
                        </div>
                    </div>                   
                </div>
            @endforeach
                

{{--                 <div class="formations__item">
                    <div>
                        <img src="{{asset('images/tensorflow.png')}}" class="formations__item--image" alt="laravel">
                    </div>

                    <div class="formations__text">
                        <div class="formations__item--titre">
                             Tensorflow
                        </div>
                        <div class="formations__item--description">
                            <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise</p>
                        </div>
                        <div class="formations__item--stats">
                            <span><ion-icon name="folder-open-outline"></ion-icon>120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> 10 Heures.</span> 
                        </div>
                    </div>
                        
                </div> --}}

          {{--       <div class="formations__item">
                    <div>
                        <img src="{{asset('images/php.png')}}" class="formations__item--image" alt="laravel">
                    </div>

                    <div class="formations__text">
                        <div class="formations__item--titre">
                            Apprendre Php
                        </div>
                        <div class="formations__item--description">
                            <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise</p>
                        </div>
                        <div class="formations__item--stats">
                            <span><ion-icon name="folder-open-outline"></ion-icon>120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> 10 Heures.</span> 
                        </div>
                    </div>
                        
                </div> --}}

               {{--  <div class="formations__item">
                    <div>
                        <img src="{{asset('images/git.png')}}" class="formations__item--image" alt="laravel">
                    </div>

                    <div class="formations__text">
                        <div class="formations__item--titre">
                            Apprendre Git
                        </div>
                        <div class="formations__item--description">
                            <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise</p>
                        </div>
                        <div class="formations__item--stats">
                            <span><ion-icon name="folder-open-outline"></ion-icon>120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> 10 Heures.</span> 
                        </div>
                    </div>                
                </div> --}}
        </div>        
    </section>
{{-- Formation Section End --}}
{{-- section des categories --}}
    
    <section class="categorie">
        <h3 class="categorie__header">Catégories</h3>
        <div class=" row categories">
            <div class=" categories__card">
                <div class="categories__card--title">
                    <a href="{{asset('podcasts')}}"  class="link">
                        <ion-icon name="mic-outline"></ion-icon>
                        <span>Podcasts</span>
                    </a>
                </div>
    
                <div class="categories__card--content">
                    <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt</p>
                </div>
    
                <div class="categories__card--footer">
                    <a href="{{asset('podcasts')}}">
                        <button class="categories__card--btn" type="button">Suivre</button>
                    </a>
                </div>
            </div>

            <div class=" categories__card">
                <div class="categories__card--title">
                    <a href="{{ asset('formations') }}" class="link">
                        <ion-icon name="terminal-outline"></ion-icon>
                        <span>Formations</span>        
                    </a>
                </div>
    
                <div class="categories__card--content">
                    <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt</p>
                </div>
    
                <div class="categories__card--footer">
                    <a href="{{asset('formations')}}">
                        <button class="categories__card--btn" type="button">DébuteZ</button>
                    </a>
                </div>
            </div>

            <div class=" categories__card">
                <div class="categories__card--title">
                    <a href="{{asset('blog')}}" class="link">
                        <ion-icon name="pencil-outline"></ion-icon><span>Blog</span>
                    </a>
                </div>
    
                <div class="categories__card--content">
                    <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt</p>
                </div>
    
                <div class="categories__card--footer">
                    <a href="{{asset('blog')}}" >
                        <button class="categories__card--btn" type="button">Nos articles</button>
                    </a>
                </div>
            </div>
        </div>      
        
    </section>
{{-- Fin de section des categories --}}


@endsection