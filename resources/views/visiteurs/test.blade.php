<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testing view</title>
</head>
<body>
    <form action="ajouter" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="presentation" placeholder="presentation">
        <input type="file" name="image_icon" placeholder="petite icon de la formation">
        <input type="text" name="video_link_presentation" placeholder="lien video youtube">
        <input type="number" name="total_chapitres" placeholder="nombre de chapitres">
        <input type="number" name="total_duree" placeholder="duree de la video">
        <input type="file" name="icon_large" placeholder="icon large ">
        <input type="submit" name="submit">
    </form>
    <hr>
{{-- {{ var_dump($formation)}} --}}
    <ul>
        
            @foreach ($formations as $formation)
                <li> {{ $formation->nom }}</li>
            @endforeach
        
    </ul>
</body>
</html>