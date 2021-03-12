<?php require_once "pixeldata.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


   
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/css/owl.theme.default.min.css">
    <link rel="icon" type="dist/image/png" href="dist/images/favicon.png"/>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css"/> -->
    <!-- Add the new slick-theme.css if you want the default styling -->
    <!-- <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> -->

    <!-- onscroll animation library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- usefull utility classes -->
    <link rel="stylesheet" href="dist/css/util.css">
    <!-- our own css -->
    <link rel="stylesheet" href="dist/css/styles.css" />
    <!-- Facebook Pixel Code -->
      <?php showpixles()?> 
    <!-- End Facebook Pixel Code -->
    <title>MyBaby.ma</title>  
  </head>
  <body>
  
<section class="navigation">
    <nav class="container">
        <a href="my-baby.ma" class="navigation__logolink">
            <img src="dist/images/logo.png" alt="my-baby.ma logo" class="navigation__logoimg">
        </a>
        <input type="checkbox" id="navigation__humberger-btn" class="navigation__humberger-btn">
        <label for="navigation__humberger-btn" class="navigation__humberger-icon">
            <span class="navigation__navicon"></span>
        </label>
        <ul class="navigation__menu list-unstyled">
            <li class="navigation__menu-item">
                <a href="#" class="navigation__menu-item-link">Accueil</a>
            </li>            
            <li class="navigation__menu-item">
                <a href="#aboutsection" class="navigation__menu-item-link">Spécifications</a>
            </li>            
            <li class="navigation__menu-item">
                <a href="#features" class="navigation__menu-item-link">caractéristiques</a>
            </li>            
            <li class="navigation__menu-item">
                <a href="#testimonials" class="navigation__menu-item-link">Témoignages</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#buy__form" class="btn btn--nav">ACHETER</a>
            </li>
        </ul>
        
    </nav>
</section>

<header class="header">
    <div class="round_shap round_shap--one"></div>
    <div class="round_shap round_shap--two"></div>
    <div class="round_shap round_shap--three"></div>
    <div class="round_shap round_shap--four"></div>
    <div class="round_shap round_shap--five"></div>
    <img class="round_shap round_shap--six" src="dist/images/round_img.svg"></img>
    <div class="round_shap round_shap--seven"></div>
    <div class="header__container">
        <div class="header__container-row">
            <div class="header__container-content">
                <p class="header__container-content-topdescription">Légère , Pratique et robuste</p>
                <h1 class="header__container-content-title">Poussette Réversible Tendance Aluminium Robuste</h1>
                <h2 class="header__container-content-price">
                    <span class="header__container-content-price--text">Prix</span>
                    <span class="header__container-content-price--num">1749 MAD</span>
                </h2>
                <p class="header__container-content-bottomdescription">La poussette 2en1 tendance convient aux enfants de la naissance à 4 ans</p>
                <a href="#buy__form"  class="btn btn--header">acheter maintenant</a>
            </div>
            <div class="header__container-product">
                <img src="dist/images/prodtransparenttt.png" alt="" class="header__container-product-image">
                <div class="header__container-product-circle"></div>
            </div>
        </div>
    </div>
</header>
<section class="about" id="aboutsection">
    <div class="about__AproposIm">
        
        <img class="about__AproposIm--imagesShap" src="dist/images/shape_squer.png" alt="poussette">
        <div class="about__AproposIm--imagesPous"></div>
        <!-- <img class="about__AproposIm--imagesPous" src="dist/images/poussettecrop1.jpg" alt="poussette"> -->
        <img class="about__AproposIm--babystamps" src="dist/images/babystamps.png" alt="poussette">
        
    </div>
    <div class="about__Apropos">
        <h2 class="about__Apropos--title">A propos de Poussette</h2>
        <p class="about__Apropos--desc">
            Laisser le bébé faireface a la mére. En poussant la pousset , li est pratique que la mére observe
            le bébé. easy fold : Vous pouvez plier cette poussette en quelques secondes.  
        </p>
        <a class="btn btn--about " href="#buy__form" >
            ACHETER MANTENANT
        </a>
        <!-- about__Apropos--BtnAch  -->
    </div>
</section>
<section class="information">
    <div class="information__siege">
        <h2 class="information__siege--title">Siège inclinable à multiples positions</h2>
        <p class="information__siege--desc">Trois positions peuvent être réglées</p>
        <div class="information__siege--list">
            <ul>
                <li>mode allongé</li>
                <li> mode assis</li>
            </ul>
            <ul>
                <li>mode semi-allongé</li>
                <li> mode assis</li>
            </ul>
        </div>
        <hr class="information__siege--line">
        <div class="information__siege--achatRating">
             <div class="achat">
                <div class="achatRating">
                    <h4>24</h4>
                    <p>MILLION</p>
                </div>
                <h4>Achat</h4>
            </div>
            <div class="achat">
                <div class="achatRating">
                    <h4>5</h4>
                    <p>STARS</p>
                </div>
                <h4>Rating</h4>
            </div>
        </div>
    </div>
    <div class="information__siegeIm">
        <!-- <div class="information__siegeIm--strtransparent">
        </div> -->
        <div class="information__siegeIm--liRound">
        </div>
        <div class="information__siegeIm--bigRound">
        </div>
        <img class="information__siegeIm--imagesShap" src="dist/images/shape_squer.png" alt="poussette">
        <img class="information__siegeIm--Poussette" src="dist/images/Poussette-robuste.png" alt="poussettecrop">
        <img class="information__siegeIm--strtransparent" src="dist/images/str1transparent.png" alt="poussettecrop">
        
        
    </div>
</section> 
<section class="features" id="features">
    <!-- <div class="features__shape-bg">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920px" height="981px" data-parallax="{&quot;x&quot;: 0, &quot;y&quot;: 0}"> <path fill-rule="evenodd" fill="rgb(252, 250, 251)" d="M0.000,-0.000 L1920.000,-0.000 L1920.000,699.697 C1920.000,699.697 1634.664,1289.311 1027.045,759.691 C813.812,573.831 462.508,819.658 244.090,819.658 C56.289,819.658 0.000,669.705 0.000,669.705 L0.000,-0.000 Z"></path> </svg>
    </div> -->
    <div class="features__featuresImg">
        <div class="features__featuresImg--litlleRound"></div>
        <div class="features__featuresImg--bigRound"></div>
        <img class="features__featuresImg--PoussImg" src="dist/images/strProd2.png" alt="">
    </div>
    <div class="features__featuresInfo">
        <h2 class="features__featuresInfo--title">caractéristiques du produit</h2>
        <p class="features__featuresInfo--desc">Utilisable dès la naissance jusqu’à 4 ans et demi</p>
        <div class="features__featuresInfo--carac">
            <div class="caracteristique">
                <img src="dist/images/amort.jpg" alt="Amortissantes">
                <p>Amortissantes</p>
            </div>
            <div class="caracteristique">
                <img src="dist/images/freinage.jpg" alt="Freinage">
                <p>Freinage</p>
            </div>
            <div class="caracteristique">
                <img src="dist/images/Moustiquare.jpg" alt="Moustiquaire">
                <p>Moustiquaire</p>
            </div>
            <div class="caracteristique">
                <img src="dist/images/conduiterev.jpg" alt="conduite Révérsibl">
                <p>conduite Révérsible</p>
            </div>
            <div class="caracteristique">
                <img src="dist/images/pilagefacilee.png" alt="pliage facile">
                <p>pliage facile</p>
            </div>
            <div class="caracteristique">
                <img src="dist/images/facilecond.jpg" alt="contrôler facilement">
                <p>contrôler facilement</p>
            </div>

        </div>
        <a class="btn btn--carac" href="#buy__form" >ACHETER MAINTENANT</a>
    </div>
</section>
<section class="testimonials" id="testimonials">
    <div class="testimonials__heading">
        <h2 class="testimonials__heading--title">Témoignages</h2>
        <p class="testimonials__heading--description">Les clients disent
            À propos de la poussette</p>
    </div>
    <div class="testimonials__container">
        <div class="testimonials__row owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="testimonials__card owl-item">
                        <div class="testimonials__card-heading">
                            <div class="testimonials__card-imgcontainer"></div>
                            <div class="testimonials__card-heading-text">
                                <h3 class="testimonials__card-title">Amal Om anas</h3>
                                <p class="testimonials__card-subtitle">Acheté une poussette</p>
                            </div>
                        </div>
                        <div class="testimonials__card-subheading">
                            <p class="testimonials__card-subheading-description">Lorem ipsum dolor sit amet consectetur adipiscing elit donec </p>
                            <div class="testimonials__card-subheading-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials__card owl-item">
                        <div class="testimonials__card-heading">
                            <div class="testimonials__card-imgcontainer"></div>
                            <div class="testimonials__card-heading-text">
                                <h3 class="testimonials__card-title">Amal Om anas</h3>
                                <p class="testimonials__card-subtitle">Acheté une poussette</p>
                            </div>
                        </div>
                        <div class="testimonials__card-subheading">
                            <p class="testimonials__card-subheading-description">Lorem ipsum dolor sit amet consectetur adipiscing elit donec </p>
                            <div class="testimonials__card-subheading-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials__card owl-item">
                        <div class="testimonials__card-heading">
                            <div class="testimonials__card-imgcontainer"></div>
                            <div class="testimonials__card-heading-text">
                                <h3 class="testimonials__card-title">Amal Om anas</h3>
                                <p class="testimonials__card-subtitle">Acheté une poussette</p>
                            </div>
                        </div>
                        <div class="testimonials__card-subheading">
                            <p class="testimonials__card-subheading-description">Lorem ipsum dolor sit amet consectetur adipiscing elit donec </p>
                            <div class="testimonials__card-subheading-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="buy" id="buy__form">
<div class="buy__container">
    <div class="buy__row">
        <div class="buy__information" action="#" id="buy-form">
            <p class="buy__information-logo">MYBABY.</p>
            <ul class="buy__information-list list-unstyled">
                <li class="buy__information-item">
                    <!-- <img src="dist/images/startup.svg" alt="" class="buy__information-item-icon"> -->
                    <svg class="buy__information-item-icon" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001"><path d="M268.662 243.351a10 10 0 00-14.15 0c-3.9 3.9-3.9 10.23 0 14.14 3.91 3.9 10.24 3.9 14.15 0 3.9-3.91 3.9-10.24 0-14.14zM395.933 116.07c-19.54-19.539-51.172-19.54-70.713 0-19.489 19.489-19.49 51.209.003 70.714 19.496 19.484 51.216 19.492 70.71-.002 19.538-19.538 19.542-51.171 0-70.712zm-14.142 56.569c-11.693 11.694-30.727 11.694-42.426.002-11.695-11.702-11.696-30.736-.002-42.429 11.723-11.723 30.703-11.725 42.428 0 11.723 11.722 11.725 30.703 0 42.427z"/><path d="M509.07 2.929a9.965 9.965 0 00-7.43-2.922c-2.261.081-56.096 2.245-120.091 24.864-51.28 18.106-94.023 44.029-127.042 77.049a380.537 380.537 0 00-21.488 23.396c-32.648-19.218-58.81-13.192-75.349-4.341-38.081 20.38-61.652 75.716-61.652 115.296a10.007 10.007 0 0010.001 10 10 10 0 007.073-2.929c20.083-20.083 44.854-18.827 52.946-17.763l3.502 3.502c-6.892 16.4-12.444 32.708-16.516 48.569-1.47 5.74-.974 11.814 1.211 17.37-9.628 4.437-18.917 10.952-27.005 19.04-25.741 25.742-30.968 88.476-31.178 91.134a10 10 0 0010.755 10.756c2.658-.209 65.394-5.436 91.135-31.177 8.085-8.085 14.599-17.373 19.036-26.999 5.882 2.313 11.936 2.598 17.38 1.203 15.854-4.071 32.16-9.621 48.562-16.514l3.502 3.502c1.063 8.093 2.319 32.864-17.763 52.945a10 10 0 007.071 17.07c39.58 0 94.915-23.571 115.295-61.652 8.851-16.537 14.877-42.699-4.341-75.348a380.674 380.674 0 0023.396-21.488c33.02-33.02 58.942-75.763 77.048-127.039 22.62-63.998 24.783-117.834 24.864-120.094.1-2.775-.959-5.466-2.922-7.43zM118.376 214.762c6.212-30.063 24.255-63.052 48.735-76.154 16.359-8.754 34.24-7.896 53.252 2.511a404.33 404.33 0 00-42.015 68.487c-.149-.092-1.949-2.355-5.293-3.109-1.375-.311-27.834-6.002-54.679 8.265zM183.8 370.63c-13.75 13.75-46.005 21.002-66.392 23.963 2.962-20.388 10.215-52.642 23.964-66.391 7.7-7.7 16.628-13.538 25.602-16.826l33.652 33.652c-3.288 8.974-9.125 17.902-16.826 25.602zm45.59-31.027c-2.894.741-6.246-.347-8.738-2.835l-19.586-19.585-25.826-25.827c-2.494-2.499-3.582-5.85-2.843-8.739 3.203-12.474 7.392-25.272 12.486-38.193l82.695 82.695c-12.923 5.095-25.719 9.283-38.188 12.484zm144.004 5.288c-13.102 24.479-46.09 42.523-76.152 48.734 9.585-18.037 11.698-40.998 8.196-54.921-.813-3.234-2.923-4.86-3.041-5.051a404.48 404.48 0 0068.486-42.015c10.407 19.014 11.264 36.897 2.511 53.253zM395.94 243.35a362.965 362.965 0 01-28.84 25.872c-24.342 19.6-51.134 36.202-79.718 49.418l-94.02-94.018c13.216-28.586 29.818-55.378 49.416-79.717 8.164-10.133 16.868-19.837 25.875-28.843 29.625-29.626 67.859-53.204 113.671-70.176l83.792 83.792c-16.97 45.811-40.548 84.045-70.176 113.672zm77.371-134.763l-69.896-69.896c38.081-11.828 71.21-16.257 87.746-17.849-1.593 16.539-6.023 49.668-17.85 87.745z"/><path d="M240.371 413.049c-3.907-3.905-10.239-3.903-14.143.002l-28.28 28.29c-3.904 3.906-3.903 10.238.002 14.142 3.907 3.904 10.239 3.904 14.143-.002l28.28-28.29c3.904-3.906 3.903-10.238-.002-14.142zM98.954 271.631c-3.904-3.906-10.235-3.906-14.142-.002l-28.29 28.28c-3.906 3.904-3.907 10.236-.003 14.142 3.903 3.904 10.234 3.908 14.142.002l28.29-28.28c3.906-3.904 3.907-10.236.003-14.142zM169.663 427.2c-3.903-3.905-10.236-3.905-14.142-.001l-67.74 67.73c-3.906 3.905-3.906 10.237-.001 14.142 3.903 3.905 10.236 3.907 14.142.001l67.74-67.73c3.906-3.905 3.906-10.237.001-14.142zm-80 0c-3.904-3.905-10.237-3.905-14.142-.001l-67.74 67.73c-3.906 3.905-3.906 10.237-.001 14.142 3.903 3.905 10.236 3.907 14.142.001l67.74-67.73c3.906-3.905 3.906-10.237.001-14.142zm-4.861-84.862c-3.904-3.904-10.237-3.904-14.142.001l-67.73 67.74c-3.905 3.906-3.905 10.237.001 14.143 3.905 3.905 10.237 3.905 14.142-.001l67.73-67.74c3.905-3.906 3.905-10.237-.001-14.143zm226.281-141.419c-3.906-3.905-10.236-3.905-14.143 0l-14.14 14.14c-3.905 3.905-3.905 10.237 0 14.143 3.906 3.905 10.237 3.905 14.143 0l14.14-14.14c3.905-3.905 3.905-10.237 0-14.143z"/></svg>
                    <div class="buy__information-item-heading">
                        <h3 class="buy__information-item-title">Livraison Gratuite</h3>
                        <p class="buy__information-item-subtitle">à partir de 400 dh</p>
                    </div>
                </li>
                <li class="buy__information-item">
                    <svg class="buy__information-item-icon" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M458.667 85.333H53.333C23.936 85.333 0 109.269 0 138.667v234.667c0 29.397 23.936 53.333 53.333 53.333h405.333c29.397 0 53.333-23.936 53.333-53.333V138.667c.001-29.398-23.935-53.334-53.332-53.334zm32 288c0 17.643-14.357 32-32 32H53.333c-17.643 0-32-14.357-32-32V138.667c0-17.643 14.357-32 32-32h405.333c17.643 0 32 14.357 32 32v234.666z"/><path d="M501.333 149.333H10.667C4.779 149.333 0 154.112 0 160v64c0 5.888 4.779 10.667 10.667 10.667h490.667c5.888 0 10.667-4.779 10.667-10.667v-64c-.001-5.888-4.78-10.667-10.668-10.667zm-10.666 64H21.333v-42.667h469.333v42.667zm-288 85.334h-128c-5.888 0-10.667 4.779-10.667 10.667S68.779 320 74.667 320h128c5.888 0 10.667-4.779 10.667-10.667s-4.779-10.666-10.667-10.666zm0 42.666h-128C68.779 341.333 64 346.112 64 352s4.779 10.667 10.667 10.667h128c5.888 0 10.667-4.779 10.667-10.667-.001-5.888-4.779-10.667-10.667-10.667zm213.333-64h-21.333c-17.643 0-32 14.357-32 32v21.333c0 17.643 14.357 32 32 32H416c17.643 0 32-14.357 32-32v-21.333c0-17.642-14.357-32-32-32zm10.667 53.334c0 5.888-4.779 10.667-10.667 10.667h-21.333c-5.888 0-10.667-4.779-10.667-10.667v-21.333c0-5.888 4.779-10.667 10.667-10.667H416c5.888 0 10.667 4.779 10.667 10.667v21.333z"/></svg>
                    <div class="buy__information-item-heading">
                        <h3 class="buy__information-item-title">Paiement à la livraison</h3>
                        <p class="buy__information-item-subtitle"></p>
                    </div>
                </li>
                <li class="buy__information-item">
                    <svg class="buy__information-item-icon" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001"><path d="M468.53 306.575c-4.14-10.239-15.798-15.188-26.038-11.046-10.241 4.14-15.187 15.797-11.047 26.038L455 379.833l-69.958-30.839a20.002 20.002 0 00-15.917-.095c-23.908 10.201-49.52 15.373-76.124 15.373-107.073 0-179-83.835-179-162.136 0-89.402 80.299-162.136 179-162.136s179 72.734 179 162.136c0 6.975-.65 15.327-1.781 22.913-1.63 10.925 5.905 21.102 16.83 22.732 10.926 1.634 21.103-5.905 22.732-16.83 1.431-9.59 2.219-19.824 2.219-28.815 0-54.33-23.006-105.308-64.783-143.543C405.936 20.809 351.167 0 293.001 0S180.067 20.809 138.784 58.592c-37.332 34.168-59.66 78.516-63.991 126.335C27.836 216.023.001 265.852.001 319.525c0 33.528 10.563 65.34 30.67 92.717L1.459 484.504a19.998 19.998 0 004.621 21.855 19.989 19.989 0 0021.988 3.942l84.229-37.13c21.188 7.887 43.585 11.88 66.703 11.88.5 0 .991-.039 1.482-.075 33.437-.253 65.944-9.048 94.098-25.507 25.218-14.744 45.962-34.998 60.505-58.917a230.144 230.144 0 0041.547-11.551l107.301 47.3a20 20 0 0021.989-3.942 19.998 19.998 0 004.621-21.855L468.53 306.575zM179.002 445c-.273 0-.539.03-.81.041-20.422-.104-40.078-4.118-58.435-11.95a19.991 19.991 0 00-15.916.095l-46.837 20.646 15.109-37.375a20.001 20.001 0 00-3.322-20.47c-18.835-22.097-28.79-48.536-28.79-76.462 0-31.961 13.445-62.244 36.969-85.206 7.324 39.925 27.989 78.117 59.162 108.119 38.791 37.333 90.101 58.961 145.506 61.565C255.626 429.608 218.402 445 179.002 445z"/><circle cx="292.001" cy="203" r="20"/><circle cx="372.001" cy="203" r="20"/><circle cx="212.001" cy="203" r="20"/></svg>
                    <div class="buy__information-item-heading">
                        <h3 class="buy__information-item-title">Garantie et Assistance</h3>
                        <p class="buy__information-item-subtitle">Conseil Personnalisé</p>
                    </div>
                </li>
            </ul>
            <div class="buy__information-design">
                <div class="buy__information-design-inner">
                    <div class="buy__round buy__round--one"></div>
                    <div class="buy__round buy__round--two">
                        <h1 class="buy__price">
                            <span class="buy__price--num">1749</span>
                            <span class="buy__price--text">MAD</span>
                        </h1>
                    </div>
                </div>
            </div>

        </div>
        <form class="buy__form"  action="#" method="POST">
            <h2 class="buy__form-title">INFORMATIONS DU CONTACT</h2>
            <ul class="buy__form-list">
                <input type="text" id="fullname" placeholder="Nom & Prénom" class="buy__form-item">
                <input type="tel" id="phone" placeholder="Téléphone" required class="buy__form-item">
                <p class="errorconf"></p>
                <input type="tel" id="phone2" placeholder="Confirmation Téléphone" required class="buy__form-item">
                <p class="errorconf errorconf--two"></p>
                <input type="text" id="address" placeholder="address" class="buy__form-item">
            </ul>
            <button href="#buy-form" type="submit" class="btn btn--form">ACHETER</button>
        </form>
    </div>
</div>
</section>
<footer class="footer" >
    <div class="footer__about">
        <img src="dist/images/logo.png" alt="" class="footer__about-logo">
        <p class="footer__about-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        <form action="#" class="footer__about-form">
            <input type="email" placeholder="Email" class="footer__about-newsletter">
            <a href="#" type="submit" class="footer__about-submit">SEND</a>
        </form>
    </div>
    <div class="footer__links">
        <ul class="footer__links-list footer__links-list--one list-unstyled">
            <li class="footer__links-list-item footer__links-list-header">About Us</li>
            <li class="footer__links-list-item">Contact us</li>
            <li class="footer__links-list-item">About us</li>
            <li class="footer__links-list-item">FAQ</li>
        </ul>
        <ul class="footer__links-list footer__links-list--two list-unstyled">
            <li class="footer__links-list-item footer__links-list-header">Helpful links</li>
            <li class="footer__links-list-item">Privacy Policy</li>
            <li class="footer__links-list-item">Terms of Service</li>
            <li class="footer__links-list-item">Support</li>
        </ul>
    </div>
</footer>
<section class="subfooter">
    <div class="subfooter__container">
        <p class="subfooter__copyright">© Copyright 2020 My-Baby.ma</p>
        <div class="subfooter__container-social">
            <p class="subfooter__container-social-text">Follow us :</p>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
        </div>
    </div>
</section>
    
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="dist/js/typed-js/typed.min.js"></script>
    <script src="https://kit.fontawesome.com/ecadb3d96a.js" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="dist/js/owl.carousel.min.js"></script>
    <!-- <script type="text/javascript" src="slick/slick.min.js"></script> -->
    <script src="dist/js/main.min.js"></script>
    <!-- <script src="js/owl-carousel/owl.carousel.min.js"></script> -->
    <!-- onscroll animation library -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<div class="buy-now-sticky">
    <a href="#buy-form" class="btn btn--tertiary button-sticky b-center" style="margin: 0 auto;">Acheter Maintenant</a>
    <a href="https://wa.link/jzrazw" class="button-whatsapp button-sticky "><img src="dist/images/icons8-whatsapp-64.png" class="button-whatsapp__img" />Whatsapp</a>
  </div>
<div class="" id="popup">
		<div class="popup__content ">
			<div class="popup__right">
			<?php //if (isset($_GET['order'])) {echo "<script> fbq('track', 'Purchase');</script>";}?> 
				<a href="./" class="popup__close">&times;</a>
				<div class="success-checkmark">
					<div class="check-icon">
						<span class="icon-line line-tip"></span>
						<span class="icon-line line-long"></span>
						<div class="icon-circle"></div>
						<div class="icon-fix"></div>
					</div>
				</div>
				<h3 class="heading-tertiary">Merci pour votre confiance</h3>
				<p class="popup__text">
					La demande a été enregistrée! Notre équipe vous contactera pour confirmer votre demande dans les plus brefs délais.<br>
				</p>
				<a class="btn btn--popup button-popup" href="./">Confirmer la commande</a>
			</div>
		</div>
	</div>

<!-- custom js -->
<script>

  var owl = $(".owl-carousel");
  owl.owlCarousel({
    loop: true,
    autoWidth:false,
    autoplay:false,
    autoplayTimeout:3000,
    margin: 10,
    responsiveClass: true,
    items: 3,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
        margin: 20,
        nav: false,
      },
    },
  });

</script>
</body>
</html>
