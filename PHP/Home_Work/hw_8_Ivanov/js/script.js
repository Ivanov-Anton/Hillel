
// удаление всего списка товаров из корзины
var delCart = function() {
    document.cookie = 'PHPSESSID' + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    location.reload(true);
}

// toggle для кнопки карзины
function openCloseUserCart() {
    var x = document.getElementById('shopCart');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}
