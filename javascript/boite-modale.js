(function(){
console.log("vive javascript")
let boite__modale = document.querySelector(".boite__modale");
let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');
console.log(cours__desc__ouvrir.length);
for (const bout of cours__desc__ouvrir){
    console.log(bout.tagName)
    bout.addEventListener('mousedown',function(){
        console.log(this.parentNode.parentNode.classNamem)
        
        boite__modale.classList.add('ouvrir')
        boite__modale.classList.remove('fermeture')
        console.log(boite__modale.classList)
        
    })
}
})()