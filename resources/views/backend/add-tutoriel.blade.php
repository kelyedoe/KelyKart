@extends('visiteurs.index')
    @section('content')
        <div class="backend">
            <div class="backend__header">
                <h3 class="backend__header--logo">φως καρτ</h3>
                <p class="backend__header--text"> backend / Ajouter un tuto</p>
            </div>
            {{-- <hr class="backend__header--separator"> --}}


            <div class="backend--form">
                <form action="ajouter-tutoriel" method="post" enctype="multipart/form-data" class="backend__header--form">
                    @csrf
                    <input type="text" name="titre" placeholder="Titre du tutoriel" class="backend__header--input" required>
                    <input type="text" name="description" placeholder="Description de la formation" class="backend__header--input" required>
                    <textarea name="content" id="" cols="30" rows="10" placeholder="contenu du tutoriel" class="backend__header--input"></textarea>
                    <input type="text" name="video_youtube" placeholder="Lien video youtube" class="backend__header--input" required>
                    <input type="number" name="video_duree" placeholder="Nombre de chapitres" class="backend__header--input" required>
                    <input type="number" name="formation_id" placeholder="Durée de la video" class="backend__header--input" required>
                    <input type="number" name="user_id" placeholder="Durée de la video" class="backend__header--input" required>
                    
                    <input type="submit" name="submit" class="backend__header--button">
                </form>
            </div>
            
        </div>
        
    @endsection