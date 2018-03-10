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

  //circle start
  let pointers = document.querySelectorAll('#e-pointer');
  let length = Math.PI * 2 * 100;

  const update = function(value, timePercent) {
    const offset = - length - length * value / (timePercent);
    pointers.forEach(pointer => pointer.style.transform = `rotate(${360 * value / (timePercent)}deg)`);
  };

  var options = {
    useEasing: true,
    useGrouping: true,
    separator: '',
    decimal: 'f',
  };

  var firstCount = new CountUp('first-circle', 0, 2500, 0, 1.5, options);
  var secondCount = new CountUp('second-circle', 0, 2000000, 0, 1.5, options);
  var thirdCount = new CountUp('third-circle', 0, 500, 0, 1.5, options);

  const numbers = document.querySelector("#about")

  const updateCounters = function () {
    var numbersVisible = numbers.getBoundingClientRect().top <= 0.5*(window.innerHeight)
    if (numbersVisible){
      firstCount.start();
      secondCount.start();
      thirdCount.start();
      update(10,10);
      document.removeEventListener('scroll', updateCounters);
    }
  }

  document.addEventListener('scroll', updateCounters);

  setInterval(() => document.querySelector('.flexo-thankyou').classList.add('hidden'), 3000);
});


