document.addEventListener("DOMContentLoaded", function() {

  //add onclick handler to open sidemenu
  const hamburgerButtons = document.querySelectorAll('.hamburger')

  const modalMenuElements = document.querySelectorAll('.flexo-modal__menu-element')

  hamburgerButtons.forEach(button => button.addEventListener('click', () => document.querySelector('body').classList.toggle('menu-open')))


  modalMenuElements.forEach(element => element.addEventListener('click', () => document.querySelector('body').classList.remove('menu-open')))

  //add on-scroll class to topbar

  const toggleFloatingBar = function() {
    if(window.pageYOffset > 50) {
      document.querySelector('.flexo-topbar').classList.add('floating');
      document.querySelector('.hamburger-icon').classList.add('floating')
    } else {
      document.querySelector('.flexo-topbar').classList.remove('floating')
      document.querySelector('.hamburger-icon').classList.remove('floating')
    }

  }

  document.addEventListener('scroll', () => toggleFloatingBar())


  let languageDropdown = document.querySelector('#language-dropdown')

  let languageDropdownButton = document.querySelector('#language-dropdown-button')

  languageDropdownButton.addEventListener('click', () => languageDropdown.classList.toggle('open'))

  zenscroll.setup(null, 80)
  });


