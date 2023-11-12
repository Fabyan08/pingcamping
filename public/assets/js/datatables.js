$(document).ready(function() {
    new DataTable('#myTable', {
        responsive: true,
        rowReorder: {
            selector: 'td:nth-child(2)'
        }
    });
});
