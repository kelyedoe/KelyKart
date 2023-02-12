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