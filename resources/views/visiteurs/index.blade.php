<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/vitrine.css')}}">
    <title>KelyKart</title>
</head>
<body>
    <section class="header">
        <img class="header__logo" src="{{ asset('images/kelykart.png')}}" alt="kelykart logo">

        <nav class="header__navigation">
            <ul class="header__navigation--list">
                <li class="header__navigation--link">
                    <a href="" class="link">
                        <ion-icon name="terminal-outline"></ion-icon>
                        <span>Formations</span>        
                    </a>
                </li>
                <li class="header__navigation--link">
                    <a href="" class="link">
                        <ion-icon name="mic-outline"></ion-icon>
                        <span>Podcasts</span>
                    </a>
                </li>
                <li class="header__navigation--link">
                    <a href="" class="link">
                        <ion-icon name="pencil-outline"></ion-icon><span>Blog</span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
    <hr class="header__line">

    <section class="box">
        <div class="row action">
            <div class="action__text ">
                <span class="apprenez">Apprenez</span> <br> <span class="new">de nouvelles choses</span> <br> <span class="gratuit">Gratuitement.</span>

                <div class="row buttons">
                    <button class="buttons__blue" type="button">Formations</button>
                    <button class="buttons__orange" type="button">Blog</button>
                </div>
            </div>
            <div class=" col-1-of-2">
                <img src="{{asset('images/action.jpg')}}" alt="" class="action__image">
            </div>
        </div>  
    </section>

    <section class="formations">
        <div class="formations__header">
            <span class="les">Les</span><span class="format"> formations</span> <br> <span class="disponibles">disponibles.</span>
           
        </div>
        
        <div class="formations__list">
                <div class="formations__item">
                    <div>
                        <img src="{{asset('images/laravel.png')}}" class="formations__item--image" alt="laravel">
                    </div>

                    <div class="formations__text">
                        <div class="formations__item--titre">
                            Apprendre Laravel
                        </div>
                        <div class="formations__item--description">
                            <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise</p>
                        </div>
                        <div class="formations__item--stats">
                            <span><ion-icon name="folder-open-outline"> </ion-icon>120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> 10 Heures.</span> 
                        </div>
                    </div>
                        
                </div>

                <div class="formations__item">
                    <div>
                        <img src="{{asset('images/tensorflow.png')}}" class="formations__item--image" alt="laravel">
                    </div>

                    <div class="formations__text">
                        <div class="formations__item--titre">
                             Tensorflow
                        </div>
                        <div class="formations__item--description">
                            <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise</p>
                        </div>
                        <div class="formations__item--stats">
                            <span><ion-icon name="folder-open-outline"></ion-icon>120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> 10 Heures.</span> 
                        </div>
                    </div>
                        
                </div>

                <div class="formations__item">
                    <div>
                        <img src="{{asset('images/php.png')}}" class="formations__item--image" alt="laravel">
                    </div>

                    <div class="formations__text">
                        <div class="formations__item--titre">
                            Apprendre Php
                        </div>
                        <div class="formations__item--description">
                            <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise</p>
                        </div>
                        <div class="formations__item--stats">
                            <span><ion-icon name="folder-open-outline"></ion-icon>120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> 10 Heures.</span> 
                        </div>
                    </div>
                        
                </div>

                <div class="formations__item">
                    <div>
                        <img src="{{asset('images/git.png')}}" class="formations__item--image" alt="laravel">
                    </div>

                    <div class="formations__text">
                        <div class="formations__item--titre">
                            Apprendre Git
                        </div>
                        <div class="formations__item--description">
                            <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise</p>
                        </div>
                        <div class="formations__item--stats">
                            <span><ion-icon name="folder-open-outline"></ion-icon>120 Chapitres</span>
                            <span><ion-icon name="time-outline"></ion-icon> 10 Heures.</span> 
                        </div>
                    </div>                
                </div>
        </div>        
    </section>

{{-- section des categories --}}
    
    <section class="categorie">
        <h3 class="categorie__header">Catégories</h3>
        <div class=" row categories">
            <div class=" categories__card">
                <div class="categories__card--title">
                    <a href="" class="link">
                        <ion-icon name="mic-outline"></ion-icon>
                        <span>Podcasts</span>
                    </a>
                </div>
    
                <div class="categories__card--content">
                    <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt</p>
                </div>
    
                <div class="categories__card--footer">
                    <a href="">
                        <button class="categories__card--btn" type="button">Formations</button>
                    </a>
                </div>
            </div>

            <div class=" categories__card">
                <div class="categories__card--title">
                    <a href="" class="link">
                        <ion-icon name="terminal-outline"></ion-icon>
                        <span>Formations</span>        
                    </a>
                </div>
    
                <div class="categories__card--content">
                    <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt</p>
                </div>
    
                <div class="categories__card--footer">
                    <a href="">
                        <button class="categories__card--btn" type="button">Formations</button>
                    </a>
                </div>
            </div>

            <div class=" categories__card">
                <div class="categories__card--title">
                    <a href="" class="link">
                        <ion-icon name="pencil-outline"></ion-icon><span>Blog</span>
                    </a>
                </div>
    
                <div class="categories__card--content">
                    <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt</p>
                </div>
    
                <div class="categories__card--footer">
                    <a href="">
                        <button class="categories__card--btn" type="button">Formations</button>
                    </a>
                </div>
            </div>
        </div>      
        
    </section>
{{-- Fin de section des categories --}}

{{-- Debut du footer --}}

<section class="footer row">
    
        <div class="footer__retrouvez">
            <div class="footer__retrouvez--header">Retrouvez moi</div>
            <div class="footer__retrouvez--content"><p>
                Après avoir appris sur Internet et dans les livres quoi de plus normal que de partager à son tour ? Passionné par le web depuis un peu plus de 3 ans maintenant j'aime partager mes compétences et mes découvertes avec les personnes qui ont cette même passion pour le web</p></div>
            <div class="footer__retrouvez--medias">
                <div><ion-icon name="logo-linkedin" class="footer__retrouvez--icon"></ion-icon></div>
                <div><ion-icon name="logo-octocat"  class="footer__retrouvez--icon"></ion-icon></div>
                <div><ion-icon name="logo-youtube" class="footer__retrouvez--icon"></ion-icon></div>
                <div><ion-icon name="logo-instagram" class="footer__retrouvez--icon"></ion-icon></div>
            </div>
        </div>
        <div class="footer__contactez">
            <div class="footer__logo">
                <img src="{{asset('images/kelykart.png')}}" class="footer__contactez--logo" alt="logo footer'">
            </div>
            <div class="footer__contactez--header">Contactez moi</div>
            <div class="footer__contactez--content"><p>Je vous reponds dès que possible , Merci!</p></div>
            <div class="footer__contactez--medias">
                <div><ion-icon name="logo-linkedin" class="footer__retrouvez--icon"></ion-icon></div>
                <div><ion-icon name="mail-unread-outline" class="footer__retrouvez--icon"></ion-icon></div>  
            </div>
        </div>
    
    
</section>





<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>