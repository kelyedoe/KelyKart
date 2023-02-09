@extends('visiteurs.index')
    @section('content')
        <div class="backend">
            <div class="backend__header">
                <h3 class="backend__header--logo">φως καρτ</h3>
                <p class="backend__header--text"> backend / podcasts</p>
            </div>
            {{-- <hr class="backend__header--separator"> --}}
            <a href="{{asset('backend/ajouter-podcasts')}}" class="backend__add--link"><button class="backend__add--formation">Ajouter +</button></a>
            <a href="{{asset('backend/tutoriels')}}" class="backend__add--link"> <button class="backend__add--formation"> Tutoriels</button></a>
            <a href="{{asset('backend')}}" class="backend__add--link"> <button class="backend__add--formation"> Formations</button></a>
        </div>
            <table class="liste">
                <tr class="liste__row">
                    <th class="liste__row--header">Titre</th>
                    <th class="liste__row--header">Introduction</th>
                    <th class="liste__row--header">Invité(e)s</th>
                    <th class="liste__row--header">Description Invité(e)s</th>
                    <th class="liste__row--header">Lieu</th>
                    <th class="liste__row--header">Réalisateur</th>
                    <th class="liste__row--header">Options</th>
                </tr>

                @foreach ($podcasts as $podcast)
                <tr class="liste__row">
                    <td class="liste__row--data">{{$podcast->titre}}</td>
                    <td class="liste__row--data">{{$podcast->introduction}}</td>
                    <td class="liste__row--data">{{$podcast->nom_invite}}</td>
                    <td class="liste__row--data">{{$podcast->description_invite}} heures</td>
                    <td class="liste__row--data">{{$podcast->lieu_realisation}}</td>
                    <td class="liste__row--data">{{$podcast->realisateur}}</td>
                    <td class="liste__row--data">
                        <a href="/backend/mettre-a-jour/{{$podcast->id}}">Edit</a>
                        <a href="#">Delete X</a> 
                         {{-- /formations/supprimer/{{$formation->id}} --}}
                        
                    </td>
                </tr>
                @endforeach
            </table>  
@endsection