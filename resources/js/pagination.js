// pagination.js
document.addEventListener('DOMContentLoaded', function() {
    const prevButton = document.getElementById('prev-page');
    const nextButton = document.getElementById('next-page');
    const pageNumbersContainer = document.getElementById('page-numbers');

    let currentPage = 1;
    const totalPages = parseInt(pageNumbersContainer.getAttribute('data-total-pages'), 10);

    function updatePagination() {
        // Update page numbers
        pageNumbersContainer.textContent = `Page ${currentPage} of ${totalPages}`;

        // Disable buttons based on the current page
        prevButton.disabled = currentPage === 1;
        nextButton.disabled = currentPage === totalPages;
    }

    function loadPage(page) {
        // Update the current page
        currentPage = page;

        // Fetch data for the new page
        fetch(`/touristplaces?page=${currentPage}`)
            .then(response => response.json())
            .then(data => {
                // Update table with new data
                updateTable(data);

                // Update pagination controls
                updatePagination();
            });
    }

    function updateTable(data) {
        // Implement this function to update the table rows based on the fetched data
        // Example: populate the table with rows from the data
    }

    prevButton.addEventListener('click', function() {
        if (currentPage > 1) {
            loadPage(currentPage - 1);
        }
    });

    nextButton.addEventListener('click', function() {
        if (currentPage < totalPages) {
            loadPage(currentPage + 1);
        }
    });

    // Initial pagination setup
    updatePagination();
});
