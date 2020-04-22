const galleryButtons = document.querySelectorAll('.button');
const images = document.querySelectorAll('.gallery__item');

function toggleActiveClass(buttonSelected){
    galleryButtons.forEach(item => {
      item.classList.remove('button--selected');
    })
    buttonSelected.classList.add('button--selected');
}

function toggleImages(dataClass){
    if(dataClass === 'visi'){
        for(let i = 0; i<images.length; i++){
            images[i].style.display = 'block';
        }
    }else{
        for(let i = 0; i<images.length; i++)
            images[i].dataset.class === dataClass ? images[i].style.display = 'block' : images[i].style.display = 'none';
    }
}

for(let i = 0; i < galleryButtons.length; i++){
    galleryButtons[i].addEventListener('click', function(){
        toggleActiveClass(galleryButtons[i]);
        toggleImages(galleryButtons[i].dataset.class);
    });
}
