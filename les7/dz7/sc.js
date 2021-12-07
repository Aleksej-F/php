function send(){
    let reviews = $('#reviews').val();
    let idProduct = +$('#idProduct').val();
    let action = 'отправить';
    let str = 'reviews='+reviews+'&idProduct='+idProduct+'&action='+action;
    $.ajax({
        type: "POST",
        url: "server.php",
        data: str,
        success: function(answer){
           $('body').html(answer);
        }
    });
}

function basket(id){
    let action = 'basket';
    let idUser = 1;
    let str = 'idUser='+idUser+'&idProduct='+id+'&action='+action;
    $.ajax({
        type: "POST",
        url: "server.php",
        data: str,
        success: function(answer){
           $('body').html(answer);
        }
    });
}

function delDasket(id){
    let action = 'delBasket';
    let idUser = 1;
    let str = 'idUser='+idUser+'&idProduct='+id+'&action='+action;
    $.ajax({
        type: "POST",
        url: "server.php",
        data: str,
        success: function(answer){
           // не понял как можно сделать обновление только в корзине, обновляю всю страницу
           $('body').html(answer);
        }
    });
}

function countBasket(id, count){
    let action = 'countBasket';
    let idUser = 1;
    let str = 'idUser='+idUser+'&idProduct='+id+'&action='+action+'&count='+count;
    $.ajax({
        type: "POST",
        url: "server.php",
        data: str,
        success: function(answer){
           // не понял как можно сделать обновление только в корзине, обновляю всю страницу
            $('body').html(answer);
        }
    });
}