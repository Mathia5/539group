$(document).ready(function () {

    $("#feedback").each(function(){
        $(this).find('.clear').val("");
    });

    $('#feedback').submit(function () {
        var $this     = $(this),
            $response = $('#response'),
            $feedback = $('#feedback'),
            $mail     = $('#fd-email'),
            testmail  = /^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/,
            hasError  = false;

        $response.find('p').remove();

        if (!testmail.test($mail.val())) {
            $response.html('<p class="error">Please enter a valid email</p>');
            hasError = true;
        }

        if (hasError === false) {

            $response.find('p').remove();

            $.ajax({
                type: "POST",
                dataType: 'json',
                cache: false,
                url: $this.attr('action'),
                data: $this.serialize()
            }).done(function (data) {
                $feedback.remove();
                $response.html('<p>'+data.message+'</p><div id="reload" onclick="location.reload();">Reload</div>');
            }).fail(function() {
                $response.html('<p>An error occurred, please try again</p>');
            })
        }


        return false;
    });
});