document.addEventListener("DOMContentLoaded", function() {

  //add onclick handler to open sidemenu
  const hamburgerButtons = document.querySelectorAll('.hamburger')


  const toggleMenu = function () {
     document.querySelector('body').classList.toggle('menu-open')
  }

  hamburgerButtons.forEach(button => button.addEventListener('click', () => toggleMenu()));



  //add on-scroll class to topbar

  const toggleFloatingBar = function() {
    console.log('dupa')
    window.pageYOffset > 50
    ? document.querySelector('.flexo-topbar').classList.add('floating')
      : document.querySelector('.flexo-topbar').classList.remove('floating')
  }

  document.addEventListener('scroll', () => toggleFloatingBar())

  });
