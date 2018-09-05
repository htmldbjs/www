$(document).ready(function () {
    initializePage();
});
function initializePage() {

    // Materialize Init.
    $(".scrollspy").scrollSpy({ "scrollOffset": 200 });
    $(".button-collapse").sideNav();

    checkScroll();

    $(window).scroll(function(){
        checkScroll();
    });

    $('#navbarFixed').css('transform', 'translateY(0px)');
    $('#navbarFixed').css('position', 'fixed');

    fixDocumentationElements();

}
function isScrolledIntoView(element) {
    var elementTop = element.getBoundingClientRect().top;
    var elementBottom = element.getBoundingClientRect().bottom;

    var isVisible = (elementTop
            <= (window.innerHeight - (window.innerHeight / 2))) 
            && (elementBottom >= (window.innerHeight / 2));

    return isVisible;
}
function checkScroll() {
    for (let i = 0; i < $(".wrapper > section").length; i++) {
        let element = $(".wrapper > section")[i];
        let linkerID = element.getAttribute("data-linker");
        let linker = ("#" + linkerID);

        if (isScrolledIntoView(element)) {
            if (!$(linker).hasClass("active")) {
                $(linker).click();
            }
        } else {
            if ($(linker).hasClass("active")) {
                $(linker).click();
            }
        }
    } // for (let i = 0; i < $('.wrapper > section').length - 1; i++) {
}
function fixDocumentationElements() {

    // Make table striped
    var tables = document.getElementsByTagName('table');
    Array.from(tables).forEach(function(table) {
        table.classList.add('striped');
    });

    // Replace <h4> with <h5>
    var headingElements = document.getElementsByTagName('h4');
    
    Array.from(headingElements).forEach(function(el) {
        var newHeading = document.createElement('h5');
        newHeading.innerHTML = el.innerHTML;

        el.parentNode.replaceChild(newHeading, el);
    });

    // Replace <h3> with <h2>
    var headingElements = document.getElementsByTagName('h3');
    
    Array.from(headingElements).forEach(function(el) {
        var newHeading = document.createElement('h2');
        newHeading.innerHTML = el.innerHTML;

        el.parentNode.replaceChild(newHeading, el);
    });
}