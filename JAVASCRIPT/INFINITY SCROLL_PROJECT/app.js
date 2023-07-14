
//let URL = 'https://www.freepik.com/free-photos-vectors/avatar/';

//initial images
function loadImages(images = 10){
    let i =0;
    while(i < images){

randNum = Math.floor(Math.random() * 10);
let container = document.querySelector('.container');
let img = document.createElement('img');
img.src = `images/${randNum}.jpg`;

container.appendChild(img);
i++;
    }

}

loadImages();


//loaded on scroll

window.addEventListener('scroll', function(){

    if(this.window.scrollY + window.innerHeight >= this.document.documentElement.scrollHeight){
        loadImages();
    }    
    //console.log(window.scrollY);

})