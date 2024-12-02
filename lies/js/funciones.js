$(document).ready(function() {
    // Function to handle click on "Historia" button
    $('nav ul li a[href="historia.html"]').on('click', function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        window.location.href = 'html/historia.html'; // Redirect to historia.html
    });
});
