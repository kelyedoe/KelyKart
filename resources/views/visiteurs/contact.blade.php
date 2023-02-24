@extends('visiteurs.index')
@section('content')

<div class="contact">
    <div class="contact__title">
        <span class="contact__title--contact">Contactez</span> <span class="contact__title--moi">moi</span> .
        <p class="contact__title--decription">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti quis odio <br>
             perspiciatis aperiam quia, ipsum consectetur officiis quibusdam nihil praesentium.</p>
    </div>

    <form action="" class="contact__form">
        <div class="contact__form--element">
            <label for="" class="contact__form--label">VOTRE NOM</label><br>
            <input type="text" class="contact__form--input">
        </div>

        <div class="contact__form--element">
            <label for="" class="contact__form--label">VOTRE EMAIL</label><br>
            <input type="text" class="contact__form--input">
        </div>

        <div class="contact__form--element">
            <label for="" class="contact__form--label">VOTRE MESSAGE</label><br>
            <textarea name=""  rows="10" id="" class="contact__form--message" ></textarea>
        </div>

        <div class="reseaux__sociaux">contact via social media</div>
      
        <div class="contact__form--button">
            <a href="">
                <button class="button__message">Envoyer</button>
            </a>
        </div>
        
    </form>
    
</div>

@endsection