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
                    <textarea name="content" id="" cols="30" rows="10" placeholder="contenu du tutoriel" class="backend__header--input double__col"></textarea>
                    <input type="text" name="video_youtube" placeholder="Lien video youtube" class="backend__header--input" required>
                    <input type="number" name="video_duree" placeholder="Durée de la vidéo" class="backend__header--input" required>
                    <input type="number" name="formation_id" placeholder="id de la formation" class="backend__header--input" required>
                    <input type="number" name="user_id" placeholder="id de l'admin" class="backend__header--input" required>
                    <input type="submit" name="submit" class="backend__header--button">
                </form>
            </div>
            
        </div>



<script src="https://cdn.tiny.cloud/1/p5m5cpps2lsjunbrkwhjmb6g8n72y0rq62x907hyjvc5httv/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
    });
</script>
@endsection