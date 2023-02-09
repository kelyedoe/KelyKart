@extends('visiteurs.index')
    @section('content')
        <div class="backend">
            <div class="backend__header">
                <h3 class="backend__header--logo">φως καρτ</h3>
                <p class="backend__header--text"> backend / Ajouter un podcast</p>
            </div>
            {{-- <hr class="backend__header--separator"> --}}


            <div class="backend--form">
                <form action="ajouter-podcasts" method="post" enctype="multipart/form-data" class="backend__header--form">
                    @csrf
                    <input type="text" name="titre" placeholder="Titre du podcast" class="backend__header--input" required>
                    <input type="text" name="introduction" placeholder="Introduction" class="backend__header--input" required>
                    <input type="text" name="nom_invite" placeholder="Le nom de notre invité" class="backend__header--input" required>
                    <input type="text" name="description_invite" placeholder="Description de l'invité" class="backend__header--input" required>
                    <input type="text" name="lieu_realisation" placeholder="Lieu de la réalisation" class="backend__header--input" required>
                    <input type="text" name="realisateur" placeholder="Nom du réalisateur" class="backend__header--input" required>
                    <input type="file" name="image_icon" placeholder="Icon du podcast" required>
                    <input type="number" name="duree_video" placeholder="Durée de la vidéo" class="backend__header--input" required>
                    <input type="text" name="lien_video" placeholder="Lien youtube" class="backend__header--input" required>
                    <input type="number" name="user_id" placeholder="admin Id" class="backend__header--input" required>
                    
                    <input type="submit" name="submit" class="backend__header--button">
                </form>
            </div>
            
        </div>
        
    @endsection