
//Footer
window.addEventListener('scroll', function() {
    const scrollPosition = window.pageYOffset;
    const pageHeight = document.body.offsetHeight;
    const windowHeight = window.innerHeight;

    const footer = document.querySelector('footer');

    if (scrollPosition > (pageHeight - windowHeight) / 2) {
        footer.style.opacity = '1';
    } else {
        footer.style.opacity = '0';
    }
});
