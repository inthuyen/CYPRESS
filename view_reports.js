$(document).ready(function () {
    $.ajax({
        url: 'allReports.php',
        type: 'GET',
        success: function (response) {
            $('#reports').html(response);
        },
        error: function () {
            $('#reports').html('Error fetching reports.');
        }
    });
});
