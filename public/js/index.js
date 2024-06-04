// JavaScript code
document.addEventListener('DOMContentLoaded', function () {
    var mainContent = document.querySelector('.main-content');
    window.addEventListener('scroll', function () {
        if (isInViewport(mainContent)) {
            mainContent.classList.add('show');
        }
    });
});

function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}
