document.addEventListener('DOMContentLoaded', function() {
    const navigateLink = document.getElementById('navigate');

    // Remove all existing event listeners by cloning the node
    const newNavigateLink = navigateLink.cloneNode(true);
    navigateLink.parentNode.replaceChild(newNavigateLink, navigateLink);

    // Add a new click event listener
    newNavigateLink.addEventListener('click', function(event) {
        // Prevent default action and stop propagation
        event.preventDefault();
        event.stopImmediatePropagation();

        // Navigate to the previous page in history
        window.history.back();
    });
});
