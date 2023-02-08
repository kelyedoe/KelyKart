@extends('visiteurs.index')
    @section('content')
        <div class="backend">
            <div class="backend__header">
                <h3 class="backend__header--logo">φως καρτ</h3>
                <p class="backend__header--text"> backend / Mettre à jour une formation</p>
            </div>
            {{-- <hr class="backend__header--separator"> --}}


            <div class="backend--form">
                <form action="{{$result->id}}" method="post" enctype="multipart/form-data" class="backend__header--form">
                    @csrf
                    <input type="text" name="titre" placeholder="Nom de la formation" value="{{$result->titre}}" class="backend__header--input">
                    <input type="text" name="description" placeholder="Description de la formation" value="{{$result->description}}"" class="backend__header--input">
                    <textarea name="content" id="" cols="30" rows="10" placeholder="contenu du tutoriel" class="backend__header--input">{{$result->content}}</textarea>
                    <input type="text" name="video_youtube" placeholder="Lien video youtube" value="{{$result->video_youtube}}"" class="backend__header--input">
                    <input type="number" name="video_duree" placeholder="Durée de la vidéeo" value="{{$result->video_duree}}" class="backend__header--input">
                    <input type="number" name="formation_id" placeholder="Formation associée" value="{{$result->formation_id}}" class="backend__header--input">
                    <input type="number" name="user_id" placeholder="Créateur de contenu" value="{{$result->user_id}}" class="backend__header--input">
                    <input type="submit" name="submit" class="backend__header--button">
                </form>
            </div>
            
        </div>
        
    @endsection