<?php
	
	session_start();
	$message = "";
	if(isset($_SESSION['MessageEnvoye'])){
		$message = $_SESSION['MessageEnvoye'];
	}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isabelle Forsans - Hypnose, communication quantique et Bye Bye Allergies</title>
    <link rel="stylesheet" href="./css/style.css">
    <meta name="author" content="Marc Lunel"/>
	<meta name="description" content="Hypnose, communication quantique, et traitement énergétique des allergies par Isabelle Forsans à Pau."/>
</head>
<body>
    <!-- HEADER -->
    <header class="header header-hide header-hide-mobile">
        <div class="header__menu">
            <h1 class="menu__home-button">Isabelle Forsans</h1>
            <span class="menu__hypno-button">Hypnothérapie</span>
            <span class="menu__quantum-button">Communication quantique</span>
            <span class="menu__bba-button">Bye Bye Allergies</span>
            <span class="menu__contact-button">Me contacter</span>
        </div>
        <div class="header__button">
            <button><a href="tel:0687697739">06.87.69.77.39</a></button>
        </div>        
    </header>
    
    <div class="navbar-toggler">
        <div class="animated-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- CONTENT -->
    <img class="flower-top" src="./img/flower1.png" alt="Plante décoration 1">
    <img class="flower-middle" src="./img/flower2.png" alt="Plante décoration 2">
    <img class="flower-bottom" src="./img/flower3.png" alt="Plante décoration 3">
    <main class="main">
        <!-- INTRO -->
        <section class="main__introduction">
            <div class="introduction__flower">
                <img src="./img/mainflower.png" alt="Grande fleur rose">
            </div>
            <div class="introduction__text">
                <h2>Je vous propose un accompagnement tant physique qu'émotionnel</h2>
                <p>Avec l'hypnose, la communication quantique et Bye Bye Allergies</p>
            </div>
        </section>

        <!-- TEXTS -->
        <section class="main__texts">
            <h2>Mes Services</h2>
            <div class="texts__hypnosis">
                <div class="hypnosis__text">
                    <div class="hypnosis__image-little mobile-visible">
                        <div class="hypnosis__image-little-circle">
                            <img src="./img/hypnosis.png" alt="Hypnothérapie">
                        </div>
                    </div>

                    <?php include "./texts/hypnose.html"; ?>

                </div>
                <div class="hypnosis__image">
                    <div class="hypnosis__image-circle">
                        <img src="./img/hypnosis.png" alt="Hypnothérapie">
                    </div>
                </div>
                <a href="https://www.doctolib.fr/hypnotherapeute/pau/isabelle-forsans?utm_campaign=website-button&amp;utm_source=isabelle-forsans-website-button&amp;utm_medium=referral&amp;utm_content=option-3&amp;utm_term=isabelle-forsans" target="_blank" alt="Prendre rendez-vous via DoctoLib">Prendre rendez-vous via DoctoLib</a>
            </div>
            <div class="texts__quantum">
                <div class="quantum__image">
                    <div class="quantum__image-circle">
                        <img src="./img/quantum.png" alt="Communication quantique">
                    </div>
                </div>
                <div class="quantum__text">
                    <div class="quantum__image-little mobile-visible">
                        <div class="quantum__image-little-circle">
                            <img src="./img/quantum.png" alt="Communication quantique">
                        </div>
                    </div>

                    <?php include "./texts/communication-quantique.html"; ?>

                </div>
                <a href="https://www.doctolib.fr/hypnotherapeute/pau/isabelle-forsans?utm_campaign=website-button&amp;utm_source=isabelle-forsans-website-button&amp;utm_medium=referral&amp;utm_content=option-3&amp;utm_term=isabelle-forsans" target="_blank" alt="Prendre rendez-vous via DoctoLib">Prendre rendez-vous via DoctoLib</a>
            </div>
            <div class="texts__bba">
                <div class="bba__text">
                    <div class="bba__image-little mobile-visible">
                        <div class="bba__image-little-circle">
                            <img src="./img/allergy.png" alt="Bye Bye Allergies">
                        </div>
                    </div>

                    <?php include "./texts/bye-bye-allergies.html"; ?>

                </div>
                <div class="bba__image">
                    <div class="bba__image-circle">
                        <img src="./img/allergy.png" alt="Allergies">
                    </div>
                </div>
                <a href="https://www.doctolib.fr/hypnotherapeute/pau/isabelle-forsans?utm_campaign=website-button&amp;utm_source=isabelle-forsans-website-button&amp;utm_medium=referral&amp;utm_content=option-3&amp;utm_term=isabelle-forsans" target="_blank" alt="Prendre rendez-vous via DoctoLib">Prendre rendez-vous via DoctoLib</a>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="main__contact">
            <div class="contact">

                <h2>Me contacter</h2>
                <form class="contact-form" action="./php/traitement_contact.php" method="POST">
                    <input class="contact-form__input" type="text" name="name" placeholder="Votre nom" htmlspecialchars required>
                    <input class="contact-form__input" type="email" name="email" placeholder="Votre email" htmlspecialchars required>
                    <input class="contact-form__input" type="text" name="title" placeholder="Le titre de votre message" htmlspecialchars required>
                    <textarea class="contact-form__input" name="content" rows="5" placeholder="Votre message" htmlspecialchars required></textarea>
                    <div class="g-recaptcha" data-sitekey="6LcYjqEbAAAAABAbJcOSy22ieU8ZUxTZb9haJ_n2"></div>
                    <div class="contact-form__button-container">
                        <button class="contact-form__button" onclick="checkRecaptcha();" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer__france">
            <img src="./img/france.png" alt="Logo France Relance">
            <p>Ce projet a été financé par le Gouvernement dans le cadre du plan de relance</p>
        </div> 

        <div class="footer__links">
            <div class="footer__links-usefull">
                <h3>Liens pratiques</h3>
                <ul>
                    <li><a href="https://www.bba-byebyeallergies.org/" target="_blank">Bye Bye Allergies</a></li>
                    <li><span class="footer__btn-legal-notices">Mentions légales</span></li>
                    <li><a href="https://www.linkedin.com/in/marclunel/" target="_blank">Webmaster</a></li>
                </ul>
            </div>
            <div class="footer__links-navigation">
                <h3>Navigation</h3>
                <ul>
                    <li><span class="menu__home-button">Accueil</span></li>
                    <li><span class="menu__hypno-button">Hypnothérapie</span></li>
                    <li><span class="menu__quantum-button">Communication quantique</span></li>
                    <li><span class="menu__bba-button">Bye Bye Allergies</span></li>
                    <li><span class="menu__contact-button">Me contacter</span></li>
                </ul>
            </div>
        </div>

        <p class="footer__copyright">Copyright © 2021</p>
    </footer>

    <!-- MENTIONS LEGALES -->
    <div id="legal-notices" class="display-none">
		<div class="container">
            <!-- TEXTE A INSERER ICI AVEC JAVASCRIPT -->
		</div>
		<button>Fermer</button>
	</div>

    <!-- SCRIPT -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="js/script.js"></script>
    <script> 
        function checkRecaptcha() {
            var response = grecaptcha.getResponse();
            if(response.length == 0) { 
                alert("Avant de cliquer sur \"Envoyer\", merci de confirmer que vous n'êtes pas un robot."); 
            }
        }
    </script>
</body>
</html>