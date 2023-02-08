@extends('visiteurs.index')
    @section('content')
        <div class="backend">
            <div class="backend__header">
                <h3 class="backend__header--logo">φως καρτ</h3>
                <p class="backend__header--text"> backend / Ajouter une formation</p>
            </div>
            {{-- <hr class="backend__header--separator"> --}}


            <div class="backend--form">
                <form action="ajouter" method="post" enctype="multipart/form-data" class="backend__header--form">
                    @csrf
                    <input type="text" name="nom" placeholder="Nom de la formation" class="backend__header--input" required>
                    <input type="text" name="description" placeholder="Description de la formation" class="backend__header--input" required>
                    <input type="text" name="presentation" placeholder="Presentation de la formation" class="backend__header--input" required>
                    <input type="file" name="image_icon" placeholder="Petite icon de la formation" required>
                    <input type="text" name="video_link_presentation" placeholder="Lien video youtube" class="backend__header--input" required>
                    <input type="number" name="total_chapitres" placeholder="Nombre de chapitres" class="backend__header--input" required>
                    <input type="number" name="total_duree" placeholder="Durée de la video" class="backend__header--input" required>
                    <input type="file" name="icon_large" placeholder="Large icon de la formation " required>
                    <input type="submit" name="submit" class="backend__header--button">
                </form>
            </div>
            
        </div>
        
    @endsection