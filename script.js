document.addEventListener('DOMContentLoaded', function () {
    let menuIcon = document.querySelector('#menu-icon');  // Target the menu icon
    let navbar = document.querySelector('.navbar');  // Target the navbar
    let sections = document.querySelectorAll('section');  // All sections
    let navLinks = document.querySelectorAll('header nav a');  // All nav links

    // Toggle the menu and icon
    menuIcon.onclick = (e) => {
        e.stopPropagation();  // Prevent event from bubbling up
        menuIcon.classList.toggle('bx-x');  // Toggles the 'bx-x' class
        navbar.classList.toggle('active');  // Toggles the 'active' class for the navbar
    };

    // Close the menu when clicking outside
    document.addEventListener('click', function (e) {
        if (!navbar.contains(e.target) && !menuIcon.contains(e.target)) {
            menuIcon.classList.remove('bx-x');  // Remove 'bx-x' class from the menu icon
            navbar.classList.remove('active');  // Remove 'active' class from the navbar
        }
    });

    // Scroll behavior to highlight active section
    window.onscroll = () => {
        sections.forEach(sec => {
            let top = window.scrollY;
            let offset = sec.offsetTop - 150;
            let height = sec.offsetHeight;
            let id = sec.getAttribute('id');

            if (top >= offset && top < offset + height) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    document.querySelector('header nav a[href*="' + id + '"]').classList.add('active');
                });
            }
        });
    };
});
