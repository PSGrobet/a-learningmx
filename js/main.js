let navbar = document.querySelector('#navbar-top');
let content = document.querySelector('#content');
let sticky = navbar.offsetTop;
let collapseBar = document.querySelector('#myNavbar');
let altura = document.querySelector('#titulo').offsetHeight;


function stickyNav() {
   
    if (window.pageYOffset > altura) {
        navbar.classList.add('sticky');
        content.classList.add('content-stickyNav')
        collapseBar.classList.remove('in');
    } else {
        navbar.classList.remove('sticky')
        content.classList.remove('content-stickyNav')
    }
    
    
}

window.onscroll = function() {stickyNav()};