//Sticky nav

document.addEventListener('DOMContentLoaded', function() {
    // When the event DOMContentLoaded occurs, it is safe to access the DOM

    // When the user scrolls the page, execute myFunction
    window.addEventListener('scroll', myFunctionForSticky);

    // Get the navbar
    var navbar = document.getElementById("sticky-container");

    // Get the offset position of the navbar
    var sticky = navbar.offsetHeight + 130;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunctionForSticky() {
        if (window.pageYOffset > sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
});