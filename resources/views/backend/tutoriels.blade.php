@extends('visiteurs.index')
    @section('content')
        <div class="backend">
            <div class="backend__header">
                <h3 class="backend__header--logo">φως καρτ</h3>
                <p class="backend__header--text"> backend / Tutoriels</p>
            </div>
            {{-- <hr class="backend__header--separator"> --}}
            <a href="{{asset('backend/ajouter-tutoriel')}}" class="backend__add--link"><button class="backend__add--formation">Ajouter +</button></a>
            <a href="{{asset('backend/')}}" class="backend__add--link"> <button class="backend__add--formation"> Formations</button></a>
       
       
        </div>
            <table class="liste">
                <tr class="liste__row">
                    <th class="liste__row--header">Titre</th>
                    <th class="liste__row--header">Description</th>
                    <th class="liste__row--header">Video youtube</th>
                    <th class="liste__row--header">Durée de la vidéo</th>
                    <th class="liste__row--header">Formation asociée</th>
                    <th class="liste__row--header">Créateur du tuto</th>
                    <th class="liste__row--header">Date de création</th>
                    <th class="liste__row--header">Options</th>
                </tr>

                @foreach ($tutoriels as $tuto)
                <tr class="liste__row">
                    <td class="liste__row--data">{{$tuto->titre}}</td>
                    <td class="liste__row--data">{{$tuto->description}}</td>
                    <td class="liste__row--data">{{$tuto->video_youtube}}</td>
                    <td class="liste__row--data">{{$tuto->video_duree}}</td>
                    <td class="liste__row--data">{{$tuto->formation_id}}</td>
                    <td class="liste__row--data">{{$tuto->user_id}}</td>
                    <td class="liste__row--data">{{$tuto->created_at}}</td>
                    <td class="liste__row--data">
                        <a href="/backend/update-tutoriel/{{$tuto->id}}">Edit</a>
                        <a href="#">Delete X</a> 
                         {{-- /formations/supprimer/{{$formation->id}} --}}
                        
                    </td>
                </tr> 
                @endforeach
            </table>
            
            
       
        
    @endsection