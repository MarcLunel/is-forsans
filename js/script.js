let header = document.querySelector(".header");
let servicesTitleTop = document.querySelector(".main__texts h2").offsetTop;
let main = document.querySelector(".main");
let contact = document.querySelector(".contact");
let footer = document.querySelector(".footer");
let hypnoTitle = document.querySelector(".hypnosis__text h3");
let quantumTitle = document.querySelector(".quantum__text h3");
let bbaTitle = document.querySelector(".bba__text h3");
let homeButton = document.querySelectorAll('.menu__home-button');
let hypnoButton = document.querySelectorAll('.menu__hypno-button');
let quantumButton = document.querySelectorAll('.menu__quantum-button');
let bbaButton = document.querySelectorAll('.menu__bba-button');
let contactButton = document.querySelectorAll('.menu__contact-button');
let legalNoticesButton = document.querySelectorAll('.footer__btn-legal-notices');
let hypnoImage = document.querySelector(".hypnosis__image-circle");
let quantumImage = document.querySelector(".quantum__image-circle");
let bbaImage = document.querySelector(".bba__image-circle");
let hypnoText = document.querySelector(".hypnosis__text");
let quantumText = document.querySelector(".quantum__text");
let bbaText = document.querySelector(".bba__text");
let topPage = document.querySelector(".main__introduction");
let contactSection = document.querySelector(".main__contact");
let menuIcon = document.querySelector(".animated-icon");
let menuButtons = document.querySelectorAll(".header__menu span");
let menuH1 = document.querySelector(".header__menu h1");
let flowerMiddle = document.querySelector(".flower-middle");
let flowerBottom = document.querySelector(".flower-bottom");
let legalNotices = document.getElementById("legal-notices");
let legalNoticesText = legalNotices.getElementsByClassName("container");
let legalNoticesClose = legalNotices.querySelectorAll("#legal-notices button");
let windowWidth = window.innerWidth;

const widthSmartphone = 767;
const widthTablet = 1199;


// POSITIONNER LES FLEURS SUR LA PAGE
positionFlowers();
function positionFlowers(){
    let position1 = main.offsetHeight /2;
    let position2 = contact.offsetTop;
    flowerMiddle.style.top = position1 + "px";
    flowerBottom.style.top = position2 + "px";
}



// FAIRE APPARAITRE OU FAIRE DISPARAITRE LE HEADER EN FONCTION DE LA POSITION SUR L'ECRAN
hideMenu();
hideMenuBurger();
window.addEventListener('scroll', function() {
    hideMenu();
    hideMenuBurger();
});

menuIcon.parentNode.addEventListener('click', function(){
    menuIcon.classList.toggle("open");
    if(menuIcon.classList.contains('open')){
        header.classList.remove("header-hide-mobile");
    } else {
        header.classList.add("header-hide-mobile");
    }
});

menuH1.addEventListener('click', function(){
    if(menuIcon.classList.contains('open') && windowWidth < widthTablet){
        menuIcon.classList.toggle("open");
        header.classList.add("header-hide-mobile");
    }
});

menuButtons.forEach(button => {
    button.addEventListener('click', function(){
        if(menuIcon.classList.contains('open') && windowWidth < widthTablet){
            menuIcon.classList.toggle("open");
            header.classList.add("header-hide-mobile");
        }
    });
});

main.addEventListener('click', function(){
    if(menuIcon.classList.contains('open') && windowWidth < widthTablet){
        menuIcon.classList.toggle("open");
        header.classList.add("header-hide-mobile");
    }
});

footer.addEventListener('click', function(){
    if(menuIcon.classList.contains('open') && windowWidth < widthTablet){
        menuIcon.classList.toggle("open");
        header.classList.add("header-hide-mobile");
    }
});

function hideMenu(){
    if(windowWidth >= widthTablet){
        header.classList.remove("header-hide-mobile");
        if(window.scrollY + 300 >= servicesTitleTop){
            header.classList.remove("header-hide");
        } else {
            header.classList.add("header-hide");
        }
    } else if (windowWidth < widthTablet && menuIcon.classList.contains('open')) {
        header.classList.remove("header-hide-mobile");
    } else {
        header.classList.remove("header-hide");
        header.classList.add("header-hide-mobile");
    }
}

function hideMenuBurger(){
    if(windowWidth >= widthTablet){
        menuIcon.parentNode.classList.add("animated-icon-hide");
    } else {
        menuIcon.parentNode.classList.remove("animated-icon-hide");
    }
}



// FAIRE DEPLACER LES ILLUSTRATIONS SUR LE COTE DES TEXTES
window.addEventListener('scroll', function() {
    if(windowWidth >= widthSmartphone){
        moveImageNearText(hypnoImage, hypnoText);
        moveImageNearText(quantumImage, quantumText);
        moveImageNearText(bbaImage, bbaText);

        
        function moveImageNearText(image, text){
            
            let imageTop = image.offsetTop;
            
            window.addEventListener('scroll', function() {

                if(windowWidth >= widthSmartphone){
                    if(window.scrollY + 200 >= imageTop && window.scrollY + 200 <= text.offsetTop + text.offsetHeight - image.offsetHeight){
                        if(image.offsetTop >= imageTop){
                            if(window.scrollY - text.offsetTop + 200 > 0){
                                image.style.top = window.scrollY - text.offsetTop + 200 + "px";
                            }
                        }
                    }
                }
            });
        }

    } else {
        repositionNextScroll(hypnoImage, hypnoText);
        repositionNextScroll(quantumImage, quantumText);
        repositionNextScroll(bbaImage, bbaText);
    }
});

function repositionNextScroll(image, text){
    if(windowWidth >= widthSmartphone){
        if(image.offsetTop > text.offsetTop + text.offsetHeight - image.offsetHeight){
            if(text.offsetHeight - image.offsetHeight >= 0){
                image.style.top = text.offsetHeight - image.offsetHeight + "px";
            }
        }
    } else if(image.style.top != "0px") {
        image.style.top = "0px";
    }
}



// SCROLL POUR DIRIGER L'UTILISATEUR VERS LES SECTIONS DU SITE
let headerHeight = header.offsetHeight;

function scrollIntoElement(target){
    let titleTop = 0;
    if(windowWidth >= widthTablet){
        headerHeight = header.offsetHeight;
        titleTop = target.offsetTop - headerHeight;
        console.log(headerHeight);
    } else {
        titleTop = target.offsetTop;
    }
    window.scroll({
        top: titleTop,
        behavior: "smooth"
    });

}

homeButton.forEach(button => {
    button.addEventListener('click', function(){
        scrollIntoElement(topPage);
    });
});

hypnoButton.forEach(button => {
    button.addEventListener('click', function(){
        scrollIntoElement(hypnoTitle);
    });
});

quantumButton.forEach(button => {
    button.addEventListener('click', function(){
        scrollIntoElement(quantumTitle);
    });
});

bbaButton.forEach(button => {
    button.addEventListener('click', function(){
        scrollIntoElement(bbaTitle);
    });
});

contactButton.forEach(button => {
    button.addEventListener('click', function(){
        scrollIntoElement(contactSection);
    });
});



// FAIRE APPARAITRE OU DISPARAITRE LES MENTIONS LEGALES
legalNoticesButton.forEach(button => {
    button.addEventListener('click', function(){
        legalNotices.classList.remove("display-none");
        fetch('mentionslegales.html')
            .then(response => response.text())
            .then((data) => {
                legalNoticesText[0].innerHTML = data;
            });
        scrollIntoElement(legalNotices);
    });
});

legalNoticesClose.forEach(button => {
    button.addEventListener('click', function(){
        legalNotices.classList.add("display-none");
    });
});



// MODIFIER LES VALEURS EN CAS DE CHANGEMENT DE TAILLE DE LA FENÊTRE
window.addEventListener('resize', function() {
    
    windowWidth = window.innerWidth;
    headerHeight = header.offsetHeight;

    main = document.querySelector(".main");
    contact = document.querySelector(".contact");
    servicesTitleTop = document.querySelector(".main__texts h2").offsetTop;
    hypnoTitle = document.querySelector(".hypnosis__text h3");
    quantumTitle = document.querySelector(".quantum__text h3");
    bbaTitle = document.querySelector(".bba__text h3");
    homeButton = document.querySelectorAll('.menu__home-button');
    hypnoButton = document.querySelectorAll('.menu__hypno-button');
    quantumButton = document.querySelectorAll('.menu__quantum-button');
    bbaButton = document.querySelectorAll('.menu__bba-button');
    contactButton = document.querySelectorAll('.menu__contact-button');
    hypnoImage = document.querySelector(".hypnosis__image-circle");
    quantumImage = document.querySelector(".quantum__image-circle");
    bbaImage = document.querySelector(".bba__image-circle");
    hypnoText = document.querySelector(".hypnosis__text");
    quantumText = document.querySelector(".quantum__text");
    bbaText = document.querySelector(".bba__text");
    topPage = document.querySelector(".main__introduction");
    contactSection = document.querySelector(".main__contact");
    menuIcon = document.querySelector(".animated-icon");

    repositionNextScroll(hypnoImage, hypnoText);
    repositionNextScroll(quantumImage, quantumText);
    repositionNextScroll(bbaImage, bbaText);

    hideMenu();
    hideMenuBurger();
    positionFlowers();

});
