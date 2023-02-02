<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update formation</title>
</head>
<body>
    <form action="{{$result->id}}" method="post">
        @csrf
        <input type="text" name="nom" placeholder="nom" value="{{$result->nom}}">
        <input type="text" name="description" placeholder="description" value="{{$result->description}}">
        <input type="text" name="presentation" placeholder="presentation" value="{{$result->presentation}}">
        <input type="text" name="image_icon" placeholder="icon de la formation" value="{{$result->image_icon}}">
        <input type="text" name="video_link_presentation" placeholder="lien video youtube" value="{{$result->video_link_presentation}}">
        <input type="number" name="total_chapitres" placeholder="nombre de chapitres" value="{{$result->total_chapitres}}">
        <input type="number" name="total_duree" placeholder="duree de la video" value="{{$result->total_duree}}">
        <input type="submit" name="submit">
    </form>
</body>
</html>