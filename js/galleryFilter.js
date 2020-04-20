const listItems = document.querySelectorAll('.button');
const allimages = document.querySelectorAll('.gallery__item');

function toggleActiveClass(buttonSelected){
    listItems.forEach(item => {
      item.classList.remove('button--selected');
    })
    buttonSelected.classList.add('button--selected');
}

function toggleimages(dataClass){
    if(dataClass === 'visi'){
        for(let i = 0; i<allimages.length; i++){
            allimages[i].style.display = 'block';
            allimages[i].style.animationDelay = '2s';
        }
    }else{
        for(let i = 0; i<allimages.length; i++)
            allimages[i].dataset.class === dataClass ? allimages[i].style.display = 'block' : allimages[i].style.display = 'none';
    }
}

for(let i = 0; i < listItems.length; i++){
    listItems[i].addEventListener('click', function(){
        toggleActiveClass(listItems[i]);
        toggleimages(listItems[i].dataset.class);
    });
}
