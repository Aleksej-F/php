'use strict';

window.onload = ()=>{
    const butt1 = document.querySelectorAll('.container-blok');
    for (let index = 0; index < butt1.length; index++) {
        butt1[index].addEventListener('click', createModals);
    }
}



document.head.insertAdjacentHTML("afterbegin", '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">');

function createModals (e) { // отрисовка окна
    console.log( 'клик')
    e.stopPropagation();
    console.log( e.target.offsetLeft)
    console.log( e.target.offsetTop)
    console.log( e.target.getAttribute('data'))
    let data = e.target.getAttribute('data');
    
    let modals = `
        
            <div class="modals-w">
                <div class="modals">
                    <img src="./big/${data}" alt="" width='600' height='500px'>
                    <div class="closed-captioning" >
                        <i  class="fas fa-times" ></i>
                    </div>
                </div>
                
            </div>
        
        `
    
    document.getElementById('catalog').insertAdjacentHTML("afterbegin", modals);
    
    
   
    let closed = document.querySelector('.closed-captioning');
    let modal = document.querySelector('.modals-w')
    modal.style.top = `${70+e.target.offsetTop}px`  
    modal.style.left = `${70+e.target.offsetLeft}px`
    closed.addEventListener('click', setClosedModals);
    setTimeout(() => {
        modal.classList.add('active')
        modal.style.top = '20px'  
        modal.style.left = `25vw` 
    }, 100)
   
}

const setClosedModals = function() {
    document.querySelector('.modals-w').remove()
}