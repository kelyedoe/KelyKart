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
                    <input type="text" name="nom" placeholder="Nom de la formation" value="{{$result->nom}}" class="backend__header--input">
                    <input type="text" name="description" placeholder="Description de la formation" value="{{$result->description}}"" class="backend__header--input">
                    <input type="text" name="presentation" placeholder="Presentation de la formation" value="{{$result->presentation}}"" class="backend__header--input">
                    <input type="file" name="image_icon" placeholder="Petite icon de la formation"  value="{{$result->image_icon}}">
                    <input type="text" name="video_link_presentation" placeholder="Lien video youtube" value="{{$result->video_link_presentation}}"" class="backend__header--input">
                    <input type="number" name="total_chapitres" placeholder="Nombre de chapitres" value="{{$result->total_chapitres}}" class="backend__header--input">
                    <input type="number" name="total_duree" placeholder="Durée de la video" value="{{$result->total_duree}}" class="backend__header--input">
                    <input type="file" name="icon_large" value="{{$result->icon_large}} placeholder="Large icon de la formation ">
                    <input type="submit" name="submit" class="backend__header--button">
                </form>
            </div>
            
        </div>
        
    @endsection