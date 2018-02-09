document.addEventListener("DOMContentLoaded", function() {

  //add onclick handler to open sidemenu
  const hamburger = document.querySelector('.menu-element__hamburger')


  const toggleMenu = function (e) {
     document.querySelector('body').classList.toggle('menu-open')
  }

  hamburger.addEventListener('click', (e) => toggleMenu(e));

});