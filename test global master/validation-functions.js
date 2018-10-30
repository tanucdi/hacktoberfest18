$(document).ready(function() {
    $('#test-form').bootstrapValidator({
        
        fields: {
            firstName: {
             message: 'The first name is not valid',
                validators: {
                    notEmpty: {
                        message: '*name required'
                    },
                    stringLength: {
                        min: 1,
                        max: 30,
                        message: '*name must be more than 1 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[A-z]+$/,
                        message: '*name can only accept alphabetical input'
                    },
                }
            },

            email: {
                validators: {
                    notEmpty: {
                        message: '*email address required'
                    },
                    emailAddress: {
                        message: '*email address is not a valid'
                    }
                }
            },
 

        }
    })
    .on('success.form.bv', function(e) {
        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        var url = 'https://script.google.com/macros/s/AKfycbwG_jRvY0BBCA_RNYXTVSL1ozc2a6WefYZW0iTqlo4vEvel7CIL/exec';
        var redirectUrl = 'success-page.html';
        // show the loading 
        $('#postForm').prepend($('<span></span>').addClass('glyphicon glyphicon-refresh glyphicon-refresh-animate'));
        var jqxhr = $.post(url, $form.serialize(), function(data) {
            console.log("Success! Data: " + data.statusText);
            $(location).attr('href',redirectUrl);
        })
            .fail(function(data) {
                console.warn("Error! Data: " + data.statusText);
                // HACK - check if browser is Safari - and redirect even if fail b/c we know the form submits.
                if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
                    //alert("Browser is Safari -- we get an error, but the form still submits -- continue.");
                    $(location).attr('href',redirectUrl);                
                }
            });
    });
});