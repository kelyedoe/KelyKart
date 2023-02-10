@extends('visiteurs.index')
    @section('content')

        <section class="formation-page">            
                <div class="formation-page__title">
                    <p class="formation-page__title--header">
                        toutes les formations 
                        <span class="formation-page__title--span">
                            disponibles
                        </span> 
                    </p>
                    <p class="formation-page__title--description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, alia.
                    </p>
                </div>
                @foreach ($formations as $formation)

                <div class="formation-page__content">
                    <div class="formation-page__content--image">
                        <img src="images/{{$formation->image_icon}}" class="formation-page__content--image" alt="">
                    </div>
                    <div class="formation-page__content--titre"> <a href="formations/introduction/{{$formation->id}}" class="formation-page__content--link">{{$formation->nom}}</a></div>
                    <div class="formation-page__content--description">
                        <p>
                            {{$formation->description}}
                        </p>
                    </div>
                    
                    <div class="formation-page__content--footer">
                        <a href="formations/introduction/{{$formation->id}}" class="formation-page__content--link"><span><ion-icon name="folder-open-outline"></ion-icon> {{$formation->total_chapitres}} Chapitres</span></a>
                        <a href="formations/introduction/{{$formation->id}}" class="formation-page__content--link"><span><ion-icon name="time-outline"></ion-icon> {{$formation->total_duree}} Heures.</span></a>
                    </div>
                </div>

                @endforeach


                
                
             {{--    <div class="formation-page__content">
                    <div class="formation-page__content--image">
                        <img src="{{asset('images/phpform.png')}}" class="formation-page__content--image" alt="">
                    </div>
                    <div class="formation-page__content--titre">Apprendre php</div>
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

               {{--  <div class="formation-page__content">
                    <div class="formation-page__content--image">
                        <img src="{{asset('images/tensorform.png')}}" class="formation-page__content--image" alt="">
                    </div>
                    <div class="formation-page__content--titre">Tensorflow</div>
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
               
            {{--     <div class="formation-page__content">
                    <div class="formation-page__content--image">
                        <img src="{{asset('images/htmlform.png')}}" class="formation-page__content--image" alt="">
                    </div>
                    <div class="formation-page__content--titre">Apprendre le HTML</div>
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

               {{--  <div class="formation-page__content">
                    <div class="formation-page__content--image">
                        <img src="{{asset('images/sassform.png')}}" class="formation-page__content--image" alt="">
                    </div>
                    <div class="formation-page__content--titre">Sass</div>
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

              {{--   <div class="formation-page__content">
                    <div class="formation-page__content--image">
                        <img src="{{asset('images/gitform.png')}}" class="formation-page__content--image" alt="">
                    </div>
                    <div class="formation-page__content--titre">Apprendre git</div>
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