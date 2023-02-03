<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testing tutoriel</title>
</head>
<body>
    <form action="ajouter" method="post">
        @csrf
        <input type="text" name="titre" placeholder="titre">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="content" placeholder="content">
        <input type="text" name="video_youtube" placeholder="Lien de la video Youtube">
        <input type="number" name="video_duree" placeholder="Durée de la video youtube">
        <input type="number" name="formation_id" placeholder="Forma">
        <input type="number" name="user_id" placeholder="user id">
        <input type="submit" name="submit">
    </form>
    <hr>

    <ul>
        
            @foreach ($tutoriels as $tutoriel)
                <li> {{ $tutoriel->titre }}</li>
            @endforeach
        
    </ul> 
</body>
</html>