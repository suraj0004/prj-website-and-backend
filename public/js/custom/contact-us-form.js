$(document).ready(function () {
    // Handle form submission
    $("#contact-form-loader-wrapper").hide();
    $("#contactForm").submit(function (event) {
        // Prevent the default form submission
        event.preventDefault();
        // Show loader
        $("#contact-form-loader-wrapper").show();
        // Get form data
        var formData = $(this).serialize();
        // Submit the form data using AJAX
        $.ajax({
            url: "/contact-us-submit-form", // Replace with your actual API endpoint
            type: "POST",
            data: formData,
            success: function (response) {
                // Handle the successful response
                console.log(response);
                // Hide contact-form-loader-wrapper
                $("#contact-form-loader-wrapper").hide();
            },
            error: function (error) {
                // Handle the error
                console.error(error);
                // Hide contact-form-loader-wrapper
                $("#contact-form-loader-wrapper").hide();
            },
        });
    });
});
