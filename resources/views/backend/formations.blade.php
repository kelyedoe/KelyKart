@extends('visiteurs.index')
    @section('content')
        <div class="backend">
            <div class="backend__header">
                <h3 class="backend__header--logo">φως καρτ</h3>
                <p class="backend__header--text"> backend / Formations</p>
            </div>
            {{-- <hr class="backend__header--separator"> --}}
            <a href="{{asset('backend/ajouter')}}" class="backend__add--link"><button class="backend__add--formation">Ajouter +</button></a>
            <a href="{{asset('backend/tutoriels')}}" class="backend__add--link"> <button class="backend__add--formation"> Tutoriels</button></a>
            <a href="{{asset('backend/podcasts')}}" class="backend__add--link"> <button class="backend__add--formation"> Podcasts</button></a>
        </div>
            <table class="liste">
                <tr class="liste__row">
                    <th class="liste__row--header">N°</th>
                    <th class="liste__row--header">Nom</th>
                    <th class="liste__row--header">description</th>
                    <th class="liste__row--header">Nombre de chapitres</th>
                    <th class="liste__row--header">Durée de la formation</th>
                    <th class="liste__row--header">Video Youtube</th>
                    <th class="liste__row--header">Date de Création</th>
                    <th class="liste__row--header">Options</th>
                </tr>
               {{--  style="background-color: {{ $loop->index%2 ? :'#9E9E9E' }}" --}}
                @foreach ($formations as $formation)
                <tr class="liste__row">
                    <td class="liste__row--data">{{$loop->iteration}}</td>
                    <td class="liste__row--data">{{$formation->nom}}</td>
                    <td class="liste__row--data">{{$formation->description}}</td>
                    <td class="liste__row--data">{{$formation->total_chapitres}} chps</td>
                    <td class="liste__row--data">{{$formation->total_duree}} heures</td>
                    <td class="liste__row--data">{{$formation->video_link_presentation}}</td>
                    <td class="liste__row--data">{{$formation->created_at}}</td>
                    <td class="liste__row--data">
                        <a href="/backend/mettre-a-jour/{{$formation->id}}">Edit</a>
                        <a href="#">Delete X</a> 
                         {{-- /formations/supprimer/{{$formation->id}} --}}
                        
                    </td>
                </tr>
                @endforeach
            </table>  
@endsection