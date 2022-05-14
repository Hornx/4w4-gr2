(function(){
   /**
  * Carrousel animé 
  * Ce carrousel utilise les images d'une galerie d'images
  * Le conteneur de la galerie est accessible à partir de la classe «.galerie»
  * Le conteneur du carrousel est accessible à partir de la classe «.boite__carrousel»
  * 
  *  */ 
    console.log("vive la boîte carousel");
   
    console.log("vive la boîte carousel");
/* Le conteneur de la gallerie */
 let boite__carrousel = document.querySelector(".boite__carrousel")
 /* le conteneur des bouton de navigation du carrousel */
 let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation")
 /* le bouton de fermeture du carrousel */
 let boite__carrousel__fermeture = document.querySelector(".boite__carrousel__fermeture")
 /* Conteneur d'image du carrousel */
 let boite__carrousel__img = document.querySelector(".boite__carrousel__img")
 /* La collection des images de la galerie */
 let galerie__img = document.querySelectorAll('.galerie img');
 // console.log(galerie__img.length);   
   
    boite__carrousel__fermeture.addEventListener('mousedown', function(){
       boite__carrousel.classList.remove('ouvrir')
   
    })
   
    let elmImg = document.createElement('img')
    boite__carrousel.append(elmImg)
    let index = 0
    for (const img of galerie__img) {
        let bouton = document.createElement('button')
        bouton.dataset.index = index++
        boite__carrousel__navigation.append(bouton)
        bouton.addEventListener('mousedown', function(){
           elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
        })
   
        console.log(img.tagName)
        img.addEventListener('mousedown', function(){
            console.log(this.getAttribute('src'))
        
            boite__carrousel.classList.add('ouvrir')
            console.log(boite__carrousel.classList)
           elmImg.setAttribute('src', this.getAttribute('src'))
   
        })
    }
   })()