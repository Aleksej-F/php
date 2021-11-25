'use strict';

window.onload = ()=>{
    const butt1 = document.querySelectorAll('.container-blok');
    console.log( 'fggggg')
    console.log( butt1)
    for (let index = 0; index < butt1.length; index++) {
        butt1[index].addEventListener('click', createModals);
        
    }
    
}

     //


document.head.insertAdjacentHTML("afterbegin", '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">');

function createModals (e) { // отрисовка окна
    console.log( 'клик')
    e.stopPropagation();
    console.log( e.target.getAttribute('data'))
    let data = e.target.getAttribute('data');
    
    let modals = `
        <div class="modals-win">
            <div class="modals-w">
                <div class="modals">
                    <img src="./big/${data}" alt="" width='600'>
                    <div class="closed-captioning" >
                        <i  class="fas fa-times" ></i>
                    </div>
                </div>
                
            </div>
        </div>
        `
    
    document.getElementById('catalog').insertAdjacentHTML("afterbegin", modals);

    let closed = document.querySelector('.closed-captioning');
          
    closed.addEventListener('click', setClosedModals);
    setTimeout(() => {
        document.querySelector('.modals-w').classList.add('active')
    }, 100)
    //document.querySelector('.modals-w').classList.add('active');
}

const setClosedModals = function() {
    document.querySelector('.modals-win').remove()
}