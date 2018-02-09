document.addEventListener("DOMContentLoaded", function() {

  //add onclick handler to open sidemenu
  const hamburgerButtons = document.querySelectorAll('.hamburger')


  const toggleMenu = function () {
     document.querySelector('body').classList.toggle('menu-open')
  }

  hamburgerButtons.forEach(button => button.addEventListener('click', () => toggleMenu()));

  });
