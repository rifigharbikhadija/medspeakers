document.addEventListener('DOMContentLoaded', function() {
    var burgerImage = document.querySelector('.burger');
    var menuList = document.querySelector('.menu');

    burgerImage.addEventListener('click', function() {
        if (menuList.classList.contains('open')) {
            menuList.classList.remove('open');
        } else {
            menuList.classList.add('open');
        }
    });
});