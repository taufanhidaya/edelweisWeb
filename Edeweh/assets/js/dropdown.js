document.querySelectorAll('.nav-item.dropdown').forEach(function (dropdown) {
    dropdown.addEventListener('mouseover', function () {
      const menu = dropdown.querySelector('.dropdown-menu');
      menu.classList.add('show');
    });
  
    dropdown.addEventListener('mouseleave', function () {
      const menu = dropdown.querySelector('.dropdown-menu');
      menu.classList.remove('show');
    });
  });
  
