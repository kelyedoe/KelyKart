@extends('visiteurs.index')
    @section('content')

        <section class="formation-page">            
                <div class="formation-page__title">
                    <p class="formation-page__title--header">
                        tous les podcasts <span class="formation-page__title--span">disponibles</span> 
                    </p>
                    <p class="formation-page__title--description">
                        La section "Tous les podcasts" offre une collection de podcasts sur le développement web et les technologies connexes. Les épisodes couvrent des sujets tels que les dernières tendances en développement web, les astuces et conseils pour les développeurs, 
                        les entrevues avec des experts du secteur et plus encore. Cette section est idéale pour les développeurs souhaitant rester informés et continuer à apprendre en dehors de la formation formelle. 
                    </p>
                </div>

            @foreach ($podcasts as $podcast)
                <div class="formation-page__content">
                    <div class="formation-page__content--image">
                        <img src="images/{{$podcast->image_icon}}" class="formation-page__content--image" alt="">
                    </div>
                    <a href="/podcasts/{{$podcast->id}}" class="formation-page__content--link"><div class="formation-page__content--titre">{{$podcast->titre}}</div></a>
                    <div class="formation-page__content--description">
                        <p>
                           {{$podcast->introduction}}
                        </p>
                    </div>
                    
                    <div class="formation-page__content--footer">
                            <span><ion-icon name="folder-open-outline"></ion-icon> 120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> {{$podcast->duree_video}} minutes</span>
                    </div>
                </div> 
            @endforeach
                
                <div class="formation-page__content">
                    <div class="formation-page__content--image">
                        <img src="{{asset('images/micro.png')}}" class="formation-page__content--image" alt="">
                    </div>
                    <div class="formation-page__content--titre">Le Big data</div>
                    <div class="formation-page__content--description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                        </p>
                    </div>
                    
                    <div class="formation-page__content--footer">
                            <span><ion-icon name="folder-open-outline"></ion-icon> 120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> 10 Heures.</span>
                    </div>
                </div>

                {{-- <div class="formation-page__content">
                    <div class="formation-page__content--image">
                        <img src="{{asset('images/micro.png')}}" class="formation-page__content--image" alt="">
                    </div>
                    <div class="formation-page__content--titre">avec Grafikart</div>
                    <div class="formation-page__content--description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                        </p>
                    </div>
                    
                    <div class="formation-page__content--footer">
                            <span><ion-icon name="folder-open-outline"></ion-icon> 120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> 10 Heures.</span>
                    </div>
                </div>
 --}}

               {{--  <div class="formation-page__content">
                    <div class="formation-page__content--image">
                        <img src="{{asset('images/micro.png')}}" class="formation-page__content--image" alt="">
                    </div>
                    <div class="formation-page__content--titre">avec Elon Musk</div>
                    <div class="formation-page__content--description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                        </p>
                    </div>
                    
                    <div class="formation-page__content--footer">
                            <span><ion-icon name="folder-open-outline"></ion-icon> 120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> 10 Heures.</span>
                    </div>
                </div>
 --}}
                {{-- <div class="formation-page__content">
                    <div class="formation-page__content--image">
                        <img src="{{asset('images/micro.png')}}" class="formation-page__content--image" alt="">
                    </div>
                    <div class="formation-page__content--titre">avec Yann LeCun</div>
                    <div class="formation-page__content--description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                        </p>
                    </div>
                    
                    <div class="formation-page__content--footer">
                            <span><ion-icon name="folder-open-outline"></ion-icon> 120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> 10 Heures.</span>
                    </div>
                </div> --}}

                {{-- <div class="formation-page__content">
                    <div class="formation-page__content--image">
                        <img src="{{asset('images/micro.png')}}" class="formation-page__content--image" alt="">
                    </div>
                    <div class="formation-page__content--titre">Andrew Ng</div>
                    <div class="formation-page__content--description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                        </p>
                    </div>
                    
                    <div class="formation-page__content--footer">
                            <span><ion-icon name="folder-open-outline"></ion-icon> 120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> 10 Heures.</span>
                    </div>
                </div> --}}
        </section>
        
    @endsection